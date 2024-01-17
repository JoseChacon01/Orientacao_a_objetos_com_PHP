<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

//As class OperacoesConta... possuem um contrato indireto (dados e operações), atravez da class pai.
//

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void //A função exibirDados não recebe uma class concreta e sim uma interface. Essa é a grande sacada do polimorfismo: Um mesmo tipo execultando operações diferentes (essa interface pode ser uma conta corrente ou poupança). Possibilita execultar os mesmos metodos com comportamentos diferentes, ESSA É A ESTANCIA DA CLASS FILHA. QUE ESTA EM CONTASTIPO.
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaCorrente(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

//Foram criadas 2 funções

exibirDados($conta); //Exibe os dados da conta
executarOperacoes($conta); // Realiza o fluxo de operações da conta
