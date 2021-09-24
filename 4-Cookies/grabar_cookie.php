<?php
/*funcion(asignamos nombre de la cookie , valor de la cookie, 
duracion de la cookie time=tiempoactual+24hrsenseg=864000,
en que archivo existira la cookie / en todo el directorio)
https://www.php.net/manual/es/function.setcookie.php*/
setcookie("idioma_solicitado", $_GET["idioma"], time() + 86400, "/");

header("Location:Usar_cookie.php");