<?php
require_once('connect.php');

$logic = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && $logic == false) {
    // Lấy thông tin từ form đăng ký
    $username = $_POST['tendangnhap'];
    $password = $_POST['matkhau'];
    $confirm_password = $_POST['xacnhan_matkhau'];
    $sdt = $_POST['sdt'];

    // Kiểm tra mật khẩu và xác nhận mật khẩu
    if ($password != $confirm_password) {
        echo "Mật khẩu và xác nhận mật khẩu không khớp.";
        exit();
    }

    // Mã hóa mật khẩu (tùy chọn)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Chuẩn bị và thực thi truy vấn SQL
    $stmt = $conn->prepare("INSERT INTO user (`username`, `password`, `sdt`, `role`) VALUES (?, ?, ?, ?)");
    $role = 1; // Vai trò mặc định là người dùng (user)
    $stmt->bind_param("sssi", $username, $hashed_password, $sdt, $role);

    if ($stmt->execute()) {
        // Redirect để tránh submit form lại
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
        exit();
    } else {
        echo "Tạo tài khoản thất bại: " . $conn->error;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .registration-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .registration-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <h2>Đăng Ký</h2>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<p style='color: green;'>Tạo tài khoản thành công</p>";
            echo '<script>
                    if (typeof history.pushState === "function") {
                        history.pushState({}, "Hide", "' . $_SERVER['PHP_SELF'] . '");
                    }
                  </script>';
        }
        ?>
        <form action="" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="tendangnhap">Tên đăng nhập:</label>
                <input type="text" id="tendangnhap" name="tendangnhap" required>
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu:</label>
                <input type="password" id="matkhau" name="matkhau" required>
            </div>
            <div class="form-group">
                <label for="xacnhan_matkhau">Xác nhận mật khẩu:</label>
                <input type="password" id="xacnhan_matkhau" name="xacnhan_matkhau" required>
            </div>
            <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt" required>
            </div>
            <div class="form-group">
                <button type="submit">Đăng Ký</button>
            </div>
        </form>
    </div>
    <script>
        function validateForm() {
            var password = document.getElementById("matkhau").value;
            var confirmPassword = document.getElementById("xacnhan_matkhau").value;
            if (password !== confirmPassword) {
                alert("Mật khẩu và xác nhận mật khẩu không khớp.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
