<?php
require_once './src/Conta.php';

$conta1 = new Conta("Douglas", "12345678911");

echo $conta1->getTitular();