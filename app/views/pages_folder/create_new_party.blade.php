@extends('layouts.welcome_create_master')
@section('content')
<div class="container">
	<div class="row_one">
		<h1 class="steps_header">Steps:</h1>
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
		<div class="form">
			<div class="row_three">
				{{ Form::open(array('action' => 'WelcomeController@store', "class" => "form-horizontal form-group")) }}
			  	<div class="specs">
					{{ Form::label('party_name', 'Party Name', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('party_name', Input::old('party_name'), array('placeholder'=>'Party Name', 'class' => 'form-control')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('location', 'Location', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('location', Input::old('location'), array('placeholder'=>'Location', 'class' => 'form-control')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('location', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('event_date', 'Event Date', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('event_date', Input::old('event_date'), array('placeholder'=>'YYYY-MM-DD', 'class' => 'form-control', 'id' => "datetimepicker")) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('event_date', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('start_time', 'Event Time', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('start_time', Input::old('start_time'), array('placeholder'=>'00:00:00', 'class' => 'form-control', 'id' => 'datetimepicker2')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('start_time', '<span class="help-block">:message</span><br>') }}
				</div>
				<div class="set_budget">
					{{ Form::label('budget', 'Budget', array('class' => 'party_attributes')) }}<br>
					{{ Form::text('budget', Input::old('budget'), array('placeholder'=>'ex: 0.00', 'class' => 'form-control')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('budget', '<span class="help-block">:message</span><br>') }}
				</div>
				<div class="create_button">
					{{ Form::submit('Create Party', array('id' => 'create_party', 'class' => 'btn')) }}
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