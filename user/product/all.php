<?php
require_once("./database/config.php");



$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị danh sách sản phẩm
    echo"<div id='conteiner-content'>";
    echo "<div class='rows'>";
    echo "<div class='text-center'>";
    echo "<h2>SIÊU SALE MÙA TẾT - GIẢM ĐẾN 70%</h2>";
    echo "<p>Hệ thống Điện máy Pico đồng loạt sale mùa Tết, tất cả điều giảm tới 70%</p>";
    echo "</div>";
    echo "<div class='content-sanpham'>";
    while($row = $result->fetch_assoc()) {
        echo " <div class='colum'>";
        echo  "<img src='". $row["anh"] ."'alt='". $row["tensanpham"] ."'><br>";
        echo  " <p>" . $row["masanpham"] ." <br> ";   
        echo "<b> ". $row["gia"] ."</b><br>";
        echo  "<p class='content'>" . $row["mota"] . "</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {
    echo "Không có sản phẩm nào trong cơ sở dữ liệu";
}

$conn->close();
?>
