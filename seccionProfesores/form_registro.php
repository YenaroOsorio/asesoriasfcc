<?php
    function formRegistro() {
        echo    '
                    <form action="registrar.php" method="POST" name="registroForm" id="registroForm">

                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                    <label for="nombre" class="form-label">Nombre</label>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="matricula" name="matricula" class="form-control" required>
                                    <label for="matricula" class="form-label">Matricula</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" required>
                            <label for="email" class="form-label">E-mail</label>
                        </div>
                        
                        <div class="form-group margin--bottom">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                            
                        <div class="form-group margin--bottom">
                            <input type="password" id="password2" name="password2" class="form-control" required>
                            <label for="password2" class="form-label">Confirmar contraseña</label>
                        </div>
                            

                        <!-- <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
                                <label class="form-check-label order-2" for="remember">Acepto los términos y condiciones</label>
                                <label class="label--ckecked order-1" for="remember"></label>
                            </div>
                        </div> -->

                        <div class="d-flex justify-content-lg-center">
                            <button type="submit" id="registrar" name="registrar" class="btn btn-signup--register align-self-center">Aceptar</button>
                        </div>
                        <a href="../login.php" class="register-link--haveaccount">¿Ya tienes una cuenta? Entrar</a>
 
                    </form>';
    }

    function botonIngresar() {
        echo '
        
                    <a href="../login.php">INGRESAR</a>';
    }
?>