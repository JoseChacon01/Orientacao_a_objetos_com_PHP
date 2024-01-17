<?php require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria; //** Comunicação entre os arquivos

$conta = new ContaBancaria(); //Criamos o ojbeto/instanciamos a class ContaBancaria
var_dump($conta->exibirDadosDaConta());  //var_dump vai realizar a impressão, nesse caso, do método da class ContaBancaria - Poderia estar acessando atributos também.
