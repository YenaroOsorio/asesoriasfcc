
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
                            <li><a href="menuProfesor.php">Mis asesorias</a></li>
                            <li><a href="horario/horario.php">Crear horario</a></li>
                            <li><a href="#">Crear Asesoria</a></li>
                             <li><a href="../perfiles/PerfilProfesor.php">perfil</a></li>
                            <li><a href="#">notificaciones</a></li>
                            <li><a href="../salir.php">Cerrar sesion</a></li>
                      </ul>
                </div>
          </nav>
    </div>  
</header>
    <div id="wrapper">
  
  <h1>Asesoria que se impartira</h1>
  <form onsubmit="return false">
  
  <div class="col-2">
    <label>        
      <p><strong>Nombre Asesoria</strong></p>
      <input placeholder="Asesoria" id="duda" text="text" tabindex="3">
    </label>
  </div>
  <div class="col-2">
    <label>
    <p><strong>Día:</strong> <input placeholder="Día" id="duda" text="text" tabindex="3"></p>
     <p><strong>Hora:</strong> <input placeholder="Hora" id="duda" text="text" tabindex="3"></p>
     <p><strong>Lugar:</strong> <input placeholder="lugar" id="duda" text="text" tabindex="3"></p>
    </label>
  </div>
  
 
  <div class="col-3">
    <label>
      Detalle de la asesoria impartida
     <input placeholder="Escribe tu pregunta?" id="duda" text="text" tabindex="5">
    </label>
  </div>
  
  
 
  <div class="col-3">
    <label>
      <p>contacto</p>
        <input placeholder="cualquir medio de contacto" id="duda" text="text" tabindex="5">
      
    </label>
  </div>
 
  <div class="col-submit">
    <button class="submitbtn">Guardar</button>
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