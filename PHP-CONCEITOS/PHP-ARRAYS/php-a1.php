<?php

$valorConta = readline("Digite o valor da conta: ");

$porcentagemGorjeta = readline("Digite o valor da porcentagem da gorjeta: ");

$valorGorjeta = $valorConta * ($porcentagemGorjeta / 100);

$totalPagar = $valorConta + $valorGorjeta;

echo "\nValor da conta : R$ $valorConta,00" . PHP_EOL;
echo "Porcentagem da Gorjeta : $porcentagemGorjeta%" . PHP_EOL;
echo "Valor da Gorjeta : R$ $valorGorjeta,00" . PHP_EOL;
echo "Total a pagar : R$ $totalPagar,00" . PHP_EOL;



