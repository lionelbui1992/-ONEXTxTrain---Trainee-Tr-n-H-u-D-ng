<?php

$xml = simplexml_load_file("books.xml");

echo $xml->book[0]->title;

foreach($xml->book as $v){
    echo $v->title;
}

?>