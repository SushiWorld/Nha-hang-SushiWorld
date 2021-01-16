-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sushiworld`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `food_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `food_category`, `cate_des`, `updated_at`, `created_at`) VALUES
(1, 'Khai vị', 'Danh mục đồ ăn khai vị', '2021-01-14', '0000-00-00'),
(2, 'Món chính', 'Danh mục đồ ăn chính', '0000-00-00', '0000-00-00'),
(3, 'Tráng miệng', 'Danh mục đồ ăn tráng miệng', '0000-00-00', '0000-00-00'),
(4, 'Nước uống', 'Danh mục nước uống', '2021-01-14', '0000-00-00'),
(5, 'Đặc biệt', 'Danh mục đồ ăn đặc biệt hôm nay', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `customer_name`, `subject`, `email`, `message`) VALUES
(1, 'Adam Abdulrahman', 'Late Delivery', 'abdulflezy13@yahoo.com', 'Please ensure that your delivery guys deliver the meals at the required time because they are often late.'),
(2, 'Zainab Adamu', 'Late Delivery', 'Zee@yahoo.com', 'I need an email of the GM if possible');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `food_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `food_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_highlight` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_price`, `food_description`, `cate_id`, `food_img`, `food_highlight`, `updated_at`, `created_at`) VALUES
(1, 'Bánh xèo Nhật', '80K', 'Bánh xèo chuẩn hương vị Nhật độc quyền của Nhà hàng Sushi World.', 1, 'menu-item-thumbnail-01.jpg', '', '0000-00-00', '0000-00-00'),
(2, 'Pizza hải sản Nhật', '145K', 'Pizza gồm cá thu Nhật, mực, tôm, hàu, sốt cà chua Nhật.', 1, 'menu-item-thumbnail-02.jpg', '', '0000-00-00', '0000-00-00'),
(3, 'Salad rau quả', '40K', 'Gồm hành tây, hành củ tím, cà chua bi, rau salack, giấm nhật, sốt mayonnaise.', 1, 'menu-item-thumbnail-03.jpg', '', '0000-00-00', '0000-00-00'),
(4, 'Măng tây áp chảo', '70K', 'Măng tây bổ sung chất xơ và cung cấp nhiều chất dinh dưỡng tốt cho sức khỏe.', 1, 'menu-item-thumbnail-04.jpg', '', '0000-00-00', '0000-00-00'),
(5, 'Dưa chuột chấm sốt Miso', '70K', 'Dưa chuột Nhật chấm với nước sốt Miso ngọt cay nồng.', 1, 'menu-item-thumbnail-05.jpg', '', '0000-00-00', '0000-00-00'),
(6, 'Súp Miso', '55K', 'Gồm nước dùng Dashi kết hợp tương Miso, đậu phụ, rong biển.', 1, 'menu-item-thumbnail-06.jpg', '', '0000-00-00', '0000-00-00'),
(7, 'Maki', '50K', 'Maki Sushi cơm cuộn rong biển gồm 1 nhân đủ loại thuần truyền thống.', 2, 'menu-item-thumbnail-07.jpg', '', '0000-00-00', '0000-00-00'),
(8, 'Futomaki', '55K', 'Futomaki Sushi cơm cuộn rong biển gồm 2-3 nhân đủ loại thuần truyền thống.', 2, 'menu-item-thumbnail-08.jpg', '', '0000-00-00', '0000-00-00'),
(9, 'Gunkan', '70K', 'Gunkan Sushi như một chiếc tàu nhỏ đầy các món cá, trứng cá, trứng tôm, nhím biển..', 2, 'menu-item-thumbnail-09.jpg', '', '0000-00-00', '0000-00-00'),
(10, 'Temari', '60K', 'Temari Shushi tròn như quả bóng nhiều loại topping khác nhau tùy theo lựa chọn.                       ', 2, 'menu-item-thumbnail-10.jpg', '', '0000-00-00', '0000-00-00'),
(11, 'Temaki', '70K', 'Temaki có hình chiếc phễu, bên trong cuộn cơm và cá hồi, trứng cá hồi, rau củ...', 2, 'menu-item-thumbnail-11.jpg', '', '0000-00-00', '0000-00-00'),
(12, 'Nigiri', '70K', 'Nigiri Sushi viên nhỏ dài, được phết lên một lớp wasabi và phủ lớp hải sản tươi.', 2, 'menu-item-thumbnail-12.jpg', '', '0000-00-00', '0000-00-00'),
(13, 'Uramaki', '50K', 'Uramaki Sushi là phiên bản \"đảo ngược\" của Maki Sushi.', 2, 'menu-item-thumbnail-13.jpg', '', '0000-00-00', '0000-00-00'),
(14, 'Oshizushi', '95K', 'Oshizushi Sushi là loại cao cấp, sang trọng. Cơm lót ở dưới - Lớp hải sản phủ ở trên.', 2, 'menu-item-thumbnail-14.jpg', '', '0000-00-00', '0000-00-00'),
(15, 'Chirashi', '120K', 'Chirashi Sushi gồm cơm ở dưới, phần trên phủ kín các loại hải sản, rau củ kèm sốt Miso.', 2, 'menu-item-thumbnail-15.jpg', '', '0000-00-00', '0000-00-00'),
(16, 'Narezushi', '110K', 'Narezushi được chế biến bằng cách ủ muối và gạo với cá sống làm cho lên men.', 2, 'menu-item-thumbnail-16.1.jpg', '', '0000-00-00', '0000-00-00'),
(17, 'BUFFET GRILLED SUSHI', '200K', 'Buffet Sushi nướng - độc quyền Sushi World.', 2, 'menu-item-thumbnail-16.2.jpg', '', '0000-00-00', '0000-00-00'),
(18, 'Hot pot sushi', '200K', 'Buffet Sushi lẩu - độc quyền Sushi World.', 2, 'menu-item-thumbnail-16.jpg', '', '0000-00-00', '0000-00-00'),
(19, 'Chocolate Fudgecake', '45K', 'Dĩa bánh Fudge hương vị Chocolate và dâu tây đỏ ngọt ngào.', 3, 'menu-item-thumbnail-17.jpg', '', '0000-00-00', '0000-00-00'),
(20, 'Vanilla Fudgecake', '45K', 'Dĩa bánh Fudge hương vị Vanilla và dâu tây đỏ ngọt ngào.', 3, 'menu-item-thumbnail-18.jpg', '', '0000-00-00', '0000-00-00'),
(21, 'Caramel Fudgecake', '45K', '', 3, 'menu-item-thumbnail-19.jpg', '', '0000-00-00', '0000-00-00'),
(22, 'Swirl Ice Cream Fudgecake', '50K', 'Dĩa bánh Fudge hương vị bánh Vanilla Chocolate và kem béo.', 3, 'menu-item-thumbnail-20.jpg', '', '0000-00-00', '0000-00-00'),
(23, 'Milk Flan Cake', '30K', 'Dĩa bánh Flan làm từ sữa bò nguyên chất và phủ kem béo, dâu tây - cherry.', 3, 'menu-item-thumbnail-21.jpg', '', '0000-00-00', '0000-00-00'),
(24, 'Caramel Flan Cake', '30K', 'Dĩa bánh Flan làm từ sữa caramel truyền thống và phủ kem béo, dâu tây - cherry.', 3, 'menu-item-thumbnail-22.jpg', '', '0000-00-00', '0000-00-00'),
(25, 'Aportel Beer', '40K', 'Bia tuơi nhập khẩu từ Đức', 4, 'menu-item-thumbnail-23.jpg', '', '0000-00-00', '0000-00-00'),
(26, 'Strong Bow', '25K', 'Strong Bow nước trái cây lên men đủ tất cả các vị - tự chọn.', 4, 'menu-item-thumbnail-24.jpg', '', '0000-00-00', '0000-00-00'),
(27, 'Monster Energy', '30K', 'Monster Energy nước tăng lực nổi tiếng của Mỹ, vị truyền thống.', 4, 'menu-item-thumbnail-25.jpg', '', '0000-00-00', '0000-00-00'),
(28, 'Coca Cola', '20K', 'Coca cola nước ngọt có ga quen thuộc.', 4, 'menu-item-thumbnail-26.jpg', '', '0000-00-00', '0000-00-00'),
(29, 'Pepsi Lemon No Calo', '20K', 'Pepsi vị chanh không calo - phù hợp cho người ăn kiêng.', 4, 'menu-item-thumbnail-27.jpg', '', '0000-00-00', '0000-00-00'),
(30, 'Red Bull Energy', '20K', 'Bò húc Red Bull nước tăng lực truyền thống.', 4, 'menu-item-thumbnail-28.jpg', '', '0000-00-00', '0000-00-00'),
(31, '7 Up', '20K', '7 Up loại nước khoáng có ga truyền thống.', 4, 'menu-item-thumbnail-29.jpg', '', '0000-00-00', '0000-00-00'),
(32, 'Aquafina', '10K', 'Aquafina nước khoáng lọc thiên nhiên.', 4, 'menu-item-thumbnail-30.jpp', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinds`
--

CREATE TABLE `kinds` (
  `id` int(11) NOT NULL,
  `kind_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kind_des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinds`
--

INSERT INTO `kinds` (`id`, `kind_item`, `kind_des`, `updated_at`, `created_at`) VALUES
(1, 'Thường', 'Loại bàn 2 ghế', '0000-00-00', '0000-00-00'),
(2, 'Vừa', 'Loại bàn 4 ghế', '0000-00-00', '0000-00-00'),
(3, 'Lớn', 'Loại bàn 10 ghế', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_of_guest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_res` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occasion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kind` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `no_of_guest`, `date_res`, `time`, `occasion`, `kind`, `note`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Thành Đạt', 'thanhdat@gmail.com', '0123456789', '2', '17/01/2021', '12:16', 'Thường', 3, 'Đặt trước bánh ngọt', 0, '0000-00-00', '0000-00-00'),
(2, 'Anh Đức', 'anhduc@gmail.com', '0123456789', '2', '17/01/2021', '12:16', 'Thường', 1, 'Đặt trước bánh ngọt', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `title`, `slide_img`, `slide_content`, `link`, `created_at`, `updated_at`) VALUES
(1, 'MAKI', 'special-menu-1.jpg', 'Maki là dạng cơm cuộn bằng rong biển loại nhỏ, thường chỉ có 1 loại nhân, có thể là nhân cá sống, rau củ quả sống.', '', NULL, NULL),
(2, 'FUTOMAKI', 'special-menu-2.jpg', 'Futomaki có đường kính từ 1.5 inch đến 2.5 inch, bao gồm 2 - 3 loại nhân khác nhau được cuộn bằng rong biển khô.', '', NULL, NULL),
(3, 'GUNKAN', 'special-menu-3.jpg', 'Gunkan trông giống như một chiếc tàu nhỏ \"chở\" đầy các món cá, trứng cá, trứng tôm hay nhím biển.', '', NULL, NULL),
(5, 'TEMARI', 'special-menu-4.jpg', 'Temari có dạng tròn như những quả bóng nhỏ, được phủ lên bởi nhiều loại topping khác nhau tuỳ theo lựa chọn.', '', NULL, NULL),
(6, 'TEMAKI', 'special-menu-5.jpg', 'Temaki có hình chiếc phễu, chỉ được cuộn nhẹ ở phần cuối, bên trong chứa cơm và phủ các loại topping khác nhau như cá hồi, trứng cá hồi, rau củ...', '', NULL, NULL),
(7, 'NIGIRI', 'special-menu-6.jpg', 'Nigiri là các viên sushi nhỏ dài, khá thuôn thả, được phết lên một lớp wasabi rồi phủ lên trên một lớp cá sống hoặc các loại hải sản khác.', '', NULL, NULL),
(9, 'Set Special', 'special-menu-7.jpg', 'Set thịt nướng đặc biệt, các loại hải sản tươi sống cùng với sushi tuyệt hảo.', '', '2021-01-16 08:00:53', '2021-01-16 08:00:53'),
(10, 'Set nướng', 'special-menu-7.jpg', 'Set thịt nướng đặc biệt, các loại hải sản tươi sống cùng với sushi tuyệt hảo.', '', '2021-01-16 08:16:28', '2021-01-16 08:16:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(2, 'Bảo Thiên', 'baothien@gmail.com', '$2y$10$Ux.W2wFa2nwin471r0z3wOrQrVGdwJaEK5dxIrsMZmUENfxqA3nua', '2021-01-16', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category_id` (`cate_id`);

--
-- Chỉ mục cho bảng `kinds`
--
ALTER TABLE `kinds`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kind_res` (`kind`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `kinds`
--
ALTER TABLE `kinds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `FK_category_id` FOREIGN KEY (`cate_id`) REFERENCES `food` (`id`);

--
-- Các ràng buộc cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_kind_res` FOREIGN KEY (`kind`) REFERENCES `kinds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
