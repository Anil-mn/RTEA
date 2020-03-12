-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 07:48 AM
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
-- Table structure for table `market_addcollection`
--

CREATE TABLE `market_addcollection` (
  `AD_ID` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `ad_place` varchar(30) NOT NULL,
  `discount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_addcollection`
--

INSERT INTO `market_addcollection` (`AD_ID`, `id`, `date`, `ad_place`, `discount`) VALUES
(1, 8, '2020-04-12', '2000', '50%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market_addcollection`
--
ALTER TABLE `market_addcollection`
  ADD PRIMARY KEY (`AD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `market_addcollection`
--
ALTER TABLE `market_addcollection`
  MODIFY `AD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
