<?php

require_once __DIR__ . "/ContaBancaria.php";

class ContaCorrente extends ContaBancaria
{
    private const taxaSaque = 3.50;
    private const taxaTransferencia = 1.50;
    
    public function __construct($nomeTitular, $numeroConta, $saldo)
    {
        parent::__construct($nomeTitular, $numeroConta, $saldo);
    }

    public function sacar(float $valor): float
    {
        if($valor+self::taxaSaque >  $this->saldo) {
            echo "Saldo insufuciente!" . PHP_EOL;
            return $this->saldo;
        }
        $this->saldo -= ($valor +self::taxaSaque);
        echo "Saque de R$$valor realizado com sucesso!" . PHP_EOL;
        return $this->saldo;
    }

    public function transferirDinheiro($contaDestino, $valor)
    {
        if($valor+self::taxaTransferencia >  $this->saldo) {
            echo "Saldo insuficiente!";
            return;
        }

        $this->saldo -= ($valor +self::taxaTransferencia);
        $contaDestino->saldo += $valor;
        echo "Transferencia de R$$valor realizado com sucesso!" . PHP_EOL;
    }
}
