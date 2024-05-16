<?php
require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/../Traits/Weight.php';
class Toy extends Article {
    public $squeakynessDegree;
    use Weight;
    // costruttore
    public function __construct($_name, $_price, $_category, $_brand, $_img, $_squeakynessDegree)
    {
        parent::__construct($_name, $_price, $_category, $_brand, $_img);
        $this->squeakynessDegree = $_squeakynessDegree;
    }
}
?>