@extends('layouts.user_master')
@section('content')
<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3><strong>Planning: {{ $party->party_name }}</strong></h3>
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
                      <th class="text-center">Name</th>
                      <th class="text-center">Done By</th>
                      <th class="text-center">Completed</th>
                      <th class="text-center">Action</th>
                    </tr>
                @foreach($todos as $todo)
                    <tr>
                      <td class="text-center">{{{ $todo->name }}}</td>
                      <td class="text-center">{{{ $todo->done_by }}}</td>
                      <!-- this needs to be a checkbox -->
                      <td class="text-center">
                        <!-- this needs to be submitted -->
                        <!--this doesn't have a closing div and missing button tags-->
                         <input type="checkbox" class="is_complete_check" data-todoid="{{{ $todo->id }}}" @if ($todo->is_complete) checked="checked" data-complete="1" @else data-complete="0" @endif> <!-- new code -->
                      </td>
                        <td class="text-center">{{ Form::open(array('url' => action('PartyController@destroy',[$party->id, $todo->id]), 'method' => 'DELETE' )) }}
                          {{ Form::submit('Delete') }}
                          {{ Form::close() }}
                        </td>
                        </tr>
                    @endforeach                   
                 </table>
              </div>
            </div>
          <!--End Column-->
          <!--Side Bar-->
          <div class="col-sm-4">
            <h3>Side Bar</h3>
            <ul class="list-unstyled side-links">
                <li><a href="{{ action('GuestController@index', $party->id) }}">Guests to Invite</a></li>
                <li><a href="{{ action('PartyController@index', $party->id) }}">Planning List</a></li>
                <li><a href="{{ action('BudgetItemController@index', $party->id) }}">Budget Items</a></li>
                <li><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
              </ul>
            <br/>
            <h3>Add Idea</h3>
            {{-- Form::submit('Create A New Item') --}}
            {{ Form::open(array('action' => array('PartyController@store', $party->id))) }}
            <div class="control-group">  
                <div class="controls">
                  <div class="input-prepend">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', Input::old('name'), array('placeholder' => 'Name'))}}
              <!-- Change this error message -->
              {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
                  </div>
                </div>
            </div>
            <div class="control-group">  
                <div class="controls">
                  <div class="input-prepend">
              {{ Form::label('done_by', 'Done By') }}
              {{ Form::text('done_by', null, array('placeholder' => 'YYYY-MM-DD', 'id' => "datetimepicker")) }}
              {{ $errors->first('done_by', '<span class="help-block">:message</span><br>') }}
                  </div>
                </div>
            </div>
              <div class="control-group">
                <div class="controls">
                    <button type="Submit" class="btn btn-default"><strong>Add</strong></button>
                </div>
              {{ Form::close() }}
            </div>
        </div><!--End Row-->
      </div>
    </section>


<!-- <h1>To Do List Page</h1>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
  	<tr>
  		<th>Name</th>
  		<th>Done By</th>
  		<th>Completed</th>
  		<th>Actions</th>
  	</tr>
@foreach($todos as $todo)
  	<tr>
  		<td>{{{ $todo->name }}}</td>
  		<td>{{{ $todo->done_by }}}</td> -->
  		<!-- this needs to be a checkbox -->
  		<!-- <td> -->
  			<!-- this needs to be submitted -->
<!-- <div class="btn-group">
                  <button type="checkbox"
                    class="btn btn-success is_complete-btn @if($todo->is_complete) active @endif" 
                    data-todoid="{{{ $todo->id }}}"></input>

                    <span class="glyphicon glyphicon-ok"></span>
  		</td> -->
    <!-- <td>{{ Form::open(array('url' => action('PartyController@destroy',[$party->id, $todo->id]), 'method' => 'DELETE' )) }}
      {{ Form::submit('Delete') }}
      {{ Form::close() }}
    </td>
  	</tr>
@endforeach
  </table>
</div> -->


	{{-- Form::submit('Create A New Item') --}}
	<!-- {{ Form::open(array('action' => array('PartyController@store', $party->id))) }}
  <div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name'), array('placeholder' => 'Name'))}}<br> -->
		<!-- Change this error message -->
		<!-- {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('done_by', 'Done By') }}<br>
		{{ Form::text('done_by', null, array('placeholder' => 'YYYY-MM-DD')) }}<br>
		{{ $errors->first('done_by', '<span class="help-block">:message</span><br>') }}
	</div>
		{{ Form::submit('Add Todo') }}
		{{ Form::close() }} -->

@stop

@section('bottomscript')
<script type="text/javascript">

  $(".is_complete_check").on('change', function() {
    var todoid = $(this).data('todoid');
    var complete = $(this).data('complete'); // grab complete

    (complete == 1) ? $(this).data('complete', 0) : $(this).data('complete', 1); // new line

    // console.log(complete)

    $(this).addClass('active');

    $.ajax({
      url: '/updateTodo',
      type: "POST",
      data: {
        id: todoid,
        is_complete: complete // new code
      },
      dataType: 'json'
    });
  });
</script>

<script>
  $('#datetimepicker').datetimepicker({
    startDate: new Date(),
    format: 'Y/m/d',
    timepicker: false
  });
</script>

@stop
