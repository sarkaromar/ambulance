-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 07:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambulance`
--

-- --------------------------------------------------------

--
-- Table structure for table `abmulance_types`
--

CREATE TABLE `abmulance_types` (
  `abmulance_type_id` int(10) UNSIGNED NOT NULL,
  `abmulance_type_name` varchar(255) NOT NULL,
  `abmulance_type_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abmulance_types`
--

INSERT INTO `abmulance_types` (`abmulance_type_id`, `abmulance_type_name`, `abmulance_type_slug`) VALUES
(1, 'Non AC Ambulance', 'non_ac_ambulance'),
(2, 'AC Ambulance', 'ac_ambulance'),
(3, 'ICU Ambulance', 'icu_ambulance'),
(4, 'Freezer Ambulance', 'freezer_ambulance');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '0 = inactive, 1 = manager, 2 = super admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mosatfijur Rahman Rana', 'admin@test.com', '$2y$10$DLpe9PYCWhIa49fX.Xc90eZcU7h4CYRIGad0ADW2wsZoBksH.8NOK', 1, 'PbQqxQFLtq8YsOwSg4g3AXXwWafijIZ1glSK4x0tn4EEdsJlijy3ywcihmMD', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `booking_applicant_name` varchar(255) NOT NULL,
  `booking_ambulance_type_id` int(11) NOT NULL,
  `booking_form` varchar(255) NOT NULL,
  `booking_to` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `booking_time` varchar(255) NOT NULL,
  `booking_mobile` varchar(255) NOT NULL,
  `booking_email` varchar(255) DEFAULT NULL,
  `booking_address` varchar(255) NOT NULL,
  `booking_status` int(11) DEFAULT '0' COMMENT '0 = inactive, 1 = active',
  `booking_updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_applicant_name`, `booking_ambulance_type_id`, `booking_form`, `booking_to`, `booking_date`, `booking_time`, `booking_mobile`, `booking_email`, `booking_address`, `booking_status`, `booking_updated_by`, `created_at`, `updated_at`) VALUES
(2, 'mostafijur rahman', 1, 'f', 't', '27/04/2018', '15:50', '123123123123', 'admin@test.com', 'asdfasdf', 1, NULL, '2018-04-26 03:39:59', '2018-04-27 10:00:12'),
(3, 'meherun khan1', 3, 'amin bazar1', 'mirpur2', '28/04/20182', '15:503', '019140885035', 'admin@test.com1', 'address1', 1, NULL, '2018-04-26 03:41:07', '2018-04-27 11:24:59'),
(4, 'Rana Ahmed', 3, 'f', 't', '28/04/2018', '16:00', '01904088503', 'nargisjulie@gmail.com', 'name', 0, NULL, '2018-04-26 03:44:28', '2018-04-26 03:44:28'),
(6, 'julie', 1, 'f', 't', 'd', 't', '132654879', 'admin@test.com', 'add', 1, NULL, '2018-04-27 11:38:10', '2018-04-27 12:11:45'),
(7, 'test', 1, 'amin', 'mirpur', '2018-04-28', '23:40', '13654798', 'admin@test.com', 'add', 0, NULL, '2018-04-27 11:54:41', '2018-04-27 11:54:41'),
(8, 'test', 1, 'amin', 'mirpur', '2018-04-28', '23:40', '13654798', 'admin@test.com', 'add', 0, NULL, '2018-04-27 11:54:42', '2018-04-27 11:54:42'),
(9, 'abcd', 4, 'f', 't', '2018-04-28', '00:20', '13654798', 'nargisjulie@gmail.com', 'dafd', 0, NULL, '2018-04-27 12:00:43', '2018-04-27 12:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `content_name` varchar(255) NOT NULL,
  `content_info` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `content_name`, `content_info`, `created_at`, `updated_at`) VALUES
(1, 'about', '<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"heading-content-three\">\r\n<h2 class=\"title\">Why <br />Choose Us</h2>\r\n<h4 class=\"sub-title\">Ambulance Information</h4>\r\n</div>\r\n<!-- /.section-title-area --></div>\r\n<!-- /.col-md-12 --></div>\r\n<!-- /.row -->\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<h2 class=\"extra-big-title\">Best Ambulance Service</h2>\r\n</div>\r\n<!-- /.col-md-12 -->\r\n<div class=\"col-md-6\">\r\n<div class=\"about-content-left\">\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra. Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices nisi dolor non erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae dolor vitae iaculis condim rtweentum.</p>\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia.</p>\r\n</div>\r\n<!-- /.about-content-left--></div>\r\n<!-- /.col-md-5 -->\r\n<div class=\"col-md-6\"><img src=\"/ambulance/public/photo/shares/a1.png\" alt=\"car-item\" width=\"360\" height=\"176\" /></div>\r\n<!-- /.col-md-7 --></div>\r\n<!-- /.row -->', NULL, '2018-04-28 05:46:35'),
(2, 'rants', '<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"heading-content-three\">\r\n<h2 class=\"title\">Why <br />Choose Us</h2>\r\n<h4 class=\"sub-title\">Ambulance Information</h4>\r\n</div>\r\n<!-- /.section-title-area --></div>\r\n<!-- /.col-md-12 --></div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<h2 class=\"extra-big-title\">Best Ambulance Service</h2>\r\n</div>\r\n<!-- /.col-md-12 -->\r\n<div class=\"col-md-6\">\r\n<div class=\"about-content-left\">\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra. Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices nisi dolor non erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae dolor vitae iaculis condim rtweentum.</p>\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia.</p>\r\n</div>\r\n<!-- /.about-content-left--></div>\r\n<!-- /.col-md-5 -->\r\n<div class=\"col-md-6\"><img src=\"/ambulance/public/photo/shares/a1.png\" alt=\"car-item\" width=\"360\" height=\"176\" /></div>\r\n<!-- /.col-md-7 --></div>', NULL, '2018-04-28 06:44:00'),
(3, 'tnc', '<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"heading-content-three\">\r\n<h2 class=\"title\">Why <br />Choose Us</h2>\r\n<h4 class=\"sub-title\">Ambulance Information</h4>\r\n</div>\r\n<!-- /.section-title-area --></div>\r\n<!-- /.col-md-12 --></div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<h2 class=\"extra-big-title\">Best Ambulance Service</h2>\r\n</div>\r\n<!-- /.col-md-12 -->\r\n<div class=\"col-md-6\">\r\n<div class=\"about-content-left\">\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra. Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices nisi dolor non erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae dolor vitae iaculis condim rtweentum.</p>\r\n<p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia.</p>\r\n</div>\r\n<!-- /.about-content-left--></div>\r\n<!-- /.col-md-5 -->\r\n<div class=\"col-md-6\"><img src=\"/ambulance/public/photo/shares/a1.png\" alt=\"car-item\" width=\"360\" height=\"176\" /></div>\r\n<!-- /.col-md-7 --></div>', NULL, '2018-04-28 06:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(10) UNSIGNED NOT NULL,
  `driver_image` varchar(255) NOT NULL,
  `driver_title` varchar(255) DEFAULT NULL,
  `driver_info` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `driver_image`, `driver_title`, `driver_info`, `created_at`, `updated_at`) VALUES
(2, '2mS31524931433.jpg', 'Mr. Sagor Smith', 'Full Time Work,  Age 27', '2018-04-28 10:03:53', '2018-04-28 10:03:53'),
(3, '3uNe1524931447.jpg', 'Mr. Sagor Smith', 'Full Time Work, Age 27', '2018-04-28 10:04:07', '2018-04-28 10:04:07'),
(4, 'sFo71524931464.jpg', 'Mr. Sagor Smith', 'Full Time Work, Age 27', '2018-04-28 10:04:24', '2018-04-28 10:04:24'),
(5, 'nYbu1524931477.jpg', 'Mr. Sagor Smith', 'Full Time Work, Age 27', '2018-04-28 10:04:37', '2018-04-28 10:04:37'),
(6, 'siCw1524931494.jpg', 'Mr. Sagor Smith', 'Full Time Work, Age 27', '2018-04-28 10:04:54', '2018-04-28 10:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(10) UNSIGNED NOT NULL,
  `faq_question` text,
  `faq_answer` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:37:45', '2018-04-28 11:00:39'),
(3, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:37:55', '2018-04-28 11:00:47'),
(4, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:38:02', '2018-04-28 11:00:59'),
(5, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:38:08', '2018-04-28 11:01:05'),
(6, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:38:16', '2018-04-28 11:01:30'),
(7, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:38:23', '2018-04-28 11:01:36'),
(8, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-28 10:38:37', '2018-04-28 11:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_admin_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_26_074725_create_bookings_table', 2),
(4, '2018_04_26_084313_create_abmulance_types_table', 3),
(7, '2018_04_28_111913_create_contents_table', 4),
(8, '2018_04_28_131758_create_sliders_table', 5),
(9, '2018_04_28_154134_create_news_table', 6),
(10, '2018_04_28_155539_create_drivers_table', 7),
(11, '2018_04_28_160753_create_testimonials_table', 8),
(12, '2018_04_28_162611_create_faqs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_desc` text,
  `news_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_image`, `created_at`, `updated_at`) VALUES
