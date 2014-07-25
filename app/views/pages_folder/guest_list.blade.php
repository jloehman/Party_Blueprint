@extends('layouts.user_master')

@section('content')

<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3><strong>Guest Page: {{ $party->party_name }}</strong></h3>
          </div>
        </div>
      </div>
    </section>
<!--Content-->      
    <section id="content2" class="section">
      <div class="container">
        <div class="row">
<!--Column One-->
          <div class="col-sm-8">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>RSVP</th>
                    <th><center>+1</center></th>
                    <th>Notes</th>
                  </tr>
              @foreach($guests as $guest)
                  <tr>
                    <td>{{{ $guest->name }}}</td>
                    <td>{{{ $guest->email }}}</td>
                    <td>{{{ $guest->phone }}}</td>
                    <td>
                      <input type="checkbox" class="is_attending_check" data-guestid="{{{ $guest->id }}}" @if ($guest->is_attending) checked @endif>
                    </td>
                    <td>
                      <input type="checkbox" class="plus_check" data-guestid="{{{ $guest->id }}}" @if ($guest->plus) checked @endif>
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
      <!-- {{ Form::open(array('action' => 'GuestController@store')) }}
      <div class="col-sm-4">
        <div class="control-group">  
            <div class="controls">
              <div class="input-prepend">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name')) }} -->
    <!-- Change this error message -->
    <!-- {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
              </div>
          </div>
        </div>
      <div class="control-group">  
          <div class="controls">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, array('placeholder' => 'email')) }}
    {{ $errors->first('email', '<span class="help-block">:message</span><br>') }}
          </div>
      </div>
      <div class="control-group">  
          <div class="controls">
    {{ Form::label('phone', 'Phone') }}
    {{ Form::text('phone', null, array('placeholder' => '###-###-####')) }}
    {{ $errors->first('phone', '<span class="help-block">:message</span><br>') }}
          </div>
      </div>
      <div class="form-group">
      <div class="controls">
    {{ Form::label('comment', 'Notes') }}
          <div class="wmd-panel">
              <div id="wmd-button-bar"></div>
    {{ Form:: textarea('comment', Input::old('comment'), null, array('class' => 'wmd-input', 'id' => 'wmd-input')) }}
    {{ $errors->first('comment', '<span class="help-block">:message</span><br>') }}
          </div>
      </div>
    </div> -->

    <!-- {{ Form::submit('Add Guest') }}
    {{ Form::close() }} -->
    </div><!--End Column One-->
    <!--Side Bar-->
          <div class="col-sm-4 fixed">
            <h3>Side Bar</h3>
            <ul class="list-unstyled side-links">
                <li><a href="{{ action('GuestController@index', $party->id) }}">Guests to Invite</a></li>
                <li><a href="{{ action('PartyController@index', $party->id) }}">Planning List</a></li>
                <li><a href="{{ action('BudgetItemController@index', $party->id) }}">Budget Items</a></li>
                <li><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
              </ul>
            <h3>New Guest</h3>
              {{-- Form::submit('Add Guests') --}}
            {{ Form::open(array('action' => array('GuestController@store', $party->id))) }}
                <div class="control-group">  
                    <div class="controls">
                      <div class="input-prepend">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name')) }}
            <!-- Change this error message -->
            {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
                      </div>
                  </div>
                </div>
              <div class="control-group">  
                  <div class="controls">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, array('placeholder' => 'email')) }}
            {{ $errors->first('email', '<span class="help-block">:message</span><br>') }}
                  </div>
              </div>
              <div class="control-group">  
                  <div class="controls">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, array('placeholder' => '###-###-####')) }}
            {{ $errors->first('phone', '<span class="help-block">:message</span><br>') }}
                  </div>
              </div>
              <div class="form-group">
                  <div class="controls">
            {{ Form::label('comment', 'Notes') }}
                  <!-- <div class="wmd-panel">
                      <div id="wmd-button-bar"></div> -->
            {{ Form:: textarea('comment', Input::old('comment'), null, array('class' => 'wmd-input', 'id' => 'wmd-input')) }}
            {{ $errors->first('comment', '<span class="help-block">:message</span><br>') }}
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                  <button type="Submit" class="btn btn-default"><strong>Add Guest</strong></button>
                </div>
              {{ Form::close() }}
          </div>
        </div><!--End Row-->
    </div>
</section>
        






<!--<h1>Guest List Page</h1>-->
<!-- <div class="table-responsive">
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
  		<td>{{{ $guest->phone }}}</td> -->

  		<!-- this needs to be a checkbox -->
  		<!-- <td>
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
              </td> -->
             <!--  <td>
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

              </td> -->
  		<!-- <td>{{{ $guest->comment }}}</td>
  		<td>{{ Form::open(array('url' => action('GuestController@destroy',[$party->id, $guest->id]), 'method' => 'DELETE' )) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</td>

  	</tr>
@endforeach
  </table>
</div> -->


	{{-- Form::submit('Add Guests') --}}



	<!-- {{ Form::open(array('action' => array('GuestController@store', $party->id))) }}
  <div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name')) }}<br> -->
		
		<!-- {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
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
		{{ Form::close() }} --> 

@stop

@section('bottomscript')

<script type="text/javascript">

  $(".plus_check").on('change', function() {
    var guestId = $(this).data('guestid');
    var isPlus = $(this).is(":checked");

    $(this).addClass('active');

    $.ajax({
      url: '/plusOne',
      type: "POST",
      data: {
        value: isPlus,
        id: guestId
      },
      dataType: 'json'
    });
  });

  $(".is_attending_check").on('change', function() {
    var guestId = $(this).data('guestid');
    var isAttending = $(this).is(":checked");

    $.ajax({
      url: '/ajax-temp',
      type: "POST",
      data: {
        value: isAttending,
        id: guestId
      },
      dataType: 'json'
    });
  });
</script>



@stop