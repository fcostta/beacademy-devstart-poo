<?php

ini_set('display_erros', 1);

include 'ControllerProducts.php';

$testenome = 'Fabio';

$produto_1 = new Produto();

echo $produto_1->getNome($testenome);

