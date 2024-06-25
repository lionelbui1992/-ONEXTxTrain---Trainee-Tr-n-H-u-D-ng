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

$stmt = $conn->prepare("SELECT * FROM account ORDER BY ID DESC");



$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_assoc()){
    echo $row['username'];
    echo $row['password'];
    echo $row['email'];
    echo $row['phone'];
    echo $row['address'];
    echo $row['gender'];
    echo $row['birthday'];
    echo $row['role'];
    echo $row['status'];
    echo $row['created_at'];
    echo $row['updated_at'];
    echo $row['deleted_at'];
    echo "<br>";
}

// Close the connection
$conn->close();
?>

