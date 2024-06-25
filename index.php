<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "myDataWeb";

// Tạo kết nối
$conn = new mysqli($server, $user, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gán giá trị $id
$limit = 4;
$offset = 0;
// Chuẩn bị câu lệnh SQL để cập nhật bảng 'account'
$stmt = $conn->prepare("select * from account limit $limit offset $offset");
$stmt->execute();
$resul = $stmt->get_result();
while($row = $resul->fetch_assoc()){
    echo $row['username'];
    echo $row['password'];
    echo $row['email'];
    echo $row['phone'];
    echo $row['address'];
    echo $row['gender'];
    echo $row['birthday'];
    echo $row['role'];
    echo $row['status'];
    echo $row['created_at'];
    echo $row['updated_at'];
    echo $row['deleted_at'];
    echo "<br>";
}
// Đóng statement và kết nối
$stmt->close();
$conn->close();
?>
