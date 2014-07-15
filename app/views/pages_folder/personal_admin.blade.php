@extends('layouts.user_master')
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Radmin - the Raddest Admin Template</title>
	<meta name="description" content="An admin template from Square Turtle Studios">
	<meta name="author" content="Square Turtle Studios">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	<!-- Logo Font - Molle -->
	<link href="/admin_template/css/molle.css" rel="stylesheet" type="text/css">

	<link href="/admin_template/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="/admin_template/css/icon-style.css" />
	<!--[if lte IE 7]>
	<script src="scripts/lte-ie7.js"></script>
	<![endif]-->
	<link href="/admin_template/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/admin_template/css/radmin.css" rel="stylesheet" id="main-stylesheet">
	<link href="/admin_template/css/radmin-responsive.css" rel="stylesheet">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="/admin_template/scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="/admin_template/scripts/jquery.cloneposition.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<script src="scripts/respond.js" type="text/javascript"></script>
	<![endif]-->
	<!--[if lte IE 9]>
	<script src="scripts/placeholder.js" type="text/javascript"></script>
	<![endif]-->
	<script type="text/javascript" src="/admin_template/scripts/theme.js"></script>
	<link rel="stylesheet" type="text/css" href="/admin_template/css/radmin-plugins.css" />

</head>
<body id="body-index">
	<div id="sticky-footer-wrap">

		<div class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-inner black-gradient">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index.html">
						<span class="rad">Rad</span>
						min
					</a>
					<div class="nav-collapse collapse">
						<p class="navbar-text pull-right">
							<a id="user-popover" href="index.html#" class="navbar-link user-info"> <i class="radmin-icon radmin-user"></i>
								Jack Frost
							</a>
							<a href="login.html" class="btn btn-mini btn-inverse navbar-link logout"> <i class="radmin-icon radmin-redo"></i>
								Logout
							</a>
						</p>

						<ul class="stats-sparkline pull-left hidden-phone hidden-tablet">
							<li>
								<span class="line-sparkline">Loading…</span>
								<span class="sparkline-text">Traffic</span>
							</li>
							<li>
								<span class="bar2-sparkline">Loading…</span>
								<span class="sparkline-text">Tickets</span>
							</li>
							<li>
								<span class="discrete-sparkline">Loading…</span>
								<span class="sparkline-text">Sales</span>
							</li>
							<li>
								<span class="bar1-sparkline">Loading…</span>
								<span class="sparkline-text">Revenue</span>
							</li>
						</ul>

						<form class="navbar-search pull-right">
							<input type="text" class="span2 search-query" placeholder="Search"></form>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">&nbsp;</div>
		</div>

		<div class="row-fluid hidden-phone hidden-tablet">
			<div class="span12 top-stats">
				<ul class="top-nav-boxes">
					<li class="top-stats-arrow" title="Hide Top Stats" id="hide-top-stats">
						<img src="/admin_template/img/chevron-left.png" alt="Hide Top Stats"/>
					</li>
					<li class="first">
						<a href="index.html#">
							<i class="radmin-bookmark"></i>
							<span>Favourites</span>
						</a>
					</li>
					<li>
						<a href="index.html#">
							<i class="radmin-pencil"></i>
							<span>New Post</span>
						</a>
					</li>
					<li>
						<div class="notifications-wrapper">
							<div class="notifications"> <strong>3</strong>
							</div>
						</div>
						<a href="index.html#">
							<i class="radmin-comments-2"></i>
							<span>Comments</span>
						</a>
					</li>
					<li>
						<a href="http://www.google.com/analytics/" target="_blank">
							<i class="radmin-dashboard"></i>
							<span>Analytics</span>
						</a>
					</li>
					<li>
						<a href="index.html#">
							<i class="radmin-stats-up"></i>
							<span>Reporting</span>
						</a>
					</li>
					<li>
						<div class="notifications-wrapper">
							<div class="notifications"> <strong>12</strong>
							</div>
						</div>
						<a href="index.html#">
							<i class="radmin-bell"></i>
							<span>Alerts</span>
						</a>
					</li>
					<li>
						<a href="index.html#">
							<i class="radmin-cabinet"></i>
							<span>Sales History</span>
						</a>
					</li>
					<li id="color-switcher-control">
						<a href="index.html#">
							<i class="radmin-cog"></i>
							<span>Styles</span>
						</a>
					</li>
				</ul>

				<div class="notifications-wrapper">
					<div class="color-switcher" id="color-switcher" style="display:none">
						<small>Choose style</small>
						<br />
						<span class="default color-switcher-color"></span>
						<span class="pink color-switcher-color"></span>
						<span class="green color-switcher-color"></span>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid main-container">

			<div class="row-fluid">
				<div class="span12">

					<div class="sidebar-nav">
						<ul class="nav nav-stacked left-menu">
							<li id="navigation-index">
								<a href="index.html">
									<span class="box">
										<i class="radmin-icon radmin-home"></i>
									</span>
									<span class="hidden-tablet hidden-phone">Dashboard</span>
								</a>
							</li>
							<li id="navigation-calendar">
								<a href="calendar.html">
									<span class="box">
										<i class="radmin-icon radmin-calendar"></i>
									</span>
									<span class="hidden-tablet hidden-phone">Calendar</span>
								</a>
							</li>
							<li id="navigation-graphs">
								<a href="graphs.html">
									<span class="box">
										<i class="radmin-icon radmin-bars"></i>
									</span>
									<span class="hidden-tablet hidden-phone">Graphs &amp; Charts</span>
								</a>
							</li>
							<li class="accordion" id="navigation-sample-pages">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#navigation-sample-pages" href="index.html#collapse1">
									<span class="box">
										<i class="radmin-icon radmin-file"></i>
									</span>
									<span class="hidden-tablet hidden-phone">Sample Pages</span>
									<span class="label pull-right hidden-tablet hidden-phone">3</span>
								</a>
								<div id="collapse1" class="accordion-body collapse">
									<ul class="nav nav-stacked submenu">
										<li>
											<a href="users.html">
												<span class="box">
													<i class="radmin-icon radmin-user"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Users</span>
											</a>
										</li>
										<li>
											<a href="invoices.html">
												<span class="box">
													<i class="radmin-icon radmin-clipboard-2"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Invoices</span>
											</a>
										</li>
										<li class="submenu-last">
											<a href="reports.html">
												<span class="box">
													<i class="radmin-icon radmin-attachment"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Reports</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="accordion" id="navigation-components">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components" href="index.html#collapse2">
									<span class="box">
										<i class="radmin-icon radmin-tree-view"></i>
									</span>
									<span class="hidden-tablet hidden-phone">Components</span>
									<span class="label pull-right hidden-tablet hidden-phone">3</span>
								</a>
								<div id="collapse2" class="accordion-body collapse">
									<ul class="nav nav-stacked submenu">
										<li>
											<a href="grid.html">
												<span class="box">
													<i class="radmin-icon radmin-grid-view"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Grid layout</span>
											</a>
										</li>
										<li>
											<a href="icons.html">
												<span class="box">
													<i class="radmin-icon radmin-picture"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Radmin Icons</span>
											</a>
										</li>
										<li class="submenu-last">
											<a href="elements.html">
												<span class="box">
													<i class="radmin-icon radmin-star"></i>
												</span>
												<span class="hidden-tablet hidden-phone">Misc. Elements</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="container-fluid content-wrapper">

						<div class="row-fluid">
							<div class="span12">
								<div class="hero-unit">
									<button type="button" class="close hidden-phone" data-dismiss="alert">&times;</button>
									<h1>Dashboard</h1>
									<p>
										This is your dashboard. Here you'll find a quick breakdown of everything that's been happening on your site, such as traffic reports, site statistics, sales, recent posts and lots more.
									</p>
									<p class="hidden-phone">
										<a class="btn btn-info btn-large pull-right">Learn more &raquo;</a>
									</p>
								</div>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">
								<h2 class="welcome">
									Welcome back,
									<span class="text-info">Jack Frost</span>
								</h2>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span5">
								<h4 class="title">Recent Activity</h4>
								<div class="squiggly-border"></div>
								<table class="table table-index">
									<thead>
										<tr>
											<th>Number</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="numbers">899</td>
											<td class="text">Unique Visitors</td>
										</tr>
										<tr>
											<td class="numbers">4</td>
											<td class="text">New Users</td>
										</tr>
										<tr>
											<td class="numbers">1</td>
											<td class="text">New Blog Post</td>
										</tr>
										<tr>
											<td class="numbers">16</td>
											<td class="text">Comments</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="span7">
								<h4 class="title">Example Chart</h4>
								<div class="squiggly-border"></div>
								<div class="graph" id="flot-line-graph"></div>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">&nbsp;</div>
						</div>

						<div class="row-fluid">
							<div class="span8">
								<h4 class="title">Support Requests</h4>
								<div class="squiggly-border"></div>
								<table class="table table-index">
									<thead>
										<tr>
											<th>Status</th>
											<th style="width: 416px;">Message</th>
											<th>User</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<span class="badge">Open</span>
											</td>
											<td>Mauris in ante justo, at convallis erat</td>
											<td>Jane Doe</td>
										</tr>
										<tr>
											<td>
												<span class="badge badge-info">Closed</span>
											</td>
											<td>Aenean aliquet accumsan est, nec volutpat ligula rhoncus ac</td>
											<td>John Smith</td>
										</tr>
										<tr>
											<td>
												<span class="badge badge-success">Responded</span>
											</td>
											<td>
												Fusce euismod tortor eu mauris molestie non consectetur tellus rutrum lorem ligula
											</td>
											<td>Jack Jones</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="span4">
								<h4 class="title">Content</h4>
								<div class="squiggly-border"></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, turpis placerat 
						dignissim bibendum, nulla mauris pellentesque risus, ac odio urna at elit.
								</p>

								<p>
									Sed risus eget sapien porttitor accumsan. Nunc ac velit nibh, vel blandit justo. Nunc scelerisque 
						odio quis ligula accumsan tempor. Proin quis nibh felis. Aenean interdum, nisl sit amet faucibus 
						semper.
								</p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">&nbsp;</div>
						</div>

						<div class="row-fluid">
							<div class="span12">
								<h4 class="title">Recent Comments</h4>
								<div class="squiggly-border"></div>

								<div class="row-fluid">
									<div class="span12">
										<div class="span1 hidden-phone">
											<div class="comment-image thumbnail">
												<img src="/admin_template/img/lorempixel1.jpg" alt="User thumb"/>
											</div>
										</div>
										<div class="span11 comment-wrapper">
											<div class="speech-bubble-left hidden-phone">&nbsp;</div>
											<div class="comment-text">
												<p>
													Cupcake ipsum dolor sit amet. Icing gingerbread apple pie carrot cake. Marzipan candy 
										candy canes tootsie roll liquorice croissant. Marzipan tootsie roll drag&eacute;e.
												</p>
											</div>
											<div class="comment-controls pull-right btn-group">
												<a class="btn btn-mini" href="index.html#">
													<span>Approve</span>
													<i class="icon icon-ok-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Spam</span>
													<i class="icon icon-exclamation-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Delete</span>
													<i class="icon icon-remove-sign"></i>
												</a>
											</div>
											<div class="comment-info">
												<h6>
													Estella Havisham on Oct 10, 2012
													<small>IP: 192.168.1.101</small>
												</h6>
											</div>
										</div>
									</div>
								</div>

								<div class="row-fluid">
									<div class="span12"></div>
								</div>

								<div class="row-fluid">
									<div class="span12">
										<div class="span11 comment-wrapper image-right">
											<div class="speech-bubble-right hidden-phone">&nbsp;</div>
											<div class="comment-text">
												<p>
													Bonbon gummi bears caramels bonbon. Cake sugar plum jujubes. Powder cheesecake cotton 
										candy topping souffl&eacute; marzipan.
												</p>
											</div>
											<div class="comment-controls pull-right btn-group">
												<a class="btn btn-mini" href="index.html#">
													<span>Approve</span>
													<i class="icon icon-ok-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Spam</span>
													<i class="icon icon-exclamation-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Delete</span>
													<i class="icon icon-remove-sign"></i>
												</a>
											</div>
											<div class="comment-info">
												<h6>
													Artful Dodger on Oct 8, 2012
													<small>IP: 172.16.254.1</small>
												</h6>
											</div>
										</div>
										<div class="span1 hidden-phone">
											<div class="comment-image thumbnail">
												<img src="/admin_template/img/lorempixel2.jpg" alt="User thumb"/>
											</div>
										</div>
									</div>
								</div>

								<div class="row-fluid">
									<div class="span12"></div>
								</div>

								<div class="row-fluid">
									<div class="span12">
										<div class="span1 hidden-phone">
											<div class="comment-image thumbnail">
												<img src="/admin_template/img/lorempixel3.jpg"  alt="User thumb"/>
											</div>
										</div>
										<div class="span11 comment-wrapper">
											<div class="speech-bubble-left hidden-phone">&nbsp;</div>
											<div class="comment-text">
												<p>
													Gummies muffin sweet roll cotton candy tootsie roll. Tiramisu sweet roll dessert 
										cheesecake. Marshmallow chupa chups candy canes gummies jujubes lemon drops applicake 
										lemon drops toffee.
												</p>
											</div>
											<div class="comment-controls pull-right btn-group">
												<a class="btn btn-mini" href="index.html#">
													<span>Approve</span>
													<i class="icon icon-ok-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Spam</span>
													<i class="icon icon-exclamation-sign"></i>
												</a>
												<a class="btn btn-mini" href="index.html#">
													<span>Delete</span>
													<i class="icon icon-remove-sign"></i>
												</a>
											</div>
											<div class="comment-info">
												<h6>
													Clara Barley on Oct 6, 2012
													<small>IP: 1.2.3.4</small>
												</h6>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="row-fluid">
							<div class="span12">&nbsp;</div>
						</div>

						<div class="row-fluid">
							<div class="span12">
								<h4 class="title">Recent Tweets</h4>
								<div class="squiggly-border"></div>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span10">
								<blockquote>
									<p>
										Fusce euismod tortor eu mauris molestie non consectetur tellus rutrum. Cras viverra pharetra 
							imperdiet. Integer euismod molestie malesuada.
									</p>
									<small>Jack Frost via Tweetdeck</small>
								</blockquote>
							</div>
							<div class="span2">
								<div class="controls pull-right">
									<button class="btn btn-mini btn-info">Edit</button>
									<button class="btn btn-mini btn-danger">Delete</button>
								</div>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span10">
								<blockquote>
									<p>
										Etiam varius erat in nisl egestas id auctor lacus consectetur. 
							Ut dui risus, auctor a malesuada volutpat, tempus sit amet arcu.
									</p>
									<small>Jane Doe via Mobile</small>
								</blockquote>
							</div>
							<div class="span2">
								<div class="controls pull-right">
									<button class="btn btn-mini btn-info">Edit</button>
									<button class="btn btn-mini btn-danger">Delete</button>
								</div>
							</div>
						</div>

						<!-- <div class="row-fluid">
						<div class="shadow-bottom"></div>
					</div>
					-->
				</div>
			</div>

			<div class="row-fluid">
				<div class="span12">&nbsp;</div>
			</div>

		</div>
	</div>

	<div id="sticky-footer-push"></div>
