<?php

$temperatura = readline("Digite a temperatura:  ");
$unidadeMedida = readline("Digite a unidade de medida, 'C' para Celcius e 'F' para Fahrenheit: ");

if($unidadeMedida == "C") {
    $conversaoFahrenheit = ($temperatura * (9/5)) + 32;
    echo "\nTemperatura: $temperatura ºC" . PHP_EOL;
    echo "Temperatura em Fahrenheit: $conversaoFahrenheit ºF";
} elseif ($unidadeMedida == "F") {
    $conversaoCelcius = ($temperatura - 32) * (5/9);
    echo "\nTemperatura: $temperatura ºF" . PHP_EOL;
    echo "Temperatura em Celcius: $conversaoCelcius ºC";
} else {
    echo "Valores não válidos";
}


