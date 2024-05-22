
 <!--<h2>Đăng nhập</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Tên người dùng:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Mật khẩu:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="login" value="Đăng nhập">
    <input type="submit" name="action" value="Đăng ký">
</form>






<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="tendangnhap">Tên đăng nhập:</label>
                <input type="text" id="tendangnhap" name="tendangnhap" required>
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu:</label>
                <input type="password" id="matkhau" name="matkhau" required>
            </div>
            <div class="form-group">
                <label for="xacnhan_matkhau">Xác nhận mật khẩu:</label>
                <input type="password" id="xacnhan_matkhau" name="xacnhan_matkhau" required>
            </div>
            <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt" required>
            </div>
            <div class="form-group">
                <button type="submit" name="dangky">Đăng Ký</button>
            </div>
        </form>
    </div>
   </div> 
        <div id="chat">
            <div class="chat-top">
                <div class="icon-left" style="padding-left: 20px;padding-right: 10px; display: flex; justify-content: center; align-items: center;">
                    <i class="ti-angle-left" style="font-size: 18px; color: #fff;"></i>
                </div>
                <div class="logo-chat" style="margin-top: 20px; width:55px ; height: 55px; border-radius: 50%; background-color: #fff;">
                    <img src="image/logo.svg" style="width: 50px; height: auto;" alt="logo">
                </div>
                
                <p></p>
                <button class="icon-right" style="position: absolute; right: 20px; margin-top: 40px;background-color: indianred;border: none;" type="button" class="btn cancel" onclick="closeForm()">
                    <i class="ti-close" style=" font-size: 18px; color: #fff;" ></i>
                </button>
            </div>
            <div class="chat-bottom">
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <div class="send">
                    <button type="submit" class="btn" style="position: absolute; width:50px ; height: 50px; bottom: 15px; right: 15px; border-radius: 10px; background-color: green;border: none; color: #fff; font-size: 18px;">Gửi</button>
                </div>
            </div>
        </div>
        <button id="open-chat" onclick="openForm()" > 
            <i class="ti-comment-alt"></i>
        </button>
        <div id="onl" >     
            <div class="btb-close" > 
                <a href="javascript:un()" > 
                    <i class="ti-close-quangcao ti-close"></i>
                </a>    
            </div>                  
            <img src="image/quangcao.jpg" width="600" height="600" />
        </div>
        <script>
            function openForm() {
              document.getElementById("chat").style.display = "block";
              document.getElementById("open-chat").style.display = "none";
            }
            
            function closeForm() {
              document.getElementById("chat").style.display = "none";
              document.getElementById("open-chat").style.display = "block";
            }
        </script>
      -->
</body>
</html>