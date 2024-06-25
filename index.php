<?php

$xml = simplexml_load_file("books.xml");
if ($xml != null) {
    print_r($xml);
}

?>