</div>

<!-- Footer -->

<footer class="black-gradient">
	<a class="brand pull-right" href="index.html">
		<span class="rad">Rad</span>
		min
	</a>
	<div class="square-turtle pull-left">
		<p>
			2012 &copy; All rights reserved -
			<a href="http://www.squareturtle.com.au" target="_blank">square turtle studios</a>
		</p>
	</div>
</footer>
<!-- Javascript -->

<!-- Sparklines -->
<script type="text/javascript" src="/admin_template/scripts/sparkline.js"></script>

<script type="text/javascript">
     	switcher_div = $('#color-switcher');
		switcher_control = $('#color-switcher-control');
		switcher_is_transitioning = false;
		
		switcher_div_style = {
			'width': switcher_control.children('a:first').width(),
			'z-index': 2,
			'top': '+=78px',
			'left': '-=5px'
		};
		
		switcher_control_style = {
			'z-index': 3,
			'position': 'relative'
		};

		
		
		function get_flot_colors() {
		    if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22', '#9D3844', '#533436', '#082D35'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861', '#A5C77F', '#6d9f00', '#002F32'];
		    } else {
		        return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		    }
		
		    return ['#49AFCD', '#FF6347', '#38849A', '#BF4A35', '#999', '#555'];
		}
		
		function get_sparkline_colors(){
			if(radmin_current_theme === 'pink') {
		        return ['#E63E5D', '#97AF22'];
		    } else if(radmin_current_theme === 'green') {
		        return ['#42826C', '#FFC861'];
		    } else {
		        return ['#49AFCD', '#FF6347'];
		    }
		
		    return ['#49AFCD', '#FF6347'];
		}
     
	    var sparkline_colors = get_sparkline_colors();
	    
    	/**
		 *  Jquery Load Event
		 *
		 */
		jQuery(function($){
			// format date inputs
			$( "a[rel=popover]" ).popover();
			
 	        $('.bar1-sparkline').sparkline([12, 8, 10, 13, 15, -6, -8, 10, 18, 10, -8, -7 ], {type: 'bar', barColor: sparkline_colors[0], negBarColor: sparkline_colors[1], barWidth: '5', height: '20'} );
	       
	        $('.bar2-sparkline').sparkline([ [5,6],[7,9],[9,5],[6,2],[10,4],[6,7],[5,4],[6,7] ], {type: 'bar',stackedBarColor: sparkline_colors, barWidth: '5', height: '20'} );
	       
	        $('.discrete-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,14,15,16,17,18,17,16,17 ], {type: 'discrete', lineColor: sparkline_colors[0], height: '20'} );
	       
	        $('.line-sparkline').sparkline([ 12,11,13,14,13,12,11,12,13,14,15,16,15,14,13,12,11,12,13,14,15,16,17,18 ], {type: 'line', lineColor: sparkline_colors[0], fillColor: sparkline_colors[0], height: '20'} );
	        
	        $('#user-popover').popover();
	        
	        /**
	         * Sets active and expands menu items based on id of body tag of current page
	         * e.g. <body id="body-index-page"> will result in the menu item with the id="navigation-index-page" having the 
	         * class 'active' added, subsequently it will look for a child div with a class of collapse and add the class 'in' 
	         * and set the height to auto
	         */
	        var body_id = $('body').attr('id');
			if(body_id != null){
				var nav_element = $('#navigation-' + body_id.replace('body-',''));
	        	nav_element.addClass('active');
	        	if(nav_element.has('div.collapse')){
	        		var child_nav = nav_element.find('div.collapse');
	        		child_nav.addClass('in');
	        		child_nav.css('height: auto;');
	        		
	        	}
	        	
	        }
	        
	        //hide the top-stats when the arrow is clicked
	        var item = $('.top-stats');
	        var target = $('#hide-top-stats');
	        if(item.length > 0 && target.length > 0){
   		        target.on('click', function() {
					item.css('position', 'relative');
					item.animate({
					    left: '-=1200',
		  		  	}, 1000, function() {
					    // Animation complete.
					    item.hide('slow');
					});
				});
			}
			
			//display the color-switcher and change theme (plus anything with comments of //used in theming logic )
			position_color_switcher(true);
			switcher_div.show();
			
			switcher_control.on('click', toggle_color_switcher);
			
			$(window).resize(function() {
				switcher_div.hide();
			});
			
			$('.color-switcher-color').bind('click', set_theme_url);
			
			
		});
		
    </script>

<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="scripts/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/admin_template/scripts/flot/jquery.flot.js"></script>
<script type="text/javascript" src="/admin_template/scripts/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/admin_template/scripts/charts.js"></script>
<script type="text/javascript">
	jQuery(function($){
		flot_sin_cos('flot-line-graph', flot_options_sin_cos);
	});
	</script>

</body>
</html>