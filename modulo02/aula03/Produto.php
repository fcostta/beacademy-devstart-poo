<?php

declare(strict_types =1);


class Produto 
{ //classe
    //ATRIBUTOS: as caracteristicas da classe
    private string $nome; //atributos, no tipo public ele é acessado por qualquer código e utilizado de qualquer forma
    private float $valor; //atributos
    private string $descricao;

    //MÉTODOS CONSTRUTORES (nome e valor ou valor e nome = a ordem realmente importa)
    //método magico de construção do objeto // este metodo é invocado
    public function __construct( string $novoNome, float $novoValor ) // é preciso definir dentro do construtor as informações necessarias para a validação;
    {
        $this->nome=$novoNome;
        $this->valor = $novoValor;
    }



    // //MÉTODOS: que é o que a classe pode fazer dentro da classe
    // //funções publicas ou privadas
    // public function teste(): string 
    // {

    //     return 'Você esta testando';

    // }

    public function getNome(): String // GET em tradução, significa pegar por isso alteramor de "pegarNome()" para "getNome" 
    { // Métodos GET sempre retornarão alguma coisa, por isso sempre utilizaremos "return
        return $this-> nome;  //$this retorna "este aqui".. "esse", representa cada objeto criado com aquela classe
    } 

    public function setNome( string $novoNome): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarNome()"para "setNome()"
    { // Método SET, na maioria das vezes é recomendado que ele não retorne nada, por isso é utilizado "void" e "$this->", pois a unica responsabilidade é alterar o que esta la dentro
        $this->nome=$novoNome;
    }

    public function getValor(): float // GET em tradução, significa pegar por isso alteramor de "pegarValor()" para "getValor"
    {// Métodos GET sempre retornarão alguma coisa, por isso sempre utilizaremos "return
        return $this-> valor;
    } 


    public function setValor(float $novoValor): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarValor()"para "setValor()" 
    {// Método SET, na maioria das vezes é recomendado que ele não retorne nada, por isso é utilizado "void" e "$this->", pois a unica responsabilidade é alterar o que esta la dentro
        if ($novoValor < 0) {
            die('Ops, valor não pode ser negativo'); // die apresenta mensagem de erro
        } elseif ($novoValor = 0){
            die('Ops, valor não pode ser Zero'); // die apresenta mensagem de erro
        }
        $this->valor=$novoValor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function SetDescricao(string $novaDescricao ): string
    {
        $this->descricao=$novaDescricao;
    }
}