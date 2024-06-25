<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "myDataWeb";

$conn = new mysqli($server, $user, $password, $database);

if($conn->connect()){
    echo "Connected";
}else{
    echo "Not Connected";
}
?>
