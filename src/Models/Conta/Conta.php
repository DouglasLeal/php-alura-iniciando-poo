<?php

namespace Alura\Banco\Models\Conta;

class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valor): void
    {
        $tarifa = $valor * $this->percentualTarifa();
        $valorSaque = $valor + $tarifa;
        if ($valorSaque > $this->saldo) {
            echo "Saldo insuficiente.";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "O valor precisa ser positivo.";
            return;
        }

        $this->saldo += $valor;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getTitularNome(): string
    {
        return $this->titular->getNome();
    }

    public function getTitularCpf(): string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
