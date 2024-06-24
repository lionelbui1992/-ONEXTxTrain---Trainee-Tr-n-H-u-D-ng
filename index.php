<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $face = $_FILES["face"]["tmp_name"];
        echo "<pre>";
        print_r($face);
        echo "</pre>";
    }
?>

<form action="index.php" method="post" enctype="multipart/form-data">
        upload your face <input type="file" name="face"> 
        <br> <button>Send</button>
</form>