<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$hoje = Carbon::now('America/Sao_Paulo');
$dia = $hoje->day;
$nomeDia = $hoje->dayName;
$mes = $hoje->localeMonth;
$ano = $hoje->year;

$aniversario = 0 ; 

echo "$hoje" . PHP_EOL;
echo "$dia" . PHP_EOL;
echo "$nomeDia" . PHP_EOL;
echo "$mes" . PHP_EOL;
echo "$ano" . PHP_EOL;


$segundaData = Carbon::parse('2026-04-27 00:00:00', 'America/Sao_Paulo');

$resultado = $hoje->diffInDays($segundaData);

echo "$resultado";