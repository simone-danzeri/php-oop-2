<?php
trait Weight {
    protected $weight;

    public function getWeight() {
        return $this->weight;
    }
    public function setWeight($newWeight) {
        return $this->weight = $newWeight;
    }
}
?>