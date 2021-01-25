# Nha-hang-SushiWorld
Xây dựng Website Giới thiệu Nhà hàng Sushi World

![banner](https://user-images.githubusercontent.com/74713811/104671592-af797d00-5710-11eb-93e4-9def1881a693.png)

Xây dựng một website với các chức năng đáp ứng nhu cầu thông tin, quản trị và kinh doanh trực tuyến của nhà hàng. Đảm bảo giới thiệu, cập nhập đầy đủ thông tin của nhà hàng tới khách hàng, tiếp nhận thông tin phản hồi từ khách hàng một cách nhanh chóng; tiện lợi dễ dàng trong việc đặt hàng trực tuyến.

=>  Phân công công việc:
    +   Trần Anh Đức - Views.
    +   Lê Hoàng Bảo Thiên - Models, Controllers.
    +   Nguyễn Thành Đạt - Models, Controllers.

=>  Một số chức năng cơ bản:
    -   Phần giao diện (nhóm chức năng thông tin):
        +	Giới thiệu nhà hàng, tin tức, sự kiện ẩm thực
        +	Giới thiệu thực đơn
        +	Hiển thị được các sản phẩm bán chạy, các sản phẩm cùng loại…
        +	Hiển thị thông tin về nhà hàng

    -	Phần người dùng (nhóm chức năng kinh doanh) 
        +	Cho phép khách hàng xem thông tin chi tiết, xem các sản phẩm
        +	Cho phép khách hàng đặt bàn online mà không cần tài khoản
        +   Cho phép khách hàng phản hồi về nhà hàng

    -	Phần quản lý (nhóm chức năng hệ thống)
        +	Đăng nhập hệ thống: đăng nhập bằng quyền admin để quản lý website
        +	Quản lý đơn đặt bàn: dùng để quản lý thông tin khách hàng đã đặt bàn để liên hệ và tiến hành xác nhận
        +	Quản lý danh mục: dùng để thêm sửa xóa các danh mục món ăn, thực đơn, tin tức, ...
        +	Quản lý menu: dùng để thêm sửa xóa các món ăn, thực đơn của nhà hàng
        +	Quản lý giá cả, chi tiết món ăn

=>  Cách download và cài đặt
    -   Bước 1: Tiến hành download project và giải nén tại thư mục htdocs của xampp
    ![image](https://user-images.githubusercontent.com/74713811/105720355-edb73d80-5f55-11eb-857c-9190753ff466.png)
    -   Bước 2: Tiến hành giải nén thư mục "connect", bao gồm file .env và vendor
    -   Bước 3: Tạo database mới trên phpMyadmin, nhập file "sushiworld.sql" nằm trong thư mục "databases"
    -   Bước 4: Truy cập file .env, tiến hành đổi tên database theo tên vừa mới đặt
    -   Bước 5: Bật xampp control, trên web gõ link http://localhost/Nha-hang-SushiWorld/public/home để tiến hành truy cập website

=> Có thể truy cập website một cách nhanh chóng theo đường link
    http://sushiworldrestaurant.atwebpages.com/public/home

