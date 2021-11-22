<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array $_POST</title>
</head>
<body>
<!-- Hay que crear un evento de envio con from action
Si queda en blanco " " el mismo archivo post se ejecutara ahi
method   si es para enviar datos por medio de POST o recibir por medio de GET
NO OLVIDAR EL CIERR DE ETIQUETA FORM </form>-->  



<form action="" method="post">

<!-- 
 select name  es una caja con opciones a elegir, DNI, TI...
 Debe de ir seguido de option value  para poner lo que contendrá esa caja
  -->

    <select name="tipodoc" required>
        <option value="" selected>Elegir tipo de Documento</option>
        <option value="CC">Cédula de ciudadanía</option>
        <option value="TI"> Tarjeta de identidad</option>
        <option value="RC"> Registro Civil</option>
    </select>
<!-- caja de texto input type="text"    tipo texto  
name hace referencia al nombre="" de la caja de texto -->
    <input type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre" required>
    <input type="text" placeholder="Ingrese su peso en  kg" name="peso" required>
    <input type="text" placeholder="Ingrese su talla en metros" name="talla" required>

<!-- cajita de chking     checbox  -->

    <input type="checkbox" name="gafas" value="SI"> ¿Usa gafas?




<!-- submit  es para envar datos por medio del metodo POST y hay 
que darle un valor    boton. -->    
    
    <input type="submit" value="GRABAR">

    </form>
</body>
</html>

<?php

    if($_POST)
    {   
        $xnombre=$_POST["nombre"];
        $peso=$_POST["peso"];
        $talla=$_POST["talla"];
        $tipodoc=$_POST["tipodoc"];
        $gafas=$_POST["gafas"];

        if(isset($_POST["gafas"]))  //  el cheking para dar opcion a no tenga gafas
            $gafas=$_POST["gafas"];
        else
            $gafas="NO";



        echo "El nombre de la persona es: " . $xnombre . "<br>";
        echo "El peso de la persona es: " . $peso . "KG <br>";
        echo "La talla  de la persona es: " . $talla . "Mtrs <br>";

        echo "El tipo de documento de la persona es: " . $tipodoc . "<br>";
        echo "Usa gafas ? " . $gafas . "<br>";

        // Hallar el indice de la masa corporal
        // round  es para redondear a dos decimales.
        /* interpretacion del imc
         imc <18.5  bajo peso
         imc entre 25 y 24.9  Peso normal
         imc > 30 Obesidad 

         se multiplica talla * talla por que es al cuadrado
         */

        $imc=$peso/($talla*$talla);
        echo "El imc de la persona es: " . round($imc,2) . "<br>";
        if($imc<18.5)  echo $xnombre . " tiene bajo peso";
        if($imc>=18.5 && $imc<25) echo $xnombre . " tiene sobrepeso";
        if($imc>=25 && $imc<30) echo $xnombre . " tiene sobrepeso";
        if($imc>=30)  echo $xnombre . " tiene obesidad";


        //var_dump($_POST);

    } 


?>