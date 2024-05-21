<?php
session_start(); // Bắt đầu phiên làm việc
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Tran Truong Giang</title>
        <meta charset="utf-8">
<link rel="stylesheet" href="./assets/css/main.css">

<link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,800&display=swap" rel="stylesheet">

</head>
    <body>

    <?php
 
require_once('./database/function.php');


?>

    <div id="fist-header">
        <img src="./assets/img/Slide.gif" alt="">
    </div>
    <div id="header">
        <div class="logo col">
            <img src="./assets/img/17044201367863800665 (1).svg" alt="">
        </div>
        <div class="search col">
            <input type="text">
            <div class="bnt">
                <i class="ti-search"></i>
            </div>
        </div>
        <div class="main col">
            <a href="">Tra cứu đơn hàng</a>
            <a href="">Giỏ hàng</a>

 <?php
 // Kiểm tra xem người dùng đã đăng nhập hay chưa
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
     // Nếu đã đăng nhập, ẩn nút đăng nhập và hiển thị nút khác
     echo '<a href="logout.php">Dăng xuất</a>';
 } else {
     // Nếu chưa đăng nhập, hiển thị nút đăng nhập
     echo '<a href="login.php">Đăng nhập</a>';
 }
 ?>
 
 
 
           
        </div>
    </div>

    <div id="nav">
        <div class="menu ">Tất cả danh mục</div>
        <div class="nav-menu ">
            <a href="">Tivi</a>
            <a href="">Tủ lạnh</a>
            <a href="">Máy giặt</a>
            <a href="">Nồi cơm</a>
            <a href="">Máy sấy</a>
            <a href="">Quạt sưởi</a>
            <a href="">Lò vi sóng</a>
            <a href="">Bình nóng lạnh</a>
            <a href="">Điện thoại</a>
            <a href="">Khuyến mãi</a>
        </div>
    </div>
    <div id="slide">
        <div class="item">
            <img src="./assets/img/slide1.webp" alt="">
            <H1>Tết là nhà</H1>
            <p>Ưu đãi lên đến 37%</p>
        </div>
        <div class="item">
            <img src="./assets/img/slide2.webp" alt="">
            <H1>Tết là nhà</H1>
            <p>Ưu đãi lên đến 37%</p>
        </div>
        <div class="item">
            <img src="./assets/img/slide3.webp" alt="">
            <H1>Tết là nhà</H1>
            <p>Ưu đãi lên đến 37%</p>
        </div>
       
    </div>
    <div id="slide-nav">
        <div class="nav">
        <div class="left-nav bd">
            <i class="ti-angle-left"></i>
        </div>
        <div class="info">1/17</div>
        <div class="right-nav bd">
            <i class="ti-angle-right"></i>
        </div>
        <div class="pause bd">
            <i class="ti-control-pause"></i>
        </div>
    </div>
</div>
<?php
require_once('./database/function.php');




// Truy vấn danh sách sản phẩm
$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị danh sách sản phẩm
    echo"<div id='main1'> ";
    echo "<h1 class='row'>SIÊU SALE MÙA TẾT - GIẢM ĐẾN 70%</h1>";
    echo " <p class='row'>Hệ thống Điện máy Pico đồng loạt sale mùa Tết, tất cả điều giảm tới 70%</p>";
    echo "<div class='list-item'>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<img src='" . $row["anh"] . "' alt='" . $row["tensanpham"] . "'><br>";
        echo "<strong>Mã Sản Phẩm:</strong> " . $row["masanpham"] . "<br>";
        echo "<strong>Tên Sản Phẩm:</strong> " . $row["tensanpham"] . "<br>";
        echo "<strong>Giá:</strong> " . $row["gia"] . "<br>";
        echo  "<p class='content'>" . $row["mota"] . "</p>";

        echo "<strong>Phân Loại:</strong> " . $row["phanloai"];
        echo "</div>";

        

    }
    echo "</div>";

} else {
    echo "Không có sản phẩm nào trong cơ sở dữ liệu";
}

$conn->close();
?>

<div id="main1">
    <h1 class="row">SIÊU SALE MÙA TẾT - GIẢM ĐẾN 70%</h1>
    <p class="row">Hệ thống Điện máy Pico đồng loạt sale mùa Tết, tất cả điều giảm tới 70%</p>



<div class="list-item">


    <div class="item">
    <img src="./assets/img/main1-1.webp" alt="">
    <img class="img2" src="./assets/img/sale.webp" alt="">
    <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
    <h1 class="new">599.000đ</h1>
    <div class="row-item">
    <p class="old ">1.500.000đ</p>
    <p class="sale ">-61%</p>
