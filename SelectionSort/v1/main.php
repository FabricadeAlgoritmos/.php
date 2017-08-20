<?php

$vetor = array(5, 4, 3, 2, 1);
for($i = 0; $i < count($vetor) - 1; $i++){
  $menor = $i;
  for($j = $i + 1; $j < count($vetor); $j++){
    if($vetor[$menor] > $vetor[$j]){
      $menor = $j;
    }
  }
  $aux = $vetor[$i];
  $vetor[$i] = $vetor[$menor];
  $vetor[$menor] = $aux;
}

echo "<p>Metodo de Ordenação: SelectionSort </p>";
echo "<pre>";
print_r($vetor);
echo "</pre>";
 ?>