(3, 'Get the best price of taxi in your Town.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'YnSI1524931528.png', '2018-04-28 10:05:28', '2018-04-28 10:05:28'),
(4, 'Lorem Ipsum is simply dummy text of the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pPGk1524931539.png', '2018-04-28 10:05:39', '2018-04-28 10:05:39'),
(5, 'Lorem Ipsum is simply dummy text of the', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'ZIhV1524931550.png', '2018-04-28 10:05:50', '2018-04-28 10:05:50'),
(6, 'Lorem Ipsum is simply dummy text of', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'NdsJ1524931562.png', '2018-04-28 10:06:02', '2018-04-28 10:06:02'),
(7, 'Lorem Ipsum is simply dummy text of', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'lY181524931570.png', '2018-04-28 10:06:10', '2018-04-28 10:06:10'),
(8, 'Lorem Ipsum is simply dummy text of', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'yr8P1524931580.png', '2018-04-28 10:06:20', '2018-04-28 10:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_text1` varchar(255) DEFAULT NULL,
  `slider_text2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_image`, `slider_text1`, `slider_text2`, `created_at`, `updated_at`) VALUES
(2, 'JfFb1524929452.jpg', NULL, NULL, '2018-04-28 09:30:52', '2018-04-28 09:30:52'),
(3, 'Rprf1524929458.jpg', NULL, NULL, '2018-04-28 09:30:58', '2018-04-28 09:30:58'),
(5, '4Fzh1524932500.jpg', NULL, NULL, '2018-04-28 10:21:40', '2018-04-28 10:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testi_id` int(10) UNSIGNED NOT NULL,
  `testi_image` varchar(255) NOT NULL,
  `testi_name` varchar(255) DEFAULT NULL,
  `testi_position` varchar(255) DEFAULT NULL,
  `testi_comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testi_id`, `testi_image`, `testi_name`, `testi_position`, `testi_comment`, `created_at`, `updated_at`) VALUES
(2, '0T8J1524932591.png', 'Bibahito Sagor', 'softhopper Manager', 'Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.', '2018-04-28 10:23:11', '2018-04-28 10:23:11'),
(3, 'hasR1524932613.png', 'Bibahito Sagor', 'Bibahito Sagor', 'Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.', '2018-04-28 10:23:33', '2018-04-28 10:23:33'),
(4, 'BSup1524932634.png', 'Bibahito Sagor', 'Bibahito Sagor', 'Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.', '2018-04-28 10:23:54', '2018-04-28 10:23:54'),
(5, 'DakI1524932646.png', 'Bibahito Sagor', 'Bibahito Sagor', 'Bibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito Sagor', '2018-04-28 10:24:06', '2018-04-28 10:24:06'),
(6, 'wNFy1524932655.png', 'Bibahito Sagor', 'Bibahito Sagor', 'Bibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito SagorBibahito Sagor', '2018-04-28 10:24:15', '2018-04-28 10:24:15'),
(7, 'qtp91524932663.png', 'Bibahito Sagor', 'Bibahito Sagor', 'Bibahito SagorBibahito SagorBibahito SagorBibahito Sagor', '2018-04-28 10:24:23', '2018-04-28 10:24:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abmulance_types`
--
ALTER TABLE `abmulance_types`
  ADD PRIMARY KEY (`abmulance_type_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abmulance_types`
--
ALTER TABLE `abmulance_types`
  MODIFY `abmulance_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
