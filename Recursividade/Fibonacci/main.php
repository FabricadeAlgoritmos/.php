<?php

function fibonacci($x){
  if($x == 1 || $x == 0){
    return 1;
  }
  return fibonacci($x - 1) + fibonacci($x - 2);
}

for($i = 0; $i <= 10; $i++){
  echo fibonacci($i) . " ";
}

?>
