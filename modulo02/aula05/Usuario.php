<?php

declare(strict_types=1);

abstract class Usuario // o "abstract" é algo que não existe, somente como modelo (ideia), issa fara que não seja possivel a criação de usuarios de forma livre dentro da classe usuario
{// é uma classe que so serve de modelo, e dessa forma garantimos que não haverá nenhum outro usuario que não seja Gestor ou cliente
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;
    

    //O construtor será aplicado na classe usuario, para que as classes gestor e cliente herdem esse metodo 
    public function __construct( string  $email, string $senha) //deixamos obrogatorio que seja informado e-mail e senha
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome=$nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email=$email;
    }
    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha=$senha;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf=$cpf;
    }
}
