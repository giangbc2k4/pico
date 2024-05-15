<?php
require_once('connect.php');

// Lấy dữ liệu từ form
$masanpham = $_POST['masanpham'];
$tensanpham = $_POST['tensanpham'];
$anh = $_POST['anh'];
$gia = $_POST['gia'];
$mota = $_POST['mota'];
$phanloai = $_POST['phanloai'];

// Chèn dữ liệu vào bảng
$sql = "INSERT INTO sanpham (masanpham, tensanpham, anh, gia, mota, phanloai)
        VALUES ('$masanpham', '$tensanpham', '$anh', '$gia', '$mota', '$phanloai')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
