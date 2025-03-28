-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doan_ban_ve_xe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$GwPpZjxSyylSGvuls1/iSuj/BcTINF1wekFJ4wrQz54Vu6kdDS3hm', '0986420994', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0,
  `a_status` tinyint(4) NOT NULL DEFAULT 1,
  `a_menu_id` int(11) NOT NULL DEFAULT 0,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `a_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_auth_id` int(11) NOT NULL DEFAULT 0,
  `a_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_description`, `a_hot`, `a_status`, `a_menu_id`, `a_view`, `a_content`, `a_auth_id`, `a_title_seo`, `a_avatar`, `a_keyword_seo`, `a_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Công ty cổ phần đầu tư thương mại và vận tải Limousine VIP CÁC TỈNH', 'cong-ty-co-phan-dau-tu-thuong-mai-va-van-tai-limousine-vip-cac-tinh', 'Sự trải nghiệm dịch vụ di chuyển trên mong đợi của khách hàng chính là sứ mệnh, kim chỉ nam cho mọi hoạt động và định hướng phát triển thương hiệu của LIMOUSINE VIP CÁC TỈNH.', 0, 1, 1, 13, '<p>...</p>', 0, 'Công ty cổ phần đầu tư thương mại và vận tải Limousine VIP CÁC TỈNH', '2020-12-02__xe-tien-chuyen.png', NULL, 'Công ty cổ phần đầu tư thương mại và vận tải Limousine VIP CÁC TỈNH', '2020-12-06 18:10:21', '2020-12-06 18:10:21'),
(3, 'Bến xe Miền Đông', 'ben-xe-mien-dong', 'Bến Xe Miền Đông có từ trước năm 1975 với tên gọi là Xa Cảng Miền Đông, trụ sở đặt tại số 286 đường Lê Hồng Phong, phường 1, Quận 10', 0, 1, 2, 31, '<p>Sau ng&agrave;y đất nước thống nhất 30/04/1975, Ủy ban qu&acirc;n quản th&agrave;nh phố S&agrave;i G&ograve;n Gia Định đ&atilde; giao cho ng&agrave;nh Giao th&ocirc;ng Vận tải tiếp quản, tổ chức điều h&agrave;nh Xa Cảng Miền Đ&ocirc;ng thực hiện nhiệm vụ ch&iacute;nh trị, vận tải giao lưu th&ocirc;ng thương giữa hai miền Nam &ndash; Bắc. Ng&agrave;y 11/12/1976 Xa Cảng Miền Đ&ocirc;ng Trung Bộ ra đời l&agrave; tiền th&acirc;n của C&ocirc;ng ty TNHH một th&agrave;nh vi&ecirc;n Bến xe Miền Đ&ocirc;ng ng&agrave;y h&ocirc;m nay. Đến năm 1978 theo chủ trương của th&agrave;nh phố, C&ocirc;ng ty Xe kh&aacute;ch li&ecirc;n tỉnh Miền Đ&ocirc;ng ra đời v&agrave; Bến xe kh&aacute;ch Miền Đ&ocirc;ng l&agrave; đơn vị trực thuộc C&ocirc;ng ty Xe kh&aacute;ch li&ecirc;n tỉnh Miền Đ&ocirc;ng, hạch to&aacute;n nội bộ, năm 1981 th&agrave;nh phố quyết định chuyển Bến xe Miền Đ&ocirc;ng đến vị tr&iacute; phường 26, quận B&igrave;nh Thạnh v&agrave; đầu tư cơ sở vật chất ,trang thiết bị ban đầu. Bến xe Miền Đ&ocirc;ng x&acirc;y dựng từ 1985 tr&ecirc;n diện t&iacute;ch khu đất 67.857 m2&nbsp;(c&oacute; vị tr&iacute; địa l&yacute; tại cửa ng&otilde; ph&iacute;a Đ&ocirc;ng th&agrave;nh phố Hồ Ch&iacute; Minh, được bao quanh bởi c&aacute;c đường Quốc lộ 13, Nguyễn X&iacute; v&agrave; Đinh Bộ Lĩnh, phường 26 &ndash; Quận B&igrave;nh Thạnh). Theo luận chứng kinh tế kỹ thuật x&acirc;y dựng c&ocirc;ng tr&igrave;nh Bến xe Miền Đ&ocirc;ng được Ủy ban Nh&acirc;n d&acirc;n th&agrave;nh phố Hồ Ch&iacute; Minh ph&ecirc; duyệt theo quyết định số 182/CT-UB ng&agrave;y 25/12/1984 với tất cả 19 hạng mục c&ocirc;ng tr&igrave;nh nhưng việc thi c&ocirc;ng mới được 10 hạng mục c&ocirc;ng tr&igrave;nh v&agrave; phải tạm dừng năm 1990. Thực hiện cơ chế th&agrave;nh lập v&agrave; giải thể doanh nghiệp nh&agrave; nước ban h&agrave;nh theo Nghị định 388/NĐ-HĐBT ng&agrave;y 20/11/1991 của Hội đồng bộ trưởng (nay l&agrave; Ch&iacute;nh phủ) Bến Xe miền Đ&ocirc;ng được th&agrave;nh lập lại theo th&ocirc;ng b&aacute;o thỏa thuận số 27/TB ng&agrave;y 11/01/1993 của Bộ Giao th&ocirc;ng Vận tải v&agrave; quyết định số 40/QĐ-UB ng&agrave;y 26/01/1993 của Ủy Ban nh&acirc;n d&acirc;n th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; ch&iacute;nh thức trở th&agrave;nh đơn vị độc lập trực thuộc Sở Giao th&ocirc;ng vận tải TP.HCM. Th&aacute;ng 11/1996 thực hiện quyết định của Th&agrave;nh phố Bến xe Miền Đ&ocirc;ng đ&atilde; tổ chức tiếp nhận chuyển giao một số luồng tuyến từ Bến xe Văn Th&aacute;nh về Bến xe Miền Đ&ocirc;ng đồng thời được chuyển th&agrave;nh doanh nghiệp nh&agrave; nước hoạt động c&ocirc;ng &iacute;ch theo nghị định số 56/CP ng&agrave;y 02/10/1996 của Ch&iacute;nh phủ v&agrave; quyết định số 5347/QĐ-UB ng&agrave;y 02/10/1997 của Ủy ban nh&acirc;n d&acirc;n th&agrave;nh phố Hồ Ch&iacute; Minh v&agrave; cũng trực thuộc Sở Giao th&ocirc;ng Vận tải th&agrave;nh phố. Ng&agrave;y 15/7/2004 Ủy ban Nh&acirc;n d&acirc;n th&agrave;nh phố Hồ Ch&iacute; Minh c&oacute; quyết định số 172/2004/QĐ-UB về việc th&agrave;nh lập Tổng C&ocirc;ng ty Cơ kh&iacute; Giao th&ocirc;ng Vận tải S&agrave;i G&ograve;n th&iacute; điểm hoạt động theo m&ocirc; h&igrave;nh C&ocirc;ng ty mẹ - C&ocirc;ng ty con (Bến xe Miền Đ&ocirc;ng l&agrave; th&agrave;nh vi&ecirc;n của Tổng C&ocirc;ng ty); đồng thời ng&agrave;y 30/12/2005 Ủy ban Nh&acirc;n d&acirc;n th&agrave;nh phố Hồ Ch&iacute; Minh c&oacute; quyết định số 6683/QĐ-UBND về việc chuyển C&ocirc;ng ty Nh&agrave; nước Bến xe Miền Đ&ocirc;ng th&agrave;nh C&ocirc;ng ty TNHH một th&agrave;nh vi&ecirc;n Bến xe Miền Đ&ocirc;ng (sau đ&acirc;y goi tắt l&agrave; Bến xe Miền Đ&ocirc;ng)</p>', 0, 'Bến xe Miền Đông', '2020-12-02__ben-xe-mien-dong.jpg', NULL, 'Bến xe Miền Đông', '2020-12-02 16:20:44', '2020-12-02 16:20:44'),
(4, 'Bến xe Nước Ngầm', 'ben-xe-nuoc-ngam', 'Trụ sở: Số 1 Ngọc Hồi, Hoàng Liệt, Hoàng Mai, Thành phố Hà Nội', 0, 1, 2, 14, '<h2>Hiện ch&uacute;ng t&ocirc;i đang cập nhật th&ocirc;ng tin cho bến xe n&agrave;y.</h2>', 0, 'Bến xe Nước Ngầm', '2020-12-02__ben-xe-nuoc-ngam.jpg', NULL, 'Bến xe Nước Ngầm', '2020-12-02 16:19:31', '2020-12-02 16:19:31'),
(5, 'Bến xe Mỹ Đình', 'ben-xe-my-dinh', 'Trụ sở: 20 Phạm Hùng, Nam Từ Liêm, Thành phố Hà Nội', 0, 1, 2, 15, '<p>Hiện ch&uacute;ng t&ocirc;i đang cập nhật th&ocirc;ng tin cho bến xe n&agrave;y.</p>', 0, 'Bến xe Mỹ Đình', '2020-12-02__xe-khach-my-dinh.jpg', NULL, 'Bến xe Mỹ Đình', '2020-12-02 16:17:21', '2020-12-02 16:17:21'),
(6, 'Bến xe Gia Lâm', 'ben-xe-gia-lam', 'Trụ sở: Số 9 Ngô Gia Khảm, Long Biên, Thành phố Hà Nội', 0, 1, 2, 6, '<p>Hiện ch&uacute;ng t&ocirc;i đang cập nhật th&ocirc;ng tin cho bến xe n&agrave;y.</p>', 0, 'Bến xe Gia Lâm', '2020-12-02__ben-xe-gia-lam.jpg', NULL, 'Bến xe Gia Lâm', '2020-12-02 16:16:18', '2020-12-02 16:16:18'),
(7, 'Limousine VIP Các Tỉnh Khuyến mại lớn', 'limousine-vip-cac-tinh-khuyen-mai-lon', 'Đang cập nhật', 0, 1, 1, 11, '<p>Đang cập nhật</p>', 0, 'Limousine VIP Các Tỉnh Khuyến mại lớn', '2020-12-02__123609997-221851596281950-1236298908171178498-n.jpg', NULL, 'Limousine VIP Các Tỉnh Khuyến mại lớn', '2020-12-02 04:59:47', NULL),
(8, 'Khuyễn mãi khủng', 'khuyen-mai-khung', 'Khuyễn mãi khủng - Limousine VIP các tỉnh', 0, 1, 1, 9, '<p>Khuyễn m&atilde;i khủng - Limousine VIP c&aacute;c tỉnh</p>', 0, 'Khuyễn mãi khủng', '2020-12-02__trungthanh-banner-home-copy.png', NULL, 'Khuyễn mãi khủng', '2020-12-02 05:08:03', NULL),
(9, 'Tạo tài khoản tặng ngay 100K', 'tao-tai-khoan-tang-ngay-100k', 'Tạo tài khoản tặng ngay 100K cho tất cả Khách hàng', 0, 1, 1, 12, '<p>...</p>', 0, 'Tạo tài khoản tặng ngay 100K', '2020-12-02__tao-tk-100.png', NULL, 'Tạo tài khoản tặng ngay 100K', '2020-12-02 16:28:21', NULL),
(10, 'Tặng 20k cho người giới thiệu khi Khách hàng mua vé lần đầu', 'tang-20k-cho-nguoi-gioi-thieu-khi-khach-hang-mua-ve-lan-dau', 'Tặng 20k cho người giới thiệu khi Khách hàng mua vé lần đầu\r\nChương trình áp dụng đến hết ngày 30/03/2020', 0, 1, 1, 19, '<p>...</p>', 0, 'Tặng 20k cho người giới thiệu khi Khách hàng mua vé lần đầu', '2020-12-03__123522944-218211486645961-4885686291303693269-n.jpg', NULL, 'Tặng 20k cho người giới thiệu khi Khách hàng mua vé lần đầu', '2020-12-03 14:03:15', NULL),
(11, 'Hướng dẫn đăng ký nhà xe', 'huong-dan-dang-ky-nha-xe', 'Hướng dẫn đăng ký nhà xe tại limousinevipcactinh.com', 0, 1, 3, 4, '<p>...</p>', 0, 'Hướng dẫn đăng ký nhà xe', '2020-12-06__xe-limousine-9-cho-nguyen-an-travel-sai-gon-da-lat-5fa4dbe959e03-650-392-crop.jpg', NULL, 'Hướng dẫn đăng ký nhà xe', '2020-12-06 15:18:14', NULL),
(12, 'Hướng dẫn đặt vé tại LimousineVIPCactinh.com', 'huong-dan-dat-ve-tai-limousinevipcactinhcom', 'Đang cập nhật', 0, 1, 3, 7, '<p>...</p>', 0, 'Hướng dẫn đặt vé tại LimousineVIPCactinh.com', '2020-12-06__wifi2-1199190.jpg', NULL, 'Hướng dẫn đặt vé tại LimousineVIPCactinh.com', '2020-12-06 16:31:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles_keywords`
--

CREATE TABLE `articles_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ak_article_id` int(11) NOT NULL DEFAULT 0,
  `ak_keyword_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_destination_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đến',
  `b_starting_point_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đi',
  `b_vehicle_id` int(11) NOT NULL DEFAULT 0,
  `b_time_start` timestamp NULL DEFAULT NULL,
  `b_time_stop` timestamp NULL DEFAULT NULL,
  `b_time` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_guest_id` int(11) NOT NULL DEFAULT 0,
  `b_price` int(11) NOT NULL DEFAULT 0,
  `b_status` tinyint(4) NOT NULL DEFAULT 0,
  `b_type` tinyint(4) NOT NULL DEFAULT 0,
  `b_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `b_destination_id`, `b_starting_point_id`, `b_vehicle_id`, `b_time_start`, `b_time_stop`, `b_time`, `b_guest_id`, `b_price`, `b_status`, `b_type`, `b_date`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 3, '2020-12-04 21:00:00', '2020-12-04 22:30:00', NULL, 8, 180000, 0, 0, NULL, '2020-12-05 04:39:47', '2020-12-05 04:39:47'),
