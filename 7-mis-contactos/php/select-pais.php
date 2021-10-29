<?php
//GENERAR NINAMICAMENTE LA LISTA DE LSO PAISES DE LA BD

include("conexion.php");
// incluyo el archivo conexion.php 
//y en la variable consulta de conexion creo una consaulta hacia la bd
$consulta = " SELECT * From pais ORDER BY pais";
//ejecuta el metodo query de la consulta donde se guarda el resultado de la consulta
$ejecutar_consulta = $conexion->query($consulta);
//mostrar los datos dinamicamente 
while ($registro = $ejecutar_consulta->fetch_assoc()) {
    echo "<option value=" . $registro["pais"] . ">" . $registro["pais"] . "</option>";
}