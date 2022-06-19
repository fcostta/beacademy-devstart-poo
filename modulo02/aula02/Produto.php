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

    public function getNome(): String // GET em tradução, significa pegar por isso alteramor de "pegarNome()" para "getNome" 
    {
        return $this-> nome;  //$this retorna "este aqui".. "esse", representa cada objeto criado com aquela classe
    } 

    public function setNome( string $novoNome): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarNome()"para "setNome()"
    {
        $this->nome=$novoNome;
    }

    public function getValor(): float // GET em tradução, significa pegar por isso alteramor de "pegarValor()" para "getValor"
    {
        return $this-> valor;
    } 


    public function setValor(float $novoValor): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarValor()"para "setValor()" 
    {
        if ($novoValor <0) {
            die('Ops, valor não pode ser negativo'); // die apresenta mensagem de erro
        }
        $this->valor=$novoValor;
    }
}