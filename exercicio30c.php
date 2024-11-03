<?php

$arr= [10,11,12,13,14,15,16,17,18,19,20];

for ($i=10; $i <= 20; $i++){

  if ($arr[$i] %2 ==0){
    array_push($arr, $i);
  }

}

print_r($arr);

for($i = 0;$i < count($arr); $i++){
  if($arr[$i] % 2 != 0){
    echo "número impar: $arr[$i] \n";
  }
}



?>