@extends('layouts.user_master')

@section('content')
<h1>Guest List Page</h1>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
  	<tr>
  		<th>Name</th>
  		<th>Email</th>
  		<th>Phone</th>
  		<th>RSVP</th>
  		<th>Notes</th>
  		<th></th>
  	</tr>
@foreach($guests as $guest)
  	<tr>
  		<td>{{{ $guest->name }}}</td>
  		<td>{{{ $guest->email }}}</td>
  		<td>{{{ $guest->phone }}}</td>

  		<!-- this needs to be a checkbox -->
  		<td>
  			<!-- this needs to be submitted -->
  			{{ Form::checkbox('is_attending', '0', Input::old('is_attending', false))}}

  		</td>
  		<td>{{{ $guest->comment }}}</td>
  		<td>{{ Form::open(array('action' => array('GuestController@destroy', $guest->id), 'method' => 'DELETE' )) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</td>

  	</tr>
@endforeach
  </table>
</div>


	{{-- Form::submit('Add Guests') --}}



	{{ Form::open(array('action' => array('GuestController@store', $party->id))) }}
  <div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('email', 'Email') }}<br>
		{{ Form::text('email', null, array('placeholder' => 'email')) }}<br>
		{{ $errors->first('email', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('phone', 'Phone') }}<br>
		{{ Form::text('phone', null, array('placeholder' => '###-###-####')) }}<br>
		{{ $errors->first('phone', '<span class="help-block">:message</span><br>') }}
	</div>
	<div class="form-group">
		{{ Form::label('comment', 'Notes') }}
			<div class="wmd-panel">
            <div id="wmd-button-bar"></div>
        {{ Form:: textarea('comment', Input::old('comment'), null, array('class' => 'wmd-input', 'id' => 'wmd-input')) }}
        {{ $errors->first('comment', '<span class="help-block">:message</span><br>') }}
         	</div>
	</div>

		{{ Form::submit('Add Guest') }}
		{{ Form::close() }}

@stop
