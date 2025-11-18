<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

Carbon::setLocale('pt-BR');

$dataNascimento = readline("Digite sua data de nascimento no formato 'YYYY-MM-DD': ");

$hoje = Carbon::now('America/Sao_Paulo');
$dia = $hoje->day;
$nomeDia = $hoje->dayName;
$mes = $hoje->localeMonth;
$ano = $hoje->year;

$dataNascimentoFormatada = Carbon::parse($dataNascimento, 'America/Sao_Paulo');

$idade = (int)$dataNascimentoFormatada->diffInYear($hoje);

$diasDeVida = (int)$dataNascimentoFormatada->diffInDay($hoje);

$diaDaSemanaNascimento = $dataNascimentoFormatada->dayName;


$dataProximoAniversario = $dataNascimentoFormatada->copy()->addYears($idade+1);

$tempoProximoAniversario = (int)$hoje->diffInDay($dataProximoAniversario);



echo "Sua data de nascimento é : $dataNascimento" . PHP_EOL;

echo "Sua idade é: $idade anos" . PHP_EOL;

echo "Você possui $diasDeVida dias de vida" . PHP_EOL;

echo "O dia da Semana do seu nascimento foi: $diaDaSemanaNascimento" . PHP_EOL;

echo"Seu próximo aniversário é: $dataProximoAniversario, faltam $tempoProximoAniversario dias" . PHP_EOL;