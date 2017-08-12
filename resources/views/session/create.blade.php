@extends('master')

@section('frontpage')

<div class="work container">
	<div class="row">
<h1 class="text-center">Register</h1>

<form method="POST" action="/register">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control"  id="name" name="name" required>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
	<input type="email" class="form-control"  id="email" name="email" required>
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
	<input type="password" class="form-control"  id="password" name="password" required>
	</div>

	<div class="form-group">
		<label for="password_confirmation">Confirm Your Password:</label>
	<input type="password" class="form-control"  id="password_confirmation" name="password_confirmation" required>
	</div>


	<div class="form-group">
	<button type="submit" class="btn btn-primary">Register</button>
	</div>


</form>




	</div> 
</div>

@endsection