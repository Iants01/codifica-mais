<?php

require_once __DIR__ . "/ContaCorrente.php";
require_once __DIR__ . "/ContaPoupanca.php";

class ContaBancaria
{
    protected string $numeroConta;
    protected string $nomeTitular;
    protected float $saldo;

    public function __construct(
        string $nomeTitular,
        string $tipoConta,
        float $saldo = 0
    ) {
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
        $this->numeroConta = $this->gerarNumeroConta($tipoConta);

        if($saldo<0) {
            $this->saldo = 0;
        }

    }

    public function depositar(float $valor): float
    {
        if($valor<=0){
            echo "Valor para depósito inválido" . PHP_EOL;
            return $this->saldo;
        }

        $this->saldo += $valor;
         echo "Depósito de R$$valor realizado com sucesso!" . PHP_EOL;
        return $this->saldo;
    }

    public function sacar(float $valor): float
    {
        if($this->saldo - $valor < 0) {
            echo "Saldo insuficiente." . PHP_EOL;
            return $this->saldo;
        } 
            
        $this->saldo -= $valor;
        echo "Saque de R$$valor realizado com sucesso" . PHP_EOL;;
        return $this->saldo;
        
    }

    public function exibirSaldo()
    {
        echo "O saldo da conta é: R$$this->saldo" . PHP_EOL;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getTitular()
    {
        return $this->nomeTitular;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    public function gerarNumeroConta(string $tipoConta) : string 
    {

        if($tipoConta == '1') {
            $geraNumeroContaAleatorio = rand(10000000, 99999999);
            $geraDigitoValidador = rand(0, 9);
            $numeroContaFormatado = "$geraNumeroContaAleatorio-$geraDigitoValidador";
            return $numeroContaFormatado;
        }

            $geraNumeroContaAleatorio = rand(100000, 999999);
            $geraDigitoValidador = rand(0, 9);
            $numeroContaFormatado = "$geraNumeroContaAleatorio-$geraDigitoValidador";
            return $numeroContaFormatado;
        
    }
}
