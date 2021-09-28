<?php
include("sesion.php");

?>
Bienvenido: <?php echo $_SESSION["usuario"]; ?>
<br> <br>
Estas en una pagina segura con sesiones php
<br><br>
<a href="archivo_protegido2.php">cambiar de pagina </a>
<br><br>
<a href="salir.php">salir</a>