<?php
    $array1 = [2,4,6,8,10,12,14,16,18,20];

    foreach ($array1 as $numerosPares) {
      echo $numerosPares."<br>";
    }

    echo "<br>";

    $array2 = ["Pedro", "Ana", 34, 1];
    print_r ($array2);

    echo "<br>";

    $arrayAsociativo1 = [
      "Nombre" => "Pedro",
      "Apellido" => "Torres",
      "Dirección" => "Av. Mayo 3703",
      "Teléfono" => "1122334455",
    ];

    echo "<br>";

    $array3 = [ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

    foreach ($array3 as $indice => $ciudad) {
      echo "La ciudad con el índice " . $indice . " tiene el nombre de " . $ciudad;
      echo "<br>";
    }

    echo "<br>";

    $arrayAsociativo2 = [
      "Madrid " => "MD",
      "Barcelona " => "BCL",
      "Londres " => "LD",
      "New York " => "NY",
      "Los Ángeles " => "LA",
      "Chicago " => "CCG",
    ];

    foreach ($arrayAsociativo2 as $ciudad => $abreviatura) {
      echo "El índice de " .$ciudad  . "es " . $abreviatura;
      echo "<br>";
    }
?>
