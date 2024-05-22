
<div class="form-container">
          <form action="/submit-product" method="post" enctype="multipart/form-data">
              <h2>Thông Tin Tài Khoản</h2>
  
              
              <label for="username">Tên Đăng Nhập:</label>
              <input type="text" id="username" name="username" required>
  
              <label for="matkhau">Mật Khẩu:</label>
              <input type="matkhau" id="matkhau" name="matkhau"  required>
              <label for="sdt">Số điện thoại:</label>
              <input type="sdt" id="sdt" name="sdt" required>
  
             <br>
              <label for="Role">Role:</label>
              <select id="role" name="role" required>
                  <option value="1">admin</option>
                  <option value="0">user</option>
            
              </select>
  
              <button type="submit">Gửi</button>
          </form>
      </div>
 
<?php 
include("../database/config.php");
$sql = ""


?>

 