<?php

  if ($_GET["notaAlumno"] <=2) {
    echo "Muy deficiente";}
  elseif ($_GET["notaAlumno"] >2 && $_GET["notaAlumno"] <=5) {
    echo "Insuficiente";}
  elseif ($_GET["notaAlumno"] >5 && $_GET["notaAlumno"] <=7) {
      echo "Bien";}
  elseif ($_GET["notaAlumno"] >8 && $_GET["notaAlumno"] <=9) {
      echo "Notable";}
  elseif ($_GET["notaAlumno"] ==10) {
      echo "Excelente";}
  elseif ($_GET["notaAlumno"]) < 0 || ($_GET["notaAlumno"]) > 10 {
      echo "Por favor ingrese un número entre 0 y 10";
  }

  echo "<br>";
  echo "<br>";

  if(isset($_GET["nombreAlumno"] == ""){
    echo "Por favor ingrese nombre del alumno";
    echo "<br>";
  }

  if(isset($_GET["notaAlumno"] == ""){
    echo "Por favor ingrese nota del alumno";
    echo "<br>";
  }

  if (is_numeric($_GET["notaAlumno"])) {
  }
  else echo "Por favor ingrese un número entre 0 y 10";


?>
