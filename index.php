<?php

$xmlFile = "note.xml";
$xmlDOM = new DOMDocument();

$xmlDOM->load($xmlFile);


print $xmlDOM->saveXML();

?>