<?php

//CONTRATO: Uma forma de estabelecer um padrão, no momento que uma class implementa um contrato significa que ela precisa seguir tudo que esta definido dentro do contrato.
//EX: Se o contrato fala que a clesse precisa ter um método "TAL" que retorna "TAL" tipo de dado e que receba como parametro "TAL" tipo de dado. Caso a class implemente esse contrato (interface), ela precisa seguir essas "clásulas" de contrato.

declare(strict_types=1);

namespace App\Contratos;

interface DadosContaBancariaInterface //ESSE CONTRATO (INTERFACE) REPRESENTA OS DADOS DA CONTA
{
    public function getBanco(): string;
    public function getNomeTitular(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
}
