<?php

declare(strict_types=1);

final class Cliente extends Usuario // o extends faz com que estas informações sejam extendidas como herança para classe criada: Usuario, cliente herda os atributos que esta na classe de usuario
{ // a palavra "final" antes da classe estabelece que essa classe não poderá ser herdada para nenhuma outra, so pode ser instanciada
    private string $dataCadastro;

     public function getDataCadastro(): string
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro): void
    {
        $this->dataCadastro=$dataCadastro;
    }
}