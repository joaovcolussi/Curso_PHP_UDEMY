<?php


$varnumero1 = 50;
$varnumero2 = 0;
$varstring = "Macarrão";

if (is_int($varnumero1)){
  echo "O primeiro if é um número";
  if (is_int($varnumero1)){
    $varnumero1*=  $varnumero2 * 2;
    echo $varnumero2;
    if ($varnumero2 >100){
      echo "$varnumero2 é maior que 100";
    }else{
      echo "O terceiro if não é verdadeiro";
    }
  }else
  echo "O segundo if não é um número"; 
}else{
  echo "O primeiro if não é um número";
}



?>