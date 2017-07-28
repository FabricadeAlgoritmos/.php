<?php

$num = $_GET['num'] ?? "0";
$dig = strlen($num);

echo "<p>$num tem $dig digitos </p>";

if($num == 0){
  echo "Zero";
}else{
  echo "<h1>". leia($num, $dig) . "</h1>";
}

echo "<a href='index.php'>voltar</a>";

function leia($num, $dig){
  switch($dig){
    case 1:
      return funcOne($num);

    case 2:
      return funcTwo($num);

    case 3:
      return funcThree($num);

    case 4:
      return funcFour($num);

    case 5:
      return funcFive($num);

    case 6:
      return funcSix($num);

    case 7:
      return funcSeven($num);
  }

}


function funcOne($num){
  switch($num){
    case "1":
      return "um";

    case "2":
      return "dois";

    case "3":
      return "três";

    case "4":
      return "quatro";

    case "5":
      return "cinco";

    case "6":
      return "seis";

    case "7":
      return "sete";

    case "8":
      return "oito";

    case "9":
      return "nove";
  }//fim switch
  return " ";
}

function funcTwo($num){

  if($num[0] == "0"){
    $n = $num[1];
    return funcOne($n);
  }

  switch($num[0]){
    case "1":
      switch($num[1]){
        case "0":
          return "dez";

        case "1":
          return "onze";

        case "2":
          return "doze";

        case "3":
          return "treze";

        case "4":
          return "quatorze";

        case "5":
          return "quinze";

        case "6":
          return "dezesseis";

        case "7":
          return "dezessete";

        case "8":
          return "dezoito";

        case "9":
          return "dezenove";
      }//fim switch $num[1]

    case "2":
      $valor = "vinte";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "3":
      $valor = "trinta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "4":
      $valor = "quarenta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "5":
      $valor = "cinquenta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "6":
      $valor = "sessenta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "7":
      $valor = "setenta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "8":
      $valor = "oitenta";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;

    case "9":
      $valor = "noventa";
      if($num[1] > 0){
        $valor .= " e ". funcOne($num[1]);
      }
      return $valor;
  }//fim switch $num[0]
}

function funcThree($num){
  if($num[0] == "0"){
    $num[0] = $num[1];
    $num[1] = $num[2];
    return funcTwo($num);
  }

  switch($num[0]){
    case "1":
      $valor = "cem";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor = "cento e ". funcTwo($num);
      }
      return $valor;

    case "2":
      $valor = "duzentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
    return $valor;

    case "3":
      $valor = "trezentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
      return $valor;

    case "4":
      $valor = "quatrocentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
      return $valor;

    case "5":
      $valor = "quinhentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
      return $valor;

      case "6":
        $valor = "seiscentos";
        if($num[1] != "0" || $num[2] != "0"){
          $num[0] = $num[1];
          $num[1] = $num[2];
          $valor .= " e ". funcTwo($num);
        }
        return $valor;

     case "7":
       $valor = "setecentos";
       if($num[1] != "0" || $num[2] != "0"){
         $num[0] = $num[1];
         $num[1] = $num[2];
         $valor .= " e ". funcTwo($num);
       }
       return $valor;

    case "8":
      $valor = "oitocentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
      return $valor;

    case "9":
      $valor = "novecentos";
      if($num[1] != "0" || $num[2] != "0"){
        $num[0] = $num[1];
        $num[1] = $num[2];
        $valor .= " e ". funcTwo($num);
      }
      return $valor;
  }//fim switch $num[0]
}

function funcFour($num){
  $x = array();
  $x[0] = $num[1];
  $x[1] = $num[2];
  $x[2] = $num[3];

  if($num[0] == "0"){
    return funcThree($x);
  }

  switch($num[0]){
    case "1":
      $valor = "mil";
      if($num[1] != "0" || $num[2] != "0" || $num[3] != "0"){
        $valor .= " e ". funcThree($x);
      }
      return $valor;

    default:
      $valor = funcOne($num[0]);
      $valor .= " mil";
      if($num[1] != "0" || $num[2] != "0" || $num[3] != "0"){
        $valor .= " e ". funcThree($x);
      }
      return $valor;
  }//fim switch
}

function funcFive($num){

  $x = array();
  $x[0] = $num[0];
  $x[1] = $num[1];

  $y = array();
  $y[0] = $num[2];
  $y[1] = $num[3];
  $y[2] = $num[4];

  if($num[0] == "0"){
    $z = array();
    $z[0] = $num[1];
    $z[1] = $num[2];
    $z[2] = $num[3];
    $z[3] = $num[4];
    return funcFour($z);
  }

  $valor = funcTwo($x) . " mil";
  if($y[0] != "0" || $y[1] != "0" || $y[2] != "0"){
    $valor .= " e ". funcThree($y);
  }
  return $valor;
}


function funcSix($num){

  $x = array();
  $x[0] = $num[0];
  $x[1] = $num[1];
  $x[2] = $num[2];

  $y = array();
  $y[0] = $num[3];
  $y[1] = $num[4];
  $y[2] = $num[5];

  if($num[0] == "0"){
    $z = array();
    $z[0] = $num[1];
    $z[1] = $num[2];
    $z[2] = $num[3];
    $z[3] = $num[4];
    $z[4] = $num[5];
    return funcFive($z);
  }

  $valor = funcThree($x) . " mil";
  if($y[0] != "0" || $y[1] != "0" || $y[2] != "0"){
    $valor .= " e ". funcThree($y);
  }
  return $valor;
}

function funcSeven($num){

  $x = array();
  $x[0] = $num[1];
  $x[1] = $num[2];
  $x[2] = $num[3];

  $y = array();
  $y[0] = $num[4];
  $y[1] = $num[5];
  $y[2] = $num[6];

  if($num[0] == "0"){
    $z = array();
    $z[0] = $num[1];
    $z[1] = $num[2];
    $z[2] = $num[3];
    $z[3] = $num[4];
    $z[4] = $num[5];
    $z[6] = $num[6];
    return funcFive($z);
  }

  $valor = funcOne($num[0]);
  if($x[0] != "0" || $x[1] != "0" || $x[2] != "0"){
    if($valor != "um"){
      $valor .= " milhões e ". funcThree($x) . " mil";
    }else{
      $valor .= " milhão e ". funcThree($x) . " mil";
    }

    if($y[0] != "0" || $y[1] != "0" || $y[2] != "0"){
      $valor .= " e ". funcThree($y);
    }
  }elseif($valor == "um"){
    $valor .= " milhão";
    if($y[0] != "0" || $y[1] != "0" || $y[2] != "0"){
      $valor .= " e ". funcThree($y);
    }
  }else{
    $valor .= " milhões";
    if($y[0] != "0" || $y[1] != "0" || $y[2] != "0"){
      $valor .= " e ". funcThree($y);
    }
  }
  return $valor;
}
 ?>
