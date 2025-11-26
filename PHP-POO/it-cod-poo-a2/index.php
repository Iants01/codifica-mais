<?php

require __DIR__ . '/Produto.php';

$produtos = [];
var_dump($produtos);

$produtos[] = new Produto('Bermuda', 20.99, 25);
var_dump($produtos);

$produtos[0]->alterarPreco(29.99);
var_dump($produtos);

$produtos[0]->exibirDetalhes();

$produtos[0]->alterarQuantidade(-1);
var_dump($produtos);
