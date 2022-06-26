<?php

ini_set('display_errors', 1);

// Para utilizar o composer, temos que ter definido os namespace
// necessario ter criado o "composer.json"
// realizar o include vendor/autoload.php


include 'vendor/autoload.php';


//use Classes\Config\Usuario as UsuarioConfig; // para não ficar precisando escrever o caminho todo,
                                             // podemos utilizar os comandos "use" e "as" para dar um apelido a classe e não precisar ficar digitando o caminho completo do "namespace" toda vez que for chamar uma classe


use Classes\Config\Usuario;
use Classes\Categoria;
//echo 'Tcharam, Funcionou!';

//$us1 = new Classes\Usuario();

//$us2 = new Classes\Config\Usuario(); // comentado para ser reeescrito com o apelido
$us2 = new Usuario();
$c1 = new Categoria();


//var_dump($us1);
// var_dump($us2);
// var_dump($c1);

//Include do Dompdf (ir na documentação e ver qual o namespace temos que usar)
// documentação em: https://github.com/dompdf/dompdf
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html='';

for ($n=0; $n<10; $n++){
    $html .= 'Ó o pente! <br>';

}
$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();