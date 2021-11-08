<?php 

$idade = 10;
$nome = 'Cristiane';

if($idade >= 18) {
    echo "Olá $nome, Seja Bem-Vindo(a)." . PHP_EOL;
    echo "Você tem $idade anos." . PHP_EOL; 
    echo "Você pode tirar sua carta de motorista.";
}else {
    echo "Sinto Muito $nome ..." . PHP_EOL;
    echo 'Você só pode tirar sua habilitação se você estiver mais de 18 anos!!!' . PHP_EOL;
}

