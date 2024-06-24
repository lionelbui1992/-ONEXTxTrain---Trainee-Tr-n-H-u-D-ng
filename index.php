<?php

    //tuong tu voi get
    // if($_SERVER['REQUEST_METHOD'] == "GET"){
    //     echo $_GET['yourName'];
    // }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo $_POST['yourName'];
    }  
    
    
    //request lay ca 2
    echo $_REQUEST['yourName'];

    $a= 54;

    function testGlobal(){
        echo $GLOBALS['a']; //phai dung global moi lay duoc a
    }

?>

<form action="index.php" method="post">
    input your name <input type="text" name="yourName" id=""> <br>
    <button>Send</button>
</form>