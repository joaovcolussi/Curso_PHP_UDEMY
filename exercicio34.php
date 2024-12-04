<?php
function VerificacaoParImpar($n){
  if ($n % 2 ===0){
    echo "O número $n é par" . "\n";
  }
  if ($n % 2 ===1){
    echo "O número $n é impar" . "\n";
  }
}



VerificacaoParImpar(3);
VerificacaoParImpar(5);
VerificacaoParImpar(2);
VerificacaoParImpar(6);

?>