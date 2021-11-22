<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="estilo10.css">
</head>
<body>

<!-- Crear un formulario post donde se recoja:
Un texto.
Un color
Un numero
En la pagina activada por el formulario post deberéis:
Medir la longitud del texto introducido. 
(Ayuda: existe una función mide la longitud de una string)
Sacar la longitud en pantalla con un h1: "diciendo la longitud es:"
Deducir si la longitud es par o impar. (Ayuda: utilizar %2 para saber 
si es par o impar)
Sacar por pantalla si es par o impar con un h3
Crear tantos párrafos como grande sea el numero, dentro de cada parrafo 
añadir el texto con el color introducido en el formulario
Si la longitud era impar poner las letras en negrita, sino en cursiva.-->


        <?php
           $longitud = strlen($_POST["texto"]);

           echo "<h1> La longitud es: $longitud</h1>";

           $esPar = true;

           if ($longitud%2 == 1){
               echo "<h3> El texto introducido es impar </h3>";
               $esPar = false;

           } else {
               echo "<h3> El texto introducido es par </h3>";
               $esPar = true;
           }

           $colorTexto= $_POST['color'];

           for ($i = 1 ; $i <= $longitud ; $i++){

               if ($esPar) {
                   echo "<p style = \"color:$colorTexto; \" ><b>".$_POST['texto']."</b></p>";

               } else{
                   echo "<p style = \"color:$colorTexto;\" ><i>".$_POST['texto']."</i></p>";
               }


           }


       ?>







</body>
</html>