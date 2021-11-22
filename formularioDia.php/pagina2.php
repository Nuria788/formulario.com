<?php
 /* if (checkdate($_REQUEST['mes'], 
  $_REQUEST['dia'], 
  $_REQUEST['anio']))
    echo "La fecha ingresada es correcta";
  else
    echo "La fecha no es válida";


  ?>*/
 
  if (
    is_numeric($_REQUEST['dia']) &&
    is_numeric($_REQUEST['mes']) &&
    is_numeric($_REQUEST['anio'])
  ) {
    if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio']))
      echo "La fecha ingresada es correcta";
    else
      echo "La fecha no es válida";
  } else
    echo "La fecha no es válida";

/*Confeccionar un formulario que solicite la carga de una fecha, disponer tres 
controles HTML de tipo "select" para elegir el día, 
el mes y el año. Validar si se trata de una fecha válida en la segunda página. */

    if (checkdate($_REQUEST['mes'], $_REQUEST['dia'], $_REQUEST['anio']))
    echo "La fecha ingresada es correcta";
  else
    echo "La fecha no es válida";
  ?>