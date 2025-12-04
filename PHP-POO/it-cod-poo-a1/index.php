<?php

require __DIR__ . "/ContaBancaria.php";

echo "Bem vindo ao banco Codifica+!" . PHP_EOL;

$contasBancarias = []; // Array de todas contas criadas

do {
    echo "1 - Criar nova conta" . PHP_EOL . "2 - Depositar" . PHP_EOL . "3 - Sacar" . PHP_EOL . "4 - Ver saldo" . PHP_EOL . "5 - Sair" . PHP_EOL;
    $opçãoMenu = readline("Selecione uma opção para continuar: ");

    switch ($opçãoMenu) {

    case 1: // Criar nova Conta bancária
        $numeroConta = readline("Digite o número da conta: ");
        $titularConta = readline("Digite o nome do titular da conta: ");
        $contasBancarias[] = new ContaBancaria($numeroConta, $titularConta);
        $codigoConta = array_key_last($contasBancarias);
        echo "O código da sua conta é:  $codigoConta" . PHP_EOL . "O número da conta é: $numeroConta " . PHP_EOL . "O titular é : $titularConta " . PHP_EOL;
    

        break;
    
    case 2: // Fazer depósito na conta
        $codigoConta = readline("Digite o código da sua conta: ");
        $valorADepositar = readline("Digite o valor a depositar ");
        $contasBancarias[$codigoConta]->depositar($valorADepositar);
        break;
    
    case 3: // Fazer saque na conta
        $codigoConta = readline("Digite o código da sua conta: ");
        $valorASacar = readline("Digite o valor a sacar ");
        $contasBancarias[$codigoConta]->sacar($valorASacar);
        break;

    case 4: // Ver saldo da conta
        $codigoConta = readline("Digite o código da sua conta para ver o Saldo: ");
        $contasBancarias[$codigoConta]->exibirSaldo();
        break;
    
    case 5: // Sair
        break;

    default:
        echo "Opção inválida";

}
} while ($opçãoMenu != 5);


echo "Obrigado por usar o Banco Codifica+" . PHP_EOL;

var_dump($contasBancarias);


