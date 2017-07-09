<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ui>
		@foreach ($tasks as $task) 
			<li>
				<a href="/tasks/{{ $task->id }}">
					{{ $task->body }}
				</a>
			</li>
		@endforeach
	</ui>
</body>
</html>