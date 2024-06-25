<?php
function calculate($a, $b, $callback) {
    return $callback($a, $b);
}

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Không thể chia cho 0";
    }
}
?>
