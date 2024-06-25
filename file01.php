<?php

interface Animal {
    public function makeSound();
    public function run();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark bark!<br>";
    }

    public function run() {
        echo "Dog is running.<br>";
    }
}


$dog = new Dog();
$dog->makeSound(); 
$dog->run(); 
?>
