<?php

class Funcionario {
    private string $nome;
    private Cargo $cargo;
    private float $salario;

    public function __construct(string $nome, Cargo $cargo, float $salario) {
        $salarioMinimo = 1518;

        if($salario < $salarioMinimo) {
            echo "Funcionário não cadastrado, valor do salário inválido, valor minimo atual R$$salarioMinimo." . PHP_EOL;
            return;
        } 
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;

        echo "Novo funcionário, $this->nome cadastrado com sucesso." . PHP_EOL;;

    }

    public function alterarCargo(Cargo $novoCargo) {
        $this->cargo = $novoCargo;
        echo "O novo cargo do funcionário " . $this->nome . " é " . $this->cargo->name . PHP_EOL;
        return $this->cargo;
    }

    public function alterarSalario(float $novoSalario) {
        $salarioMinimo = 1518;
        if($novoSalario < $salarioMinimo) {
            echo "Novo valor do salário inválido, valor minimo atual R$$salarioMinimo." . PHP_EOL;
            return $this->salario;
        }
        $this->salario = $novoSalario;
        echo "O novo salário do funcionário " . $this->nome . " é " . $this->salario . PHP_EOL;
        return $this->salario;
    }

    public function exibirDetalhes() {
        echo "Funcionário: " . $this->nome . PHP_EOL;
        echo "Cargo: " . $this->cargo->name . PHP_EOL; 
        echo "Salário: " . $this->salario . PHP_EOL; 
    }
}