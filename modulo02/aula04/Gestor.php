<?php

declare(strict_types=1);

class Gestor extends Usuario // o extends faz com que estas informações sejam extendidas como herança para classe criada: Usuario. Gestor herda os atributos que esta na classe de usuario
{
    private float $salario;
    private string $horario;
}