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
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand img-responsive" href="index.html"><img src="/public/simple_soiree.jpeg" alt="logo"></a>
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
	<!-- navigation -->
		<!-- <div class="container" id="cp-top">
			<div class="row visible-desktop">
				<div class="span12 cp-nav">
					<a href="/">
					<div class="cp-logo"><img src="/public/simple_soiree.jpeg" alt="logo">
					</div> </a>
					<ul>
						<li>
							<a href="/contact"><span class="cp-nav-link" id="clients">{{ link_to_action('HomeController@logout', 'LOGOUT') }}</span></a>
						</li>
						<li>
							<a href="/admin_users"><span class="active" id="contact">USER MANAGEMENT</span></a>
						</li>
						<li>
							<a href="/admin_admin"><span class="cp-nav-link" id="clients">ADMIN MANAGEMENT</span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row hidden-desktop">
				<div class="span12 cp-nav">
					<a href="index.html">
					<div class="cp-logo"><img src="simple_soiree_template/img/logo.png" alt="logo">
					</div></a>

					<select id="cp-nav-mobile" size="1">
						<option value="/about" id="index" selected>LOGOUT</option>
						<option value="/admin_users" id="portfolio">USER MANAGEMENT</option>
						<option value="/admin_admin" id="services">ADMIN MANAGEMENT</option>
					</select>
				</div>
			</div>
		</div> --><!-- end navigation -->
@yield('content')
<!-- footer -->
		<!-- <div class="container">
			<div class="row">
				<div class="span12 cp-footer cp-span-footer">
					<div class="span3 cp-gutter-correction">
						<address>
							Simple Soiree
							<br>
							110 E Houston St
							<br>
							San Antonio
						</address>
					</div>
					<div class="span3">
						<address>
							Phone 210 3456780
							<br>
							E-Mail <a href="mailto:imsplesoiree@gmail.com">simplesoiree@gmail.com</a>
						</address>
					</div>
					<div class="span6">
						<a href="#"><img src="simple_soiree_template/img/36_facebook.png" class="cp-footer-img cp-tooltip" data-placement="top" title="facebook"></a>
						<a href="#"><img src="simple_soiree_template/img/36_googleplus.png" class="cp-footer-img cp-tooltip" data-placement="top" title="google+"></a>
						<a href="#"><img src="simple_soiree_template/img/36_twitter.png" class="cp-footer-img cp-tooltip" data-placement="top" title="twitter"></a>
						<a href="#"><img src="simple_soiree_template/img/36_rss.png" class="cp-footer-img cp-tooltip" data-placement="top" title="rss"></a>
					</div>
				</div>
			</div>
		</div> --><!-- end footer -->
<!-- footer -->
<!--Bottom Section-->
	
	
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