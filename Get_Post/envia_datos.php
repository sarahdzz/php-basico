<?php


if (isset($_GET["enviar_btn"])) {
    echo "Los datos fueron enviados por el Metodo GET los datos enviados son:
</br></br> El nombe es: " . $_GET["nombre_txt"] . " </br>
 la contraseña es:" . $_GET["password_txt"];
} else if (isset($_POST["enviar_btn"])) {
    echo "Los datos fueron enviados por el Metodo POST los datos enviados son:
    </br></br> El nombe es: " . $_POST["nombre_txt"] . " </br>
     la contraseña es:" . $_POST["password_txt"];
}