<?php
if ($_POST["usuario_txt"] == "carlos" && $_POST["password_txt"] == "12345") {

    //inicio de sesion 
    session_start();
    //declaro mis variables de sesion 
    $_SESSION["estaautentificado"] = true;
    $_SESSION["usuario"] = $_POST["usuario_txt"];
    header("Location:archivo_protegido.php");
} else {
    header("Location:index.php?error=si");
}