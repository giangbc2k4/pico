
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="add_product.html" method="post" >
        <label for="username">Tên người dùng:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html><?php
require_once('connect.php');
// Lấy thông tin từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Lấy dữ liệu người dùng
    $row = $result->fetch_assoc();
    $db_username = $row['username'];
    $db_password = $row['password'];
    $sql = "SELECT * FROM user WHERE username='$db_username' AND password='$db_password' AND role= 0";
    $result2 = $conn->query($sql);
  
    if ($result2->num_rows > 0) {
        echo"dang nhap thanh cong";
    }
    else{
        echo "tai khoan cua bn k co quyen truy cap";
    }

} else {
    // Đăng nhập thất bại
    echo "Tên người dùng hoặc mật khẩu không đúng.";
}

// Đóng kết nối
$conn->close();
?>
