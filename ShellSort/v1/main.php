<?php
$vet = array(32, 18, 45, 29, 16, 41, 30, 27 , 14, 37, 29, 38, 20, 32, 17, 26);

$inc = array(8, 4, 2, 1);

$x = 0;
while($inc[$x] > 1){
  $i = 0;
  $j = $inc[$x];
  while($j < count($vet)){
    if($vet[$i] > $vet[$j]){
      $aux = $vet[$i];
      $vet[$i] = $vet[$j];
      $vet[$j] = $aux;
    }
    $i++;
    $j++;
  }
  $x++;
}


function insertion(&$v){
  for($i = 1; $i < count($v); $i++){
    $j = $i;
    while($v[$j] < $v[$j - 1] && $j > 0){
      $aux = $v[$j];
      $v[$j] = $v[$j - 1];
      $v[$j - 1] = $aux;
      $j--;
    }
  }
}

insertion($vet);

function showArray($vet){
  foreach($vet as $value){
    echo $value .", ";
  }
}

showArray($vet);
 ?>
