-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 08:16 PM
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
(1, 'Mosatfijur Rahman Rana', 'admin@test.com', '$2y$10$DLpe9PYCWhIa49fX.Xc90eZcU7h4CYRIGad0ADW2wsZoBksH.8NOK', 1, '4j1VU2n5ishLP2U1GNyuKM8CqYncmzauksvZmDfdHmdqmjG4STU9SYkiYcuG', NULL, NULL);

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
(4, '2018_04_26_084313_create_abmulance_types_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
