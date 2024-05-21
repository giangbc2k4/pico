<?php
session_start(); // Bắt đầu hoặc tiếp tục phiên làm việc

// Xóa tất cả các biến phiên bằng cách sử dụng session_unset()
session_unset();

// Xóa cả phiên làm việc bằng cách sử dụng session_destroy()
session_destroy();

        $_SESSION['loggedin'] = false;
        header("Location: index.php");
       

?>