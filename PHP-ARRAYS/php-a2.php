<?php

$larguraRetangulo = readline("Digite a largura do retângulo: ");
$alturaRetangulo = readline("Digite a altura do retângulo: ");

$area = $alturaRetangulo * $larguraRetangulo;
$perimetro = 2 * ($larguraRetangulo + $alturaRetangulo);

echo "\nLargura: $larguraRetangulo metros" . PHP_EOL;
echo "Altura: $alturaRetangulo metros" . PHP_EOL;
echo "Área: $area m²" . PHP_EOL;
echo "Perímetro: $perimetro metros";

