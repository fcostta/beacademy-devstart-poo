<?php

declare(strict_types=1);

class Produto
{
    
    //atributos (caracteristicas)
    private string $nome;
    private float $valor;

    // métodos (o que a classe pode fazer)
    public function getNome(): string
    {
        return $this->$nome;

    }


}