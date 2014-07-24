<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Saltflakes">
		<meta name="description" content="cloud pepper is a plain and fine web theme based on twitter bootstrap.">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/user_nav.css">
  
@yield('topscript')
</head>

<body id="body-index">
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Simply Soiree</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <p id="user_name" class="navbar-text navbar-center">Signed in as: {{ Auth::user()->first_name }}</p>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Parties<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<nav class="sidebar hovered">
    <ul class="list-group">
        <li id="dashboard"  class="label label-default">Dashboard</li>
        <li class="list-group-item"><a href="{{ action('GuestController@index', $party->id) }}"><i class="icon-home"></i>Guests to Invite</a></li>
        <li class="list-group-item"><a href="{{ action('PartyController@index', $party->id) }}"><i class="icon-cog"></i>Planning List</a></li>
        <li class="list-group-item"><a href="{{ action('BudgetItemController@index', $party->id) }}"><i class="icon-tree-view"></i>Budget Items</a></li>
        <li class="list-group-item"><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
    </ul>
</nav>
@yield('content')
@yield('bottomscript')
</body>
</html>