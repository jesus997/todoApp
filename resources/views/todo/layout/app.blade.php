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
		<section class="todoapp">
			<header class="header">
				<h1>todos</h1>
				<input class="new-todo" placeholder="¿Que que hay que hacer?" autofocus>
			</header>
			<section class="main">
				<input id="toggle-all" class="toggle-all" type="checkbox">
				<label for="toggle-all">Marcar todos como completos</label>
				<ul class="todo-list">
					<li class="completed">
						<div class="view">
							<input class="toggle" type="checkbox" checked>
							<label>Aprender Laravel</label>
							<button class="destroy"></button>
						</div>
						<input class="edit" value="Aprender a crear una aplicación Todo">
					</li>
					<li>
						<div class="view">
							<input class="toggle" type="checkbox">
							<label>Seguir el arcoiris</label>
							<button class="destroy"></button>
						</div>
						<input class="edit" value="Hasta el infinito y más allá">
					</li>
				</ul>
			</section>
			<footer class="footer">
				<span class="todo-count"><strong>0</strong> items restantes</span>
				<ul class="filters">
					<li>
						<a class="selected" href="#/">Todos</a>
					</li>
					<li>
						<a href="#/active">Activos</a>
					</li>
					<li>
						<a href="#/completed">Completados</a>
					</li>
				</ul>
				<button class="clear-completed">Limpiar todos los completados</button>
			</footer>
		</section>
		<footer class="info">
			<p>Haga doble clic para editar una tarea</p>
			<p>Template by <a href="http://sindresorhus.com">Sindre Sorhus</a></p>
		</footer>
		<script src="{{asset("js/app.js")}}"></script>
	</body>
</html>