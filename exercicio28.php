<?php

$contador = 4;

while ($contador +1 < 30 ){
  echo $contador; "\n";

  if ($contador == 24){
    break;
  }
  $contador +=2;
}


?>