
<h2><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h2>
	Published on: {{ $post->created_at->toFormattedDateString()}}
