@extends('layouts.user_master')
@section('content')

<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 style="font-size:60px;">{{ $party->party_name }}</h3>
          </div>
        </div>
      </div>
    </section>
    <!--Side Bar-->
    <section id="content2" class="section">
      <div class="container">
        <!--Side Bar-->
        <div class="row">
        	<div class="col-sm-2 fixed">
	            <h3>Menu</h3>
	            <ul class="list-unstyled side-links">
	                <li style="font-size:20px"><a href="{{ action('GuestController@index', $party->id) }}">Guests</a></li>
	                <li style="font-size:20px"><a href="{{ action('PartyController@index', $party->id) }}">Checklist</a></li>
	                <li style="font-size:20px"><a href="{{ action('BudgetItemController@index', $party->id) }}">Budget</a></li>
	                <li style="font-size:20px"><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
	            </ul>
        	</div>

		<!--End Row-->
		<!--Content-->

          <!--Column One-->
          <div class="col-sm-10">
          	<div class="specific_party">
          		<h3 class="text-center">Summary</h3>
	          	<div class="table-responsive">
          		<!--Party specifics-->
					<table class="table table-bordered table-striped">
						<tr>
							<th class="text-center">Party Name</th>
							<th class="text-center">Location</th>
							<th class="text-center">Event Date</th>
							<th class="text-center">Event Time</th>
							<th class="text-center">Set Budget</th>
						</tr>
						<tr>
							<td class="text-center">{{{$party->party_name}}}</td>
							<td class="text-center">{{{$party->location}}}</td>
							<td class="text-center">{{{$party->event_date}}}</td>
							<td class="text-center">{{{$party->start_time}}}</td>
							<!-- These coincide with the budget information -->
							<td class="text-center">${{{$party->budget}}}</td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<div class="guest_view">
				<h3 class="text-center">Guests</h3>
				<div class="table-responsive">
					<!--Guest table-->
			  		<table class="table table-bordered table-striped">
			  			<tr>
					  		<th class="text-center">Name</th>
					  		<th class="text-center">Email</th>
					  		<th class="text-center">Phone</th>
					  		<th class="text-center">RSVP</th>
					  		<th class="text-center">+1</th>
					  		<th class="text-center">Notes</th>
			  			</tr>
						@if(count($guests) > 0)
							@foreach($guests as $guest)
					  			<tr>
						  			<td class="text-center">{{{ $guest->name }}}</td>
						  			<td class="text-center">{{{ $guest->email }}}</td>
						  			<td class="text-center">{{{ $guest->phone }}}</td>
						  			<td class="text-center">
                      					<input type="checkbox" class="is_attending_check" data-guestid="{{{ $guest->id }}}" @if ($guest->is_attending) checked @endif>
                    				</td>
                    				<td class="text-center">
                      					<input type="checkbox" class="plus_check" data-guestid="{{{ $guest->id }}}" @if ($guest->plus) checked @endif>
                    				</td>
						  			<td class="text-center">{{{ $guest->comment }}}</td>
					  			</tr>
							@endforeach
						@endif
			  		</table>
				</div>
			</div>
			<br>
			<div class="todo_view">
				<h3 class="text-center">Checklist</h3>
				<!--Todo View-->
				<div class="table-responsive">
				  <table class="table table-bordered table-striped">
				  	<tr>
				  		<th class="text-center">Name</th>
				  		<th class="text-center">Done By</th>
				  		<th class="text-center">Completed</th>
				  	</tr>
						@if(count($todos) > 0)
							@foreach($todos as $todo)
							  	<tr>
							  		<td class="text-center">{{{ $todo->name }}}</td>
							  		<td class="text-center">{{{ $todo->done_by }}}</td>
							  		<td class="text-center">
				                         <input type="checkbox" class="is_complete_check" data-todoid="{{{ $todo->id }}}" @if ($todo->is_complete) checked="checked" data-complete="1" @else data-complete="0" @endif> <!-- new code -->
				                    </td>
							  	</tr>
							@endforeach
						@endif
				  </table>
				</div>
			</div>
		</div><!--End Column One-->
    </div>
</section>

@stop

@section('bottomscript')

<script type="text/javascript">

  $(".plus_check").on('change', function() {
    var guestId = $(this).data('guestid');
    var isPlus = $(this).is(":checked");

    $(this).addClass('active');

    $.ajax({
      url: '/plusOne',
      type: "POST",
      data: {
        value: isPlus,
        id: guestId
      },
      dataType: 'json'
    });
  });

  $(".is_attending_check").on('change', function() {
    var guestId = $(this).data('guestid');
    var isAttending = $(this).is(":checked");

    $.ajax({
      url: '/ajax-temp',
      type: "POST",
      data: {
        value: isAttending,
        id: guestId
      },
      dataType: 'json'
    });
  });

  $(".is_complete_check").on('change', function() {
    var todoid = $(this).data('todoid');
    var complete = $(this).data('complete'); // grab complete

    (complete == 1) ? $(this).data('complete', 0) : $(this).data('complete', 1); // new line


    $(this).addClass('active');

    $.ajax({
      url: '/updateTodo',
      type: "POST",
      data: {
        id: todoid,
        is_complete: complete
      },
      dataType: 'json'
    });
  });
</script>



@stop

