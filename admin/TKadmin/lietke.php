<div class="content">
    <div class="container">
        <h2 class="mb-5">Thông tin tất cả các tài khoản</h2>

        <div class="table-responsive custom-table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">
                            <label class=""></label>
                        </th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên Đăng Nhập</th>
                        <th scope="col">Mật Khẩu</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Tuỳ chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../database/config.php");

                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td><a href=''>" . $row["username"] . "</a></td>";
                            echo "<td>giá: " . $row["password"] . "</td>";
                            echo "<td>" . $row["sdt"] . "</td>";
                            echo "<td>
                                    <form action='SP/xuly.php' method='post' onsubmit='return confirm(\"Bạn có chắc chắn muốn xoá sản phẩm này không?\");'>
                                        <input type='hidden' name='idSanPham' value='" . $row["id"] . "'>
                                        <button type='submit' name= 'xoa' class='btn btn-delete'>
                                            <span class='mdi mdi-delete mdi-24px'></span>
                                            <span class='mdi mdi-delete-empty mdi-24px'></span>
                                            <span>Xoá</span>
                                        </button>
                                    </form>
                                  </td>";
                            echo "<td>
                            <form action='SP/xuly.php' method='post' onsubmit='return confirm(\"Bạn có chắc chắn muốn xoá sản phẩm này không?\");'>
                            <input type='hidden' name='idSanPham' value='" . $row["id"] . "'>
                            <button type='submit' name= 'sua' class='btn btn-delete'>
                                <span class='mdi mdi-delete mdi-24px'></span>
                                <span class='mdi mdi-delete-empty mdi-24px'></span>
                                <span>Sửa</span>
                            </button>
                        </form>
                      </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Không có sản phẩm nào trong cơ sở dữ liệu</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