</div>
    <div class="slot">
        <p>Còn 55/70 suất</p>
    </div>
    </div>













    <div class="item">
        <img src="./assets/img/main1-2.webp" alt="">
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
        <h1 class="new">4.990.000đ</h1>
        <div class="row-item">
        <p class="old ">11.990.000đ</p>
        <p class="sale ">-59%</p>
    </div>
        <div class="slot">
            <p>Vừa mở bán</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main1-3.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
            <h1 class="new">9.190.000đ</h1>
            <div class="row-item">
            <p class="old ">13.990.000đ</p>
            <p class="sale ">-35%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main1-4.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">   
                <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                <h1 class="new">11.990.000đ</h1>
                <div class="row-item">
                <p class="old ">18.990.000đ</p>
                <p class="sale ">-37%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
            </div>       
</div>















<div id="main2">
    <p class="all">TẤT CẢ <i class="ti-arrow-right"></i></p>
    <div class="list-item">
        <div class="item">
        <img src="./assets/img/main2-1.webp" alt="" >
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
        <h1 class="new">599.000đ</h1>
        <div class="row-item">
        <p class="old ">1.500.000đ</p>
        <p class="sale ">-61%</p>
    </div>
        <div class="slot">
            <p>Còn 55/70 suất</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main2-2.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
            <h1 class="new">4.990.000đ</h1>
            <div class="row-item">
            <p class="old ">11.990.000đ</p>
            <p class="sale ">-59%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main2-3.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">
                <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
                <h1 class="new">9.190.000đ</h1>
                <div class="row-item">
                <p class="old ">13.990.000đ</p>
                <p class="sale ">-35%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
                <div class="item">
                    <img src="./assets/img/main2-4.webp" alt="">
                    <img class="img2" src="./assets/img/sale.webp" alt="">   
                    <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                    <h1 class="new">11.990.000đ</h1>
                    <div class="row-item">
                    <p class="old ">18.990.000đ</p>
                    <p class="sale ">-37%</p>
                </div>
                    <div class="slot">
                        <p>Vừa mở bán</p>
                    </div>
                    </div>
                </div>   
</div>
<div id="main3">
    <p class="all">TẤT CẢ <i class="ti-arrow-right"></i></p>
    <div class="list-item">
        <div class="item">
        <img src="./assets/img/main2-1.webp" alt="" >
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
        <h1 class="new">599.000đ</h1>
        <div class="row-item">
        <p class="old ">1.500.000đ</p>
        <p class="sale ">-61%</p>
    </div>
        <div class="slot">
            <p>Còn 55/70 suất</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main2-2.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
            <h1 class="new">4.990.000đ</h1>
            <div class="row-item">
            <p class="old ">11.990.000đ</p>
            <p class="sale ">-59%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main2-3.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">
                <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
                <h1 class="new">9.190.000đ</h1>
                <div class="row-item">
                <p class="old ">13.990.000đ</p>
                <p class="sale ">-35%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
                <div class="item">
                    <img src="./assets/img/main2-4.webp" alt="">
                    <img class="img2" src="./assets/img/sale.webp" alt="">   
                    <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                    <h1 class="new">11.990.000đ</h1>
                    <div class="row-item">
                    <p class="old ">18.990.000đ</p>
                    <p class="sale ">-37%</p>
                </div>
                    <div class="slot">
                        <p>Vừa mở bán</p>
                    </div>
                    </div>
                </div>   
</div>
<div id="main4">
    <p class="all">TẤT CẢ <i class="ti-arrow-right"></i></p>
    <div class="list-item">
        <div class="item">
        <img src="./assets/img/main2-1.webp" alt="" >
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
        <h1 class="new">599.000đ</h1>
        <div class="row-item">
        <p class="old ">1.500.000đ</p>
        <p class="sale ">-61%</p>
    </div>
        <div class="slot">
            <p>Còn 55/70 suất</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main2-2.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
            <h1 class="new">4.990.000đ</h1>
            <div class="row-item">
            <p class="old ">11.990.000đ</p>
            <p class="sale ">-59%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main2-3.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">
                <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
                <h1 class="new">9.190.000đ</h1>
                <div class="row-item">
                <p class="old ">13.990.000đ</p>
                <p class="sale ">-35%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
                <div class="item">
                    <img src="./assets/img/main2-4.webp" alt="">
                    <img class="img2" src="./assets/img/sale.webp" alt="">   
                    <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                    <h1 class="new">11.990.000đ</h1>
                    <div class="row-item">
                    <p class="old ">18.990.000đ</p>
                    <p class="sale ">-37%</p>
                </div>
                    <div class="slot">
                        <p>Vừa mở bán</p>
                    </div>
                    </div>
                </div>   
