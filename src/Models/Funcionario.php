<?php

namespace Alura\Banco\Models;
use CPF;
use Pessoa;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
}