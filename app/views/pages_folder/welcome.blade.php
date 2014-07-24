<!--This needs an if statement to show either just the create or both the create and drop down option-->
@extends('layouts.welcome_create_master')
@section('content')
<div class="container">
	<div class="row">
		<h1 class="welcome">Welcome, {{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}!</h1>
	</div>

	<div class="create_button btn-lg">
		<a href="{{{ action('WelcomeController@create') }}}" class="btn btn-success">Create New Party</a>
	</div>
  	@if(Auth::user()->parties->count() > 0)
		<div class="choose_party btn-group">
		    <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
		        Choose a Party <span class="caret"></span>
		    </button>

		  <div class="dropdown-menu" role="menu">
		  	@foreach(Auth::user()->parties as $party)
	  	<!-- when one of these is chosen, I need it to render the specific information -->

		        <a href="{{{ action('PartyController@summary', $party->id) }}}" class="list-group-item">{{{ $party->party_name }}}</a><br>
			@endforeach
		  </div>
		</div>
	@endif
</div>
@stop
