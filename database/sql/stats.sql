-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 04:23 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsstats`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `clients` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `ip`, `date`, `time`, `clients`, `created_at`, `updated_at`) VALUES
(1, 'ts.fadedgaming.org', '2017-12-28', '00:00:00', '3', NULL, NULL),
(2, 'ts.fadedgaming.org', '2017-12-28', '00:30:00', '3', NULL, NULL),
(3, 'ts.fadedgaming.org', '2017-12-28', '01:00:00', '3', NULL, NULL),
(4, 'ts.fadedgaming.org', '2017-12-28', '01:30:00', '3', NULL, NULL),
(5, 'ts.fadedgaming.org', '2017-12-28', '02:00:00', '4', NULL, NULL),
(6, 'ts.fadedgaming.org', '2017-12-28', '02:30:00', '4', NULL, NULL),
(7, 'ts.fadedgaming.org', '2017-12-28', '03:00:00', '4', NULL, NULL),
(8, 'ts.fadedgaming.org', '2017-12-28', '03:30:00', '3', NULL, NULL),
(9, 'ts.fadedgaming.org', '2017-12-28', '04:00:00', '3', NULL, NULL),
(10, 'ts.fadedgaming.org', '2017-12-28', '04:30:00', '4', NULL, NULL),
(11, 'ts.fadedgaming.org', '2017-12-28', '05:00:00', '3', NULL, NULL),
(12, 'ts.fadedgaming.org', '2017-12-28', '05:30:00', '3', NULL, NULL),
(13, 'ts.fadedgaming.org', '2017-12-28', '06:00:00', '3', NULL, NULL),
(14, 'ts.fadedgaming.org', '2017-12-28', '06:30:00', '4', NULL, NULL),
(15, 'ts.fadedgaming.org', '2017-12-28', '07:00:00', '4', NULL, NULL),
(16, 'ts.drag2death.com', '2017-12-28', '00:00:00', '21', NULL, NULL),
(17, 'ts.drag2death.com', '2017-12-28', '00:30:00', '17', NULL, NULL),
(18, 'ts.drag2death.com', '2017-12-28', '01:00:00', '14', NULL, NULL),
(19, 'ts.drag2death.com', '2017-12-28', '01:30:00', '11', NULL, NULL),
(20, 'ts.drag2death.com', '2017-12-28', '02:00:00', '11', NULL, NULL),
(21, 'ts.drag2death.com', '2017-12-28', '02:30:00', '14', NULL, NULL),
(22, 'ts.drag2death.com', '2017-12-28', '03:00:00', '13', NULL, NULL),
(23, 'ts.drag2death.com', '2017-12-28', '03:30:00', '13', NULL, NULL),
(24, 'ts.drag2death.com', '2017-12-28', '04:00:00', '15', NULL, NULL),
(25, 'ts.drag2death.com', '2017-12-28', '04:30:00', '16', NULL, NULL),
(26, 'ts.drag2death.com', '2017-12-28', '05:00:00', '17', NULL, NULL),
(27, 'ts.drag2death.com', '2017-12-28', '05:30:00', '23', NULL, NULL),
(28, 'ts.drag2death.com', '2017-12-28', '06:00:00', '34', NULL, NULL),
(29, 'ts.drag2death.com', '2017-12-28', '06:30:00', '36', NULL, NULL),
(30, 'ts.drag2death.com', '2017-12-28', '07:00:00', '38', NULL, NULL),
(31, 'ts.fadedgaming.org', '2017-12-28', '07:30:00', '3', NULL, NULL),
(32, 'ts.fadedgaming.org', '2017-12-28', '08:00:00', '3', NULL, NULL),
(33, 'ts.fadedgaming.org', '2017-12-28', '08:30:00', '3', NULL, NULL),
(34, 'ts.fadedgaming.org', '2017-12-28', '09:00:00', '3', NULL, NULL),
(35, 'ts.fadedgaming.org', '2017-12-28', '09:30:00', '3', NULL, NULL),
(36, 'ts.fadedgaming.org', '2017-12-28', '10:00:00', '3', NULL, NULL),
(37, 'ts.fadedgaming.org', '2017-12-28', '10:30:00', '3', NULL, NULL),
(38, 'ts.fadedgaming.org', '2017-12-28', '11:00:00', '2', NULL, NULL),
(39, 'ts.fadedgaming.org', '2017-12-28', '11:30:00', '2', NULL, NULL),
(40, 'ts.fadedgaming.org', '2017-12-28', '12:00:00', '2', NULL, NULL),
(41, 'ts.fadedgaming.org', '2017-12-28', '12:30:00', '2', NULL, NULL),
(42, 'ts.fadedgaming.org', '2017-12-28', '13:00:00', '2', NULL, NULL),
(43, 'ts.fadedgaming.org', '2017-12-28', '13:30:00', '2', NULL, NULL),
(44, 'ts.fadedgaming.org', '2017-12-28', '14:00:00', '2', NULL, NULL),
(45, 'ts.fadedgaming.org', '2017-12-28', '14:30:00', '2', NULL, NULL),
(46, 'ts.fadedgaming.org', '2017-12-28', '15:00:00', '2', NULL, NULL),
(47, 'ts.fadedgaming.org', '2017-12-28', '15:30:00', '2', NULL, NULL),
(48, 'ts.fadedgaming.org', '2017-12-28', '16:00:00', '2', NULL, NULL),
(49, 'ts.fadedgaming.org', '2017-12-28', '16:30:00', '2', NULL, NULL),
(50, 'ts.drag2death.com', '2017-12-28', '07:30:00', '42', NULL, NULL),
(51, 'ts.drag2death.com', '2017-12-28', '08:00:00', '52', NULL, NULL),
(52, 'ts.drag2death.com', '2017-12-28', '08:30:00', '60', NULL, NULL),
(53, 'ts.drag2death.com', '2017-12-28', '09:00:00', '68', NULL, NULL),
(54, 'ts.drag2death.com', '2017-12-28', '09:30:00', '76', NULL, NULL),
(55, 'ts.drag2death.com', '2017-12-28', '10:00:00', '88', NULL, NULL),
(56, 'ts.drag2death.com', '2017-12-28', '10:30:00', '85', NULL, NULL),
(57, 'ts.drag2death.com', '2017-12-28', '11:00:00', '87', NULL, NULL),
(58, 'ts.drag2death.com', '2017-12-28', '11:30:00', '90', NULL, NULL),
(59, 'ts.drag2death.com', '2017-12-28', '12:00:00', '102', NULL, NULL),
(60, 'ts.drag2death.com', '2017-12-28', '12:30:00', '96', NULL, NULL),
(61, 'ts.drag2death.com', '2017-12-28', '13:00:00', '101', NULL, NULL),
(62, 'ts.drag2death.com', '2017-12-28', '13:30:00', '99', NULL, NULL),
(63, 'ts.drag2death.com', '2017-12-28', '14:00:00', '110', NULL, NULL),
(64, 'ts.drag2death.com', '2017-12-28', '14:30:00', '116', NULL, NULL),
(65, 'ts.drag2death.com', '2017-12-28', '15:00:00', '117', NULL, NULL),
(66, 'ts.drag2death.com', '2017-12-28', '15:30:00', '128', NULL, NULL),
(67, 'ts.drag2death.com', '2017-12-28', '16:00:00', '120', NULL, NULL),
(68, 'ts.drag2death.com', '2017-12-28', '16:30:00', '116', NULL, NULL),
(69, 'ts.fadedgaming.org', '2017-12-28', '17:00:00', '3', NULL, NULL),
(70, 'ts.fadedgaming.org', '2017-12-28', '17:30:00', '3', NULL, NULL),
(71, 'ts.drag2death.com', '2017-12-28', '17:00:00', '107', NULL, NULL),
(72, 'ts.drag2death.com', '2017-12-28', '17:30:00', '104', NULL, NULL),
(73, 'ts.fadedgaming.org', '2017-12-28', '18:00:00', '2', NULL, NULL),
(74, 'ts.drag2death.com', '2017-12-28', '18:00:00', '103', NULL, NULL),
(75, 'ts.fadedgaming.org', '2017-12-28', '18:30:00', '2', NULL, NULL),
(76, 'ts.drag2death.com', '2017-12-28', '18:30:00', '99', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
