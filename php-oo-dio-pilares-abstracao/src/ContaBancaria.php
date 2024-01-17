<?php

declare(strict_types=1); //Verificação de tipos

namespace App;  // **

class ContaBancaria 
{                                        //Atribuições da class
    public string $banco = "Banco Inter";
    public string $nomeTitular = "Gustavo Fraga";
    public string $numeroAgencia = "8244";
    public string $numeroConta = "57354-10";
    public float $saldo = 0;

    public function exibirDadosDaConta(): array    //Metodo/Comportamento - exibir os dados. 
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }
}
