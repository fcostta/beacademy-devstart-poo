<?php

declare(strict_types=1)
;

class Produto
{

    // //atributos (caracteristicas, são as coisas que uma classe tem)
    // private string $name;
    // private float $value;
    // private string $testename;

    // // métodos (o que a classe pode fazer)
    // public function getNome(string $name): string
    // {
    //     return $this->name = $name;

    // }

    public function __construct(    
        private string $name,
        private float $value,
        private string $testename
    ){}

}