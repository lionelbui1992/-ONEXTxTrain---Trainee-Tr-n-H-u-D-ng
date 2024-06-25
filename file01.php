<?php
// Định nghĩa một trait
trait CanRun {
    public function run() {
        echo "Đang chạy.<br>";
    }
}

// Sử dụng trait trong một lớp
class Animal {
    use CanRun;

    public function makeSound() {
        echo "Âm thanh của động vật.<br>";
    }
}

// Tạo một đối tượng từ lớp Animal
$animal = new Animal();
$animal->makeSound(); // Output: Âm thanh của động vật.
$animal->run(); // Output: Đang chạy.
?>
