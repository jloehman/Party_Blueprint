@extends('layouts.user_master')
@section('content')
<h1>To Do List Page</h1>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
  	<tr>
  		<th>Name</th>
  		<th>Done By</th>
  		<th>Completed</th>
  		<th>Actions</th>
  	</tr>
@foreach($todos as $todo)
  	<tr>
  		<td>{{{ $todo->name }}}</td>
  		<td>{{{ $todo->done_by }}}</td>
  		<!-- this needs to be a checkbox -->
  		<td>
  			<!-- this needs to be submitted -->
  			{{ Form::checkbox('is_complete')}}

  		</td>
  		<td><a href="{{ action('PartyController@destroy', $todo->id) }}" class="btn btn-default btn-sm">Delete</a></td>
  	</tr>
@endforeach
  </table>
</div>


	{{ Form::submit('Create A New Item') }}



	<div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('done_by', 'Done By') }}<br>
		{{ Form::text('done_by', null, array('placeholder' => 'yyyy-mm-dd')) }}<br>
		{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
  		{{ Form::submit('Update') }}
  	{{ Form::close() }}

@stop
