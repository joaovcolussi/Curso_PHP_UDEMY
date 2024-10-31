<?php
$arr= [10,20,30,40,50,60,70,80,90,100];
$contador = 0;

while ($i < count($arr)){

  $numero_atual = $arr[$i];
  if($numero_atual == 30 | $numero_atual == 40){
    echo "Pulando o número $numero_atual \n";
    $i++;
    continue;
  }
  echo "Elemento: $arr[$i] \n"; 
  
  $i++;
}