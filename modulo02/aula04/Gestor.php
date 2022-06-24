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

    //O construtor será aplicado na classe usuario, para que as classes gestor e cliente herdem esse metodo 
    public function __construct(string  $email, string $senha, float $salario) //deixamos obrogatorio que seja informado e-mail, senha e no caso do Gestor o salario
    {
        parent::$email = $email; // como no caso deste atributo, ele estar na classe pai (usuario), é necessario incluir o comando "parent::"
        parent::$senha = $senha;
        $this->salario = $salario;
    }


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