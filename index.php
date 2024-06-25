<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "myDataWeb";

// Create connection
$conn = new mysqli($server, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a new database named 'huudung'

$stmt = $conn->prepare("INSERT INTO `account` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES (NULL, ?, ?, ?, ?, ?);");

$stmt->bind_param("sssss", $username, $password, $email, $firstname, $lastname);

$username = "huudung";
$password = "123@gmail.com";
$email = "huudung";
$firstname = "huudung";
$lastname = "huudung";

$stmt->execute();

$stmt->close();

// Close the connection
$conn->close();
?>

