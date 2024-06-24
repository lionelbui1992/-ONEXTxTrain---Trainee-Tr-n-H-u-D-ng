<?php 
$myFile = fopen("file01.php", "r");


echo fread($myFile, filesize("file01.php"));

fclose($myFile);
    ?>