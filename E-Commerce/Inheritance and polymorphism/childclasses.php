
<?php 

require("classestest.php");
 class elantra extends Car{
    public function __construct($brand, $color, $weight){ 
        $this->brand = $brand; 
        $this->color = $color; 
        $this->weight = $weight;
    }

    public function message(){
        echo "The car is {$this->brand}, the color is {$this->color},  and the weight is {$this->weight} kilos.";
    }
}

class truck extends Car{
    public $wheels;

    public function __construct($brand, $color, $weight, $wheels){ 
        $this->brand = $brand; 
        $this->color = $color; 
        $this->weight = $weight;
        $this->wheels = $wheels;
    }

    public function result(){
        echo "The car is {$this->brand}, the color is {$this->color}, the weight is {$this->weight} kilos and it has ($this->wheels) number of wheels.";
    }
}
?>



