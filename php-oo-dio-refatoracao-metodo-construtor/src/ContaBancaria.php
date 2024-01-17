<?php

//"SUBESTITUI" A UTILIZAÇÃO DO SET - OUTRA APLICABILIDADE:
//O METODO CONSTRUTUR É ISTANCIADO PRIMEIRO DETRO DA CLASS, ANTES QUE QUALQUER OUTRA COISA, CASO VOCÊ PRECISE QUE ALGO SEJA INICIADO ANTES DE TUDO, PODE COLOCAR DENTRO DELE.

declare(strict_types=1);

namespace App;

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct( //Metodo construtor -> Possibilita setar o valor de todos os atributos de uma unica só vez. Sem necessitar da utilização do set.
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,  //Na "assinatura do metodo" passamos todos os atributos que queremos trabalhar.
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;   //Na implementação fazemos exatamente igual ao "metodo Set", EX: atributo Banco recebe o valor Banco da assinatura do metodo"
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
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

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}
