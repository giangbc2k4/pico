# Pico — PHP Product Management Demo

Ứng dụng web PHP/MySQL dạng bài tập, gồm khu vực người dùng, trang đăng nhập/đăng ký và giao diện quản trị sản phẩm. Repository đi kèm nhiều asset Bootstrap, CSS, JavaScript và Themify Icons.

> **Lưu ý:** dự án hiện phù hợp để học tập hoặc refactor, chưa an toàn để triển khai công khai. Mã đăng nhập đang ghép trực tiếp dữ liệu người dùng vào SQL và so sánh mật khẩu dạng thô.

## Chức năng quan sát được

- Đăng nhập và đăng xuất bằng PHP session.
- Form đăng ký người dùng.
- Tách giao diện người dùng thành header, menu, main và footer.
- Khu vực admin riêng.
- Các thao tác thêm, sửa và hiển thị sản phẩm qua module `database`.
- Giao diện sử dụng Bootstrap, CSS tùy chỉnh, icon font và script demo.

## Cấu trúc

```text
index.php              # Trang chính và xử lý đăng nhập
register.php           # Đăng ký
logout.php             # Kết thúc session
user/                  # Layout và trang phía người dùng
user/product/          # Giao diện sản phẩm
admin/                 # Trang quản trị và asset riêng
database/
  config.php           # Kết nối MySQL
  function.php         # Hàm truy vấn/nghiệp vụ
  add_product.php      # Thêm sản phẩm
  edit_product.php     # Sửa sản phẩm
assets/                # CSS, JavaScript và font/icon
```

## Yêu cầu

- PHP 7.4+; khuyến nghị PHP 8.2.
- MySQL hoặc MariaDB.
- Apache/Nginx, hoặc PHP built-in server để thử cục bộ.

## Cài đặt cục bộ

1. Tạo database và các bảng được mã nguồn sử dụng, ít nhất gồm bảng `user` và dữ liệu sản phẩm.
2. Cập nhật cấu hình kết nối trong `database/config.php`.
3. Không commit username/password database thật lên GitHub.
4. Chạy tại thư mục gốc:

```bash
php -S localhost:8000
```

5. Mở `http://localhost:8000`.

Nếu dùng XAMPP, đặt repository trong `htdocs`, bật Apache/MySQL và truy cập theo tên thư mục.

## Luồng đăng nhập hiện tại

`index.php` bắt đầu session, nhận `username` và `password` từ POST rồi truy vấn bảng `user`. Khi tìm thấy bản ghi, username được lưu vào session. Đây là luồng tối giản để học form và session, nhưng không đáp ứng yêu cầu bảo mật thực tế.

## Việc bắt buộc trước khi deploy

- Thay SQL nối chuỗi bằng prepared statement (`PDO` hoặc `mysqli_prepare`) để ngăn SQL injection.
- Hash mật khẩu bằng `password_hash()` và kiểm tra bằng `password_verify()`.
- Validate/escape toàn bộ input và output để giảm XSS.
- Thêm CSRF token cho form thay đổi dữ liệu.
- Kiểm tra quyền admin ở phía server cho mọi route quản trị.
- Chuyển credential database sang biến môi trường.
- Tắt hiển thị lỗi chi tiết trong production và ghi log an toàn.
- Thêm schema/migration mẫu thay vì yêu cầu người dùng đoán cấu trúc database.

## Giới hạn

- Chưa có file SQL hoặc migration đầy đủ trong repository.
- Asset vendor khá lớn và có nhiều file demo không liên quan trực tiếp.
- Chưa có dependency manager Composer, test tự động hay routing rõ ràng.
- Một số đường dẫn asset trong HTML cần được kiểm tra lại khi chạy từ thư mục con.

## Hướng phát triển

- Refactor theo MVC và dùng Composer autoload.
- Thêm `.env.example`, migration và seed data.
- Chuẩn hóa CRUD sản phẩm, phân trang và upload ảnh.
- Thêm PHPUnit, coding standard và CI.
- Chụp ảnh các màn hình user/admin sau khi luồng chính hoạt động ổn định.
