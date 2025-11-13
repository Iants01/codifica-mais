<?php 

require "vendor/autoload.php";

use Misterioso013\Tools\ValueObjects\Cpf;

// Criar um CPF a partir de uma string
//$cpf = new Cpf('12345678909');

// Formatar CPF
//echo $cpf->format(); // 123.456.789-09

// Gerar CPF aleatório
//$cpf = Cpf::generate(); // Com máscara por padrão
$cpf = Cpf::generate(false); // Sem máscara

// Gerar CPF para um estado específico
//$cpf = Cpf::generate(true, 'ES');



echo "CPF Aleatório : $cpf - ";

// Verificar UF do CPF
echo $cpf->getUF(); // Retorna string (ex: "SP")
$ufs = $cpf->getUF(false); // Retorna array