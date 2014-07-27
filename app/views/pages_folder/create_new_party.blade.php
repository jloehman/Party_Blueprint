@extends('layouts.welcome_create_master')
@section('content')
<div class="container">
	<div class="row_one">
		<h1 class="steps_header">Steps</h1>
	</div>
		<div class="steps">
			<div class="row_two">
				<div class="step_one">
					<p><b><em>1. Set Party Attributes</em></b></p>
				</div>
				<div class="step_two">
					<p><b><em>2. Set Your Budget</em></b></p>
				</div>
				<div class="step_three">
					<p><b><em>3. Click Create Party</em></b></p>
				</div>
			</div>
		</div>
		<hr>
		<section id="content2">
      		<div class="container">
        		<div class="row margin-40">
        			<!--Creating a New Party-->
        			<div class="col-sm-6 col-sm-offset-3 text-center signup">
				{{ Form::open(array('action' => 'WelcomeController@store', "class" => "form-horizontal form-group")) }}
			  		<div class="control-group">
        				<div class="controls">
					{{ Form::label('party_name', 'Party Name', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('party_name', Input::old('party_name'), array('placeholder'=>'Party Name', 'class' => 'form-control')) }}
					<!-- Change this error message -->
					{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
						</div>
					</div>
					<div class="control-group">
        				<div class="controls">
        					<div class="input-prepend">
					{{ Form::label('location', 'Location', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('location', Input::old('location'), array('placeholder'=>'Location', 'class' => 'form-control')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('location', '<span class="help-block">:message</span><br>') }}
							</div>
						</div>
					</div>
					<div class="control-group">
        				<div class="controls">
        					<div class="input-prepend">
					{{ Form::label('event_date', 'Event Date', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('event_date', Input::old('event_date'), array('placeholder'=>'YYYY-MM-DD', 'class' => 'form-control', 'id' => "datetimepicker")) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('event_date', '<span class="help-block">:message</span><br>') }}
							</div>
						</div>
					</div>
					<div class="control-group">
        				<div class="controls">
        					<div class="input-prepend">
					{{ Form::label('start_time', 'Event Time', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('start_time', Input::old('start_time'), array('placeholder'=>'00:00:00', 'class' => 'form-control', 'id' => 'datetimepicker2')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('start_time', '<span class="help-block">:message</span><br>') }}
							</div>
						</div>
					</div>
					<div class="control-group">
        				<div class="controls">
        					<div class="input-prepend">
					{{ Form::label('budget', 'Budget', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('budget', Input::old('budget'), array('placeholder'=>'ex: 0.00', 'class' => 'form-control')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('budget', '<span class="help-block">:message</span><br>') }}
							</div>
						</div>
					</div>
				<div class="create_button">
			    		<button type="Submit" class="btn">Create Party</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>

</div>
@stop

@section('bottomscript')
<script>

	$('#datetimepicker').datetimepicker({
		startDate: 0,
		format: 'Y/m/d',
		timepicker: false
	});

	$('#datetimepicker2').datetimepicker({
		datepicker: false,
		format: 'H:i:s'
	});

</script>
@stop