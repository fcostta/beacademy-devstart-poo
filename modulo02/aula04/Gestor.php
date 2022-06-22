<?php

declare(strict_types=1);

class Gestor extends Usuario // o extends faz com que estas informações sejam extendidas como herança para classe criada: Usuario. Gestor herda os atributos que esta na classe de usuario
{
    private float $salario;
    private string $horario;

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