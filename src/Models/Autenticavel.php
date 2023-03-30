<?php

namespace Alura\Banco\Models;

interface Autenticavel
{
        public function autenticar(string $senha): bool;
}