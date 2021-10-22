<?php
$conexion = mysqli_connect("localhost", "root", "") or die("no s epudo conectar ala base de datos");
echo ("Conexion exitosa la BD");
mysqli_select_db($conexion, "mis_contactos") or die("error en la conexion de la bd mis contactos");
echo ("Conexion exitosa la BD Mis_contactos");
echo ("4 operaciones basicas ala BD");
echo "<h2>1)INSERCI&Oacute;N DE DATOS</h2>";
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('jon_mircha@bextlan.com','Jonathan MirCha','M','1984-05-23','525555555555','México','jonmircha.png')";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Se han insertado los datos =)<br />";

echo "<h2>2)ELIMINACI&Oacute;N DE DATOS</h2>";
// DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'jon.mircha@bextlan.com'";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Datos eliminados =( <br />";

echo "<h2>3)MODIFICACI&Oacute;N DE DATOS</h2>";
// UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'cursos@bextlan.com', nombre = 'Bextlan', imagen = 'bextlan.png' WHERE email = 'jon_mircha@bextlan.com'";

$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Los Datos han sido modificados =) <br />";

echo "<h2>4)CONSULTA(b&uacute;squeda) DE DATOS</h2>";
// SELECT * FROM nombre_tabla WHERE campo = valor

$consulta = "SELECT * FROM contactos";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae todos los registros de la tabla</h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
    echo $registro["email"] . "---";
    echo $registro["nombre"] . "---";
    echo $registro["sexo"] . "---";
    echo $registro["nacimiento"] . "---";
    echo $registro["telefono"] . "---";
    echo $registro["pais"] . "---";
    echo $registro["imagen"] . "---";
    echo "<br />";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Bextlan'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae los registros de la tabla con el nombre = 'Bextlan'</h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
    echo $registro["email"] . "---";
    echo $registro["nombre"] . "---";
    echo $registro["sexo"] . "---";
    echo $registro["nacimiento"] . "---";
    echo $registro["telefono"] . "---";
    echo $registro["pais"] . "---";
    echo $registro["imagen"] . "---";
    echo "<br />";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Jonathan MirCha' AND imagen = 'jonmircha.png'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "<h3>Consulta que trae los registros de la tabla con el nombre = 'Jonathan MirCha' y imagen = 'jonmircha.png'</h3>";

while ($registro = mysqli_fetch_array($ejecutar_consulta)) {
    echo $registro["email"] . "---";
    echo $registro["nombre"] . "---";
    echo $registro["sexo"] . "---";
    echo $registro["nacimiento"] . "---";
    echo $registro["telefono"] . "---";
    echo $registro["pais"] . "---";
    echo $registro["imagen"] . "---";
    echo "<br />";
}

mysqli_close($conexion);
echo "<h4>Conexi&oacute;n Cerrada</h4>";