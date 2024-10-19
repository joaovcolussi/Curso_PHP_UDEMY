<?php

function checaridade($idade){

  echo "Qual a idade da pessoa?";
$idade = fgets(STDIN);

if ($idade >= 18) {
  echo "A pessoa tem $idade anos maior de idade";
}else{
  echo "A pessoa tem  $idade anos menor de idade";
}

}

checaridade(18);

?>