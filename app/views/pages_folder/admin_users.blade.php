@extends('layouts.admin_master')

@section('content') 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>

  <body>
  			<h1>Users</h1>
			<div class="table-responsive">
	  			<table class="table table-bordered table-striped">
		  	<tr>
		  		<th>First Name</th>
		  		<th>Last Name</th>
		  		<th>Email</th>
		  		<th>Creation Date</th>
		  	</tr>
			@foreach($users as $user)
			@if($user->is_admin == false)
		  	<tr>
		  		<td>{{{ $user->first_name }}}</td>
		  		<td>{{{ $user->last_name}}}</td>
		  		<td>{{{ $user->email}}}</td>
		  		<td>{{{ $user->created_at}}}</td>
		  		<td>{{ Form::open(array('action' => array('AdminController@destroy', $user->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</td>

		  	</tr>
		  	@endif
			@endforeach
		  </table>
		</div>

@stop