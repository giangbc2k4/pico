<?php
require_once('connect.php');
// Lấy thông tin từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Đăng nhập thành công
    echo "Đăng nhập thành công!";
} else {
    // Đăng nhập thất bại
    echo "Tên người dùng hoặc mật khẩu không đúng.";
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="login.php" method="post">
        <label for="username">Tên người dùng:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
