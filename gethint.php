<?php
// Get the q parameter from URL
$q = $_REQUEST["q"];
$a = array();

// Connect to the database
$server = "localhost";
$user = "root";
$password = "";
$dataName = "myDataWeb";

// Create a connection
$conn = new mysqli($server, $user, $password, $dataName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM account WHERE username LIKE ?");
$searchTerm = "%" . $q . "%"; 

$stmt->bind_param("s", $searchTerm);

$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $a[] = $row["username"];
}
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($name, $q)) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;


$stmt->close();
$conn->close();
?>
