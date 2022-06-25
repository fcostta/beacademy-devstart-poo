<?php

//declare(strict_types=1);

ini_set('display_errors',1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf='12312312312';
$docX='12345678910111';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);

echo 'Ok, funcionou!';