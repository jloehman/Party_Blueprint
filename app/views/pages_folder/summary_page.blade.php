@extends('layouts.user_master')
@section('content')
<h1>Summary Page: <!--specific party name here--></h1>
<div class="party_specs">
	<h2>Party Details</h2>
	<div class="party_specs_row table-responsive">
		<table class="table table-bordered tabel-striped">
			<tr>
				<th>Party Name</th>
				<th>Location</th>
				<th>Event Date</th>
				<th>Event Time</th>
				<th>Set Budget</th>

			</tr>
			<tr>
				<td>{{{$party->party_name}}}</td>
				<td>{{{$party->location}}}</td>
				<td>{{{$party->event_date}}}</td>
				<td>{{{$party->start_time}}}</td>
				<!-- These coincide with the budget information -->
				<td>${{{$party->budget}}}</td>
			</tr>
		</table>
	</div>
</div>

<div class="guest_view">
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
			  					<button type="button"
			  						class="btn btn-success plus-btn @if($guest->plus) active @endif"
			  						data-value="1" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-plus"></span>
			  					</button>
			  					<button type="button"
			  						class="btn btn-info plus-btn @if(!$guest->plus) active @endif"
			  						data-value="0" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-remove"></span>
			  					</button>
			  				</div>
			  			</td>
			  			<td>
			  				<div class="btn-group">
			  					<button type="button"
			  						class="btn btn-success is_attending-btn @if($guest->is_attending) active @endif"
			  						data-value="1" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-ok"></span>

			  						<button type="button"
			  						class="btn btn-info is_attending-btn @if(!$guest->is_attending) active @endif"
			  						data-value="0" data-guestid="{{{ $guest->id }}}">

			  						<span class="glyphicon glyphicon-remove"></span>

			  			</td>
			  			<td>{{{ $guest->comment }}}
			  			</td>
		  			</tr>
				@endforeach
			@endif
  		</table>
	</div>
</div>

<div class="todo_view">
	<div class="table-responsive">
	  <table class="table table-bordered table-striped">
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
</div>
@stop

@section('bottomscript')

<script type="text/javascript">

	$(".plus-btn").on('click', function() {
		var plusValue = $(this).data('value');
		var guestId = $(this).data('guestid');

		$(".plus-btn[data-value=" + plusValue + "]").addClass('active');
		$(".plus-btn[data-value!=" + plusValue + "]").removeClass('active');

		$.ajax({
			url: '/plusOne',
			type: "POST",
			data: {
				value: plusValue,
				id: guestId
			},
			dataType: 'json'
		});
	});

	$(".is_attending-btn").on('click', function() {
		var attendingValue = $(this).data('value');
		var guestId = $(this).data('guestid');

		$(".is_attending-btn[data-value=" + attendingValue + "]").addClass('active');
		$(".is_attending-btn[data-value!=" + attendingValue + "]").removeClass('active');

		$.ajax({
			url: '/ajax-temp',
			type: "POST",
			data: {
				value: attendingValue,
				id: guestId
			},
			dataType: 'json'
		});
	});
</script>



@stop

