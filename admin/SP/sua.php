<?php
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $idSanPham = $_POST['idSanPham'];
    $tenSanPham = $_POST['tenSanPham'];
    $anhSanPham = $_POST['anhSanPham'];
    $giaSanPham = $_POST['giaSanPham'];
    $motaSanPham = $_POST['motaSanPham'];
    $phanLoaiSanPham = $_POST['phanLoaiSanPham'];

    // Tạo câu lệnh SQL để cập nhật dữ liệu
    $sql = "UPDATE sanpham SET tensanpham = ?, anh = ?, gia = ?, mota = ?, phanloai = ? WHERE id = ?";

    // Chuẩn bị và thực thi câu lệnh SQL
    if ($stmt = $conn->prepare($sql)) {
        // Liên kết các biến với các tham số trong câu lệnh SQL
        $stmt->bind_param("ssissi", $tenSanPham, $anhSanPham, $giaSanPham, $motaSanPham, $phanLoaiSanPham, $idSanPham);
        
        // Thực thi câu lệnh
        if ($stmt->execute()) {
            // Chuyển hướng đến trang quản lý sản phẩm
            header("Location: ../index.php?action=Quanlysanpham");
            exit(); // Dừng việc thực thi mã PHP sau khi chuyển hướng
        } else {
            echo "Lỗi: " . $stmt->error;
        }

        // Đóng câu lệnh
        $stmt->close();
    } else {
        echo "Lỗi trong quá trình chuẩn bị câu lệnh SQL: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
