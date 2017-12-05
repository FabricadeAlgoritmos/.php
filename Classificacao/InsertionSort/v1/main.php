<?php

$vetor = array();
$fim = 0;
$vetor[$fim] = rand() % 100;
$fim++;
while($fim < 6){
  $aux = rand() % 100;
  $i = $fim;
  while($i > 0 && $aux < $vetor[$i - 1]){
    $vetor[$i] = $vetor[$i - 1];
    $i--;
  }
  $vetor[$i] = $aux;
  $fim++;
}
echo "<p>Metodo de Ordenação: InsertionSort </p>";
echo "<pre>";
print_r($vetor);
echo "</pre>";
 ?>
