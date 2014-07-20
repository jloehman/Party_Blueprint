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
					<div class="cp-logo"><img src="/public/simple_soiree.jpeg" alt="logo">
					</div> </a>
					<ul>
						<li>
							<a href="/contact"><span class="cp-nav-link" id="clients">LOGOUT</span></a>
						</li>
						<li>
							<a href="/admin_users"><span class="cp-nav-link" id="contact">USER MANAGEMENT</span></a>
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
		</div><!-- end navigation -->
@yield('content')
<!-- footer -->