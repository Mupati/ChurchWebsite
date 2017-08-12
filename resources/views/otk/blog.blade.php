<!--This is the master layout that is inherited-->
@extends('otk.blog-master')


<!--This displays the blog posts-->
@section('blog-posts')

	@foreach($posts as $post)
 		@include('otk.blog-posts')
 	@endforeach

@endsection


<!--This is the partial for the form-->
@section('blog-form')

	@include('partials.blog-form')

@endsection	
