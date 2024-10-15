<?php

function parimpar ($a,$b){
  $resultado = $a * $b;
  if ($resultado %2== 0){
    echo "O resultado : $resultado é par";
  }else{
    echo "O resultado : $resultado é impar";
  }  
} 

echo parimpar(4,5);


?>