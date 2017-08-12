<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('css/custom.css')}}" rel="stylesheet">
	<title>My Application</title>
</head>
<body>


@yield('content')




@yield('footer')


<script type="text/javascript" src="{{ asset('js/jquery.js')}}""></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}""></script>
<script type="text/javascript" src="{{ asset('js/custom.js')}}""></script>
</body>
</html>