-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 10:42 AM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.3.28-1+focal

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit_trail`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_count`
--

CREATE TABLE `action_count` (
  `occurences` int(2) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action_count`
--

INSERT INTO `action_count` (`occurences`, `action`) VALUES
(12, 'archive in'),
(9, 'archive out'),
(7, 'in'),
(8, 'out');

-- --------------------------------------------------------

--
-- Table structure for table `category_count`
--

CREATE TABLE `category_count` (
  `category` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_count`
--

INSERT INTO `category_count` (`category`, `count`) VALUES
('document', '1'),
('hardware', '1'),
('narcotic', '1'),
('others', '2'),
('vehicle', '1'),
('weapon', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `product_id` int(100) NOT NULL,
  `action` varchar(255) NOT NULL,
  `case_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`product_id`, `action`, `case_id`, `username`, `timestamp`) VALUES
(1, 'out', '21', 'jeff', 'today'),
(2, 'in', '32rrr', 'fsfsfr', 'mid-day'),
(3, 'archive in', 'vffe', 'tewf1', 'another day'),
(4, 'in', '23e', 'yuytre', 'tmr'),
(8, 'archive out', '1233e', 'wdfg', 'tdy'),
(9, 'archive in', '60ad0dab0c3d5', 'Wilson', ''),
(10, 'archive out', '60ad0dc519d15', 'Wilson', ''),
(11, 'in', '60ad0e04a46eb', 'Wilson', '2021-05-25'),
(12, 'out', '60ad0e172a027', 'Wilson', ''),
(13, 'in', '60ad13657ce12', 'Wilson', '2021-05-25'),
(14, 'out', '60ad136eceba3', 'Wilson', ''),
(15, 'archive in', '60b9008e4988c', 'TeaBaggins', '2021-06-04 00:17:18'),
(16, 'archive in', '60bf85beb578a', 'TeaBaggins', '2021-06-08 22:59:10'),
(17, 'archive in', '60bf85c582f40', 'TeaBaggins', '2021-06-08 22:59:17'),
(18, 'archive in', '60bf85d377188', 'TeaBaggins', '2021-06-08 22:59:31'),
(19, 'archive in', '60bf85faa98d7', 'TeaBaggins', '2021-06-08 23:00:10'),
(20, 'in', '60c0cc6554db3', 'TeaBagginz', '2021-06-09 22:12:53'),
(21, 'out', '60c0cc6a2ae02', 'TeaBagginz', '2021-06-09 22:12:58'),
(22, 'archive in', '60c0cc6f260f5', 'TeaBagginz', '2021-06-09 22:13:03'),
(23, 'archive in', '60c0cc755d9a5', 'TeaBagginz', '2021-06-09 22:13:09'),
(24, 'archive out', '60c0cc7fde8d4', 'TeaBagginz', '2021-06-09 22:13:19'),
(25, 'archive out', '60c0cc8542513', 'TeaBagginz', '2021-06-09 22:13:25'),
(26, 'archive out', '60c0cc8c7c347', 'TeaBagginz', '2021-06-09 22:13:32'),
(27, 'out', '60c0cef899a39', 'TeaBagginz', '2021-06-09 22:23:52'),
(28, 'archive out', '60c0cf11db7e2', 'TeaBagginz', '2021-06-09 22:24:17'),
(29, 'archive out', '60c0cf1761540', 'TeaBagginz', '2021-06-09 22:24:23'),
(30, 'archive in', '60c0cf20c8709', 'TeaBagginz', '2021-06-09 22:24:32'),
(31, 'archive in', '60c9cac6b1f1c', 'wilson', '2021-06-16 17:56:22'),
(32, 'archive out', '60c9cad720bbe', 'wilson', '2021-06-16 17:56:39'),
(33, 'archive in', '60c9cadfc6203', 'wilson', '2021-06-16 17:56:47'),
(34, 'archive out', '60c9cae6d12db', 'wilson', '2021-06-16 17:56:54'),
(35, 'out', '60c9caefbf699', 'wilson', '2021-06-16 17:57:03'),
(36, 'out', '60c9caf55b7c1', 'wilson', '2021-06-16 17:57:09'),
(37, 'out', '60c9cafa0d26b', 'wilson', '2021-06-16 17:57:14'),
(38, 'in', '60c9cb00e5600', 'wilson', '2021-06-16 17:57:20'),
(39, 'in', '60c9cb07124cf', 'wilson', '2021-06-16 17:57:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_count`
--
ALTER TABLE `action_count`
  ADD PRIMARY KEY (`action`);

--
-- Indexes for table `category_count`
--
ALTER TABLE `category_count`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
