<?php
class Car{
    public $brand;
    private $color;
    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }
    public function drive(){
        echo "The $this->brand with $this->color color is driving! <br>";
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        return $this->color=$color;
    }

}
class Parts extends Car{
    public function engine(){
        echo " Engine 2.2L ";
    }
}

$mycar = new Car("Toyota", "black");
$mycar->drive();
$mycar->setColor("gold");
echo "Updated color: " . $mycar->getColor() . "<br>";
$mycar->drive();
$mycar2 = new Car("Honda", "Silver");
$mycar2->drive();

$enCar = new Parts("Subaru", "Chrome");
$enCar->drive();
$enCar->engine();
