<?php

function menu() 
{
    echo "Sistema de Gerenciamento de Estoque" . PHP_EOL .
    "a. (1) Adicionar um produto". PHP_EOL .
    "b. (2) Vender um produto". PHP_EOL .
    "c. (3) Verificar o estoque". PHP_EOL .
    "d. (4) Listar o estoque". PHP_EOL .
    "e. (5) Sair" . PHP_EOL;
    $opcaoInformada = readline("Escolha uma opção: ");
    return $opcaoInformada;
}


function adicionarProduto()
{
    $produtos = [
        'codigo' => 0,
        'nome' => 0,
        'tamanho' => 0,
        'cor' => 0,
        'quantidade' => 0
    ];

    echo "ADICIONAR PRODUTO AO ESTOQUE" . PHP_EOL;

    $produtos['codigo'] = readline("Digite o codigo do produto: ");
    $produtos['nome'] = readline("Digite o nome do produto: ");
    $produtos['tamanho'] = readline("Digite o tamanho do produto: ");
    $produtos['cor'] = readline("Digite a cor do produto: ");

    $produtos['quantidade'] = readline("Digite a quantidade: "); //verfificar se é maior=0

    echo "Novo produto adicionado: " . PHP_EOL;

    foreach($produtos as $key => $produto) {
        echo "$key : $produto" . PHP_EOL;
    };
    
   return $produtos;

}

function venderProduto($estoque) 
{
    $codigoProdutoASerVendido = readline("Digite o código do sistema do pruduto que será vendido: ");
        $produtoASerVendido = $estoque[$codigoProdutoASerVendido]['codigo'];

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

function listarEstoque($estoque)
{
    foreach($estoque as $produtos) {

        foreach($produtos as $chave => $produto) {
        echo "$chave: $produto" . PHP_EOL;
        }
    echo PHP_EOL;
 }
 
}

$estoque = [];

$opcaoInformada = menu();

while($opcaoInformada != 5) {


    if($opcaoInformada == 1) {

        while($opcaoInformada == 1) {

            $estoque[] = adicionarProduto();

            $opcaoInformada =  readline("Para adicioanr outro produto digite '1', para retornar ao menu digite qualquer tecla: ");

        }  

    } elseif($opcaoInformada == 2) {

        if($estoque == []) {
        echo "Não existe produtos cadastrados";
        } else {
        $estoque = venderProduto($estoque);
        }
     
}

/*
elseif (menu() == 3) {
    verificarEstoque();
}
*/

elseif ($opcaoInformada == 4) {
listarEstoque($estoque);

} elseif ($opcaoInformada == 5) {
    continue;

} else {
    echo "Opção inválida, escolha outra opção:" . PHP_EOL;
    $opcaoInformada = menu();
}

$opcaoInformada = menu();

};

echo "Sistema de Gerenciamento de Estoque finalizado";