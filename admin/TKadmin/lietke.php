

<div class="content">
    
    <div class="container">
      <h2 class="mb-5">Thông tin tất cả các sản phẩm</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="">
                 
                 
                </label>
              </th>
              
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">role</th>
              <th scope="col">Tuỳ chỉnh</th>
            </tr>
          </thead>
       




            <?php
require_once("../database/config.php");



$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị danh sách sản phẩm
    while($row = $result->fetch_assoc()) {
    echo"<tr scope='row'>";

    echo "<th scope='row'>";

    echo "<td> ".   $row["username"]."</td>";

    echo"       <td><a href=''> ". $row["password"]."</a></td> " ;

      echo" <td> ".$row["sdt"]."</td>";

      

      echo" <td> ".$row["role"]."</td>";
   
      echo"  <td>
      <button class='btn btn-delete'>
        <span class='mdi mdi-delete mdi-24px'></span>
        <span class='mdi mdi-delete-empty mdi-24px'></span>
        <span>Xoá</span>
      </button>
    </td>
  
      <td>
        <button class='btn btn-delete'>
            <span class='mdi mdi-delete mdi-24px'></span>
            <span class='mdi mdi-delete-empty mdi-24px'></span>
            <span>Sửa</span>
          </button>
      </td>



      </th>
    
    </tr>";
    }
 
} else {
    echo "Không có sản phẩm nào trong cơ sở dữ liệu";
}

$conn->close();
?>

  
              
                 
              
                


    </div>

  </div>