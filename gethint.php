<?php
// Get the q parameter from URL
$q = $_REQUEST["q"];

$a = array();

// Load the XML file
$xml = simplexml_load_file("books.xml");

foreach ($xml->book as $value) {
    $a[] = (string) $value->title; 
}

$hint = "";

if ($q !== "") {
    $q = strtolower($q); 
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
