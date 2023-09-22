<?php

  echo "Tarea Clase 4";
  echo "<br>";
  echo "<br>";

  $n = 7;
  if ($n > 0) {
    echo "Es un número positivo";
  }
  echo "<br>";

  $n1 = 7;
  if ($n1 > 1 && $n1 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
  }
  echo "<br>";

  $n2 = 4;
  if ($n2 >= 10 || $n2 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
  }
  echo "El número ingresado no puede ser válidado";
  echo "<br>";

  $numero1 = 7;
  $numero2 = 3;
  if ($numero1 > $numero2) {
    echo $numero1 + $numero2;
    echo "<br>";
    echo $numero1 - $numero2;
  }
  if ($numero1 < $numero2) {
    echo $numero1 * $numero2;
    echo "<br>";
    echo $numero1 / $numero2;
    echo "<br>";
    echo $numero1 % $numero2;
  }
  if ($numero1 == $numero2) {
    echo "Los números son iguales";
  }

 ?>
