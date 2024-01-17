<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();

$conta->setBanco('Banco do Brasil'); //Atribuindo o valor.
$conta->setNomeTitular('Gustavo Fraga');
$conta->setNumeroAgencia('8244');
$conta->setNumeroConta('57354-10');
$conta->setSaldo(0);

var_dump($conta->exibirDadosDaConta()); //Só possivel imprimir os dados que estão dentro dafunção, pois ela é pública.
