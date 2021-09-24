<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envio de datos GET Y POST</title>
</head>

<body>
    <HGroup>
        <h1>Formulario enviado por el metodo Get</h1>
    </HGroup>
    <form name="frm_envio_get" action="envia_datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label for="">Nombre:</label>
        <input type="text" name="nombre_txt"> <br> <br>
        <label>Contraseña:</label>
        <input type="password" name="password_txt"> <br><br>
        <input type="submit" name="enviar_btn" value="Envia-Get">

    </form>
    <p>get->envia datos atravez del url sirve para realizar busquedas</p>
    <p>El método GET envía la información en la propia URL, estando limitada a 2000 caracteres.
        <br> La información es visible por lo que con este método nunca se envía información sensible.
        <br>No se pueden enviar datos binarios (archivos, imágenes...).
        <br>En PHP los datos se administran con el array asociativo $_GET
    </p>

    <HGroup>
        <h1>Formulario enviado por el metodo Post</h1>
    </HGroup>
    <P> post->envia encripitada la informacion se usa para insertar,modificar,editar
    </P>
    <form name="frm_envio_post" action="envia_datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label for="">Nombre:</label>
        <input type="text" name="nombre_txt"> <br> <br>
        <label>Contraseña:</label>
        <input type="password" name="password_txt"> <br><br>
        <input type="submit" name="enviar_btn" value="Envia-POST">
    </form>

    <p>
        Con el método HTTP POST también se codifica la información, pero ésta se envía a través del body del HTTP
        Request, por lo que no aparece en la URL.
        <br>
        <br> El método POST no tiene límite de cantidad de información a enviar.
        <br>La información proporcionada no es visible, por lo que se puede enviar información sensible.
        <br><br>Se puede usar para enviar texto normal así como datos binarios (archivos, imágenes...).
        <br>PHP proporciona el array asociativo $_POST para acceder a la información enviada.
    </p>
</body>

</html>