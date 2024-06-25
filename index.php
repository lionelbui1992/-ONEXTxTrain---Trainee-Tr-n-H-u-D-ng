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
$id = 4;

// Chuẩn bị câu lệnh SQL để cập nhật bảng 'account'
$stmt = $conn->prepare("UPDATE account SET email = ? WHERE id = ?");
$stmt->bind_param("ss", $email, $id);

// Gán giá trị cho các tham số
$email = "da dsfdk co email";

// Thực thi câu lệnh
$stmt->execute();

// Kiểm tra và hiển thị kết quả
if ($stmt->affected_rows > 0) {
    echo "Updated account with ID: " . $id;
} else {
    echo "No account updated.";
}

// Đóng statement và kết nối
$stmt->close();
$conn->close();
?>
