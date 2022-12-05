-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `itemID` int(9) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `stocks` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This table is for inventory management';

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`itemID`, `itemName`, `date`, `stocks`) VALUES
(1009, 'Pogi ni Kokoy', '2022-12-05', 4),
(1010, 'Pogi talaga ni Kokoy', '2022-12-05', 3),
(1011, 'Hayst pogi talaga', '2022-12-05', 6),
(1012, 'Hahahahaha', '2022-12-05', 34),
(1013, 'dfghdf', '2022-12-05', 6),
(1014, 'ertertyert', '2022-12-05', 0),
(1015, 'dfghdfh', '2022-12-05', 4),
(1016, 'dfghfdhghfg', '2022-12-05', 3),
(1017, 'c', '2022-12-05', 4),
(1018, 'a', '2022-12-05', 3),
(1019, 'f', '2022-12-05', 3),
(1020, 'fw', '2022-12-05', 0),
(1021, 'q', '2022-12-05', 1),
(1022, 'aa', '2022-12-05', 3),
(1023, 's', '2022-12-05', 3),
(1024, 'd', '2022-12-05', 3),
(1025, 'g', '2022-12-05', 6),
(1026, 'm', '2022-12-05', 4),
(1027, 'k', '2022-12-05', 3),
(1028, 'n', '2022-12-05', 6),
(1029, 'b', '2022-12-05', 6),
(1030, 'z', '2022-12-05', 34),
(1031, 'x', '2022-12-05', 3),
(1032, 'v', '2022-12-05', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `itemID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
