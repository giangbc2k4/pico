
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="admin.php" method="post" >
        <label for="username">Tên người dùng:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
<?php
require_once('../database/function.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (checklogin($username, $password)) {
session_start(); // Bắt đầu phiên làm việc


        $_SESSION['loggedin'] = true;
        header("Location: add_product.html");
        echo "Đăng nhập thành công!";
    } else {
        // Đăng nhập thất bại
        echo "Tên người dùng hoặc mật khẩu không đúng.";
    } 
    // Đóng kết nối
    $conn->close();
   
}

?>