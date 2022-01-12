<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       <h1>
         background-color:lightblue:
       </h1>
    </style>
</head>
<body>
  <h1>Login de usuario</h1>
  <form action="loginDB.php" method="post">
    <p>Introducir nombre de usuario: <input type="text" name="usuario" maxlength="32"></p>
    <p>Introducir contraseña:        <input type="text" name="contra"  maxlength="32"></p>     
    <input type="submit" value="Enviar">
  </form>
</body>
</html>