@extends('layouts.user_master')
@section('content')
<h1>To Do List Page</h1>
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
  		<td>{{{ $todo->done_by }}}</td>
  		<!-- this needs to be a checkbox -->
  		<td>
  			<!-- this needs to be submitted -->
<div class="btn-group">
                  <button type="checkbox"
                    class="btn btn-success is_complete-btn @if($todo->is_complete) active @endif" 
                    data-todoid="{{{ $todo->id }}}">

                    <span class="glyphicon glyphicon-ok"></span>
  		</td>
  		<td>{{ Form::open(array('action' => array('PartyController@destroy', $todo->id), 'method' => 'DELETE' )) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</td>
  	</tr>
@endforeach
  </table>
</div>


	{{-- Form::submit('Create A New Item') --}}



	{{ Form::open(array('action' => array('PartyController@store', $party->id))) }}
  <div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('done_by', 'Done By') }}<br>
		{{ Form::text('done_by', null, array('placeholder' => 'yyyy-mm-dd')) }}<br>
		{{ $errors->first('done_by', '<span class="help-block">:message</span><br>') }}
	</div>
		{{ Form::submit('Add Todo') }}
		{{ Form::close() }}

@stop

@section('bottomscript')
<script type="text/javascript">

  $(".is_complete-btn").on('click', function() {
    var todoid = $(this).data('todoid');

    $(this).addClass('active');

    $.ajax({
      url: '/updateTodo',
      type: "POST",
      data: {
        id: todoid
      },
      dataType: 'json'
    });
  });
</script>

@stop
