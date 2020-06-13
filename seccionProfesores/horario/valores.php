<?php
    $arrayRecibido=json_decode($_POST["arrayDeValores"], true );

    //$arrayRecibido2=json_decode($_POST["arrayDeValores2"], true );

    unlink('horario.txt');
    $archivo = fopen('horario.txt', 'w');
    //$archivo2 = fopen("horario2.txt", 'w');

    // echo "Hemos recibido en el PHP un array de ".count($arrayRecibido)." elementos";

    //foreach($arrayRecibido as $valor) {
        //echo "\n- ".$valor;
    //}

    for($i=0;$i<65;$i++) {
        if($arrayRecibido[$i] == "" || $arrayRecibido[$i] == "\n" || $arrayRecibido[$i] == false || $arrayRecibido[$i] == NULL) {
            fputs($archivo,"\n");
        } else {
            //fputs($archivo,$arrayRecibido[$i]);
            fputs($archivo,"$arrayRecibido[$i]\n");
        }
    }
    fclose($archivo);
    //fclose($archivo2);
?>