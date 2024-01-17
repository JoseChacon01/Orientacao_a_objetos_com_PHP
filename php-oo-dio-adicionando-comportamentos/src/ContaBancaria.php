<?php

declare(strict_types=1);

namespace App;

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }                                                //Funcionalidades da conta.

    public function depositar(float $valor): string //Recebe uma variável chamada $valor, do tipo float e realiza as operações da função.
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
    }

    public function obterSaldo(): string  //Nesse caso, não recebe variável nenhuma, apenas apresenta o valor do saldo. 
    {
        return 'Seu saldo atual é: R$ ' . number_format($this->saldo, 2, ',', ''); // retorna uma string e o number_format, que serve para formatar o valor para decimal.
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
