<?php

$vetor = array(5, 4, 3, 2, 1);
$max = 4;
$troca = 1;

while($troca != 0){
    $troca = 0;
    for($i = 0; $i <= $max - 1; $i++){
        if($vetor[$i] > $vetor[$i + 1]){
            $aux = $vetor[$i];
            $vetor[$i] = $vetor[$i + 1];
            $vetor[$i + 1] = $aux;
            $troca = 1;
        }
    }
    $max--;
}

var_dump($vetor);

?>