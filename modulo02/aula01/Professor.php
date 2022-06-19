<?php

declare(strict_types =1);

class Professor { //classe

    //ATRIBUTOS
    private string $nome; //atributos
    private string $especializacao; //atributos
    private string $cpf;
    private float $salario;
    private string $metodoEnsino;

    //METODOS
        public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome():void
    {
        $this->nome = $novoNome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf():void
    {
        $this->cpf = $novoCpf;
    }

    public function getEspecializacao(): string
    {
        return $this->especializacao;
    }

    public function setEspecializacao():void
    {
        $this->especializacao = $novoEspecializacao;
    }
    
    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario():void
    {
        $this->salario = $novoSalario;
    }
    //
    public function getMetodoEnsino(): string
    {
        return $this->metodoEnsino;
    }

    public function setMetodoEnsino():void
    {
        $this->metodoEnsino = $novoMetodoEnsino;
    }

}