<?php 

class Conta
{
    private $cpf;
    private $titular;
    private $saldo;
    private static $totalContas = 0;

    public function __construct(string $titular, string $cpf)
    {
        $this->titular = $titular;
        $this->cpf = $cpf;
        $this->saldo = 0;
        self::$totalContas++;
    }

    public function sacar(float $valor): void
    {
        if($valor > $this->saldo){
            echo "Saldo insuficiente.";
        }else{
            $this->saldo -= $valor;
        }
    }

    public function depositar(float $valor): void
    {
        if($valor <= 0){
            echo "Valor inválido.";
        }else{
            $this->saldo += $valor;
        }
    }
    public function transferir(float $valor, Conta $destino): void
    {
        if($valor > $this->saldo){
            echo "Saldo insuficiente.";
        }else{
            $this->sacar($valor);
            $destino->depositar($valor);
        }
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setCPF(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function setTitular(string $titular)
    {
        $this->titular = $titular;
    }

    public static function getTotalContas(){
        return self::$totalContas;
    }
}