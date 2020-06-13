<?php
    require_once '../conexion.php';
    session_start();
    $matricula = $_SESSION['matricula'];
    $link = Conectarse();
	$query = mysqli_query($link,"select * from profesores where matricula='$matricula'");
	$campo = mysqli_fetch_array($query);

    //$query = mysqli_query($link,"select count(vendido) from libros where vendido=1 and baja=0 and propietario=(select id from usuarios where matricula='$matricula')");
    //$vendidos = mysqli_fetch_array($query);
    //$vendidos[0] = 0;
    //if ($vendidos[0] == 0) $vendidos[0] = null;
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perfil Profesor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="../css/stylelogo.css">
    <link rel="stylesheet" href="../css/StyleInicio.css">
	</head>
	<body>
    <header>
        <div class="container">
              <nav>

                    <div class="logo">
                          <a href="#">Asesorias FCC</a>                        
                    </div>
                    <div class="nav-wrapper">
                          <ul>
                                <li><a href="../seccionProfesores/menuProfesor.php">Mis asesorias</a></li>
                                <li><a href="../seccionProfesores/horario/horario.php">Crear horario</a></li>
                                <li><a href="../seccionProfesores/crearAsesoria.php">Crear Asesoria</a></li>
                                <li><a href="#">notificaciones</a></li>
                                <li><a href="../index.php">Cerrar sesion</a></li>
                          </ul>
                    </div>
              </nav>
        </div> 
    </header>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/<?=$campo['imagen']?>);"></div>
				<h1 id="colorlib-logo"><a><?=$campo['nombre']?> <?=$campo['apellidos']?></a></h1>
				<span class="position"><p><?=$campo['especialidad']?></p> Facultad de Ciencias de la Computacion</span>
			</div>
			<nav id="colorlib-main-menu"  class="navbar">
				<!-- <div id="navbar" class="collapse">
					<ul>
						<li><a href="#" data-nav-section="about">Inicio</a></li>
						<li><a href="#" data-nav-section="contact">Datos de Contacto</a></li>
					</ul>
				</div> -->
			</nav>

			

		</aside>

		<div id="colorlib-main">

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">

							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Matricula <?=$matricula?></h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>Especialidad <?=$campo['especialidad']?></h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
                                        <h3>Maestria <?=$campo['maestria']?></h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
									<div class="services color-4">
										<span class="icon2"><i class="icon-phone3"></i></span>
                                        <h3>Doctorado <?=$campo['doctorado']?></h3>
									</div>
								</div>
							</div>
                            	<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>Email</h3>
									<p><?=$campo['correo']?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>Cubiculo</h3>
									<p><?=$campo['cubiculo']?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3>Telefono</h3>
									<p><?=$campo['telefono']?></p>
								</div>
							</div>
						</div>
				</div>
			</section>
            
            


			<!-- <section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Ponerse en contacto</span>
							<h2 class="colorlib-heading">Contacto</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">diosprogramando@gmail.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Cubiculo 105, CC01</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+123 456 7890</a></p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section> -->

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