(3, 2, 1, 3, '2020-12-04 22:00:00', '2020-12-04 23:30:00', NULL, 8, 180000, 0, 0, NULL, '2020-12-05 04:40:32', '2020-12-05 04:40:32'),
(4, 2, 1, 3, '2020-12-04 23:00:00', '2020-12-05 00:30:00', NULL, 8, 180000, 0, 0, NULL, '2020-12-05 04:45:32', '2020-12-05 04:45:32'),
(5, 2, 1, 3, '2020-12-05 00:00:00', '2020-12-05 01:30:00', NULL, 8, 180000, 0, 0, NULL, '2020-12-05 04:46:07', '2020-12-05 04:46:07'),
(6, 5, 1, 5, '2020-12-04 22:00:00', '2020-12-04 23:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-05 04:53:15', '2020-12-05 04:53:15'),
(7, 5, 1, 5, '2020-12-04 23:00:00', '2020-12-05 00:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-05 04:53:39', '2020-12-05 04:53:39'),
(8, 2, 1, 3, '2020-12-05 01:00:00', '2020-12-05 02:30:00', NULL, 8, 180000, 0, 0, NULL, '2020-12-05 06:10:07', '2020-12-05 14:11:16'),
(9, 5, 1, 9, '2020-12-04 22:00:00', '2020-12-04 23:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:23:59', '2020-12-05 06:23:59'),
(10, 1, 5, 9, '2020-09-04 22:00:00', '2020-12-04 23:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:24:48', '2020-12-05 06:24:48'),
(11, 5, 1, 9, '2020-12-04 23:00:00', '2020-12-05 00:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:56:37', '2020-12-05 06:56:37'),
(12, 5, 1, 9, '2020-12-05 00:00:00', '2020-12-05 01:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:57:04', '2020-12-05 06:57:04'),
(13, 5, 1, 9, '2020-12-05 01:00:00', '2020-12-05 02:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:57:31', '2020-12-05 06:57:31'),
(14, 5, 1, 9, '2020-12-05 02:00:00', '2020-12-05 03:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-05 06:57:53', '2020-12-05 06:57:53'),
(15, 5, 1, 9, '2020-12-05 03:00:00', '2020-12-05 04:30:00', NULL, 15, 150000, 0, 0, NULL, '2020-12-05 06:58:43', '2020-12-06 19:16:39'),
(16, 4, 1, 10, '2020-12-06 01:00:00', '2020-12-06 03:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:31:28', '2020-12-06 09:06:02'),
(17, 4, 1, 10, '2020-12-06 05:45:00', '2020-12-06 08:25:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:33:35', '2020-12-06 09:26:18'),
(18, 4, 1, 10, '2020-12-06 07:00:00', '2020-12-06 09:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:34:03', '2020-12-06 09:15:49'),
(19, 4, 1, 10, '2020-12-06 09:00:00', '2020-12-06 11:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:34:32', '2020-12-06 09:18:18'),
(20, 4, 1, 10, '2020-12-06 11:00:00', '2020-12-06 13:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:34:53', '2020-12-06 09:17:52'),
(21, 1, 4, 10, '2020-12-06 09:00:00', '2020-12-06 11:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 08:35:19', '2020-12-06 09:19:42'),
(48, 1, 4, 10, '2020-12-06 07:00:00', '2020-12-06 09:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 09:20:53', '2020-12-06 09:20:53'),
(49, 1, 4, 10, '2020-12-06 04:45:00', '2020-12-06 07:25:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 09:22:28', '2020-12-06 09:22:28'),
(50, 1, 4, 10, '2020-12-06 01:00:00', '2020-12-06 03:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 09:24:03', '2020-12-06 09:24:03'),
(51, 1, 4, 10, '2020-12-05 20:00:00', '2020-12-05 22:40:00', NULL, 16, 180000, 0, 0, NULL, '2020-12-06 09:25:11', '2020-12-06 09:25:11'),
(52, 3, 1, 7, '2020-12-05 17:00:00', '2020-12-06 16:59:00', NULL, 14, 200000, 0, 0, NULL, '2020-12-06 15:28:19', '2020-12-06 17:53:28'),
(53, 3, 1, 8, '2020-12-05 17:00:00', '2020-12-06 16:59:00', NULL, 14, 230000, 0, 0, NULL, '2020-12-06 15:28:57', '2020-12-06 17:53:47'),
(54, 1, 3, 7, '2020-12-06 17:00:00', '2020-12-07 16:59:00', NULL, 14, 250000, 0, 0, NULL, '2020-12-06 17:54:23', '2020-12-06 17:54:23'),
(55, 1, 3, 8, '2020-12-06 17:00:00', '2020-12-07 16:59:00', NULL, 14, 300000, 0, 0, NULL, '2020-12-06 17:54:51', '2020-12-06 17:54:51'),
(56, 4, 1, 11, '2020-12-06 18:29:09', '2020-12-06 18:29:09', NULL, 19, 200000, 0, 0, NULL, '2020-12-06 18:29:33', '2020-12-06 18:29:33'),
(57, 5, 1, 5, '2020-12-07 01:00:00', '2020-12-07 02:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-06 19:18:12', '2020-12-06 19:18:12'),
(58, 5, 1, 5, '2020-12-07 00:00:00', '2020-12-07 01:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-06 19:19:18', '2020-12-06 19:19:18'),
(59, 5, 1, 5, '2020-12-07 02:00:00', '2020-12-07 03:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-06 19:19:46', '2020-12-06 19:19:46'),
(60, 5, 1, 9, '2020-12-07 04:00:00', '2020-12-07 05:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:28:27', '2020-12-07 04:28:27'),
(61, 5, 1, 5, '2020-12-07 03:00:00', '2020-12-07 04:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:29:25', '2020-12-07 04:29:25'),
(62, 5, 1, 5, '2020-12-07 04:00:00', '2020-12-07 05:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:29:44', '2020-12-07 04:29:44'),
(63, 5, 1, 9, '2020-12-07 05:00:00', '2020-12-07 06:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:30:15', '2020-12-07 04:30:15'),
(64, 5, 1, 5, '2020-12-07 05:00:00', '2020-12-07 06:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:30:34', '2020-12-07 04:30:34'),
(65, 5, 1, 9, '2020-12-07 06:00:00', '2020-12-07 07:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:31:04', '2020-12-07 04:31:04'),
(66, 5, 1, 5, '2020-12-07 06:00:00', '2020-12-07 07:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:31:24', '2020-12-07 04:31:24'),
(67, 5, 1, 9, '2020-12-07 07:00:00', '2020-12-07 08:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:31:48', '2020-12-07 04:31:48'),
(68, 5, 1, 5, '2020-12-07 07:00:00', '2020-12-07 08:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:32:10', '2020-12-07 04:32:10'),
(69, 5, 1, 9, '2020-12-07 08:00:00', '2020-12-07 09:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:32:45', '2020-12-07 04:32:45'),
(70, 5, 1, 5, '2020-12-07 08:00:00', '2020-12-07 09:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:33:06', '2020-12-07 04:33:35'),
(71, 5, 1, 5, '2020-12-07 09:00:00', '2020-12-07 10:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:34:05', '2020-12-07 04:34:05'),
(72, 5, 1, 9, '2020-12-07 09:00:00', '2020-12-07 10:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:36:59', '2020-12-07 04:36:59'),
(73, 5, 1, 9, '2020-12-07 10:00:00', '2020-12-07 11:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:37:19', '2020-12-07 04:37:19'),
(74, 5, 1, 5, '2020-12-07 10:00:00', '2020-12-07 11:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:37:58', '2020-12-07 04:37:58'),
(75, 5, 1, 9, '2020-12-07 11:00:00', '2020-12-07 12:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:38:33', '2020-12-07 04:38:33'),
(76, 5, 1, 9, '2020-12-07 12:00:00', '2020-12-07 13:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:38:55', '2020-12-07 04:38:55'),
(77, 5, 1, 5, '2020-12-07 11:00:00', '2020-12-07 12:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:39:32', '2020-12-07 04:39:32'),
(78, 5, 1, 5, '2020-12-07 12:00:00', '2020-12-07 13:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:39:56', '2020-12-07 04:39:56'),
(79, 5, 1, 9, '2020-12-07 13:00:00', '2020-12-07 14:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:40:24', '2020-12-07 04:41:52'),
(80, 5, 1, 5, '2020-12-07 13:00:00', '2020-12-07 14:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:40:55', '2020-12-07 04:40:55'),
(81, 1, 5, 9, '2020-12-06 23:00:00', '2020-12-07 00:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:43:10', '2020-12-07 04:43:10'),
(82, 1, 5, 5, '2020-12-06 22:00:00', '2020-12-06 23:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:43:50', '2020-12-07 04:43:50'),
(83, 1, 5, 5, '2020-12-06 23:00:00', '2020-12-07 00:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:44:15', '2020-12-07 04:44:15'),
(84, 1, 5, 9, '2020-12-07 00:00:00', '2020-12-07 01:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:44:37', '2020-12-07 04:44:37'),
(85, 1, 5, 9, '2020-12-07 01:00:00', '2020-12-07 02:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:47:07', '2020-12-07 04:49:43'),
(86, 1, 5, 5, '2020-12-07 00:00:00', '2020-12-07 01:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:47:33', '2020-12-07 04:47:33'),
(87, 1, 5, 5, '2020-12-07 01:00:00', '2020-12-07 02:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:50:14', '2020-12-07 04:50:14'),
(88, 1, 5, 5, '2020-12-07 02:00:00', '2020-12-07 03:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:56:52', '2020-12-07 04:56:52'),
(89, 1, 5, 9, '2020-12-07 02:00:00', '2020-12-07 03:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:57:26', '2020-12-07 04:57:26'),
(90, 1, 5, 9, '2020-12-07 03:00:00', '2020-12-07 04:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:57:47', '2020-12-07 04:57:47'),
(91, 1, 5, 5, '2020-12-07 03:00:00', '2020-12-07 04:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:58:10', '2020-12-07 04:58:10'),
(92, 1, 5, 9, '2020-12-07 04:00:00', '2020-12-07 05:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:58:31', '2020-12-07 04:58:31'),
(93, 1, 5, 5, '2020-12-07 04:00:00', '2020-12-07 05:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:58:53', '2020-12-07 05:02:44'),
(94, 1, 5, 9, '2020-12-07 05:00:00', '2020-12-07 06:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 04:59:26', '2020-12-07 04:59:26'),
(95, 1, 5, 5, '2020-12-07 05:00:00', '2020-12-07 06:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 04:59:47', '2020-12-07 05:02:58'),
(96, 1, 5, 9, '2020-12-07 06:00:00', '2020-12-07 07:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:00:07', '2020-12-07 05:00:07'),
(97, 1, 5, 5, '2020-12-07 06:00:00', '2020-12-07 07:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:00:25', '2020-12-07 05:03:14'),
(98, 1, 5, 9, '2020-12-07 07:00:00', '2020-12-07 08:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:00:42', '2020-12-07 05:00:42'),
(99, 1, 5, 5, '2020-12-07 07:00:00', '2020-12-07 08:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:01:06', '2020-12-07 05:03:38'),
(100, 1, 5, 9, '2020-12-07 08:00:00', '2020-12-07 09:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:01:29', '2020-12-07 05:01:29'),
(101, 1, 5, 5, '2020-12-07 08:00:00', '2020-12-07 09:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:01:49', '2020-12-07 05:03:53'),
(102, 1, 5, 9, '2020-12-07 09:00:00', '2020-12-07 10:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:02:10', '2020-12-07 05:02:10'),
(103, 1, 5, 5, '2020-12-07 09:00:00', '2020-12-07 10:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:04:24', '2020-12-07 05:04:24'),
(104, 1, 5, 9, '2020-12-07 10:00:00', '2020-12-07 11:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:04:59', '2020-12-07 05:04:59'),
(105, 1, 5, 5, '2020-12-07 10:00:00', '2020-12-07 11:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:05:29', '2020-12-07 05:05:29'),
(106, 1, 5, 9, '2020-12-07 11:00:00', '2020-12-07 12:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:06:04', '2020-12-07 05:06:04'),
(107, 1, 5, 5, '2020-12-07 11:00:00', '2020-12-07 12:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:06:28', '2020-12-07 05:06:28'),
(108, 1, 5, 9, '2020-12-07 12:00:00', '2020-12-07 13:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:06:51', '2020-12-07 05:06:51'),
(109, 1, 5, 5, '2020-12-07 12:00:00', '2020-12-07 13:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:07:13', '2020-12-07 05:07:13'),
(110, 1, 5, 5, '2020-12-07 13:00:00', '2020-12-07 14:30:00', NULL, 7, 155000, 0, 0, NULL, '2020-12-07 05:07:57', '2020-12-07 05:07:57'),
(111, 1, 5, 9, '2020-12-07 13:00:00', '2020-12-07 14:30:00', NULL, 15, 155000, 0, 0, NULL, '2020-12-07 05:08:19', '2020-12-07 05:08:19'),
(112, 1, 16, 12, '2020-12-15 10:30:00', '2020-12-17 13:34:00', NULL, 27, 230000, 0, 0, NULL, '2020-12-14 13:35:13', '2020-12-14 13:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `buses_locations`
--

CREATE TABLE `buses_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bl_buses_id` int(11) NOT NULL DEFAULT 0,
  `bl_location_id` int(11) NOT NULL DEFAULT 0,
  `bl_time` timestamp NULL DEFAULT NULL,
  `bl_type` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses_locations`
--

INSERT INTO `buses_locations` (`id`, `bl_buses_id`, `bl_location_id`, `bl_time`, `bl_type`, `created_at`, `updated_at`) VALUES
(1, 89, 1, '2020-12-03 22:00:00', 1, NULL, NULL),
(2, 89, 5, '2020-12-03 23:30:00', 2, NULL, NULL),
(3, 90, 1, '2020-12-03 23:00:00', 1, NULL, NULL),
(4, 90, 5, '2020-12-04 00:30:00', 2, NULL, NULL),
(5, 1, 1, '2020-12-04 08:30:00', 1, NULL, NULL),
(6, 1, 1, '2020-12-04 09:00:00', 1, NULL, NULL),
(7, 1, 2, '2020-12-04 09:30:00', 2, NULL, NULL),
(8, 1, 1, '2020-12-04 10:00:00', 2, NULL, NULL),
(9, 2, 1, '2020-12-04 21:00:00', 1, NULL, NULL),
(10, 2, 2, '2020-12-04 22:30:00', 2, NULL, NULL),
(11, 3, 1, '2020-12-04 22:00:00', 1, NULL, NULL),
(12, 3, 2, '2020-12-04 23:30:00', 2, NULL, NULL),
(13, 4, 1, '2020-12-04 23:00:00', 1, NULL, NULL),
(14, 4, 2, '2020-12-05 00:30:00', 2, NULL, NULL),
(15, 5, 1, '2020-12-05 00:00:00', 1, NULL, NULL),
(16, 5, 2, '2020-12-05 01:30:00', 2, NULL, NULL),
(17, 6, 1, '2020-12-04 22:00:00', 1, NULL, NULL),
(18, 6, 5, '2020-12-04 23:30:00', 2, NULL, NULL),
(19, 7, 1, '2020-12-04 23:00:00', 1, NULL, NULL),
(20, 7, 5, '2020-12-05 00:30:00', 2, NULL, NULL),
(21, 8, 1, '2020-12-05 01:00:00', 1, NULL, NULL),
(22, 8, 2, '2020-12-05 02:30:00', 2, NULL, NULL),
(23, 9, 1, '2020-12-04 22:00:00', 1, NULL, NULL),
(24, 9, 5, '2020-12-04 23:30:00', 2, NULL, NULL),
(25, 10, 5, '2020-09-04 22:00:00', 1, NULL, NULL),
(26, 10, 1, '2020-12-04 23:30:00', 2, NULL, NULL),
(27, 11, 1, '2020-12-04 23:00:00', 1, NULL, NULL),
(28, 11, 5, '2020-12-05 00:30:00', 2, NULL, NULL),
(29, 12, 1, '2020-12-05 00:00:00', 1, NULL, NULL),
(30, 12, 5, '2020-12-05 01:30:00', 2, NULL, NULL),
(31, 13, 1, '2020-12-05 01:00:00', 1, NULL, NULL),
(32, 13, 5, '2020-12-05 02:30:00', 2, NULL, NULL),
(33, 14, 1, '2020-12-05 02:00:00', 1, NULL, NULL),
(34, 14, 5, '2020-12-05 03:30:00', 2, NULL, NULL),
(35, 15, 1, '2020-12-05 03:00:00', 1, NULL, NULL),
(36, 15, 5, '2020-12-05 04:30:00', 2, NULL, NULL),
(37, 8, 12, '2020-12-05 01:00:00', 1, NULL, NULL),
(38, 8, 13, '2020-12-05 01:00:00', 1, NULL, NULL),
(39, 16, 1, '2020-12-06 01:00:00', 1, NULL, '2020-12-06 09:06:02'),
(40, 16, 4, '2020-12-06 03:40:00', 2, NULL, '2020-12-06 09:06:02'),
(41, 17, 1, '2020-12-06 05:45:00', 1, NULL, '2020-12-06 09:08:11'),
(42, 17, 4, '2020-12-06 08:25:00', 2, NULL, '2020-12-06 09:26:18'),
(43, 18, 1, '2020-12-06 07:00:00', 1, NULL, '2020-12-06 09:15:49'),
(44, 18, 4, '2020-12-06 09:40:00', 2, NULL, '2020-12-06 09:15:49'),
(45, 19, 1, '2020-12-06 09:00:00', 1, NULL, '2020-12-06 09:16:49'),
(46, 19, 4, '2020-12-06 11:40:00', 2, NULL, '2020-12-06 09:18:18'),
(47, 20, 1, '2020-12-06 11:00:00', 1, NULL, '2020-12-06 09:17:52'),
(48, 20, 4, '2020-12-06 13:40:00', 2, NULL, '2020-12-06 09:17:52'),
(49, 21, 4, '2020-12-06 09:00:00', 1, NULL, '2020-12-06 09:19:42'),
(50, 21, 1, '2020-12-06 11:40:00', 2, NULL, '2020-12-06 09:19:42'),
(51, 22, 1, '2020-12-06 04:00:00', 1, NULL, NULL),
(52, 22, 4, '2020-12-06 05:30:00', 2, NULL, NULL),
(53, 23, 1, '2020-12-06 05:00:00', 1, NULL, NULL),
(54, 23, 4, '2020-12-06 06:30:00', 2, NULL, NULL),
(55, 24, 1, '2020-12-06 06:00:00', 1, NULL, NULL),
(56, 24, 4, '2020-12-06 07:30:00', 2, NULL, NULL),
(57, 25, 1, '2020-12-06 07:00:00', 1, NULL, '2020-12-06 08:38:53'),
(58, 25, 4, '2020-12-06 08:30:00', 2, NULL, '2020-12-06 08:38:53'),
(59, 26, 1, '2020-12-06 08:00:00', 1, NULL, NULL),
(60, 26, 4, '2020-12-06 09:30:00', 2, NULL, NULL),
(61, 27, 1, '2020-12-06 09:00:00', 1, NULL, NULL),
(62, 27, 4, '2020-12-06 10:30:00', 2, NULL, NULL),
(63, 28, 1, '2020-12-06 10:00:00', 1, NULL, NULL),
(64, 28, 4, '2020-12-06 11:30:00', 2, NULL, NULL),
(65, 29, 1, '2020-12-06 11:00:00', 1, NULL, NULL),
(66, 29, 4, '2020-12-06 12:30:00', 2, NULL, NULL),
(67, 30, 1, '2020-12-06 12:00:00', 1, NULL, NULL),
(68, 30, 4, '2020-12-06 13:30:00', 2, NULL, NULL),
(69, 31, 1, '2020-12-06 13:00:00', 1, NULL, '2020-12-06 08:42:47'),
(70, 31, 4, '2020-12-06 14:30:00', 2, NULL, '2020-12-06 08:42:47'),
(71, 32, 4, '2020-12-05 22:00:00', 1, NULL, NULL),
(72, 32, 1, '2020-12-05 23:30:00', 2, NULL, NULL),
(73, 33, 4, '2020-12-05 23:00:00', 1, NULL, NULL),
(74, 33, 1, '2020-12-06 00:30:00', 2, NULL, NULL),
(75, 34, 4, '2020-12-06 00:00:00', 1, NULL, NULL),
(76, 34, 1, '2020-12-06 01:30:00', 2, NULL, NULL),
(77, 35, 4, '2020-12-06 01:00:00', 1, NULL, NULL),
(78, 35, 1, '2020-12-06 02:30:00', 2, NULL, NULL),
(79, 36, 4, '2020-12-06 02:00:00', 1, NULL, NULL),
(80, 36, 1, '2020-12-06 03:30:00', 2, NULL, NULL),
(81, 37, 4, '2020-12-06 03:00:00', 1, NULL, NULL),
(82, 37, 1, '2020-12-06 04:30:00', 2, NULL, NULL),
(83, 38, 4, '2020-12-06 04:00:00', 1, NULL, NULL),
(84, 38, 1, '2020-12-06 05:30:00', 2, NULL, NULL),
(85, 39, 4, '2020-12-06 05:00:00', 1, NULL, '2020-12-06 08:48:37'),
(86, 39, 1, '2020-12-06 06:30:00', 2, NULL, '2020-12-06 08:46:53'),
(87, 40, 4, '2020-12-06 06:00:00', 1, NULL, '2020-12-06 08:48:50'),
(88, 40, 1, '2020-12-06 07:30:00', 2, NULL, '2020-12-06 08:48:50'),
(89, 41, 4, '2020-12-06 07:00:00', 1, NULL, '2020-12-06 08:49:07'),
(90, 41, 1, '2020-12-06 08:30:00', 2, NULL, '2020-12-06 08:49:07'),
(91, 42, 4, '2020-12-06 08:00:00', 1, NULL, '2020-12-06 08:49:20'),
(92, 42, 1, '2020-12-06 09:30:00', 2, NULL, '2020-12-06 08:49:20'),
(93, 43, 4, '2020-12-06 09:00:00', 1, NULL, NULL),
(94, 43, 1, '2020-12-06 10:30:00', 2, NULL, NULL),
(95, 44, 4, '2020-12-06 10:00:00', 1, NULL, NULL),
(96, 44, 1, '2020-12-06 11:30:00', 2, NULL, NULL),
(97, 45, 4, '2020-12-06 11:00:00', 1, NULL, NULL),
(98, 45, 1, '2020-12-06 12:30:00', 2, NULL, NULL),
(99, 46, 4, '2020-12-06 12:00:00', 1, NULL, NULL),
(100, 46, 1, '2020-12-06 13:30:00', 2, NULL, NULL),
(101, 47, 4, '2021-01-06 13:00:00', 1, NULL, NULL),
(102, 47, 1, '2020-12-06 14:30:00', 2, NULL, NULL),
(103, 16, 15, '2020-12-06 01:00:00', 1, NULL, NULL),
(104, 16, 14, '2020-12-06 03:40:00', 2, NULL, NULL),
(105, 17, 15, '2020-12-06 05:45:00', 1, NULL, NULL),
(106, 17, 14, '2020-12-06 08:25:00', 2, NULL, '2020-12-06 09:26:18'),
(107, 18, 15, '2020-12-06 07:00:00', 1, NULL, NULL),
(108, 18, 14, '2020-12-06 09:40:00', 2, NULL, NULL),
(109, 19, 15, '2020-12-06 09:00:00', 1, NULL, NULL),
(110, 19, 14, '2020-12-06 11:40:00', 2, NULL, '2020-12-06 09:18:18'),
(111, 20, 15, '2020-12-06 11:00:00', 1, NULL, NULL),
(112, 21, 14, '2020-12-06 09:00:00', 1, NULL, NULL),
(113, 21, 15, '2020-12-06 11:40:00', 2, NULL, NULL),
(114, 48, 4, '2020-12-06 07:00:00', 1, NULL, NULL),
(115, 48, 14, '2020-12-06 07:00:00', 1, NULL, NULL),
(116, 48, 1, '2020-12-06 09:40:00', 2, NULL, NULL),
(117, 48, 15, '2020-12-06 09:40:00', 2, NULL, NULL),
(118, 49, 4, '2020-12-06 04:45:00', 1, NULL, NULL),
(119, 49, 14, '2020-12-06 04:45:00', 1, NULL, NULL),
(120, 49, 1, '2020-12-06 07:25:00', 2, NULL, NULL),
(121, 49, 15, '2020-12-06 09:25:00', 2, NULL, NULL),
(122, 50, 4, '2020-12-06 01:00:00', 1, NULL, NULL),
(123, 50, 14, '2020-12-06 01:00:00', 1, NULL, NULL),
(124, 50, 1, '2020-12-06 03:40:00', 2, NULL, NULL),
(125, 50, 15, '2020-12-06 03:40:00', 2, NULL, NULL),
(126, 51, 4, '2020-12-05 20:00:00', 1, NULL, NULL),
(127, 51, 14, '2020-12-05 20:00:00', 1, NULL, NULL),
(128, 51, 1, '2020-12-05 22:40:00', 2, NULL, NULL),
(129, 51, 15, '2020-12-05 22:40:00', 2, NULL, NULL),
(130, 52, 1, '2020-12-05 17:00:00', 1, NULL, NULL),
(131, 52, 3, '2020-12-06 16:59:00', 2, NULL, NULL),
(132, 53, 1, '2020-12-05 17:00:00', 1, NULL, NULL),
(133, 53, 3, '2020-12-06 16:59:00', 2, NULL, NULL),
(134, 54, 3, '2020-12-06 17:00:00', 1, NULL, NULL),
(135, 54, 1, '2020-12-07 16:59:00', 2, NULL, NULL),
(136, 55, 3, '2020-12-06 17:00:00', 1, NULL, NULL),
(137, 55, 1, '2020-12-07 16:59:00', 2, NULL, NULL),
(138, 56, 1, '2020-12-06 18:29:09', 1, NULL, NULL),
(139, 56, 4, '2020-12-06 18:29:09', 2, NULL, NULL),
(140, 57, 1, '2020-12-07 01:00:00', 1, NULL, NULL),
(141, 57, 5, '2020-12-07 02:30:00', 2, NULL, NULL),
(142, 58, 1, '2020-12-07 00:00:00', 1, NULL, NULL),
(143, 58, 5, '2020-12-07 01:30:00', 2, NULL, NULL),
(144, 59, 1, '2020-12-07 02:00:00', 1, NULL, NULL),
(145, 59, 5, '2020-12-07 03:30:00', 2, NULL, NULL),
(146, 60, 1, '2020-12-07 04:00:00', 1, NULL, NULL),
(147, 60, 5, '2020-12-07 05:30:00', 2, NULL, NULL),
(148, 61, 1, '2020-12-07 03:00:00', 1, NULL, NULL),
(149, 61, 5, '2020-12-07 04:30:00', 2, NULL, NULL),
(150, 62, 1, '2020-12-07 04:00:00', 1, NULL, NULL),
(151, 62, 5, '2020-12-07 05:30:00', 2, NULL, NULL),
(152, 63, 1, '2020-12-07 05:00:00', 1, NULL, NULL),
(153, 63, 5, '2020-12-07 06:30:00', 2, NULL, NULL),
(154, 64, 1, '2020-12-07 05:00:00', 1, NULL, NULL),
(155, 64, 5, '2020-12-07 06:30:00', 2, NULL, NULL),
(156, 65, 1, '2020-12-07 06:00:00', 1, NULL, NULL),
(157, 65, 5, '2020-12-07 07:30:00', 2, NULL, NULL),
(158, 66, 1, '2020-12-07 06:00:00', 1, NULL, NULL),
(159, 66, 5, '2020-12-07 07:30:00', 2, NULL, NULL),
(160, 67, 1, '2020-12-07 07:00:00', 1, NULL, NULL),
(161, 67, 5, '2020-12-07 08:30:00', 2, NULL, NULL),
(162, 68, 1, '2020-12-07 07:00:00', 1, NULL, NULL),
(163, 68, 5, '2020-12-07 08:30:00', 2, NULL, NULL),
(164, 69, 1, '2020-12-07 08:00:00', 1, NULL, NULL),
(165, 69, 5, '2020-12-07 09:30:00', 2, NULL, NULL),
(166, 70, 1, '2020-12-07 08:00:00', 1, NULL, '2020-12-07 04:33:35'),
(167, 70, 5, '2020-12-07 09:30:00', 2, NULL, '2020-12-07 04:33:35'),
(168, 71, 1, '2020-12-07 09:00:00', 1, NULL, NULL),
(169, 71, 5, '2020-12-07 10:30:00', 2, NULL, NULL),
(170, 72, 1, '2020-12-07 09:00:00', 1, NULL, NULL),
(171, 72, 5, '2020-12-07 10:30:00', 2, NULL, NULL),
(172, 73, 1, '2020-12-07 10:00:00', 1, NULL, NULL),
(173, 73, 5, '2020-12-07 11:30:00', 2, NULL, NULL),
(174, 74, 1, '2020-12-07 10:00:00', 1, NULL, NULL),
(175, 74, 5, '2020-12-07 11:30:00', 2, NULL, NULL),
(176, 75, 1, '2020-12-07 11:00:00', 1, NULL, NULL),
(177, 75, 5, '2020-12-07 12:30:00', 2, NULL, NULL),
(178, 76, 1, '2020-12-07 12:00:00', 1, NULL, NULL),
(179, 76, 5, '2020-12-07 13:30:00', 2, NULL, NULL),
(180, 77, 1, '2020-12-07 11:00:00', 1, NULL, NULL),
(181, 77, 5, '2020-12-07 12:30:00', 2, NULL, NULL),
(182, 78, 1, '2020-12-07 12:00:00', 1, NULL, NULL),
(183, 78, 5, '2020-12-07 13:30:00', 2, NULL, NULL),
(184, 79, 1, '2020-12-07 13:00:00', 1, NULL, NULL),
(185, 79, 5, '2020-12-07 14:30:00', 2, NULL, NULL),
(186, 80, 1, '2020-12-07 13:00:00', 1, NULL, NULL),
(187, 80, 5, '2020-12-07 14:30:00', 2, NULL, NULL),
(188, 81, 5, '2020-12-06 23:00:00', 1, NULL, NULL),
(189, 81, 1, '2020-12-07 00:30:00', 2, NULL, NULL),
(190, 82, 5, '2020-12-06 22:00:00', 1, NULL, NULL),
(191, 82, 1, '2020-12-06 23:30:00', 2, NULL, NULL),
(192, 83, 5, '2020-12-06 23:00:00', 1, NULL, NULL),
(193, 83, 1, '2020-12-07 00:30:00', 2, NULL, NULL),
(194, 84, 5, '2020-12-07 00:00:00', 1, NULL, NULL),
(195, 84, 1, '2020-12-07 01:30:00', 2, NULL, NULL),
(196, 85, 5, '2020-12-07 01:00:00', 1, NULL, '2020-12-07 04:49:43'),
(197, 85, 1, '2020-12-07 02:30:00', 2, NULL, '2020-12-07 04:49:43'),
(198, 86, 5, '2020-12-07 00:00:00', 1, NULL, NULL),
(199, 86, 1, '2020-12-07 01:30:00', 2, NULL, NULL),
(200, 87, 5, '2020-12-07 01:00:00', 1, NULL, NULL),
(201, 87, 1, '2020-12-07 02:30:00', 2, NULL, NULL),
(202, 88, 5, '2020-12-07 02:00:00', 1, NULL, NULL),
(203, 88, 1, '2020-12-07 03:30:00', 2, NULL, NULL),
(204, 89, 5, '2020-12-07 02:00:00', 1, NULL, NULL),
(205, 89, 1, '2020-12-07 03:30:00', 2, NULL, NULL),
(206, 90, 5, '2020-12-07 03:00:00', 1, NULL, NULL),
(207, 90, 1, '2020-12-07 04:30:00', 2, NULL, NULL),
(208, 91, 5, '2020-12-07 03:00:00', 1, NULL, NULL),
(209, 91, 1, '2020-12-07 04:30:00', 2, NULL, NULL),
(210, 92, 5, '2020-12-07 04:00:00', 1, NULL, NULL),
(211, 92, 1, '2020-12-07 05:30:00', 2, NULL, NULL),
(212, 93, 5, '2020-12-07 04:00:00', 1, NULL, '2020-12-07 05:02:44'),
(213, 93, 1, '2020-12-07 05:30:00', 2, NULL, '2020-12-07 05:02:44'),
(214, 94, 5, '2020-12-07 05:00:00', 1, NULL, NULL),
(215, 94, 1, '2020-12-07 06:30:00', 2, NULL, NULL),
(216, 95, 5, '2020-12-07 05:00:00', 1, NULL, '2020-12-07 05:02:58'),
(217, 95, 1, '2020-12-07 06:30:00', 2, NULL, '2020-12-07 05:02:58'),
(218, 96, 5, '2020-12-07 06:00:00', 1, NULL, NULL),
(219, 96, 1, '2020-12-07 07:30:00', 2, NULL, NULL),
(220, 97, 5, '2020-12-07 06:00:00', 1, NULL, '2020-12-07 05:03:14'),
(221, 97, 1, '2020-12-07 07:30:00', 2, NULL, '2020-12-07 05:03:14'),
(222, 98, 5, '2020-12-07 07:00:00', 1, NULL, NULL),
(223, 98, 1, '2020-12-07 08:30:00', 2, NULL, NULL),
(224, 99, 5, '2020-12-07 07:00:00', 1, NULL, '2020-12-07 05:03:38'),
(225, 99, 1, '2020-12-07 08:30:00', 2, NULL, '2020-12-07 05:03:38'),
(226, 100, 5, '2020-12-07 08:00:00', 1, NULL, NULL),
(227, 100, 1, '2020-12-07 09:30:00', 2, NULL, NULL),
(228, 101, 5, '2020-12-07 08:00:00', 1, NULL, '2020-12-07 05:03:53'),
(229, 101, 1, '2020-12-07 09:30:00', 2, NULL, '2020-12-07 05:03:53'),
(230, 102, 5, '2020-12-07 09:00:00', 1, NULL, NULL),
(231, 102, 1, '2020-12-07 10:30:00', 2, NULL, NULL),
(232, 103, 5, '2020-12-07 09:00:00', 1, NULL, NULL),
(233, 103, 1, '2020-12-07 10:30:00', 2, NULL, NULL),
(234, 104, 5, '2020-12-07 10:00:00', 1, NULL, NULL),
(235, 104, 1, '2020-12-07 11:30:00', 2, NULL, NULL),
(236, 105, 5, '2020-12-07 10:00:00', 1, NULL, NULL),
(237, 105, 1, '2020-12-07 11:30:00', 2, NULL, NULL),
(238, 106, 5, '2020-12-07 11:00:00', 1, NULL, NULL),
(239, 106, 1, '2020-12-07 12:30:00', 2, NULL, NULL),
(240, 107, 5, '2020-12-07 11:00:00', 1, NULL, NULL),
(241, 107, 1, '2020-12-07 12:30:00', 2, NULL, NULL),
(242, 108, 5, '2020-12-07 12:00:00', 1, NULL, NULL),
(243, 108, 1, '2020-12-07 13:30:00', 2, NULL, NULL),
(244, 109, 5, '2020-12-07 12:00:00', 1, NULL, NULL),
(245, 109, 1, '2020-12-07 13:30:00', 2, NULL, NULL),
(246, 110, 5, '2020-12-07 13:00:00', 1, NULL, NULL),
(247, 110, 1, '2020-12-07 14:30:00', 2, NULL, NULL),
(248, 111, 5, '2020-12-07 13:00:00', 1, NULL, NULL),
(249, 111, 1, '2020-12-07 14:30:00', 2, NULL, NULL),
(250, 112, 16, '2020-12-15 10:30:00', 1, NULL, NULL),
(251, 112, 1, '2020-12-17 13:34:00', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point_register` int(11) NOT NULL DEFAULT 0,
  `point_ticket_done` int(11) NOT NULL DEFAULT 0,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_bottom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `logo`, `point_register`, `point_ticket_done`, `email`, `company`, `address`, `map`, `hotline`, `footer_bottom`, `created_at`, `updated_at`) VALUES
