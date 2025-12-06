<?php

require_once __DIR__ . "/ContaBancaria.php";
require_once __DIR__ . "/ContaPoupanca.php";

echo "Bem vindo ao banco Codifica+!" . PHP_EOL;
echo PHP_EOL;

$contasBancarias = []; // Array de todas contas criadas

do {

    echo "---------MENU---------" . PHP_EOL;
    echo "1 - Criar nova conta" . PHP_EOL . "2 - Depositar" . PHP_EOL . "3 - Sacar" . PHP_EOL . "4 - Ver saldo" . PHP_EOL . "5 - Transferir Dinheiro(Conta Corrente)" . PHP_EOL . "6 - Ver % rendimento (Conta Pupança)" . PHP_EOL . "7 - Alterar % rendimento (Conta Pupança)" . PHP_EOL . "8 - Aplicar Rendimento (Conta Poupança)" . PHP_EOL . "9 - Sair" . PHP_EOL;

    echo PHP_EOL;

    $opcaoMenu = readline("Selecione uma opção para continuar: ");

    switch ($opcaoMenu) {

    case 1: // Criar nova Conta bancária
        $titularConta = readline("Digite o nome do titular da conta: ");
        $tipoConta = readline("Digite o tipo da conta, '1' para conta corrente, '2' para poupança: ");
        echo PHP_EOL;
        if($tipoConta !== 1 && $tipoConta !==2){
            echo "Opção do tipo de conta Inválida!" . PHP_EOL;
            echo PHP_EOL;
            break;
        }
        echo PHP_EOL;

        if($tipoConta == 1){
            $contasBancarias[] = new ContaCorrente($titularConta, $tipoConta, 0);
        }
        if($tipoConta == 2){
            $contasBancarias[] = new ContaPoupanca($titularConta, $tipoConta, 0);
        }
        $codigoConta = array_key_last($contasBancarias);
        $numeroConta = $contasBancarias[$codigoConta]->gerarNumeroConta($tipoConta);
        echo "O código da sua conta é:  $codigoConta" . PHP_EOL . "O número da conta é: $numeroConta " . PHP_EOL . "O titular é : $titularConta " . PHP_EOL;

        echo PHP_EOL;
        break;

    case 2: // Fazer depósito na conta
        $codigoConta = readline("Digite o código da sua conta: ");

        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        $valorADepositar = readline("Digite o valor a depositar: ");
        echo PHP_EOL;
        $contasBancarias[$codigoConta]->depositar($valorADepositar);

        echo PHP_EOL;
        break;

    case 3: // Fazer saque na conta
        $codigoConta = readline("Digite o código da sua conta: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        $valorASacar = readline("Digite o valor a sacar: ");
        echo PHP_EOL;
        $contasBancarias[$codigoConta]->sacar($valorASacar);

        echo PHP_EOL;
        break;

    case 4: // Ver saldo da conta
        $codigoConta = readline("Digite o código da sua conta para ver o Saldo: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        echo PHP_EOL;
        $contasBancarias[$codigoConta]->exibirSaldo();

        echo PHP_EOL;
        break;

    case 5: // Transferir Dinheiro
        $codigoConta = readline("Digite o código da sua conta: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        echo PHP_EOL;
        
        if (!($contasBancarias[$codigoConta] instanceof ContaCorrente)){
            echo "Serviço Disponível apenas para Conta Corrente!" . PHP_EOL;
            
            echo PHP_EOL;
            break;
        }

        $codigoContaDestino = readline("Digite o código da conta que irá receber o dinheiro: ");
        if(!isset($contasBancarias[$codigoContaDestino])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        $valor = readline("Digite o valor a transferir: ");
        $contaDestino = $contasBancarias[$codigoContaDestino];
        $contasBancarias[$codigoConta]->transferirDinheiro($contaDestino, $valor);

        echo PHP_EOL;
        break;

    case 6: // Ver Porcentagem rendimento conta Poupança

        $codigoConta = readline("Digite o código da conta para ver sua parcentagem de rendimento: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        echo PHP_EOL;
        
        if (!($contasBancarias[$codigoConta] instanceof ContaPoupanca)){
            echo "Serviço Disponível apenas para Conta Poupança!" . PHP_EOL;

            echo PHP_EOL;
            break;
        }

        $porcentageRendimento = ($contasBancarias[$codigoConta]->getPorcentagemRendimento() * 100);
        echo "A porcentagem de rendimento da sua conta é:  $porcentageRendimento%" . PHP_EOL;

        echo PHP_EOL;
        break;

    case 7: // Alterar Porcentagem rendimento conta Poupança

        $codigoConta = readline("Digite o código da conta que irá alterar a porcentagem de rendimento: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        echo PHP_EOL;
        
        if (!($contasBancarias[$codigoConta] instanceof ContaPoupanca)){
            echo "Serviço Disponível apenas para Conta Poupança!" . PHP_EOL;

            echo PHP_EOL;
            break;
        }

        $novoValorRendimento = readline("Digite o novo valor do rendimento em % : ");
        $contasBancarias[$codigoConta]->setPorcentagemRendimento($novoValorRendimento);

        echo PHP_EOL;
        break;

    case 8: // Aplicar rendimento conta Poupança

        $codigoConta = readline("Digite o código da conta para aplicar o rendimento rendimento: ");
        if(!isset($contasBancarias[$codigoConta])){
            echo "Conta não encontrada!" . PHP_EOL;
            break;
        }
        echo PHP_EOL;
        
        if (!($contasBancarias[$codigoConta] instanceof ContaPoupanca)){
            echo "Serviço Disponível apenas para Conta Poupança!" . PHP_EOL;

            echo PHP_EOL;
            break;
        }

        $contasBancarias[$codigoConta]->aplicarRendimento();
        echo PHP_EOL;
        break;
        
    case 9: // Sair
        break;

    default:
        echo "Opção inválida" . PHP_EOL;

        echo PHP_EOL;
        
}
} while ($opcaoMenu != 9);

echo "Obrigado por usar o Banco Codifica+" . PHP_EOL;

var_dump($contasBancarias);