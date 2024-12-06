<?php

$lista_mercado = ["Maçãs", "Bananas", "Laranjas", "Uvas", "Alface", "Tomates", "Cenouras", "Batatas", "Cebolas", "Leite", "Iogurte", "Queijo", "Manteiga", "Ovos", "Frango", "Carne bovina", "Peixe", "Tofu", "Feijão", "Pão", "Tortillas", "Pão de forma", "Arroz", "Macarrão", "Quinoa", "Aveia", "Farinha", "Açúcar", "Sal", "Óleo de cozinha", "Massas (espaguete, pene)", "Água", "Suco", "Chá", "Café", "Sabão em pó", "Detergente", "Papel higiênico", "Creme dental", "Sabonete", "Papel toalha", "Sacos de lixo", "Guardanapos"];

function arraymarket($array){
    $str= "Você levou estes itens do mercado: ";
    for($i = 0; $i < count($array); $i++){
        if($i + 1 == count($array)){
            $str .= "$array[$i].";
        } else {
            $str .= "$array[$i], ";
        }
    }
    return $str;
}

echo arraymarket($lista_mercado);

?>
