-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 18, 2022 lúc 01:30 PM
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

--
-- Đang đổ dữ liệu cho bảng `auto_banks`
--

INSERT INTO `auto_banks` (`id`, `user`, `code`, `amount`, `description`, `type`, `status`, `time`) VALUES
(7, 'trinhngocminh', 'T11368826', '10000', '1', 'Thẻ siêu rẻ', '2', '1659320871');

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

--
-- Đang đổ dữ liệu cho bảng `card_user`
--

INSERT INTO `card_user` (`id`, `code`, `buyer`, `name`, `avatar`, `phone`, `job`, `location`, `facebook`, `stk`, `time`) VALUES
(2, 'tung-duong', '5', 'Tùng Dương', 'https://i.imgur.com/upeoyk4.png', '0568124032', 'CODE ', 'VN', 'https://www.facebook.com/fromtrantungduong', 'MOMO 0568124032', '1661425856'),
(3, 'nguyen-thai-hoa', '12', 'Nguyễn Thái Hòa', 'https://i.imgur.com/owJAiRF.jpg', '0962128979', 'Designer', 'Binh Duong, Viet Nam', '100048660642537', 'MBBANK:9988882007|MOMO:0962128939', '1661497099'),
(4, 'dinh-duy-vinh', '33', 'Đinh Duy Vinh', 'https://i.imgur.com/aZ6MywA.gif', '0914428517', 'Coder, Học sinh', 'Quảng Ngãi', '100015359342786', 'MB:100009012005|Momo:0914428517', '1661809573'),
(7, 'ke-thien', '15', 'Kế Thiện', 'https://graph.facebook.com/100074317517562/picture?width=100&height=100&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662', '0862391429', 'Coder, Dev', 'Đoán Xem =))', '100074317517562', 'MoMo: 0862391429 - Kế Thiện', '1662471413'),
(9, 'nguyen-van-an', '70', 'Nguyễn Văn An', 'https://scontent.fhan18-1.fna.fbcdn.net/v/t39.30808-1/305931735_6114480471900857_1478740761971753535_n.jpg?stp=dst-jpg_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=7206a8&_nc_ohc=oZpZkpjaLdgAX-1yKn6&tn=ANMQclmCk0HLsRD3&_nc_ht=scontent.fhan18-1.fna&oh=00_AT9XcnyCn', '0867000000', 'Dev', 'Vietnam', '100000168940665', 'MB:1191990999', '1662556669'),
(10, 'mmb', '75', 'mmb', 'mmb', '067576455354', 'mb', 'mb', 'mbmbm', 'mb', '1662967041'),
(11, 'doan-the-bao-long', '7', 'Doãn Thế Bảo Long', 'https://i.imgur.com/fwISWUh.png', '0338628044', 'Code ', 'Quang Nam', '100081316312557', 'MB:599955552906', '1663119669'),
(12, 'trong-tan', '79', 'Trọng Tấn', 'https://i.postimg.cc/rFJWT7HX/IMG-20220914-121502-764.jpg', '0396680806', 'BU LOL GAMING', 'VIET NAM', '100047478169310', 'MB:0107908082006|MOMO:0935961726', '1663142231'),
(14, 'le-nguyen-thanh-phat', '80', 'Lê Nguyễn Thành Phát', 'https://i.imgur.com/vBlSyq9.jpg', '0899331022', 'Học Sinh ', 'Việt Nam', '100026185815398', 'MOMO : 0768100814 | CHÚC MỌI NGƯỜI NGÀY MỚI TỐT LÀNH !!', '1663260604'),
(15, 'le-ngoc-nhan', '83', 'Lê Ngọc Nhân  :)', 'https://i.imgur.com/McBDtUu.png', '0817047250', 'Developer', 'Viet Nam', '100070382425310', 'Tạm khóa', '1663339578');

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

--
-- Đang đổ dữ liệu cho bảng `chat_user`
--

INSERT INTO `chat_user` (`id`, `buyer`, `message`, `time`) VALUES
(1, 'trinhngocminh', 'hello', '1660362511'),
(2, 'Tuan30607tt', 'chào bà dà', '1661419671'),
(3, 'ndbpro116', 'heli', '1661421956'),
(4, 'trinhngocminh', ':v', '1661422154'),
(5, 'ndbpro116', 'code xịn', '1661422177'),
(6, 'tungduong1806', 'Help ', '1661425475'),
(38, 'trumcodevnnn', 'Chào mấy nhóc  nhá', '1661429569'),
(39, 'tungduong1806', 'Đừng có spam', '1661439929'),
(40, 'trinhngocminh', 'Thằng tùng à :))', '1661473227'),
(45, 'trinhngocminh', ':))', '1661475563'),
(47, 'buiduchai.vip.info', 'sus', '1661484132'),
(48, 'buiduchai.vip.info', 'sus', '1661484139'),
(49, 'dtz124', 'sus', '1661496780'),
(50, 'Admin', '[URL]https://anonyviet.com/cach-nhan-voucher-80-trieu-vnd-tao-tai-khoan-so-dep-mbbank/[/URL]', '1661607766'),
(51, 'TranMinhDat', 'hello', '1661675701'),
(52, 'Wuiwiwiiwiwiwiw', 'fixx đc r hả ', '1661679831'),
(53, 'trinhngocminh', '[URL]https://trumsource.com/view-source/83[/URL]', '1661693655'),
(54, 'trinhngocminh', 'code mới code mới', '1661693661'),
(55, 'Phuc1111', 'Như cặc', '1661786359'),
(56, 'trumcodevnnn', 'Chào mấy nhóc ', '1661866244'),
(57, 'Admin205', 'Hi', '1661876070'),
(58, 'Admin205', 'Ggh', '1661876329'),
(59, 'Admin205', 'Code ccj đs ad', '1661876373'),
(60, 'tungduong1806', 'Xin code cltx ', '1661987726'),
(61, 'tungduong1806', 'Up lên web đi ', '1661987740'),
(62, 'lecongvinh', '????', '1662015643'),
(3800, 'tungduong1806', 'H', '1662441159'),
(3801, 'dgdfgfd', '=', '1662966401'),
(3802, 'Minhzxh', 'Chào các bạn ', '1663021580'),
(3803, 'phananhtuan', '.', '1663056902'),
(3804, 'phananhtuan', '123', '1663056924'),
(3805, 'trumcodevnnn', 'Chào mấy nhóc ', '1663330647');

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

