<!DOCTYPE html>
<html>
<head>
	<title>show</title>
</head>
<body>

<h1>Boss Major Lee</h1>

<p><strong>{{$task->body}}</strong></p>
<a href="/tasks"><button>Go Back</button></a>
<!--

/*	@foreach($finished as $finish)
	<p> 
	Good job guys!!. You finished task <strong>#{{$finish->id}}</strong>.<br>
	Your were supposed to {{$finish->body}}.
	</p>
	@endforeach
	*/
-->
</body>
</html>