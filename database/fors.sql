-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2021 lúc 11:28 AM
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
-- Cơ sở dữ liệu: `fors`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updated_at`, `created_at`) VALUES
(1, 'murja', '202cb962ac59075b964b07152d234b70', '0000-00-00', '0000-00-00'),
(2, 'thien', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_made` varchar(255) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `basket`
--

INSERT INTO `basket` (`id`, `customer_name`, `contact_number`, `address`, `email`, `total`, `status`, `date_made`, `updated_at`, `created_at`) VALUES
(13, 'Wada', '08065463632', 'Wadagailcom', 'gg@gmail.com', '700', 'pending', '2016-12-31 15:50:21', 0, 0),
(14, 'thien', '123456789', '123', '123@gmail.com', '50', 'pending', '2021-01-10 13:12:49', 0, 0),
(15, 'Mi', '84971097399', 'abc', 'abc@gmail.com', '50', 'pending', '2021-01-12 13:43:23', 0, 0);

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
(1, 'Món chính', 'Các món ăn chính', '2021-01-14', '0000-00-00'),
(2, 'Lunch', 'Danh mục đồ ăn tối', '0000-00-00', '0000-00-00'),
(3, 'Dinner', 'Danh mục đồ ăn trưa', '0000-00-00', '0000-00-00'),
(4, 'Khai vị', 'Các món ăn đặc biệt', '2021-01-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
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
  `food_highlight` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_price`, `food_description`, `cate_id`, `food_img`, `food_highlight`, `updated_at`, `created_at`) VALUES
(1, 'spicyburger', '50.00', 'Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante Donec eu libero sit amet quam egestas semper Aenean ultricies mi vitae est Mauris placerat eleifend leo Quisque sit amet est et sapien ullamcorper pharetra Vestibulum erat wisi condimentum sed commodo vitae', 2, '', 0, '0000-00-00', '0000-00-00'),
(2, 'snailchoc', '50.00', 'Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante Donec eu libero sit amet quam egestas semper Aenean ultricies mi vitae est Mauris placerat eleifend leo Quisque sit amet est et sapien ullamcorper pharetra Vestibulum erat wisi condimentum sed commodo vitae', 1, '', 0, '0000-00-00', '0000-00-00'),
(3, 'salad', '50.00', 'Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante Donec eu libero sit amet quam egestas semper Aenean ultricies mi vitae est Mauris placerat eleifend leo Quisque sit amet est et sapien ullamcorper pharetra Vestibulum erat wisi condimentum sed commodo vitae', 2, '', 0, '0000-00-00', '0000-00-00'),
(4, 'pizza', '350.00', 'Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante Donec eu libero sit amet quam egestas semper Aenean ultricies mi vitae est Mauris placerat eleifend leo Quisque sit amet est et sapien ullamcorper pharetra Vestibulum erat wisi condimentum sed commodo vitae', 2, '', 0, '0000-00-00', '0000-00-00'),
(5, 'shawarma', '350.00', 'Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante Donec eu libero sit amet quam egestas semper Aenean ultricies mi vitae est Mauris placerat eleifend leo Quisque sit amet est et sapien ullamcorper pharetra Vestibulum erat wisi condimentum sed commodo vitae', 1, '', 0, '0000-00-00', '0000-00-00'),
(6, 'Rice', '50.00', 'This is a tasty meal i bet you dont want miss enjoying the yummy taste', 2, '', 0, '0000-00-00', '0000-00-00'),
(7, 'Jellyfish', '400', 'Try this delicay and i promise you will keep coming back for more', 1, '', 0, '0000-00-00', '0000-00-00'),
(8, 'Ice Cream', '4000', 'desc', 4, '', 0, '0000-00-00', '0000-00-00'),
(9, 'Pounded Yam', '800', 'This is one of our best meal and it is prepared deliciously for you', 3, '', 0, '0000-00-00', '0000-00-00'),
(10, 'Eba and Vegetable', '600', 'This is a very nice combination', 3, '', 0, '0000-00-00', '0000-00-00'),
(11, 'Somovita and Egusi soup', '800', 'Semovita is one of the delicacies you definitely want to try for breakfast', 1, '', 0, '0000-00-00', '0000-00-00'),
(12, 'sushi', '500', 'Very good', 4, '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`item_id`, `order_id`, `food`, `qty`, `updated_at`, `created_at`) VALUES
(1, '13', 'pizza', '2', '0000-00-00', '0000-00-00'),
(2, '14', 'snailchoc', '1', '0000-00-00', '0000-00-00'),
(3, '15', 'spicyburger', '1', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `no_of_guest` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_res` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `suggestions` varchar(100) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `no_of_guest`, `email`, `phone`, `date_res`, `time`, `suggestions`, `updated_at`, `created_at`) VALUES
(1, '2', 'abdulflezy13@yahoo.com', '09087676543', '2016-12-14', '15:00', 'suggestions suggestions suggestions', '0000-00-00', '0000-00-00'),
(2, '2', 'abdulflezy13@ymail.com', '09087676546', '2016-12-30', '18:00', 'suggestions suggestions suggestions', '0000-00-00', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `FK_category_food` (`cate_id`);

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Chỉ mục cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `FK_category_food` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
