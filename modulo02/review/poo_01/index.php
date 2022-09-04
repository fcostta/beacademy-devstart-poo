<?php

ini_set('display_errors', 1);

include 'ControllerProducts.php';
include 'ControllerCategory.php';

$product_01 = new Produto('Biscoito');
$product_01->getNome('Fabio');

var_dump($product_01);
