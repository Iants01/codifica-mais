<?php

function interpretadorIMC ($peso, $altura) 
{
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Magreza";
    } elseif($imc < 24.9) {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Normal";
    } elseif($imc < 29.9) {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Sobrepeso";
    } elseif($imc < 34.9) {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Obesidade grau 1";
    } elseif($imc < 39.9) {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Obesidade grau 2";
    } else {
        echo "Seu IMC é $imc(kg/m²), e sua classificação é : Obesidade grau 3";
    }
} 

$peso = readline("Digite seu peso: ");
$altura = readline("Digite sua altura: ");

interpretadorIMC($peso,$altura);
