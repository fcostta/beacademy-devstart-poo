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
}
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