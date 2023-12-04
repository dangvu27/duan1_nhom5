-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2023 lúc 05:28 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_BL` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `thoi_gian` datetime NOT NULL,
  `id_TK` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_BL`, `noi_dung`, `thoi_gian`, `id_TK`, `id_phong`, `active`) VALUES
(13, '1223123', '2023-11-17 00:00:00', 7, 1, 1),
(14, '213wdd', '2023-11-18 00:00:00', 7, 2, 2),
(15, 'sjdkjsfsjfsjkf', '2023-12-04 03:31:40', 7, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_phong`
--

CREATE TABLE `dat_phong` (
  `id_DP` varchar(25) NOT NULL,
  `ten_KH` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `ngay_dat` date NOT NULL,
  `ngay_den` date NOT NULL,
  `ngay_ve` date NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1,
  `thanh_tien` int(100) NOT NULL,
  `id_TK` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `ghichu` text DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_phong`
--

INSERT INTO `dat_phong` (`id_DP`, `ten_KH`, `email`, `SDT`, `ngay_dat`, `ngay_den`, `ngay_ve`, `trang_thai`, `thanh_tien`, `id_TK`, `id_phong`, `ghichu`, `active`) VALUES
('656', 'quoc anh', '1123@ddd', '12', '2023-12-03', '2023-12-12', '2023-12-17', 6, 2505, 7, 1, '', 1),
('656d3061b64', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-01', '2024-01-02', 6, 501, 7, 1, '', 1),
('656d30ec9b891', 'quoc anh', '1123@ddd', '567', '2023-12-04', '2024-01-07', '2024-01-08', 2, 1007, 7, 3, '', 1),
('656d37a76ce0b', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-15', '2024-01-16', 2, 1007, 7, 3, '', 1),
('656d3c337f439', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-22', '2024-01-23', 2, 1007, 7, 3, '', 1),
('656d465b5a838', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-15', '2024-01-16', 2, 501, 7, 1, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_KH` int(11) NOT NULL,
  `ten` varchar(299) NOT NULL,
  `tuoi` int(11) NOT NULL,
  `SDT` int(11) NOT NULL,
  `diachi` varchar(299) NOT NULL,
  `CCCD` int(11) NOT NULL,
  `id_TK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_KH`, `ten`, `tuoi`, `SDT`, `diachi`, `CCCD`, `id_TK`) VALUES
(3, 'quoc anh', 12, 2321323, '1231', 2147483647, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loaiphong` int(11) NOT NULL,
  `ten_LP` varchar(299) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id_loaiphong`, `ten_LP`, `active`) VALUES
(1, 'Phòng Đơn', 1),
(2, 'Phòng Đôi', 1),
(3, 'Phòng Trung Tâm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(11) NOT NULL,
  `ten_phong` varchar(299) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL,
  `id_loaiphong` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id_phong`, `ten_phong`, `gia`, `mota`, `id_loaiphong`, `img`, `active`) VALUES
(1, 'phong 1', 501, 'Hãy để chuyến đi của quý khách có một khởi đầu tuyệt vời khi ở lại khách sạn này, nơi có Wi-Fi miễn phí trong tất cả các phòng. Nằm ở vị trí chiến lược tại Quận Hoàn Kiếm, cho phép quý khách lui tới và gần với các điểm thu hút và tham quan địa phương. Đừng rời đi trước khi ghé thăm Phố Cổ nổi tiếng. Được xếp hạng 3 sao, chỗ nghỉ chất lượng cao này cho phép khách nghỉ sử dụng mát-xa, bồn tắm nước nóng và nhà hàng ngay trong khuôn viên.', 2, 'g-6.jpg', 1),
(2, 'phong 2', 1000, 'Nằm ở ngay trung tâm Hà Nội, cách Ô Quan Chưởng 2 phút đi bộ, OldHouseinOldStreet/1BR/1sofabed cung cấp chỗ nghỉ có điều hòa, Wi-Fi miễn phí và TV màn hình phẳng. Căn hộ này cách Đền Quán Thánh 2 km và Tràng Tiền Plaza 19 phút đi bộ.\r\n\r\nCăn hộ có ban công, 1 phòng ngủ, phòng khách và bếp đầy đủ tiện nghi với tủ lạnh.\r\n\r\nCác điểm tham quan nổi tiếng gần căn hộ bao gồm Nhà hát múa rối Thăng Long, Hồ Hoàn Kiếm và Nhà thờ Thánh Joseph. Sân bay gần nhất là Sân bay Quốc tế Nội Bài, cách OldHouseinOldStreet/1BR/1sofabed 23 km', 3, 'g-7.jpg', 1),
(3, 'phong 3', 1007, 'Nằm ở ngay trung tâm Hà Nội, cách Ô Quan Chưởng 2 phút đi bộ, OldHouseinOldStreet/1BR/1sofabed cung cấp chỗ nghỉ có điều hòa, Wi-Fi miễn phí và TV màn hình phẳng. Căn hộ này cách Đền Quán Thánh 2 km và Tràng Tiền Plaza 19 phút đi bộ.\r\n\r\nCăn hộ có ban công, 1 phòng ngủ, phòng khách và bếp đầy đủ tiện nghi với tủ lạnh.\r\n\r\nCác điểm tham quan nổi tiếng gần căn hộ bao gồm Nhà hát múa rối Thăng Long, Hồ Hoàn Kiếm và Nhà thờ Thánh Joseph. Sân bay gần nhất là Sân bay Quốc tế Nội Bài, cách OldHouseinOldStreet/1BR/1sofabed 23 km', 1, 'g-1.jpg', 1),
(7, 'phong 3.16', 1007, 'nfufyensdấdjkasdsajdk', 3, 'p-5.jpg', 1),
(8, 'phong 56', 1003, 'sdfghjkjhgfdsdfg  egrgerg erg r thy ju   ew eh h ht hrth', 2, 'p-2.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_TK` int(11) NOT NULL,
  `userName` varchar(299) NOT NULL,
  `pass` varchar(299) NOT NULL,
  `email` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_TK`, `userName`, `pass`, `email`, `SDT`, `role`, `active`) VALUES
(5, 'admin', '123', 'nguyendnagvu@hsjsf', '1221323', 1, 1),
(6, 'sdfsdfsdfsdfsdfasd', '1233', 'sàasf213124', '1234', 2, 1),
(7, 'quocanh', '12344', '1123', '12', 2, 1),
(8, 'hungcv', '123', 'vundph33089@fpt.edu.vn', '0974290440', 2, 1),
(9, 'vundph33089', '1234', 'nguyendangvuvinhtuong@gmail.com', '0974290441', 2, 1),
(11, 'qqq1', '123', 'dangvu.27@dddd', '2321323', 2, 1),
(12, 'qqq', '123', 'vundph@gmail.com', '0974290440', 2, 1),
(13, 'admin11', '11324', 'vundph33089@fpt.edu.vn11', '0974290440', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` tinyint(4) NOT NULL,
  `ten_tt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `ten_tt`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Đang xử lý'),
(3, 'Đã xác nhận'),
(4, 'Check-in'),
(5, 'Hoàn Thành'),
(6, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id_role` tinyint(4) NOT NULL,
  `ten_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id_role`, `ten_role`) VALUES
(1, 'Quản Trị Viên'),
(2, 'Khách Hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_BL`),
  ADD KEY `lk_binh_luan_phong` (`id_phong`),
  ADD KEY `lk_binh_luan_taikhoan` (`id_TK`);

--
-- Chỉ mục cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`id_DP`),
  ADD KEY `lk_dat_phong_taikhoan` (`id_TK`),
  ADD KEY `lk_datphong_phong` (`id_phong`),
  ADD KEY `lk_datphong_trangthai` (`trang_thai`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_KH`),
  ADD KEY `lk_taikhoan_khachhang` (`id_TK`);

--
-- Chỉ mục cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loaiphong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `lk_phong_loai_phong` (`id_loaiphong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_TK`),
  ADD KEY `lk_taikhoan_role` (`role`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_BL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id_loaiphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id_role` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_binh_luan_phong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE,
  ADD CONSTRAINT `lk_binh_luan_taikhoan` FOREIGN KEY (`id_TK`) REFERENCES `taikhoan` (`id_TK`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD CONSTRAINT `lk_dat_phong_taikhoan` FOREIGN KEY (`id_TK`) REFERENCES `taikhoan` (`id_TK`) ON DELETE CASCADE,
  ADD CONSTRAINT `lk_datphong_phong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE,
  ADD CONSTRAINT `lk_datphong_trangthai` FOREIGN KEY (`trang_thai`) REFERENCES `trangthai` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `lk_taikhoan_khachhang` FOREIGN KEY (`id_TK`) REFERENCES `taikhoan` (`id_TK`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `lk_phong_loai_phong` FOREIGN KEY (`id_loaiphong`) REFERENCES `loai_phong` (`id_loaiphong`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `lk_taikhoan_role` FOREIGN KEY (`role`) REFERENCES `vaitro` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
