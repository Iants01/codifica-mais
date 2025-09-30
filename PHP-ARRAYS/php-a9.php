<?php

$valorTotalEstoque = 0;

$estoque = [
 ['Bermuda', 59.9, 6], // Produto 1
 ['Camisa', 89.9, 5], // Produto 2
 ['Sapato', 179.9, 10], // Produto 3
 ['Calça', 99.9, 7] // Produto 4
];

foreach ($estoque as $produto) {
    
    $valorTotalEstoque += $produto[1] * $produto[2];

}

echo "O valor total do estoque é $valorTotalEstoque";