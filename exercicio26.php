<?php
function velocidadecarro($velocidade){
  if ($velocidade < 40){
    echo "Velocidade correta";
  }elseif($velocidade = 40){
    echo "Tome cuidado!";
  }else{
    echo "Tomou uma multa";
  }
}

velocidadecarro(40);


?>