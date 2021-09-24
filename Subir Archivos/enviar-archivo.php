<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Archivos al Servidor con PHP</title>
</head>

<body>

    <form name="enviar_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
        <!-- tipo archivo-file     -->
        <input type="file" name="archivo_fls">
        <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>
</body>

</html>