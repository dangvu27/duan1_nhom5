-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2023 lúc 05:41 PM
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
('656d30ec9b891', 'quoc anh', '1123@ddd', '567', '2023-12-04', '2024-01-07', '2024-01-08', 2, 1007, 7, 3, '', 1),
('656d37a76ce0b', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-15', '2024-01-16', 2, 1007, 7, 3, '', 1),
('656d3c337f439', 'quoc anh', '1123@ddd', '12', '2023-12-04', '2024-01-22', '2024-01-23', 2, 1007, 7, 3, '', 1);

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
(2, 'phong 2', 1000, 'Nằm ở ngay trung tâm Hà Nội, cách Ô Quan Chưởng 2 phút đi bộ, OldHouseinOldStreet/1BR/1sofabed cung cấp chỗ nghỉ có điều hòa, Wi-Fi miễn phí và TV màn hình phẳng. Căn hộ này cách Đền Quán Thánh 2 km và Tràng Tiền Plaza 19 phút đi bộ.\r\n\r\nCăn hộ có ban công, 1 phòng ngủ, phòng khách và bếp đầy đủ tiện nghi với tủ lạnh.\r\n\r\nCác điểm tham quan nổi tiếng gần căn hộ bao gồm Nhà hát múa rối Thăng Long, Hồ Hoàn Kiếm và Nhà thờ Thánh Joseph. Sân bay gần nhất là Sân bay Quốc tế Nội Bài, cách OldHouseinOldStreet/1BR/1sofabed 23 km', 3, 'g-7.jpg', 1),
(3, 'phong 3', 1007, 'Nằm ở ngay trung tâm Hà Nội, cách Ô Quan Chưởng 2 phút đi bộ, OldHouseinOldStreet/1BR/1sofabed cung cấp chỗ nghỉ có điều hòa, Wi-Fi miễn phí và TV màn hình phẳng. Căn hộ này cách Đền Quán Thánh 2 km và Tràng Tiền Plaza 19 phút đi bộ.\r\n\r\nCăn hộ có ban công, 1 phòng ngủ, phòng khách và bếp đầy đủ tiện nghi với tủ lạnh.\r\n\r\nCác điểm tham quan nổi tiếng gần căn hộ bao gồm Nhà hát múa rối Thăng Long, Hồ Hoàn Kiếm và Nhà thờ Thánh Joseph. Sân bay gần nhất là Sân bay Quốc tế Nội Bài, cách OldHouseinOldStreet/1BR/1sofabed 23 km', 1, 'g-1.jpg', 1),
(7, 'phong 3.16', 1007, 'Tọa lạc tại thành phố Hà Nội, cách trung tâm thương mại Vincom Center Nguyễn Chí Thanh 3,1 km, MIA HOTEL cung cấp chỗ nghỉ với trung tâm thể dục, chỗ đỗ xe riêng miễn phí, khu vườn và sảnh khách chung. Khách sạn 4 sao này cung cấp dịch vụ phòng, dịch vụ lễ tân 24 giờ và WiFi miễn phí. Khách sạn có sân hiên và tầm nhìn ra thành phố. Du khách có thể dùng bữa tại nhà hàng hoặc nhâm nhi đồ uống ở quầy bar.', 3, 'p-5.jpg', 1),
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
(13, 'admin11', '11324', 'vundph33089@fpt.edu.vn11', '0974290440', 2, 1),
(14, 'admin1', '$2y$10$drvUauABfhr.WQ05WwEDB.IK9K/fr5prvo/Lsb3i0q06VS2Ml1qVm', 'admin1@example.com', '123456789', 1, 1),
(15, 'admin2', '$2y$10$jU4CA/zvQgYtABdYrZzQo.5T/X4WziPxpdHOWXsabZ3VzqP1CUYQK', 'admin2@example.com', '123456789', 1, 1),
(16, 'admin3', '$2y$10$EWiGtLHDZWcykjcDt7KZPON.48TdMtVGOjTiIJL2Uvqxn/Key/Gjy', 'admin3@example.com', '123456789', 1, 1),
(17, 'admin4', '$2y$10$TCw9aRWDij2YBh1U2/4Z1.U5UIapPJ6qt.K1yGyvcIQVUQCnOjryi', 'admin4@example.com', '123456789', 1, 1),
(18, 'admin5', '$2y$10$AwwRlqITRSbKAs4k52s4m.ikQ.r9.va8w6kZT4/mCRiz1M0V1W3de', 'admin5@example.com', '123456789', 1, 1),
(19, 'admin6', '$2y$10$/yiyUETnurN.HNY4wnyl4eP5Qu/oiMQcRQqtvsX534FWYYY2ytZk6', 'admin6@example.com', '123456789', 1, 1),
(20, 'admin7', '$2y$10$ocLm7IuazY23248cqo6KV.SSS9x/4Ti4Vo2AF592BCuH4KF8to40K', 'admin7@example.com', '123456789', 1, 1),
(21, 'admin8', '$2y$10$H18X8OBhmyLcfjXBBVX1Fu4BHg.9SH1brZZtbptWCJ7fw0S5EXviu', 'admin8@example.com', '123456789', 1, 1),
(22, 'admin9', '$2y$10$akZh1DKaKsjD.XPzasxIceMW7vBf4lBylpbt/EO18lix6nWN2C8hi', 'admin9@example.com', '123456789', 1, 1),
(23, 'admin10', '$2y$10$VdA6wWHovePoPzv6/4VWTeW3jUjwCXoBQ4xCS9ctvdAEm.vz345RG', 'admin10@example.com', '123456789', 1, 1),
(24, 'customer1', '$2y$10$SyT02D3exvnYBWuJFrMV4e9pJwfqk1OcjLZ39Sos3l2RaXzbjNVfO', 'customer1@example.com', '987654321', 2, 1),
(25, 'customer2', '$2y$10$tt3rBS8XM9WRQoxWFn81pO5LAyXKBuDZ/hY4xWrhY23uM/ifIyms.', 'customer2@example.com', '987654321', 2, 1),
(26, 'customer3', '$2y$10$f75yYqSPHyIvxiBukJUZG.mSFoxXxP0mz4cLfagVTUrE0WEr9SDtq', 'customer3@example.com', '987654321', 2, 1),
(27, 'customer4', '$2y$10$Uh1t9d9GUEj894A.rtRTo.TUFoeeQ6DKGwRPGZo7PEAj9uuu4LpdG', 'customer4@example.com', '987654321', 2, 1),
(28, 'customer5', '$2y$10$K9g8gaL1O3g1g0.Ah18ao.QerhmCq0PrA0UcHjsrnYUttNu97loEO', 'customer5@example.com', '987654321', 2, 1),
(29, 'customer6', '$2y$10$A03vYT.9XcOEu5c6R44Y3e8JM0aIN0HzpA26.JsgyxRrVx8IXnT96', 'customer6@example.com', '987654321', 2, 1),
(30, 'customer7', '$2y$10$p3PHcMwzeWE3fZvX3UWAluYG/vTHF2zm/v1NhfLhJdmrp8cPrTICW', 'customer7@example.com', '987654321', 2, 1),
(31, 'customer8', '$2y$10$J8UXIZGJTqGvn9g4AEdx2uNHAJBtOT6tNKqbEWGTKKSo6oVZE18UW', 'customer8@example.com', '987654321', 2, 1),
(32, 'customer9', '$2y$10$egdCSCLBv3ysrs5P8zDtGepmVI4vi77zXWJ76SgrwwAgzJ4nXZE3u', 'customer9@example.com', '987654321', 2, 1),
(33, 'customer10', '$2y$10$8XXTbjE9t8j7/x5W.GpzqeXgSzUKIWdz/8rDIYo5Mlz903PxwXN/6', 'customer10@example.com', '987654321', 2, 1),
(34, 'customer11', '$2y$10$omvNqv3/7eZva3e2Z2r9Cu/4/ZTUZR2bj6SbawWguoZYQ896EOxY2', 'customer11@example.com', '987654321', 2, 1),
(35, 'customer12', '$2y$10$Ylb7mYkzFXj3Ll7plnUZWuLxywuBwzovbz.1SMm9bxQf0EkooCouS', 'customer12@example.com', '987654321', 2, 1),
(36, 'customer13', '$2y$10$20.PFOGgDqWNxLoIMUd8a./9enIxX9/yOd0WaxArDSW/7GNxQ2HU6', 'customer13@example.com', '987654321', 2, 1),
(37, 'customer14', '$2y$10$AJA1bVmc4bZ79SWuepiBuOyFcqLbO44hzUoLazmDs/XzHLCXE/zaW', 'customer14@example.com', '987654321', 2, 1),
(38, 'customer15', '$2y$10$8A1hR5wv1VkaRN1ZpjI8cu9XRe3/p1Bj3MTW38BFf8T2uFZRyl7XC', 'customer15@example.com', '987654321', 2, 1),
(39, 'customer16', '$2y$10$DquzA0EtpkfNPVt95dLiVeONa5UQm00xuoawbw5/ld18NrtVXaecm', 'customer16@example.com', '987654321', 2, 1),
(40, 'customer17', '$2y$10$bkNiY1c7Ru4yi0hLwInVNOIOujcpJzX.ICQTor.KB2oLkOR3k6ZzK', 'customer17@example.com', '987654321', 2, 1),
(41, 'customer18', '$2y$10$haXMMw8.oNcLkA6Mef661eMqUXGiMEqgLtIo45O0Tt0OOhH245PXe', 'customer18@example.com', '987654321', 2, 1),
(42, 'customer19', '$2y$10$pqbP38VvRh.mVThtdEJMyezXZYj0qHst2r8MKArHXLKOZhsVyPQFu', 'customer19@example.com', '987654321', 2, 1),
(43, 'customer20', '$2y$10$hsqwUPulzMd8A4Mpp76TRu1YZDuN/DmGiSFvFEo2kspHg8F3c7BpS', 'customer20@example.com', '987654321', 2, 1),
(44, 'customer21', '$2y$10$/sJLT8z50X7ikjwl5Cg02.0.gLxGAF0LnpyL5MIuLPXYTMfoSH4Qi', 'customer21@example.com', '987654321', 2, 1),
(45, 'customer22', '$2y$10$zEJyaUQVz6SAENFCf33h0uYWQ00gJsrpmJNpQwfrm1lw1cZO/y5M6', 'customer22@example.com', '987654321', 2, 1),
(46, 'customer23', '$2y$10$QL2gHNmkhjWGuVPeAO0RN.gN.7eAGCXK.xUboOjfzwSkt7tMrffY.', 'customer23@example.com', '987654321', 2, 1),
(47, 'customer24', '$2y$10$mZ1NPELco8.Bpa/q17l0Ied1OgdPsbqbQahDNM.yps.I5ES1BZ0yi', 'customer24@example.com', '987654321', 2, 1),
(48, 'customer25', '$2y$10$0TPHTamcG4VORo7tp5ijbOvkfxc8/7.jdDUBQDFVthfg9aXXQYM6y', 'customer25@example.com', '987654321', 2, 1),
(49, 'customer26', '$2y$10$acXcruGyWCed5OdCxNjV/OIowEFmJ4cCoHa1/OM7DnfP8vErEgfOC', 'customer26@example.com', '987654321', 2, 1),
(50, 'customer27', '$2y$10$kDmGiZbV1Q.Pv64/IiZmDOYFO1KlfzgMUqHALEQApzQRfa6g..05e', 'customer27@example.com', '987654321', 2, 1),
(51, 'customer28', '$2y$10$0hDfYM3ZAa.EzTDwTM.9KOnmulRVFGvMP7K6p5uitOnRM2lIO319i', 'customer28@example.com', '987654321', 2, 1),
(52, 'customer29', '$2y$10$HB6E2kKn4mIIL4jR2L.8B.OmejoRKnXZjOO8bY3PBt7hbAQsgtAdW', 'customer29@example.com', '987654321', 2, 1),
(53, 'customer30', '$2y$10$QNvRkHBHtc0RX1t.iIbGRuu.9AwVGrZo.Z/UxPzCKoy2Qd0bKmZyK', 'customer30@example.com', '987654321', 2, 1),
(54, 'customer31', '$2y$10$M09h65leJPzPiUZWBwbm..5Gpxb1vYQYWlgpkN5dWP0VCZW4M7AEy', 'customer31@example.com', '987654321', 2, 1),
(55, 'customer32', '$2y$10$.eqhEqMq1EGgMJB5cqhl6uaHGVD.1sucZblj7zVUlZZRUAuAOp.Yq', 'customer32@example.com', '987654321', 2, 1),
(56, 'customer33', '$2y$10$XuuzPaixhzTZwMSyPaNcYeLeQOCtVyC36uL.9eQm.f0m7dV9pcsxO', 'customer33@example.com', '987654321', 2, 1),
(57, 'customer34', '$2y$10$mb3F5nqghiufwb858oNvFuI086Vo4qz3ZeQvt4nL2vpDAgsxSB0qK', 'customer34@example.com', '987654321', 2, 1),
(58, 'customer35', '$2y$10$mN7Y6dWKEkueEvJ6qLKOL.7nXoPipPvNWhYRjCndPKaGN9IXQcTUa', 'customer35@example.com', '987654321', 2, 1),
(59, 'customer36', '$2y$10$rlZ4M1o3mQpWcgCwkQbYp.Eh5Z4TFJ5dd2Nq8z8Wntvpzm8rQ8O3y', 'customer36@example.com', '987654321', 2, 1),
(60, 'customer37', '$2y$10$41UGyMLkB8a5QbgrCk0TgeJ7OIX5oBKzebWsJOOnZPr2H4cfrMZDW', 'customer37@example.com', '987654321', 2, 1),
(61, 'customer38', '$2y$10$ASymPPDBmQlejd2ypbOlNuIq/F1g9xBG6CFIL0gro82Vb.hTZoPHu', 'customer38@example.com', '987654321', 2, 1),
(62, 'customer39', '$2y$10$TipJUBUTkgdXsEqwjVvMAeRuwXF5S53Sn6J4R65zGOcOLF.QQ789m', 'customer39@example.com', '987654321', 2, 1),
(63, 'customer40', '$2y$10$WXb11UfFn4.ItmAjVwwNFOYB.X36tM9KZcHCwU7kASf5k2gL10/Qi', 'customer40@example.com', '987654321', 2, 1),
(64, 'customer41', '$2y$10$6a0YVmi6PMC8.QudYGK6iujU7VkU6QT10ZPhxFLRzd3BFeazp3p5O', 'customer41@example.com', '987654321', 2, 1),
(65, 'customer42', '$2y$10$TNDsQP2jlt37mQYGKhXLquc5BnB2RXdx7lf92uYVtJC1t5xHmTY96', 'customer42@example.com', '987654321', 2, 1),
(66, 'customer43', '$2y$10$9XO9VwLnmrv2bGgCmZNYYe2VgbhUUGdC42ZtorRjSYDZMYxyiUt/y', 'customer43@example.com', '987654321', 2, 1),
(67, 'customer44', '$2y$10$pap43pkzSBqoNk4M7lOoBOL3K01MAMaRw33LIVfMF9Zhg6E4rHFV6', 'customer44@example.com', '987654321', 2, 1),
(68, 'customer45', '$2y$10$yd4ItJSq6AcYh49FEh..ZOYed4LWWDqZLQlOh8Cd2BMR2tV1X4cCa', 'customer45@example.com', '987654321', 2, 1),
(69, 'customer46', '$2y$10$OxZjTXx1nkHMBijaM1GkzuHIMkD74htNKY66FO05MMzoA6yXu1sui', 'customer46@example.com', '987654321', 2, 1),
(70, 'customer47', '$2y$10$1zs9S7ySA/vzapKbGAd09uuH.mJItHMwxYNgQ4ap758QkqF6JdlgS', 'customer47@example.com', '987654321', 2, 1),
(71, 'customer48', '$2y$10$h/z9EgV0gsX/OdX82eP/fenxPhygwy64at6.zmWO0PDLnPzWjAJ52', 'customer48@example.com', '987654321', 2, 1),
(72, 'customer49', '$2y$10$W/hXyHd0KNRpHbGpUp5kAuk.i8WkihkYMx1OkPmi0CWFU43UyufH6', 'customer49@example.com', '987654321', 2, 1),
(73, 'customer50', '$2y$10$8JXB7LqCg6iP1XPYEdx6Q.QUTGmeUUUDTjiPPdljbjXP2DHIilZR.', 'customer50@example.com', '987654321', 2, 1),
(74, 'customer51', '$2y$10$2MJx4kpCmmX23hha/W9x3ueZdfQF7IINOhEY6r0JradMwNGWxsF5a', 'customer51@example.com', '987654321', 2, 1),
(75, 'customer52', '$2y$10$c.l1PNP49TyJsHbnPlKfL.Z/luF.9/dlU34N7UAuQikBK1RcAsP4O', 'customer52@example.com', '987654321', 2, 1),
(76, 'customer53', '$2y$10$P/vpUL7x9nW0voOo.Cwmb.y0qx44j8za.DeAQSGo.QRHDDmkDrQrG', 'customer53@example.com', '987654321', 2, 1),
(77, 'customer54', '$2y$10$oybUg0w2KgG1Z7DOynyfuuL9ECKDFj.VgXYUAfbW2tcG6Fg8bNwJG', 'customer54@example.com', '987654321', 2, 1),
(78, 'customer55', '$2y$10$ngF8O4HlkwxC4XKC0Ty/je9s/h7xgluZuzx1JaXFMEwTbACWEp0q2', 'customer55@example.com', '987654321', 2, 1),
(79, 'customer56', '$2y$10$XdWZoeaEiPm5JHp9DHETUeQUBsR4QHGrLpc2ma75J7S6Ah4VXduCq', 'customer56@example.com', '987654321', 2, 1),
(80, 'customer57', '$2y$10$hh2DiW0hmipcD2foY0boUujbktAj3wuFKnmx3PqOTQ2fqPxUZAVam', 'customer57@example.com', '987654321', 2, 1),
(81, 'customer58', '$2y$10$nnF3Ba1wjzQPqltVwS6K6eGjuZpkNm9R.1z3vrAypjf5roX765aly', 'customer58@example.com', '987654321', 2, 1),
(82, 'customer59', '$2y$10$rh3sdDbHTPZptqSOlVNob.605lG9oRMPFuCsb3hydrOdE.Kmwf5Tm', 'customer59@example.com', '987654321', 2, 1),
(83, 'customer60', '$2y$10$KlIrmRpCZhfC.FWIrxpZI.mNTRPrBPVq2hwcOduyWviPMzM9XfeAm', 'customer60@example.com', '987654321', 2, 1),
(84, 'customer61', '$2y$10$TFmOAzToYnM4DaHrHc8zv.rzZxn6mU8KsN50n84n8qmxkYHVCrmAW', 'customer61@example.com', '987654321', 2, 1),
(85, 'customer62', '$2y$10$bk9rnC9hAjnuCP6R.ECk/uQ0nFDQmeGxollyMzTSSLopWcaiwNhL6', 'customer62@example.com', '987654321', 2, 1),
(86, 'customer63', '$2y$10$Sg8iThVcZDFl.Yxkbv0jiuCXDrFA7l73.viMz20Y.7IQEk8ucvDfO', 'customer63@example.com', '987654321', 2, 1),
(87, 'customer64', '$2y$10$569Kuh7CQWEJZqZPS8xpjukh5IoPk1HNNGUaPnEHI2bOMotAWld1G', 'customer64@example.com', '987654321', 2, 1),
(88, 'customer65', '$2y$10$lhFKP/59sR2kj9cP4MlDoO9GbyrqCyEx0.Fe.aUuxevOnduVm.RFe', 'customer65@example.com', '987654321', 2, 1),
(89, 'customer66', '$2y$10$jx.hlA7LdvoM.pK8oc1HuevJrWxuWOqtE29nFGaxHC.pVkzQSLQfC', 'customer66@example.com', '987654321', 2, 1),
(90, 'customer67', '$2y$10$YhrwzkqInEcfVVymHPA2eu.FMKuZMzEEI43oiH93OiKB6oXp26qVi', 'customer67@example.com', '987654321', 2, 1),
(91, 'customer68', '$2y$10$S0NtgjfB7hmXwYbnzan5u.DH8x3NHj.Z2XP1vzp3O9zPyLQSaQ2Oe', 'customer68@example.com', '987654321', 2, 1),
(92, 'customer69', '$2y$10$4Al08Fgj1HXIZSJkJK.A/uxfqI/SRQnhqGiB47WEcJU6tEMtPZFk2', 'customer69@example.com', '987654321', 2, 1),
(93, 'customer70', '$2y$10$DF63ESM/Q/mMklhb2xFNP.tt13HBL1wa3S7o.ffQ.BzbfE3.A.xni', 'customer70@example.com', '987654321', 2, 1),
(94, 'customer71', '$2y$10$ROd79Z4cZays4mwmEOLAE.76bBCktZJ3t4npJY3jz5qWOnoOMMOO2', 'customer71@example.com', '987654321', 2, 1),
(95, 'customer72', '$2y$10$IXe53X5VCPQ/r.9zr9MWXOoOJxsIXuhszCCoflOYtWdcjisgVb7FK', 'customer72@example.com', '987654321', 2, 1),
(96, 'customer73', '$2y$10$JZevnYx/KUKkbJSzRnIXLO5.OgriMgbQSbKKuGCUfbfDHRHeb1Ozm', 'customer73@example.com', '987654321', 2, 1),
(97, 'customer74', '$2y$10$gc.O3upfj7ZUtxP3RaWJB.Btq3Nqisu9lTHg1NwChg3LqK9ydjyMm', 'customer74@example.com', '987654321', 2, 1),
(98, 'customer75', '$2y$10$hlOqdGT0TTghMrAjkaUlMukvQ9AvlyRLoe10NKsv8AODBD.Z/bthy', 'customer75@example.com', '987654321', 2, 1),
(99, 'customer76', '$2y$10$op7/0mzyOdkbQLnO94sHzO199KBbaxUP9N/vK5SXo3Xe/AT7Xs50K', 'customer76@example.com', '987654321', 2, 1),
(100, 'customer77', '$2y$10$z.SDKItS8HiwyVOGEnCJVepCVH8FSiS/odtN2giEojeKcW4kFf3QG', 'customer77@example.com', '987654321', 2, 1),
(101, 'customer78', '$2y$10$y.3M1l2MX0BfD0m6Imgpfu.IhtRNjFjkL02iotRHk3tXUGoYO6HcC', 'customer78@example.com', '987654321', 2, 1),
(102, 'customer79', '$2y$10$XW.dILeaQPRuvInh.itJIOGCfWryQqXjgJgNGO3qdmjB8j8lWoOH2', 'customer79@example.com', '987654321', 2, 1),
(103, 'customer80', '$2y$10$rWC9ANSIj.oou1KC75RVvOSlgTjb/UORt8BxEN2R1IbMIS4A6.cay', 'customer80@example.com', '987654321', 2, 1),
(104, 'customer81', '$2y$10$KA2EluanycnSA49/V7uD1Ogh2u4LTNa926dLusToOvGJk.99c2Gi6', 'customer81@example.com', '987654321', 2, 1),
(105, 'customer82', '$2y$10$jeUZrGC4cqE.r3GOtwqKQewTY1RnOa45xLKLuVV50xUP7Yd8ez1s2', 'customer82@example.com', '987654321', 2, 1),
(106, 'customer83', '$2y$10$e6pF5JfmqOZYxqIp6LTHmeAFJVrB2U4dlCrWoCegGEmNEW02KRWiq', 'customer83@example.com', '987654321', 2, 1),
(107, 'customer84', '$2y$10$HA51HBdVG7v5eGJLitNk9.vP3TBXCb4En/mIUAUa2vinjOkcUqaDO', 'customer84@example.com', '987654321', 2, 1),
(108, 'customer85', '$2y$10$gnjkb6.R/cwjAS.k6XcBqeSXp9gnn3NT0YU.Fsa2QZjMgm/0HPI4i', 'customer85@example.com', '987654321', 2, 1),
(109, 'customer86', '$2y$10$agN82x2T0pnvqxuL3cjGt.nEDkvrG44sZJpElxXNvSS9syeZBwXq.', 'customer86@example.com', '987654321', 2, 1),
(110, 'customer87', '$2y$10$oJRkvTtEw/yFQDAqu7Stbu8CIiXQ5yEzdfHmXJZBnFE4GITUJVrNW', 'customer87@example.com', '987654321', 2, 1),
(111, 'customer88', '$2y$10$GjxqFiLvvXOum.UAYXzETO1fqLpUHtVlIWhkLugLZLj7t/DBOLCqG', 'customer88@example.com', '987654321', 2, 1),
(112, 'customer89', '$2y$10$5b0.aNNHYxAfeHVWbFw6HuE2E4ojg4XRnXY1.CK0bRfzooSNq7baK', 'customer89@example.com', '987654321', 2, 1),
(113, 'customer90', '$2y$10$XT6rE9a.60Vp3CRrEaBsnOrpZ9eoIigzSfjq/HuG8D0FPZ0IctiZm', 'customer90@example.com', '987654321', 2, 1),
(114, 'customer91', '$2y$10$Jg1GJk1y1iD0bJsYKJ7oouUEMpk6ml1C/GRKUy8XNub9QlzEemtjK', 'customer91@example.com', '987654321', 2, 1),
(115, 'customer92', '$2y$10$FrDEWHGmydIt1mCGbHjGjuVWNqtHseFtbH9B6wCprkHSVhZqsukTu', 'customer92@example.com', '987654321', 2, 1),
(116, 'customer93', '$2y$10$NGjko8C0PNsSiiR4UPqa6O4i3nUIMFQyeuhIBaxuJSVSi32D1tWbO', 'customer93@example.com', '987654321', 2, 1),
(117, 'customer94', '$2y$10$AQNCm12hlB4kKGPXk4JGNOceOU2rvKbwP5M9sGF06M1qtlkWPTa7u', 'customer94@example.com', '987654321', 2, 1),
(118, 'customer95', '$2y$10$pCZFTqvMpycaTbcr6dy78ezmTY98p3ts6.HQZsnK1zbYnOBwo6vb6', 'customer95@example.com', '987654321', 2, 1),
(119, 'customer96', '$2y$10$CRZXN/OeTRCb8wvz.dupgeBMchaMYLEgLMdkMFXOde/.SUbPIJ8KO', 'customer96@example.com', '987654321', 2, 1),
(120, 'customer97', '$2y$10$ETptqt46PjQeYbyk7dRmz.vm8MhvpRPfz5LCEmwrfaWM9hwQGBED6', 'customer97@example.com', '987654321', 2, 1),
(121, 'customer98', '$2y$10$zELCAiABEbgcuEzN9KdjUuk1JWHpYf1OllNXsWGV2np7jwSB.MhKC', 'customer98@example.com', '987654321', 2, 1),
(122, 'customer99', '$2y$10$zXeyOS3VLAcSljgCc3kdpefUSU7smXIMMZRNHBh3XhTfE6KVVxS4i', 'customer99@example.com', '987654321', 2, 1),
(123, 'customer100', '$2y$10$H1hXYKeMN0b1.8kut350ze566aBG0ZVyeD5eR4FWvRbFlh2hHMR1W', 'customer100@example.com', '987654321', 2, 1),
(124, 'admin1', '$2y$10$b3c7q0JLWSTMPoEWluzcXOGijkd9jeXwYonTFIAUDTqL78.G1r/Ya', 'admin1@example.com', '123456789', 1, 1),
(125, 'admin2', '$2y$10$6c2.7zQ/TLFQZo2v4Dg51.vjPFUslgWcNstZMbRCjj1Y3SVmJR7tu', 'admin2@example.com', '123456789', 1, 1),
(126, 'admin3', '$2y$10$hUEbpyjO4uLS7LHLOjWDVOzMsHaqRkOYaBJVnwA1i/w6rvBVIz9rS', 'admin3@example.com', '123456789', 1, 1),
(127, 'admin4', '$2y$10$xXIdHRTUc5fE3Fz0cDPM3u5o1DyWH1LXU74NZvs6BE4bygZ6yjFmu', 'admin4@example.com', '123456789', 1, 1),
(128, 'admin5', '$2y$10$a37GySwSWYHNaDslTnCWIuR0xl.2vTiumpnCpo/6NoW.64iP9IN9C', 'admin5@example.com', '123456789', 1, 1),
(129, 'admin6', '$2y$10$UKJag1UB9qc4yIhk8VLoxeXqJTh1qdLViti5tfJbwAPkuUisTZ.ra', 'admin6@example.com', '123456789', 1, 1),
(130, 'admin7', '$2y$10$0dKj2LHMhFYU7VADDwjmwebVEp7h/aBcuHMjnhOptARV5KvcG0uPu', 'admin7@example.com', '123456789', 1, 1),
(131, 'admin8', '$2y$10$ZHE4s1tylT6/7uOgqCUgTOjqv.drqGd6wMFl5bn5ypAsGV6t4.8ve', 'admin8@example.com', '123456789', 1, 1),
(132, 'admin9', '$2y$10$CtVML1zYN9FavLrugamHGOveXYhQXungWPmYGn6vd4xdUtB9my.ay', 'admin9@example.com', '123456789', 1, 1),
(133, 'admin10', '$2y$10$KDq7Vg1aH8.wglOZFEP3POrb5E1HDtt26L6jIHz.sNFYN6xOhzBRO', 'admin10@example.com', '123456789', 1, 1),
(134, 'customer1', '$2y$10$53lxCXlcKPtG0.sVvvsMj.tU3DrKXeosqHwSN60XKPnA7319Sumqu', 'customer1@example.com', '987654321', 2, 1),
(135, 'customer2', '$2y$10$OZdxoN.17aQESX1at6GiRehFvgMtctH1KJnDcfpp4LcX1W/x0.nTO', 'customer2@example.com', '987654321', 2, 1),
(136, 'customer3', '$2y$10$yEyhnIfGRs/8nHGl5403IeSBPRmH7lyjjsPPzQZYDPlMnfis8CbV.', 'customer3@example.com', '987654321', 2, 1),
(137, 'customer4', '$2y$10$GcxFZDjf14lzIQBsTSVuQ.q5KvRiKE35al1H2Lq1AfYqn24n8umYq', 'customer4@example.com', '987654321', 2, 1),
(138, 'customer5', '$2y$10$FipsJKtU.GvP8KuGzn/ZrO.wDAms.DB1kHTWlbMK.fnvOwUbqfrEG', 'customer5@example.com', '987654321', 2, 1),
(139, 'customer6', '$2y$10$XNWi45B9Zy5BMLmj6l61CuhQu/fGrgMV9Yze.F1eBk/wH4XF2GIR6', 'customer6@example.com', '987654321', 2, 1),
(140, 'customer7', '$2y$10$pYUGtDaFE/IcdT46TZmJJeocf7sU67oymTV1wjUneOX7.766yS5xK', 'customer7@example.com', '987654321', 2, 1),
(141, 'customer8', '$2y$10$Tosu9AstWTs4FXUxgFlNz.aZjW59ITQkkECccdrZ/JITG1m48jwya', 'customer8@example.com', '987654321', 2, 1),
(142, 'customer9', '$2y$10$9FuMnn9bj2WpoKXwt3T.sugVB0MTLesneuyPMDzxY4Zd3VA.5M1uO', 'customer9@example.com', '987654321', 2, 1),
(143, 'customer10', '$2y$10$E0dnWySAc.L4mBmZEsTRVOnAaL5PwiqeTI5xXQzU6nUMOtfOD7bMi', 'customer10@example.com', '987654321', 2, 1),
(144, 'customer11', '$2y$10$ZdDtEmjFTKdWZLhd4lJgMe0WEE81AcDp14jTvKEj2To0z8ekuGY1.', 'customer11@example.com', '987654321', 2, 1),
(145, 'customer12', '$2y$10$AiUymjA5JucHG1qhfZcbEeyXDHzhAGEcFq/tsoeIJ/u4eB8MoiFsq', 'customer12@example.com', '987654321', 2, 1),
(146, 'customer13', '$2y$10$e265nH95ahk55/8X4S4kG.Kwz5PSzqMMzg6BgAsOpcJIsOtlBMdOi', 'customer13@example.com', '987654321', 2, 1),
(147, 'customer14', '$2y$10$wYPAk0G2F4tyP4XLXkrk/uyCQAF6dFgWvaxihiJNs4pC.dSiuZhNu', 'customer14@example.com', '987654321', 2, 1),
(148, 'customer15', '$2y$10$L952RoQqRqJNFe1AD/qrrub8unIAI/n0KrbEn7r39SewDMD8KwMua', 'customer15@example.com', '987654321', 2, 1),
(149, 'customer16', '$2y$10$kI/QbjE7Zj.IaQISMPpRq.XbpcXVD6SFzaISUOZLbO2mztsGlWRi6', 'customer16@example.com', '987654321', 2, 1),
(150, 'customer17', '$2y$10$5zN1utOqmMzLXT3tGgOciuRz9dO5bSNKiE04IwbuRAEuCdhq0TtaW', 'customer17@example.com', '987654321', 2, 1),
(151, 'customer18', '$2y$10$xnG5UH2qVjfiQd1pJH6/Z.99rPtqrHgK4pshBesHCZhOILiE4rbvK', 'customer18@example.com', '987654321', 2, 1),
(152, 'customer19', '$2y$10$l5AUqRNgpy4fSIctmy6ZsOEWtOG8JkyNKjv2eEcWS43nljbewxh5u', 'customer19@example.com', '987654321', 2, 1),
(153, 'customer20', '$2y$10$GwGsjKs5RqmekrPnMClzV.VbBX5lFbyupYHSaEJpyQ/312S1xx5XS', 'customer20@example.com', '987654321', 2, 1),
(154, 'customer21', '$2y$10$k602Ui4VnKbqjveQXKoYeOkNwjhNhcXbRu0K2EktMXqZi9l03Wtga', 'customer21@example.com', '987654321', 2, 1),
(155, 'customer22', '$2y$10$9BrvMvucw5aPGiWqE73tXu99TeTcGYXVdeDrePXrgFzH73ybHGECO', 'customer22@example.com', '987654321', 2, 1),
(156, 'customer23', '$2y$10$4EWXurOtmV52I3Gdot9fg.EZTgIarnGfOkZuBP.mosmm/nB4iMOb6', 'customer23@example.com', '987654321', 2, 1),
(157, 'customer24', '$2y$10$HRFt2vdEgbl6/t8vmr99muzB9rieYLtj9IXtVDEvpZuzu6t.lC5Oa', 'customer24@example.com', '987654321', 2, 1),
(158, 'customer25', '$2y$10$9jFwYiVq7eAlPID5i07hwOsUOWMW8ZV5BP5S8l1FU9VyywdNslfkW', 'customer25@example.com', '987654321', 2, 1),
(159, 'customer26', '$2y$10$RZmeeKpelRnQI1nCcpiALOUBksda21ga2u2PfnyNnNRehzrbDG9pS', 'customer26@example.com', '987654321', 2, 1),
(160, 'customer27', '$2y$10$q3nksxgcuDZhaZUJLbjwNuwNK88IYAVqy.d8MueuEfx.wKFzbuGNm', 'customer27@example.com', '987654321', 2, 1),
(161, 'customer28', '$2y$10$c6GPlQiYCN9K7S7866JSk.o1z7km4rmLQESuNUi3xWi24eQvVeRYi', 'customer28@example.com', '987654321', 2, 1),
(162, 'customer29', '$2y$10$u94Cr8v4XmZZYP.G8yvT1OhCTGVdatnHThGPwas4z5cvKaZ1s8qUW', 'customer29@example.com', '987654321', 2, 1),
(163, 'customer30', '$2y$10$9t8YhFm/pzSV3RqmKdFoNutiIyZ3ecnaMu/XxNByIlZN8rQNbIbxW', 'customer30@example.com', '987654321', 2, 1),
(164, 'customer31', '$2y$10$tA01lt6OCZRxZ0kobnPiFOVUg.ntSZZ7uOIX5.x758lN9nuY7py8m', 'customer31@example.com', '987654321', 2, 1),
(165, 'customer32', '$2y$10$a3R8zDbgnFg9xuP/OC.WDeUIFPuWRPheStJAhGj5zXo63oB6UpUe.', 'customer32@example.com', '987654321', 2, 1),
(166, 'customer33', '$2y$10$tKUD/Km40i55tAMBiNE8M.rQyPVgPQnbr0yVrULGOxOYTvy8DFeAy', 'customer33@example.com', '987654321', 2, 1),
(167, 'customer34', '$2y$10$Tfy9zZWPGU60o4GVwMJiyOcUWdcG8QW1aOg7dHqG6opfN3LMwvVD6', 'customer34@example.com', '987654321', 2, 1),
(168, 'customer35', '$2y$10$oxBSci5jAk2qKtW2EKa2V.PHBms.sHrbBRdXB9o4I3mAlJaXSsdYu', 'customer35@example.com', '987654321', 2, 1),
(169, 'customer36', '$2y$10$aQFjEqjekeadV1DC2BoGneRVuJmkLBq9PZ95WI6wSMCYWG/yQGpwa', 'customer36@example.com', '987654321', 2, 1),
(170, 'customer37', '$2y$10$MOwd2ECsooWJ.iIUGuymL.4ohtu1ogDRRrwFTmlx6qzBWCc..vDrO', 'customer37@example.com', '987654321', 2, 1),
(171, 'customer38', '$2y$10$uWA1jTUe7zAmZez6nNZ5YuGOmMfpqrIwd9V.YeRt3Zs1vz7iS2IDe', 'customer38@example.com', '987654321', 2, 1),
(172, 'customer39', '$2y$10$/22/KwqMSHEdyDmsKB57YOQSulg5AXw1dVvLs3.DgNbnhi5yKkdxK', 'customer39@example.com', '987654321', 2, 1),
(173, 'customer40', '$2y$10$iQOHp7bVN6vBA4qtrEov5eMwrEd.xukkld4Eg27ySsqH9cvRvZpm2', 'customer40@example.com', '987654321', 2, 1),
(174, 'customer41', '$2y$10$fInvDav8ud.TUrF27Qkktewckl4DcW6ouxqtYgTD0Lee7KfpTYGjK', 'customer41@example.com', '987654321', 2, 1),
(175, 'customer42', '$2y$10$w5i92tiKrhEBdgtdLM/wXuHYADJZwh6Dtb3hIERuFpj5m4h4WxVxW', 'customer42@example.com', '987654321', 2, 1),
(176, 'customer43', '$2y$10$c1YVhsnvHSJggbCnR4KfTugFHUTfn8Eqwp1aILBT.btaMU9ze37a6', 'customer43@example.com', '987654321', 2, 1),
(177, 'customer44', '$2y$10$IJ2tNoMnCfo1DEZH6uyfGuM7H1GU/jTD4PEOaABGUwe2gk3uEtiJq', 'customer44@example.com', '987654321', 2, 1),
(178, 'customer45', '$2y$10$XRXJRos9ApvI4nZdu8nNEe5K9HIsm47n3SNaXiZBPCvFaMeW0EZk6', 'customer45@example.com', '987654321', 2, 1),
(179, 'customer46', '$2y$10$w.cwn2uuRySt6EchK4h7Ouf7heWx7lBVrbqekAGiTH/huMVdAEX4u', 'customer46@example.com', '987654321', 2, 1),
(180, 'customer47', '$2y$10$scqv.rTPj5XgFyZEe8kwBeVPaPNRd6VlwzBw0IPKPDM1mG.nsnS3e', 'customer47@example.com', '987654321', 2, 1),
(181, 'customer48', '$2y$10$qJni.mvI4D7Mg0lXf5qGiuF4QjhWUbIyWIm1RHPwH1ihBamU3HxqG', 'customer48@example.com', '987654321', 2, 1),
(182, 'customer49', '$2y$10$LnRDWM2jZ7sbCdi9wu7e7./6.nHXWMztXEjRahoeklCc7HCPF5yLi', 'customer49@example.com', '987654321', 2, 1),
(183, 'customer50', '$2y$10$KTTWtDokV/uIBiu0KSGzRuCDBZYGk.sE69vhTNsNZd0c5pBRX1G2G', 'customer50@example.com', '987654321', 2, 1),
(184, 'customer51', '$2y$10$qG.NLN7vg47xIf71.1ZZn.MWlSbBTLFmpVo/mivOUT8B.NKxEuRxC', 'customer51@example.com', '987654321', 2, 1),
(185, 'customer52', '$2y$10$1N9cK8cgQlc.uLnob5BJ9Oxz1p3w/p92Wg1Ss7Yu9pM6jobjhh9kW', 'customer52@example.com', '987654321', 2, 1),
(186, 'customer53', '$2y$10$poy7J9KX4Y8UYU0eAcPu6.l/G2HtF88T9ytqIb30TwJ3x.2tnt5FC', 'customer53@example.com', '987654321', 2, 1),
(187, 'customer54', '$2y$10$4931.7ggbE8VbUdQj6nNRuOPxF7Mp.5lGYMhy.atTRoPcG6k/7pgm', 'customer54@example.com', '987654321', 2, 1),
(188, 'customer55', '$2y$10$PS0mxEoBN1Mb2bro2SMGwuk9kRnpA2cq7eashTFF9Q3btyVkUX2dS', 'customer55@example.com', '987654321', 2, 1),
(189, 'customer56', '$2y$10$Ew8MaOxq/XgmFjGjVfiJeenIWy2he38ZpUOfKab77PweZmXS9WGky', 'customer56@example.com', '987654321', 2, 1),
(190, 'customer57', '$2y$10$d8/7IaZZZd2hiqYMtoEuZeKSDyo8bBXcDr69bpPgLUXb1gpEh498y', 'customer57@example.com', '987654321', 2, 1),
(191, 'customer58', '$2y$10$TxveBonoaSPrDrcx3Hwou.7t4FMsAeB8adNKdKujCPTyQX03alzd.', 'customer58@example.com', '987654321', 2, 1),
(192, 'customer59', '$2y$10$AwNDfm/bVNTXbunkfbvjX.XDGBM3wrKjfgTEJvYlN0E2m8TMxO7.a', 'customer59@example.com', '987654321', 2, 1),
(193, 'customer60', '$2y$10$QPwUxfCUadg1DjBxZq3CwOtieGKWJFjCCDBLQfad03yYZLbRUlBVC', 'customer60@example.com', '987654321', 2, 1),
(194, 'customer61', '$2y$10$/uD5Hb7MOs.DeKaaoIq/5uE.ICOyyw8Jzu5fSLKOvqFaaT6RRY9He', 'customer61@example.com', '987654321', 2, 1),
(195, 'customer62', '$2y$10$r8A0E.9Vxp/RH/fvX82xaePutxU5Vs88.Mjun4pyaTnO0ZQ43RkFq', 'customer62@example.com', '987654321', 2, 1),
(196, 'customer63', '$2y$10$v0a/rZ/9D6aRqQW1PAUo1OnZYa.4nkmtdbEupUEADERk.b.U2wzhq', 'customer63@example.com', '987654321', 2, 1),
(197, 'customer64', '$2y$10$Bw7z/DJlHle.W.hKlSIam.3EGsmdvx.UvRDOFZcnTgL8h0md9GCpW', 'customer64@example.com', '987654321', 2, 1),
(198, 'customer65', '$2y$10$rDBQbM47Hos.1ZO26i4okOPjcSjIAdKWG5cIKG25UNyB/xniK2gcW', 'customer65@example.com', '987654321', 2, 1),
(199, 'customer66', '$2y$10$mS5N5IE3TpN49Uxi.i.nHOGWiUcSPPaTrWlW76XMX8vPxTvD/W2.C', 'customer66@example.com', '987654321', 2, 1),
(200, 'customer67', '$2y$10$WkL3tmY./gevLZL/M1/zYOBbhUrihRa.KaxUd.4lfIjTG2tzw2BlK', 'customer67@example.com', '987654321', 2, 1),
(201, 'customer68', '$2y$10$AjAd.gCdYpUC4XUnaOCbbOQCFzTAYz1uV4NWIZKnye1ZFgpywaRWC', 'customer68@example.com', '987654321', 2, 1),
(202, 'customer69', '$2y$10$bT6xTTZuu546L7xaYlGDe.wjvluRW9CBt0xVb27rr4Z1prdKtfWW.', 'customer69@example.com', '987654321', 2, 1),
(203, 'customer70', '$2y$10$oQJtv1SNMe/3EqlQlDPyi.PTy.srHUJlnxwz7SXK6tqm3hc.kFTFy', 'customer70@example.com', '987654321', 2, 1),
(204, 'customer71', '$2y$10$5WGWR3QXvuca.SLdZGeux.zwIfwtOvybBsmYgvlt07xmY4hcpKE/G', 'customer71@example.com', '987654321', 2, 1),
(205, 'customer72', '$2y$10$e6Ek/izQPVKGGSayXQcoVOWtPo3XOM/RUHpSbR9wbO8O1/2dhqVyy', 'customer72@example.com', '987654321', 2, 1),
(206, 'customer73', '$2y$10$h5WET1b3rEHbYLKSFY4OM.6VNkSiS9z3nyMIJwmb5AVuvNE9SpuDS', 'customer73@example.com', '987654321', 2, 1),
(207, 'customer74', '$2y$10$Y0hZtqdKyLMR2TN.vfrB0uChZJYsh713CcUCd3BFSkJlZtBWE77K.', 'customer74@example.com', '987654321', 2, 1),
(208, 'customer75', '$2y$10$gJbfZmf6wxefb.DLWT.oGuR7OC/2yFtMrWoX87MsdnCf8ocUFWKu6', 'customer75@example.com', '987654321', 2, 1),
(209, 'customer76', '$2y$10$oBXZu1IgZfSsu/PBUMQskOgVELljnKoh/vmM/tjwRvCp4Bovhe8fq', 'customer76@example.com', '987654321', 2, 1),
(210, 'customer77', '$2y$10$gdSYLA4XZC7z9pagEDLgM.U7Gwzp1f4O7JrElA76qunUMTKO7QL7G', 'customer77@example.com', '987654321', 2, 1),
(211, 'customer78', '$2y$10$jDKbINCQdiRWFdU85J4squBj7bCCLEYHip2KgChMIXPS4x8H8ICgu', 'customer78@example.com', '987654321', 2, 1),
(212, 'customer79', '$2y$10$MzC8WQ5JUNMXw93LagYK4eZSnIbchSjwZC1yty7clA1RBnbqIRxFu', 'customer79@example.com', '987654321', 2, 1),
(213, 'customer80', '$2y$10$Cpt4TzIdb3y8ROEuEFcH4OSOKX0/tn.9su/8KgjXTJt6nDJWghD0q', 'customer80@example.com', '987654321', 2, 1),
(214, 'customer81', '$2y$10$QG3IzNXWNArMiMaF9Jv/cebvWV.8cTDMmj7I4cbSPlwMVvTquCZJe', 'customer81@example.com', '987654321', 2, 1),
(215, 'customer82', '$2y$10$VIqNKIkaDXxPzU8onM0BlOpiDahZN/hhAomA/6AgPGhX5OfFg7fI.', 'customer82@example.com', '987654321', 2, 1),
(216, 'customer83', '$2y$10$wfW.3NW53P7.gefqcJpdS.EhTsiHc1Q6YZise/1N8FYYKjdqHLfki', 'customer83@example.com', '987654321', 2, 1),
(217, 'customer84', '$2y$10$fa8YmKP8iXyjETFca6z7d.Kw0RUGwSWENRYSeKocm60EzEVENMAjC', 'customer84@example.com', '987654321', 2, 1),
(218, 'customer85', '$2y$10$hTCGp8w6IigyubFK3wYsOOOQ3c23I/QeUPdCCx8iaNW04HomQPkdq', 'customer85@example.com', '987654321', 2, 1),
(219, 'customer86', '$2y$10$wMxSziApARi26V6adabwy.oMd4lSC6a1xvNXD3fKyKI0iXnu21CMm', 'customer86@example.com', '987654321', 2, 1),
(220, 'customer87', '$2y$10$HrrEaVxG6VQLU5Ey6LeYWO/JM5Uvro.2ZX/rT9Xpt8htYE6Y.3g5K', 'customer87@example.com', '987654321', 2, 1),
(221, 'customer88', '$2y$10$oDiV5l9/9VCALsWQf8nTJOo4Q34A.Lmfc2/UmhiRPbrCw3OW8zCNC', 'customer88@example.com', '987654321', 2, 1),
(222, 'customer89', '$2y$10$McAqg.C7IF6sTsAlVvcbzu1SUYakXAESMP1q6UGC/nN67zK4nq7cO', 'customer89@example.com', '987654321', 2, 1),
(223, 'customer90', '$2y$10$i7BaiSddKiseXB18Ro3go.J1N/O2y2xngFAPKwKSU.ps1KFys0EGW', 'customer90@example.com', '987654321', 2, 1),
(224, 'customer91', '$2y$10$zoaYxesWFPh2rHAChL5du.BErg3qY9J73f5gYucdKJyfzSx6Rhih6', 'customer91@example.com', '987654321', 2, 1),
(225, 'customer92', '$2y$10$ItqcqGrMEmOEP3PHWONsaOxftAQ93WURiTE1U5exjQUV/gIU.L.46', 'customer92@example.com', '987654321', 2, 1),
(226, 'customer93', '$2y$10$yRhyNtdKQMNusIZ5VkipN.5A0rl6copMpjtCBDS13S9xjuLJBS31G', 'customer93@example.com', '987654321', 2, 1),
(227, 'customer94', '$2y$10$CfSbrKN6Zcl7zQh22auNde7J.lOZ2KXkztk1AKCI.KcROqak5hZCO', 'customer94@example.com', '987654321', 2, 1),
(228, 'customer95', '$2y$10$SVAZxyx4Zq.ZVc0u7otn8ObiefBTf120kjJTXxuJtkbBKjcQBpQnW', 'customer95@example.com', '987654321', 2, 1),
(229, 'customer96', '$2y$10$Q7y4gFCKm4/Vg6uLOqrd4e.qFYVqwwjjsffUg5H1q5pgh4Ec3S5zi', 'customer96@example.com', '987654321', 2, 1),
(230, 'customer97', '$2y$10$4XS3bUUtD2zr1SKUnA41xeroR0IqOyAth2MbB2AKYuOwXO111MeIi', 'customer97@example.com', '987654321', 2, 1),
(231, 'customer98', '$2y$10$OXATZ0GZZ0TSf/Z.tRHLGubUtVh2j13Z1FVwc/WArTiqmTJF1NZSy', 'customer98@example.com', '987654321', 2, 1),
(232, 'customer99', '$2y$10$.eYyJAfQBDfe7WapzjxST.KW66oE38fH7R78Be94TtcfcrhYrjoe6', 'customer99@example.com', '987654321', 2, 1),
(233, 'customer100', '$2y$10$rvhZ4zFegtt3KCGKL6OUDeu4M7AhUwBOOoybgolsbr.Ju7iimcP6C', 'customer100@example.com', '987654321', 2, 1);

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
  MODIFY `id_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

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
