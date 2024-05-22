<div class="form-container">
    <form action="SP/xuly.php" method="post" enctype="multipart/form-data">
        <h2>Thông Tin Sản Phẩm</h2>

        <label for="idSanPham">ID Sản Phẩm:</label>
        <input type="text" id="idSanPham" name="idSanPham" required>

        <label for="tenSanPham">Tên Sản Phẩm:</label>
        <input type="text" id="tenSanPham" name="tenSanPham" required>

        <label for="anhSanPham">Ảnh Sản Phẩm:</label>
        <input type="text" id="anhSanPham" name="anhSanPham" required>

        <label for="giaSanPham">Giá Sản Phẩm:</label>
        <input type="number" id="giaSanPham" name="giaSanPham" required>

        <label for="motaSanPham">Mô Tả Sản Phẩm:</label>
        <textarea id="motaSanPham" name="motaSanPham" rows="4" required></textarea>

        <label for="phanLoaiSanPham">Phân Loại Sản Phẩm:</label>
        <select id="phanLoaiSanPham" name="phanLoaiSanPham" required>
            <option value="Tivi">Ti vi</option>
            <option value="Tulanh">Tủ lạnh</option>
            <option value="Dienthoai">Điện thoại</option>
        </select>

        <button type="submit">Gửi</button>
    </form>
</div>


