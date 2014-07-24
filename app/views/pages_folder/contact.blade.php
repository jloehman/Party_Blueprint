@extends('layouts.home_master')

@section('content')


<div class="container">
<div class="row">
  <div class="col-md-12">
     {{ Form::open(array('action' => array('HomeController@send', 'method' => 'POST'))) }}
       {{ Form::label('name', 'Name:')}}
       {{ Form::text('name',Input::old('name'), array('placeholder'=>'Name', 'class' => 'form-control'))}}
       <br>
       {{ Form::label('email', 'Email:')}}
       {{ Form::text('email',Input::old('email'), array('placeholder'=>'Email', 'class' => 'form-control'))}}
       <br>
       {{ Form::label('message', 'Message:')}}
       {{ Form::textarea('message',Input::old('message'), array('placeholder'=>'Enter Your Message Here', 'class' => 'form-control'))}}
       
       <br>
       <button type="Submit" class="btn btn-default">Send</button>
       <!--{{ Form::submit('Send', null, array('class' => 'btn btn-default')) }}-->
       {{ Form::close() }}
     </div>
   </div>
  </div>
   

 <!--  <form role="form" action="{{{ action('HomeController@send') }}}" method="POST" >
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
      <div class="form-group">
        <label for="name">Your Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group"
>
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputReal">What is 4+3?</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
  </div>
</div>

</div>-->
@stop