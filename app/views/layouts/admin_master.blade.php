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
		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/font-awesome.min.css">
		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/animate.css">
		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/admin.css">
		  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		  <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>

		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/bootstrap.min.css">
		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/main.css">
		  <link rel="stylesheet" href="party_soiree_template/bootstrap3/multipage/css/custom-styles.css">

		  <script src="party_soiree_template/bootstrap3/multipage/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		  <!-- Fav and touch icons -->
		  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-144-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-114-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-72-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" href="party_soiree_template/bootstrap3/multipage/apple-touch-icon-57-precomposed.png">
		  <link rel="shortcut icon" href="party_soiree_template/bootstrap3/multipage/favicon.png">

@yield('topscript')
</head>
<body>
	<div class="navbar navbar-inverseadmin navbar-fixed-top">
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
          	 <li><a href="/admin_admin">ADMIN</a></li>
             <li><a href="/admin_users">USER</a></li>
             <li>{{ link_to_action('HomeController@logout', 'LOGOUT') }}</li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	
@yield('content')

	
	
<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="party_soiree_template/bootstrap3/multipage/js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="party_soiree_template/bootstrap3/multipage/bootstrap3/multipage/js/bootstrap.min.js"></script>
    <script src="party_soiree_template/bootstrap3/multipage/bootstrap3/multipage/js/main.js"></script>
    
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