-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 12:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolkata_lal_bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `reason`, `created_at`) VALUES
(1, 'souvik mondal', 'souvik@gmail.com', 'something is good', '2021-07-22 12:10:56'),
(2, 'sumit saha', 'sumit@gmail.com', 'something not to say', '2021-07-22 12:42:34'),
(3, 'Ram Saha', 'ram@gmail.com', 'something to end', '2021-07-22 12:52:55'),
(4, 'john Doue', 'john@gmail.com', 'something to say', '2021-07-22 12:54:16'),
(5, 'asim saha', 'asim@gmail.com', 'hello i am kidnapped', '2021-07-22 12:56:03'),
(6, 'sohal sarma', 'sohal@gmail.com', 'i have a problem in the process', '2021-07-22 23:37:34'),
(7, 'alpha', 'alpha@outlook.com', 'reason for nothing', '2021-07-22 23:38:57'),
(8, 'noman', 'noman@outlook.com', 'noman something to say', '2021-07-22 23:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `puja_permission`
--

CREATE TABLE `puja_permission` (
  `request_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `traffic_challan`
--

CREATE TABLE `traffic_challan` (
  `vehicle_no` int(11) NOT NULL,
  `chasis_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `woner_name` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traffic_challan`
--

INSERT INTO `traffic_challan` (`vehicle_no`, `chasis_no`, `email_id`, `mobile_no`, `woner_name`, `created_at`) VALUES
(563256, 'rm-2563', 'marvel.sm.24@gmail.com', '3423423434', 'souvik mondal', '2021-07-23 15:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `view_fir`
--

CREATE TABLE `view_fir` (
  `fir_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `police_station` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `fir_number` text NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_fir`
--

INSERT INTO `view_fir` (`fir_id`, `name`, `email`, `address`, `police_station`, `status`, `fir_number`, `year`, `created_at`) VALUES
(1, 'souvik ', 'souvik@gmail.com', 'kalyani naida', 'kalyani', 'pandiing', '125635', 2020, '2021-07-23 02:18:43'),
(2, 'asim', 'asim@gmail.com', 'Naihati 12 street', 'naihati', 'panding', '125636', 2021, '2021-07-23 06:14:38'),
(3, 'kunal', 'kunal@gmail.com', 'rajarhat', 'kolkata', 'resolve', '125634', 2020, '2021-07-23 06:14:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puja_permission`
--
ALTER TABLE `puja_permission`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `traffic_challan`
--
ALTER TABLE `traffic_challan`
  ADD PRIMARY KEY (`vehicle_no`);

--
-- Indexes for table `view_fir`
--
ALTER TABLE `view_fir`
  ADD PRIMARY KEY (`fir_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `puja_permission`
--
ALTER TABLE `puja_permission`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `view_fir`
--
ALTER TABLE `view_fir`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
