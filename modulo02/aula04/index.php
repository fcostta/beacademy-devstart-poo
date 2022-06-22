<?php
include 'Usuario.php'; // este include tem que ser primeiro por que as classes Cliente e Gestor herdam infomações de usuario
include 'Cliente.php';
include 'Gestor.php';


$c1=new Cliente();
$c1->setNome('Chiquim');

$g1= new Gestor();
$g1->setNome('Zezim');

var_dump($c1);
var_dump($g1);