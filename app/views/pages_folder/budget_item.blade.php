@extends('layouts.user_master')

@section('topscript')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="/css/budget_item.css">
@stop

@section('content')
<!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3><strong>Items to Buy: {{ $party->party_name }}</strong></h3>
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
             <div class="receipt col-md-6">
              <h3 class="headline text-center"><strong>Budget Items</strong></h3>
              <div class="price">
                <p class="instructions text-center">
                  <large class="drag_drop"><b>Drag and drop items to the receipt!</b></large>
                </p>
              </div>
                <div id="ajax-message">
                    <ul id="not_purchased" class="connectedSortable" >
              @foreach(BudgetItem::not_purchased() as $budget_item)

                      <li class="ui-state-default list-group-item" data-budgetid="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong>
                        ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
                        {{ Form::open(array('url' => action('BudgetItemController@destroy',[$party->id, $budget_item->id]), 'method' => 'DELETE' )) }}
                        <font color="pink">{{ Form::submit('Delete') }}</font>
                        {{ Form::close() }}
                     </li>
              @endforeach
                    </ul>
                </div>
            </div>
            <div class="receipt col-md-6">
              <h3 class="headline text-center"><strong>Receipt</strong></h3>
               <!--  <p><em>Budget:</em> ${{ $party->budget }}</p> -->
               <div class="price text-center">
                <p id="totalRemaining" data-remaining="{{ $party->budget - $sumOfPurchased }}">
                  <large><b>Budget:</b><em>${{ $party->budget }}</em></large>
                  <large class="total_remaining"><b>Total Remaining:</b><em>${{ $party->budget - $sumOfPurchased }}</em></large>
                </p>
              </div>
                  <ul id="purchased" class="connectedSortable features">
              @foreach(BudgetItem::is_purchased() as $budget_item)

                      <li class="ui-state-default list-group-item" data-budgetid="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
                    {{ Form::open(array('url' => action('BudgetItemController@destroy', [$party->id, $budget_item->id]), 'method' => 'DELETE' )) }}
                    <div class="control-group">
                        <div class="controls">
                          <button type="Submit" class="btn btn-default"><strong>Delete</strong></button>
                        </div>
                        {{ Form::close() }}
                    </div>
              @endforeach
                  </ul>
              </div>
            </div><!--End of Column-->
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
            <h3>Add Items</h3>
              {{ Form::open(array('action' => array('BudgetItemController@store', $party->id), "class" => "form-horizontal form-group")) }}
                <div class="control-group">  
                      <div class="controls">
                        <div class="input-prepend">
                  {{ Form::label('name', 'Name') }}<br>
                  {{ Form::text('name', Input::old('name'), array('placeholder'=>'Name')) }}<br>
                  <!-- Change this error message -->
                  {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
                        </div>
                      </div>
                </div>
                <div class="control-group">  
                    <div class="controls">
                  {{ Form::label('qty', 'Quantity') }}<br>
                  {{ Form::text('qty', Input::old('qty'), array('placeholder'=>'ex:0'))}}<br>
                  <!-- Change this error message -->
                  {{ $errors->first('qty', '<span class="help-block">:message</span><br>') }}
                  </div>
                </div>
                <div class="control-group">  
                    <div class="controls">
                  {{ Form::label('cost', 'Cost') }}<br>
                  {{ Form::text('cost', Input::old('cost'), array('placeholder'=>'ex:0.00')) }}<br>
                  <!-- Change this error message -->
                  {{ $errors->first('cost', '<span class="help-block">:message</span><br>') }}
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
      </div>
    </section>


<!-- <h1>To Buy Items for {{ $party->party_name }}</h1>
<div class="table">
	<table class="table">
		<th>Add an Item Here</th>
		<th>Items to Purchase</th>
		<th>Receipt</th>
	</table>
</div> -->
<!-- <div class="container-responsive">
	<div class="row-fluid">
		<div class="col-md-3">
			{{ Form::open(array('action' => array('BudgetItemController@store', $party->id), "class" => "form-horizontal form-group")) }}
	<div>
			{{ Form::label('name', 'Name') }}<br>
			{{ Form::text('name', Input::old('name')) }}<br>
			<!Change this error message -->
			<!-- {{ $errors->first('name', '<span class="help-block">:message</span><br>') }}
		</div>
		<div>
			{{ Form::label('qty', 'Quantity') }}<br>
			{{ Form::text('qty', Input::old('qty')) }}<br>
			<!-Change this error message -->
			<!-- {{ $errors->first('qty', '<span class="help-block">:message</span><br>') }}
		</div>
		<div>
			{{ Form::label('cost', 'Cost') }}<br>
			{{ Form::text('cost', Input::old('cost')) }}<br>
			<! Change this error message -->
			<!-- {{ $errors->first('cost', '<span class="help-block">:message</span><br>') }}
		</div>
			{{ Form::submit('Add Item') }}
			{{ Form::close() }}
	</div> -->
		 <!-- <div class="receipt col-md-3">
		 	<div id="ajax-message">
			<ul id="not_purchased" class="connectedSortable" >
@foreach(BudgetItem::not_purchased() as $budget_item)

		  		<li class="ui-state-default list-group-item" data-budgetid="{{$budget_item->id }}" data-amount="{{{ $budget_item->cost }}}"> <strong><font color="blue">{{{ $budget_item->name }}}</font></strong> ${{{ $budget_item->cost }}} (qty{{{ $budget_item->qty }}})
		  	{{ Form::open(array('url' => action('BudgetItemController@destroy',[$party->id, $budget_item->id]), 'method' => 'DELETE' )) }}
<font color="pink">{{ Form::submit('Delete') }}</font>
      {{ Form::close() }}
    </li>
@endforeach
  			</ul>
  		</div>
 	</div> -->
 <!-- 	<div class="receipt col-md-3">
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
      </div> -->
  		<!-- </div>
</div>
</div> -->

	{{-- Form::submit('Create A New Item That Needs to be Purchased') --}}

@stop

@section('bottomscript')
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
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