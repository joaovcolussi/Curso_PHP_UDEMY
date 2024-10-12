<?php
echo "Digite o primeiro número ";
$numero_um = fgets(STDIN);
echo "Digite o segundo número";
$numero_dois = fgets(STDIN);


$soma_numeros = $numero_um + $numero_dois;
echo "O resultado é $soma_numeros";
?>