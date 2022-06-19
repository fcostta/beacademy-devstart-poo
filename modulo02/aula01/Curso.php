<?php

declare(strict_types =1);

class Curso { //classe

    //Atributos
    private int $cargaHoraria; //atributos
    private string $gradeCurricular; //atributos
    private string $descricao;
    private string $nome;

    //Métodos
    public function getCargaHoraria():int 
    {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $novaCargaHoraria):void 
    {
        $this->cargaHoraria = $novaCargaHoraria;
    }

    public function getGradeCurricular(): string
    {
        return $this->gradeCurricular;
    }

    public function setGradeCurricular(string $novaGradeCurricular):void 
    {
        $this->gradeCurricular = $novaGradeCurricular;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao):void 
    {
        $this->descricao = $novaDescricao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome):void
    {
        $this->nome = $novoNome;
    }


}