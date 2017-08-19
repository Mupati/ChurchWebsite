@extends('church.master')

@section('contents')


<!--
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-md-5 col-sm-offset-3 col-md-offset-3">
			@foreach($posts as $post)
				<h3 class="pull-left">{{ $post->title }}</h3>
				<p class="pull-right">{{ $post->created_at->toFormattedDateString() }}</p>
					<hr>
					<p>{{ $post->body }}</p>
			@endforeach
		</div>
	</div>
</div>

-->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">

@foreach($posts as $post)
<div class="media">
	<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
	<a class="pull-left" href="#">
		<img class="media-object img-responsive" src="/img/mum.jpg" alt="Media Object">
	</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading">{{ $post->title }}</h4>
			<article>
				{{ $post->body }}
			</article>

		@foreach($post->comments as $comment)
		<div class="media">
			<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
			<a class="pull-left" href="#">
				<img class="media-object img-responsive" src="/img/rafiki.jpg" alt="Media Object">
			</a>
			</div>
			<div class="media-body">
					<article>
							{{ $comment->body }}
					</article>
			</div>
		</div>
		@endforeach
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
	</div>
</div>
@endforeach

	</div>
	</div>
</div>





<div class="container">
	<div class="row">

<div class="col-xs-12 col-sm-5 col-md-5 col-sm-offset-3 col-md-offset-3">
	<h1 class="lead text-center">Publish A Post</h1>
	
	<hr>
<form method="POST" action="/profile/blog" class="form-horizontal" role="form">
				  {{ csrf_field() }}
		    <div class="form-group">
                <label for="title" class="control-label">Title</label>
                 	<input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
				<label for="body">Body</label>
					<textarea name="body" class="form-control" rows="3"></textarea>
			</div>

                  <div class="form-group">
                  		<button type="submit" class="btn btn-primary">Publish</button>
                  </div>
  	</form>
		
	  </div>
	
	</div>
</div>

@endsection
