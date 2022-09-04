<?php

ini_set('display_errors', 1);

include 'ControllerProducts.php';
include 'ControllerCategory.php';

$category_01 = new Category('Derivados do trigo', 'Biscoitos e bolachas a base de farinha de trigo');

$product_01 = new Product('Biscoito', 'Alimentos', $category_01, 10.00, 6.50, 1);
//$product_01->getNome('Fabio');

// $calculos_01 = new Functions();
// $calculos_01->multiplyQuantitiesSales();

var_dump($product_01, $category_01);
