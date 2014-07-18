@extends('layouts.home_master')

@section('content') 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>

  <body>

    {{ Form::open(array('action' => 'UserController@store')) }}
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', null, array('class' =>'form-control')) }}
    <br>
    
    {{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name', null, array('class' =>'form-control')) }}
    <br>
    
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, array('class' =>'form-control')) }}
    <br>
    {{ Form::label('password', 'Password:')}}
        {{ Form::password('password', array('class' => 'form-control'))}}
    <br>
    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
    <br> -->
    <button type="Submit" class="btn btn-default">Register</button>

    {{ Form::close()}}


 </body>
</html>

@stop