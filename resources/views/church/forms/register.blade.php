@extends('church.master')

@section('title')
Register as a Member
@endsection

@section('nav')
	@include('church/partials.nav')
@endsection

@section('contents')
<div class="register">
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<fieldset>
		<legend class="text-center"> Membership Form</legend>
		

<form role="form" method="post" action="{{ route('addMember') }}">
				{{ csrf_field() }}
			<div class="form-group">
				<label role="name" class="control-label">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>

			</div>
			<div class="form-group">
				<label role="uname" class="control-label">Username</label>
				<input type="text" class="form-control" id="uname" name="uname" placeholder="Special Username" value="{{ old('uname') }}" required>

			</div>
			<div class="form-group">
				<label role="phone" class="control-label">Phone Number</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="0546107464" value="{{ old('phone') }}" required autofocus>

			</div>
			<div class="form-group">
				<label role="email" class="control-label">E-mail</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="ocran@gmail.com" value="{{ old('email') }}">
			</div>
			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

			</div>
			<div class="form-group">
				<label for="password-confirm" class="control-label">Confirm Password</label>
				<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Re-enter Password" required>
			</div>
			<button type="submit" class="btn btn-block btn-success">Sign Up</button>
		</form>
		</fieldset>
		</div>
	</div>
</div>
</div>
@endsection

@section('footer')
	@include('church/partials.footer')
@endsection
