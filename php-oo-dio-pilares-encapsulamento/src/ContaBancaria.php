<?php

//Uma forma de encapsular/privar as informação, para que o meio externo não tenham acesso de forma publica.
//Ja pensou se qualquer pessoa tivesse acesso aos dados da conta, como a senha por exemplo?


declare(strict_types=1);

namespace App;

class ContaBancaria
{
    private string $banco;  //Atribuimos os valores dentro do proprio objeto, utilizando do "Set" e Obtemos esse valor atravez do Get
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function exibirDadosDaConta(): array //Geralmente a implementação do metodo é pública, senão, ninguem consegue acessar. 
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }

    //VIA DE REGRA: TEM UM ATRIBUTO PRIVADO? CRIA UM "GET E SET" PRA ELES.

    public function getBanco(): string //Get nos retorna o valor do tributo privado
    {
        return $this->banco;
    }

    public function setBanco(string $banco): void // Cria-se a função setBanco, para que assim, seja possivel setar/atribuir o valor desse campo no objeto/instancia da class. Essa função recebe uma string chamada banco.
    {
        $this->banco = $banco; //Vai pegar o valor "banco" da função e tribuir para o tributo da class.
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function setNumeroAgencia(string $numeroAgencia): void
    {
        $this->numeroAgencia = $numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function setNumeroConta(string $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}
