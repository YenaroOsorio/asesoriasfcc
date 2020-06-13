<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/inicio.css">
	<script src="https://kit.fontawesome.com/83bf843cab.js"></script>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/header.css">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
	<title>Asesorias FCC</title>
</head>
<body>
    <header>
		<div class="container">
			<nav>
				
					<div class="logo">
						<a href="#">Asesorias FCC</a>
					</div>
					
			</nav>
		</div>  
	</header>
	
	<main class="class-main">
		<div class="container">
			<div class="left-box">
				<ul>
					<li>
						<i class="fas fa-question-circle icon"></i>
						Resuelve todas tus dudas.
						<i></i>
					</li>
					<li>
						<i class="fas fa-users icon"></i>
						Refuerza tus conocimientos.
					</li>
					<li>
						<i class="fas fa-coffee icon"></i>
						Recive apoyo de tus profesores.
					</li>
				</ul>
			</div>
			<div class="right-box">
				<div class="card">
					<div class="head">
						<i class="fas fa-swatchbook logo-icon"></i>
					</div>
					<h1>Descubre los beneficios</h1>
					<h1>de las asesorías</h1>
					<p>Reserva una hoy mismo.</p>
					<button class="btn primary block" onclick="window.location.href = 'login.php';" style="cursor:pointer">Inicia Sesión</button>
					<a href="preRegistro.php"> <button class="btn outline block" style="cursor:pointer">Registrate</button> </a>
				</div>
			</div>

			
		</div>
	</main>
	<?php require 'modules/footer.php'; ?>
</body>
</html>