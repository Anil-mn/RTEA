-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtea`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `ShopID` int(11) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `ShopName` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`ShopID`, `PhoneNumber`, `ShopName`, `Password`, `Location`) VALUES
(1, '9874563210', 'big Bazzar', 'Big@1234', 'Palakkad'),
(2, '9874563201', 'Royal Market', 'Royal@1234', 'Thrissur'),
(3, '1234567890', 'Dell ', 'Dell@1234', 'Palakkad'),
(4, '9847895795', 'bliss', 'bliss123', 'Palakkad'),
(5, '7306719427', 'poco', 'poco123', 'Kollam'),
(6, '', 'gjmhg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`ShopID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
