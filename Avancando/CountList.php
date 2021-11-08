<?php

$idadesList = [30, 34, 29, 21, 25, 11, 56, 05];

$idadesList[] = 10; // adiciona um novo item pra o array;

for ($contador = 0; $contador < count($idadesList); $contador++) {
    echo $idadesList[$contador] . PHP_EOL;
}
