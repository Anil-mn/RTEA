-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:40 PM
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
-- Table structure for table `dis_shopreq`
--

CREATE TABLE `dis_shopreq` (
  `ReqID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Quntity` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dis_shopreq`
--

INSERT INTO `dis_shopreq` (`ReqID`, `ShopID`, `Product`, `Quntity`, `Date`, `Time`) VALUES
(1, 4, 'Brinjal', 23, '2020-03-02', '06:00:00'),
(2, 4, 'Tomato', 34, '2020-03-04', '12:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dis_shopreq`
--
ALTER TABLE `dis_shopreq`
  ADD PRIMARY KEY (`ReqID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dis_shopreq`
--
ALTER TABLE `dis_shopreq`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
