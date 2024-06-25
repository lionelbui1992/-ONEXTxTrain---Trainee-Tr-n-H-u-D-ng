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

$stmt = $conn->prepare("DELETE FROM account WHERE id = ?");
$stmt->bind_param("s", $id);
$id=1;
$stmt->execute();
echo "delete account: " . $id;

// Close the connection
$conn->close();
?>

