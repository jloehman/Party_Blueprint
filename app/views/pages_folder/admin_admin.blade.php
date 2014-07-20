@extends('layouts.admin_master')

@section('content') 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>

  <body>
  <div class="container">
  	<div class="row">
  		<div class="col-md-6">

		  	<h1>Create a New Admin</h1>

		    {{ Form::open(array('action' => 'AdminController@store')) }}
		    {{ Form::label('first_name', 'First Name') }}
		    {{ Form::text('first_name', null, array('class' =>'form-control')) }}
		    <br>
		    
		    {{ Form::label('last_name', 'Last Name') }}
		    {{ Form::text('last_name', null, array('class' =>'form-control')) }}
		    <br>
		    
		    {{ Form::label('email', 'Email') }}
		    {{ Form::text('email', null, array('class' =>'form-control')) }}
		    <br>
		    {{ Form::label('password', 'Password')}}
		    {{ Form::password('password', array('class' => 'form-control'))}}
		    <br>
		    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
		        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
		    <br> -->
		    <!-- {{ Form::hidden('is_admin', null, array('value'=>true)) }} -->
		    <input type="hidden" name="is_admin" value="1">
		    <button type="Submit" class="btn btn-default">Register</button>

		    {{ Form::close()}}
		</div>
		<div class="col-md-6">
			<h1>Existing Admins</h1>
			<div class="table-responsive">
	  			<table class="table table-bordered table-striped">
		  	<tr>
		  		<th>First Name</th>
		  		<th>Last Name</th>
		  		<th>Email</th>
		  	</tr>
			@foreach($users as $user)
			@if($user->is_admin == true)
		  	<tr>
		  		<td>{{{ $user->first_name }}}</td>
		  		<td>{{{ $user->last_name}}}</td>
		  		<td>{{{ $user->email}}}</td>
		  		<td>{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</td>

		  	</tr>
			@endif
			@endforeach
		  </table>
		</div>


		</div>
	</div>
</div>
</body>
</html>






@stop