<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["name"] . " " . $_POST["email"] . " " . $_POST["phonenumber"] . " " . $_POST["possition"] . " " . $_FILES["fileUpload"]["tmp_name"] . "\n";
    $file = fopen("ViTriUngTuyen_HoTen.txt", "a");
    fwrite($file, $data);
    fclose($file);
    header("Location: file01.php");
    exit();
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    name: <input type="text" name="name"><br>
    email: <input type="text" name="email"><br>
    phonenumber: <input type="text" name="phonenumber"><br>
    position: <select name="possition">
        <option value="intern">intern</option>
        <option value="dev">dev</option>
        <option value="tester">tester</option>
    </select><br>
    your cv: <input type="file" name="fileUpload"><br>
    <button type="submit">Send</button>
</form>

</body>
</html>
