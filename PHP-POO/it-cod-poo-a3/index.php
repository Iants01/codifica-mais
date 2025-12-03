<?php

require __DIR__ . '/Funcionario.php';
require __DIR__ . '/Cargo.php';

$funcionarios = [];

$funcionarios[] = new Funcionario ('Zé Pequeno', Cargo::Gerente, 3500);

$funcionarios[] = new Funcionario ('Tiro Certo', Cargo::Vendedor, 1000);

$funcionarios[] = new Funcionario ('Goku', Cargo::Mecânico, 5000);


$funcionarios[0]->alterarCargo(Cargo::Supervisor);

$funcionarios[0]->alterarSalario(1000);

$funcionarios[0]->exibirDetalhes();

var_dump($funcionarios);