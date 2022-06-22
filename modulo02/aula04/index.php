<?php
include 'Usuario.php'; // este include tem que ser primeiro por que as classes Cliente e Gestor herdam infomações de usuario (ATRIBUTOS E METODOS SÃO HERDADOS)
include 'Cliente.php';
include 'Gestor.php';


$c1=new Cliente();
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

$g1= new Gestor();
$g1->setNome('Zezim');
$g1->setSalario(6000);

var_dump($c1);
var_dump($g1);