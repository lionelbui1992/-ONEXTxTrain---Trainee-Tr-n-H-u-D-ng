<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $messageError = "";
    $messageEmail = "";
    $messageUrl = "";
    if( empty($_POST["yourName"])){
        $messageError = "name is required";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $messageEmail = "email is nnot valid";
    }
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["myUrl"])){
        $messageUrl = "url is not valid";
    }
}else{
    echo $_POST['yourName'];
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo $_POST['country'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['myUrl'];
    echo "<br>";
}
?>

<form action="index.php" method="post">
    input url <input type="text" name="myUrl">
    <span style="color: red;"><?php echo $messageUrl;  ?></span>
    <br>
    input your name <input type="text" name="yourName">
    <span style="color: red;"><?php echo $messageError;  ?></span>
    <br>

    input your email <input type="text" name="email">
    <span style="color: red;"><?php echo $messageEmail;  ?></span>
    <br>
    choose your gender 
    <input type="radio" value="male" name="gender"> male 
    <input type="radio" value="famele" name="gender"> female <br>
    choose your country 
    <select name="country">
        <option value="VN">Viet Nam</option>
        <option value="JP">Nhat Ban</option>
        <option value="KR">Han Quoc</option>
    </select> <br>
    <button>Send</button>
</form>

<?php 

?>