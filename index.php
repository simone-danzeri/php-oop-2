<?php
require_once __DIR__ . '/Models/Article.php';
require_once __DIR__ . '/Models/Food.php';
$food1 = new Food('Crocca', 34.99, 'dog', 'Friskas', 'testImg', 'NO');
$food2 = new Food('Biscottino gattino', 12.99, 'cat', 'Cat Inc.', 'testImg', 'YES');

var_dump($food1);
var_dump($food2);
?>