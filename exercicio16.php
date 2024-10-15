<?php

function checagem($a,$b){
  if ($a == $b){
    echo "O número A $a é igual B $b\n";
  }else{
    echo "O número A $a é diferente de $b\n";
  }
  if ($a > $b){
  echo  "O número A $a é maior que B $b\n";
  }else{
    echo "O número B $b é maior que A  $a\n";
  }
}
echo checagem(5,5);
?>