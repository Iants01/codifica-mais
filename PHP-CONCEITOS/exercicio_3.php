<?php 

$numA = readline("Digite o primeiro número: ");

$numB = readline("Digite o segundo número: ");

while ($numA > $numB) {

    echo "O Primeiro número deve ser maior que o segundo\n";

    $numA = readline("Digite um numero: ");

    $numB = readline("Digite outro numero: ");

}

$soma = 0;

for ($contador = $numA; $contador <= $numB; $contador++) {

    if($contador % 2 != 0) {
        
        $soma = $soma + $contador;

    }

}

echo "A soma dos números ímpares no intervalo de $numA até $numB é: $soma";
