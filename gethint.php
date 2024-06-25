<?php
// Get the q parameter from URL
$q = $_REQUEST["q"];

// Initialize an array to store book titles
$a = array();

// Load the XML file
$xmlDoc = new DOMDocument();
$xmlDoc->load("books.xml");

// Get all <book> elements
$books = $xmlDoc->getElementsByTagName("book");

// Iterate through each <book> element and store its title in $a
foreach ($books as $book) {
    $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
    $a[] = $title;
}

// Initialize the hint variable
$hint = "";

// Process the search query
if ($q !== "") {
    $q = strtolower($q); // Convert query to lowercase for case-insensitive search
    foreach ($a as $name) {
        if (strpos(strtolower($name), $q) !== false) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output suggestions or "no suggestion" if none found
echo $hint === "" ? "no suggestion" : $hint;
?>
