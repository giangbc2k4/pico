<?php

$servername = "localhost"; // Tên máy chủ
$username = "admin"; // Tên người dùng
$password = "root"; // Mật khẩu
$database = "shoppico"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    exit();
}
else
{
    echo"lồn";
}


?>
