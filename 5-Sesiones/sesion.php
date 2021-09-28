<?php

session_start();

//Evaluo que la sesion continue verificando una de las variables creadas en control.php,
// cuando esta ya no coincida con su valor inicial se redirije al archivo de salir.php
if (!$_SESSION["estaautentificado"]) {
    header("Location: salir.php");
}


//todas nuestras paginas deberian tener inclido este archivo ya que inicia la sesion y valida que exista la valieble estaautentificado
//protegemos con esta  confuracion