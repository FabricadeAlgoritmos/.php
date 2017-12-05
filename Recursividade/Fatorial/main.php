<?php

function fatorial($x){
  if($x == 1 || $x == 0){
    return 1;
  }
  return $x * fatorial($x - 1);
}

for($i = 0; $i <= 5; $i++){
  echo $i . "! = " . fatorial($i) . "<br>";
}

?>
