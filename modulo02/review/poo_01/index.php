<?php

ini_set('display_errors', 1);

include 'ControllerProducts.php';
include 'ControllerCategory.php';

$category_01 = new Category('Derivados do trigo', 'Biscoitos e bolachas a base de farinha de trigo');

$product_01 = new Produto('Biscoito',1,'Alimentos');
//$product_01->getNome('Fabio');

var_dump($product_01, $category_01);