(1, '2020-11-30__logo-ngang.png', 100, 1, 'limousinevipcactinh@gmail.com', 'Limousin VIP Các tỉnh', 'Hà Nội', NULL, '0979.910.019', 'Limousine VIP các tỉnh', '2020-11-29 16:19:03', '2020-12-06 10:18:16'),
(2, '2020-11-30__logo-ngang.png', 100, 1, 'doanwebsitebanvexe@gmail.com', 'Limousin VIP Các tỉnh', 'Hà Nội', NULL, '0979.910.019', 'Đồ án', '2020-12-14 14:46:45', '2020-12-14 14:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `config_email`
--

CREATE TABLE `config_email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2244470b21bddfe386ac.jpg', '2020-11-29__2244470b21bddfe386acjpg.jpg', 2, '2020-11-29 16:09:29', NULL),
(2, '8b341fab519d24e3d8bdf3f894259339.jpg', '2020-11-30__8b341fab519d24e3d8bdf3f894259339jpg.jpg', 4, '2020-11-30 15:45:42', NULL),
(3, '8b341fab519d24e3d8bdf3f894259339.jpg', '2020-12-02__8b341fab519d24e3d8bdf3f894259339jpg.jpg', 8, '2020-12-02 15:28:51', NULL),
(4, '8b341fab519d24e3d8bdf3f894259339.jpg', '2020-12-02__8b341fab519d24e3d8bdf3f894259339jpg.jpg', 8, '2020-12-02 15:28:59', NULL),
(5, '8b341fab519d24e3d8bdf3f894259339.jpg', '2020-12-02__8b341fab519d24e3d8bdf3f894259339jpg.jpg', 8, '2020-12-02 15:31:07', NULL),
(6, 'xe-Laha-Limousine-1.jpg', '2020-12-04__xe-laha-limousine-1jpg.jpg', 8, '2020-12-03 23:56:05', NULL),
(7, 'li-dos.jpg', '2020-12-04__li-dosjpg.jpg', 6, '2020-12-04 00:11:22', NULL),
(11, '7-cho-gia-dinh-duoi-1-ty-dong.jpg', '2020-12-04__7-cho-gia-dinh-duoi-1-ty-dongjpg.jpg', 14, '2020-12-04 00:28:40', NULL),
(12, '1563867364_artboard-5.png', '2020-12-04__1563867364-artboard-5png.png', 15, '2020-12-04 05:54:28', NULL),
(13, 'z1461124111159_682568012c58a90732b85cc7ed0c06dd-2.jpg', '2020-12-04__z1461124111159-682568012c58a90732b85cc7ed0c06dd-2jpg.jpg', 7, '2020-12-04 06:33:54', NULL),
(15, '3886745_Xe.Tinhte.vn-DCAR-President-1.jpg', '2020-12-06__3886745-xetinhtevn-dcar-president-1jpg.jpg', 16, '2020-12-06 08:52:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `k_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_sort` tinyint(4) NOT NULL DEFAULT 0,
  `k_status` tinyint(4) NOT NULL DEFAULT 1,
  `k_hot` tinyint(4) NOT NULL DEFAULT 0,
  `k_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loc_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_type` tinyint(4) DEFAULT NULL,
  `loc_parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `loc_name`, `loc_slug`, `loc_type`, `loc_parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', 'ha-noi', NULL, 0, '2020-11-29 15:29:37', NULL),
(2, 'Quảng Ninh', 'quang-ninh', NULL, 0, '2020-11-29 15:29:57', NULL),
(3, 'Nội Bài', 'noi-bai', NULL, 0, '2020-11-29 15:35:33', NULL),
(4, 'Thanh Hóa', 'thanh-hoa', NULL, 0, '2020-11-29 15:35:38', NULL),
(5, 'Ninh Bình', 'ninh-binh', NULL, 0, '2020-11-29 15:35:44', NULL),
(12, 'Công viên Cầu Giấy', 'cong-vien-cau-giay', NULL, 1, '2020-12-05 14:01:02', NULL),
(13, 'Cổng 3 Big C Thăng Long', 'cong-3-big-c-thang-long', NULL, 1, '2020-12-05 14:01:21', NULL),
(14, 'Sầm Sơn', 'sam-son', NULL, 4, '2020-12-06 09:04:17', NULL),
(15, 'Số 12/ ngõ 72 Dương Khuê, Mỹ Đình', 'so-12-ngo-72-duong-khue-my-dinh', NULL, 1, '2020-12-06 09:04:38', NULL),
(16, 'Sài Gòn', 'sai-gon', NULL, 0, '2020-12-14 13:34:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_sort` tinyint(4) NOT NULL DEFAULT 0,
  `m_status` tinyint(4) NOT NULL DEFAULT 1,
  `m_hot` tinyint(4) NOT NULL DEFAULT 0,
  `m_position` tinyint(4) NOT NULL DEFAULT 0,
  `m_parent_id` int(11) NOT NULL DEFAULT 0,
  `m_child_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_parent_all` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `m_name`, `m_description`, `m_slug`, `m_icon`, `m_sort`, `m_status`, `m_hot`, `m_position`, `m_parent_id`, `m_child_all`, `m_parent_all`, `m_title_seo`, `m_avatar`, `m_keyword_seo`, `m_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Khuyến mãi', 'Tin khuyến mãi mới nhất từ hệ thống', 'khuyen-mai', '<i class=\"fa fa-car\" aria-hidden=\"true\"></i', 1, 1, 1, 1, 0, NULL, NULL, 'Khuyến mãi', NULL, NULL, 'Ưu đãi', '2020-11-29 15:23:24', '2020-12-06 16:35:02'),
(2, 'Bến xe khách', 'Tổng hợp thông tin các bến xe trên toàn quốc', 'ben-xe-khach', '<i class=\"fa fa-car\" aria-hidden=\"true\"></i>', 2, 1, 1, 2, 0, NULL, NULL, 'Bến xe khách', NULL, NULL, 'Bến xe khách', '2020-11-29 16:06:44', '2020-12-06 17:38:38'),
(3, 'Hướng dẫn', 'Hướng dẫn sử dụng website mới này', 'huong-dan', '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>', 3, 1, 0, 0, 0, NULL, NULL, 'Hướng dẫn', NULL, NULL, 'Hướng dẫn', '2020-12-06 10:45:11', '2020-12-06 13:47:33'),
(4, 'Cẩm nang du lịch', 'Cập nhật thông tin về du lịch mới và hot nhất tại limousinevipcactinh.com', 'cam-nang-du-lich', NULL, 3, 1, 1, 3, 0, NULL, NULL, 'Cẩm nang du lịch', NULL, NULL, 'Cẩm nang du lịch', '2020-12-06 16:38:03', '2020-12-06 17:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_21_100518_create_tags_table', 1),
(5, '2020_10_25_163003_create_seo_education_table', 1),
(6, '2020_10_28_105518_create_slides_table', 1),
(7, '2020_10_30_135047_alter_column_position_in_table_tags', 1),
(8, '2020_10_30_152022_create_admins_table', 1),
(9, '2020_10_30_155255_create_permission_tables', 1),
(11, '2020_11_02_134619_create_orders_table', 1),
(12, '2020_11_07_072610_create_menus_table', 1),
(13, '2020_11_07_072617_create_keywords_table', 1),
(14, '2020_11_07_072623_create_articles_table', 1),
(15, '2020_11_07_072636_create_articles_keywords_table', 1),
(16, '2020_11_10_172038_create_seos_blog_table', 1),
(17, '2020_11_18_083721_alter_column_m_position_in_table_article', 1),
(18, '2020_11_21_152822_create_configuration_table', 1),
(19, '2020_11_24_110927_create_pages_table', 1),
(20, '2020_11_24_155730_create_navbars_table', 1),
(21, '2020_11_26_224744_create_config_email_table', 1),
(22, '2020_11_26_232513_create_jobs_table', 1),
(23, '2020_11_27_160203_create_vehicles_table', 1),
(24, '2020_11_27_170504_create_locations_table', 1),
(25, '2020_11_27_170927_crate_buses_table', 1),
(26, '2020_11_28_235426_create_images_table', 1),
(27, '2020_11_30_102012_create_routes_table', 2),
(28, '2020_11_30_200304_create_promotion_code_table', 3),
(29, '2020_12_03_035135_create_pay_histories_table', 4),
(30, '2020_12_04_084950_create_buses_locations_table', 5),
(31, '2020_11_02_134614_create_transactions_table', 6),
(32, '2020_12_06_015509_create_votes_table', 7),
(33, '2020_12_06_130008_create_votes_detail_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\System\\Admin', 1),
(1, 'App\\Models\\System\\Admin', 359);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nb_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_icon` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_rel` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_status` tinyint(4) DEFAULT NULL,
  `nb_type` tinyint(4) DEFAULT NULL COMMENT 'url, menu, article, product, tag',
  `nb_id` int(11) NOT NULL DEFAULT 0 COMMENT 'Menu, keyword, article, product, tag',
  `nb_sort` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `nb_name`, `nb_url`, `nb_icon`, `nb_rel`, `nb_status`, `nb_type`, `nb_id`, `nb_sort`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '/', NULL, NULL, 1, 1, 0, 0, '2020-11-29 16:14:46', '2020-11-29 16:14:46'),
