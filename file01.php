<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["name"] . " " . $_POST["email"] . " " . $_POST["phonenumber"] . " " . $_POST["possition"] . " " . $_FILES["fileUpload"]["tmp_name"] . "\n";
    $file = fopen(strtoupper($_POST["possition"]) .'_'. strtoupper($_POST["name"]). '.txt', "a");
    fwrite($file, $data);
    fclose($file);
    }
    echo "cam on da ung tuyen";
?>