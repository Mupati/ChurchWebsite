@extends('church.master')

@section('title')
CHURCH BLOG | Read Your Favourite Articles
@endsection

@section('nav')
@include('church/partials.nav')

<div class="nav2 navbar navbar-default" id="nav2">
   <div class="col-md-8 col-md-offset-2">
	<ul class="list-inline list-unstyled">
		<li><a href="/blog">ARTICLES</a></li>
		<li><a href="/blog/hymnspiration">HYMNSPIRATION</a></li>
		<li><a href="/blog/biographies">BIOGRAPHIES</a></li>
		<li><a href="/blog/testimonies">TESTIMONIES</a></li>
	</ul>
	</div>
</div>
@endsection


@section('contents')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		@if('$posts')
		
@foreach($posts as $post)
<div class="media">
	<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
	<a class="pull-left" href="#">
		<img class="media-object img-responsive" src="{{Storage::url($post->member->avatar)}}" alt="Media Object">
	</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading">{{ $post->title }}</h4>
			<strong>{{$post->member->name}}</strong>
			<article>
				{{ $post->body }}
			</article>
		
		@foreach($post->comments as $comment)
		<div class="media">
			<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
			<a class="pull-left" href="#">
<img class="media-object img-responsive" src="{{Storage::url($comment->member->avatar)}}" alt="Media Object">
			</a>
			</div>
			<div class="media-body">
			<strong>{{$comment->member->name}}</strong>
					<article>
							<em>{{ $comment->body }}</em>
					</article>
			</div>
		</div>
		@endforeach
	
	@if(Auth::guest())
		<a href="/register"><button>Register to Comment</button></a>
	@else	
		<form method="POST" action="/profile/blog/comment" role="form">
				  {{ csrf_field() }}
 			<input type="hidden" name="posts_id" value="{{ $post->id }}">
                  	<div class="form-group"> 
					     <textarea name="body" class="form-control" placeholder="Add your comment"></textarea>
					</div>
               <div class="form-group">
                  		<button type="submit" class="btn btn-primary">Add Comment</button>
           	   </div>
        </form>


        @endif

	</div>
</div>
@endforeach



		@endif
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

			<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

	</div>

	<div class="row">
		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

			<div class="col-md-3">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

	</div>


</div>

@endsection

@section('footer')
	@include('church/partials.footer')
@endsection
