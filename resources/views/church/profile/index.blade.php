@extends('church.master')

@section('title')
	Welcome
@endsection

@section('nav')
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
@endsection

@section("contents")
<div class="top">
	<div class="container">
		<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs try">
<!--<a href="#profilePic" title="Upload a Profile Picture" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Some content in Popover on right">
	<img src="/img/pumba.jpg" alt="member-img" class="img-responsive img-rounded">
</a>.-->

<a href="#img"><img src="/img/pumba.jpg" class="img-responsive img-rounded"> </a>

				<div class="caption">
					<h4>Description</h4>
						<p>He is the Caretakeer of the Church. He has served for
					   		many years and we are looking forward to His replacement
				     	</p>
		    	</div>
		</div>
		<div id="img" title="Upload Profile Picture">

		</div>
		<div class="news col-sm-9 col-md-9 col-lg-9">
		 <h1>Load newsfeed here</h1>	
		 <p>

		</p>
		</div>
		

	</div>
</div>
</div>

@endsection

@section('custom-scripts')
<script type="text/javascript">
	$(function () { $("[data-toggle='popover']").popover().tooltip(); });
</script>
@endsection