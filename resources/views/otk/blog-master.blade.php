<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		<title>Welcome Blogger</title>
	</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
		<span class="sr-only">Toggle Navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
		<a class="navbar-brand" href="#">Welcome</a>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse">
	<ul class="nav navbar-nav pull-right">
			<li><a href="#">Profile</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Ask</a></li>
			<li><a href="/otk">Sign Out</a></li>
	</ul>
	</div>
</nav>

	<div class="work row">
		<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs try">
			<img src="/img/pumba.jpg" alt="member-img" class="img-responsive img-rounded">
				<div class="caption">
					<h4>Description</h4>
						<p>He is the Caretakeer of the Church. He has served for
					   		many years and we are looking forward to His replacement
				     	</p>
		    	</div>
		</div>


		<div class="col-sm-7 col-md-7 col-lg-7  col-sm-offset-3 col-md-offset-3">

			@yield('blog-posts')
		
		</div>
		
		<div class="col-sm-2 col-md-2 col-lg-2 hidden-xs try col-sm-offset-10 col-md-offset-10">
			<h4 class="lead">Upcoming Programmes</h4>
			<ul class="list-unstyled">
				<li>PrayerFest</li>
				<li>Circuit Rally</li>
				<li>Circuit Rally</li>
				<li>Circuit Rally</li>
				<li>Circuit Rally</li>
				<li>Circuit Rally</li>
			</ul>

			<h4 class="lead">Meeting Days</h4>
			<ul class="list-unstyled">
				<li>Church Choir - 5:00pm</li>
				<li>Church Choir - 5:00pmly</li>
				<li>Church Choir - 5:00pm</li>
				<li>Church Choir - 5:00pm</li>
				<li>Church Choir - 5:00pm</li>
				<li>Church Choir - 5:00pm</li>
			</ul>
		</div>
	
	</div>



<!--New container for the Form tutorials -->
@yield('blog-form')


<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
</body>
</html>
