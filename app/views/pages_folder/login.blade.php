@extends('layouts.home_master')

@section('content')
 <!--Content-->
    <section id="signup">
      <div class="container">
        <div class="row margin-40">
            <div class="col-sm-6 col-sm-offset-3 text-center signup">
              <h3>Log In</h3><br/>

   		{{ Form::open(array('action' => 'HomeController@doLogin')) }}
		<div class="control-group">
  			<div class="controls">
  				<div class="input-prepend">
        {{ Form::label('email', 'Email')}}{{ Form::text('email',Input::old('email'), array('placeholder'=>'Email', 'class' => 'form-control'))}}
    			</div>
    		</div>
    	</div>
    	<div class="control-group">
          	<div class="controls">
          		<div class="input-prepend">
        {{ Form::label('password', 'Password')}}{{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control'))}}
        		</div>
        	</div>
        </div>
        <div class="control-group">
          	<div class="controls">
        		<button type="Submit" class="btn btn-default">Log In</button>
    		</div>
      	      <a class="small-message" href="/register"><small>Need An Account?</small></a>
      	</div>
        {{ Form::close() }}
        	</div><!--End Span6-->
        </div><!--End Row-->
      </div><!--End Container-->
    </section>
@stop