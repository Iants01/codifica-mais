<?php

function calcularMedia($notas) 
{
    return array_sum($notas) / count($notas);
};

$notasAlunos = [
 'Aluno1' => [8.5, 6.0, 7.8, 9.2, 5.5],
 'Aluno2' => [7.0, 8.0, 6.5, 7.5, 8.5], 
 'Aluno3' => [6.5, 7.5, 4.5, 5.5, 7.0], 
 'Aluno4' => [5.0, 4.6, 7.8, 9.0, 6.0]
];

$contadorAprovados = 0;
$contadorReprovados = 0;

foreach ($notasAlunos as $aluno => $notas) {
    
    $mediaNotas = calcularMedia($notas);

    if($mediaNotas >= 7) {
        echo "Parabens $aluno sua média foi $mediaNotas e você foi Aprovado!" . PHP_EOL;
        $contadorAprovados += 1;
    } else {
        echo "$aluno sua média foi $mediaNotas e você foi Reprovado!" . PHP_EOL;
        $contadorReprovados += 1;
    }

};

echo "Foram aprovados $contadorAprovados alunos e foram reprovados $contadorAprovados alunos.";


