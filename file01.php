<?php
$age = 17;


if($age < 18){
    throw new Exception("oh no you are not 18");
}else{
    echo "you are 18 and above";
}

?>
