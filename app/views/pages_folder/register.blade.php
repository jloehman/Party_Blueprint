@extends('layouts.home_master')

@section('content')
<!--Content-->
    <section id="signup">
      <div class="container">
        <div class="row margin-40">

        <div class="col-sm-6 col-sm-offset-3 text-center signup">
          <h3>Register Here</h3><br />

    {{ Form::open(array('action' => 'UserController@store')) }}
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
    {{ Form::label('first_name', 'First Name:') }}
    {{ Form::text('first_name', Input::old('first_name'), array('placeholder'=>'First Name','class' =>'form-control')) }}
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
    {{ Form::label('last_name', 'Last Name:') }}
    {{ Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Last Name', 'class' =>'form-control')) }}
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class' =>'form-control')) }}
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
    {{ Form::label('password', 'Password:')}}
    {{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
            </div>
        </div>
    </div>
    <!-- {{ Form::label('password_confirm', 'Confirm Password:')}}
        {{ Form::password('password_confirm', array('class' => 'form-control'))}}
    <br> -->
    <div class="control-group">
        <div class="controls">
            <button type="Submit" class="btn btn-default">SUBMIT</button>
        </div>
    </div>
    {{ Form::close()}}
            </div><!--End Col 6-->
        </div><!--End Row-->
    </div><!--End Container-->
</section>


@stop