@extends('layouts.user_master')

@section('content')

<!--Content-->
<section id="page-title" class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 style="font-size:60px;">GUESTS</h3>
      </div>
    </div>
  </div>
</section>
<!--Content-->
<section id="content2" class="section">
    <div class="container">
        <div class="row">
          <!--Side Bar-->
          <div class="col-sm-2 fixed">
            <h3>Menu</h3>
            <ul class="list-unstyled side-links">
                <li style="font-size:20px"><a href="{{ action('GuestController@index', $party->id) }}">Guests</a></li>
                <li style="font-size:20px"><a href="{{ action('PartyController@index', $party->id) }}">Checklist</a></li>
                <li style="font-size:20px"><a href="{{ action('BudgetItemController@index', $party->id) }}">Budget</a></li>
                <li style="font-size:20px"><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
            </ul>

            <h3>New Guest</h3>
              {{ Form::open(array('action' => array('GuestController@store', $party->id))) }}
                <div class="control-group">
                    <div class="controls">
                      <div class="input-prepend">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', Input::old('name'), array('placeholder'=>'Name')) }}
              <!-- Error message -->
              {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
                      </div>
                  </div>
                </div>
              <div class="control-group">
                  <div class="controls">
              {{ Form::label('email', 'Email') }}
              {{ Form::text('email', null, array('placeholder' => 'Email')) }}
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
<!--Column One-->
        <div class="col-sm-10">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">RSVP</th>
                  <th class="text-center"><center>+1</center></th>
                  <th class="text-center">Notes</th>
                  <th class="text-center">Action</th>
                </tr>
            @foreach($guests as $guest)
                <tr>
                  <td class="text-center">{{{ $guest->name }}}</td>
                  <td class="text-center">{{{ $guest->email }}}</td>
                  <td class="text-center">{{{ $guest->phone }}}</td>
                  <td class="text-center">
                    <input type="checkbox" class="is_attending_check" data-guestid="{{{ $guest->id }}}" @if ($guest->is_attending) checked @endif>
                  </td>
                  <td class="text-center">
                    <input type="checkbox" class="plus_check" data-guestid="{{{ $guest->id }}}" @if ($guest->plus) checked @endif>
                  </td>
                  <td class="text-center">{{{ $guest->comment }}}</td>
                        <td>{{ Form::open(array('url' => action('GuestController@destroy',[$party->id, $guest->id]), 'method' => 'DELETE' )) }}
                        {{ Form::submit('Delete') }}
                        {{ Form::close() }}
                      </td>

                      </tr>
            @endforeach
            </table>
          </div>

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