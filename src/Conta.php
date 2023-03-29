<?php 

class Conta
{
    public $cpf;
    public $titular;
    public $saldo = 0;

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

    public function transferir(float $valor, Conta $destino): void{
        if($valor > $this->saldo){
            echo "Saldo insuficiente.";
        }else{
            $this->sacar($valor);
            $destino->depositar($valor);
        }
    }
}