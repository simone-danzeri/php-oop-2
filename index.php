<?php
require_once __DIR__ . '/Models/Article.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
$food1 = new Food('Crocca', 34.99, 'dog', 'Friskas', 'testImg', 'NO');
$food2 = new Food('Biscottino gattino', 12.99, 'cat', 'Cat Inc.', 'testImg', 'YES');
$toy1 = new Toy('Il pollo matto', 22.99, 'dog', 'Squeaky & Co.', 'testImg', '8/10');

var_dump($food1);
var_dump($food2);
var_dump($toy1);
?>