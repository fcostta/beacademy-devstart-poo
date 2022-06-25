<?php

ini_set('display_errors',1);
//declare(strict_types=1);

include 'Usuario.php'; // este include tem que ser primeiro por que as classes Cliente e Gestor herdam infomações de usuario (ATRIBUTOS E METODOS SÃO HERDADOS)
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';



$c1=new Cliente('chiquim@email.com', '123456'); //Construtor do Usuario

$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');

 $g1= new Gestor('zezim@email.com', '987654', 6000); // Construtor do Gestor
//$g1= new Gestor(600);
$g1->setNome('Zezim');
// $g1->setSalario(6000);


$gg1= new GestorGeral('maria@email.com', '678345', 9000);

//$us = new Usuario('hacker@email.com', '1230987');

$clienteVip = new ClienteVip('clientevip@email.com', '123123');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
//var_dump($us);
var_dump($clienteVip);