--
-- Đang đổ dữ liệu cho bảng `code_historys`
--

INSERT INTO `code_historys` (`id`, `buyer`, `code`, `time`) VALUES
(1, '1', '1', '1659679249'),
(2, '5', '80', '1661425564'),
(3, '6', '82', '1661429681'),
(4, '7', '6', '1661437343'),
(5, '5', '80', '1661440171'),
(6, '10', '4', '1661457895'),
(7, '11', '4', '1661484180'),
(8, '5', '79', '1661493480'),
(9, '17', '6', '1661663647'),
(10, '21', '5', '1661694321'),
(11, '23', '82', '1661744320'),
(12, '23', '5', '1661744335'),
(13, '25', '82', '1661756370'),
(14, '25', '82', '1661756556'),
(15, '28', '4', '1661774490'),
(16, '30', '4', '1661785676'),
(17, '32', '79', '1661804612'),
(18, '32', '4', '1661804718'),
(19, '34', '79', '1661840377'),
(20, '34', '4', '1661840387'),
(21, '34', '5', '1661840396'),
(22, '34', '6', '1661840407'),
(23, '34', '80', '1661840415'),
(24, '34', '81', '1661840422'),
(25, '34', '82', '1661840429'),
(26, '35', '82', '1661844831'),
(27, '39', '82', '1661879064'),
(28, '42', '82', '1661951468'),
(29, '42', '79', '1661952028'),
(30, '5', '4', '1661987761'),
(31, '43', '82', '1662007454'),
(32, '44', '82', '1662019565'),
(33, '44', '82', '1662019876'),
(34, '44', '4', '1662019904'),
(35, '5', '81', '1662168411'),
(36, '58', '82', '1662229394'),
(37, '58', '82', '1662229399'),
(38, '58', '6', '1662229484'),
(39, '60', '6', '1662259343'),
(40, '60', '4', '1662261574'),
(41, '60', '5', '1662298239'),
(42, '19', '5', '1662367256'),
(43, '63', '79', '1662371632'),
(44, '63', '80', '1662371636'),
(45, '69', '6', '1662480928'),
(46, '69', '5', '1662480933'),
(47, '69', '80', '1662480936'),
(48, '69', '79', '1662480940'),
(49, '69', '81', '1662480943'),
(50, '69', '82', '1662480946'),
(51, '71', '82', '1662815250'),
(52, '71', '6', '1662815257'),
(53, '72', '82', '1662835578'),
(54, '72', '6', '1662836255'),
(55, '1', '80', '1662875136'),
(56, '67', '4', '1662878961'),
(57, '4', '5', '1662902518'),
(58, '4', '82', '1662902524'),
(59, '74', '79', '1662961976'),
(60, '75', '82', '1662966457'),
(61, '75', '82', '1662966468'),
(62, '75', '4', '1662966950'),
(63, '75', '4', '1662967091'),
(64, '75', '6', '1662967270'),
(65, '77', '4', '1663021651'),
(66, '78', '5', '1663070728'),
(67, '7', '81', '1663119727'),
(68, '79', '81', '1663142299'),
(69, '79', '79', '1663142315'),
(70, '79', '5', '1663142333'),
(71, '79', '4', '1663142345'),
(72, '79', '79', '1663142360'),
(73, '82', '5', '1663331208'),
(74, '83', '79', '1663339651'),
(75, '71', '1', '1663386944'),
(76, '86', '81', '1663407135'),
(77, '86', '4', '1663407376'),
(78, '86', '6', '1663407470'),
(79, '86', '5', '1663407524'),
(80, '86', '80', '1663408442'),
(81, '79', '82', '1663413929'),
(82, '79', '4', '1663414156'),
(83, '79', '6', '1663414185'),
(84, '86', '85', '1663431836'),
(85, '5', '85', '1663455805'),
(86, '78', '85', '1663465454'),
(87, '5', '6', '1663470486'),
(88, '5', '82', '1663470515'),
(89, '5', '4', '1663470567');

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

--
-- Đang đổ dữ liệu cho bảng `code_products`
--

