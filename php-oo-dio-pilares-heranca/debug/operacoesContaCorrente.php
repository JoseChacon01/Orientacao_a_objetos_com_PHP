<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;

$conta = new ContaCorrente(         //NESSE ARQUIVO SÃO EXTANCIADAS AS CLASS PARA OPERAÇÃO DAS CONTAS.
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

echo $conta->obterSaldo(); //Metodo da class Filha
echo PHP_EOL;

echo $conta->depositar(50); //Metodo da class Pai
echo PHP_EOL;

echo $conta->obterSaldo(); //Metodo da class Filha
echo PHP_EOL;

echo $conta->sacar(30); //Metodo da class Pai
echo PHP_EOL;

echo $conta->obterSaldo(); //Metodo da class Filha
echo PHP_EOL;