(2, 'Bến xe', 'http://banvexe.abc/bai-viet/ben-xe-khach-m', NULL, NULL, 1, 2, 2, 2, '2020-12-07 14:53:13', '2020-12-07 14:53:13'),
(4, 'Liên hệ', 'http://banvexe.abc/lien-he', NULL, NULL, 1, 1, 0, 4, '2020-12-07 14:53:50', '2020-12-07 14:53:50'),
(5, 'Hướng dẫn', 'http://banvexe.abc/bai-viet/huong-dan-m', NULL, NULL, 1, 2, 3, 3, '2020-12-07 14:53:31', '2020-12-07 14:53:31'),
(6, 'Đăng ký', 'http://banvexe.abc/account/register', NULL, NULL, 1, 1, 0, 5, '2020-12-07 14:54:05', '2020-12-07 14:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_transaction_id` int(11) NOT NULL DEFAULT 0,
  `o_action_id` int(11) NOT NULL DEFAULT 0 COMMENT 'ID khoa hoc hoac combo hoac cai gi day',
  `o_sale` tinyint(4) NOT NULL DEFAULT 0,
  `o_destination_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đến',
  `o_guest_id` int(11) NOT NULL DEFAULT 0,
  `o_starting_point_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đi',
  `o_user_id` int(11) NOT NULL DEFAULT 0,
  `o_vehicle_id` int(11) NOT NULL DEFAULT 0,
  `o_buses_location_start` int(11) NOT NULL DEFAULT 0,
  `o_buses_location_stop` int(11) NOT NULL DEFAULT 0,
  `o_time_start` timestamp NULL DEFAULT NULL,
  `o_time_stop` timestamp NULL DEFAULT NULL,
  `o_date_success` date DEFAULT NULL,
  `o_price` int(11) NOT NULL DEFAULT 0,
  `o_status` tinyint(4) NOT NULL DEFAULT 1,
  `o_position` tinyint(4) NOT NULL DEFAULT 0,
  `o_admin_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `o_transaction_id`, `o_action_id`, `o_sale`, `o_destination_id`, `o_guest_id`, `o_starting_point_id`, `o_user_id`, `o_vehicle_id`, `o_buses_location_start`, `o_buses_location_stop`, `o_time_start`, `o_time_stop`, `o_date_success`, `o_price`, `o_status`, `o_position`, `o_admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 1, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(2, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 2, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(3, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 3, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(4, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 4, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(5, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 5, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(6, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 6, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(7, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 7, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(8, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 8, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(9, 1, 51, 0, 1, 16, 4, 13, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', '2020-12-06', 180000, 1, 9, 0, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(10, 2, 52, 0, 3, 14, 1, 11, 7, 130, 131, '2020-12-05 17:00:00', '2020-12-06 16:59:00', '2020-12-06', 180000, 1, 1, 0, '2020-12-06 15:29:39', '2020-12-06 15:29:39'),
(11, 3, 56, 0, 4, 19, 1, 11, 11, 138, 139, '2020-12-06 18:29:09', '2020-12-06 18:29:09', '2020-12-07', 200000, 2, 9, 0, '2020-12-06 18:30:09', '2020-12-06 18:30:35'),
(12, 4, 17, 0, 4, 16, 1, 9, 10, 41, 42, '2020-12-06 05:45:00', '2020-12-06 08:25:00', '2020-12-07', 180000, 1, 2, 0, '2020-12-06 18:35:32', '2020-12-06 18:35:32'),
(13, 5, 56, 0, 4, 19, 1, 11, 11, 138, 139, '2020-12-06 18:29:09', '2020-12-06 18:29:09', '2020-12-07', 200000, 2, 6, 0, '2020-12-06 18:37:29', '2020-12-06 18:38:25'),
(14, 6, 50, 0, 1, 16, 4, 13, 10, 122, 124, '2020-12-06 01:00:00', '2020-12-06 03:40:00', '2020-12-07', 180000, 1, 3, 0, '2020-12-07 01:12:23', '2020-12-07 01:12:23'),
(15, 6, 50, 0, 1, 16, 4, 13, 10, 122, 124, '2020-12-06 01:00:00', '2020-12-06 03:40:00', '2020-12-07', 180000, 1, 4, 0, '2020-12-07 01:12:23', '2020-12-07 01:12:23'),
(16, 6, 50, 0, 1, 16, 4, 13, 10, 122, 124, '2020-12-06 01:00:00', '2020-12-06 03:40:00', '2020-12-07', 180000, 1, 5, 0, '2020-12-07 01:12:23', '2020-12-07 01:12:23'),
(17, 7, 6, 0, 5, 7, 1, 0, 5, 17, 18, '2020-12-04 22:00:00', '2020-12-04 23:30:00', '2020-12-12', 155000, 1, 1, 0, '2020-12-12 12:49:34', '2020-12-12 12:49:34'),
(18, 8, 2, 0, 2, 8, 1, 25, 3, 9, 10, '2020-12-04 21:00:00', '2020-12-04 22:30:00', '2020-12-12', 180000, -1, 1, 0, '2020-12-12 12:52:48', '2020-12-12 12:52:48'),
(19, 9, 112, 0, 1, 27, 16, 25, 12, 250, 251, '2020-12-15 10:30:00', '2020-12-17 13:34:00', '2020-12-14', 230000, 2, 20, 0, '2020-12-14 13:56:56', '2020-12-14 14:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_auth_id` int(11) NOT NULL DEFAULT 0,
  `seo` char(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NOINDEX, NOFOLLOW',
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`, `description`, `view`, `content`, `a_auth_id`, `seo`, `title_seo`, `avatar`, `keyword_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, 'LIMOUSINE VIP CÁC TỈNH', '/', 'Đặt vé xe Limousine, đặt vé đi các tỉnh, Hệ thống đặt vé xe khách lớn nhất Việt Nam', 0, '<p>Limousine VIP C&aacute;c tỉnh</p>', 0, NULL, 'Limousine VIP Các tỉnh', '2020-11-29__a7bf75c60470fa2ea361.jpg', NULL, 'Limousine VIP Các tỉnh', '2020-11-29 16:12:44', '2020-12-06 17:02:44'),
(2, 'Liên hệ', '/lien-he', 'Liên hệ với tổng đài', 0, '<p><iframe frameborder=\"0\" width=\"100%\" height=\"450\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.850389260091!2d105.78809441493274!3d21.038671485992943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3647fd89a7%3A0x52b1e304f26af656!2zODUgTmd1eeG7hW4gUGhvbmcgU-G6r2MsIEThu4tjaCBW4buNbmcgSOG6rXUsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lp!5e0!3m2!1sen!2s!4v1607274730057!5m2!1sen!2s\" width=\"600\"></iframe></p>', 0, NULL, 'Liên hệ', NULL, NULL, 'Liên hệ với nhà xe', '2020-11-29 16:37:36', '2020-12-06 17:13:12'),
(3, 'Chính sách bảo mật', 'chinh-sach-bao-mat', 'Chính sách bảo mật thông tin người dùng', 0, '<p>Đang cập nhật nội dung...</p>', 0, NULL, 'Chính sách bảo mật', NULL, NULL, 'Chính sách bảo mật thông tin người dùng', '2020-12-06 17:15:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_histories`
--

CREATE TABLE `pay_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ph_user_id` int(10) UNSIGNED NOT NULL,
  `ph_credit` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Số tiền tăng',
  `ph_debit` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'số tiền giảm',
  `ph_balance` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Số tiền hiện tại',
  `ph_meta_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_status` tinyint(4) NOT NULL DEFAULT 0,
  `ph_type` tinyint(4) NOT NULL DEFAULT 0,
  `ph_month` tinyint(3) UNSIGNED DEFAULT NULL,
  `ph_year` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_histories`
--

INSERT INTO `pay_histories` (`id`, `ph_user_id`, `ph_credit`, `ph_debit`, `ph_balance`, `ph_meta_detail`, `ph_status`, `ph_type`, `ph_month`, `ph_year`, `created_at`, `updated_at`) VALUES
(1, 19, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-06 18:27:52', NULL),
(2, 11, 1, 0, 101, 'Tài khoản được cộng thêm 1 điểm từ việc hoàn thành chuyến đi', 1, 3, 12, 2020, '2020-12-06 18:38:25', NULL),
(3, 20, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-07 03:17:40', NULL),
(4, 21, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-07 03:22:18', NULL),
(5, 22, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-07 03:51:37', NULL),
(6, 23, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-07 04:46:26', NULL),
(7, 24, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-07 04:47:43', NULL),
(8, 25, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-12 12:51:56', NULL),
(9, 26, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-12 14:10:37', NULL),
(10, 27, 100, 0, 100, 'Tài khoản được cộng thêm 100 từ việc đăng ký lần đầu', 1, 1, 12, 2020, '2020-12-14 13:32:03', NULL),
(11, 25, 1, 0, 101, 'Tài khoản được cộng thêm 1 điểm từ việc hoàn thành chuyến đi', 1, 3, 12, 2020, '2020-12-14 14:02:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_permission` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `description`, `group_permission`, `created_at`, `updated_at`) VALUES
(1, 'full', 'admins', 'Toàn quyền', 1, '2020-11-29 14:39:18', '2020-11-29 14:39:18'),
(2, 'group_article', 'admins', 'Tin tức && sự kiện', 2, '2020-12-02 08:47:38', '2020-12-02 08:47:38'),
(3, 'keyword_index', 'admins', 'Danh sách từ khoá', 3, '2020-12-02 08:49:10', '2020-12-02 08:49:10'),
(4, 'keyword_create', 'admins', 'Thêm mới từ khoá', 3, '2020-12-02 08:49:20', '2020-12-02 08:49:20'),
(5, 'keyword_edit', 'admins', 'Cập nhật từ khoá', 3, '2020-12-02 08:49:35', '2020-12-02 08:49:35'),
(6, 'keyword_delete', 'admins', 'Xoá từ khoá', 3, '2020-12-02 08:49:47', '2020-12-02 08:49:47'),
(7, 'menu_index', 'admins', 'Danh sách menu', 4, '2020-12-02 08:50:01', '2020-12-02 08:50:01'),
(8, 'menu_create', 'admins', 'Thêm mới menu', 4, '2020-12-02 08:50:10', '2020-12-02 08:50:10'),
(9, 'menu_edit', 'admins', 'Edit menu', 4, '2020-12-02 08:50:20', '2020-12-02 08:50:20'),
(10, 'menu_delete', 'admins', 'Xoá menu', 4, '2020-12-02 08:50:30', '2020-12-02 08:50:30'),
(11, 'article_index', 'admins', 'Danh sách bài viết', 5, '2020-12-02 08:50:50', '2020-12-02 08:50:50'),
(12, 'article_create', 'admins', 'Thêm mới bài viết', 5, '2020-12-02 08:51:06', '2020-12-02 08:51:06'),
(13, 'article_edit', 'admins', 'Cập nhật bài viết', 5, '2020-12-02 08:51:18', '2020-12-02 08:51:18'),
(14, 'article_delete', 'admins', 'Xoá bài viết', 5, '2020-12-02 08:51:30', '2020-12-02 08:51:30'),
(15, 'group_car', 'admins', 'Group Xe', 6, '2020-12-02 08:55:42', '2020-12-02 08:55:42'),
(16, 'location_index', 'admins', 'Danh sách địa chỉ', 7, '2020-12-02 09:09:49', '2020-12-02 09:09:49'),
(17, 'location_create', 'admins', 'Thêm mới đia điểm', 7, '2020-12-02 09:10:08', '2020-12-02 09:10:08'),
(18, 'location_edit', 'admins', 'Địa điểm', 7, '2020-12-02 09:10:19', '2020-12-02 09:10:19'),
(19, 'location_delete', 'admins', 'Xoá địa điểm', 7, '2020-12-02 09:10:30', '2020-12-02 09:10:30'),
(20, 'guest_index', 'admins', 'Danh sách nhà xe', 8, '2020-12-02 09:11:06', '2020-12-02 09:11:06'),
(21, 'guest_delete', 'admins', 'Xoá nhà xe', 8, '2020-12-02 09:11:16', '2020-12-02 09:11:16'),
(22, 'buses_index', 'admins', 'Lịch trình', 9, '2020-12-02 09:11:39', '2020-12-02 09:11:39'),
(23, 'ticket_index', 'admins', 'Quản lý vé', 12, '2020-12-02 09:12:25', '2020-12-02 09:12:25'),
(24, 'route_index', 'admins', 'Danh sách tuyến đường', 10, '2020-12-02 09:12:42', '2020-12-02 09:12:42'),
(25, 'route_create', 'admins', 'Thêm mới tuyến đường', 10, '2020-12-02 09:12:58', '2020-12-02 09:12:58'),
(26, 'route_edit', 'admins', 'Cập nhật tuyến đường', 10, '2020-12-02 09:13:10', '2020-12-02 09:13:10'),
(27, 'route_delete', 'admins', 'Cập nhật tuýen đường', 10, '2020-12-02 09:13:23', '2020-12-02 09:13:23'),
(28, 'user_index', 'admins', 'Quản lý thành viên', 14, '2020-12-02 09:14:24', '2020-12-02 09:14:24'),
(29, 'user_delete', 'admins', 'Xoá thành viên', 14, '2020-12-02 09:14:37', '2020-12-02 09:14:37'),
(30, 'promotion_code_index', 'admins', 'Quản lý code', 15, '2020-12-02 09:18:33', '2020-12-02 09:18:33'),
(31, 'promotion_code_create', 'admins', 'Thêm mới code', 15, '2020-12-02 09:18:43', '2020-12-02 09:18:43'),
(32, 'promotion_code_edit', 'admins', 'Cập nhật code', 15, '2020-12-02 09:18:54', '2020-12-02 09:18:54'),
(33, 'promotion_code_delete', 'admins', 'Xoá code', 15, '2020-12-02 09:19:04', '2020-12-02 09:19:04'),
(34, 'slide_index', 'admins', 'Danh sách slide', 17, '2020-12-02 09:19:54', '2020-12-02 09:19:54'),
(35, 'slide_create', 'admins', 'Thêm mới slide', 17, '2020-12-02 09:20:05', '2020-12-02 09:20:05'),
(36, 'slide_edit', 'admins', 'Cập nhật slide', 17, '2020-12-02 09:20:17', '2020-12-02 09:20:17'),
(37, 'slide_delete', 'admins', 'Xoá slide', 17, '2020-12-02 09:20:28', '2020-12-02 09:20:28'),
(38, 'configuration_index', 'admins', 'Cấu hình website', 18, '2020-12-02 09:21:08', '2020-12-02 09:21:08'),
(39, 'configuration_edit', 'admins', 'Cập nhật website', 18, '2020-12-02 09:21:29', '2020-12-02 09:21:29'),
(40, 'page_index', 'admins', 'Quản lý page', 19, '2020-12-02 09:22:28', '2020-12-02 09:22:28'),
(41, 'page_create', 'admins', 'Thêm mới page', 19, '2020-12-02 09:22:41', '2020-12-02 09:22:41'),
(42, 'page_edit', 'admins', 'Cập nhật page', 19, '2020-12-02 09:22:52', '2020-12-02 09:22:52'),
(43, 'page_delete', 'admins', 'Xoá page', 19, '2020-12-02 09:23:05', '2020-12-02 09:23:05'),
(44, 'email_index', 'admins', 'Câu hình email', 20, '2020-12-02 09:23:46', '2020-12-02 09:23:46'),
(45, 'email_edit', 'admins', 'Cập nhật cấu hình email', 20, '2020-12-02 09:23:58', '2020-12-02 09:23:58'),
(46, 'navbar_index', 'admins', 'Dah sách menu', 21, '2020-12-02 09:24:21', '2020-12-02 09:24:21'),
(47, 'navbar_create', 'admins', 'Thêm mới menu', 21, '2020-12-02 09:24:31', '2020-12-02 09:24:31'),
(48, 'navbar_edit', 'admins', 'Cập nhật menu', 21, '2020-12-02 09:24:42', '2020-12-02 09:24:42'),
(49, 'navbar_delete', 'admins', 'Xoá menu', 21, '2020-12-02 09:24:53', '2020-12-02 09:24:53'),
(50, 'admin_index', 'admins', 'Danh sách admin', 25, '2020-12-02 09:30:33', '2020-12-02 09:30:33'),
(51, 'admin_create', 'admins', 'Thêm mới admin', 25, '2020-12-02 09:30:44', '2020-12-02 09:30:44'),
(52, 'admin_edit', 'admins', 'Cập nhật admin', 25, '2020-12-02 09:30:56', '2020-12-02 09:30:56'),
(53, 'admin_delete', 'admins', 'Xoá admin', 25, '2020-12-02 09:31:07', '2020-12-02 09:31:07'),
(54, 'role_index', 'admins', 'Danh sách nhóm quyền', 24, '2020-12-02 09:31:44', '2020-12-02 09:31:44'),
(55, 'role_create', 'admins', 'Thêm mới nhóm quyền', 24, '2020-12-02 09:31:55', '2020-12-02 09:31:55'),
(56, 'role_edit', 'admins', 'Cập nhật nhóm quyền', 24, '2020-12-02 09:32:06', '2020-12-02 09:32:06'),
(57, 'role_delete', 'admins', 'Xoá nhóm quyền', 24, '2020-12-02 09:32:16', '2020-12-02 09:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_code`
--

CREATE TABLE `promotion_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pc_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_price` int(11) NOT NULL DEFAULT 0,
  `pc_user_id` int(11) NOT NULL DEFAULT 0,
  `pc_status` tinyint(4) NOT NULL DEFAULT 0,
  `pc_point` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SupperAdmin', 'Full quyền', 'admins', '2020-11-29 14:39:38', '2020-11-29 14:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đến',
  `starting_point_id` int(11) NOT NULL DEFAULT 0 COMMENT 'điểm đi',
  `position` tinyint(4) NOT NULL DEFAULT 0,
  `hot` tinyint(4) NOT NULL DEFAULT 0,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `name`, `slug`, `destination_id`, `starting_point_id`, `position`, `hot`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Vé từ Hà Nội đi Thanh Hoá', 've-tu-ha-noi-di-thanh-hoa', 4, 1, 0, 0, NULL, '2020-12-06 17:43:22', '2020-12-06 17:43:22'),
(2, 'Vé từ Hà Nội đi Ninh Bình', 've-tu-ha-noi-di-ninh-binh', 5, 1, 0, 1, NULL, '2020-12-06 17:44:45', NULL),
(3, 'SG', 'sg', 1, 16, 0, 0, NULL, '2020-12-14 13:42:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_blog`
--

CREATE TABLE `seo_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sb_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sb_md5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sb_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 keyword, 2 menu, 3 article',
  `sb_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_blog`
--

INSERT INTO `seo_blog` (`id`, `sb_slug`, `sb_md5`, `sb_type`, `sb_id`, `created_at`, `updated_at`) VALUES
(1, 'uu-dai-m', '4c1cfcfc9ca5def176bae1ef307216b7', 2, 1, '2020-11-29 15:23:24', NULL),
(2, 'cong-ty-co-phan-dau-tu-thuong-mai-va-van-tai-limousine-vip-cac-tinh-a', '1fbb4e44f7202e469b2570e57146adee', 3, 1, '2020-11-29 15:37:39', NULL),
(5, 'ben-xe-khach-m', 'b8db9a32c1f1b0ccd34a0c8e900eed81', 2, 2, '2020-11-29 16:06:44', NULL),
(6, 'ben-xe-mien-dong-a', '46fdfd642792edc358f8333f27f2577f', 3, 3, '2020-11-29 16:08:29', NULL),
(7, 'ben-xe-nuoc-ngam-a', 'bceac30eabcf5fc2353fd4efeae3b430', 3, 4, '2020-11-29 16:25:04', NULL),
(8, 'ben-xe-my-dinh-a', 'e1361472a0d614a239f4d02f4b4713a4', 3, 5, '2020-11-29 16:29:42', NULL),
(9, 'ben-xe-gia-lam-a', '55972b70f1ab95b3ebbe24e5eb99dfe1', 3, 6, '2020-11-29 16:30:47', NULL),
(12, 'limousine-vip-cac-tinh-khuyen-mai-lon-a', '44045f5513b100ee4728daa38a1b4647', 3, 7, '2020-12-02 04:59:47', NULL),
(13, 'khuyen-mai-khung-a', '7ec63d4fbf4e13bb09ee36d15fc1165d', 3, 8, '2020-12-02 05:08:03', NULL),
(14, 'tao-tai-khoan-tang-ngay-100k-a', '4b738506db25275f1551bbd8f8be8221', 3, 9, '2020-12-02 16:28:21', NULL),
(15, 'tang-20k-cho-nguoi-gioi-thieu-khi-khach-hang-mua-ve-lan-dau-a', '192ef3914f0bd44387fc7d67591c744f', 3, 10, '2020-12-03 14:03:15', NULL),
(16, 'huong-dan-m', 'b1e69727f8298ebb466e3d00eb0fa4fc', 2, 3, '2020-12-06 10:45:11', NULL),
(21, 'khuyen-mai-m', 'a86421994236c7c27bd0eef0b9ac80df', 2, 1, '2020-12-06 14:00:34', NULL),
(22, 'huong-dan-dang-ky-nha-xe-a', '13313ed8fe5130433b86a41d1fda1069', 3, 11, '2020-12-06 15:18:14', NULL),
(23, 'huong-dan-dat-ve-tai-limousinevipcactinhcom-a', 'a5556133ef7e72dc96d67f49553e34e1', 3, 12, '2020-12-06 16:31:56', NULL),
(24, 'cam-nang-du-lich-m', '161743da03267c5e51f771d727e06fab', 2, 4, '2020-12-06 16:38:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_education`
--

CREATE TABLE `seo_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `se_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_md5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `se_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 tag, 2 category, 3 course',
  `se_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_target` tinyint(4) NOT NULL DEFAULT 1,
  `s_sort` tinyint(4) NOT NULL DEFAULT 1,
  `s_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `s_name`, `s_link`, `s_banner`, `s_target`, `s_sort`, `s_status`, `created_at`, `updated_at`) VALUES
(1, 'Limousine VIP các tỉnh', NULL, '2020-11-29__xedcarlimohanoi.jpg', 1, 0, 1, '2020-11-29 16:33:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_sort` tinyint(4) NOT NULL DEFAULT 0,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_hot` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_3` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_2` tinyint(4) NOT NULL DEFAULT 0,
  `t_position_1` tinyint(4) NOT NULL DEFAULT 0,
  `t_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_user_id` int(11) NOT NULL DEFAULT 0,
  `t_guest_id` int(11) NOT NULL DEFAULT 0,
  `t_busts_id` int(11) NOT NULL DEFAULT 0,
  `t_admin_id` int(11) NOT NULL DEFAULT 0,
  `t_total_money` int(11) NOT NULL DEFAULT 0,
  `t_code` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_date_success` date DEFAULT NULL,
  `t_destination_id` int(11) NOT NULL DEFAULT 0,
  `t_starting_point_id` int(11) NOT NULL DEFAULT 0,
  `t_vehicle_id` int(11) NOT NULL DEFAULT 0,
  `t_buses_location_start` int(11) NOT NULL DEFAULT 0,
  `t_buses_location_stop` int(11) NOT NULL DEFAULT 0,
  `t_time_start` timestamp NULL DEFAULT NULL,
  `t_time_stop` timestamp NULL DEFAULT NULL,
  `t_type_pay` tinyint(4) NOT NULL DEFAULT 1,
  `t_pick_home` tinyint(4) NOT NULL DEFAULT 0,
  `t_address_pick_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_status_pick_home` tinyint(4) NOT NULL DEFAULT 1,
  `t_total_ticket` tinyint(4) NOT NULL DEFAULT 0,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_time_process` timestamp NULL DEFAULT NULL,
  `t_note_user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `t_user_id`, `t_guest_id`, `t_busts_id`, `t_admin_id`, `t_total_money`, `t_code`, `t_note`, `t_phone`, `t_name`, `t_email`, `t_address`, `t_date_success`, `t_destination_id`, `t_starting_point_id`, `t_vehicle_id`, `t_buses_location_start`, `t_buses_location_stop`, `t_time_start`, `t_time_stop`, `t_type_pay`, `t_pick_home`, `t_address_pick_home`, `t_status_pick_home`, `t_total_ticket`, `t_status`, `t_time_process`, `t_note_user`, `created_at`, `updated_at`) VALUES
(1, 13, 16, 51, 0, 1620000, NULL, NULL, '0969065518', 'Đức Lập', 'duclap351987@gmail.com', 'Ninh Bình', '2020-12-06', 1, 4, 10, 126, 128, '2020-12-05 20:00:00', '2020-12-05 22:40:00', 1, 0, NULL, 0, 9, 1, NULL, NULL, '2020-12-06 15:27:49', '2020-12-06 15:27:49'),
(2, 11, 14, 52, 0, 180000, NULL, NULL, '0932219268', 'Nguyễn Sơn', 'sonnv09@gmail.com', 'CẦU GIẤY', '2020-12-06', 3, 1, 7, 130, 131, '2020-12-05 17:00:00', '2020-12-06 16:59:00', 1, 0, NULL, 0, 1, 1, NULL, NULL, '2020-12-06 15:29:39', '2020-12-06 15:29:39'),
(3, 11, 19, 56, 0, 200000, NULL, NULL, '0932219268', 'Nguyễn Sơn', 'sonnv09@gmail.com', 'CẦU GIẤY', '2020-12-07', 4, 1, 11, 138, 139, '2020-12-06 18:29:09', '2020-12-06 18:29:09', 1, 1, '302 Cầu Giấy', 3, 1, 1, '2020-12-06 18:30:35', NULL, '2020-12-06 18:30:09', '2020-12-06 18:30:35'),
(4, 9, 16, 17, 0, 180000, NULL, NULL, '0986420994', 'admin', 'admin@gmail.com', 'Nghe An', '2020-12-07', 4, 1, 10, 41, 42, '2020-12-07 05:45:00', '2020-12-07 08:25:00', 1, 0, NULL, 1, 1, 1, NULL, NULL, '2020-12-06 18:35:32', '2020-12-06 18:35:32'),
(5, 11, 19, 56, 0, 200000, NULL, NULL, '0932219268', 'Nguyễn Sơn', 'sonnv09@gmail.com', 'CẦU GIẤY', '2020-12-07', 4, 1, 11, 138, 139, '2020-12-06 18:29:09', '2020-12-06 18:29:09', 1, 1, '302 Cầu Giấy', 2, 1, 2, '2020-12-06 18:38:25', NULL, '2020-12-06 18:37:29', '2020-12-06 18:44:24'),
(6, 13, 16, 50, 0, 540000, NULL, NULL, '0969065518', 'Đức Lập', 'duclap351987@gmail.com', 'Đường láng', '2020-12-07', 1, 4, 10, 122, 124, '2020-12-07 01:00:00', '2020-12-07 03:40:00', 1, 0, NULL, 1, 3, 1, NULL, NULL, '2020-12-07 01:12:23', '2020-12-07 01:12:23'),
(7, 0, 7, 6, 0, 155000, NULL, NULL, '0348123456', 'abc', 'abc@gmail.com', 'Sân Vận động mỹ đình', '2020-12-12', 5, 1, 5, 17, 18, '2020-12-11 22:00:00', '2020-12-11 23:30:00', 1, 0, NULL, 1, 1, 1, NULL, NULL, '2020-12-12 12:49:34', '2020-12-12 12:49:34'),
(8, 25, 8, 2, 0, 180000, NULL, NULL, '0928817228', 'NGuyễn Văn Dược', 'duocnvoit@gmail.com', 'Thôn Nội Thôn Xã Tây Đô Huyện Hưng Hà Tỉnh Thái Bình', '2020-12-12', 2, 1, 3, 9, 10, '2020-12-11 21:00:00', '2020-12-11 22:30:00', 1, 0, NULL, 1, 1, -1, NULL, 'a', '2020-12-12 12:52:48', '2020-12-14 13:55:52'),
(9, 25, 27, 112, 0, 230000, NULL, NULL, '0928817228', 'Sự kiện giọt máu hồng 12/2020', 'duocnvoit@gmail.com', 'Tòa nhà note 69 tầng', '2020-12-14', 1, 16, 12, 250, 251, '2020-12-14 10:30:00', '2020-12-14 13:34:00', 1, 0, NULL, 1, 1, 2, '2020-12-14 14:02:04', NULL, '2020-12-14 13:56:56', '2020-12-14 14:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_support` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` int(4) NOT NULL DEFAULT 0,
  `presenter_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_register_one` tinyint(4) NOT NULL DEFAULT 0,
  `is_ticket` tinyint(4) NOT NULL DEFAULT 0,
  `is_guest` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vote_number` int(11) NOT NULL DEFAULT 0,
  `vote_total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `name_support`, `email`, `slug`, `email_verified_at`, `password`, `address`, `about`, `about_price`, `avatar`, `phone`, `point`, `presenter_id`, `status`, `is_register_one`, `is_ticket`, `is_guest`, `remember_token`, `created_at`, `updated_at`, `vote_number`, `vote_total`) VALUES
(7, 'Nhà xe Duy Khang', 'Nhà xe Duy Khang', 'duykhanh@gmail.com', 'nha-xe-ninh-binh', NULL, '$2y$10$vult/dEuYKIN0Puhuc/xgu6iEGxFPLBwo6dcCODPN6oEo4Tf4hZpy', 'Ninh Bình - Hà Nội; Hà Nội - Ninh Bình', '<p><strong>Đ&Oacute;N TẬN NH&Agrave; H&Agrave; NỘI, TRẢ TẬN NH&Agrave; TP. NINH B&Igrave;NH</strong></p>\r\n\r\n<p>155,000 VNĐ1/ V&eacute;, đi v&agrave;o khu du lịch hoặc c&aacute;c nơi xa hơn ph&aacute;t sinh th&ecirc;m 30,000-40,000 VNĐ</p>\r\n\r\n<p>Tuyến 1: C&ocirc;ng vi&ecirc;n Cầu Giấy - Cổng 3 Big C Thăng Long<br />\r\nTuyến 2 : Rạp xiếc Trung Ương - 131 Phố Vọng - Chung cư CC2 - KĐT Đồng T&agrave;u</p>\r\n\r\n<p>Kh&aacute;ch n&agrave;o tự ra điểm ở H&agrave; Nội th&igrave; l&agrave; 130.000 VNĐ</p>\r\n\r\n<p>C&ocirc;ng ty cổ phần đầu tư thương mại v&agrave; vận tải Duy Khang &ndash; Duy Khang Limousine chuy&ecirc;n cung cấp c&aacute;c dịch vụ xe limousine 11 chỗ VIP chạy tuyến Ninh B&igrave;nh &ndash; H&agrave; Nội &ndash; Ninh B&igrave;nh.</p>\r\n\r\n<p>Sự trải nghiệm dịch vụ di chuyển tr&ecirc;n mong đợi của kh&aacute;ch h&agrave;ng&nbsp;ch&iacute;nh l&agrave; sứ mệnh, kim chỉ nam cho mọi hoạt động v&agrave; định hướng ph&aacute;t triển thương hiệu của Duy Khang LIMOUSINE.</p>', 'Sang trọng, Đẳng cấp', '2020-12-07__df92bfaf94be78e021af.jpg', '0976813817', 100, 0, 0, 0, 1, 1, NULL, '2020-12-02 15:14:31', '2020-12-06 19:11:56', 0, 0),
(8, 'Nhà xe Phú xuyên', 'phuxuyen@gmail.com', 'phuxuyen@gmail.com', 'nha-xe-quang-ninh', NULL, '$2y$10$lSAEoFjIVwJax3iQteSbl.67sF.dFyr/K5RD0e2DlhtKNTE9Sx5l6', 'Quảng Ninh', '<p>Đang cập nhật th&ocirc;ng tin</p>', NULL, '2020-12-05__7-cho-gia-dinh-duoi-1-ty-dong.jpg', '0933666999', 120, 0, 0, 0, 1, 1, NULL, '2020-12-02 15:15:47', '2020-12-05 14:47:43', 0, 0),
(9, 'TrungPhuNA', NULL, 'phupt@gmail.com', 'trungphuna', NULL, '$2y$10$vP/z4bXeP7NMp2rT8CWO/.J45kH12OXHfuX1Mf8pBVocKtxu1Qn4G', NULL, NULL, NULL, NULL, '0986420994', 120, 0, 0, 0, 0, 1, NULL, '2020-12-02 15:42:02', '2020-12-04 09:23:49', 0, 0),
(11, 'Nguyễn Sơn', NULL, 'sonnv09@gmail.com', 'nguyen-son', NULL, '$2y$10$IneD20jhLvhbJVDtAx.NCeopgajf3X9t2.gjZoeS7Os42eFKQz0aW', 'CẦU GIẤY', NULL, NULL, NULL, '0932219268', 101, 0, 0, 0, 1, 0, NULL, '2020-12-02 17:03:46', '2020-12-06 18:38:25', 0, 0),
(12, 'Bích Ngọc', NULL, 'ngocnb@gmail.com', 'bich-ngoc', NULL, '$2y$10$0ZZWZ9VbEsY2/HPfLE.oQerMGWGNF01BuHWOFdgFR7qjuY1NzUjbW', NULL, NULL, NULL, NULL, '0987123121', 100, 9, 0, 0, 1, 1, NULL, '2020-12-02 21:56:53', '2020-12-04 09:23:49', 0, 0),
(13, 'Đức Lập', NULL, 'duclap351987@gmail.com', 'duc-lap', NULL, '$2y$10$by/BXyXDAEBKFSpfsi3/COxsZXKvd.PQShfD6yAPGh9dblqDzhZ9i', 'Ninh Bình', NULL, NULL, '2020-12-05__inbound4113970220526195693.jpg', '0969065518', 120, 0, 0, 0, 0, 0, NULL, '2020-12-03 08:14:18', '2020-12-06 09:56:07', 0, 0),
(14, 'Nhà xe Nội Bài', 'Nhà xe Nội Bài', 'noibai@gmail.com', 'nha-xe-noi-bai', NULL, '$2y$10$bWWY2JS3kCFxzXcJXY8bSuqlTrnWqIUNGNX6Vrrs816ky7mRsm7li', 'Hà Nội', '<p><strong>H&agrave; Nội - Nội B&agrave;i; Nội B&agrave;i - H&agrave; Nội</strong></p>\r\n\r\n<p><strong>Xe 4 chỗ</strong></p>\r\n\r\n<p>200,000 VNĐ chiều đi&nbsp;</p>\r\n\r\n<p>250,000 VNĐ chiều về</p>\r\n\r\n<p><strong>Xe 7 chỗ</strong></p>\r\n\r\n<p>230,000 VNĐ chiều đi&nbsp;</p>\r\n\r\n<p>300,000 VNĐ chiều về</p>\r\n\r\n<p>Sẵn s&agrave;ng đ&oacute;n bạn khi bạn cần!</p>', NULL, NULL, '0932662299', 100, 0, 0, 0, 0, 1, NULL, '2020-12-03 18:30:01', '2020-12-04 00:23:18', 0, 0),
(15, 'Nhà xe Tràng An', NULL, 'trangan@gmail.com', 'nha-xe-trang-an', NULL, '$2y$10$A0zJYKhJbeTFUhId0QT6FOpgVGVHr9KwNMo7Pi1qI61TSHFCWV..y', 'Ninh Bình', '<h2>Th&ocirc;ng tin xe Tr&agrave;ng An Limousine</h2>\r\n\r\n<p>Với d&ograve;ng&nbsp;<a href=\"https://blog.vexere.com/tong-hop-xe-limousine-di-ninh-binh/\" target=\"_blank\"><strong>xe Limousine đi Ninh B&igrave;nh</strong></a>&nbsp;đẳng cấp, VeXeRe cung cấp th&ocirc;ng tin v&agrave; tư vấn đặt chỗ c&aacute;c nh&agrave; xe Limousine tốt nhất. Trong đ&oacute; xe Tr&agrave;ng An Limousinex đi Ninh B&igrave;nh l&agrave; h&atilde;ng xe mới chất lượng cao, uy t&iacute;n, đảm bảo mang đến trải nghiệm cực kỳ thoải m&aacute;i cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Xe Tr&agrave;ng An Limousine &nbsp;đi Ninh B&igrave;nh l&agrave; nh&agrave; xe chất lượng cao. Chuy&ecirc;n phục vụ h&agrave;nh kh&aacute;ch tr&ecirc;n tuyến H&agrave; Nội - Ninh B&igrave;nh. Bằng hệ thống xe Limousine VIP với nội thất sang trọng, được trang bị nhiều tiện &iacute;ch vượt trội như m&agrave;n h&igrave;nh LED, d&agrave;n &acirc;m thanh cao cấp, khăn lạnh, nước uống miễn ph&iacute; c&ugrave;ng bộ chăn, gối theo ti&ecirc;u chuẩn của Vietnam Airlines.</p>\r\n\r\n<p>Với đội ngũ t&agrave;i xế chuy&ecirc;n nghiệp v&agrave; gi&agrave;u kinh nghiệm. Nh&agrave; xe Tr&agrave;ng An Limousine kỳ vọng sẽ mang đến cho h&agrave;nh kh&aacute;ch những chuyến đi thật thoải m&aacute;i, tin cậy v&agrave; an to&agrave;n nhất.</p>\r\n\r\n<h3><strong>I.Đặt v&eacute;&nbsp;<a href=\"https://vexere.com/vi-VN/xe-trang-an?utm_source=blogvxr&amp;utm_campaign=SEO&amp;utm_content=thuy\">xe Tr&agrave;ng An Limousine</a>&nbsp;đi Ninh B&igrave;nh v&agrave; vấn đề cần lưu &yacute;:</strong></h3>\r\n\r\n<p>H&atilde;ng xe Tr&agrave;ng An Limousine limousine hỗ trợ d&ograve;ng xe Limousine 9 chỗ. Số lượng ghế &iacute;t v&agrave; chất lượng dịch vụ cao n&ecirc;n nếu đặt qu&aacute; gần ng&agrave;y đi sẽ kh&ocirc;ng c&ograve;n những vị tr&iacute; tốt hoặc hết v&eacute;. Bạn c&oacute; thể đặt v&eacute; trước&nbsp;<strong><a href=\"https://vexere.com/vi-VN/ve-xe-trang-an-limousine-tu-ha-noi-di-ninh-binh-ninh-binh-124t24761-28631.html\" target=\"_blank\">xe Tr&agrave;ng An Limousine đi Ninh B&igrave;nh</a></strong>&nbsp;v&agrave;&nbsp;<strong><a href=\"https://vexere.com/vi-VN/ve-xe-trang-an-limousine-tu-ninh-binh-ninh-binh-di-ha-noi-2476t1241-28631.html\">xe Tr&agrave;ng An Limousine đi H&agrave; Nội từ Ninh B&igrave;nh</a></strong>&nbsp;dễ d&agrave;ng v&agrave; thanh to&aacute;n tiện lợi qua hệ thống đặt v&eacute; trực tuyến</p>\r\n\r\n<p>Loại xe hỗ trợ tốt về chất lượng ghế ngồi người đi, nhưng xe kh&ocirc;ng c&oacute; gầm xe lớn như c&aacute;c loại xe giường nằm. N&ecirc;n trong trường hợp c&oacute; h&agrave;nh l&yacute; qu&aacute; nhiều hoặc k&iacute;ch thước lớn, bạn cần li&ecirc;n hệ tổng đ&agrave;i tư vấn để kiểm tra xem c&oacute; đủ chỗ kh&ocirc;ng trước khi thanh to&aacute;n.</p>\r\n\r\n<p><img alt=\"Xe Tràng An Limousine đi Ninh Bình\" src=\"https://lh4.googleusercontent.com/hAoLJ2ajUzXBEAPWh9bu96qHspXV0JVuhe-x-LDjhxkgK6xdrHgWPy1ID67KOvHepwoWsaXYSJvtGEPXk8Cq-kZixTSgdGiyDcfeFzlJk9UBX9Wqsncj1wWUUdpTQSZwnKEydmv7\" /></p>\r\n\r\n<p>Xe Tr&agrave;ng An Limousine đi Ninh B&igrave;nh</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Tr&agrave;ng An Limousine limousine hỗ trợ xe ghế ng&atilde; l&agrave; loại ghế c&oacute; nệm d&agrave;y, mang lại cảm gi&aacute;c &ecirc;m &aacute;i cho người ngồi. Nếu h&agrave;nh kh&aacute;ch c&oacute; em b&eacute;, hoặc đi cả gia đ&igrave;nh, n&ecirc;n lựa chọn băng chung 3 người ở ph&iacute;a cuối sẽ mang lại cảm gi&aacute;c rộng r&atilde;i v&agrave; thoải m&aacute;i hơn so với c&aacute;c ghế lẻ ở giữa xe.</p>\r\n\r\n<p>Tr&agrave;ng An Limousine c&oacute; chấp nhận v&eacute; điện tử, bạn chỉ cần đưa m&atilde; v&eacute; cho nh&acirc;n vi&ecirc;n hoặc t&agrave;i xế l&agrave; c&oacute; thể l&ecirc;n xe. Nh&acirc;n vi&ecirc;n h&atilde;ng xe c&oacute; thể li&ecirc;n hệ qua số điện thoại đặt v&eacute; để x&aacute;c nhận trước khi đi, bạn n&ecirc;n lưu &yacute; giữ điện thoại thường xuy&ecirc;n để tiện li&ecirc;n hệ.</p>\r\n\r\n<h3><strong>II.&nbsp;<a href=\"https://vexere.com/vi-VN/xe-trang-an/so-dien-thoai-dia-chi-xe-trang-an?utm_source=blogvxr&amp;utm_campaign=SEO&amp;utm_content=thuy\">Địa chỉ v&agrave; số điện thoại đặt v&eacute; xe Tr&agrave;ng An Limousine</a>&nbsp;v&agrave; c&aacute;c điểm đ&oacute;n trả kh&aacute;ch</strong></h3>\r\n\r\n<p>Tại H&agrave; Nội, xe Tr&agrave;ng An Limousine hỗ trợ đ&oacute;n kh&aacute;ch tại c&aacute;c điểm như Rạp xiếc Trung Ương, C&ocirc;ng vi&ecirc;n Nghĩa Đ&ocirc;, Big C Thăng Long. B&ecirc;n cạnh đ&oacute; c&ograve;n đ&oacute;n kh&aacute;ch ở s&acirc;n bay Nội B&agrave;i.</p>\r\n\r\n<p>Tại Ninh B&igrave;nh, Tr&agrave;ng An Limousine c&oacute; văn ph&ograve;ng tại số 47 Nguyễn Huệ. Hỗ trợ đưa đ&oacute;n kh&aacute;ch về c&aacute;c địa điểm du lịch lớn như Tr&agrave;ng An, B&aacute;i Đ&iacute;nh, Tam Cốc, Hoa Lư. H&agrave;nh kh&aacute;ch c&oacute; thể li&ecirc;n hệ đặt v&eacute; trước qua tổng đ&agrave;i 1900 7070.</p>\r\n\r\n<h3><strong>III. Tại sao n&ecirc;n chọn Tr&agrave;ng An Limousine đi Ninh B&igrave;nh từ H&agrave; Nội</strong></h3>\r\n\r\n<p><strong><a href=\"https://vexere.com/vi-VN/xe-trang-an/danh-gia?utm_source=blogvxr&amp;utm_campaign=SEO&amp;utm_content=thuy\">Đ&aacute;nh gi&aacute; xe Tr&agrave;ng An Limousine</a></strong>&nbsp;từ kh&aacute;ch h&agrave;ng kh&aacute; tốt. H&atilde;ng xe cam kết lu&ocirc;n mang đến chất lượng cao cấp nhất, sự hỗ trợ kh&aacute;ch h&agrave;ng tận t&igrave;nh nhất.</p>\r\n\r\n<p>Được thiết kế cải tiến từ xe lớn th&agrave;nh loại xe &iacute;t chỗ ngồi hơn, thay đổi th&agrave;nh ghế rộng r&atilde;i hơn tương đương với ghế hạng thương gia của c&aacute;c h&atilde;ng h&agrave;ng kh&ocirc;ng, ph&ugrave; hợp cho cả những h&agrave;nh kh&aacute;ch to cao.</p>\r\n\r\n<p><img alt=\"Nội thất xe Tràng An Limousine đi Ninh Bình từ Hà Nội\" src=\"https://lh3.googleusercontent.com/Nc2zOUR_Ezp4ZbK1Uah2UlNs6hI5homqe9JY7innnvlSIbFRRXCbrdC2h6kKheFf3pN-QCjwxYBtLvp_gNM3r2lMmDypqUZyZSDnIYw7wbaSEPZhS5HMhB03jZN5jhDEBOwV-UIa\" /></p>\r\n\r\n<p>Nội thất xe Tr&agrave;ng An Limousine đi Ninh B&igrave;nh từ H&agrave; Nội</p>\r\n\r\n<p>Xe Limousine Phương Nguy&ecirc;n l&agrave; d&ograve;ng xe Limousine c&oacute; thiết kế 9 ghế cao cấp từ xe 16 chỗ th&ocirc;ng thường tạo kh&ocirc;ng gian rộng r&atilde;i, k&iacute;ch thước ghế lớn. C&aacute;c ghế giữa xe c&oacute; chỗ để tay, c&oacute; thể ngả từ 10~45 độ t&ugrave;y theo nhu cầu. Tr&ecirc;n xe trang bị Wifi, cổng sạc USB ngay gần tại vị tr&iacute; c&aacute;c ghế, m&agrave;n h&igrave;nh cỡ lớn LED 21 inches v&agrave; khăn lạnh, nước suối miễn ph&iacute;.</p>\r\n\r\n<p>C&aacute;c ghế ngồi được thiết kế trượt ng&atilde; bằng c&aacute;c n&uacute;t điều chỉnh, h&agrave;nh kh&aacute;ch c&oacute; thể lựa chọn tư thế ph&ugrave; hợp v&agrave; thoải m&aacute;i nhất một c&aacute;ch dễ d&agrave;ng, nhanh ch&oacute;ng.</p>\r\n\r\n<p>Nh&acirc;n vi&ecirc;n phục vụ lu&ocirc;n nhiệt t&igrave;nh hỗ trợ kh&aacute;ch h&agrave;ng trong mọi t&igrave;nh huống, t&agrave;i xế được lựa chọn kỹ lưỡng, lu&ocirc;n đặt sự an to&agrave;n v&agrave; thoải m&aacute;i của h&agrave;nh kh&aacute;ch l&ecirc;n tr&ecirc;n hết.</p>', NULL, '2020-12-05__1563867376-artboard-1.png', '0979910019', 100, 0, 0, 0, 0, 1, NULL, '2020-12-04 05:51:07', '2020-12-06 19:07:45', 0, 0),
(16, 'LIMOUSINE PHƯỚC THỊNH', 'Phước Thịnh', 'phuocthinh@gmail.com', 'phuoc-thinh', NULL, '$2y$10$X2PO3qSuzBEGUsRMB3zbA.8El21FdTkeIjDv6XWlOwuBUdyB5PF3q', '146a Đ. Trần Hưng Đạo - P. Quảng Tiến - TP. Sầm Sơn', '<p><strong>Đ&oacute;n trả kh&aacute;ch tận nơi - Chạy tất cả c&aacute;c ng&agrave;y</strong></p>\r\n\r\n<p><strong>Địa chỉ VP tại THANH H&Oacute;A:&nbsp;</strong>146a Đ. Trần Hưng Đạo - P. Quảng Tiến - TP. Sầm Sơn</p>\r\n\r\n<p><strong>Địa chỉ VP tại H&Agrave; NỘI</strong>: Số 12/ ng&otilde; 72 Dương Khu&ecirc; - Mỹ Đ&igrave;nh -&nbsp;H&agrave; Nội</p>', 'Vé: Hạng A(3,4,5,6): 200,000đ - Hạng B(1,2,7,8,9): 180,000đ', '2020-12-06__li-dos.jpg', '0902325456', 100, 13, 0, 0, 1, 1, NULL, '2020-12-06 06:26:29', '2020-12-06 12:24:23', 0, 0),
(17, 'Ha huu tai', NULL, NULL, 'ha-huu-tai', NULL, '$2y$10$q5hpQT2dkSqMgD3YfRE6cOz43ZMX/3vLfKHlBMTt8m2THi7mB9skC', NULL, NULL, NULL, NULL, '0977604865', 100, 13, 0, 0, 0, 0, NULL, '2020-12-06 10:24:07', '2020-12-06 10:24:07', 0, 0),
(18, 'Sơn', NULL, NULL, 'son', NULL, '$2y$10$3esY16SxPms06LAbvdWIDO8I1fRcWm3Tg8NJNarOFF87QvZ3/13ne', NULL, NULL, NULL, NULL, '0932219266', 102, 16, 0, 0, 1, 0, NULL, '2020-12-06 10:24:36', '2020-12-06 10:32:03', 0, 0),
(19, 'Nhà Xe Thanh Hóa', NULL, NULL, 'nha-xe-thanh-hoa', NULL, '$2y$10$55z4Oa3YukT6oTXbFTvlDu35DNuXv/vBrDXqq4cggCg9nqUgQkxB6', NULL, NULL, NULL, NULL, '0933219268', 100, 11, 0, 0, 0, 1, NULL, '2020-12-06 18:27:52', '2020-12-06 18:27:52', 0, 0),
(20, 'Lê Khả Đạt', NULL, 'khadatle6789@gmail.com', 'le-kha-dat', NULL, '$2y$10$QsJzJo2qNx1LcMBrzMnsQu3tel5kvavBCcC/0jY76aptcRXt2taE2', NULL, NULL, NULL, NULL, '0395013811', 100, 0, 0, 0, 0, 0, NULL, '2020-12-07 03:17:40', '2020-12-07 03:17:40', 0, 0),
(21, 'Lê Khả Phong', NULL, 'khaphonggogo@gmail.com', 'le-kha-phong', NULL, '$2y$10$Z70E376bcwcHkPEfX8Ss0OsXLeR1/pwoHToIxJ8xX90Xix2JxS5jG', NULL, NULL, NULL, NULL, '0929656100', 100, 20, 0, 0, 0, 0, NULL, '2020-12-07 03:22:18', '2020-12-07 03:22:18', 0, 0),
(22, 'phạm thanh tùng', NULL, NULL, 'pham-thanh-tung', NULL, '$2y$10$HucbpbiyZjasuAOymOyTcOFPwC9EoNAV6mZ7i/1wTlGbZKa16wPMy', NULL, NULL, NULL, NULL, '0963850082', 100, 0, 0, 0, 0, 0, NULL, '2020-12-07 03:51:37', '2020-12-07 03:51:37', 0, 0),
(23, 'Ng toàn', NULL, NULL, 'ng-toan', NULL, '$2y$10$OxwiwIvDlxNAuv7lUIs2h.gT9orLASFb.PRt/8JD6ZGBom2B.UuwO', NULL, NULL, NULL, NULL, '0967990595', 100, 13, 0, 0, 0, 0, NULL, '2020-12-07 04:46:26', '2020-12-07 04:46:26', 0, 0),
(24, 'Trần trí khanh', NULL, 'khanhphuong.kp11@gmail.com', 'tran-tri-khanh', NULL, '$2y$10$c9m/yukapN5.8uCK22WIHelAdUAWR/T/Y8n7iOgmMvtyzHr1bHnIG', NULL, NULL, NULL, NULL, '0862485345', 100, 13, 0, 0, 0, 0, NULL, '2020-12-07 04:47:43', '2020-12-07 04:47:43', 0, 0),
(25, 'abc', NULL, 'abc@gmail.com', 'abc', NULL, '$2y$10$KWxJtblyUSncsRdm/r1vh.MnuXVdsFnXc1sKGTgVk8ka8TH9pRXXK', NULL, NULL, NULL, NULL, '0928817228', 101, 0, 0, 0, 1, 0, NULL, '2020-12-12 12:51:56', '2020-12-14 14:02:04', 0, 0),
(26, 'Nguyễn Văn Dược', NULL, 'duocnvoit@gmail.com', 'nguyen-van-duoc', NULL, '$2y$10$55z4Oa3YukT6oTXbFTvlDu35DNuXv/vBrDXqq4cggCg9nqUgQkxB6', NULL, NULL, NULL, NULL, '0359020898', 100, 0, 0, 0, 0, 1, NULL, '2020-12-12 14:10:37', '2020-12-12 14:10:37', 0, 0),
(27, 'Long Vân', NULL, 'longvan@gmail.com', 'long-van', NULL, '$2y$10$.wY0I5YLc52GTTvBaFzpGewyKCozb64UDv7.Uod8tW3rxWos7KL9y', NULL, NULL, NULL, NULL, '123456', 100, 0, 0, 0, 0, 1, NULL, '2020-12-14 13:32:03', '2020-12-14 13:32:03', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_action` tinyint(4) NOT NULL DEFAULT 0,
  `v_number_seats` tinyint(4) NOT NULL DEFAULT 0,
  `v_license_plate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'loại xe nằm hay ngồi',
  `v_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_guest_id` int(11) NOT NULL DEFAULT 0,
  `v_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `v_name`, `v_slug`, `v_action`, `v_number_seats`, `v_license_plate`, `v_type`, `v_avatar`, `v_tags`, `v_map`, `v_guest_id`, `v_status`, `created_at`, `updated_at`) VALUES
(1, 'Limousine VIP 9 chỗ', 'limousine-vip-9-cho', 0, 9, NULL, 2, '2020-11-29__8b341fab519d24e3d8bdf3f894259339.jpg', NULL, '2020-11-29__3886745-xetinhtevn-dcar-president-1.jpg', 2, 1, '2020-11-29 16:03:13', NULL),
(2, 'Limousine VIP 9 chỗ', 'limousine-vip-9-cho', 0, 9, NULL, 2, '2020-11-30__logo-v1.png', NULL, '2020-11-30__logo-ngang.png', 4, 1, '2020-11-30 14:21:17', NULL),
(3, 'Xe Phú Xuyên', 'xe-phu-xuyen', 0, 9, NULL, 2, '2020-12-04__download.jpg', NULL, '2020-12-02__8b341fab519d24e3d8bdf3f894259339.jpg', 8, 1, '2020-12-02 15:16:41', '2020-12-03 23:55:03'),
(4, 'Xe 24 Chỗ TrungPhuNA', 'xe-24-cho-trungphuna', 0, 24, NULL, 2, '2020-12-02__safe.png', NULL, '2020-12-02__safe2.png', 9, 1, '2020-12-02 16:00:16', NULL),
(5, 'Xe Duy Khang', 'xe-duy-khang', 1, 9, 'AA', 2, '2020-12-04__xe-duykhang1.png', 'An toàn, Sang trọng, Đẳng cấp', '2020-12-07__ghe-limousine.jpg', 7, 1, '2020-12-02 16:10:52', '2020-12-07 04:51:45'),
(6, 'Xe Phước Thịnh', 'xe-phuoc-thinh', 0, 9, NULL, 2, '2020-12-04__li-dos.jpg', NULL, '2020-12-04__xe-laha-limousine-1.jpg', 6, 1, '2020-12-02 16:39:10', '2020-12-04 00:02:39'),
(7, 'Nội Bài 4 chỗ', 'noi-bai-4-cho', 0, 4, NULL, 2, '2020-12-04__xe-4cho.jpg', NULL, '2020-12-04__xe-4-cho-ghe.jpg', 14, 1, '2020-12-03 18:31:27', '2020-12-04 00:20:21'),
(8, 'Nội Bài 7 chỗ', 'noi-bai-7-cho', 0, 7, NULL, 2, '2020-12-04__xe-7-cho-gia-re-nhat-viet-nam.jpg', NULL, '2020-12-04__7cho-cho-ngoi.jpg', 14, 1, '2020-12-03 18:32:30', '2020-12-04 00:28:21'),
(9, 'Xe Tràng An', 'xe-trang-an', 1, 9, 'AA', 2, '2020-12-04__1563867376-artboard-1.png', 'Tiện nghi, An toàn, Sạch Sẽ, Đẳng cấp', '2020-12-07__ghe-limousine.jpg', 15, 1, '2020-12-04 05:53:04', '2020-12-07 05:09:57'),
(10, 'Limousine Phước Thịnh', 'limousine-phuoc-thinh', 1, 9, '146A', 2, '2020-12-06__li-dos.jpg', 'Tiện nghi, Sạch sẽ, An toàn, Đúng giờ', '2020-12-06__ghe-limousine.jpg', 16, 1, '2020-12-06 08:30:42', '2020-12-06 18:07:19'),
(11, 'Xe Thanh Hóa', 'xe-thanh-hoa', 1, 9, '29', 2, '2020-12-07__7cho-cho-ngoi.jpg', 'Sạch sẽ, Tiện nghi, Đẳng cấp', '2020-12-07__ghe-limousine.jpg', 19, 1, '2020-12-06 18:29:04', NULL),
(12, 'Long Vân', 'long-van', 1, 20, '51A', 1, NULL, NULL, NULL, 27, 1, '2020-12-14 13:33:20', NULL),
(13, 'Long Vân', 'long-van', 1, 20, '51A', 1, NULL, NULL, NULL, 27, 1, '2020-12-14 13:33:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_user_id` int(11) NOT NULL DEFAULT 0,
  `v_id` int(11) NOT NULL DEFAULT 0,
  `v_number` tinyint(4) NOT NULL DEFAULT 0,
  `v_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votes_detail`
--

CREATE TABLE `votes_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_user_id` int(11) NOT NULL DEFAULT 0,
  `v_id` int(11) NOT NULL DEFAULT 0,
  `v_number` tinyint(4) NOT NULL DEFAULT 0,
  `v_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_status` tinyint(4) NOT NULL DEFAULT 1,
  `v_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Tiện ích, Thông tin, An toàn, Chất lượng, Thái độ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_a_slug_unique` (`a_slug`);

--
-- Indexes for table `articles_keywords`
--
ALTER TABLE `articles_keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_keywords_ak_article_id_ak_keyword_id_unique` (`ak_article_id`,`ak_keyword_id`),
  ADD KEY `articles_keywords_ak_article_id_index` (`ak_article_id`),
  ADD KEY `articles_keywords_ak_keyword_id_index` (`ak_keyword_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_b_destination_id_index` (`b_destination_id`),
  ADD KEY `buses_b_starting_point_id_index` (`b_starting_point_id`),
  ADD KEY `buses_b_vehicle_id_index` (`b_vehicle_id`),
  ADD KEY `buses_b_guest_id_index` (`b_guest_id`);

--
-- Indexes for table `buses_locations`
--
ALTER TABLE `buses_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_locations_bl_buses_id_index` (`bl_buses_id`),
  ADD KEY `buses_locations_bl_location_id_index` (`bl_location_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_email`
--
ALTER TABLE `config_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_k_slug_unique` (`k_slug`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_m_slug_unique` (`m_slug`),
  ADD KEY `menus_m_parent_id_index` (`m_parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_o_transaction_id_index` (`o_transaction_id`),
  ADD KEY `orders_o_destination_id_index` (`o_destination_id`),
  ADD KEY `orders_o_starting_point_id_index` (`o_starting_point_id`),
  ADD KEY `orders_o_user_id_index` (`o_user_id`),
  ADD KEY `orders_o_vehicle_id_index` (`o_vehicle_id`),
  ADD KEY `o_guest_id` (`o_guest_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_url_unique` (`url`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_histories`
--
ALTER TABLE `pay_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_code_user_id` (`ph_user_id`),
  ADD KEY `pay_histories_ph_user_id_index` (`ph_user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_code`
--
ALTER TABLE `promotion_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promotion_code_pc_code_unique` (`pc_code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `routes_slug_unique` (`slug`),
  ADD KEY `routes_destination_id_index` (`destination_id`),
  ADD KEY `routes_starting_point_id_index` (`starting_point_id`);

--
-- Indexes for table `seo_blog`
--
ALTER TABLE `seo_blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_blog_sb_md5_unique` (`sb_md5`);

--
-- Indexes for table `seo_education`
--
ALTER TABLE `seo_education`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_education_se_id_se_type_unique` (`se_id`,`se_type`),
  ADD UNIQUE KEY `seo_education_se_md5_unique` (`se_md5`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_t_slug_unique` (`t_slug`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_t_user_id_index` (`t_user_id`),
  ADD KEY `transactions_t_guest_id_index` (`t_guest_id`),
  ADD KEY `transactions_t_busts_id_index` (`t_busts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_slug_index` (`slug`),
  ADD KEY `presenter_id` (`presenter_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_v_slug_index` (`v_slug`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_v_user_id_index` (`v_user_id`),
  ADD KEY `votes_v_id_index` (`v_id`);

--
-- Indexes for table `votes_detail`
--
ALTER TABLE `votes_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_detail_v_user_id_index` (`v_user_id`),
  ADD KEY `votes_detail_v_id_index` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles_keywords`
--
ALTER TABLE `articles_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `buses_locations`
--
ALTER TABLE `buses_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_email`
--
ALTER TABLE `config_email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pay_histories`
--
ALTER TABLE `pay_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `promotion_code`
--
ALTER TABLE `promotion_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_blog`
--
ALTER TABLE `seo_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seo_education`
--
ALTER TABLE `seo_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votes_detail`
--
ALTER TABLE `votes_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
