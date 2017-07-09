<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task) 
			<li>{{ $task }}</li>
		@endforeach
	</ul>
</body>
</html>