<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
</head>
<body>

<ul>
	@foreach ($tasks as $task)

		<li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
	
	@endforeach	

</ul>


<h4>Finished</h4>

<a href="/finished"><button>Click to View</button></a>


</body>
</html>