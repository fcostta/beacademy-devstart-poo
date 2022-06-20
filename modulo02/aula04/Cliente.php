<?php

declare(strict_types=1);

class Cliente
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;
    private string $dataCadastro;


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome=$nome;
    }


}