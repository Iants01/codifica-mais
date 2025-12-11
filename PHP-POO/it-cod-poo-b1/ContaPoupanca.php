<?php

require_once __DIR__ . "/ContaBancaria.php";

class ContaPoupanca extends ContaBancaria
{
    protected float $porcentagemRendimento = 0.1;

    public function __construct($nomeTitular, $numeroConta, $saldo)
    {
        parent::__construct($nomeTitular, $numeroConta, $saldo);
    }

    public function getPorcentagemRendimento()
    {
        return $this->porcentagemRendimento;
    }

    public function setPorcentagemRendimento($novoValorPorcentagemRendimento)
    {
        if($novoValorPorcentagemRendimento < 0){
            echo "Valor inválido, porcentagem não alterada." . PHP_EOL;
            return;
        }

        $valorRendimentoParaDecimal = ($novoValorPorcentagemRendimento / 100);
        $this->porcentagemRendimento = $valorRendimentoParaDecimal;
        echo "Valor da porcentagem de rendimento alterado para $novoValorPorcentagemRendimento%." . PHP_EOL;
    }

    public function aplicarRendimento()
    {
        $this->saldo = $this->saldo * (1 + $this->porcentagemRendimento);

        $novoSaldoAposRendimento = $this->saldo;
        echo "O novo saldo da conta após aplicação do rendimento é R$$novoSaldoAposRendimento" . PHP_EOL;

        return $this->saldo;
    }

}
