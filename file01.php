<?php

class Animal {
    const NAME = 'animal';

    public static $age = 324324;
    public static function makeSound() {
        echo "Âm thanh của động vật.<br>";
    }
}
echo Animal::NAME;

echo Animal::makeSound();

echo Animal::$age;

?>
