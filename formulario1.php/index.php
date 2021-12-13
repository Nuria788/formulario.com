<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="procesar.php" method="post">
<p>Nombre:  <input type="text" name="nombre"/> </p>
<p>Asunto:  <input type="text" name="asunto"/> </p>
<p>Mensaje:  <input type="text" name="mensaje"/> </p>

<h2>Comentarios:</h2>
<br>
<textarea name="Comentarios"></textarea>
<p><input type="submit" value="Enviar"> <!-- boton de procesar -->
<input type="reset" value="Borrar"><p>
</form>
</body>
</html>