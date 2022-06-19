<?php

declare(strict_types =1);


class Produto 
{ //classe
    //ATRIBUTOS: as caracteristicas da classe
    private string $nome; //atributos, no tipo public ele é acessado por qualquer código e utilizado de qualquer forma
    private float $valor; //atributos

    // //MÉTODOS: que é o que a classe pode fazer dentro da classe
    // //funções publicas ou privadas
    // public function teste(): string 
    // {

    //     return 'Você esta testando';

    // }

    public function pegarNome(): String
    {
        return $this-> nome;
    } 

    public function alterarNome( string $novoNome): Void
    {
        $this->nome=$novoNome;
    }

    public function alterarValor(float $novoValor): Void 
    {
        if ($novoValor <0) {
            die('Ops, valor não pode ser negativo'); // die apresenta mensagem de erro
        }
        $this->valor=$novoValor;
    }
}