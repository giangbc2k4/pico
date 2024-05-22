<?php
session_start(); // Bắt đầu phiên làm việc
require_once('./database/config.php');

// Kiểm tra xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Đăng nhập thành công";
            // Xử lý đăng nhập
        } else {
            echo "Tên người dùng hoặc mật khẩu không chính xác";
        }
    }

    elseif (isset($_POST['dangky'])) {
      
            echo "dangkythanhcong";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <script src="main.js" type="text/javascript"></script>
    <script src="slider.js" type="text/javascript"></script>
    <title>Document</title>
</head>
 
<?php 
include_once("user/header.php");
include_once("user/main.php");
include_once("user/footer.php")
?>


