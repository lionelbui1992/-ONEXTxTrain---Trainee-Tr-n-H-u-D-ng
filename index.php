<?php
//tao session
session_start();

$_SESSION["DUng"] = "hihih";

//xoa 1 session
unset($_SESSION["DUng"]);

//xoa all session
session_destroy();
?>
