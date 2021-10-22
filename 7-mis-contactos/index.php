<?php
error_reporting(E_ALL ^ E_NOTICE);

$op = $_GET["op"];
switch ($op) {
    case 'alta':
        $contenido = "php/alta-contacto.php";
        $titulo = "Alta de contacto";
        break;
    case 'baja':
        $contenido = "php/baja-contacto.php";
        $titulo = "Baja de contacto";
        break;
    case 'cambios':
        $contenido = "php/cambios-contacto.php";
        $titulo = "Cambios de contacto";
        break;
    case 'consultas':
        $contenido = "php/consultas-contacto.php";
        $titulo = "Consultas de contacto";
        break;

    default:
        $contenido = "php/home.php";
        $titulo = "Contactos";
        break;
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    <link rel="stylesheet" href="css/mis-contactos.css" />
    <script src="js/mis-contactos.js"></script>
</head>

<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
                <li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
                <li><a class="cambio" href="?op=cambios">Cambios de Contacto</a></li>
                <li><a class="cambio" href="?op=consultas">Consultas de Contacto</a></li>
            </ul>
        </nav>
        <section id="principal1">
            <?php include($contenido); ?>

        </section>

    </section>
</body>

</html>