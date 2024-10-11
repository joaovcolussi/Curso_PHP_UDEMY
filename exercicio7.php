<?php
$arr_associativa = ["Nome"=> "Joaquim", "Altura" => 1.70, "Idade"=> 17, "Estado-Civil"=> "Solteiro"];

$maior_idade = 18;
if ($arr_associativa['Idade'] < $maior_idade){
  echo "A pessoa é menor de idade ";
}else{
  echo "A pessoa é maior de idade";

}
?>