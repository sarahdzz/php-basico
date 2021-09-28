<?php
include("sesion.php");

?>
Bienvenido: <?php echo $_SESSION["usuario"]; ?>
<br> <br>
Estas en otra pagina segura con sesiones php
<br><br>
<a href="archivo_protegido1.php">ir a la pagina principal </a>
<br><br>
<a href="salir.php">salir</a>