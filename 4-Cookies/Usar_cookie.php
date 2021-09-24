<?php


if (!$_COOKIE["idioma_solicitado"]) {
    header("Location: pedir_idioma.php");
    } else if ($_COOKIE["idioma_solicitado"] == "es"){
        header("Location: espanol.php");
    }else if ($_COOKIE["idioma_solicitado"] == "en"){
        header("Location: ingles.php");
    }


//Son pequeños archivos de textxo temporales que se guardan en el navegador del usuario.


/*PHP tiene soporte para las «cookies» de HTTP de forma transparente.
Las cookies son un mecanismo por el que se almacenan datos en el navegador remoto
para monitorizar o identificar a los usuarios que vuelvan al sito web.
Las cookies se pueden configurar con las funciones setcookie() o setrawcookie().
Las cookies son parte de la cabecera HTTP, por lo que setcookie() será invocada
antes de enviar cualquier otra salida al navegador. Esta es la misma limitación que tiene
la función header(). Se pueden utilizar las funciones del búfer de salida para retrasar
la salida del script hasta que se haya decidido si establecer o no alguna cookie o enviar cualquier otra cabecera.
Algunas cookies enviadas desde el cliente serán incluidas automáticamente en el array autoglobal $_COOKIE si variables_order contiene "C". 
Para asignar varios valores a una sola cookie, simplemente se debe agregar [] al nombre de la cookie */