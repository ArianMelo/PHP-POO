<?php 

require 'classes/index.php';
require 'models/index.php';


// use = apenas um uso, se não tiver sido declarado..
// use classes\Produto;

use models\Produto as productModel;
use classes\Produto as productClass;

//$produto = new Produto();

echo "<hr>";

$produto1 = new \classes\Produto();
$produto1->mostrarDetalhes();

echo "<hr>";

$produto2 = new \models\Produto();
$produto2->mostrarDetalhes();

echo "<hr>";

$produto3 = new productClass();
$produto3->mostrarDetalhes();