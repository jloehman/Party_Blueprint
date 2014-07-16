@extends('layouts.user_master')

@section('content')

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
				<span class="text-info">You Party Planning Animal!</span>
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, turpis placerat dignissim bibendum, nulla mauris pellentesque risus, ac odio urna at elit.
			</p>

			<p>
				Sed risus eget sapien porttitor accumsan. Nunc ac velit nibh, vel blandit justo. Nunc scelerisque odio quis ligula accumsan tempor. Proin quis nibh felis. Aenean interdum, nisl sit amet faucibus semper.
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
								Cupcake ipsum dolor sit amet. Icing gingerbread apple pie carrot cake. Marzipan candy candy canes tootsie roll liquorice croissant. Marzipan tootsie roll drag&eacute;e.
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
								Bonbon gummi bears caramels bonbon. Cake sugar plum jujubes. Powder cheesecake cotton candy topping souffl&eacute; marzipan.
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
								Gummies muffin sweet roll cotton candy tootsie roll. Tiramisu sweet roll dessert cheesecake. Marshmallow chupa chups candy canes gummies jujubes lemon drops applicake lemon drops toffee.
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
					Fusce euismod tortor eu mauris molestie non consectetur tellus rutrum. Cras viverra pharetra imperdiet. Integer euismod molestie malesuada.
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
					Etiam varius erat in nisl egestas id auctor lacus consectetur.Ut dui risus, auctor a malesuada volutpat, tempus sit amet arcu.
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
@stop

