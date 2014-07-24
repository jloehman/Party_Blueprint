@extends('layouts.home_master')

@section('content')

  <body>
<div class="form">
    {{ Form::open(array('action' => 'UserController@store')) }}
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', Input::old('first_name'), array('placeholder'=>'First Name','class' =>'form-control')) }}
    <br>
    
    {{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Last Name', 'class' =>'form-control')) }}
    <br>
    
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class' =>'form-control')) }}
    <br>
    {{ Form::label('password', 'Password:')}}
        {{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
    <br>
    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
    <br> -->
    <button type="Submit" class="btn btn-default">Register</button>

    {{ Form::close()}}
</div>

@stop