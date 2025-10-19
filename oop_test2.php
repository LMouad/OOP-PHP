<?php
interface Animals{
    public function makeSound();
} 

class Cat implements Animals{
    public function makeSound()
    {
        echo "$this->name say mew new";
    }
}

$cat1 = new Cat("Milo");
$cat1->makeSound();
