<?php

ini_set('display_errors', 1);

include 'classes/Usuario.php';
include 'classes/Cliente.php';
include 'classes/Gestor.php';
include 'classes/Categoria.php';
include 'classes/Produto.php';

include 'classes/Config/Usuario.php';

use Classes\Config\Usuario as UsuarioConfig; // para não ficar precisando escrever o caminho todo,
                                             // podemos utilizar os comandos "use" e "as" para dar um apelido a classe e não precisar ficar digitando o caminho completo do "namespace" toda vez que for chamar uma classe

//echo 'Tcharam, Funcionou!';

$us1 = new Classes\Usuario();

//$us2 = new Classes\Config\Usuario(); // comentado para ser reeescrito com o apelido
$us2 = new UsuarioConfig();

var_dump($us1);
var_dump($us2);