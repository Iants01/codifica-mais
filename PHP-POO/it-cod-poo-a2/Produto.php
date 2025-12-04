<?php

class Produto 
{
    private string $nomeProduto;
    private float $precoProduto;
    private int $quantidade;

    public function __construct (
        string $nomeProduto,
        float $precoProduto,
        int $quantidade,
     ) {
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;
        $this->quantidade = $quantidade;
     }

     public function alterarPreco ($novoPrecoProduto) : float {
        if($novoPrecoProduto < 0) {
            echo "Valor inválido." . PHP_EOL;
            return $this->precoProduto;
            } 
            $this->precoProduto = $novoPrecoProduto;
            return $this->precoProduto;
        
        $this->precoProduto = $novoPrecoProduto;
        return $this->precoProduto;
     }

     public function alterarQuantidade ($novaQuantidadeProduto) : int {
        if($novaQuantidadeProduto < 0) {
            echo "Quantidade inválida" . PHP_EOL;
            return $this->quantidade;
            } 
            $this->quantidade = $novaQuantidadeProduto;
            return $this->quantidade;
  
     }

     public function exibirDetalhes () {

        echo "$this->nomeProduto" . PHP_EOL;
        echo "$this->precoProduto" . PHP_EOL;
        echo "$this->quantidade" . PHP_EOL;
     }
        
     

}