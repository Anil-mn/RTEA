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
-- Table structure for table `shop_link`
--

CREATE TABLE `shop_link` (
  `Link_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Shop_ID` int(11) NOT NULL,
  `NumberOf` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_link`
--

INSERT INTO `shop_link` (`Link_ID`, `Product_ID`, `Shop_ID`, `NumberOf`, `Location`) VALUES
(1, 10000, 4, 5, 'top'),
(2, 10003, 4, 3, '2nd row '),
(3, 10007, 4, 7, 'top');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_link`
--
ALTER TABLE `shop_link`
  ADD PRIMARY KEY (`Link_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_link`
--
ALTER TABLE `shop_link`
  MODIFY `Link_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
