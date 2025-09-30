<?php

function divisaoValorChurrasco($numeroParticipantes, $valorTotalProdutos)
{
    return $valorTotalProdutos / $numeroParticipantes;
}

$valorProdutoMaisCaro = 0;

$numeroParticipantes = readline("Digite o número total de participantes: ");

if ($numeroParticipantes > 1) {
    echo "Digite quais produtos serão comprados e o seu valor, escreva um por vez, para encerrar digite '0': \n";

    do {

        $produto = readline("Produto:" . PHP_EOL);
        if ($produto != 0) {
            $produtos[] = $produto;
        } else {
            continue;
        };

        $valorProduto = readline("Digite o valor do(a) $produto: R$" . PHP_EOL);

        $valorProdutos[] = $valorProduto;

        if($valorProduto > $valorProdutoMaisCaro) {
            $valorProdutoMaisCaro = $valorProduto;
            $produtoMaisCaro = $produto;
        }
        
    } while ($produto != '0');

    $valorTotalProdutos = array_sum($valorProdutos);

    $valorIndividual = divisaoValorChurrasco($numeroParticipantes, $valorTotalProdutos);

    echo "O churrasco terá $numeroParticipantes participantes." . PHP_EOL;

    echo "Produtos comprados:" . PHP_EOL;

    foreach ($produtos as $item) {
        echo "$item" . PHP_EOL;
    };

    echo "O produto mais caro foi $produtoMaisCaro, custando R$ $valorProdutoMaisCaro." . PHP_EOL;

    echo "Cada participante irá pagar R$$valorIndividual.";
} else {
    echo "O churrasco foi cancelado, todo mundo furou!";
}


