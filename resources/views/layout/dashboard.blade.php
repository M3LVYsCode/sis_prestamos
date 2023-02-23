<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <title>Panel de Control</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><img src="./img/logo-amarillo.png" class="icon brand-icon" alt="logo"> EISPDM</a>
		<ul class="side-menu">
			<!--Home-->
			<li><a href="#" class="active"><i class='bx bxs-dashboard icon' ></i> Home</a></li>

			<!--Usuarios-->
			<li class="divider" data-text="Usuarios">Usuarios</li>
      <li><a href="#"><i class='bx bx-user icon' ></i> Registro Usuarios</a></li>

			<!--GESTION INVENTARIO-->
			<li class="divider" data-text="GESTION INVENTARIO">GESTIÓN INVENTARIO</li>
			<li>
				<a href="#"><i class='bx bxs-package icon' ></i> Inventario <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="">Inventario</a></li>
					<li><a href="#">Laboratorios</a></li>
					<li><a href="#">Numeros de Serie</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='bx bxs-category icon' ></i> Categorias</a></li>

				<li class="divider" data-text="Gestión Prestamos">Gestión Prestamos</li>

				<li><a href="#"><i class='bx bx-table icon' ></i> Prestamos</a></li>
					<li>
						<a href="#"><i class='bx bxs-notepad icon' ></i> Devoluciones <i class='bx bx-chevron-right icon-right' ></i></a>
						<ul class="side-dropdown">
							<li><a href="#">Lista</a></li>
							<li><a href="#">Pendientes</a></li>
							<li><a href="#">Entregadas</a></li>
						</ul>
					</li>

				<!--Reportes-->
				<li class="divider" data-text="Reportes">REPORTES</li>
				<li>
						<a href="#"><i class='bx bxs-report icon' ></i> Reportes <i class='bx bx-chevron-right icon-right' ></i></a>
						<ul class="side-dropdown">
							<li><a href="#">Prestamos Docentes</a></li>
							<li><a href="#">Prestamos Estudiantes</a></li>
							<li><a href="#">Reporte de Estado</a></li>
							<li><a href="#">Reporte por Ubicación</a></li>
						</ul>
				</li>

        <!--Ayuda-->
				<li class="divider" data-text="Ayuda">AYUDA</li>
				<li>
						<a href="#"><i class='bx bxs-help-circle icon' ></i> Manual de Usuarios <i class='bx bx-chevron-right icon-right' ></i></a>
						<ul class="side-dropdown">
							<li><a href="#">Manual del Encargado</a></li>
							<li><a href="#">Manual Docente</a></li>
						</ul>
				</li>
				
					
		</ul>
	
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Busqueda...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Perfil</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Ajustes</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Cerrar Sesión</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<!--<main>
			<h1 class="title">Bienvenido</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			
		
		</main>-->
		<!-- MAIN -->
		
	</section>
	<!-- NAVBAR -->

    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>