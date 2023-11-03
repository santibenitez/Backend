<?php

  function cuadrado($ladocuadrado){
    $perimetro = $ladocuadrado * 4;
    $superficie = pow($ladocuadrado, 2);
    echo "El perímetro del cuadrado es " . $perimetro . "<br>";
    echo "La superficie del cuadrado es " . $superficie . "<br>";
}

cuadrado(3);

  function mayusculas($cadena){
    echo strtoupper($cadena) . "<br>";
  }

  function minusculas($cadena){
    echo strtolower($cadena) . "<br>";
  }

  mayusculas("Hola, CÓmo Te Va?");

  minusculas("Hola, COmo Te Va?");

  function diasmes($numeromes){
    if ($numeromes == 1 || $numeromes == 3 || $numeromes == 5 || $numeromes == 7 || $numeromes == 8 || $numeromes == 10 || $numeromes == 12){
      echo "Este mes tiene 31 días" . "<br>";
    }
    elseif ($numeromes == 4 || $numeromes == 6 || $numeromes == 9 || $numeromes == 11) {
     echo "Este mes tiene 30 días" . "<br>";
    }
    else {
      echo "Febrero tiene 28 días, a veces, 29" . "<br>";
    }
  }

  diasmes(8);

  function palindromo($cadena1){
    $cadena2 = strrev($cadena1);
    if ($cadena1 == $cadena2) {
      echo "La cadena es un palíndromo" . "<br>";
    }
    else {
      echo "La cadena NO es un palíndromo" . "<br>";
    }
  }

  palindromo("hola, todo bien")
 ?>
