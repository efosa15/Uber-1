-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 08:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uber`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fare` int(11) NOT NULL,
  `total_driven` int(11) NOT NULL,
  `car_type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `car_number` int(11) NOT NULL,
  `passenger_size` int(11) NOT NULL,
  `fined_count` int(11) NOT NULL,
  `fine_sum` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `phone`, `fare`, `total_driven`, `car_type`, `car_number`, `passenger_size`, `fined_count`, `fine_sum`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Probhas Ranjan', '01744420401', 40, 500, 'Medium', 8848041, 4, 0, 0, 5, '2016-10-14 16:52:22', '2016-10-13 15:59:03'),
(2, 'Polash Roy', '8888888888', 34, 3554, 'Small', 21474836, 4, 1, 500, 4, '2016-10-14 17:07:16', '2016-10-13 16:19:54'),
(3, 'Faysal Islam', '01719449891', 500, 900, 'Medium', 9922564, 4, 2, 800, 4, NULL, '2016-10-14 06:54:54'),
(4, 'Md Sajib', '65223', 200, 5000, 'Small', 26599, 2, 0, 0, 4, NULL, '2016-10-14 06:57:47'),
(6, 'Probhas', '893453', 2, 2, '0', 12135281, 2, 0, 0, 5, NULL, '2016-10-14 07:11:27'),
(7, 'Demo driver', '0172146095', 10, 1200, 'small car', 859522, 2, 0, 0, 0, NULL, '2016-10-14 16:55:12'),
(8, 'Mr Ruhul', '856625', 250, 4000, 'Medium', 566565, 5, 3, 1500, 5, NULL, '2016-10-14 06:54:54'),
(9, 'Probhas', '893453', 500, 4000, 'Medium', 852147, 4, 3, 1800, 5, NULL, '2016-10-14 07:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
