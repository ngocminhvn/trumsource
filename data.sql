-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 10, 2022 lúc 08:15 PM
-- Phiên bản máy phục vụ: 10.3.36-MariaDB-cll-lve
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trumsour_sql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auto_banks`
--

CREATE TABLE `auto_banks` (
  `id` int(255) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card_user`
--

CREATE TABLE `card_user` (
  `id` int(255) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `buyer` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stk` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat_user`
--

CREATE TABLE `chat_user` (
  `id` int(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code_historys`
--

CREATE TABLE `code_historys` (
  `id` int(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code_products`
--

CREATE TABLE `code_products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `demo` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(255) NOT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `modal` varchar(255) DEFAULT NULL,
  `thesieure` text NOT NULL,
  `dlsr_momo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `auto_banks`
--
ALTER TABLE `auto_banks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `card_user`
--
ALTER TABLE `card_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chat_user`
--
ALTER TABLE `chat_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code_historys`
--
ALTER TABLE `code_historys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code_products`
--
ALTER TABLE `code_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `auto_banks`
--
ALTER TABLE `auto_banks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `card_user`
--
ALTER TABLE `card_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `code_historys`
--
ALTER TABLE `code_historys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `code_products`
--
ALTER TABLE `code_products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
