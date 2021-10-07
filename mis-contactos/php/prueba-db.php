<?php

//Pasos para conectarme a una BD MySQL con PHP
//1)Conectarme al BD, mysql_connect necesita 3 datos:
//1)Servidor
//2)Usuario de la BD
//3)Password del usuario de la BD
// mysql_connect esta obsoleto 
$conexion = mysqli_connect("localhost", "root", "") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL<br />";


//2) Selecionamos la BD que usaremos
//mysqli_select_db espera dos parametros 
//1-($connection
//2-DB_NAME
//or die (muere la peticion y envia un mesjae de error)
mysqli_select_db($conexion, "mis_contactos") or die("No se pudo encontrar la BD");
echo "Estoy usando la BD mis_contactos<br/>";

//3) Crear una consulta 

$consulta = " SELECT * FROM pais";

//4)Ejecutar la consulta SQL
//mysqli_query necesita 2 parámetros:
//1)La conexion a la BD
//2)La consulta
$ejecutar_consulta = mysqli_query($conexion, $consulta) or die("No se pudo encontrar ejecutar la consulta ");
echo " se ejecuto la consulta<br/>";

//5)Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y 
//en una variable voy a ingresar la función mysql_fetch_array
while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
    echo $registro["id_pais"] . " - " . $registro["pais"] . "<br />";
}

//6)Cerrar la conexión a la bd
mysqli_close($conexion) or die("Ocurrió un error al cerrar la conexión a la BD");
echo "Conexi&oacute;n Cerrada <br/>";