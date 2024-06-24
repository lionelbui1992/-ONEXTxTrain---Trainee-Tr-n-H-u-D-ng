<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $messageError = "";
if( empty($_POST["yourName"])){
    $messageError = "name is required";
}else{
    echo $_POST['yourName'];
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo $_POST['country'];
}
}
?>

<form action="index.php" method="post">
    input your name <input type="text" name="yourName">
    <span style="color: red;"><?php echo $messageError;  ?></span>
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