<?php
require_once __DIR__ . '/Article.php';
class Product extends Article {
    public $weight;
    public $countryOfOrigin;
    // costruttore
    public function __construct($_name, $_category, $_price, $_brand, $_img, $_weight, $_countryOfOrigin) {
        parent::__construct($_name, $_price, $_category, $_brand, $_img);
        $this->weight = $_weight;
        $this->countryOfOrigin = $_countryOfOrigin;
    }
}
?>