<!DOCTYPE html
<html>
<head>
	<title></title>
	<!-- Styles -->
		  <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/font-awesome.min.css">
		  <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/animate.css">
		  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		  <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/bootstrap.min.css">
		  <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/main.css">
		  <link rel="stylesheet" href="/party_soiree_template/bootstrap3/multipage/css/custom-styles.css">

		  <script src="/party_soiree_template/bootstrap3/multipage/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		  <!-- Fav and touch icons -->
		  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-144-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-114-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-72-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-57-precomposed.png">
		  <link rel="shortcut icon" href="/party_soiree_template/bootstrap3/multipage/favicon.png">
		  <link rel="stylesheet" href="/css/home_master.css">
		  <link rel="stylesheet" href="/css/welcome.css">
		  <link rel="stylesheet" href="/css/jquery.datetimepicker.css">

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
          <a class="navbar-brand img-responsive" href="/"><img src="/img/LOGOresize.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li><a id="user_name" class="active">Signed in as:&nbsp;{{ Auth::user()->first_name }}</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Parties<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <!--Logic around the drop down box-->
                 @foreach(Auth::user()->parties as $party)
      			  <!-- When one is chosen, it to renders the party's specific information -->
                  <a href="{{{ action('PartyController@summary', $party->id) }}}" class="list-group-item">{{{ $party->party_name }}}</a><br>
                @endforeach
                </ul>
              </li>
              <li><a href="/logout">LOGOUT</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
@yield('content')
</section>
	<section class="adminfooter">
</section>

<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/js/jquery.datetimepicker.js" type="text/javascript"></script>
@yield('bottomscript')
</body>
</html>