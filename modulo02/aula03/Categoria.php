<?php

declare(strict_types=1);


class Categoria{

    //Forma mais pratica de definir o construtor, sem precisar definir 2x o nome e a descrição
    //funciona somente da versão do PHP 8 para frente, não utilizado para versões mais antigas.
    public function __construct(
        private string $nome,
        private string $descricao
    ){

    }

    public function getNome(): String // GET em tradução, significa pegar por isso alteramor de "pegarNome()" para "getNome" 
    { // Métodos GET sempre retornarão alguma coisa, por isso sempre utilizaremos "return
        return $this-> nome;  //$this retorna "este aqui".. "esse", representa cada objeto criado com aquela classe
    } 

    public function setNome( string $nome): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarNome()"para "setNome()"
    { // Método SET, na maioria das vezes é recomendado que ele não retorne nada, por isso é utilizado "void" e "$this->", pois a unica responsabilidade é alterar o que esta la dentro
        $this->nome=$nome;
    }

    public function getDescricao(): String // GET em tradução, significa pegar por isso alteramor de "pegarNome()" para "getNome" 
    { // Métodos GET sempre retornarão alguma coisa, por isso sempre utilizaremos "return
        return $this-> descricao;  //$this retorna "este aqui".. "esse", representa cada objeto criado com aquela classe
    } 

    public function setDescricao(string $descricao): Void //SET em tradução significa alterar, configurar, por isso foi alterado de "alterarNome()"para "setNome()"
    { // Método SET, na maioria das vezes é recomendado que ele não retorne nada, por isso é utilizado "void" e "$this->", pois a unica responsabilidade é alterar o que esta la dentro
        $this->descricao=$descricao;
    }

}


//FORMA UTILIZADA NAS VERSÕES ANTERIORES AO PHP 8
// class Categoria
// {
// private string $nome;
// private string $descricao;

// public function __construct(string $nome, string $descricao)
// {
//     $this->nome=$nome;
//     $this->descricao=$descricao;
// }


// }