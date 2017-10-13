<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		{{ HTML::style('css/bootstrap.min.css')}}
		{{ HTML::style('css/style.css')}}
	</head>

	<body>
		@yield('content')
	</body>
</html>