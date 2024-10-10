<?php

echo "Digite um número: \n";
$numero = fgets(STDIN);
printf(("O número que digitou é: $numero\n"));
$vezescinco = $numero * 5;
printf("O número que digitou x5 é: $vezescinco\n");

if ($vezescinco > 50){
  printf("O número é maior que 50\n");
}else{
  printf("O número é menor que 50\n");
}


if(is_int($numero)){
  printf("\nO número $numero é inteiro");
}else{
  printf("O número não é inteiro");
}

?>