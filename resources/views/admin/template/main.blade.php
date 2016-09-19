<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<script src= "{{ asset('plugins/jquery/js/jquery-3.1.0.js') }}"></script>
	<script src= "{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</head>
<body class="admin-body">
	@include('admin.template.partials.nav')
	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>
		</div>
	</section>

	<footer class="admin-footer">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }}</p>
				</div>
			</div>
		</nav>
	</footer>
</body>
</html>