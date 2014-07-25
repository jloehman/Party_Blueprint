<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <title>Simple Soiree</title>
      <meta name="keywords" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">
      
      <meta property="og:title" content="Lava | Designed By Theme Armada">
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://www.themearmada.com/demos/lava">
      <meta property="og:site_name" content="Theme Armada">
      <meta property="og:description" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">

      <!-- Styles -->
      <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/font-awesome.min.css">
      <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/animate.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/bootstrap.min.css">
      <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/main.css">
      <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/custom-styles.css">

      <script src="/party_soiree_template/bootstrap3/multipage/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/party_soiree_template/bootstrap3/multipage/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/party_soiree_template/bootstrap3/multipage/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/party_soiree_template/bootstrap3/multipage/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="/party_soiree_template/bootstrap3/multipage/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="/party_soiree_template/bootstrap3/multipage/favicon.png">
  
@yield('topscript')
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand img-responsive" href="#"><img src="/party_soiree_template/bootstrap3/multipage/img/soiree_logo.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li><a id="user_name" class="active">Signed in as:{{ Auth::user()->first_name }}</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Parties<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!--NEED logic around the drop down box-->
                 @foreach(Auth::user()->parties as $party)
      <!-- when one of these is chosen, I need it to render the specific information -->
                  <a href="{{{ action('PartyController@summary', $party->id) }}}" class="list-group-item">{{{ $party->party_name }}}</a><br>
                @endforeach
                </ul>
              </li>
              <li><a href="/logout">LOGOUT</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<!--don't use this section but piece it out-->
<!-- <body id="body-index">
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Simply Soiree</a>
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
      </ul> -->
    <!-- </div> --><!-- /.navbar-collapse -->
  <!-- </div> --><!-- /.container-fluid -->
<!-- </nav> -->

<!-- <nav class="sidebar hovered">
    <ul class="list-group"> -->
      <!--Replace dashboard word with the actual party selected-->
        <!-- <li id="dashboard"  class="label label-default">Dashboard</li>
        <li class="list-group-item"><a href="{{ action('GuestController@index', $party->id) }}"><i class="icon-home"></i>Guests to Invite</a></li>
        <li class="list-group-item"><a href="{{ action('PartyController@index', $party->id) }}"><i class="icon-cog"></i>Planning List</a></li>
        <li class="list-group-item"><a href="{{ action('BudgetItemController@index', $party->id) }}"><i class="icon-tree-view"></i>Budget Items</a></li>
        <li class="list-group-item"><a href="{{ action('PartyController@summary', $party->id) }}">Summary</a></li>
    </ul>
</nav> -->
@if (Session::has('successMessage'))
       <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
       <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif
@yield('content')
     <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/party_soiree_template/bootstrap3/multipage/js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="/party_soiree_template/bootstrap3/multipage/js/bootstrap.min.js"></script>
    <script src="/party_soiree_template/bootstrap3/multipage/js/main.js"></script>
    
    <script>
      !function ($) {
        $(function(){
          $('#header').carousel()
        })
      }(window.jQuery)
    </script>
   
@yield('bottomscript')
</body>
</html>