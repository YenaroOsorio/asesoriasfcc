<?php
    $fp = fopen("horario.txt", "c+");
    $a = [];
    //$i=0;
    //while(!feof($fp)){
    for($i=0;$i<66;$i++) {
        $linea = fgets($fp);
        //echo "hola $linea <br>";
        //array_push($a,$linea);
        $a[$i]=substr($linea, 0, -1);
        //$i=$i+1;
    }
    fclose($fp);
    //var_dump($a);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HORARIO</title>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/estilos_inicio.css">
       <link rel="stylesheet" href="../../css/header.css">
       <link rel="stylesheet" href="style.css">
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
                                <li><a href="../salir.php">Cerrar sesion</a></li>
                          </ul>
                    </div>
              </nav>
        </div> 
    </header>

    <div class="tabla">
        <div class="encabezado">
            <div class="celda"><p>Hora</p></div>
            <div class="celda"><p>Lunes</p></div>
            <div class="celda"><p>Martes</p></div>
            <div class="celda"><p>Miercoles</p></div>
            <div class="celda"><p>Jueves</p></div>
            <div class="celda"><p>Viernes</p></div>
        </div>

        
        <?php 
            $v=0;
            $w=1;
            $x=2;
            $y=3;
            $z=4;
            // $archivo = 'horario.txt';
            // $lines = file($archivo);
            
            // echo $lines[0];
            // echo $lines[60];
            // echo $lines[64];
            for($i=7;$i<20;$i++) {
                //$linea = substr( $linea, 0, -1 );
                $j=$i+1;
                echo    "
                        <div class='fila'>
                            <div class='celda' id='hora' style='background-color: #002D4C'><p>$i - $j</p></div>
                            <div value='$i' class='celda' id='materia'><p>$a[$v]</p></div>
                            <div value='$i' class='celda' id='materia'><p>$a[$w]</p></div>
                            <div value='$i' class='celda' id='materia'><p>$a[$x]</p></div>
                            <div value='$i' class='celda' id='materia'><p>$a[$y]</p></div>
                            <div value='$i' class='celda' id='materia'><p>$a[$z]</p></div>
                        </div>
                        ";
                $v=$v+5;
                $w=$w+5;
                $x=$x+5;
                $y=$y+5;
                $z=$z+5;
            }
        ?>

        <div id="mostrar-lista"></div>

    </div>

    <input type="button" value=" Guardar " class="guardar" class="guardar">

    <script src="script.js"></script>
    <script type="text/javascript">
        
        const guardar = document.querySelector('.guardar')

        guardar.addEventListener('click', () => {
            const materias = document.querySelectorAll('#materia')

            let arreglo = new Array(65)
            //let arreglo2 = new Array(65)
            for(let i=0;i<65;i++) {
                arreglo[i] = materias[i].textContent
                //arreglo2[i] = materias[i].getAttribute('value')
            }

            const arrayJson=JSON.stringify(arreglo);
            //const array2Json=JSON.stringify(arreglo2);
            
            $.post("valores.php",{arrayDeValores:arrayJson},function(data) {
                //console.log(arreglo)
                //console.log(arrayJson)
                setTimeout(function () {
                    window.location.href= 'horario.php';
                }, 500);
            })

        })
    </script>

</body>
</html>