<?php

// classes 

class Car {

    public $brand;
    public $color;
    public $weight; 


    public function __construct($brand, $color, $weight){
        $this->brand = $brand;
        $this->color = $color;
        $this->weight = $weight;
    }
}

?>