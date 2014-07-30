@extends('layouts.home_master')

@section('content')
    <!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 style="font-size:60px;">Get In Touch</h3>
          </div>
        </div>
      </div>
    </section>
     <!--Content-->
    <section id="content2" class="section">
      <div class="container">
        <div class="row">

     {{ Form::open(array('action' => array('HomeController@send', 'method' => 'POST'))) }}
     <div class="col-sm-4">
        <div class="control-group">
            <div class="controls">
       {{ Form::label('name', 'Name')}}
       {{ Form::text('name',Input::old('name'), array('placeholder'=>'Name', 'class' => 'form-control'))}}
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
       {{ Form::label('email', 'Email')}}
       {{ Form::text('email',Input::old('email'), array('placeholder'=>'Email', 'class' => 'form-control'))}}
            </div>
        </div>
      </div>
      <div class="col-sm-8">
          <div class="control-group">
              <div class="controls">
       {{ Form::label('message', 'Message')}}
       {{ Form::textarea('message',Input::old('message'), array('placeholder'=>'Enter Your Message Here', 'class' => 'form-control'))}}
              </div>
          </div>
          <div class="text-right">
              <input type="hidden" name="save" value="contact">
                  <button type="Submit" class="btn btn-default">Send</button>
              </div>
          </div>
       {{ Form::close() }}
     </div>
   </div>
  </section>
  <!--End of Form-->
@stop