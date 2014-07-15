<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Saltflakes">
		<meta name="description" content="cloud pepper is a plain and fine web theme based on twitter bootstrap.">
		<link rel="stylesheet" type="text/css" href="simple_soiree_template/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="simple_soiree_template/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="simple_soiree_template/css/camera.css">
		<link rel="stylesheet" type="text/css" href="simple_soiree_template/css/colorbox.css">
		<link rel="stylesheet" type="text/css" href="simple_soiree_template/css/cloud-pepper.css">
		<link rel="shortcut icon" type="image/x-icon" href="simple_soiree_template/img/favicon.ico" >
		<link rel="icon" type="image/x-icon" href="simple_soiree_template/img/favicon.ico" >
		<title>Simple Soiree</title>
	
@yield('topscript')
</head>
<body>
	<!-- navigation -->
		<div class="container" id="cp-top">
			<div class="row visible-desktop">
				<div class="span12 cp-nav">
					<a href="/">
					<div class="cp-logo"><img src="/simple_soiree_template/img/logo.png" alt="logo">
					</div> </a>
					<ul>
						<li>
							<a href="/about"><span class="cp-nav-link" id="contact">ABOUT</span></a>
						</li>
						<li>
							<a href="/contact"><span class="cp-nav-link" id="clients">CONTACT</span></a>
						</li>
						<li>
							<a href="/register"><span class="cp-nav-link" id="register">REGISTER</span></a>
						</li>
						<li>
							<a href="/login"><span class="cp-nav-link" id="login">LOGIN</span></a>
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
						<option value="/about" id="index" selected>ABOUT</option>
						<option value="/contact" id="portfolio">CONTACT</option>
						<option value="/register" id="services">REGISTER</option>
					</select>
				</div>
			</div>
		</div><!-- end navigation -->
@yield('content')
<!-- footer -->
		<div class="container">
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
		</div><!-- end footer -->

		<!-- scripts -->
		<!-- http://jquery.com/ -->
		<script type="text/javascript" src="simple_soiree_template/js/jquery-1.8.2.min.js"></script>

		<!-- http://twitter.github.com/bootstrap/ -->
		<script type="text/javascript" src="simple_soiree_template/js/bootstrap.min.js"></script>

		<!-- http://www.pixedelic.com/plugins/camera/ -->
		<script type="text/javascript" src="simple_soiree_template/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="simple_soiree_template/js/camera.min.js"></script>

		<!-- http://www.jacklmoore.com/colorbox -->
		<script type="text/javascript" src="simple_soiree_template/js/jquery.colorbox-min.js"></script>

		<!-- http://bassistance.de/jquery-plugins/jquery-plugin-validation/ -->
		<script type="text/javascript" src="simple_soiree_template/js/jquery.validate.min.js"></script>

		<!-- fewo-pitzen scripts -->
		<script type="text/javascript" src="simple_soiree_template/js/cloud-pepper.js"></script>
		<!-- end scripts -->
</body>

@yield('bottomscript')