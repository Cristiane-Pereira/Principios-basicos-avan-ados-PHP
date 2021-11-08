<?php

$peso = 60;
$altura = 1.56;
$imc = $peso / $altura ** 2;

echo "o resultado do seu IMC é: ($imc)." . PHP_EOL;

if ($imc < 18.5) {
    echo "Seu IMC esta abaixo";
} elseif ($imc < 25) {
    echo "Seu IMC esta dentro";
} else {
    echo "Seu IMC esta alto";
}

echo " do recomendado.";
