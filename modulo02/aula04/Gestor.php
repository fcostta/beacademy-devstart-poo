<?php

declare(strict_types=1);

class Gestor
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;
    private float $salario;
    private string $horario;
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome=$nome;
    }

}