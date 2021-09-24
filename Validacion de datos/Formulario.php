<!DOCTYPE html>
<html lang="es">

<head>
    <title>Validaci&oacute;n de Datos con PHP</title>
    <meta charset="utf-8" />
    <script>
    function validarDatosGET() {
        var verificar = true;
        //acceder a los elementos HTML CON JS
        //docment se refiere a este documento donde estamos


        if (!document.valida_datos_get_frm.nombre_txt.value) {
            alert("El campo nombre es requerido");
            //focus representa un elemento que se activa cuando el usuario hace clic,

            document.valida_datos_get_frm.nombre_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_get_frm.password_txt.value) {
            alert("El campo password es requerido");
            document.valida_datos_get_frm.password_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_get_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1]
            .checked) {
            alert("El campo sexo es requerido");
            document.valida_datos_get_frm.sexo_rdo[0].focus();
            verificar = false;
        }

        if (verificar) {
            document.valida_datos_get_frm.submit();
        }
    }

    function validarDatosPOST() {
        var verificar = true;

        if (!document.valida_datos_post_frm.nombre_txt.value) {
            alert("El campo nombre es requerido");
            document.valida_datos_post_frm.nombre_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_post_frm.password_txt.value) {
            alert("El campo password es requerido");
            document.valida_datos_post_frm.password_txt.focus();
            verificar = false;
        } else if (!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1]
            .checked) {
            alert("El campo sexo es requerido");
            document.valida_datos_post_frm.sexo_rdo[0].focus();
            verificar = false;
        }

        if (verificar) {
            document.valida_datos_post_frm.submit();
        }
    }


    //CUANDO LA VENTANA CARGE

    window.onload = function() {
        document.getElementById("enviar-get").onclick = validarDatosGET;
        document.getElementById("enviar-post").onclick = validarDatosPOST;
    }
    </script>
</head>

<body>
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); //evitar que nos envie noticias y no muestre warnings

    if ($_GET["error"] == "si") {
        echo "<span style=\"color:#F00; font-size:2em;\">VERIFICA TUS DATOS</span>";
    }
    ?>
    <hgroup>
        <h1>Formulario de Datos GET</h1>
    </hgroup>
    <form name="valida_datos_get_frm" action="validar-datos.php" method="get"
        enctype="application/x-www-form-urlencoded">
        Ingresa tu Nombre:
        <input type="text" name="nombre_txt" />
        <br /><br />
        Ingresa tu Password:
        <input type="password" name="password_txt" />
        <br /><br />
        <input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
        <input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
        <br /><br />
        <!-- El <input type="hidden">define un campo de entrada oculto.
        Un campo oculto permite a los desarrolladores web incluir datos que los usuarios no pueden ver ni modificar cuando se envía un formulario.
        Un campo oculto a menudo almacena qué registro de la base de datos debe actualizarse cuando se envía el formulario. -->

        <input type="hidden" name="enviar_hdn" value="get" />
        <input type="button" id="enviar-get" name="enviar_btn" value="Enviar x GET" />
        <!-- <input type="button">se pueden usar en cualquier lugar, no solo dentro del formulario y no envían el formulario si están en uno. Mucho mejor con Javascript.
        <input type="submit">debe usarse solo en formularios y enviarán una solicitud (GET o POST) a la URL especificada -->

    </form>
    <hgroup>
        <h1>Formulario de Datos POST</h1>
    </hgroup>
    <form name="valida_datos_post_frm" action="validar-datos.php" method="post"
        enctype="application/x-www-form-urlencoded">
        Ingresa tu Nombre:
        <input type="text" name="nombre_txt" />
        <br /><br />
        Ingresa tu Password:
        <input type="password" name="password_txt" />
        <br /><br />
        <input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
        <input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
        <br /><br />
        <input type="hidden" name="enviar_hdn" value="post" />
        <input type="button" id="enviar-post" name="enviar_btn" value="Enviar x POST" />
    </form>
</body>

</html>