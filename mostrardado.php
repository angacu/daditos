<?php
include "dados.php";

$dado1 = new jugadorDado();

$dado1-> setminNumDado(-2);
$dado1-> setmaxNumDado(15);

for ($i=1; $i < 12; $i++){
  echo $dado1->tirarDado(). "<br>";
}
?>
