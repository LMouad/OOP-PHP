<?php
class Car{
    public $brand;
    public function __construct($brand)
    {
        $this->brand = $brand;
    }
    public function isDriving(){
        echo "$this->brand is driving";
    }
}

$car = new Car("toyota");
$car->isDriving();