<?php

include ('Funcoes.php');

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
        'saldo' => 20000
    ]
];

$contasCorrentes['567.877.987-12'] = sacar($contasCorrentes['567.877.987-12'], 500);

$contasCorrentes['567.890.453-21'] = depositar($contasCorrentes['567.890.453-21'], 1000);

unset($contasCorrentes['567.877.987-12']); // essa função remove a variavel no caso a conta dessa key.

titularComLetrasMaiusculas($contasCorrentes['987.657.890-98']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}
