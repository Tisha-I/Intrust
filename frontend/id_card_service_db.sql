-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_card_service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'interra networks', 'interra@gmail.com', '2147483647', 'nile'),
(2, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(3, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(4, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(5, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(6, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(7, 'hori', 'sebgo@gmail.com', '77607554', 'nile'),
(8, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(9, 'hori', 'sebgohalidou@gmail.com', '0022677607554', 'nile'),
(10, 'hali', 'dsdds@gmail.com', '8789', 'kaya'),
(11, 'hali', 'dsdds@gmail.com', '8789', 'kaya');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `user_name`, `user_email`, `company_name`, `content`) VALUES
(1, 'Marak Interra', 'interra@gmail.com', 'Interra Network', 'Our software development team possesses proven skills in translating business needs into project requirements throughout the phases of Software Development Life Cycle. Our model covers everything from conceptualization, simultaneous front-end & back-end coding, implementation, QA, and more');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `id` int(11) NOT NULL,
  `template` text DEFAULT NULL,
  `field` varchar(255) NOT NULL,
  `quantity` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`id`, `template`, `field`, `quantity`) VALUES
(1, 'first.png', '', '375'),
(2, 'template2', 'item 3, ', '50'),
(3, 'template2', 'item 3, ', '50'),
(4, 'template2', 'item 3, ', '50'),
(5, 'template2', 'item 3, ', '50'),
(6, '', 'item 3,item 7, ', '10'),
(7, 'template4', 'item 3, ', '50'),
(8, '', 'item 2,item 6,item 7, ', '50'),
(9, 'template4', 'item 3,item 7, ', '50-200'),
(10, 'template4', 'item 3,item 7, ', '50-200');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `processed_at` datetime DEFAULT NULL,
  `processed_by` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `company_id`, `card_id`, `created_at`, `processed_at`, `processed_by`, `status`) VALUES
(2, 1, 1, '0000-00-00 00:00:00', '2031-08-22 04:08:20', 0, 'canceled'),
(3, 4, 4, '2031-08-22 01:44:43', '2031-08-22 04:07:55', 0, 'canceled'),
(4, 5, 5, '2031-08-22 01:49:28', NULL, NULL, 'pending'),
(5, 6, 6, '2031-08-22 01:55:01', NULL, NULL, 'pending'),
(6, 7, 7, '2031-08-22 01:56:59', NULL, NULL, 'pending'),
(7, 8, 8, '2031-08-22 02:03:06', NULL, NULL, 'pending'),
(8, 11, 11, '2031-08-22 02:18:09', NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('sebgohalidou@gmail.com', '63ac484a4177d666c983407c4f6b32da26d35fe9dc', '2022-09-01 05:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `email`, `status`) VALUES
(1, 'Halidou', 'SEBGO', 'shalidou', 'sebgo96', 'sebgohalidou@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idcard`
--
ALTER TABLE `idcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
