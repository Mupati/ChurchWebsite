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
		<a class="navbar-brand" href="{{ route('homePage') }}">Wesley Methodist</a>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse">
	<ul class="nav navbar-nav pull-right">
			<li><a href="/profile">Profile</a></li>
			<li><a href="/profile/blog">Blog</a></li>
			<li><a href="/profile/forum">Forum</a></li>
			<li><a href="/profile/store">Store</a></li>
			<li><a href="{{ route('memberLogout') }}"
                  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                         Logout
           </a></li>
    <form id="logout-form" action="{{ route('memberLogout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
       </form>
	</ul>


	</div>
</nav>

<div class="top">
	<div class="container">
		<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs try">
		<img src="/img/pumba.jpg" alt="member-img" class="img-responsive img-rounded">
				<div class="caption">
					<h4>Description</h4>
						<p>He is the Caretakeer of the Church. He has served for
					   		many years and we are looking forward to His replacement
				     	</p>
		    	</div>
		</div>

		<div class="news col-sm-9 col-md-9 col-lg-9">
		 <h1>Load newsfeed here</h1>	
		</div>

	</div>
</div>
</div>





<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
</body>
</html>

