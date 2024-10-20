<?php

function checagem ( $nome,$idade){
  echo "Prazer $nome\n";
  echo "Você tem $idade\n";  

  if(is_int($idade)){
    echo "O valor é do tipo inteiro\n";
  }else{
    echo "O valor não é do tipo inteiro\n";
  }

}  
checagem("Afonso","Rebeca");

?>