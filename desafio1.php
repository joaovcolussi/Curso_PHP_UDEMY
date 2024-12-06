<?php

function countVowels($string){
  $vowels = ['a', 'e', 'i', 'o','u',"A","E","I","O","U"];
  $count = 0;

  for ($i = 0;$i <strlen($string); $i++){
    if (in_array($string[$i], $vowels)){
      $count++;
    }
  }
  return $count;
}

$input_string = "Hello, World!";
echo "A quantidade de vogais é: " . countVowels($input_string);