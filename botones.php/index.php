<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


#forma de hacer un boton
<input type="submit" value="Enviar"> <br>

<!--Borrar un formulario -->
<input type="reset" value="Borrar"><br>


#oculto
<input type=hidden name="sitio" value="www.desarrolloweb.com"><br>

# boton normal
<input type=button value="Texto escrito en el botón">

# formulario

<form action="" method="post" enctype="text/plain">
  <label>Nombre</label>
  <input type="text" name="Escribe tu nombre" size="30" maxlength="100">
<br>
 <label>Email</label> 
 <input type="text" name="email" size="25" maxlength="100" value="@">
<br>
<label>Población</label> 
<input type="text" name="poblacion" size="20" maxlength="60">
<br> <!-- con label podemos poner un nombre delante de las etiquetas -->
Sexo
<br>
<input type="radio" name="sexo" value="Varon" checked> Hombre
<br>
<input type="radio" name="sexo" value="Hembra"> Mujer
<br>
<br>
Frecuencia de los viajes
<br>
<select name="utilizacion">
	<option value="1">Varias veces al dia
	<option value="2">Una vez al dia
	<option value="3">Varias veces a la semana
	<option value="4">varias veces al mes
</select>
<br>
<br>
Comentarios sobre su satisfacción personal
<br>
<textarea cols="30" rows="7" name="comentarios"></textarea>
<br>
<br>
<input type="checkbox" name="recibir_info" checked> Deseo recibir notificación de las novedades en las líneas de autobuses.
<br>
<br>
<input type="submit" value="Enviar formulario">
<br>
<br>
<input type="Reset" value="Borrar todo">
</form>
</body>
</html>