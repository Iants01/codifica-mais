<?php

class ContaBancaria 
{
     private string $numeroConta;
     private string $nomeTitular;
     private float $saldo;

     public function __construct (
        string $numeroConta,
        string $nomeTitular,
        float $saldo = 0
     ) {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
     }

     public function depositar(float $valor) : float
     {
        $this->saldo += $valor;
        return $this->saldo;
     }

     public function sacar(float $valor) : float
     {
        if($this->saldo - $valor >= 0) {
            $this->saldo -= $valor;
            return $this->saldo;
        } else {
            echo "saldo insuficiente" . PHP_EOL;
            return $this->saldo;
        }
     }

     public function exibirSaldo()
     {
        echo "O saldo da conta é: R$$this->saldo." . PHP_EOL;
     }

}