<?php
$vet = array(5, 4, 3, 2, 1);
$count = array(0, 0, 0, 0, 0);
$saida = array();

for($i = 0; $i < count($vet) - 1; $i++){
  for($j = $i + 1; $j < count($vet); $j++){
    if($vet[$i] > $vet[$j]){
      $count[$i]++;
    }else{
      $count[$j]++;
    }
  }
}

for($i = 0; $i < count($vet); $i++){
  $saida[$count[$i]] = $vet[$i];
}

var_dump($vet);
var_dump($saida);

 ?>
