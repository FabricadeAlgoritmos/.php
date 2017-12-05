<?php
$vet1 = array(2, 4, 6, 8, 10);
$vet2 = array(1, 3, 5, 7, 9);
$vet3 = array();

$i = 0; $j = 0; $k = 0;

while($i < count($vet1) && $j < count($vet2)){
  if($vet1[$i] < $vet2[$j]){
    $vet3[$k] = $vet1[$i];
    $i++;
  }else{
    $vet3[$k] = $vet2[$j];
    $j++;
  }
  $k++;
}

while($i < count($vet1)){
  $vet3[$k] = $vet1[$i];
  $i++;
  $k++;
}

while($j < count($vet2)){
  $vet3[$k] = $vet2[$i];
  $i++;
  $k++;
}

var_dump($vet3);
?>
