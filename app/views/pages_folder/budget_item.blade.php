@extends('layouts.user_master')

@section('topscript')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/css/budget_item.css">
@stop

@section('content')
<h1>To Buy Items for {{ $party->party_name }}</h1>
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
			{{ Form::open(array('action' => array('BudgetItemController@store', $party->id), "class" => "form-horizontal form-group")) }}
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
			<ul id="not_purchased" class="connectedSortable" >
@foreach(BudgetItem::not_purchased() as $budget_item)

		  		<li class="ui-state-default list-group-item" data-budgetid="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
		  	{{ Form::open(array('action' => array('BudgetItemController@destroy',[$party->id, $guest->id]), 'method' => 'DELETE' )) }}
<font color="pink">{{ Form::submit('Delete') }}</font>
      {{ Form::close() }}
    </li>
@endforeach
  			</ul>
  		</div>
 	</div>
 	<div class="receipt col-md-3">
    <p><em>Budget:</em> ${{ $party->budget }}</p>
    <p id="totalRemaining" data-remaining="{{ $party->budget - $sumOfPurchased }}">
      <em>Total Remaining:</em> ${{ $party->budget - $sumOfPurchased }}
    </p>
			<ul id="purchased" class="connectedSortable">
@foreach(BudgetItem::is_purchased() as $budget_item)

          <li class="ui-state-default list-group-item" data-budgetid="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
        {{ Form::open(array('url' => action('BudgetItemController@destroy', [$party->id, $budget_item->id]), 'method' => 'DELETE' )) }}
        <font color="pink">{{ Form::submit('Delete') }}</font>
            {{ Form::close() }}


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
  $( "#not_purchased, #purchased" ).sortable({
      connectWith: ".connectedSortable"
  }).disableSelection();

  $("#not_purchased").on("sortreceive", function(event, ui) {
    console.log("You unpurchased me");
    var id = $(ui.item).data('budgetid');
    var amount = $(ui.item).data('amount');

    var is_purchased = 0;

    $.ajax({
      url: "/update_purchase",
      type: "PUT",
      data: {
        budgetId: id,
        "is_purchased": is_purchased
      },
      dataType: "json",
      success: function (data) {
          $('#ajax-message').html(data.message);
          var remaining = $("#totalRemaining").data("remaining");

          remaining += parseInt(amount, 10);

          $("#totalRemaining").data("remaining", remaining);
          $("#totalRemaining").html('Remaining: $' + remaining);
      }
    });
  });

  $("#purchased").on("sortreceive", function(event, ui) {
    console.log("You bought me, yay!");
    var id = $(ui.item).data('budgetid');
    var amount = $(ui.item).data('amount');

    var is_purchased = 1;

    var remaining = $("#totalRemaining").data("remaining");

        remaining -= parseInt(amount, 10);

        $("#totalRemaining").data("remaining", remaining);
        $("#totalRemaining").html('Remaining: $' + remaining);
      

    $.ajax({
      url: "/update_purchase",
      type: "PUT",
      data: {
        budgetId: id,
        "is_purchased": is_purchased
      },
      dataType: "json",
      success: function (data) {
        $('#ajax-message').html(data.message);
       } 
    });
  });
</script>

@stop