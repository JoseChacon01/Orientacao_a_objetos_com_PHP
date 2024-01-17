<?php

declare(strict_types=1);

namespace App;

use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface //Implementa a class de interfaces (contato) para que essa class tenha os metodos presente nelas
{                                                                                                   //OBS: Diferente da herança que a class só herda de uma class pai, nesse coso é possivel implementar multiplas interfaces em uma unica class.
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
        return 'Depósito de R$ ' . $valor . ' realizado';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado';
    }

    public abstract function obterSaldo(): string; //temos uma função abstrata, o que obriga as class herdeiras a implementarem esse metodo.

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
