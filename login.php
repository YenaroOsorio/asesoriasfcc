<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogo.css">
    <link rel="stylesheet" href="css/StyleInicio.css">
    <title>Login</title>
</head>
<body>
    
    <header>
            <div class="container">
                  <nav>
                        <input type="checkbox" id="nav" class="hidden">
                        <div class="logo">
                              <a href="index.php">Asesorias FCC</a>
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
                    <h1 class="register-login-h1">Acceso</h1>
                    <p class="register-login-p">¡Bienvenido!, por favor ingresa tus credenciales</p>

                    <!-- Inicio formulario-->
                    <form action="validarUsuario" method="POST" name="validaForm" id="validaForm">
                        <div class="form-group">
                            <input type="text" id="matricula" name="matricula" class="form-control" required>
                            <label for="matricula" class="form-label">Matricula</label>
                        </div>
                        <div class="form-group margin--bottom">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
                                <label class="form-check-label order-2" for="remember">Recuérdame</label>
                                <label class="label--ckecked order-1" for="remember"></label>
                            </div>
                            <a href="#" class="forgot__password--link">¿Olvidó su contraseña?</a> -->
                        </div>
                        <!--Boton-->
                        <div class="d-flex justify-content-lg-between">
                            <button type="submit" class="btn btn-login align-self-center" name="entrar">Entrar</button>
                            <a href="preRegistro.php" class="btn btn-signup align-self-center  " role="button" aria-disabled="true">Registrarme </a>
                        </div>
                    </form>
                    <!-- Fin formulario -->
                
                </div>
            </div>
            <!-- Fin Contenedor -->
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>