INSERT INTO `code_products` (`id`, `name`, `amount`, `demo`, `thumbnail`, `download`, `time`) VALUES
(1, 'Code profile v4', '0', '', 'https://github.com/ngocminhvn/profile-v1/raw/main/assets/demo.png?raw=true', 'https://trumsource.com/upload/logo_5087.png', '1659508194'),
(2, 'Code Check Scam v1', '0', '', 'https://i.imgur.com/reRnP9y.jpg', 'https://drive.google.com/u/0/uc?export=download&confirm=C76E&id=1m1eG3CnPMnMofk6fOMrugHrRzjE2xmOc', '1660400041'),
(4, 'Code Profile v1', '0', '', 'https://i.imgur.com/EL1K7an.png', 'https://github.com/trumsource/thongtinthanhtoan', '1660400932'),
(5, 'Code Profile v2', '0', '', 'https://i.imgur.com/fYhGgeQ.png', 'https://github.com/trumsource/theanh28', '1660400948'),
(6, 'Code Profile v3', '0', '', 'https://i.imgur.com/aYmzjlm.png', 'https://github.com/trumsource/profile', '1660400980'),
(79, 'Template Card v1', '0', '', 'https://i.imgur.com/WmxvD1b.jpg', 'https://www.mediafire.com/file/mujnaw8xmt3x2ea/profile_card.txt/file', '1660445838'),
(80, 'Template Card v2', '0', '', 'https://i.imgur.com/gf3QOrr.png', 'http://www.mediafire.com/file/9hzzx0iydohruby/profilecard_v2.txt', '1660445882'),
(81, 'Template Card v3', '0', '', 'https://i.imgur.com/SD3auql.png', 'https://www.mediafire.com/file/z4bob4hddloq8vp/donate-template.xml/file', '1660445907'),
(82, 'Template Card v4', '0', '', 'https://i.imgur.com/gx73Fy9.png', 'https://www.mediafire.com/file/asxj3t2hngpis3a/profile-card-template.xml/file', '1660446023'),
(84, 'Code Clmm VIp', '350000', 'https://i.imgur.com/W4BcRIV.png', 'https://i.imgur.com/W4BcRIV.png', 'https://www.mediafire.com/file/47iqwqqbvvdwttx/clmm.zip/file', '1663428354'),
(85, 'Code Clmm Free', '0', 'https://i.imgur.com/cYMlGcV.png', 'https://i.imgur.com/cYMlGcV.png', 'https://www.mediafire.com/file/bq7m6tqmfnw1a3o/game_momo_200k.zip/file', '1663428952');

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

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `theme`, `modal`, `thesieure`, `dlsr_momo`) VALUES
(1, '', 'hjhj', 'remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d=eyJpdiI6InBFRGdjTHU1dncreFB4a3RNWGRZRnc9PSIsInZhbHVlIjoiSUhMdVlzYTVCTFFBU3BUMjBYbVFEMUZ6ZVwvQ21iT1lES2hFSFowaWZFR2ZwRGVuVUtLZUtWenBMVVwvN1ROSlBcL2pqWkpNejFRb1hcLzlBR3FRTDdtdGhvcmFleHZFa0U3TStIeHl3SE5HamY2SDg2WW9GTkdTK09cL0tDanNZZ2IxczB2K2dpZmNlMElXcHVaRm5vVjdURVNJK1ZVQVZ3VERXSHpYRzJKRWd3ZU5tZTMrY0liV2pvekM5c21rc203Z1AiLCJtYWMiOiI3YmNiMzFjM2Q1MDMzMzdhNGUzOWMzNGE1MDY4MmZiNGZhNjU0OTA3NTY1YjRiNTU3OTFhOWZhMjVlZTk4MzJhIn0=; vnws=97639669f6a340de20f61e442bd81a68; PHPSESSID=n3031vlogrvfbd0kodv6dtimt0; lang_code=eyJpdiI6Im9SWTV5NG5HZWFDbnZZNytsRGVnK2c9PSIsInZhbHVlIjoiVmZnUXJ3NmZXdityU0NBdUVDcmdSZz09IiwibWFjIjoiNjZiMjA4MWMxMTc5ZGIxNTQ0OGQ1Y2M2MTljYWE4NjFlNDdjYzBiYTM3NGI2NDEwNTI0OGUwM2ViY2MxOGM2NCJ9; client_info=eyJpdiI6IkFleldUTktaNzE3cGNubk4yaWJ3dnc9PSIsInZhbHVlIjoiN3N4Ymc5V1dNMmptQndLSHhRa0w2UT09IiwibWFjIjoiM2I1YjVjN2UxNDM0OGEzNzY5YjFjZDg1ZmYwOTFkNzkyYjU1MDk4NGRlMTJlZWE4YjM4ZmYwNGI1Y2MzMzMwOSJ9; XSRF-TOKEN=eyJpdiI6ImZpQWQwaEtTbUh6YlwvcUZiMEJuSmdBPT0iLCJ2YWx1ZSI6Ijdhb2J5MjBYZ1hcLzVtcTBUblhiRlZENEs1Q0NmR0l5RytFVE5VeFVOWFwvQStVN2RIbFU1blFydmViVkJZWjBEZCIsIm1hYyI6ImVkYTVhODk1ZTNiMmM2NzgzMDVkZTI5OTZiZjZmMzI1NWMyMjBlMzZlOGY1ZjkzMTliMWNjNzEyNmJiNWYxYzEifQ==; web_session=eyJpdiI6InNxMUJ3WVlKa0R3UWJQQmpKQUc0SFE9PSIsInZhbHVlIjoiZTdWUXdaMDJIeEdIUjJZR05ZUFwvclYrOVdCXC9hWXFSSmZLNjNRRTE5cmljb1dxU3NCY1didGZIMjRGeTl4SDlCIiwibWFjIjoiZjg2ODNkYjY3MWRiYWJiNTdjZmFmMDNlZWMxOGI0NWVmODEyYTI1MGRlOTQzM2MxZGUyMjRmZDYwMWNmMjNiZiJ9', '1');

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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `money`, `total`, `role`, `token`, `cookie`, `ipaddress`, `time`) VALUES
(1, 'Trinh Ngoc Minh', 'trinhngocminhads@gmail.com', 'trinhngocminh', '3b38618c761774a1129a9703686d1a4974f81876', '1000', '10000', 'admin', '5l9fnddfu1w5louuo5pk6tyd64p3dhdw', '4063csr7gty8r26ki4u7zegbprjr8p6m', '2001:ee0:46f1:91a0:9d08:70f4:caac:d6c', '1663470294'),
(2, 'Trinh Ngoc Minh', 'Admin@gmail.com', 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', '0', '0', '0', '0hlo3uyshrlkwjqbsgxfah0pgk9u9kw7', '8zrqeak7ptvzn2wdb6jk4n6gq9cupm4o', '2001:ee0:46f1:91a0:d022:44ad:f600:1c00', '1663336262'),
(3, 'Tuấn', 'nhihuynh1812008@gmail.com', 'Tuan30607tt', 'e84fc89a77bb12e5f70905f13c69bd29f9621303', '0', '0', '0', 'xwdxf63jq6k9n5ocdh94g6exqmnvn3h4', 'cb96omcps7ncswfzimbho7uuw6p1oc85', '2402:800:62a6:f23e:f514:5073:c7e0:d8b6', '1661419660'),
(4, 'Nguyen Dinh Bao', 'contactme.vhs@gmail.com', 'ndbpro116', '3acd0be86de7dcccdbf91b20f94a68cea535922d', '0', '0', '0', '1qzfst11mtj4kp1tp72cougdw5te1v7x', 'vyfeahepdz4oluipuim5s36hp3eqtdhx', '2402:800:621f:53e2:35cd:dbcb:1e33:4365', '1663472931'),
(5, 'Trần Tùng Dương ', 'tungduong1231t@gmail.com', 'tungduong1806', 'f87c083d897cdf826a10528e857cd6355e0c661f', '0', '0', '0', '2legf8n7o3tz6sic4ro4aqmug4o3fda6', 'wk7ur63r8n7r3iwhahh5f5l5zr1utv11', '171.236.4.19', '1663455770'),
(6, 'register.php', 'tiendepttai247@gmail.com', 'trumcodevnnn', '767020fa7b73428406fac3115a177074f197e8fd', '0', '0', '0', 'zu3w61fzu9fc0jeg88sly70obnrz1n9c', 'p06xrfojvsufzt5qlwo17qsp90jxjsyc', '14.187.153.46', '1663330556'),
(7, 'doan the bao long', 'longdz02091@gmail.com', 'doanthebaolong', '4ed85a6c19ecf01fd503ba2892392cc8186a80db', '0', '0', '0', 'q003vdnxy0ashrz0x8nk6vhy8sf59dmk', '8zi1kmewnxf759951frsoapos88cadgq', '2001:ee0:4c7c:4dc0:58ba:3949:d0b1:22d3', '1662829917'),
(8, 'Nguyen', 'neko12vn@gmail.com', 'mnbdzvcl', '015b7a905f174b0ca05193ae3d02a999399f5ab8', '0', '0', '0', '2jbkyesprgrh6m228asfdyoic048svir', 'i5vg40pnr87rt49yry1nbts23psnqc8d', '2402:800:621f:5751:282b:7aee:6eb7:4ba8', '1662233558'),
(9, 'Chào ', 'chaonguyenteog@gmail.com', '000123', '08a8b409b49c39f88848b856383e49add8afd2ef', '0', '0', '0', '7moi23r3fzxx6hd9rsmenjvjzl86r497', 'j9xhmx8z17et0p29rbyq2v18tg9ruhty', '123.21.109.87', '1661450286'),
(10, 'Tạ Quang Phú', 'caophongdat89@gmail.com', 'taquangphu1', '14fdd0f4de3c259bb4d097f7593101d91a277179', '0', '0', '0', '1wjga7ehjtw3mqy29y918rr9tzjvpbtg', 'qnnq316o3hzlhtzs7ktr8akq50w6isw6', '125.212.159.155', '1661457859'),
(11, 'Bui Duc Hai', 'tichxanh.vn@gmail.com', 'buiduchai.vip.info', 'e77a62c534e069beb768e6bc11fd57bb7b48a019', '0', '0', '0', '7yijkkvucez4clfzksai1xrm5hwfi83b', '9jiuyb95olwoduhohb5ava8hvs5ya36e', '2402:800:611a:bbc6:8c6e:33a5:2e01:9e24', '1661484262'),
(12, 'gggggg', 'contact@detonight.ml', 'dtz124', 'c5ee0abe86abc91d3110e9cd8ffbcda7f49b9ba5', '0', '0', '0', 'w5rar1sh13l79189swup5wwzzcn30qbv', 'mqcqddobcgk84kqhkc5759qi8r17ks5p', '2402:800:6310:975e:9fa:bb60:934c:c6ba', '1661496756'),
(13, 'Minh Hiếu', 'thienle01247@gmail.com', 'nearzek', 'e4f06ca54a25b54e692692b4721cab0dc135b928', '0', '0', '0', 's9n1crec9237r11wg4y0jvodqg34y15a', 'slskx0imzlti567or8f4l950j4vindlk', '14.245.199.3', '1662300619'),
(14, 'Nguyễn Thị Kiều', 'beminhle1971@gmail.com', 'nguyenthikieu1999', 'd2491e7e76cbd51d1c90341b4f97a833e9d6ed0a', '0', '0', '0', '436c1t8js5wx61vhvb2z08fziji6vpnw', '671sl4z644qnvf5aafotu35xvibuq8ay', '14.168.163.33', '1661531742'),
(15, 'Kế Thiện', 'kethienit2510@gmail.com', 'adminkethien', '9c46540fa8bf9ff6dc7bae07f93d2afec14b8996', '0', '0', '0', '7voxjmiibmbigcd65skaz5a1bawnra8x', 'vczc4axajuteqcixf571p0hzs0z6iewx', '2402:800:620c:c6a2:518a:a651:311c:8b6', '1663393283'),
(16, 'quang pro', 'admin@laoviets.com', 'Qua9988', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', '0', '0', 'zbl7qex2m4s4m50pghuya3ngsvsjo5da', 'ul9ke3jturufwa186chln87mv9864m9o', '2001:ee0:4b6f:23e0:6cb3:ffdc:aa8c:81e3', '1663153944'),
(17, 'Kim Ngọc PC ', 'dathucheckco@gmail.com', 'kimphudz', '3507da0fd3a7778361b87a09281495ae5c0cf183', '0', '0', '0', 'u97dyn4paguksz86vv6899i9bnjr69gq', 'et6dvnuyaflsz6lrd6r5dv4gfcv3tu27', '14.161.209.209', '1661598612'),
(18, 'TranMinhDat', 'tranminhdat030@gmail.com', 'TranMinhDat', 'f18ff78050bfb2d6c4f359eb3c11c049494d7ea3', '0', '0', '0', 'd4dd5btja7d3bakuivk411kzvi7h0t04', '6b8xkb0lspo1k29ojnwfehj6ewsh7x7g', '2402:800:6341:9ef5:ed4a:8b7:6bfa:cb93', '1661675671'),
(19, 'Trần Thanh Sang', 'Wuiwiwiiwiwiwiw@gmail.com', 'Wuiwiwiiwiwiwiw', '02c723a91077beafc4269c54ff0db451b88c10bc', '0', '0', '0', '8cvpg2njarv10lhbhcfrzgklplp4cua4', 'ip77djroedmv2m17s8gxnwgv8jvdi89z', '2001:ee0:4da4:c0a0:19cd:e61d:6887:cc77', '1663430668'),
(20, 'bui nhat phong', 'buinhatphong2x@gmail.com', 'buinhatphong', '7c40737d6c9a5960e413e2a4d5e9a72483ffa4f4', '0', '0', '0', 'r6jd1t8972h04x2yddoyc0c5ue3494yf', '306x6rbxdtls3j9hyjh5i9x1hzefw7sz', '14.233.235.201', '1661691907'),
(21, 'hfngbfgh', 'hfngbfgh@hotmail.com', 'hfngbfgh', '86f8d0af84c848c90e1a380df57d72b81c568132', '0', '0', '0', 'n37ibnxpicetxu6vqq2if2u9eemor2h7', '3hpv2g1mil9irzu3s3sp8wvrdp4y5ax4', '2001:ee0:4929:efb0:bccf:b87b:3ef0:e8a', '1661694276'),
(22, 'Anh có thể ', 'phanbangahatinh@gmail.com', 'Ngabinh99', '14a2ba8e986617941c4079225d658eaaed561da7', '0', '0', '0', 'gpm97wil5eo3r06y1da8c80xsnbu7oac', 'i6r5rp6cqw8rmoa2vjbg0fh40u4z8t7y', '2401:d800:b812:5e12:58ef:62:244c:3f1a', '1661728600'),
(23, 'Kim Ngọc PC ', 'dathucheckco1@gmail.com', 'kimphu2071', 'ed82cb23d22e65440910ce20e75d16f67135cd8d', '0', '0', '0', 'q8r3ak2ircdkrdymskn6tlc6nlapqigq', 'fyazx2diyyaxp3a9vjgo0fx26r2csf3v', '14.161.209.209', '1661744253'),
(24, 'abcde', 'abc@gmail.com', 'abcde', '3f369f90f24ffe892810dda78cc79cebcac89661', '0', '0', '0', 'z4cxizcq450mxnvy34ep9igwe1v2pkur', 'oejndhi2jxs85atbtj1sbjjphdxreh14', '2001:ee0:53db:4b00:64c3:a522:3352:e0f8', '1661755764'),
(25, 'kienday', 'kienhuuhu@gmail.com', 'kien113', '0249689533794d6f9c7458239ad48f6d853fd4c7', '0', '0', '0', 'aoh9hkles79qujk62eu2bzl99p4fmsxc', '37z49ixvvhprugc4klx8hxgkb0u03lqi', '14.162.86.218', '1661756343'),
(26, 'xdx25vn', 'mountdrop098@gmail.com', 'daubuoicamz', 'f9750ed3f4afd826a718ce584c69a10d9b5652f1', '0', '0', '0', 'w3li6tb1w0sot9c5e84x9chvji997kb0', 'kntyuen3qw3jtjhdfcp61s76fooxekpk', '2405:4802:b2b2:5bd0:6934:8c8d:e43f:9121', '1661768122'),
(27, 'phamson5', 'nguyentienloc2k8@hotmail.com', 'phamson5', 'a4c86b0dcd5ddcf082ebf5d2e7d94d3a5552e7e3', '0', '0', '0', 'wzafj04yriv7ehcd9my48t18hd6xneul', 'dteaz7nav7ksy47qssq20b3ywi7wxtfy', '2400:8901::f03c:93ff:fe7b:b51a', '1661774371'),
(28, 'phamson', 'nguyentienloc2k82@hotmail.com', 'phamson', '13dd27dd8eecb0f23abc160adb65829f224f20eb', '0', '0', '0', 'bw3nen7wjlwp7vzlzmtixqd788dihvdc', 'o7cmhkmhaugq9p564qsuhtzf0hplxcct', '103.82.25.230', '1661838570'),
(29, 'Trịnh ', 'tuducluong098@gmail.com', 'tuducluong098', '0e9b39c7d1e46175ecc0c74b501e20f129c672e4', '0', '0', '0', 'wr5me7j5sw9bcl5jafezsna88m7mgkla', '4t515hig2aez60p1y32m3apjwlvhww4m', '2402:800:623e:236b:a8c7:bfd8:9f:d5c4', '1661778458'),
(30, 'trịnh văn phươnt', 'Subfbvipadmin@gmail.com', 'Subfbvipadmin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', '0', '0', '8i270jiiji3lxxb9j1qc2mg91obo73gu', 'g806b3cszxy8wi0rtniskb59x18fb2h9', '2402:800:623e:236b:a14e:d88:58f2:d1d5', '1661780315'),
(31, 'Lê đức hoàng phúc', 'phuc@xxx.xxx', 'Phuc1111', 'f982ffc8ad2aa992334dc23deb55c2da4ad722e7', '0', '0', '0', 'fb8tv9zdap4nuw09mi8fg9mia8cu9hpu', 'jck9ydyn754bzkkdgldqo922px90qrct', '112.197.72.252', '1661786334'),
(32, 'Nguyễn phát', 'phatgaming071@gmail.com', 'Nguyễn phát', '791a2ebe6948361e26a0c85f4161dd3b1af4688a', '0', '0', '0', 'inm5qttqmhk5twtfhttntz414nmu6qpd', 'h60n7t5xac4u5x7bqetiv8ezreud8wtw', '2001:ee0:557e:ef70:b576:6334:2b23:23d8', '1661804559'),
(33, 'Đinh Duy Vinh', 'dinhduyvinh@gmail.com', 'duyvinh09012005', 'f5b3ed389eb2059b864075af2e3ae6438889ef7b', '0', '0', '0', 's89gz5iy9znwc7sg9grrv98boi7w0qcd', '13n198ezhzzp1rrvmuee37vhw3nwpgej', '171.234.12.135', '1661809314'),
(34, 'Bướm Em', 'bluevn26275260@gmail.com', 'buomem', 'f1bec2ba677f6f1bce6279bab321dfc9521b7c39', '0', '0', '0', 'tdoi36ydj79vaooq8b6z94lds7y7diua', 'c6f5slx4rzdr4kraryt18t15p39ns7ag', '113.165.174.47', '1661840164'),
(35, 'Long Việt Anh ', 'missfitgoaliegurl07@yahoo.com', 'Longvietanh', '3acb6a0ccb06b099fa68d6ce2b7a4c46bd4b53b6', '0', '0', '0', 'bkmqaxg76c4rrq1lm0kl8npmd5ms1okf', 'l98u7jxrrf7wh0utcfibuptqbakrluiy', '2402:800:61ef:e077:4950:e7:422b:e5b4', '1661844633'),
(36, 'cocaidaubuoi', 'cccccc@gmail.com', 'cocaidaubuoi', 'e7d6a168ae737ad245cf364b56ce6ea28a1800cd', '0', '0', '0', 'vbutbf0s74xjhfjsu430f79z059cx37i', '4dz6w0xgbmgrgmog64pvgr60iot821k6', '58.186.101.207', '1661851787'),
(37, 'trần sơn', 'freegay86@gmail.com', 'sontran184', '12340ba4361769063ad90d062e994be96545d60b', '0', '0', '0', 'kfzqnteqvc0aa9irdcgekhn99iiswik0', 'wabzxjs6irzs5r7wrr52vih94mmzt8gr', '2405:4802:5158:4f90:743c:5c9f:f433:700a', '1661869680'),
(38, 'Nguyễn Hải Nam ', 'nguyenhainam120508@gmail.com', 'Admin205', '4ffc4589451bd5237f606a420fedf69515509d20', '0', '0', '0', 'ffex11h8d90t7xwrmjk7eq87so9t5gs4', 'eratm3ypqt1myd8q4mgpw6ca7rx48jn6', '14.251.185.6', '1661876042'),
(39, 'Trần Minh Tuấn', 'tuantranminh500@gmail.com', 'tuan159', '095ff02d1e2041c0a8c91b0b44679a15c6b068c1', '0', '0', '0', '4u75onu7qt2ytf53d96i98kdvi1k4oxr', '4kr7yiknggni6djab22obhqatxf07itl', '2402:800:623c:33b4:2dd4:5bb:c445:4f23', '1661879029'),
(40, 'Lê Công Vinh', 'vinhtienle789@gmail.com', 'lecongvinh', '3d2220587ec53b83b71a4e24742f587b7d5ecede', '0', '0', '0', 'lxjy6pcgwiute1xrd6mnwxmy2qq2x1z6', '0q3f9o6sakcv902hqi2pzdafzb2f4czq', '42.116.243.230', '1662015361'),
(41, 'Lương Văn Tân', 'Tandz00@gmail.com', 'Tandz00', 'c44ada8cf488d4f3b66a7665c9153522bb8bf0b4', '0', '0', '0', 'bvuhdlz7c0owmm3fupstwwau2gd4fs30', 'ktmsarpkosr5cqntlifynoc2nhx1n4az', '42.116.228.67', '1661918477'),
(42, 'le văn ben', 'kggzrffqexypl@eentvillage.org', 'hiepgiadung04', 'd1ae44021f9cb1bebecab4b6dbff3dc287fb81fd', '0', '0', '0', 'rjf9r19nv8hqv2ee2wmodrqhmzgimc35', 'dsl39urx3jj0gqkyvlpxrrefdkc8k2lu', '2405:4802:129:3f00:2c22:f8a3:338b:e60f', '1661951389'),
(43, 'Khoa Đẹp Trai', 'khoalynoname147@gmail.com', 'toilatrum147', '0e7b76499b954e6987b9b5469525f42516cd43b6', '0', '0', '0', 'vv7qvp6r68m3jihn0qyz5jx7in75dpzk', 'u0v6wsv9v78iunngvvat0x8lu9z38njs', '2402:800:63f1:847b:3072:ae21:6900:b6fa', '1662007334'),
(44, 'Trần Đức', 'ducktran2610@gmail.com', 'TranDuck_', '33405c56d14a743172384082a54d5b91b52d5a86', '0', '0', '0', '78u5jmcxdyg8clbkef05yhcb9gpvu9vy', 'wbr0b93wpafbzn8l3omuk1qg6ri2zdwi', '2001:ee0:4c65:dfc0:7db1:3614:3d0f:633f', '1662019516'),
(45, 'trgdz', 'trgdz@gmail.com', 'trgdz', '3777b23d854c70515e856fa4531f87eb6253c63e', '0', '0', '0', 'p2e6hyrubxnhhyaeodjzmte7qhejirfl', 'kgpdga99t8koipluk8biezuey0veezv9', '2405:4802:174:fc80:d81a:6b47:9443:2531', '1662023507'),
(46, 'crushtuoibeo', 'kbcrush2712@gmail.com', 'crushtuoibeo', '075b9145e782de0ce1fd8e0f744a8436ba2e275f', '0', '0', '0', 'mxeosgfil3zbie1j77nkw8ftcy87kjdd', 'gkl6i2gakfq7yj1dkei70245f6p8p6qt', '2001:ee0:4161:7240:dcab:e1a8:a925:269', '1662025800'),
(47, 'gfykbhss', 'tungduongvip.com@gmail.com', 'tungduong88', 'f87c083d897cdf826a10528e857cd6355e0c661f', '0', '0', '0', 'hl5a2t2f9dxsvt81l5obw7uulu3qflac', 'g2limypl3kiy8ggloxdxht3f5mr6ijem', '2402:800:611b:a2aa:5033:414c:a384:eeac', '1662082327'),
(48, 'tài lỏ', 'tritailo@gmail.com', 'tritailo@gmail.com', 'bfe9d9e34649eb83ddf8dee6d4f9d9904d82bbbd', '0', '0', '0', '7l7717ghhmlz2cxri2gj16js9tuimfbu', 'noqrdskzfddu2mvxe7bo2lhvurlwtrch', '2001:ee0:52bb:a410:d59b:2ea4:4de3:f697', '1662109442'),
(56, 'monsadboiz', 'monsadboiz1@hotmail.com', 'monsadboiz', 'ada6970c69cda10628b93b696c687483e1b2bf4c', '0', '0', '0', 'rqyfm54svd1j5qs5nt07lhbjpyznylhi', '10qeid4nj747fo5rcg87n1gct1xbz0qz', '2001:ee0:4919:f890:91f1:240a:ca8f:7e1f', '1662181478'),
(57, 'Hồ Đăng Quang Vinh', 'vinh1982006i@gmail.com', 'vinh1982006i', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', '0', '0', '0', 'tovku6wdw5ay2zjgbreofmju7j7mdz5b', 'fijzp4k2n0ek9lstfg932xhyji3pnwry', '2402:800:63ac:ed60:844f:ce0:e2a:ebe', '1662184314'),
(58, 'abcez', 'abcdef22@gmail.com', 'abcdef11', 'd5662d7353c6257f68cab2a3b0f758cc79b1ac5e', '0', '0', '0', 'yrkzqwqebu8hzqgmh1ogdlo3ub4a807q', 'yay6qmvguwfbe9s8gc42rd12nywhuhd2', '171.235.171.40', '1662229344'),
(59, 'Nguyễn Quang Tâm', 'nguyenquangtam179@gmail.com', 'Quangtam', '28562aff73cad1699125f633eecea3548044d455', '0', '0', '0', 'azgjfyb09wuy5826s4aip5bx5jjirj2o', 'u7d18tg9zf3knvj1w7bfcntd6gu92dhi', '2405:4802:15c:240:a441:50c5:8242:96fa', '1662254616'),
(60, 'Jack 5tr ', 'daylaemail412412414@gmail.com', 'ert123', 'b57a03b8069fc060b913f27ebd8f7b1cd8665903', '0', '0', '0', '7ybyzzun8wr1j31qc3y359kbkheqh6zj', 'jovec9bsffxnls2tom8kppm3prh27uhv', '117.2.18.44', '1662440190'),
(61, 'Song Uy', 'vngosu7@gmail.com', 'Uytricker', '32c09ff6140c214d246fd117ed44fe38a4f5e11c', '0', '0', '0', '62tiz899d0iyftzbtmaybh39fw5jguk6', '8lt0z7l1cxlh2ac3kpwebt4jpjs2u0ce', '2402:800:6216:1ca:a471:5bc2:4ea0:a372', '1662260950'),
(62, 'Concuto', 'truongbaokhang311010@gmail.com', 'Bkhangs1616r', 'f6ee45675f71a0a00811d648a1c8665d3289a1ea', '0', '0', '0', 'qu4vcquan76ye85wg8l47r1voy0kpa1j', '7x4tnje12two52c9bqzvoyeyr5zkybr9', '2001:ee0:5291:7ea0:4:3b61:6fde:fea4', '1662297823'),
(63, 'sdgauagsds', 'iamnguyenthaitrung@gmail.com', 'gdsiuasgduagsdkj548d748s4d', '66faa60462eaefad75c94fbea98d0cb1b6d049c4', '0', '0', '0', 'eoqaa482m9lpw4afsen56vhr3fqpdx1a', 'uw12h7cuv6bk9xwtws9csc51gb181l14', '27.64.197.247', '1662371570'),
(64, 'Huỳnh Ngân', 'ngancute3000@gmail.com', 'ngancute3000', '0f5bc3fdf1f48db7b0067d1d33d7249a7c927b2a', '0', '0', '0', 'cw93ljgx322sli28xel7n17v2ejsiy1t', 'npt0mzynsh8o2s911m097bu94bza5c68', '2405:4803:c820:d100:719e:3226:9185:bf3', '1662374934'),
(65, 'hhhhhh', 'bachviet0906@gmail.com', 'bach23', '472dc7731656048bd8f40b5391245e0f9aa97dfb', '0', '0', '0', 'hiefzew4bo8sxf2f94tho4dfu7y9ax8u', 'q7k09yi0cfu9kd4ue2hyjr63bszjmoyf', '2405:4800:75c6:10c5:84d7:2016:2e0:aa7d', '1662418978'),
(66, 'phsn â aa', 'tuancat2k5@gmail.com', 'phananhtuan', '8b0a49a461d9faf37e755515afc5d3337a9c2331', '0', '0', '0', '9v1ry0pgzx2hnocs58r4rxqwz60kzf51', '00e3xatwb6st750zq71ycbrffcuf79ot', '2001:ee0:4bb4:2510:6041:be7d:d98a:e7fa', '1662465303'),
(67, 'gggggg', 'contacggggt@detonight.ml', 'Detoz', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', '0', '0', '0', 'ipccyaf95ssb7hcfm3x3eufau874nz7e', 'amoef7w3ovivaz9sl9pbt0db0n7dwk3b', '2402:800:6310:975e:69d9:e8c3:116d:2f4a', '1662473311'),
(68, 'Le Gia bao', 'Quynhanh220066@gmail.com', 'thangthan1508', 'fe9b1dc305e7d2a1b752c24e1bdf99c152487223', '0', '0', '0', 'vvx7vz0a8uyjgm6u71aqnqy4ij6wewlg', 'fc8b990suec6h78er36s27a1kpr6vin7', '2402:800:6390:7fab:c0cd:a3b:33b4:332f', '1662479115'),
(69, 'vo minh thái', 'vominhthai@gmail.com', 'vominhthai', '7e7db8bcd93d74d38d45d276271c1643ca200fb1', '0', '0', '0', 'kpvwnyedn0hnuxy4pxrprdc7aiudr7mo', 'n8amnhuhoultmc4rpwd0rnyn5h3txd74', '113.182.254.224', '1662480808'),
(70, 'Nguyen Van An', 'l3lchipp@gmail.com', 'chip2502', 'd12702432d35e1d5d95ed19793b80eb8fa676f81', '0', '0', '0', 'w6b9ne7rcbyhdhrfk7vh0tzkpt3gdpa1', 'ed932jigzypv289ppjcn7obbed1e7aaa', '14.232.105.88', '1662556449'),
(71, 'Lương Quang Linh', 'bowyyt2003@gmail.com', 'bowy2003s', '82bc7c02ae3f972655ec8fa95b5a41020f4c211f', '0', '0', '0', 'yy7pzg8ixkf4z2if0ab8thvo8rnvoq6t', 'xo9arde4vte9d5mpi8p5vrrnrpxsm0is', '2402:800:620f:3503:25c6:311b:21a1:b9a', '1662814989'),
(72, 'dang anh tu', 'tu75324@gmail.com', 'anhtugood', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', '0', '0', 'eyqin496vqo3x223te17dnlvmc3pz00o', 'ugbk3rsay707ccv3ic9pybir17hflj4b', '113.176.62.229', '1662835541'),
(73, 'lê đức hoàng phúc', 'checkmmo.net@gmail.com', 'phuc111', 'f982ffc8ad2aa992334dc23deb55c2da4ad722e7', '0', '0', '0', 'jl2r0jwoh1adug5dbof1htiakfxc610v', 'v021lqzbjh5b73f6u80m5x0hmd7l2f8x', '2401:d800:6f1:fa30:91f3:ddfe:4fc8:d6e5', '1663336188'),
(74, 'ngvihu', 'xlohuyolx@gmail.com', 'huii9999', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', '0', '0', '35l9xf5omhaahqyc0bpjpw6l8azesyrd', '8gpf8r7zodqvq2faya1y707lvunpth2a', '2405:4802:113:2610:34de:d123:128c:494c', '1662961942'),
(75, 'fgdg123213', 'dfgfdgfdg@cxZxca.com', 'dgdfgfd', 'fca110aef4640df616c8bc076baf72d2a6fd7ff4', '0', '0', '0', 'mb0ikw0z8hyv900vxdo1dtf67aw4jkcv', 'g36n8ehendyhnjya6tzuhtim2k880s7k', '2001:ee0:46da:c560:5d64:d7b2:28f0:7069', '1662966385'),
(76, 'dứdsdsd', 'Phongdz10s@gmail.com', 'Phongdz10s', '5388aae5daa116d89357af668a6dbee397f39a1f', '0', '0', '0', 'c9lrc0d7l7mtxsnmhfhec6s5io20sv2y', '1cj4u65y2dt6t26261uqyrcwlxtqe6ox', '123.19.183.206', '1662982363'),
(77, 'Beladuy', 'ntch4722@gmail.com', 'Minhzxh', 'efc950916199f376e633269b65e65c0be9d63412', '0', '0', '0', 'joxqvw7x7mqxz61atq4pekanl8b3er3i', 'wy1tnl00chmn9oy460eg77bwvb706j74', '2001:ee0:5323:1c80:59c8:be9f:444c:8c46', '1663021557'),
(78, 'Cao Minh Đức', 'adminduc@gmail.com', 'duc123', '4bb85e098d104f88629233c67d11e3c40864d8d5', '0', '0', '0', '6cvffsnolxwncb3ucd8vuelsd8nxlten', 'fcyrrzpfaqw7ciu12iouljqfhdhf6afb', '2402:800:6185:7aed:d46a:b2d8:3f33:33be', '1663070635'),
(79, 'Trọng Tấn', 'Trantotrongtan@gmail.com', 'TrumBuLoz', '65c695a459d3a93f71c734f59f61ba020ab20e4e', '0', '0', '0', '1vh3wiqw919x4yf4tkjw1a9zbwynv5ta', 'd839arr6pp8n1g48vn1f1me9na3yh12g', '2402:800:629f:7d88:6105:829c:4d67:4871', '1663142093'),
(80, 'Phât đẹp k', 'act8@gmail.com', 'Phat222', 'baac0b3bfbab6430874b8e137b1f062bab3b1cec', '0', '0', '0', '45n5u9ah2hwhraohkvtt6do9hyocuw1c', 'u3zpatm0sxyzct6a5hq632v5dclkgl3a', '118.68.15.197', '1663259708'),
(81, 'dfsfsdfsd', 'anhphu00@gmail.com', 'anhphu00', '8f912563ca425670e00f4b017b3a155beb050e3e', '0', '0', '0', 'c0hq9rwsh832qczqn0h7ptn4m09002ko', 'lhgazhg4d8sefr79h64yflnafxvkkzvr', '104.28.254.73', '1663328386'),
(82, 'daubuoicamz111111111111', 'lonzong098@gmail.com', 'daubuoicamz1', 'bed50e81d8c07474828d7f67c5c1239fdf0c9df0', '0', '0', '0', 'nkhzuy5tbb89co3uqyqbqzmu05du00wt', 'mrtgn5m7ynayivap9yhp6q7f9zo1dl5q', '42.117.163.1', '1663331147'),
(83, 'dsdgfd', 'lenhanvanhann@gmail.com', 'lengocnhan', '7930bd1b19387739e95c8043eae64272456db0ce', '0', '0', '0', 'cows0y2b321u3ni4z1jpdc2yib2gagiu', 'odqa2c2q66vzbk5r71vght53m722xivw', '27.70.175.84', '1663339417'),
(84, 'Trương Mạnh Cường ', 'ct5652770@gmail.com', 'truongcuong286 ', '243edb6c102b87531c264f820439a11c294ee3ff', '0', '0', '0', 'f4neu00s9ueqr1mzprh07tm7eum8wglq', 'm7m6alo3nnz86zfkubiqm3djikpjjqtp', '2001:ee0:4d15:1750:25bb:4f12:2bc2:7904', '1663341458'),
(85, 'Nguyễn Triệu Phúc', '123123@m.com', 'Phucadmin', '601f1889667efaebb33b8c12572835da3f027f78', '0', '0', '0', 'bfz9wd6xi1yda7h9nchqgn7ssa9jqhlg', 'ihcmgikpud6a1xez4qvtjme5t738gc0d', '125.212.159.8', '1663390075'),
(86, 'Lê Xuân Công ', 'devcong.vn@gmail.com', 'lexuancong', 'ec071df25e6952f7db55917d6b85ea2494ac70ec', '0', '0', '0', 'pfzutkpxp5hmcb5mnpmzjbqix793dhvp', 'ylyw3pszsgg7xk9vzve077ttjozlev30', '42.118.119.9', '1663406856'),
(87, 'đặng long khánh', 'khanhhvjp20092@gmail.com', 'dlkkk', '538672e50d704e368ac070cbb4fb3ee98aadb2c4', '0', '0', '0', 'dk2qpj1eenirdt07ifuvqzh63q2rdfyh', '58q3qszyef63nezett4mliva8ak48fx4', '113.167.214.150', '1663420765');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `card_user`
--
ALTER TABLE `card_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3806;

--
-- AUTO_INCREMENT cho bảng `code_historys`
--
ALTER TABLE `code_historys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `code_products`
--
ALTER TABLE `code_products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
