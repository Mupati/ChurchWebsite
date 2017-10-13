@extends('church.master')

@section('title')
 Welcome to Your Profile Page
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
		<div class="navbar-brand">
			<a href="{{ route("homePage")}}">
				<span class="glyphicon glyphicon-home">Wesley</span>
			</a>
		</div>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse">
	<ul class="nav navbar-nav pull-right">
			<li><a href="/profile"><img src="{{$url}}" id="avatar">{{ $user->username }}</a></li>
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
<a href="#"><img src="{{$url}}" class="img-responsive img-rounded" id="avatar"> </a>
<form role="form" method="post" action="{{ route('profilePicture') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
		<input type="hidden" name="id" value={{ $user->id }}>
		<div class="form-group">
			<label for="avatar">Change Profile Picture</label>
			<input type="file" name="avatar" required>
			</div>
			<button type="submit" class="btn btn-block btn-success">Upload</button>
		</form>

				<div class="caption">
					<h4>Description</h4>
						<p>He is the Caretakeer of the Church. He has served for
					   		many years and we are looking forward to His replacement
				     	</p>
		    	</div>
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


<!--
@section('custom-scripts')
<script type="text/javascript"  src="/js/custom.js">
/*$(function () { $("[data-toggle='popover']").popover().tooltip(); });*/
</script>
@endsection
-->