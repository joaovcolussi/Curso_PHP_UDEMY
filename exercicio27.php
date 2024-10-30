<?php
$array = [123,'Carne','Pão frances',2321,true,[],'batata doce', 'almeirão',33];

$contador= count ($array);
$y = 0;

while ($y <= $contador){
  if(is_string($array[$y])){
    echo $array[$y] ."\n";
  }

  $y++;

}


?>