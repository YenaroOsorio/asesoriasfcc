<?php
  session_start();
  include("../conexion.php");
  include("form_registro.php");
  $link=Conectarse();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylelogo.css">
    <title>Login</title>
</head>
<body>    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<link rel="stylesheet" href="../css/StyleInicio.css">
<header>
        <div class="container">
                  <nav>
                        <input type="checkbox" id="nav" class="hidden">
                        <div class="logo">
                              <a href="../index.php">Asesorias FCC</a>
                        </div>
                        
                  </nav>
            </div>  
      </header>

    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>

            <!-- Start Contenedor -->
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">Registro Asesor</h1>
                    <p class="register-login-p">Por favor ingrese sus datos para crear su cuenta</p>

                    
                    <!-- Inicio formulario-->
                    <?php
                        // verificamos si se han enviado ya las variables necesarias.
                        if (isset($_POST["registrar"])) {
                          $nombre = $_POST['nombre'];
                          $apellidos = $_POST['apellidos'];
                          $matricula = $_POST['matricula'];
                          $email = $_POST['email'];
                          $pass = $_POST['password'];
                          $pass2 = $_POST['password2'];

                          $password = md5($pass);
                          $password2 = md5($pass2);
                            // hay campos en blanco?
                            if($nombre==NULL|$apellidos==NULL|$matricula==NULL|$email==NULL|$password==NULL|$password2==NULL) 
                            {
                                echo "<p>Un campo esta vacio.</p>";
                                formRegistro();
                            }else{
                                // coinciden las contraseñas?
                                if($password!=$password2) {
                                    echo "<p>Las contraseñas no coinciden.</p>";
                                    formRegistro();
                                }else{
                                    // comprobamos si la matricula o la cuenta de correo ya existen                                    
                                    $checkemail = mysqli_query($link,"SELECT correo FROM profesores WHERE correo='$email'");
                                    $email_exist = mysqli_num_rows($checkemail);
                                    
                                    $checkmat = mysqli_query($link,"SELECT matricula FROM profesores WHERE matricula='$matricula'");
                                    $mat_exist = mysqli_num_rows($checkmat);
                            
                                    if ($email_exist>0|$mat_exist>0) {
                                        echo "<p>La matricula o la cuenta de correo estan ya en uso.</p>";
                                        formRegistro();
                                    }else{
                                        $query = 'INSERT INTO profesores (rol, matricula, nombre, apellidos, correo, password)
                                        VALUES (2,\''.$matricula.'\',\''.$nombre.'\',\''.$apellidos.'\',\''.$email.'\',\''.$password.'\')';
                                        
                                        mysqli_query($link,$query) or die(mysqli_error());
                                        echo '<p>Profesor '.$nombre.' ha sido registrado de manera satisfactoria.</p>';
                                        echo '<p>Ahora puede entrar ingresando su matricula y contraseña.</p>';
                                        mysqli_close($link);
                                        botonIngresar();
                                    }
                                  }
                              }
                          }else{
                            formRegistro();
                          }
                        ?>
                    <!-- Fin formulario -->
                
                </div>
            </div>
            <!-- Fin Contenedor -->
            
        </div>
    </div>
</html>