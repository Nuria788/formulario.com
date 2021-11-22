<?php

/* EJERCICIO 1 Confeccionar un formulario que solicite la carga de un nombre de persona 
y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18) */
echo $_REQUEST['nombre'];
echo "<br>";
if ($_REQUEST['edad'] >= 18) {
  echo "Es mayor de edad";
} else {
  echo "No es mayor de edad";
}
echo "<br>";
 /*ejercicio  2 Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
Disponer dos controles de tipo radio que nos permitan seleccionar si queremos 
sumar o restar los dos valores ingresados: */
if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else {
    if ($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    }
  }
  echo "<br>"; echo "<br>"; 
 /*EJERCICIO 3 Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de 
 tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios 
 y 3-estudios secundarios.
En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el 
tipo de estudios que posee. */
  echo $_REQUEST['nombre'];
  echo "<br>";
  if ($_REQUEST['radio1'] == "sin") {
    echo "Sin estudios.";
  }
  if ($_REQUEST['radio1'] == "primario") {
    echo "Estudios primarios.";
  }
  if ($_REQUEST['radio1'] == "secundario") {
    echo "Estudios secundarios.";
  }


  echo "<br>"; echo "<br>"; 
  /*ejercicio 4 Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
Disponer dos controles de tipo checkbox que nos permitan seleccionar si queremos 
sumar y/o restar los valores ingresados. */
  if (isset($_REQUEST['check1'])) {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma . "<br>";
  }
  if (isset($_REQUEST['check2'])) {
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es:" . $resta;
  }

  echo "<br>"; echo "<br>"; 
/*
    EJERCICIO 5 Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
  Mostrar en la página que procesa el formulario la cantidad de deportes que practica*/
  $cant = 0;
  if (isset($_REQUEST['check1'])) {
    $cant++;
  }
  if (isset($_REQUEST['check2'])) {
    $cant++;
  }
  if (isset($_REQUEST['check3'])) {
    $cant++;
  }
  if (isset($_REQUEST['check4'])) {
    $cant++;
  }
  echo $_REQUEST['nombre'];
  echo " practica $cant deportes.";
  
  echo "<br>"; echo "<br>"; 
  /*EJERCICIO 6 Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
  Disponer un control de tipo select que nos permita seleccionar si queremos sumar o
   restar los dos valores ingresados:";*/
   if ($_REQUEST['operacion'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else {
    if ($_REQUEST['operacion'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    }
  }
  /*EJERCICIO 7 Confeccionar un formulario que solicite el ingreso del nombre de una persona y un c
  ontrol select (en este último permitir la selección de los ingresos mensuales de la persona:
   1-1000,1001-3000,>3000)
En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias 
(si supera 3000) */
echo "<br>";echo "<br>";
echo $_REQUEST['nombre'];
  if ($_REQUEST['ingresos'] == 3) {
    echo " debe pagar impuestos.";
  } else {
    echo " no debe pagar impuestos a las ganancias.";
  }
/*EJERCICIO 8 mplementar un formulario web para ingresar el nombre de una persona en un control text 
y mediante un control de tipo textarea se permita el ingreso del curriculum de dicha persona. */
echo "<br>";echo "<br>";
echo "El nombre ingresado:" . $_REQUEST['nombre'];
echo "<br>";
echo "El curriculum:" . $_REQUEST['curriculum'];

echo "<br>";echo "<br>";
/* Completar contrato:<br>
    <textarea name="contrato" rows="8" cols="80">
En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. 
[..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. 
[..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a 
Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley 
de Contrato de Trabajo N° 20.744.
</textarea>
    <br>
    <input type="submit" value="Confirmar"> */

    echo $_REQUEST['contrato'];

?>

  