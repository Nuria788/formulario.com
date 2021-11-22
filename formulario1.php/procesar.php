<?php

$nombre = $_POST["nombre"]; // lo que esta en index dentro de name = "nombre"
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$comentarios = $_POST["comentarios"];

echo "<h2> Información recibido desde PHP</h2>";

echo "El nombre recibido es: " . $nombre. "<br>";
echo "El asunto recibido es: " . $asunto. "<br>";
echo "El mensaje recibido es: " . $mensaje. "<br>";
echo "Los comentarios son: " . $comentarios. "<br>";
?>