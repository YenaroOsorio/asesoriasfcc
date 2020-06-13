
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/Usuarios.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/maestros.css">
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/switchery.min.css">
  <script type="text/javascript" src="../js/switchery.min.js"></script>
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
                            <li><a href="menuAlumno.php">Asesorias</a></li>
                            <li><a href="maestros.php">Ver profesores</a></li>
                            <li><a href="#">Mis Asesoria</a></li> <!-- QUEDA pendiente esta vista -->
                             <li><a href="../perfiles/PerfilAlumno.php">perfil</a></li>
                            <li><a href="#">notificaciones</a></li> <!-- Queda pendiente-->
                            <li><a href="../index.php">Cerrar sesion</a></li>
                      </ul>
                </div>
          </nav>
    </div>  
</header>
    <div id="wrapper">
  
  <h1>Nombre Materia</h1>
  <form onsubmit="return false">
   <div class="col">
    <label>        
      <img src="../img/anonimo.jpg" style="max-width:25%;width:auto;height:auto;">
    </label>
  </div> 
  <div class="col-2">
    <label>        
      <p><strong>Profesor</strong></p>
      <b>Nombre profesor</b>
    </label>
  </div>
  <div class="col-2">
    <label>
      <p><strong>Día:</strong>Lunes</p>
     <p><strong>Hora:</strong>11:00-12:00</p>
     <p><strong>Lugar:</strong>CCO4-204</p>
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Detalles:
      <p>Opcional por parte del profesor</p>
      </label>label>
  </div>
  <div class="col-3">
    <label>
      ¿Cual es su duda?
     <input placeholder="Escribe tu pregunta?" id="duda" name="name" tabindex="5">
    </label>
  </div>
  
  
 
  <div class="col-1">
    <label>
      <p>contacto</p>
        <p>ejemplo@correo.com.mx</p>
      
    </label>
  </div>
 
  <div class="col-submit">
    <button class="submitbtn">Reservar</button>
  </div>
  
  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>


<!--<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="views/css/botones.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/estilos_inicio.css">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
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
                            <li><a href="ingresa">Ingresar</a></li>
                            <li><a href="registro">Registrarse</a></li>
                            <li><a href="inicio">Asesorias</a></li>
                            <li><a href="maestros">Maestros</a></li>
                            <li><a href="#">Crear</a></li>
                      </ul>
                </div>
          </nav>
    </div>  
</header>
   <h1>ASEOSIRIA</h1>
    <p>Formacion humano y social</p>
    <p><strong>Profesor:</strong>Anzures Garcia Mario</p>
     <p><strong>Día:</strong>Lunes</p>
     <p><strong>Hora:</strong>11:00-12:00</p>
     <p><strong>Lugar:</strong>CCO4-204</p>
</body>
</html>-->