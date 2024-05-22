
 <body onload="myF()">
    <div id="main">
        <div id="header">
            <div class="header-top">
                <!-- <div class="header-top-left">
                    <a href="#">
                        <i class="icon-header-top-left ti-angle-left"></i>
                    </a>
                </div> -->
                <div class="header-top-center">
                    <img src="assets/image/baner.jpg" alt="baner">
                </div>
                <!-- <div class="header-top-right">
                    <a href="">
                        <i class="icon-header-top-right ti-angle-right"></i>
                    </a>
                </div> -->
            </div>
            <div class="header-center">
                <div class="header-center-left">
                    <a href="">
                        <img src="assets/image/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="header-center-serch">
                    <div class="input-icon-serch">
                        <input type="text">
                        <div class="search-icon">
                            <span>
                                <i class="icon-search ti-search"></i>
                            </span>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="header-center-right">
                    <div class="tra-cuu-don-hang">
                        <a  href="">
                            <i class="icon-header-center-right ti-truck"></i>
                            Tra cứu đơn hàng
                            
                        </a>
                    </div>
                    
                    <div class="gio-hang">
                        <a  href="">
                            <i class="icon-header-center-right ti-shopping-cart"></i>
                            Giỏ hàng
                            
                        </a>
                    </div>
                    
                    <div class="login">
                       <a  href="login.html">
                            <i class="icon-header-center-right ti-user"></i>
                            Đăng nhập
                            
                        </a> 
                    </div>
                    
                </div>

            </div>
            <div id="header-bottom">
                <div class="nav">
                    <div class="menu">
                            <li class="menu-nav">
                                    <a href="">
                                        <i class="icon-menu-nav ti-view-list"></i>
                                        Tất cả danh mục
                                    </a>
                                    <ul class="menu-subnav">
                                        <li>
                                            <a href="">
                                                <i class="ti-desktop"></i>
                                                Điện Tử 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-blackboard"></i>
                                                Điện Lạnh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-bag"></i>
                                                Thiết Bị Nhà Bếp
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-hummer"></i>
                                                Thiết Bị Gia Dụng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-mobile"></i>
                                                Công Nghệ Thông Minh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-wheelchair"></i>
                                                Sức khỏe - Làm Đẹp
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="ti-headphone"></i>
                                                Phụ Kiện
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                    </div>
                    <div class="nav-subnav">
                        <a href="">Tivi</a>
                        <a href="">Tủ lạnh</a>
                       
                        <a href="">Điện thoại</a>
                    </div>
                    <div class="nav-sale">
                        <a href="">
                            <img src="assets/image/sale-nav.jpg" alt="sale">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider">
            <div class="item">
                <img src="assets/image/slider_1.jpg" alt="">
                <H1>Siêu Sale Bếp Từ Galanz Mùa Tết</H1>
                <p>Giảm đến 60%</p>
            </div>
            <div class="item">
                <img src="assets/image/slider_3.jpg" alt="">
                <H1>SIÊU SALE MÙA TẾT</H1>
                <p>Giảm 70% toàn bộ các sản phẩm tại Pico</p>
            </div>
            <div class="item">
                <img src="assets/image/slider_2.jpg" alt="">
                <H1>TCL - Ta cùng làm - Tết càng lớn</H1>
                <p>Chào đón năm mới với ưu đãi lên đến 30%</p>
            </div>
            
        </div>
        <div id="slider-nav">
                    <button id="angle-left-prev">
                        <i class="ti-angle-left"></i>
                    </button>
                    <div class="info">2/3</div>
                    <button id="angle-right-next">
                        <i class="ti-angle-right"></i>
                    </button>
                    <div class="control-pause">
                        <i class="ti-control-pause"></i>
                    </div>
        </div>
        
    <!--  <div id="fist-header">
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
  // Start the session
// Kiểm tra nếu không có phiên session nào được kích hoạt
if (session_status() == PHP_SESSION_NONE) {
    // Nếu không, kích hoạt một phiên session mới
    session_start();
}

// Kiểm tra xem biến session có tồn tại không
if(isset($_SESSION['username'])) {
    // Biến session tồn tại, lấy tên đăng nhập từ biến session
    $username = $_SESSION['username'];
    echo '<a href="logout.php">Dăng xuất</a>';
    echo$username;
    // Sử dụng $username cho mục đích mong muốn, ví dụ:
 
} else {
     // Nếu chưa đăng nhập, hiển thị nút đăng nhập
     echo '<a href="login.php">Đăng nhập</a>';
}


  ?>
  
  
  
            
         </div>
     </div>
 Write your comments here 
     <div id="nav">
         <a href="index.php" class="menu ">Tất cả</a>
         <div class="nav-menu ">
             <a href="index.php?quanly=Tivi">Tivi</a>
             <a href="index.php?quanly=Tulanh">Tủ lạnh</a>
             <a href="index.php?quanly=Maygiat">Máy giặt</a>
             <a href="index.php?quanly=Noicom">Nồi cơm</a>
             <a href="index.php?quanly=Maysay">Máy sấy</a>
             <a href="index.php?quanly=Quatsuoi">Quạt sưởi</a>
             <a href="index.php?quanly=Lovisong">Lò vi sóng</a>
             <a href="index.php?quanly=Binhnonglanh">Bình nóng lạnh</a>
             <a href="index.php?quanly=DienThoai">Điện thoại</a>
             <a href="index.php?quanly=">Khuyến mãi</a>
         </div>
     </div> -->