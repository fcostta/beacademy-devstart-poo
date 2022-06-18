<?php

ini_set('display_errors', 1); // comando para apresentação de erros no navegador

//declare(strict_types =1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
//include 'Exercicio.php';

$p1 = new Professor();
$p1->nome='Alessandro';
$p1->cpf='08012309801';
$p1->salario= 1000;

echo var_dump($p1);