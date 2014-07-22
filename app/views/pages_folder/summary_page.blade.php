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
				<th>Current Budget</th>
			</tr>
			<tr>
				<td>{{{$party->party_name}}}</td>
				<td>{{{$party->location}}}</td>
				<td>{{{$party->event_date}}}</td>
				<td>{{{$party->start_time}}}</td>
				<!-- These coincide with the budget information -->
				<td>{{{$party->start_time}}}</td>
				<td>{{{$party->start_time}}}</td>
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
		  		<th>RSVP</th>
		  		<th>Notes</th>
  			</tr>

@if(strlen($guests) > 0)
@foreach($guests as $guest)
  			<tr>
	  			<td>{{{ $guest->name }}}</td>
	  			<td>{{{ $guest->email }}}</td>
	  			<td>{{{ $guest->phone }}}</td>
	  			<td>
	  				<!-- this needs to be submitted -->
	  				{{ Form::checkbox('is_attending')}}
	  			</td>
	  			<td>{{{ $guest->comment }}}</td>
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

@if(strlen($todos) > 0)
@foreach($todos as $todo)
	  	<tr>
	  		<td>{{{ $todo->name }}}</td>
	  		<td>{{{ $todo->done_by }}}</td>
	  		<!-- this needs to be a checkbox -->
	  		<td>
	  			<!-- this needs to be submitted -->
	  			{{ Form::checkbox('is_complete')}}
	  		</td>
	  	</tr>
@endforeach
@endif
	  </table>
	</div>
</div>
@stop