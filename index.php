<!DOCTYPE html>
<html>
<body>

<?php

?>

<form action="file01.php" method="post" enctype="multipart/form-data">
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
