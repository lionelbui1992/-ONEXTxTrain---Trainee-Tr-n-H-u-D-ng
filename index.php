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
$sql = "
INSERT INTO `account` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES (NULL, 'huudung', '232', 'huudung@gmai.com', 'hihii', 'hahah');
";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Database insert successfully";
} else {
    echo "Error insert database: " . $conn->error;
}

// Close the connection
$conn->close();
?>
