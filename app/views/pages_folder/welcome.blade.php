<!--This needs to be a redirect through the controllers.
	This page will have a button that does the redirecting
	to the personal admin page of the user-->
@extends('layouts.welcome_create_master')
@section('content')
<div class="container">
	<div class="row">
		<h1 class="welcome">Welcome!</h1>
	</div>
	<div class="create_button btn-lg">
		<a href="{{{ action('WelcomeController@create') }}}" class="btn btn-success">Create New Party</a>
	</div>
	<div class="choose_party btn-group">
	    <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
	        Choose a Party <span class="caret"></span>
	    </button>

	  <div class="dropdown-menu" role="menu">
	  	@foreach($parties as $party)
	  	<!-- when one of these is chosen, I need it to render the specific information -->
	        <a href="{{{ action('WelcomeController@show', $party->id) }}} class="list-group-item"">{{{ $party->party_name }}}</a>
		@endforeach
	  </div>
	</div>
</div>
@stop
