<?php

$destino = "200093@iessierradeguara.com";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$compañia = $_POST['compañia']
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$header = "Envío desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre :" .$nombre. "\n" 
. "Email :" . $email . "\n" . "Telefono :" . $telefono . "\" 
. "Compañia :" . $compañia . "\n" . "Mensaje :" . $mensaje;

mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: index.php');

?>