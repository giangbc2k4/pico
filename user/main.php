<?php
 if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
}
else {
    $tam = '';}
    if($tam =='Tivi'){
        include_once('product/tivi.php');
    }
    else if($tam == 'Binhnonglanh'){
        include_once('product/Binhnonglanh.php');
    }
    else if($tam == 'DienThoai'){
        include_once('product/DienThoai.php');
    }
    else if($tam == 'Lovisong'){
        include_once('product/Lovisong.php');
    }
    else if($tam == 'Maygiat'){
        include_once('product/Maygiat.php');
    }
    else if($tam == 'Maysay'){
        include_once('product/Maysay.php');
    }
    else if($tam == 'Noicom'){
        include_once('product/Noicom.php');
    }
    else if($tam == 'Quatsuoi'){
        include_once('product/Quatsuoi.php');
    }
    else if($tam == 'TuLanh'){
        include_once('product/TuLanh.php');
    }
    else{
        include_once('product/all.php');
    }

?>
