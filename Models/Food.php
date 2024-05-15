<?php
require_once __DIR__ . '/Article.php';
class Food extends Article {
    public $vegetarian;
    // costruttore
    public function __construct($_name, $_price, $_category, $_brand, $_img, $_vegetarian)
    {
        parent::__construct($_name, $_price, $_category, $_brand, $_img);
        $this->vegetarian = $_vegetarian;
    }
}
?>