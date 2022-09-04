<?php

declare(strict_types=1);

class Product
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
        private string $productType,
        private readonly Category $category,
            // readonly (permite apenas leitura apos criado o produto)
            // e só esta disponivel a partir da versão 8.1, em versões anteriores deixaria de criar o método "set"
        private float $price,
        private float $priceCost,
        private string $quantities
    ){
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName():void
    {
        $this->name=$name;
    }

    public function getProductType():string
    {
        return $this->productType;
    }

    public function setProductType():void
    {
        $this->productType=$productType;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function setPrice():void
    {
        $this->price=$price;
    }

    public function getPriceCost():float
    {
        return $this->priceCost;
    }

    public function setPriceCost():void
    {
        $this->priceCost = $priceCost;
    }

    public function getQuantities():float
    {
        return $this->quantities;
    }

    public function setQuantities():void
    {
        $this->quantities=$quantities;
    }

}