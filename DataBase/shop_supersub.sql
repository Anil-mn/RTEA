-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 11:05 AM
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
-- Table structure for table `shop_supersub`
--

CREATE TABLE `shop_supersub` (
  `SuperSubCat_ID` int(11) NOT NULL,
  `SubCategorie_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_supersub`
--

INSERT INTO `shop_supersub` (`SuperSubCat_ID`, `SubCategorie_ID`, `Name`) VALUES
(1, 1, 'Vegetables'),
(2, 1, 'Packet foods'),
(3, 1, 'Fruit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_supersub`
--
ALTER TABLE `shop_supersub`
  ADD PRIMARY KEY (`SuperSubCat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_supersub`
--
ALTER TABLE `shop_supersub`
  MODIFY `SuperSubCat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
