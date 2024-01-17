<?php

declare(strict_types=1); //Verificação de tipagem.

namespace App\Contratos;

interface OperacoesContaBancariaInterface  //ESSE CONTRATO (INTERFACE) REPRESENTA OS METODOS DA CONTA
{
    public function depositar(float $valor): string;
    public function sacar(float $valor): string;
    public function obterSaldo(): string;
}
