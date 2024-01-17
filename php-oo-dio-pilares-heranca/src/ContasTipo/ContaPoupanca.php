<?php

//ESSE CASO, NÃO SE TRATA DA INSTANCIA DA CLASS CONTABANCARIA (OBJETO) E SIM DE CLASS FILHAS, QUE SERÃO EXTANCIADAS NO ARQUIVO "debug"


declare(strict_types=1);

namespace App\ContasTipo;

use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria //O "extends" expressa que essa class eStende a classe ContaBancaria, ou seja, ela é uma class filha da class ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança"; //Nos 2 exemplo (corrente e polpança) não temos os tributos declarados e nem os mÉtodos de saque e nem deposito. Pois, são herdados da class Pai e la ja estão declarados.

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo); //parent:: -> estar acessando o contrutor e acessando as variaveis/tributos construidas na class Pai/ Uma forma de resumir o código sem precisar redirgir do formato que esta la EX: $this->banco = $banco;.
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2, ',', ''); //SALDO + 3% DO SALDO ATUAL= TOTAL REAL
    }                                                                                 //Self - é uma palavra reservada que é utilizada parecida com this, serve para ecessar propriedades da class
}
