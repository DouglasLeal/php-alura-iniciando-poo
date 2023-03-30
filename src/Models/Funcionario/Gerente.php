<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

    public function autenticar(string $senha): bool
    {
        return $senha === '123';
    }

    public function calcularBonificacao(): float
    {
        return $this->getSalario();
    }
}