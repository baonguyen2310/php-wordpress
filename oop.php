<?php

class Animal {
    protected $age;
    function __construct($age){
        $this->age = $age;
    }
    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }
}

$myAnimal = new Animal(6);
echo $myAnimal->getAge();
$myAnimal->setAge(4);
echo $myAnimal->getAge();

class Dog extends Animal {
    public $name;
    function getAge(){
        echo $this->name . ' ' . $this->age;
    }
}

$myDog = new Dog(7);
$myDog->name = 'Wifu';
$myDog->setAge(5);
$myDog->getAge();

?>