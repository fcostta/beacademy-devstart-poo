<?php
//quando for criar arquivos que representam classes, a primeira letra deverá ser maiuscula

declare(strict_types =1);

class Aluno { //classe
    //atributos
    private string $nome; //atributos
    private string $cpf; //atributos

    //métodos
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

}

//Curso
//Professor
//Disciplina

