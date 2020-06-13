<?php
include 'include/config.php';
require_once'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Horario</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/estilos_inicio.css">
     <link rel="stylesheet" href="../css/header.css">
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
                                <li><a href="../seccionProfesores/crearAsesoria.php">Crear Asesoria</a></li>
                                 <li><a href="../perfiles/PerfilProfesor.php">perfil</a></li>
                                <li><a href="#">notificaciones</a></li>
                                <li><a href="../index.php">Cerrar sesion</a></li>
                          </ul>
                    </div>
              </nav>
        </div> 
    </header>

    <!-- menu -->
    <div id="menu" class="col-md-12 text-right">
      <div class="container">
          <a class="btn btn-primary" href="lista.php"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</a>
          <a class="btn btn-warning" href="index.php"><i class="fa fa-calendar-check-o"></i> Nuevo Horario</a>
      </div>
    </div>
    <!-- menu -->


    <!-- container -->
      <div class="container" >
         <div class="panel panel-info" style="margin-top: 20px;">
           <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</div>
           <div class="panel-body nopadding">
                <?php 
                    if (isset($_GET['page'])){
                      horariostable($_GET['page']);
                    }else{
                      horariostable(1);
                    }
                ?>
           </div>
         </div>
      </div>
    <!-- container -->

    <!-- apend data -->
    <div id="appenddata"></div>
    <!-- apend data -->


<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Clase</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Tarea</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Color:</label>
           <select class="form-control" id="idcolortask">
              <option value="asesoria-label">Asesoria</option>
              <option value="tutoria-label">Tutoria</option>
              <option value="clase-label">Clase</option>
              <option value="gestion-label">Gestion</option>
              <option value="investigacion-label">Investigacion</option>
           </select> 
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->

    <!-- alert danger -->
    <div id="alert-error"><i class="fa fa-times fa-2x"></i></div>
    <!-- alert danger -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- script -->
    <script src="js/scripts-custom.js"></script>
    <script src="js/scripts.js"></script>

  </body>
</html>