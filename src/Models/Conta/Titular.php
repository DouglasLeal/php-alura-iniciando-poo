<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Pessoa;
use Alura\Banco\Models\CPF;
use Alura\Banco\Models\Endereco;

class Titular extends Pessoa
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
}
