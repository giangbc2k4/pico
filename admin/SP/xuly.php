<?php
require_once("../config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["xoa"])) {
        $idSanPham = $_POST['idSanPham'];
        echo $idSanPham;
        $sql = " DELETE FROM sanpham WHERE id = '$idSanPham'";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script>
            alert('nsdjkabjsdhj');
        </script> ";
            header("Location: ../index.php?action=Quanlysanpham");
      
        }

    }
    else{
    // Lấy dữ liệu từ form
    $idSanPham = $_POST['idSanPham'];
    $tenSanPham = $_POST['tenSanPham'];
    $anhSanPham = $_POST['anhSanPham'];
    $giaSanPham = $_POST['giaSanPham'];
    $motaSanPham = $_POST['motaSanPham'];
    $phanLoaiSanPham = $_POST['phanLoaiSanPham'];

    // Tạo câu lệnh SQL để chèn dữ liệu
    $sql = "INSERT INTO sanpham (masanpham, tensanpham, anh, gia, mota, phanloai) VALUES (?, ?, ?, ?, ?, ?)";

    // Chuẩn bị và thực thi câu lệnh SQL
    if ($stmt = $conn->prepare($sql)) {
        // Liên kết các biến với các tham số trong câu lệnh SQL
        $stmt->bind_param("sssiss", $idSanPham, $tenSanPham, $anhSanPham, $giaSanPham, $motaSanPham, $phanLoaiSanPham);
        
        // Thực thi câu lệnh
        if ($stmt->execute()) {
            header("Location: ../index.php?action=Quanlysanpham");
            exit(); //
            echo "Dữ liệu đã được thêm thành công!";
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
}}
?>