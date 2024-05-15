<?php
class Article {
    public $name;
    public $category;
    public $price;
    public $brand;
    public $img;
    // costruttore
    public function __construct($_name, $_price, $_category, $_brand, $_img) {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->brand = $_brand;
        $this->img = $_img;
    }
}
?>