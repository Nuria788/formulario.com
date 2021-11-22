<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en Html</title>
</head>
<body>
    
<h1></h1>
<form action="">

<fieldset>
    <legend>Vota por tu serie favorita</legend>

    <label>Nombre</label>
    <input type="text"  name="nombre" placeholder="Ej. Pepito">
<br><br>
    <label>Email</label>
    <input type="email" name="email" placeholder="ejemplo@gmail.com">

<br><br>
    <label>Contraseña</label>
    <input type="password">


<br><br>

    <label>Serie</label>
    <select>
    <option>Lost</option>
    <option>Fargo</option>
    <option>True Detective</option>
    </select>
   <br><br>

   <label>¿La ves?</label> <br>
   <input type="radio" name= "vos">No <br>
   <input type="radio" name= "vos"> Sí, no puedo esperar a que la traduzcan
   <!--Importante poner la misma palabra en name  en el radio para alternar si o no-->
<br><br>

<p> <label>Texto</label> <input type="color" name="color" > </p>

   <br><br>

   <label>¿Desde dónde lo ves?</label>
   <input type="checkbox">Desde la TV <br>
   <input type="checkbox">Desde el ordenador <br>
   <input type="checkbox">Desde la tablet <br>

   <br><br>

   <label>¿Por qué amas esa serie?</label><br>
   <textarea rows="5" cols="70"></textarea>

   <br><br>
   
   <input type="submit" value="Participar">
   <input type="reset" value="Borrar el formulario">

</fieldset>

</form>
<p>Este concurso está sometido a las siguientes 
        <a href="bases_legales.html">bases legales</a> ante notario.
</p>
<hr>
<p>&copy; Copyrigt 2015 | Tus series Favoritas &Co.</p>
<a href="https://www.google.es">Google</a>
<!-- caracteres especiales html  mirar en internet-->
</body>
</html>