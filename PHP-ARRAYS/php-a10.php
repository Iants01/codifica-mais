<?php

function calcularSalarioTotal($valorHoraExtra, $salarioBase, $horasExtras) {
    
    return $salarioBase + ($valorHoraExtra * $horasExtras);
}
function listarFuncionarios($todosFuncionarios) {

    foreach ($todosFuncionarios as $funcionarios) {
    foreach ($funcionarios as $info => $funcionario) {
        echo "$info : $funcionario" . PHP_EOL;
    };
    echo "\n";
}

};

$funcionario1 = [
    'Nome' => 'Pedro',
    'Salário Base' => 2500,
    'Horas Extras' => 10
];
$funcionario2 = [
    'Nome' => 'Renata',
    'Salário Base' => 3000,
    'Horas Extras' => 5
];
$funcionario3 = [
    'Nome' => 'Sérgio',
    'Salário Base' => 2800,
    'Horas Extras' => 8
];
$funcionario4 = [
    'Nome' => 'Vanessa',
    'Salário Base' => 3200,
    'Horas Extras' => 12
];
$funcionario5 = [
    'Nome' => 'André',
    'Salário Base' => 1700,
    'Horas Extras' => 0
];

$todosFuncionarios = [$funcionario1, $funcionario2, $funcionario3, $funcionario4, $funcionario5];

listarFuncionarios($todosFuncionarios);

echo "\n";

foreach ($todosFuncionarios as $funcionarios) {
    
    $valorHoraExtra = ($funcionarios['Salário Base'] / 160) * 1.5;

    $salarioTotal = calcularSalarioTotal($valorHoraExtra, $funcionarios['Salário Base'], $funcionarios['Horas Extras'] );

    echo "O salário total do(a) funcionário(a) {$funcionarios['Nome']} é $salarioTotal." . PHP_EOL . PHP_EOL;

};