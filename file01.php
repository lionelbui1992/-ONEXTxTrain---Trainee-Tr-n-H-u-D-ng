<?php

class Animal {
    const NAME = 'animal';
    public static function makeSound() {
        echo "Âm thanh của động vật.<br>";
    }
}
echo Animal::NAME;

echo Animal::makeSound();

?>
