@extends('layouts.home_master')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 
   </head>
 <body>
 //unsure on which controller to call
   {{ Form::open(array('action' => 'HomeController@doContact')) }}
        {{ Form::label('name', 'name:')}}
        {{ Form::text('name',null, array('class' => 'form-control'))}}
        <br>
        {{ Form::label('email', 'email')}}
        {{ Form::text('email',null, array('class' => 'form-control'))}}
        <br>
        {{ Form::label('message', 'Message::')}}
        {{ Form::textarea('message',null, array('class' => 'form-control'))}}
        
        <br>
        <button type="Submit" class="btn btn-default">Log In</button>

            

        {{ Form::close() }}
     

  </body>
</html>
@stop



labels:

