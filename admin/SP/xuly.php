<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../test.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->

    <link rel="stylesheet" href="../style.css">
   
   
    <title>Document</title>
</head>


<?php
 include("../header.php");
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
            exit(); //
        }

    }
    
elseif (isset($_POST["sua"])) {
    $idSanPham = $_POST['idSanPham'];
    $sql = "SELECT * FROM sanpham WHERE id = '$idSanPham'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $tenSanPham = $row['tensanpham'];
        $anhSanPham = $row['anh'];
        $giaSanPham = $row['gia'];
        $motaSanPham = $row['mota'];
        $phanLoaiSanPham = $row['phanloai'];

        echo "
        <div class='form-container'>
            <form action='sua.php' method='post' enctype='multipart/form-data'>
                <h2>Thông Tin Sản Phẩm</h2>

                <label for='idSanPham'>ID Sản Phẩm:</label>
                <input type='text' id='idSanPham' name='idSanPham' required readonly value='$idSanPham'>

                <label for='tenSanPham'>Tên Sản Phẩm:</label>
                <input type='text' id='tenSanPham' name='tenSanPham' required value='$tenSanPham'>

                <label for='anhSanPham'>Ảnh Sản Phẩm:</label>
                <input type='text' id='anhSanPham' name='anhSanPham' required value='$anhSanPham'>

                <label for='giaSanPham'>Giá Sản Phẩm:</label>
                <input type='number' id='giaSanPham' name='giaSanPham' required value='$giaSanPham'>

                <label for='motaSanPham'>Mô Tả Sản Phẩm:</label>
                <textarea id='motaSanPham' name='motaSanPham' rows='4' required>$motaSanPham</textarea>

                <label for='phanLoaiSanPham'>Phân Loại Sản Phẩm:</label>
                <select id='phanLoaiSanPham' name='phanLoaiSanPham' required>
                    <option value='Tivi' " . ($phanLoaiSanPham == 'Tivi' ? 'selected' : '') . ">Ti vi</option>
                    <option value='Tulanh' " . ($phanLoaiSanPham == 'Tulanh' ? 'selected' : '') . ">Tủ lạnh</option>
                    <option value='Dienthoai' " . ($phanLoaiSanPham == 'Dienthoai' ? 'selected' : '') . ">Điện thoại</option>
                </select>

                <button type='submit'>Gửi</button>
            </form>
        </div>
        ";
    } else {
        echo "Không tìm thấy sản phẩm với ID: $idSanPham";
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
  <?php

   include("../main.php");
   include("../footer.php");
   ?>
       

   
  

   
</body>
</html>

