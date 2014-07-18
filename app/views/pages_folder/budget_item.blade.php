@extends('layouts.user_master')

@section('topscript')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });
  </script>
@stop

@section('content')
<h1>To Buy Items</h1>
<div class="container-fluid content-wrapper">

						<div class="row-fluid">
							<div class="span12">
								<div class="hero-unit non-index">
									<h2>Invoices</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod mattis consectetur. 
							Sed iaculis tincidunt egestas. Donec faucibus, justo quis dapibus tristique.
									</p>
									<br/>
								</div>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">
								<ul class="breadcrumb">
									<li>
										<a href="index.html">
											<i class="radmin-icon radmin-home"></i>
											Dashboard
										</a>
										<span class="divider">/</span>
									</li>
									<li>
										<a href="invoices.html#">
											<i class="radmin-icon radmin-file"></i>
											Sample Pages
										</a>
										<span class="divider">/</span>
									</li>
									<li class="active">
										<i class="radmin-icon radmin-clipboard-2"></i>
										Invoices
									</li>
								</ul>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">
								<h4 class="title">Create an invoice</h4>
								<div class="squiggly-border"></div>

								<div class="progress progress-grey">
									<div class="bar" style="width: 30%;"></div>
								</div>

									<div class="container-responsive">
	<div class="row-fluid">
		 <div class="span6">
			<ul id="sortable1" class="connectedSortable">
@foreach($budget_items as $budget_item)

		  		<li class="ui-state-default">(qty: {{{ $budget_item->qty }}}) <strong>{{{ $budget_item->name }}}</strong>  ${{{ $budget_item->cost }}}
		  			{{ Form::open(array('action' => array('BudgetItemController@destroy', $budget_item->id), 'method' => 'DELETE' )) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</li>
@endforeach
  			</ul>
  		</div>
  		<div class="span6">
			<ul id="sortable2" class="connectedSortable">

  			</ul>
  		</div>
 	</div>
</div>

{{ Form::open(array('action' => 'BudgetItemController@store', "class" => "form-horizontal invoice-form")) }}
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
						</div>

					</div>
				</div>
			</div>
		</div>
		<div id="sticky-footer-push"></div>
	</div>



	{{-- Form::submit('Create A New Item That Needs to be Purchased') --}}

@stop

@section('bottomscript')

@stop