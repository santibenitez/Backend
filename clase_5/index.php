<?php

$numa = 1;
while($numa<10){
   echo $numa;
   echo "<br>";
   $numa = $numa +=1;
 }
echo "Fin de iteración A";
echo "<br>";

$numb = 9;
while($numb>=1){
  echo $numb;
  echo "<br>";
  $numb = $numb - 1;
}
echo "Fin de iteración B";
echo "<br>";

$numc = 2;
while ($numc<=20) {
  echo $numc;
  echo "<br>";
  $numc = $numc+2;
}
echo "Fin de iteración C";
echo "<br>";

$numd = 1;
while ($numd<20) {
  echo $numd;
  echo "<br>";
  $numd = $numd+2;
}
echo "Fin de iteración D";
echo "<br>";

$nume = 1;
$numf = 1;
while ($numf<=10) {
  echo $nume;
  echo "<br>";
  $numf=$numf+1;
  $nume=$nume+$numf;
}
echo "Fin de iteración E";
echo "<br>";

$numg=2;
$numh=2;
while ($numh<=20) {
  echo $numg;
  echo "<br>";
  $numh=$numh+2;
  $numg=$numg+$numh;
}
echo "Fin de iteración F";
echo "<br>";

?>
