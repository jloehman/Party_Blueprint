@extends('layouts.user_master')
@section('content')
<h1>To Do List Page</h1>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
  	<tr>
  		<th>Item</th>
  		<th>Quantity</th>
  		<th>Created At</th>
  		<th>Updated At</th>
  		<th>Edit</th>
  		<th>Delete</th>
  	</tr>
@foreach($todos as $todo)
  	<tr>
  		<td>{{{ $todo }}}</td>
  		<td>{{{ $todo }}}</td>
  		<td>{{{ $todo->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
  		<td>{{{ $todo->updated_at->format('l, F jS Y @ h:i:s A') }}}</td>
  		<!--Need to ask about editing and updating in the same line here-->
  		<td><a href="{{ action('PartyController@edit', $todo->id) }}" class="btn btn-default btn-sm">Edit</a></td>
  		<td><a href="{{ action('PartyController@destroy', $todo->id) }}" class="btn btn-default btn-sm">Delete</a></td>
  	</tr>
@endforeach
  </table>
</div>

@stop