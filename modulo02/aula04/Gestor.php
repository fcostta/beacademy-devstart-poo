<?php

declare(strict_types=1);

class Gestor extends Usuario // o extends faz com que estas informações sejam extendidas como herança para classe criada: Usuario. Gestor herda os atributos que esta na classe de usuario
{
    private float $salario;
    private string $horario;

    //REESCRITA DE METODO CONSTRUTOR, ou seja, além do que foi definido em usuario e que é herdado pelo gestor, é definido como obrigatorio a informação de um atributo que so existe no Gestor
    // public function __construct(float $salario)
    // {
    //     $this->salario = $salario;
    // }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario=$salario;
    }
    public function getHorario(): string
    {
        return $this->horario;
    }

    public function setHorario(string $horario): void
    {
        $this->horario=$horario;
    }
}