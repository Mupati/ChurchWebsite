
@extends('otk.blog-master')


@section('blog-posts')
<!--
<h1 class="text-center">{{ $post->category}}</h1>
<hr>

<h2>{{ $post->title }} </h2>

<article>
	{{ $post->body }}
</article>


	<h3>Comments</h3>
	<article>
		@foreach($post->comments as $comment)
			{{ $comment->body }}
		@endforeach
	</article>
-->

<div class="media">
	<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">s
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
		<form method="POST" action="/blog/{{ $post->id }}/comment" role="form">
				  {{ csrf_field() }}
				   <div>
				  @include('otk.error')
				  	</div>
				     <!--<div class="form-group">
				  <input type="hidden" name="post_id" value="{{ $post->id}}">
				    </div> -->
                  	<div class="form-group"> 
					     <textarea name="body" class="form-control" placeholder="Add your comment"></textarea>
					</div>
                  <div class="form-group">
                  		<button type="submit" class="btn btn-primary">Add Comment</button>
                  </div>
            </form> 
	</div>
</div>


@endsection

