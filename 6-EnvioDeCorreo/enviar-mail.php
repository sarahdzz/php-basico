<?php

//creamos variables para cada dato que sera enviado con el nombre que tienen en el form
$de = $_POST["de_txt"];
$para = $_POST["para_txt"];
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje_txa"];

//las cabeceras son para 
//esta linea 
$cabeceras = "MIME-Version: 1.0\r\n";
// .= se le concatena ala misma variable cabeceras
$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras .= "From: $de \r\n";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
	$respuesta = "El mensaje ha sido enviado =)";
} else {
	$respuesta = "Ocurrio un error no se enviaron los datos =( falta un servidor El SMTP";

	header("Location: formulario-mail.php?respuesta=$respuesta");
}

/*El SMTP (Simple Mail Transfer Protocol o Protocolo para Transferencia Simple de Correo) 
es un protocolo de comunicación que permite el envío de correos electrónicos en internet. */