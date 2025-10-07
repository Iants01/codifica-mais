<?php

function menu() 
{
    echo "\nSistema de Gerenciamento de Estoque" . PHP_EOL .
    "a. (1) Adicionar um produto". PHP_EOL .
    "b. (2) Vender um produto". PHP_EOL .
    "c. (3) Verificar o estoque". PHP_EOL .
    "d. (4) Listar o estoque". PHP_EOL .
    "e. (5) Sair" . PHP_EOL;
    
    $opcaoInformada = readline("Escolha uma opção: ");
    
    echo PHP_EOL;

    return $opcaoInformada;
}

function adicionarProduto($estoque)
{
    $produtos = [
        'codigo' => 2,
        'nome' => 0,
        'tamanho' => 0,
        'cor' => 0,
        'quantidade' => 0
    ];

    echo "ADICIONAR PRODUTO AO ESTOQUE" . PHP_EOL . PHP_EOL;

    $produtos['codigo'] = readline("Digite o codigo do produto: ");
    
    $produtos['nome'] = readline("Digite o nome do produto: ");

    if($produtos['nome'] == '') {

        while($produtos['nome'] == '') {

            $produtos['nome'] = readline("Digite um nome válido: " . PHP_EOL);
        
        }

    }
    
    $produtos['tamanho'] = readline("Digite o tamanho do produto: ");
    $produtos['cor'] = readline("Digite a cor do produto: ");

    $produtos['quantidade'] = readline("Digite a quantidade(apenas numeros inteiros): ");

    if(!is_numeric($produtos['quantidade']) || (int) $produtos['quantidade'] <= 0 ) {
        while ((int) $produtos['quantidade'] <= 0) {
            $produtos['quantidade'] = readline("Valor inválido, digite a quantidade novamente: " . PHP_EOL);
        }
    }
    
    echo PHP_EOL;

    $estoque[] = $produtos;

    echo "Novo produto adicionado: " . PHP_EOL;
    
    $produtoAdicionado = count($estoque) - 1;

        echo "Código do Sistema: $produtoAdicionado " . PHP_EOL;
        
        foreach($produtos as $key => $produto) {
            echo "$key : $produto" . PHP_EOL;
        }

        echo PHP_EOL;
    
    return $estoque;
}

function venderProduto($estoque) 
{
    $codigoProdutoASerVendido = readline("Digite o código do sistema do pruduto que será vendido: ");

    $produtoASerVendido = $estoque[$codigoProdutoASerVendido]['nome'];

    $quantidadeASerVendida = readline("Digite a quantidade que será vendida do produto, $produtoASerVendido: ");

    if($estoque[$codigoProdutoASerVendido]['quantidade'] - $quantidadeASerVendida < 0 ) {
        echo "Saldo insuficiente";

    } else {

        echo "Serão vendidos $quantidadeASerVendida $produtoASerVendido" . PHP_EOL;

        $estoque[$codigoProdutoASerVendido]['quantidade'] = $estoque[$codigoProdutoASerVendido]['quantidade'] - $quantidadeASerVendida;

        $novoSaldoProduto = $estoque[$codigoProdutoASerVendido]['quantidade'];

        echo "O novo saldo do produto é $novoSaldoProduto" . PHP_EOL;

    }

    return $estoque;
   
}

function verificarEstoque($estoque, $codigo)
{
    $produtoASerVerificado = $estoque[$codigo]['nome'];

    echo "O produto a ser verificado é: $produtoASerVerificado" . PHP_EOL;

    foreach($estoque[$codigo] as $chave => $produto) {
        echo "$chave: $produto" . PHP_EOL;
    }
}

function listarEstoque($estoque)
{

    foreach($estoque as $codigoSistema => $produtos) {
        echo "Código Sistema: $codigoSistema" . PHP_EOL;

        foreach($produtos as $chave => $produto) {
            if($produtos['quantidade'] == 0){
            } else {
                echo "$chave: $produto" . PHP_EOL;
            }   
        }

        echo PHP_EOL;
    }
}

$estoque = [];

$opcaoInformada = menu();

while($opcaoInformada != 5) {

    if($opcaoInformada == 1) {
        $adicionarItem = 1;
        while($adicionarItem == 1) {
            $estoque = adicionarProduto($estoque);

            $adicionarItem =  readline("Para adicioanr outro produto digite 1, para retornar ao menu digite qualquer tecla: " . PHP_EOL);
        }  

    } elseif($opcaoInformada == 2) {

        if($estoque == []) {
            echo "Não existem produtos cadastrados para vender" . PHP_EOL;
        } else {
            $estoque = venderProduto($estoque);
        }
     
    } elseif($opcaoInformada == 3) {
        
        if($estoque == []) {
            echo "Não existem produtos cadastrados para verificar" . PHP_EOL;
        } else {
            $codigoItemVerificar = readline("Digite o código do sistema do item para verificá-lo: " . PHP_EOL);
            
            verificarEstoque($estoque, $codigoItemVerificar);
        }  

    } elseif($opcaoInformada == 4) {
        if($estoque == []) {
            echo "Não existem produtos cadastrados" . PHP_EOL;
        } else {
            listarEstoque($estoque);
        }
    } elseif($opcaoInformada == 5) {
        continue;
    } else {
        echo "Opção inválida, escolha outra opção:" . PHP_EOL;
    }

    $opcaoInformada = menu();

};

echo "Sistema de Gerenciamento de Estoque finalizado";