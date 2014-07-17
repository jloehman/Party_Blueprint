@extends('layouts.user_master')
@section('content')
<h1>To Buy Items</h1>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
  	<tr>
  		<th>Name</th>
  		<th>Quantity</th>
  		<th>Cost</th>
  		<th>Purchased By</th>
  		<th>Completed</th>
  		<th>Actions</th>
  	</tr>
@foreach($budget_items as $budget_item)
  	<tr>
  		<td>{{{ $budget_item->name }}}</td>
  		<td>{{{ $budget_item->qty }}}</td>
  		<td>{{{ $budget_item->cost }}}</td>
  		<td>{{{ $budget_item->done_by }}}</td>
  		<!-- this needs to be a checkbox -->
  		<td>
  			<!-- this needs to be submitted -->
  			{{ Form::checkbox('is_purchased')}}

  		</td>
  		<td>{{ Form::open(array('action' => array('PartyController@destroy', $budget_item->id), 'method' => 'DELETE' )) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</td>
  	</tr>
@endforeach
  </table>
</div>


	{{-- Form::submit('Create A New Item That Needs to be Purchased') --}}



	{{ Form::open(array('action' => 'PartyController@store')) }}
  	<div>
		{{ Form::label('name', 'Name') }}<br>
		{{ Form::text('name', Input::old('name')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('qty', 'Quantity') }}<br>
		{{ Form::text('qty', Input::old('qty')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('qty', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('cost', 'Cost') }}<br>
		{{ Form::text('cost', Input::old('cost')) }}<br>
		<!-- Change this error message -->
		{{ $errors->first('cost', '<span class="help-block">:message</span><br>') }}
	</div>
	<div>
		{{ Form::label('done_by', 'Done By') }}<br>
		{{ Form::text('done_by', null, array('placeholder' => 'yyyy-mm-dd')) }}<br>
		{{ $errors->first('done_by', '<span class="help-block">:message</span><br>') }}
	</div>
		{{ Form::submit('Add Item') }}
		{{ Form::close() }}
@stop