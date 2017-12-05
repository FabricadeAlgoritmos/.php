<?php
$vet = array(26, 19, 34, 19, 23, 16, 31, 26, 31, 22, 21, 29);

function getMax($vet){
  $m = $vet[0];
  for($i = 1; $i < count($vet); $i++){
    if($vet[$i] > $m){
      $m = $vet[$i];
    }
  }
  return $m;
}

function getMin($vet){
  $m = $vet[0];
  for($i = 1; $i < count($vet); $i++){
    if($vet[$i] < $m){
      $m = $vet[$i];
    }
  }
  return $m;
}

$maior = getMax($vet);
$menor = getMin($vet);
//echo "Maior: ". $maior . "<br>";
//echo "Menor: ". $menor . "<br>";

$count = array();
for($i = $menor; $i <= $maior; $i++){
  $count[$i] = 0;
}

for($i = 0; $i < count($vet); $i++){
  $count[$vet[$i]]++;
}

for($i = $menor + 1; $i <= $maior; $i++){
  $count[$i] += $count[$i - 1];
}

$saida = array();

for($j = 0; $j < count($vet); $j++){
  $i = $count[$vet[$j]];
  $saida[$i - 1] = $vet[$j];
  $count[$vet[$j]]--;
}

ksort($saida); // função que ordena os indices

function showArray($vet){
  foreach($vet as $value){
    echo $value ." ";
  }
}

showArray($saida);

 ?>
