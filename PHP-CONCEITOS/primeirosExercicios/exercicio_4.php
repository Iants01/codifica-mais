<?php
$valores = 0;
$maiorValor = 0;
$menorValor = "zero";

while($valores != -1){
    $valores = readline("Digite vários numeros inteiros para saber qual é o maior entre eles, para parar digite -1: ");
    

    if($maiorValor < $valores && $valores > -1) {
        $maiorValor = $valores;
    } 
    if ($menorValor > $valores && $valores > -1) {
        $menorValor = $valores;
    }
        
}

echo "O maior valor digitado foi $maiorValor e o menor valor foi $menorValor";