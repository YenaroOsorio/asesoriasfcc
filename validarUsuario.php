<?php
  session_start();
  include("conexion.php");

  $mat=$_POST['matricula'];
  $pass=$_POST['password'];

  $link=Conectarse();

  $query = mysqli_query($link,"select rol,matricula,password from profesores where matricula='$mat';");
  if($row = mysqli_fetch_array($query)){
    if( $row['matricula'] == $mat && $row['password'] == md5($pass) ){
        $_SESSION["matricula"]=$mat;
        $_SESSION["rol"]=$row['rol'];

        if( $row['rol']==2) header("Location:perfiles/PerfilProfesor.php");
        if( $row['rol']==3) header("Location:seccionAlumnos/menuAlumno.php");
        mysqli_close($link);
    } else {
      mysqli_close($link);
      header("Location:login.php");
    }
  } else {
    $query = mysqli_query($link,"select rol,matricula,password from alumnos where matricula='$mat';");
    if($row = mysqli_fetch_array($query)){
      if( $row['matricula'] == $mat && $row['password'] == md5($pass) ){
          $_SESSION["matricula"]=$mat;
          $_SESSION["rol"]=$row['rol'];

          if( $row['rol']==2) header("Location:perfiles/PerfilProfesor.php");
          if( $row['rol']==3) header("Location:seccionAlumnos/menuAlumno.php");
          mysqli_close($link);
      } else {
        mysqli_close($link);
        header("Location:login.php");
      }
    } else {
      header("Location:login.php");
    }
  }
?>