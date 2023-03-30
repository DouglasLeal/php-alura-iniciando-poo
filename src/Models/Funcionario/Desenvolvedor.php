<?php

namespace Alura\Banco\Models\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Desenvolvedor extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return 500.0;
    }

    public function subirDeNivel(){
        $this->aumentarSalario($this->getSalario() * 0.75);
    }
}