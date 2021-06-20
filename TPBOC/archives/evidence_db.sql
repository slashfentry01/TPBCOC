-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 09:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
-- Table structure for table `archival`
--

CREATE TABLE `archival` (
  `blockchain` text NOT NULL,
  `caseID` text NOT NULL,
  `caseDes` text NOT NULL,
  `investigator` text NOT NULL,
  `timestamp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archival`
--

INSERT INTO `archival` (`blockchain`, `caseID`, `caseDes`, `investigator`, `timestamp`) VALUES
('O:5:\"pCase\":1:{s:5:\"chain\";a:2:{i:0;O:8:\"Evidence\":8:{s:5:\"pHash\";s:0:\"\";s:5:\"index\";i:20210517220551000;s:9:\"timestamp\";s:20:\"2021/05/17, 22:05:51\";s:5:\"nonce\";i:2616375;s:5:\"title\";s:6:\"Case 1\";s:11:\"description\";s:6:\"Murder\";s:5:\"Ipath\";s:17:\"images/BGCD73.jpg\";s:4:\"hash\";s:64:\"00000d9a6428dd2dc85170fb6acad45fdaa31a1ade0e31e83bb5f7e9306e7cc7\";}i:1;O:8:\"Evidence\":8:{s:5:\"pHash\";s:64:\"00000d9a6428dd2dc85170fb6acad45fdaa31a1ade0e31e83bb5f7e9306e7cc7\";s:5:\"index\";i:20210517220551001;s:9:\"timestamp\";s:20:\"2021/05/17, 22:16:20\";s:5:\"nonce\";i:77175;s:5:\"title\";s:5:\"Knife\";s:11:\"description\";s:6:\"Weapon\";s:5:\"Ipath\";s:29:\"images/Bigstock_330191518.jpg\";s:4:\"hash\";s:64:\"000003145932a9b613a45e508fd7c27b382bd4c2bfafacc322308ef52c2f4b00\";}}}', 'Case 1', 'Murder', 'Mohd Fawaz', '2021/05/13, 17:48:13'),
('O:5:\"pCase\":1:{s:5:\"chain\";a:2:{i:0;O:8:\"Evidence\":8:{s:5:\"pHash\";s:0:\"\";s:5:\"index\";i:20210518114345000;s:9:\"timestamp\";s:20:\"2021/05/18, 11:43:45\";s:5:\"nonce\";i:41680;s:5:\"title\";s:6:\"Case 2\";s:11:\"description\";s:7:\"Suicide\";s:5:\"Ipath\";s:50:\"images/crimesceneistock000020049073bradcalkins.jpg\";s:4:\"hash\";s:64:\"0000006190a5a63388c836b5dbe5a0b33347e38e75a12209146bd2e1b6c9fda5\";}i:1;O:8:\"Evidence\":8:{s:5:\"pHash\";s:64:\"0000006190a5a63388c836b5dbe5a0b33347e38e75a12209146bd2e1b6c9fda5\";s:5:\"index\";i:20210518114345001;s:9:\"timestamp\";s:20:\"2021/05/18, 13:48:49\";s:5:\"nonce\";i:2756832;s:5:\"title\";s:14:\"Sleeping Pills\";s:11:\"description\";s:14:\"Cause of Death\";s:5:\"Ipath\";s:19:\"images/download.jpg\";s:4:\"hash\";s:64:\"0000015957e4dc3a68b52dbb81a7cdf32c5a6147e5eb55924991c27f0e2c30a1\";}}}', 'Case 2', 'Suicide', 'Mohd Fawaz', '2021/05/18, 11:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

CREATE TABLE `checkinout` (
  `blockchain` text NOT NULL,
  `title` text NOT NULL,
  `timestamp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkinout`
--

INSERT INTO `checkinout` (`blockchain`, `title`, `timestamp`) VALUES
('O:3:\"COC\":1:{s:5:\"chain\";a:2:{i:0;O:5:\"Entry\":6:{s:5:\"pHash\";s:0:\"\";s:5:\"index\";i:20210517220551001;s:9:\"timestamp\";s:20:\"2021/05/17, 22:16:20\";s:5:\"nonce\";i:5591698;s:6:\"status\";s:12:\"Case 1 Knife\";s:4:\"hash\";s:64:\"0000035076bebf6948ad718478551060781e8a1e5cee5b933d5ac3758c1c4165\";}i:1;O:5:\"Entry\":6:{s:5:\"pHash\";s:64:\"0000035076bebf6948ad718478551060781e8a1e5cee5b933d5ac3758c1c4165\";s:5:\"index\";i:20210517220551002;s:9:\"timestamp\";s:20:\"2021/05/17, 22:16:25\";s:5:\"nonce\";i:22218;s:6:\"status\";s:8:\"check-in\";s:4:\"hash\";s:64:\"00000edfe86104be22abf97d7401a10953489138a0dfef95c4b7a77d941a3a1e\";}}}', 'Case 1 Knife', '2021/05/17, 22:16:20'),
('O:3:\"COC\":1:{s:5:\"chain\";a:2:{i:0;O:5:\"Entry\":6:{s:5:\"pHash\";s:0:\"\";s:5:\"index\";i:20210518114345001;s:9:\"timestamp\";s:20:\"2021/05/18, 13:48:52\";s:5:\"nonce\";i:929090;s:6:\"status\";s:21:\"Case 2 Sleeping Pills\";s:4:\"hash\";s:64:\"00000dd83beca2a2be4d6a8aaaa4a4c6c76238cf0cde743e0f6fa7cef2964a2a\";}i:1;O:5:\"Entry\":6:{s:5:\"pHash\";s:64:\"00000dd83beca2a2be4d6a8aaaa4a4c6c76238cf0cde743e0f6fa7cef2964a2a\";s:5:\"index\";i:20210518114345002;s:9:\"timestamp\";s:20:\"2021/05/18, 13:48:53\";s:5:\"nonce\";i:373300;s:6:\"status\";s:8:\"check-in\";s:4:\"hash\";s:64:\"00000d297e07fc136523cfaf89c0ed49507ce22c5e00c0f86a39d0bdb3ad1d05\";}}}', 'Case 2 Sleeping Pills', '2021/05/18, 13:48:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archival`
--
ALTER TABLE `archival`
  ADD UNIQUE KEY `caseID` (`caseID`) USING HASH;

--
-- Indexes for table `checkinout`
--
ALTER TABLE `checkinout`
  ADD UNIQUE KEY `title` (`title`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
