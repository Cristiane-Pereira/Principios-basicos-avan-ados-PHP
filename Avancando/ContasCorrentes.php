<?php

$conta1 = [
    'titular' => 'Cristiane Silva',
    'saldo' => 3000
];

$conta2 = [
    'titular' => 'Vitor Gabriel',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Rodrigo Paiva',
    'saldo' => 15000
];

// echo $conta1 ['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i ++) {
    echo $contasCorrentes[$i] ['titular'] .PHP_EOL;
}