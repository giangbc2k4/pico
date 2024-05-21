<?php
require_once('config.php');
 
    $conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
 

function checklogin($username,$password){
    global $conn;
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    


            return true;
        }
        else {  
            return false;
        }        
                
    }
