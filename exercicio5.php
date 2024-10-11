<?php
$str = "Eu amo carne";


if (is_string($str)) {
  echo "$str é uma string\n";
}else{
  echo "$str Não é uma string\n";
}

$str = true;

if (is_bool($str)){
  echo "O $str é true\n";
}else{
  echo "O $str é false\n";
}

$str = true;


if (is_bool($str == false)){
  echo "O $str é true";
}else{
  echo "O $str é false";
}

?>