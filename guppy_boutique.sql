-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guppy_boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `category_id`, `name`, `content`, `status`, `thumb`, `created`, `created_by`, `modified`, `modified_by`, `publish_at`, `type`, `title_seo`, `description_seo`) VALUES
(23, 4, 'Thông tin và kỹ thuật nuôi cá bảy màu guppy', '<p>Chọn ra 2 con c&aacute; m&aacute;i đẹp nhất v&agrave; 1 con trống đẹp nhất cho v&agrave;o 1 bể 2 - 5 gallon. Việc sử dụng 1 con trống sẽ gi&uacute;p bạn dễ nhận biết được những đặc t&iacute;nh m&agrave; con trống truyền lại cho con của n&oacute;, nhờ đ&oacute; bạn c&oacute; thể t&igrave;m những con trống tốt nhất. Nếu những con m&aacute;i kh&ocirc;ng c&oacute; thai trong v&ograve;ng 2 th&aacute;ng, h&atilde;y th&ecirc;m v&agrave;o bể 1 con c&aacute; trống kh&aacute;c. Bể nhỏ sẽ gi&uacute;p c&aacute; trống dễ &quot;t&igrave;m thấy&quot; c&aacute; m&aacute;i hơn.</p>', 'active', '5fLUkQdtEO.jpeg', '2019-05-17 00:00:00', 'hailan', '2020-11-17 00:00:00', 'hailan', '2019-05-16', 'normal', '<meta name=\"author\" content=\"John Doe\">\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">', '<meta name=\"keywords\" content=\"HTML, CSS, JavaScript\">'),
(32, 4, 'Mẹo Nuôi Cá 7 Màu Mau Lớn | Đẻ Nhiều | Lên Màu Đẹp | Không Cần Oxy', '<p><strong>C&aacute; 7 m&agrave;u</strong>&nbsp;l&agrave; một trong những loại c&aacute; cảnh đẹp dễ nu&ocirc;i được d&acirc;n chơi ở mọi lứa tuổi y&ecirc;u th&iacute;ch v&agrave; đặc biệt cũng l&agrave; c&aacute; cảnh dễ nu&ocirc;i kh&ocirc;ng cần oxy những vẫn đẻ nhiều, l&ecirc;n m&agrave;u đẹp.</p>\r\n\r\n<p>Tuy nhi&ecirc;n m&igrave;nh biết c&aacute;c bạn kh&aacute; kh&oacute; khăn cho thời gian đầu nu&ocirc;i c&aacute; bảy m&agrave;u v&igrave; đ&acirc;y l&agrave; loại c&aacute; rất mẫn cảm với sự biến đổi của m&ocirc;i trường nước v&agrave; c&aacute;c loại dịch bệnh n&ecirc;n nếu kh&ocirc;ng c&oacute; kỹ thuật trong c&aacute;ch nu&ocirc;i, c&aacute; c&oacute; thể bị chết nguy&ecirc;n bầy. Vậy n&ecirc;n, trước khi c&oacute; &yacute; định nu&ocirc;i c&aacute; 7 m&agrave;u d&ugrave; rằng bạn nu&ocirc;i c&aacute; trong th&ugrave;ng xốp, th&ugrave;ng nhựa nu&ocirc;i c&aacute;, bể thủy tinh hay xi măng đi nữa th&igrave; h&atilde;y khoan dừng lại v&agrave; c&ugrave;ng ch&uacute;ng t&ocirc;i t&igrave;m hiểu 1 số th&ocirc;ng tin về lo&agrave;i c&aacute; n&agrave;y v&agrave; c&aacute;ch nu&ocirc;i c&aacute; bảy m&agrave;u &iacute;t chị chết để c&oacute; th&ecirc;m kinh nghi&ecirc;m trong việc nu&ocirc;i c&aacute; cảnh nh&eacute;.</p>', 'active', 'VPOTIi7RaP.jpeg', '2020-11-17 00:00:00', 'hailan', NULL, NULL, NULL, 'featured', '<meta charset=\"UTF-8\">', '<meta name=\"description\" content=\"Free Web tutorials\">');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `is_home` varchar(100) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created`, `created_by`, `modified`, `modified_by`, `is_home`, `display`) VALUES
(1, 'Thể thao', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-12 00:00:00', 'hailan', 'yes', 'list'),
(2, 'Giáo dục', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-12 00:00:00', 'hailan', 'yes', 'grid'),
(3, 'Sức khỏe', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-15 15:04:33', 'hailan', 'yes', 'list'),
(4, 'Du lịch', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-15 15:04:30', 'hailan', 'yes', 'grid'),
(5, 'Khoa học', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-12 00:00:00', 'hailan', 'no', 'list'),
(6, 'Số hóa', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-15 15:04:38', 'hailan', 'no', 'grid'),
(7, 'Xe - Ô tô', 'active', '2019-05-04 00:00:00', 'admin', '2019-05-15 15:04:36', 'hailan', 'no', 'list'),
(8, 'Kinh doanh', 'active', '2019-05-12 00:00:00', 'hailan', NULL, NULL, 'no', 'list');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `contact_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `contact`, `created_date`, `contact_by`) VALUES
(1, 'Lê Trương Định', '0364764002', 'admin@gmail.com', 'no', '2020-11-17 00:00:00', ''),
(2, 'Nguyễn Đình Duy', '0984623094', 'dinhduy@gmail.com', 'yes', '2020-11-18 00:00:00', 'truongdinh');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type_coupon` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `total_used` int(11) DEFAULT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `price_start` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `type_coupon`, `value`, `total`, `total_used`, `date_start`, `date_end`, `price_start`, `status`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(6, 'abc123', 'percent', 5, 10, NULL, '2020-11-27 00:00:00', '2020-12-09 00:00:00', 200000, 'active', '2020-11-18 00:00:00', 'truongdinh', NULL, NULL),
(7, 'ttZynLO5JX', 'percent', 15, 10, NULL, '2020-11-19 00:00:00', '2020-11-26 00:00:00', 100000, 'active', '2020-11-18 00:00:00', 'truongdinh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `combostar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `description`, `thumb`, `created`, `created_by`, `modified`, `modified_by`, `status`, `combostar`) VALUES
(1, 'Lê Trương Định', '<p><strong>C&aacute; c&oacute; nguồn gốc từ Jamaica, sống trong những vũng vịnh cạn, eo biển, mương r&atilde;nh v&agrave; dọc theo bờ biển. Năm 1866, Robert John Lechmere Guppy sống ở đảo Trinidad thuộc British West Indies gửi một v&agrave;i con c&aacute; n&agrave;y đến bảo t&agrave;ng Anh để nhận dạng. Albert C. L. G. Gunther của bảo t&agrave;ng n&agrave;y đặt t&ecirc;n khoa học cho n&oacute; l&agrave; Girardinus guppii để ghi c&ocirc;ng Guppy v&agrave;o cuối năm đ&oacute;.</strong></p>', '2bxGrDRkuO.jpeg', '2020-11-17 00:00:00', 'truongdinh', '2020-11-18 00:00:00', 'truongdinh', 'active', 5),
(2, 'Nguyễn Văn Nam', '<p>Đ&acirc;y l&agrave; giống c&aacute; dễ nu&ocirc;i, sinh sản nhanh, đa dạng v&agrave; phong ph&uacute; nhất trong số c&aacute;c lo&agrave;i c&aacute; cảnh (về m&agrave;u sắc). C&aacute; bảy m&agrave;u nhập ngoại v&agrave;o Việt Nam c&oacute; 2 loại ch&iacute;nh: bảy m&agrave;u đu&ocirc;i rắn v&agrave; bảy m&agrave;u th&acirc;n xanh đen, đu&ocirc;i m&agrave;u xanh biếc, đỏ điểm vạch trắng. Ở c&aacute;c nước kh&aacute;c c&oacute; c&aacute; bảy m&agrave;u to&agrave;n th&acirc;n đen tuyền chưa thấy c&oacute; tại Việt Nam.</p>', 'AGfGJC2tA6.png', '2020-11-17 00:00:00', 'truongdinh', '2020-11-18 00:00:00', 'truongdinh', 'active', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created` datetime NOT NULL,
  `created_by` text DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(2, 'Tôi đã 60 tuổi có trồng răng implant được không?', '<p>B&aacute;c Chế th&acirc;n mến, cảm ơn b&aacute;c đ&atilde; tin tưởng gửi gắm c&acirc;u hỏi đến cho ch&uacute;ng t&ocirc;i. Nha khoa Nh&acirc;n T&acirc;m xin được giải đ&aacute;p c&acirc;u hỏi &ldquo;60 tuổi&nbsp;c&oacute; trồng răng implant được kh&ocirc;ng?&rdquo;&nbsp;như sau:</p>\r\n\r\n<p><em>Tuổi t&aacute;c kh&ocirc;ng ảnh hưởng g&igrave; đến việc trồng răng implant. Quan trọng l&agrave; sức khỏe của b&aacute;c phải được chuẩn bị tốt th&igrave; vẫn c&oacute; thể&nbsp;<strong>cấy gh&eacute;p implant</strong>&nbsp;b&igrave;nh thường v&agrave; cơ hội th&agrave;nh c&ocirc;ng rất cao. Cấy gh&eacute;p implant chỉ hạn chế ở những người c&oacute; bệnh tiểu đường, tim mạch, nghiện thuốc l&aacute; nặng, bệnh nha chu.</em></p>\r\n\r\n<p>- Trường hợp mắc bệnh tiểu đường: Cần kiểm so&aacute;t cho đường huyết ổn định trước rồi mới c&oacute; thể&nbsp;cấy gh&eacute;p implant.</p>\r\n\r\n<p>- Trường hợp mắc bệnh tim mạch: <s>B&aacute;c sĩ nha khoa sẽ phối hợp với B&aacute;c sĩ tim mạch để c&oacute; thể l&agrave;m implant cho bệnh nh&acirc;n.</s></p>\r\n\r\n<p>- Trường hợp nghiện thuốc l&aacute;: Cần hạn chế h&uacute;t thuốc l&aacute; tối đa trong qu&aacute; tr&igrave;nh l&agrave;m implant v&igrave; h&uacute;t thuốc l&aacute; tr&ecirc;n 10 điếu/ng&agrave;y c&oacute; thể l&agrave;m hỏng implant.</p>\r\n\r\n<p>- Trường hợp mắc bệnh nha chu g&acirc;y mất xương: Cần phải gh&eacute;p xương v&agrave; chờ t&iacute;ch hợp. Bệnh nha chu cũng rất dễ t&aacute;i ph&aacute;t n&ecirc;n cần bệnh nh&acirc;n phải vệ sinh răng miệng thật cẩn thận để c&oacute; thể giữ được implant vững chắc.</p>\r\n\r\n<p><strong>Nha khoa Nh&acirc;n T&acirc;m đ&atilde; thực hiện cấy gh&eacute;p implant th&agrave;nh c&ocirc;ng cho rất nhiều trường hợp bệnh nh&acirc;n lớn tuổi, mang lại một h&agrave;m răng đều đẹp, chắc khỏe.</strong></p>\r\n\r\n<p>Nếu b&aacute;c đ&atilde; 60 tuổi nhưng kh&ocirc;ng c&oacute; c&aacute;c vấn đề cản trở tr&ecirc;n th&igrave; vẫn c&oacute; thể trồng răng implant với tỷ lệ th&agrave;nh c&ocirc;ng rất cao. V&agrave; nếu c&oacute; yếu tố n&agrave;o cản trở th&igrave; chỉ cần chuẩn bị tốt vẫn c&oacute; thể l&agrave;m được implant. Ch&uacute;c b&aacute;c sớm c&oacute; một h&agrave;m răng đẹp v&agrave; khỏe mạnh.</p>', '2020-11-14 00:00:00', 'truongdinh', '2020-11-16 00:00:00', 'hailan', 'active', 6),
(3, 'LIST 17 QUÁN CAFE ĐẸP Ở SÀI GÒN CÓ KHÔNG GIAN ĐỘC, LẠ, MỚI NHẤT 2020', '<p><strong><em>Đ&ocirc;i khi, người ta t&igrave;m đến những qu&aacute;n c&agrave; ph&ecirc; chẳng phải để thưởng thức những m&oacute;n đồ uống th&ocirc;ng thường. Đ&oacute; đ&atilde; trở th&agrave;nh một nơi tr&uacute; ngụ y&ecirc;n b&igrave;nh cho t&acirc;m hồn, hay đơn giản chỉ l&agrave; d&agrave;nh thời gian b&ecirc;n những người th&acirc;n y&ecirc;u. M&igrave;nh sẽ giới thiệu cho c&aacute;c bạn list 17 <a href=\"http://travelgear.mozello.com/blog/params/post/2100020/quan-cafe-dep-o-sai-gon\" target=\"_self\">qu&aacute;n cafe đẹp ở S&agrave;i G&ograve;n</a> c&oacute; kh&ocirc;ng gian độc, lạ, mới nhất 2020.&nbsp;</em></strong></p>', '2020-11-14 00:00:00', 'truongdinh', NULL, NULL, 'active', 2),
(4, 'AQ có thể nằm bất kỳ vị trí nào trên trang', '<p>AQ c&oacute; thể nằm bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n trangAQ c&oacute; thể nằm bất kỳ vị tr&iacute; n&agrave;o tr&ecirc;n trang</p>', '2020-11-14 00:00:00', 'truongdinh', NULL, NULL, 'active', 3);

-- --------------------------------------------------------

--
-- Table structure for table `script`
--

CREATE TABLE `script` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` text DEFAULT NULL,
  `script` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `script`
--

INSERT INTO `script` (`id`, `name`, `created`, `created_by`, `modified`, `modified_by`, `script`) VALUES
(4, 'head', '2020-11-16 00:00:00', 'truongdinh', '2020-11-18 00:00:00', 'truongdinh', '<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">Content Profile</div>'),
(5, 'footer', '2020-11-16 00:00:00', 'truongdinh', '2020-11-18 00:00:00', 'truongdinh', '<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">Content\r\n<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">Content\r\n<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">Content\r\n<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">Content');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `status`, `price`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'Bình Định', 'active', '10000', '2020-11-17 00:00:00', 'truongdinh', '2020-11-17 00:00:00', 'hailan'),
(2, 'An Giang', 'active', '30000', '2020-11-17 00:00:00', 'truongdinh', NULL, NULL),
(3, 'Hà Nội', 'active', '20000', '2020-11-17 00:00:00', 'truongdinh', NULL, NULL),
(4, 'TP Hồ Chí Minh', 'active', '50000', '2020-11-17 00:00:00', 'truongdinh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(200) NOT NULL,
  `thumb` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `description`, `link`, `thumb`, `created`, `created_by`, `modified`, `modified_by`, `status`) VALUES
