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
-- Database: `evidence_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Mohd Fawaz', 'fawaz@spf.gov.sg', '$2y$10$qqH/iNPMU/0QltkNYqOKy.jOCeok0NJNCKxMP/2UjZo1j/oc7fBdC', '1');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `username`, `datetime`, `title`, `message`) VALUES
(3, 'Jeff', '2021-05-29 20:56:52', 'Create Feature', 'The create feature is complete! ~Yusuf ʕっ•ᴥ•ʔっ .'),
(8, 'Jeff', '2021-05-29 18:31:19', 'Update Feature', 'The update feature is working! ~Yusuf ʕっ•ᴥ•ʔっ'),
(9, 'Jeff', '2021-05-29 18:55:53', 'Read Feature', 'The read feature is working! ~Yusuf ʕっ•ᴥ•ʔっ'),
(10, 'Jeff', '2021-05-29 18:56:15', 'Delete Feature', 'The delete feature is working! ~Yusuf ʕっ•ᴥ•ʔっ'),
(13, 'Jeff', '2021-05-29 20:24:23', 'Announcement System', 'The announcement system is fully functioning! ~Yusuf ʕっ•ᴥ•ʔっ'),
(14, 'Jeff', '2021-05-29 20:49:56', 'Announcement System', 'The announcement system is fully functioning! ~Yusuf ʕっ•ᴥ•ʔっ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_port` int(11) NOT NULL,
  `product_state` varchar(15) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_desc`, `product_image`, `product_keywords`, `product_port`, `product_state`, `category`, `location`, `case_name`, `timestamp`) VALUES
(1, 'Meth', 'Meth', 'drugs.jpeg', 'Case-Id #123', 3001, 'archive out', 'narcotic', 'Kalang', 'Case 1', '2021-06-16'),
(2, 'Glock Pistol 65', 'Glock 65 found at Hill Street at border of victim\'s house vincinity.', 'gun.jpg', 'Case-Id #124', 3002, 'in', 'weapon', 'Changi', 'Case 2', '2021-06-16'),
(3, 'Hammer', 'Hammer', 'hammer.png', 'Case-Id #125', 3003, 'in', 'hardware', 'MArine Parade', 'Case 3', '2021-06-16'),
(4, 'Keys in Key chain', 'Set of Keys found at Orchard Street on site of victim\'s living room.', 'scpKey.jpg', 'Case-Id #126', 3004, 'out', 'document', 'Marina Bay', 'Case 4', '2021-06-16'),
(5, 'Others', 'Others', 'others.png', 'others', 3005, 'archive in', 'others', 'Suntec City', 'Case 5', '2021-06-16'),
(6, 'MercedesAMG', 'Mercedes-AMGdog', 'Mercedes-AMG.png', 'Mercedes-AMGfff', 3006, 'archive out', 'vehicle', 'City Hall', 'Case 6', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `pr` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `address`, `phone`, `pr`, `branch`) VALUES
(1, 'Mohd Fawaz', '$2y$10$weq9lNrfCZxz28mW3g0wgewOfDooN3.CvK5J6CXYblvotvKffqYuC', 'fawaz@spf.gov.sg', 'Amk Ave 10 Blk 570', '91926855', 'I/O', 'Tanglin NPC'),
(2, 'Mohd Irfan', '$2y$10$zMyshepNn11ajLlL9K33vOkfVMLPXPOmMY0.kySt76UIzjWzIvily', 'irfan@spf.gov.sg', 'Bedok Street 15 Blk 417', '88346712', 'Staff Sargent', 'Bedok NPC'),
(3, 'Felicia Lim', '$2y$10$FaqCaQy6Jzm7caYXcwZVjO7dSCBdg63CzYjgkhmY1IMAUzCxadcJe', 'felicia@spf.gov.sg', 'Tampines Street 12 Blk 500', '91938783', 'I/O', 'Tampines NPC'),
(4, 'Conan Zhang', '$2y$10$8aDG3GoDurIBSytCtWVEa.zX3MROI1elwf2GsDEtxsh/Nxn9bDkk2', 'conan@spf.gov.sg', 'Changi Street 10 Blk 214', '97863623', 'Staff Sargent', 'Changi NPC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `2fasecret` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `number`, `image`, `role`, `2fasecret`, `user_id`) VALUES
('yoseF', 'refrigenation@gmail.com', '$2y$10$2EP08GWFP/yliYmeUbuEzukPG/5rywGgua2BJnhiqJcBvdkM4RL4i', 98765431, 'yosef.jpg', 'admin', 'VONL2KHUZTJCLYHH', '60adcc051482c'),
('wilson', 'slashfentry@gmail.com', '$2y$10$ef.avLGrmVgf8JD1h6A4Vu0NPAliFppJWdMGOFhfnO0/q8QuDbm5q', 85330637, 'Screenshot from 2021-05-20 11-49-45.png', 'investigator', 'ITTZISDAP7XNXVQI', '60b9c4440aa63'),
('TeaBagginz', 'wasdumb24@gmail.com', '$2y$10$Q/1uN8sxCjox8lxTOnhjh.ApARcLrmYzptEKnj3xiL4LGXPlC8L3K', 85330637, 'yosef.jpg', 'investigator', 'CN4WTF5XZKFTAO44', '60b869e6cef6f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
