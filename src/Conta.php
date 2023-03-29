<?php 

class Conta
{
    private $titular;
    private $saldo;
    private static $totalContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$totalContas++;
    }

    public function __destruct(){
        self::$totalContas--;
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

    public function getTitular(): Titular
    {
        return $this->titular;
    }

    public function setTitular(Titular $titular)
    {
        $this->titular = $titular;
    }

    public static function getTotalContas(){
        return self::$totalContas;
    }
}