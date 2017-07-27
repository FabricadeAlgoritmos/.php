<?php
#http://localhost/Projects/php_Algoritmos/ArquivoSequencial/index.php

function showList($lista, $titulo){
  echo $titulo ."<br>";
  print_r($lista);
  echo "<br>";
}

$listaVelha = array(1, 10, 11, 30, 45, 89, 200, 3000);
showList($listaVelha, "Lista velha:");

$lote = array(0, 12, 500, 1000, 9900000);
showList($lote, "Lote:");

echo "<p>Gerando nova lista...</p>";
$novaLista = array();
$i = 0;
$j = 0;
$k = 0;
while($i < count($listaVelha) && $j < count($lote)){
  if($listaVelha[$i] < $lote[$j]){
    $novaLista[$k] = $listaVelha[$i];
    $i++;
  }else{
    $novaLista[$k] = $lote[$j];
    $j++;
  }
  $k++;
}

while($i < count($listaVelha)){
  $novaLista[$k] = $listaVelha[$i];
  $i++;
  $k++;
}

while($j < count($lote)){
  $novaLista[$k] = $lote[$j];
  $j++;
  $k++;
}

showList($novaLista, "Nova lista:");

echo "<p>Busca Binária</p>";
$cod = 1000;
echo "<p>Pesquisando o valor $cod...</p>";

$inicio = 0;
$final = count($novaLista) - 1;
$meio = floor(($inicio + $final) / 2);

while($cod != $novaLista[$meio] && $inicio < $final){
  if($cod > $novaLista[$meio]){
    $inicio = $meio + 1;
  }else{
    $final = $meio - 1;
  }
  $meio = floor(($inicio + $final) / 2);
}

if($cod == $novaLista[$meio]){
  echo $novaLista[$meio] ." encontrado na posicao ". $meio . "<br>";
}else{
  echo "<p>Valor não existe na lista!</p>";
}

echo "<p> Removendo Lote </p>";
$listaAtualizada = array();

$novoLote = array(1, 30, 500, 3000, 9900000);
$i = 0;
$j = 0;
$k = 0;
while($j < count($novoLote)){
  if($novaLista[$i] != $novoLote[$j]){
    $listaAtualizada[$k] = $novaLista[$i];
    echo "<p>Lista[". $k ."] recebe ". $novaLista[$i] ."</p>";
    $k++;
  }else{
    echo "<p>". $novoLote[$j] . " removido! </p>";
    $j++;
  }
  $i++;
}

while($i < count($novaLista)){
  $listaAtualizada[$k] = $novaLista[$i];
  echo "<p>Lista[". $k ."] recebe ". $novaLista[$k] ."</p>";
  $k++;
  $i++;
}

showList($listaAtualizada, "Lista atualizada:");


?>
