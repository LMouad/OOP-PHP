<?php
abstract class Animal{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function makeSound();
    public function introduce(){
    echo "I am $this->name <br>";
    }
}

class Cat extends Animal{
    public function makeSound(){
        echo "$this->name says Meow!<br>";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "$this->name says Woof!<br>";
    }
}

$cat1 = new Cat("Milo");
$cat1->makeSound();
$cat1->introduce();
$dog1 = new Dog("Black");
$dog1->makeSound();
$dog1->introduce();
