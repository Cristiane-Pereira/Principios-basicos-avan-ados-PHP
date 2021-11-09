<?php

$idadesList = [30, 10, 26, 21, 25, 11, 56 ];

unset($idadesList[5]);

$idadeCristiane = $idadesList[0];
$idadeVitor = $idadesList[1];
$idadeCarlos = $idadesList[2];

list($idadeCristiane, $idadeVitor, $idadeCarlos) = $idadesList;

$idadesList[] = 30;

for($contador = 0; $contador < 7; $contador ++) {
    echo $idadesList[$contador] .PHP_EOL;
}