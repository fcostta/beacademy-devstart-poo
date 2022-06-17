<?php

include 'Aluno.php';
include 'Exercicio.php';

$a1 = new Aluno(); // instanciamento

$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123.23';

$cursoPHP=new Curso();
$cursoPHP->nome= 'introdução ao PHP';
$cursoPHP->$cargaHoraria = 88;
$cursoPHP->descricao ='Aprender o basico e intermediario do PHP';


$aluno = [
    'nome'=>'Alessandro',
    'cpf'=>'123.123.123-23'

];

$aluno2 = [
    'Nome'=>'Bruno',
    'çpf'=>'234.234.234.34',
];

$aluno3=[
    'NOME'=>'Raquel',
    'CPF'=>'345.345.345-45',
];