(1, 'Khóa học lập trình Frontend Master', 'Khóa học sẽ giúp bạn trở thành một chuyên gia Frontend với đầy đủ các kiến thức về HTML, CSS, JavaScript, Bootstrap, jQuery, chuyển PSD thành HTML ...', 'https://zendvn.com/khoa-hoc-lap-trinh-frontend-master/', 'rEpDUQCxe4.jpeg', '2019-04-15 00:00:00', 'hailan', '2019-04-24 13:28:03', 'hailan', 'active'),
(2, 'Học lập trình trực tuyến', 'Học trực tuyến giúp bạn tiết kiệm chi phí, thời gian, cập nhật được nhiều kiến thức mới nhanh nhất và hiệu quả nhất', 'https://zendvn.com/', 'K6B1O6UNCb.jpeg', '2019-04-18 00:00:00', 'hailan', '2019-04-24 13:28:06', 'hailan', 'active'),
(3, 'Ưu đãi học phí', 'Tổng hợp các trương trình ưu đãi học phí hàng tuần, hàng tháng đến tất các các bạn với các mức giảm đặc biệt 50%, 70%,..', 'https://zendvn.com/uu-dai-hoc-phi-tai-zendvn/', 'LWi6hINpXz.jpeg', '2019-04-24 00:00:00', 'hailan', '2019-04-24 13:28:09', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `avatar`, `level`, `created`, `created_by`, `modified`, `modified_by`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123456', 'e10adc3949ba59abbe56e057f20f883e', '1ctW8mj8vq.png', 'admin', '2014-12-10 08:55:35', 'admin', '2019-05-04 14:47:14', 'hailan', 'active'),
(2, 'hailan', 'hailan@gmail.com', 'hailan', '7c6f3ef49405d8a330aaa19ca0d0f6af', '1eSGmvZ3gM.jpeg', 'member', '2014-12-13 07:20:03', 'admin', '2019-05-04 08:47:04', 'hailan', 'active'),
(3, 'user123', 'test@gmail.com', 'user123', 'e10adc3949ba59abbe56e057f20f883e', 'Hb1QSn1CL8.png', 'member', '2019-05-04 00:00:00', 'admin', '2019-05-04 08:47:07', 'hailan', 'active'),
(4, 'user456', 'user456@gmail.com', 'user456', 'e10adc3949ba59abbe56e057f20f883e', 'J1uknUz0T6.png', 'member', '2019-05-04 00:00:00', 'admin', '2019-05-04 08:47:10', 'hailan', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `status`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'https://www.youtube.com/watch?v=tlei_DA6KLA&list=PLv6GftO355Atnyfxhr3O2RJ_xJEeDcRJg', 'active', '2020-11-14 00:00:00', 'truongdinh', '2020-11-18 00:00:00', 'hailan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `script`
--
ALTER TABLE `script`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `script`
--
ALTER TABLE `script`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
