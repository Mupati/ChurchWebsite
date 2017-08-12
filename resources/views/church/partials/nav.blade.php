<!--Header with Navigations-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
		<span class="sr-only">Menu</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
		<a class="navbar-brand" href="{{ route('homePage') }}">Wesley Methodist</a>
	</div>

	
<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
	<form action="{{route('memberLogin')}}" method="post" class="nav-form form-inline" role="form">

		{{ csrf_field() }}

<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	<input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}" required autofocus>
			</div>

<div class="form-group">
<input type="password" class="form-control" name="pwd" placeholder="Password" required>
	</div>
	<button type="submit" class="btn btn-success">Login</button><br>
		<a href="/reset" id="nav-link">Forgot your password?</a>
		</form>
</div>


</nav>
<!--Second Navigation-->
@yield('nav2')




