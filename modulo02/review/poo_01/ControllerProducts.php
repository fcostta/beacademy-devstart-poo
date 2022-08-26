<?php

declare(strict_types = 1)
;

class Produto
{

    //atributos (caracteristicas, são as coisas que uma classe tem)
    private string $nome;
    private float $valor;

    // métodos (o que a classe pode fazer)
    public function getNome(string $testenome): string
    {
        return $this->$testenome;

    }


}