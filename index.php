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
$sql = "CREATE DATABASE huudung";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();
?>
