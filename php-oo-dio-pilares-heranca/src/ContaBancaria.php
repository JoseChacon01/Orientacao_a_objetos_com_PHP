<?php

declare(strict_types=1);

namespace App;

abstract class ContaBancaria //Nesse exemplo, utilizamos uma class ABSTRATA, isso significa que ela possui metodos (funções/comportamentos) abstratos, nesse exemplo é a "obterSaldo"
{
    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

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
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
    }

    public abstract function obterSaldo(): string; //O que significa um método abstrato? Significa que ele não tem implementação de codigo na class Pai, porem a class de herdar (Filha), devera REALIZAR ESSA IMPLEMENTAÇÃO DE MODO PARTICULAR.

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
