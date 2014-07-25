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
      <th><center>+1</center></th>
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
                <div class="btn-group">
                  <button type="button"
                    class="btn btn-success plus-btn @if($guest->plus) active @endif"
                    data-value="1" data-guestid="{{{ $guest->id }}}">

                    <span class="glyphicon glyphicon-plus"></span>
                  </button>
                  <button type="button"
                    class="btn btn-info plus-btn @if(!$guest->plus) active @endif"
                    data-value="0" data-guestid="{{{ $guest->id }}}">

                    <span class="glyphicon glyphicon-remove"></span>
                  </button>
                </div>
              </td>
              <td>
                <div class="btn-group">
                  <input type="checkbox"
                    class="btn btn-success is_attending-btn @if($guest->is_attending) active @endif"
                    data-value="1" data-showid="{{{ $guest->id }}}">

                    <span class="glyphicon glyphicon-ok"></span>
                  </input>

                    <input type="checkbox"
                    class="btn btn-info is_attending-btn @if(!$guest->is_attending) active @endif"
                    data-value="0" data-showid="{{{ $guest->id }}}">

                    <span class="glyphicon glyphicon-remove"></span>
                  </input>

              </td>
  		<td>{{{ $guest->comment }}}</td>
  		<td>{{ Form::open(array('url' => action('GuestController@destroy',[$party->id, $guest->id]), 'method' => 'DELETE' )) }}
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

@section('bottomscript')

<script type="text/javascript">

  $(".plus-btn").on('click', function() {
    var plusValue = $(this).data('value');
    var guestId = $(this).data('guestid');

    $(".plus-btn[data-value=" + plusValue + "]").addClass('active');
    $(".plus-btn[data-value!=" + plusValue + "]").removeClass('active');

    $.ajax({
      url: '/plusOne',
      type: "POST",
      data: {
        value: plusValue,
        id: guestId
      },
      dataType: 'json'
    });
  });

  $(".is_attending-btn").on('click', function() {
    var attendingValue = $(this).data('value');
    var showid = $(this).data('showid');

    $(".is_attending-btn[data-value=" + attendingValue + "]").addClass('active');
    $(".is_attending-btn[data-value!=" + attendingValue + "]").removeClass('active');

    $.ajax({
      url: '/ajax-temp',
      type: "POST",
      data: {
        value: attendingValue,
        id: showid
      },
      dataType: 'json'
    });
  });
</script>



@stop