<?php
$array = [123,'Carne','Pão frances',2321,true,[],'batata doce', 'almeirão',33];

$x= count ($array);
$y = 0;

while ($y <= $x){
  if(is_string($array[$y])){
    echo $array[$y] ."\n";
  }

  $y++;

}


?>