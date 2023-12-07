-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 07:55 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(10, 'okoakdo', 6, 50, '2023-11-03'),
(52, 'aesfawef', 6, 34, '2023-11-29'),
(53, 'ok', 6, 34, '2023-11-29'),
(63, 'Sản phẩm rất đẹp', 2, 48, '2023-11-30'),
(72, 'ok', 2, 34, '2023-11-30'),
(74, 'Đã binh luận đc', 2, 34, '2023-11-30'),
(75, 'Đã binh luận đc', 2, 41, '2023-11-30'),
(76, 'Đã binh luận đc', 2, 41, '2023-11-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(10, 'Nhà'),
(34, 'Bàn làm việc'),
(35, 'Văn phòng'),
(37, 'Công ty'),
(41, 'Tất cả'),
(42, 'Căn hộ 2 tầng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `giamua` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_order`, `id_pro`, `giamua`, `soluong`, `thanhtien`) VALUES
(15, 9, 34, 40, 1, 40),
(16, 10, 41, 240, 1, 240),
(17, 11, 41, 240, 2, 480),
(18, 12, 34, 40, 1, 40),
(19, 13, 41, 240, 1, 240),
(20, 14, 34, 40, 1, 40),
(21, 15, 34, 40, 1, 40),
(22, 16, 34, 40, 11, 440),
(23, 17, 41, 240, 1, 240);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(34, 'Elona bedside grey table', 40.00, 'product-01.jpg', 'This elegant and modern sofa features plush cushions and a sleek design, perfect for adding style and comfort to your living room.', 0, 10),
(41, 'Simple                                                                     minimal                                                                     Chair', 240.00, 'product-02.jpg', 'Our spacious and functional dining table set is made from high-quality wood, providing a beautiful centerpiece for family meals and gatherings.', 0, 34),
(44, '                                                                     Pendant                                                                     Chandelier                                                                     Light', 240.00, 'product-03.jpg', 'Create a cozy and inviting atmosphere in your bedroom with our luxurious upholstered bed frame, complete with tufted headboard and sturdy construction.', 0, 35),
(45, 'High                                                                 quality                                                                 vase                                                                 bottle', 240.00, 'product-05.jpg', 'Enhance your workspace with our ergonomic office chair, designed for optimal comfort and support during long hours of work.', 0, 37),
(46, 'Living                                                                 &                                                                 Bedroom                                                                 Chair', 200.00, 'product-06.jpg', 'Add a touch of sophistication to your home with our contemporary glass coffee table, featuring a unique geometric base and a tempered glass top.', 0, 34),
(48, 'Herman                                                                 Arm Grey                                                                 Chair', 0.00, 'product-04.jpg', 'Experience ultimate relaxation with our reclining massage chair, equipped with multiple massage modes and heat therapy for a soothing experience.', 0, 10),
(49, 'Wooden                                                                     decorations', 320.00, 'product-08.jpg', 'Our versatile and stylish storage ottoman serves as both a comfortable footrest and a convenient storage solution for blankets, pillows, and more.', 0, 35),
(50, 'Herman                                                                     Seater                                                                     Sofa', 240.00, 'product-07.jpg', 'Transform your outdoor space with our patio furniture set, including a durable table and comfortable chairs, perfect for enjoying meals and relaxation in the fresh air.', 0, 34),
(51, 'Reece                                                                     Seater                                                                     Sofa', 1000.00, 'product-09.jpg', 'Upgrade your entertainment area with our sleek TV stand, designed to accommodate large flat-screen TVs and provide ample storage space for media devices.', 0, 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(2, 'hlong', '123456', 'longhh7@fpt.edu.vn', NULL, NULL, 2),
(3, 'ttrung', '1234565', 'trungnt173@fpt.edu.vn', 'Hà Nội', NULL, 2),
(5, 'admin', '123456', '', NULL, NULL, 1),
(6, 'test', '123', '', NULL, NULL, 0),
(7, 'hientoc', '12345', 'anhtamnguyen92@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `pttt` tinyint(4) NOT NULL COMMENT '1. Thanh toán khi nhận hàng\r\n2. Chuyển khoản',
  `ngaydathang` datetime NOT NULL DEFAULT current_timestamp(),
  `trangthai` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Đang chờ duyệt\r\n2. Đã xác nhận\r\n3. Đang vận chuyển\r\n4. Hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `hoten`, `sdt`, `email`, `diachi`, `tongtien`, `pttt`, `ngaydathang`, `trangthai`) VALUES
(7, 35, '45454', '3232', 'anhtamnguyen92@gmail.com', '0', 660000, 1, '2023-11-29 02:20:08', 1),
(8, 7, 'anhdv', '0943190618', 'anhtamnguyen92@gmail.com', '0', 240, 1, '2023-11-30 20:04:32', 1),
(9, 7, 'hagiang', '0943190618', 'anhtamnguyen92@gmail.com', '0', 40, 1, '2023-12-01 21:50:49', 1),
(10, 7, '', '0943190618', 'anhtamnguyen92@gmail.com', '0', 240, 1, '2023-12-01 22:00:58', 1),
(11, 0, 'vietanh123456789', '0377297920', 'huyenanhshop266@gmail.com', '0', 480, 1, '2023-12-05 18:44:32', 1),
(12, 7, '', '', '', '0', 40, 1, '2023-12-05 23:55:38', 1),
(13, 7, 'vietanh123456789', '0377297920', 'huyenanhshop266@gmail.com', '0', 240, 1, '2023-12-05 23:56:18', 1),
(14, 7, 'anhdv', '0377297920', 'huyenanhshop266@gmail.com', '0', 40, 1, '2023-12-06 00:21:55', 1),
(15, 7, 'anhdv', '0377297920', 'huyenanhshop266@gmail.com', '0', 40, 1, '2023-12-06 00:44:57', 1),
(16, 6, 'anhdv', '0377297920', 'huyenanhshop266@gmail.com', '0', 440, 2, '2023-12-06 00:49:59', 1),
(17, 6, 'vietanh123456789', '0377297920', 'huyenanhshop266@gmail.com', 'SỐ 4 ngõ 395 xuân đỉnh', 240, 1, '2023-12-06 00:52:08', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
