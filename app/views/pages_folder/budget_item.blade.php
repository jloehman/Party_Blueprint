@extends('layouts.user_master')

@section('topscript')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/css/budget_item.css">
@stop

@section('content')
<h1>To Buy Items</h1>
<hr>
<div class="table">
	<table class="table">
		<th>Add an Item Here</th>
		<th>Items to Purchase</th>
		<th>Receipt</th>
	</table>
</div>
<div class="container-responsive">
	<div class="row-fluid">
		<div class="col-md-3">
			{{ Form::open(array('action' => 'BudgetItemController@store', "class" => "form-horizontal form-group")) }}
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
			{{ Form::submit('Add Item') }}
			{{ Form::close() }}
	</div>
		 <div class="receipt col-md-3">
		 	<div id="ajax-message">
			<ul id="sortable1" class="connectedSortable" >
@foreach($budget_items as $budget_item)

		  		<li class="ui-state-default list-group-item">(qty: {{{ $budget_item->qty }}}) <strong>{{{ $budget_item->name }}}</strong>  ${{{ $budget_item->cost }}}
		  			{{ Form::open(array('action' => array('BudgetItemController@destroy', $budget_item->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</li>
@endforeach
  			</ul>
  		</div>
 	</div>
 	<div class="receipt col-md-3">
			<ul id="sortable2" class="connectedSortable">

  			</ul>
  		</div>
</div>
</div>

	{{-- Form::submit('Create A New Item That Needs to be Purchased') --}}

@stop

@section('bottomscript')
<script>
  $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();

  $("#sortable2").on('sortchange', function() {

  });

// drag and drop table to update budget
// 
// star rating system
// 
// usage with timers
// 
// grab a new job
// 
$('#ajax-form').on('submit', function (e) {
    e.preventDefault();
    var formValues = $(this).serialize();
    console.log(formValues);

    $.ajax({
        url: "/ajax",
        type: "POST",
        data: formValues,
        dataType: "json",
        success: function (data) {
            $('#ajax-message').html(data.message);
        }
    });
});

$('.btn-ajax').on('click', function () {

    console.log('Clicked the button');

    var toSend = {
        'id': 1,
        'name': 'test'
    };

    $.ajax({
        url: "/ajax",
        type: "POST",
        data: toSend,
        dataType: "json",
        success: function (data) {
            $('#ajax-message').html(data.message);
        }
    });

});


</script>

@stop