<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa/Xoá Sản Phẩm</title>
</head>
<body>
    <h1>Sửa/Xoá Sản Phẩm</h1>

   
    <?php
    require_once('connect.php');

    // Xử lý khi form sửa được gửi đi
    if (isset($_POST["update"])) {
        $id = $_POST["id"];
        $tensanpham = $_POST["tensanpham"];
        $anh = $_POST["anh"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        $phanloai = $_POST["phanloai"];

        // Cập nhật thông tin sản phẩm trong cơ sở dữ liệu
        $sql = "UPDATE sanpham SET tensanpham='$tensanpham', anh='$anh', gia='$gia', mota='$mota', phanloai='$phanloai' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Cập nhật sản phẩm thành công";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    // Xử lý khi form xoá được gửi đi
    if (isset($_POST["delete"])) {
        $id = $_POST["id"];

        // Xoá sản phẩm từ cơ sở dữ liệu
        $sql = "DELETE FROM sanpham WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Xoá sản phẩm thành công";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }

    // Hiển thị form để sửa/xoá sản phẩm
 
    $id =$_GET["id"];
    $sql = "SELECT * FROM sanpham WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Thông tin sản phẩm</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            Tên Sản Phẩm: <input type="text" name="tensanpham" value="<?php echo $row["tensanpham"]; ?>"><br>
            Ảnh: <input type="text" name="anh" value="<?php echo $row["anh"]; ?>"><br>
            Giá: <input type="text" name="gia" value="<?php echo $row["gia"]; ?>"><br>
            Mô Tả: <textarea name="mota"><?php echo $row["mota"]; ?></textarea><br>
            Phân Loại: <input type="text" name="phanloai" value="<?php echo $row["phanloai"]; ?>"><br>
            <input type="submit" name="update" value="Cập Nhật">
        </form>

        <h2>Xoá sản phẩm</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" name="delete" value="Xoá">
        </form>
        <?php
    } else {
        echo "Không tìm thấy sản phẩm";
    }

    $conn->close();
    ?>
</body>
</html>
