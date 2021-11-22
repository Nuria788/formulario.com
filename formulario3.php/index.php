<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="pagina2.php"><!-- pagina2 es la que deriba-->
  <h4>EJERCICIO 1. Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, 
      luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18</h4>
    Ingrese el nombre:
    <input type="text" name="nombre"> <!--Este nombre es el que se pone en pagina2-->
    <br>
    Ingrese la edad:
    <input type="text" name="edad">
    <br>
    <input type="submit" value="confirmar">
    <br>
    <br>
    <HR>
    <h4>EJERCICO 2 Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
Disponer dos controles de tipo radio que nos permitan seleccionar si queremos 
sumar o restar los dos valores ingresados:</h4>
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="radio" name="radio1" value="suma">sumar
    <br>
    <input type="radio" name="radio1" value="resta">restar
    <br>
    <input type="submit" name="operar">
    </HR>
    <HR>
   <h4> EJERCICO 3 Solicitar que se ingrese por teclado el nombre de una persona y disponer 
     tres controles de tipo radio que nos permitan seleccionar si la persona:
      1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
En la página que procesa el formulario mostrar el nombre de la persona y un mensaje
 indicando el tipo de estudios que posee.</h4>

    Ingrese Nombre:
    <input type="text" name="nombre">
    <br>
    Estudios:
    <br>
    <input type="radio" name="radio1" value="sin">Sin estudios
    <br>
    <input type="radio" name="radio1" value="primario">Estudios primarios
    <br>
    <input type="radio" name="radio1" value="secundario">Estudios secundarios
    <br>
    <input type="submit" value="Confirmar">
    </HR>
    <HR>
    <h4>EJERCICIO 5 Implementar un formulario que solicite la carga de dos enteros, 
      uno en cada text.
Disponer dos controles de tipo checkbox que nos permitan seleccionar si queremos sumar 
y/o restar los valores ingresados.</h4>
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="checkbox" name="check1">sumar
    <br>
    <input type="checkbox" name="check2">restar
    <br>
    <input type="submit" name="operar">
    </HR>
    <HR>
    <h4>EJERCICIO 6 Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
  Mostrar en la página que procesa el formulario la cantidad de deportes que practica.</h4>

  Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Deportes que practica:<br>
    <input type="checkbox" name="check1">Fútbol
    <br>
    <input type="checkbox" name="check2">Basquet
    <br>
    <input type="checkbox" name="check3">Tenis
    <br>
    <input type="checkbox" name="check4">Voley
    <br>
    <input type="submit" value="confirmar">


</HR>
<HR>
<h4>EJERCICIO 7 Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
Disponer un control de tipo select que nos permita seleccionar si queremos sumar o
 restar los dos valores ingresados:</h4>
 Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <select name="operacion">
      <option value="suma">sumar</option>
      <option value="resta">restar</option>
    </select>
    <br>
    <input type="submit" name="operar">
    </HR>
    <br>
<HR>
<h4>EJERCICIO 8: Confeccionar un formulario que solicite el ingreso del nombre de una
   persona y un control select (en este último permitir la selección de los ingresos 
   mensuales de la persona: 1-1000,1001-3000,>3000)
En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las 
ganancias (si supera 3000)</h4>
Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Seleccione en que rango se ubica sus ingresos:
    <select name="ingresos">
      <option value="1">1-1000</option>
      <option value="2">1001-3000</option>
      <option value="3">>3000</option>
    </select>

    <br>
    <input type="submit" value="confirmar">

</HR>

<HR>
<h4>EJERCICIO 9: Implementar un formulario web para ingresar el nombre de una persona
   en un control text y mediante un control de 
  tipo textarea se permita el ingreso del curriculum de dicha persona.</h4>

  Ingrese nombre:<input type="text" name="nombre"><br>
    Ingrese su curriculum:<br>
    <textarea name="curriculum"></textarea>
    <br>
    <input type="submit" value="Confirmar">  
</HR>
<HR>
<h4>EJERCICIO 10: Confeccionar una página que muestre un contrato dentro de un textarea, disponer puntos suspensivos 
  donde el operador debe ingresar un texto. La página que procesa el formulario sólo 
  debe mostrar el contrato con las modificaciones que hizo el operador.</h4>
  Completar contrato:<br>
    <textarea name="contrato" rows="8" cols="80">
En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
</textarea>
    <br>
    <input type="submit" value="Confirmar">

</HR>
  </form>

</body>
</html>