<?php
require_once './src/Conta.php';
require_once './src/Titular.php';

$conta1 = new Conta(new Titular("Douglas", "12345678911"));

echo $conta1->getTitular()->getNome() . PHP_EOL;

echo Conta::getTotalContas();