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
		  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

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
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand img-responsive" href="/"><img src="/public/simple_soiree.jpeg" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/about">ABOUT</a></li>
            <li class="active"><a href="/contact">CONTACT</a></li>
            <li>
				<a href="/register"><span class="active" id="register">REGISTER</span></a>
			</li>
			@if (Auth::check())
				<!-- user is logged in -->
				<li>{{ link_to_action('HomeController@logout', 'LOGOUT') }}</li>
			@else
				<!-- user not NOT logged in -->
				<li>{{ link_to_action('HomeController@showLogin', 'LOGIN') }}</li>
			@endif
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	<!-- navigation -->
<!-- 		<div class="container" id="cp-top">
			<div class="row visible-desktop">
				<div class="span12 cp-nav">
					<a href="/">
					<div class="cp-logo"><img src="/public/simple_soiree.jpeg" alt="logo">
					</div> </a> 
					<ul>
						<li>
							<a href="/register"><span class="cp-nav-link" id="register">REGISTER</span></a>
						</li>
						<li>
							<a href="/contact"><span class="cp-nav-link" id="clients">CONTACT</span></a>
						</li>
						<li>
							<a href="/about"><span class="cp-nav-link" id="contact">ABOUT</span></a>
						</li>
							@if (Auth::check())
		 					<!-- user is logged in -->
							<!-- <li>{{ link_to_action('HomeController@logout', 'LOGOUT') }}</li>
							@else
   							<!-- user not NOT logged in -->
    						<!-- <li>{{ link_to_action('HomeController@showLogin', 'LOGIN') }}</li>
    						@endif
					</ul>
				</div>
			</div>-->
			<!-- <div class="row hidden-desktop">
				<div class="span12 cp-nav">
					<a href="index.html">
					<div class="cp-logo"><img src="simple_soiree_template/img/logo.png" alt="logo">
					</div></a>

					<select id="cp-nav-mobile" size="1">
						<option value="/about" id="index" selected>ABOUT</option>
						<option value="/contact" id="portfolio">CONTACT</option>
						<option value="/register" id="services">REGISTER</option>
					</select>
				</div>
			</div>
		</div> --><!-- end navigation -->
		@if (Session::has('successMessage'))
		   <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		   <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
@yield('content')
  <!--Bottom Section-->
	<section id="bottom">
	  <div class="container">
	    <div class="row margin-40">
	      <div class="col-sm-10 col-sm-offset-1 text-center">
	        <p>112 E. Pecan St. San Antonio, TX 78205  |  <a href="/contact"><i class="icon-envelope-alt"></i> simplessoiree@gmail.com</a></p>
	        <hr>
	      </div>
	    </div>
	    
	    <div class="row">
	      <div class="col-sm-10 col-sm-offset-1 text-center">
	        <!--Social Icons-->          
	        <ul class="social-icons">
						<li><a class="twitter" href="http://www.twitter.com/themearmada" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
						<li><a class="facebook" href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
						<li><a class="google" href="http://www.googleplus.com" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></li>
						<li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa fa-camera-retro fa-3x"></i></a></li>
						<li><a class="pinterest" href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest fa-3x"></i></a></li>
					</ul>
	      </div>
	    </div>
	    
	  </div>
	</section>
 <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap3/multipage/js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="party_soiree_template/bootstrap3/multipage/js/bootstrap.min.js"></script>
    <script src="party_soiree_template/bootstrap3/multipage/js/main.js"></script>
    
    <script>
      !function ($) {
        $(function(){
          $('#header').carousel()
        })
      }(window.jQuery)
    </script>
</body>
</html>