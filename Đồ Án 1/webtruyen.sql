-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 01:12 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtruyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(10) NOT NULL,
  `TenUser` char(60) DEFAULT NULL,
  `TenTruyen` char(60) DEFAULT NULL,
  `NoiDungBL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `MaChapter` int(10) NOT NULL,
  `TenChapter` char(60) NOT NULL,
  `ImgPath` varchar(255) NOT NULL,
  `TenTruyen` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsu`
--

CREATE TABLE `lichsu` (
  `MALS` int(10) NOT NULL,
  `TenUser` char(60) DEFAULT NULL,
  `TenTruyen` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `TenUser` char(60) NOT NULL,
  `Password` char(60) NOT NULL,
  `Email` char(60) NOT NULL,
  `Level` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomdich`
--

CREATE TABLE `nhomdich` (
  `TenNhom` char(60) NOT NULL,
  `ThongtinNhom` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `TenTG` char(60) NOT NULL,
  `ThongtinTG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `TenTL` char(60) NOT NULL,
  `ThongtinTL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theodoi`
--

CREATE TABLE `theodoi` (
  `MaTD` int(10) NOT NULL,
  `TenUser` char(60) DEFAULT NULL,
  `TenTruyen` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `TenTruyen` char(60) NOT NULL,
  `GTTruyen` text NOT NULL,
  `ImgTruyen` varchar(255) NOT NULL,
  `TenTG` char(60) DEFAULT NULL,
  `TenNhom` char(60) DEFAULT NULL,
  `TenTL` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `TenUser` (`TenUser`),
  ADD KEY `TenTruyen` (`TenTruyen`);

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`MaChapter`),
  ADD KEY `TenTruyen` (`TenTruyen`);

--
-- Chỉ mục cho bảng `lichsu`
--
ALTER TABLE `lichsu`
  ADD PRIMARY KEY (`MALS`),
  ADD KEY `TenUser` (`TenUser`),
  ADD KEY `TenTruyen` (`TenTruyen`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`TenUser`);

--
-- Chỉ mục cho bảng `nhomdich`
--
ALTER TABLE `nhomdich`
  ADD PRIMARY KEY (`TenNhom`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`TenTG`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`TenTL`);

--
-- Chỉ mục cho bảng `theodoi`
--
ALTER TABLE `theodoi`
  ADD PRIMARY KEY (`MaTD`),
  ADD KEY `TenUser` (`TenUser`),
  ADD KEY `TenTruyen` (`TenTruyen`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`TenTruyen`),
  ADD KEY `TenTG` (`TenTG`),
  ADD KEY `TenNhom` (`TenNhom`),
  ADD KEY `TenTL` (`TenTL`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `MaChapter` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichsu`
--
ALTER TABLE `lichsu`
  MODIFY `MALS` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `theodoi`
--
ALTER TABLE `theodoi`
  MODIFY `MaTD` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`TenUser`) REFERENCES `nguoidung` (`TenUser`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`TenTruyen`) REFERENCES `truyen` (`TenTruyen`);

--
-- Các ràng buộc cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`TenTruyen`) REFERENCES `truyen` (`TenTruyen`);

--
-- Các ràng buộc cho bảng `lichsu`
--
ALTER TABLE `lichsu`
  ADD CONSTRAINT `lichsu_ibfk_1` FOREIGN KEY (`TenUser`) REFERENCES `nguoidung` (`TenUser`),
  ADD CONSTRAINT `lichsu_ibfk_2` FOREIGN KEY (`TenTruyen`) REFERENCES `truyen` (`TenTruyen`);

--
-- Các ràng buộc cho bảng `theodoi`
--
ALTER TABLE `theodoi`
  ADD CONSTRAINT `theodoi_ibfk_1` FOREIGN KEY (`TenUser`) REFERENCES `nguoidung` (`TenUser`),
  ADD CONSTRAINT `theodoi_ibfk_2` FOREIGN KEY (`TenTruyen`) REFERENCES `truyen` (`TenTruyen`);

--
-- Các ràng buộc cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`TenTG`) REFERENCES `tacgia` (`TenTG`),
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`TenNhom`) REFERENCES `nhomdich` (`TenNhom`),
  ADD CONSTRAINT `truyen_ibfk_3` FOREIGN KEY (`TenTL`) REFERENCES `theloai` (`TenTL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
