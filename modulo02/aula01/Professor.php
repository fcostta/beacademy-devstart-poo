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

    public function setNome(string $novoNome):void
    {
        $this->nome = $novoNome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $novoCpf):void
    {
        $this->cpf = $novoCpf;
    }

    public function getEspecializacao(): string
    {
        return $this->especializacao;
    }

    public function setEspecializacao(string $novoEspecializacao):void
    {
        $this->especializacao = $novoEspecializacao;
    }
    
    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $novoSalario):void
    {
        $this->salario = $novoSalario;
    }
    
    public function getMetodoEnsino(): string
    {
        return $this->metodoEnsino;
    }

    public function setMetodoEnsino(string $novoMetodoEnsino):void
    {
        $this->metodoEnsino = $novoMetodoEnsino;
    }

}