@extends('layouts.home_master')

@section('content')

   {{ Form::open(array('action' => 'HomeController@doContact')) }}
        {{ Form::label('name', 'Name:')}}
        {{ Form::text('name',null, array('class' => 'form-control'))}}
        <br>
        {{ Form::label('email', 'Email')}}
        {{ Form::text('email',null, array('class' => 'form-control'))}}
        <br>
        {{ Form::label('message', 'Message::')}}
        {{ Form::textarea('message',null, array('class' => 'form-control'))}}
        
        <br>
        <button type="Submit" class="btn btn-default">Log In</button>

            

        {{ Form::close() }}
@stop