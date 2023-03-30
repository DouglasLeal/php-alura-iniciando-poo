<?php

namespace Alura\Banco\Models\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valor, Conta $destino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente.";
            return;
        }

        $this->sacar($valor);
        $destino->depositar($valor);
    }
}