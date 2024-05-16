<?php
require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/../Traits/Weight.php';
class Food extends Article {
    public $vegetarian;
    use Weight;
    // costruttore
    public function __construct($_name, $_price, $_category, $_brand, $_img, $_vegetarian)
    {
        parent::__construct($_name, $_price, $_category, $_brand, $_img);
        $this->vegetarian = $_vegetarian;
    }
}
?>