<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Autenticavel;
use Alura\Banco\Models\CPF;
use Alura\Banco\Models\Endereco;
use Alura\Banco\Models\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '123';
    }
}
