@extends('layouts.home_master')

@section('content')
<div class="container">
  <div class="text-center">
   {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        {{ Form::label('email', 'Email:')}}{{ Form::text('email',Input::old('email'), array('placeholder'=>'Email', 'class' => 'form-control'))}}
        <br>
        {{ Form::label('password', 'Password:')}}{{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
        <br>
        <button type="Submit" class="btn btn-default">Log In</button>

            

        {{ Form::close() }}
  </div>
</div>
@stop