<!DOCTYPE html>
<html>
<head>
	<title> Krox Lines</title>
</head>
<body>

<ul>
	@foreach($tasks as $task)
		<li>{{ $task->id."++++>".$task->body }}</li>
	@endforeach	
</ul>


</body>
</html>