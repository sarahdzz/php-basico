<?php

/*$_FILES — Variables de subida de ficheros HTTP
$_FILES genera 5 valores name,type,tmp_name :ruta temporal del archivo
 error true 1 false 0 y  size tamaño en baits
clave  posicion que tiene el archivo
valor imprima el valor de la posicion */
foreach ($_FILES["archivo_fls"] as $clave => $valor) {

    echo " Propiedad: $clave --- valor: $valor <br>";
}

$archivo = $_FILES["archivo_fls"]["tmp_name"];

$destino = "ArchivosGuardados/" . $_FILES["archivo_fls"]["name"];

if ($_FILES["archivo_fls"]["type"] == "text/plain") {
    //metodo para subir archivos al servidor  utiliza dos parametros
    //1-el archivo temporal que se sube->$archivo
    //2-la ruta donde lo vamos a guardar->destino
    //sin tipo de archivo solo se  codifica las dos lineas siguientes
    move_uploaded_file($archivo, $destino);
    echo "El Archivo fue subido Exitosamente";
} else {
    echo "Solo se admiten archivos de texto plano<br />
    <a href=\"enviar-archivo.php\">REGRESAR</a>";
}