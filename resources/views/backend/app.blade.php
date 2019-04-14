<!DOCTYPE html>
<html>
<head>
	<title>Archivos</title>

	<meta charset="utf-8">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/css/all.min.css') }}">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bgstyle.css') }}">
</head>
<body>

	<!-- Menú lateral -->
	<div class="grey darken-3" style="height: 35px;">
		<ul id="slide-out" class="sidenav">
			<li>
				<div class="user-view">
				  <div class="background">
				  	<img src="{{ asset('assets/images/background.jpg') }}">
				  </div>
				  <a href="#"><img class="circle" src="{{ asset('assets/images/profile.png') }}"></a>
			      <a href="#"><span class="white-text name">{{ auth()->user()->name }}</span></a>
			      <a href="#"><span class="white-text email">{{ auth()->user()->email }}</span></a>
			      <a href="#"><i class="fas fa-power-off" aria-hidden="true" style="margin-right: 15px; color: red;"></i>Cerrar sesión</a>
				</div>
			</li>
			<li {{ request()->is('panel') ? 'class=active' : '' }}><a class="waves-effect" href="{{ route('admin') }}"><i class="fas fa-tasks"></i>Tablero</a></li>
		    <li {{ request()->is('panel/users') ? 'class=active' : '' }}><a class="waves-effect" href="{{ route('admin.users') }}"><i class="fas fa-user-secret"></i>Usuarios</a></li>
		    <li {{ request()->is('panel/files') ? 'class=active' : '' }}><a class="waves-effect" href="{{ route('admin.files.index') }}"><i class="fas fa-cloud-upload-alt"></i>Archivos</a></li>
		</ul>
		<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons menu">menu</i></a>
	</div>
	<!-- /Menú lateral -->

	<!-- Contenido del tablero -->
    @yield('content')
	<!-- /Contenido del tablero -->


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
			$('select').formSelect();
		});
	</script>
</body>
</html>