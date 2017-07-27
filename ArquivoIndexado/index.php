<?php
# http://localhost/Projects/php_Algoritmos/ArquivoIndexado/index.php

require_once 'Usuario.php';
require_once 'Indice.php';

echo "<h1>Arquivo Indexado</h1>";

$u = array();
$u[0] = new Usuario(22, "Jane", true);
$u[1] = new Usuario(18, "Max", true);
$u[2] = new Usuario(13, "Sam", true);
$u[3] = new Usuario(30, "Megg", true);
$u[4] = new Usuario(8, "Lara", true);

$final = 4;
//var_dump($u);

$index = array();
$index[0] = new Indice(8, 4);
$index[1] = new Indice(13, 2);
$index[2] = new Indice(18, 1);
$index[3] = new Indice(22, 0);
$index[4] = new Indice(30, 3);

//var_dump($index);

echo "<p><strong>Inserindo novo Usuario</strong></p>";

$final++;
$u[$final] = new Usuario(14, "Jake", true);

$aux = $final - 1;
while($aux >= 0 && $u[$final]->id < $index[$aux]->cod){
  $index[$aux + 1] = new Indice($index[$aux]->cod, $index[$aux]->pos);
  $aux--;
}
$index[$aux + 1]->cod = $u[$final]->id;
$index[$aux + 1]->pos = $final;

var_dump($u);
var_dump($index);
echo "<p>Novo usuario adicionado!</p>";

echo "<p><strong>Buscando um Usuario</strong></p>";
$codigo = 18;
echo "<p>Pesquisando usuario com codigo ~:> $codigo</p>";
$inicio = 0;
$fim = $final;
$meio = floor(($inicio + $fim) / 2); // floor arredonda para baixo
while($codigo != $index[$meio]->cod && $inicio < $fim){
  if($codigo > $index[$meio]->cod){
    $inicio = $meio + 1;
  }else{
    $fim = $meio - 1;
  }
  $meio = floor(($inicio + $fim) / 2);
}
$i = $index[$meio]->pos;
if($codigo == $u[$i]->id && $u[$i]->status){
  echo "<p>{$u[$i]->nome} encontrado na posição {$meio} do indice e, {$i} da lista!</p>";
}else{
  echo "<p>Codigo não existe na lista!</p>";
}

echo "<p><strong>Removendo um Usuario</strong></p>";

$codigo = 18;
echo "<p>Pesquisando usuario com codigo ~:> $codigo</p>";
$inicio = 0;
$fim = $final;
$meio = floor(($inicio + $fim) / 2); // floor arredonda para baixo
while($codigo != $index[$meio]->cod && $inicio < $fim){
  if($codigo > $index[$meio]->cod){
    $inicio = $meio + 1;
  }else{
    $fim = $meio - 1;
  }
  $meio = floor(($inicio + $fim) / 2);
}
$i = $index[$meio]->pos;
if($codigo == $u[$i]->id && $u[$i]->status){
  $u[$i]->status = false;
  echo "<p>{$u[$i]->nome} removido!!!</p>";
}else{
  echo "<p>Codigo não existe na lista!</p>";
}

echo "<p><strong>Imprimindo</strong></p>";
echo "<pre>";
for($i = 0; $i <= $final; $i++){
  if($u[$i]->status){
    print_r($u[$i]);
  }
}
echo "</pre>";

echo "<p><strong>Atualizando Lista</strong></p>";
$novaLista = array();
$k = 0;
for($i = 0; $i <= $final; $i++){
  $j = $index[$i]->pos;
  if($u[$j]->status){
    $novaLista[$k] = new Usuario($u[$j]->id, $u[$j]->nome, true);
    $index[$k]->cod = $novaLista[$k]->id;
    $index[$k]->pos = $k;
    $k++;
  }
}
array_pop($index); // isso so funciona pq so removi 1 usuario
$final = $k - 1;


echo "<p>Lista Atualizada</p>";
echo "<pre>";
print_r($novaLista);
print_r($index);
echo "</pre>";
 ?>
