<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $nome, string $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setCPF(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}