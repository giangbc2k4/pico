<div class="content">
    <div class="container">
        <h2 class="mb-5">Thông tin tất cả các sản phẩm</h2>

        <div class="table-responsive custom-table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">
                            <label class=""></label>
                        </th>
                        <th scope="col">ID</th>
                        <th scope="col">Tên mặt hàng</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tuỳ chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("../database/config.php");

                    $sql = "SELECT * FROM sanpham";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td></td>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td><a href=''>" . $row["tensanpham"] . "</a></td>";
                            echo "<td>giá: " . $row["gia"] . "</td>";
                            echo "<td>" . $row["mota"] . "</td>";
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
                                    <button class='btn btn-edit'>
                                        <span class='mdi mdi-pencil mdi-24px'></span>
                                        <span>Sửa</span>
                                    </button>
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
