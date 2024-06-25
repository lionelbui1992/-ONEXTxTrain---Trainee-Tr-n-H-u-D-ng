<!DOCTYPE html>
<html>
<body>

<?php

$int = 122;


$min = 1;

$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}

$ipv6 = "2001:0000:130F:0000:0000:09C0:876A:130B";

if(filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "this is ipv6";
}else{
    echo "this is not ipv6";
}

?>

</body>
</html>
