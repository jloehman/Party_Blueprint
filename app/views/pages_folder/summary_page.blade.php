@extends('layouts.user_master')
@section('content')

<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3><strong>Summary: {{ $party->party_name }}</strong></h3>
          </div>
        </div>
      </div>
    </section>
    <!--Side Bar-->
          <div class="col-sm-4">
            <h3>Side Bar</h3>
            <ul class="list-unstyled side-links">
                <li><a href="{{ action('GuestController@index', $party->id) }}">Guests to Invite</a></li>
                <li><a href="{{ action('PartyController@index', $party->id) }}">Planning List</a></li>
                <li><a href="{{ action('BudgetItemController@index', $party->id) }}">Budget Items</a></li>
                <li><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
              </ul>
            <br/>
          </div>
        </div><!--End Row-->
<!--Content-->      
    <section id="content2" class="section">
      <div class="container">

        <div class="row">
          
          <!--Column One-->
          <div class="col-sm-8">
          	<div class="specific_party">
	          	<div class="table-responsive">
	          		<!--Party specifics-->
					<table class="table table-bordered tabel-striped">
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
			<div class="guest_view">
				<div class="table-responsive">
					<!--Guest table-->
			  		<table class="table table-bordered table-striped">
			  			<tr>
					  		<th class="text-center">Name</th>
					  		<th class="text-center">Email</th>
					  		<th class="text-center">Phone</th>					
					  		<th class="text-center"><center>RSVP</center></th>
					  		<th class="text-center"><center>+1</center></th>
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
						  			<td class="text-center">{{{ $guest->comment }}}
						  			</td>
					  			</tr>
							@endforeach
						@endif
			  		</table>
				</div>
			</div>
			<div class="todo_view">
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
                        <!-- this needs to be submitted -->
                        <!--this doesn't have a closing div and missing button tags-->
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

<!-- <h1>Summary Page: --> <!--specific party name here--><!-- </h1> -->
<!-- <div class="party_specs">
	<h2>Party Details</h2>
	<div class="party_specs_row table-responsive">
		<table class="table table-bordered tabel-striped">
			<tr>
				<th>Party Name</th>
				<th>Location</th>
				<th>Event Date</th>
				<th>Event Time</th>
				<th>Set Budget</th> -->

			<!-- </tr>
			<tr>
				<td>{{{$party->party_name}}}</td>
				<td>{{{$party->location}}}</td>
				<td>{{{$party->event_date}}}</td>
				<td>{{{$party->start_time}}}</td> -->
				<!-- These coincide with the budget information -->
				<!-- <td>${{{$party->budget}}}</td>
			</tr>
		</table>
	</div>
</div> -->

<!-- <div class="guest_view">
	<div class="table-responsive">
  		<table class="table table-bordered table-striped">
  			<tr>
		  		<th>Name</th>
		  		<th>Email</th>
		  		<th>Phone</th>
		  		<th><center>+1</center></th>
		  		<th><center>RSVP</center></th>
		  		<th>Notes</th>
  			</tr>
			@if(count($guests) > 0)
				@foreach($guests as $guest)
		  			<tr>
			  			<td>{{{ $guest->name }}}</td>
			  			<td>{{{ $guest->email }}}</td>
			  			<td>{{{ $guest->phone }}}</td>
			  			<td>
			  				<div class="btn-group">
			  					<input type="checkbox"
			  						class="btn btn-success plus-btn @if($guest->plus) active @endif"
			  						data-value="1" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-plus"></span>
			  					</input>
			  					<input type="checkbox"
			  						class="btn btn-info plus-btn @if(!$guest->plus) active @endif"
			  						data-value="0" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-remove"></span>
			  					</input>
			  				</div>
			  			</td>
			  			<td>
			  				<div class="btn-group">
			  					<input type="checkbox"
			  						class="btn btn-success is_attending-btn @if($guest->is_attending) active @endif"
			  						data-value="1" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-ok"></span>
			  					</input>

			  						<input type="checkbox"
			  						class="btn btn-info is_attending-btn @if(!$guest->is_attending) active @endif"
			  						data-value="0" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-remove"></span>
			  					</input>
			  		<!-- 	</td>
			  			<td>{{{ $guest->comment }}}
			  			</td>
		  			</tr>
				@endforeach
			@endif
  		</table>
	</div>
</div>

<div class="todo_view">
	<div class="table-responsive"> -->
	  <!-- <table class="table table-bordered table-striped">
	  	<tr>
	  		<th>Name</th>
	  		<th>Done By</th>
	  		<th>Completed</th>
	  	</tr>
			@if(count($todos) > 0)
				@foreach($todos as $todo)
				  	<tr>
				  		<td>{{{ $todo->name }}}</td>
				  		<td>{{{ $todo->done_by }}}</td>
				  		<td></td>
				  	</tr>
				@endforeach
			@endif
	  </table>
	</div>
</div> -->
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

    // console.log(complete)

    $(this).addClass('active');

    $.ajax({
      url: '/updateTodo',
      type: "POST",
      data: {
        id: todoid,
        is_complete: complete // new code
      },
      dataType: 'json'
    });
  });
</script>



@stop

