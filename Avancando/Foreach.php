<?php

// $conta1 = [
//     'titular' => 'Cristiane Silva',
//     'saldo' => 3000
// ];

// $conta2 = [
//     'titular' => 'Vitor Gabriel',
//     'saldo' => 1000
// ];

// $conta3 = [
//     'titular' => 'Rodrigo Paiva',
//     'saldo' => 15000
// ];

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

$contasCorrentes['886.433.245-61'] = [
    'titular' => 'Geni Santos',
    'saldo' => 1300
];

$contasCorrentes['986.436.245-67'] = [
    'titular' => 'Pedro Silva',
    'saldo' => 1300
];

foreach ($contasCorrentes as $cpf => $conta) {
    //    echo $conta['titular'] . PHP_EOL;
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
