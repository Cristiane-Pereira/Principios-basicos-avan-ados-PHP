<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
};

$contasCorrentes = [
    '567.890.453-21' => [
        'titular' => 'Cristiane Silva',
        'saldo' => 3000
    ],
    '987.657.890-98' => [
        'titular' => 'Vitor Gabriel',
        'saldo' => 1000
    ],
    '567.877.987-12' => [
        'titular' => 'Rodrigo Paiva',
        'saldo' => 15000
    ]
];

$contasCorrentes['567.877.987-12']['saldo'] -= 10000;

if (1200 > $contasCorrentes['987.657.890-98']['saldo']) {
    exibeMensagem("Voce não pode sacar esse valor, porque não tem saldo suficiente!!!");
} else {
    echo $contasCorrentes['987.657.890-98']['saldo'] -= 1200;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
