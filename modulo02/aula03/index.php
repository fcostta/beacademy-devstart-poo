<?php

ini_set('display_errors',1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unisex');
$c2 = new Categoria('Toalhas', 'Toalhas de banho, rosto e praia');
$c3 = new Categoria('Calçados', 'Calçados Unisex');

$p1 = new Produto('Tenis para corrida', 299.01, $c3);
// $p1 -> setNome ('Tenis para corrida');
// $p1 -> setValor(299.01);

$p2 = new Produto('Calça Jeans', 100.01, $c1);
//$p2 -> setCategoria($c3); // não vai mais funcionar, por que categoria é somente leitura, depois que informar categoria não pode mais mudar

// $p2-> setNome('Calça Jeans');
// $p2-> setValor(100.01);

$p3 = new Produto('Calça Branca',100, $c1);
// $p3-> setNome('Calça Branca');
// $p3-> setValor(99.1);



echo var_dump($p1) . PHP_EOL;
echo var_dump($p2) . PHP_EOL;
echo var_dump($p3) . PHP_EOL;
// echo var_dump($c1) . PHP_EOL;
// echo var_dump($c2) . PHP_EOL;
// echo var_dump($c3) . PHP_EOL;