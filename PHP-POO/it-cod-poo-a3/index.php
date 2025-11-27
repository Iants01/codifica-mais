<?php

require __DIR__ . '/Funcionario.php';
require __DIR__ . '/Cargo.php';

$funcionarios = [];

$funcionarios[] = new Funcionario ('Zé Pequeno', Cargo::Gerente, 3500);

$funcionarios[] = new Funcionario ('Tiro Certo', Cargo::Vendedor, 1000);

$funcionarios[] = new Funcionario ('Goku', Cargo::Mecânico, 5000);

var_dump($funcionarios);

$funcionarios[0]->alterarCargo(Cargo::Supervisor);

var_dump($funcionarios);

$funcionarios[0]->alterarSalario(1000);

var_dump($funcionarios);

$funcionarios[0]->exibirDetalhes();