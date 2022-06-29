<?php

ini_set('display_errors',1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


$url= explode('?',$_SERVER['REQUEST_URI'])[0];
//echo $url;

$c= new IndexController();
//$c->indexAction();
$c->loginAction();

$p=new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

echo 'Ok, Funcionando';