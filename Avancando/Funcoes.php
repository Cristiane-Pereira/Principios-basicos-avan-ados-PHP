<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
};

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
};

if (1200 > $contasCorrentes['987.657.890-98']['saldo']) {
    exibeMensagem("Voce não pode sacar esse valor, porque não tem saldo suficiente!!!");
} else {
    $contasCorrentes['987.657.890-98']['saldo'] -= 1200;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']); //essa função transforma uma string em maiuscula.
}
