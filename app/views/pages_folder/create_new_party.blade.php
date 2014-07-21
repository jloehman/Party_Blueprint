@extends('layouts.welcome_create_master')
@section('content')
<div class="container">
	<div class="row_one">
		<h1 class="steps_header">Steps:</h1>
	</div>
		<div class="steps">
			<div class="row_two">
				<p class="step_one"><em>1. Set Party Attributes</em></p>
				<p class="step_two"><em>2. Set Your Budget</em></p>
				<p class="step-three">3. Click Create!</p>
			</div>
		</div>
		<div class="form">
			<div class="row_three">
				{{ Form::open(array('action' => 'WelcomeController@store', "class" => "form-horizontal form-group")) }}
			  	<div class="specs">
					{{ Form::label('party_name', 'Party Name') }}<br>
					{{ Form::text('party_name', Input::old('party_name')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('location', 'Location') }}<br>
					{{ Form::text('location', Input::old('location')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('location', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('event_date', 'Event Date') }}<br>
					{{ Form::text('event_date', Input::old('event_date')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('event_date', '<span class="help-block">:message</span><br>') }}

					{{ Form::label('start_time', 'Event Time') }}<br>
					{{ Form::text('start_time', Input::old('start_time')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('start_time', '<span class="help-block">:message</span><br>') }}
				</div>
				<div class="set_budget">
					{{ Form::label('budget', 'Budget') }}<br>
					{{ Form::text('budget', Input::old('budget')) }}<br>
					<!-- Change this error message -->
					{{ $errors->first('budget', '<span class="help-block">:message</span><br>') }}
				</div>
				<div class="create_button">
					{{ Form::submit('Create Party') }}
					{{ Form::close() }}
				</div>
			</div>
		</div>

</div>
@stop