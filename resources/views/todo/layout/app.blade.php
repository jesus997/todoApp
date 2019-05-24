<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config("app.name", "TodoApp")}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{asset("css/todo.css")}}">
		<link rel="stylesheet" href="{{asset("css/app.css")}}">
	</head>
	<body>
		@section('body')
		@show
		<footer class="info">
			<p>Haga doble clic para editar una tarea</p>
			<p>Template by <a href="http://sindresorhus.com">Sindre Sorhus</a></p>
		</footer>
		<script src="{{asset("js/app.js")}}"></script>
	</body>
</html>