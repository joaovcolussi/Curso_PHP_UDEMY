<?php
function checa_peso($peso){
  if ($peso > 80){
    echo "$peso Kg está pesado demais";
  }else
  echo "$peso Kg está dentro do limite";
}


checa_peso(30);

?>