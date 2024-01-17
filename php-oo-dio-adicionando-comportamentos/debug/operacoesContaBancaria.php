<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular     //instanciando a class normalmente.
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

echo $conta->obterSaldo(); //0           //Onde sera apresentado as informações de acordo com os cálculos criados na class
echo PHP_EOL; //PHP_EOL -> Serve apenas para da "quebra de linha"

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();//50
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->obterSaldo();//20
echo PHP_EOL;
