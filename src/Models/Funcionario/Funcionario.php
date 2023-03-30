<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\CPF;
use Alura\Banco\Models\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function aumentarSalario(float $valorAumento): void
    {
        if($valorAumento <= 0){
            echo "O valor deve ser positivo.";
        }

        $this->salario += $valorAumento;
    }

    public function getSalario(): float{
        return $this->salario;
    }

    abstract public function calcularBonificacao(): float;
}