@extends('layouts.user_master')

@section('topscript')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/css/budget_item.css">
@stop

@section('content')
<h1>To Buy Items</h1>
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
@foreach(BudgetItem::not_purchased() as $budget_item)

		  		<li class="ui-state-default list-group-item" data-budgetId="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
		  			{{ Form::open(array('action' => array('BudgetItemController@destroy', $budget_item->id), 'method' => 'DELETE' )) }}
					<font color="pink">{{ Form::submit('Delete') }}</font>
					{{ Form::close() }}
				</li>
@endforeach
  			</ul>
  		</div>
 	</div>
 	<div class="receipt col-md-3">
    <p><em>Budget:</em> $900</p>  <p><em>Total Remaining:</em> $200</p>
			<ul id="sortable2" class="connectedSortable">
@foreach(BudgetItem::is_purchased() as $budget_item)

          <li class="ui-state-default list-group-item" data-budgetId="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
            {{ Form::open(array('action' => array('BudgetItemController@destroy', $budget_item->id), 'method' => 'DELETE' )) }}
          <font color="pink">{{ Form::submit('Delete') }}</font>
          {{ Form::close() }}
        </li>


@endforeach
  			</ul>
      </div>
  		</div>
</div>
</div>

	{{-- Form::submit('Create A New Item That Needs to be Purchased') --}}

@stop

@section('bottomscript')
<script>
  $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable",
      stop : function(event, ui){ 
        var id = $(ui.item).attr('data-budgetId');
        var amount = $(ui.item).attr('data-amount');

        $.ajax({
          url: "/update_purchase",
          type: "PUT",
          data: { budgetId: id },
          dataType: "json",
          success: function (data) {
              $('#ajax-message').html(data.message);
          }
        });
        // console.log(id);
      }
    }).disableSelection();

  // $('#sortable2').droppable({
  //   drop: function( event, ui ) {

  //     $('.list-group-item').mouseup(function() {
  //       console.log('save it fool');
  //     });

  //     $.ajax({
  //       url: "/update_purchase",
  //       type: "PUT",
  //       data: { budgetId: 'test' },
  //       dataType: "json",
  //       success: function (data) {
  //           $('#ajax-message').html(data.message);
  //       }
  //     });
  //   }
  // })


  // $("#sortable2").on('sortchange', function() {

  // 	 $.ajax({
  //       url: "/update_purchase",
  //       type: "PUT",
  //       data: toSend,
  //       dataType: "json",
  //       success: function (data) {
  //           $('#ajax-message').html(data.message);
  //       }
  //   });
  // });

// drag and drop table to update budget
// 
// star rating system
// 
// usage with timers
// 
// grab a new job
// 
// $('#ajax-form').on('submit', function (e) {
//     e.preventDefault();
//     var formValues = $(this).serialize();
//     console.log(formValues);

//     $.ajax({
//         url: "/ajax",
//         type: "POST",
//         data: formValues,
//         dataType: "json",
//         success: function (data) {
//             $('#ajax-message').html(data.message);
//         }
//     });
// });

// $('.btn-ajax').on('click', function () {

//     console.log('Clicked the button');

//     var toSend = {
//         'id': 1,
//         'name': 'test'
//     };

//     $.ajax({
//         url: "/ajax",
//         type: "POST",
//         data: toSend,
//         dataType: "json",
//         success: function (data) {
//             $('#ajax-message').html(data.message);
//         }
//     });

// });


</script>

@stop