</div>
<div id="main5">
    <p class="all">TẤT CẢ <i class="ti-arrow-right"></i></p>
    <div class="list-item">
        <div class="item">
        <img src="./assets/img/main2-1.webp" alt="" >
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
        <h1 class="new">599.000đ</h1>
        <div class="row-item">
        <p class="old ">1.500.000đ</p>
        <p class="sale ">-61%</p>
    </div>
        <div class="slot">
            <p>Còn 55/70 suất</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main2-2.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
            <h1 class="new">4.990.000đ</h1>
            <div class="row-item">
            <p class="old ">11.990.000đ</p>
            <p class="sale ">-59%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main2-3.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">
                <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
                <h1 class="new">9.190.000đ</h1>
                <div class="row-item">
                <p class="old ">13.990.000đ</p>
                <p class="sale ">-35%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
                <div class="item">
                    <img src="./assets/img/main2-4.webp" alt="">
                    <img class="img2" src="./assets/img/sale.webp" alt="">   
                    <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                    <h1 class="new">11.990.000đ</h1>
                    <div class="row-item">
                    <p class="old ">18.990.000đ</p>
                    <p class="sale ">-37%</p>
                </div>
                    <div class="slot">
                        <p>Vừa mở bán</p>
                    </div>
                    </div>
                </div>   
</div>
<div id="main6">
    <p class="all">TẤT CẢ <i class="ti-arrow-right"></i></p>
    <div class="list-item">
        <div class="item">
        <img src="./assets/img/main2-1.webp" alt="" >
        <img class="img2" src="./assets/img/sale.webp" alt="">
        <p class="content">Bếp Điện Từ Đơn Galanz Điều Khiển Cảm Ứng Kính Ceramic 2200W CH211E</p>
        <h1 class="new">599.000đ</h1>
        <div class="row-item">
        <p class="old ">1.500.000đ</p>
        <p class="sale ">-61%</p>
    </div>
        <div class="slot">
            <p>Còn 55/70 suất</p>
        </div>
        </div>
        <div class="item">
            <img src="./assets/img/main2-2.webp" alt="">
            <img class="img2" src="./assets/img/sale.webp" alt="">
            <p class="content">Smart Tivi Casper 4K 50 inch 50UW6000</p>
            <h1 class="new">4.990.000đ</h1>
            <div class="row-item">
            <p class="old ">11.990.000đ</p>
            <p class="sale ">-59%</p>
        </div>
            <div class="slot">
                <p>Vừa mở bán</p>
            </div>
            </div>
            <div class="item">
                <img src="./assets/img/main2-3.webp" alt="">
                <img class="img2" src="./assets/img/sale.webp" alt="">
                <p class="content">Máy giặt lồng ngang ELECTROLUX EWF1024D3WB 10 kg UltimateCare</p>
                <h1 class="new">9.190.000đ</h1>
                <div class="row-item">
                <p class="old ">13.990.000đ</p>
                <p class="sale ">-35%</p>
            </div>
                <div class="slot">
                    <p>Vừa mở bán</p>
                </div>
                </div>
                <div class="item">
                    <img src="./assets/img/main2-4.webp" alt="">
                    <img class="img2" src="./assets/img/sale.webp" alt="">   
                    <p class="content">Tủ lạnh LG Side by Side GR-B256JDS 519 L Inverter màu bạc</p>
                    <h1 class="new">11.990.000đ</h1>
                    <div class="row-item">
                    <p class="old ">18.990.000đ</p>
                    <p class="sale ">-37%</p>
                </div>
                    <div class="slot">
                        <p>Vừa mở bán</p>
                    </div>
                    </div>
                </div>   
</div>
<div id="mess">
        <div class="fist-mess">
    
            <div class="logo">
                <div class="thei"><i class="ti-angle-left"> </i>
                </div>
                <img src="/assets/img/17044201367863800665 (1).svg" alt="">
            </div>
            <div class="info">
                <h1>Siêu thị điện máy Pico</h1>
                <p>Xin chào mừng quý khách đến với hỗ trợ trực tuyến!</p>
            </div>
            <div id="thei"> <i class="ti-close"></i></div>
        </div>
    <div class="info">
        <div class="time">09:00</div>
        <div class="textchat">
            <div class="name">
                <img src="./assets/img/17044201367863800665 (1).svg" alt="">
                <p>Siêu thị điện máy Pico</p>
            
            </div>
            
            <div class="text"><p>Xin chào, Chúng tôi ở đây và sẵn sàng tư vấn. Hãy cho chúng tôi biết nhu cầu của bạn!</p></div>
        </div>
    </div>    
</div>

    </body>
    <script src="./assets/js/main.js"></script>
 
    <script src="./assets/js/test.js"></script>
</html>