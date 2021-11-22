<?php

$usuario = "root";// usuario root
$password = ""; // contraseña hosting
$servidor = "localhost"; // 
$basededatos = "formulario"; // nombre de la base de datos


$conexion = mysqli_connect($servidor, $usuario, "") or die ("Error con el servidor de la base de datos");
$bd = mysqli_select.db($conexion, $basededatos)  or die ("Error con el servidor de la base de datos");


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql="INSERT INTO datos VALUES ('$nombre', '$correo, '$mensaje' )";

$ejecutar = mysql_query($conexion, $sql);

if (!$ejecutar){
    echo "Hubo un error";
}else{
    echo "Datos Guardados correctamente" <br> <a href="index.php">Volver</a>
}

?>

