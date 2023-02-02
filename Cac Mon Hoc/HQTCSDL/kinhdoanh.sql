-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2022 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kinhdoanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `sohoadon` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `mahang` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` tinyint(4) DEFAULT NULL,
  `mucgiamgia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`sohoadon`, `mahang`, `soluong`, `mucgiamgia`) VALUES
('HD01', 'MH01', 10, 0),
('HD01', 'MH02', 5, 0),
('HD01', 'MH03', 2, 10),
('HD02', 'MH03', 2, 10),
('HD02', 'MH04', 5, 0),
('HD02', 'MH05', 10, 0),
('HD03', 'MH01', 2, 0),
('HD03', 'MH03', 5, 0),
('HD03', 'MH05', 10, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `madichvu` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `tendichvu` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `mota` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`madichvu`, `tendichvu`, `mota`) VALUES
('DV01', 'Giao hàng tận nơi', 'Áp dụng khách hàng là thành viên trở lên'),
('DV02', 'Quà sinh nhật', 'Khách hàng là VIP trở lên'),
('DV03', 'Gói quà miễn phí', 'Áp dụng tất cả khách hàng'),
('DV04', 'Phiếu mua hàng - Coupon', 'Khách hàng là VIP trở lên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvukhachhang`
--

CREATE TABLE `dichvukhachhang` (
  `madichvu` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `maloaikhachhang` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Nngayapdung` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvukhachhang`
--

INSERT INTO `dichvukhachhang` (`madichvu`, `maloaikhachhang`, `Nngayapdung`) VALUES
('DV01', 'KHTV', NULL),
('DV01', 'VIP1', NULL),
('DV01', 'VIP2', NULL),
('DV02', 'VIP1', NULL),
('DV02', 'VIP2', NULL),
('DV03', 'KHTT', NULL),
('DV03', 'KHTV', NULL),
('DV03', 'VIP1', NULL),
('DV03', 'VIP2', NULL),
('DV04', 'VIP1', NULL),
('DV04', 'VIP2', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `sohoadon` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `makhachhang` varchar(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `manhanvien` varchar(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ngaydathang` date DEFAULT NULL,
  `ngaygiaohang` date DEFAULT NULL,
  `ngaychuyenhang` date DEFAULT NULL,
  `noigiaohang` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`sohoadon`, `makhachhang`, `manhanvien`, `ngaydathang`, `ngaygiaohang`, `ngaychuyenhang`, `noigiaohang`) VALUES
('HD01', 'KH04', 'NV01', '2020-04-03', '2020-04-03', NULL, '45F Trần Phú'),
('HD02', 'KH02', 'NV01', '2020-04-03', '2020-04-04', NULL, '23/45B Lý Tự Trọng'),
('HD03', 'KH03', 'NV03', '2020-04-05', '2020-04-06', NULL, '60E Lý Tự Trọng'),
('HD04', 'KH03', 'NV04', '2020-04-05', '2020-04-06', NULL, '45F Trần Phú'),
('HD05', 'KH05', 'NV02', '2020-04-06', '2020-04-06', NULL, '23/45B Trần Văn Khéo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `tencongty` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dienthoai` varchar(11) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `fax` varchar(11) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `maloaikhachhang` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diemtichluy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tencongty`, `diachi`, `email`, `dienthoai`, `fax`, `hoten`, `maloaikhachhang`, `diemtichluy`) VALUES
('KH01', 'Cty TNHH Xuan Phat', '11 Nguyễn Văn cừ', 'lakhoa@gmail.com', '0986334334', NULL, 'Lê Anh Khoa', NULL, NULL),
('KH02', 'Cty Tư Vấn Thiết Kế Hải An', '23/45B Trần Văn Khéo', 'uthai@gmail.com', '0352885908', NULL, 'Ung Thanh Hải', NULL, NULL),
('KH03', 'Cty SholarCity', '60E Lý Tự Trọng', 'tvhien@gmail.com', '0984234654', NULL, 'Trịnh Vũ Hiên', NULL, NULL),
('KH04', 'Trung Tâm Đào Tạo Nghề Bạch Lan', '45F Trần Phú', 'ncan@gmail.com', '0355784334', NULL, 'Ngô Chí Ân', NULL, NULL),
('KH05', 'Cty Tư Vấn Thiết Kế Hải An', '23/45B Trần Văn Khéo', 'nmdieu@gmail.com', '03587228776', NULL, 'Ngô Mỹ Diệu', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `maloaihang` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenloaihang` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`maloaihang`, `tenloaihang`) VALUES
('LH01', 'Rau củ'),
('LH02', 'Mỳ ăn liền'),
('LH03', 'Nước rửa tay'),
('LH04', 'Khẩu trang'),
('LH05', 'Gạo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikhachhang`
--

CREATE TABLE `loaikhachhang` (
  `maloaikhachhang` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenloaikhachhang` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diemtichluy` int(10) DEFAULT NULL,
  `ghichu` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikhachhang`
--

INSERT INTO `loaikhachhang` (`maloaikhachhang`, `tenloaikhachhang`, `diemtichluy`, `ghichu`) VALUES
('KHTT', 'Khách hàng thân thiết', 500, NULL),
('KHTV', 'Khách hàng thành viên', 800, NULL),
('VIP1', 'Khách hàng VIP1', 1000, NULL),
('VIP2', 'Khách hàng VIP2', 2000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `mahang` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenhang` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `macongty` varchar(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `maloaihang` varchar(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `donvitinh` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `gianhap` float DEFAULT NULL,
  `giaban` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`mahang`, `tenhang`, `macongty`, `maloaihang`, `soluong`, `donvitinh`, `gianhap`, `giaban`) VALUES
('MH01', 'Hảo Hảo tôm chua cay', 'NCC01', 'LH01', 200, 'thùng', 70000, 86000),
('MH02', 'Hảo Hảo mì xào khô', 'NCC01', 'LH01', 100, ' thùng ', 70000, 90000),
('MH03', 'Khẩu trang kháng khuẩn', 'NCC04', 'LH04', 1000, 'hộp', 27000, 30000),
('MH04', 'Nước rửa tay LifeBuoy', 'NCC03', 'LH03', 1000, 'chai', 30000, 36000),
('MH05', 'Xà bông Lifebuoy', 'NCC03', 'LH03', 1000, 'viên', 14000, 19000),
('MH06', 'Cải thìa', 'NCC05', 'LH01', 100, 'túi', 10000, 15500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `macongty` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `tencongty` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tengiaodich` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dienthoai` varchar(11) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `fax` varchar(11) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`macongty`, `tencongty`, `tengiaodich`, `diachi`, `dienthoai`, `fax`, `email`) VALUES
('NCC01', 'Cty cổ phần AECCOOK Việt Nam', 'ACECOOK', 'Khu công nghiệp bến cát', '02838154064', '02838462342', NULL),
('NCC02', 'Cty thực phẩm Á Châu', 'Gaudo', '743, khu phố 1B, An Phú, Thuận An, Bình Dương, Việ…', '02844500588', '02838469729', NULL),
('NCC03', 'LifeBuoy Việt Nam', 'LifeBuoy', 'đang cập nhật', '84838236651', '', NULL),
('NCC04', 'Nhà máy may Vinatex Cần Thơ', 'Vinatex', 'Ấp Vĩnh Tiến, TT Vĩnh Thạch, Vĩnh Thạnh, Cần Thơ', '02838360143', '02838668543', NULL),
('NCC05', 'Liên Hiệp hợp tác xã thương mại Tp HCM', 'Saigon coop', '199-205 Nguyễn Thái Học, P. Phạm Ngũ Lão, Q1, Hồ C..', '02838360143', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `ngaylamviec` date DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dienthoai` varchar(11) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `luongcoban` float DEFAULT NULL,
  `phucap` float DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `ngaysinh`, `ngaylamviec`, `diachi`, `dienthoai`, `luongcoban`, `phucap`, `hoten`) VALUES
('NV01', '1990-03-19', '2018-04-01', '3F/6B Phan Cư Trinh', '0986334994', 3000000, 500000, 'Lý Ngọc Mai'),
('NV02', '1989-08-14', '2016-09-15', '19/6B Phạm Ngũ Lão', '0983678256', 8000000, 4000000, 'Đỗ Huy Hoàng'),
('NV03', '1992-01-15', '2019-06-01', '43G CM Tháng 8', '0986885334', 3500000, 400000, 'Nguyễn Thanh Tống'),
('NV04', '1990-05-31', '2018-04-01', '13/3B Huỳnh Cương', '098698346', 4500000, 350000, 'Tô Hồng Thanh'),
('NV05', '1994-09-17', '2018-09-01', '19/6B Phạm Ngũ Lão', '908633647', 3000000, 500000, 'Dương Thành Thắng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`sohoadon`,`mahang`),
  ADD KEY `mahang` (`mahang`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madichvu`);

--
-- Chỉ mục cho bảng `dichvukhachhang`
--
ALTER TABLE `dichvukhachhang`
  ADD PRIMARY KEY (`madichvu`,`maloaikhachhang`),
  ADD KEY `maloaikhachhang` (`maloaikhachhang`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`sohoadon`),
  ADD KEY `makhachhang` (`makhachhang`),
  ADD KEY `manhanvien` (`manhanvien`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`),
  ADD KEY `maloaikhachhang` (`maloaikhachhang`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`maloaihang`);

--
-- Chỉ mục cho bảng `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  ADD PRIMARY KEY (`maloaikhachhang`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`mahang`),
  ADD KEY `macongty` (`macongty`),
  ADD KEY `maloaihang` (`maloaihang`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`macongty`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`sohoadon`) REFERENCES `dondathang` (`sohoadon`),
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`mahang`) REFERENCES `mathang` (`mahang`);

--
-- Các ràng buộc cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD CONSTRAINT `dichvu_ibfk_1` FOREIGN KEY (`madichvu`) REFERENCES `dichvukhachhang` (`madichvu`);

--
-- Các ràng buộc cho bảng `dichvukhachhang`
--
ALTER TABLE `dichvukhachhang`
  ADD CONSTRAINT `dichvukhachhang_ibfk_1` FOREIGN KEY (`maloaikhachhang`) REFERENCES `loaikhachhang` (`maloaikhachhang`);

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`),
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maloaikhachhang`) REFERENCES `loaikhachhang` (`maloaikhachhang`);

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_2` FOREIGN KEY (`macongty`) REFERENCES `nhacungcap` (`macongty`),
  ADD CONSTRAINT `mathang_ibfk_3` FOREIGN KEY (`maloaihang`) REFERENCES `loaihang` (`maloaihang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
