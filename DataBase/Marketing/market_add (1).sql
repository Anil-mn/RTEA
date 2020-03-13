-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 07:47 AM
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
-- Table structure for table `market_add`
--

CREATE TABLE `market_add` (
  `Add_ID` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `adName` varchar(15) NOT NULL,
  `catProd` varchar(15) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_add`
--

INSERT INTO `market_add` (`Add_ID`, `id`, `adName`, `catProd`, `productName`, `description`) VALUES
(4, 0, 'mi poco f1', 'mobile phone', 'poco f1', 'OS	Android\r\nRAM	6 GB\r\nItem Weight	181 g\r\nProduct D'),
(7, 1, 'mi poco f1', 'mobile phone', 'poco f1', 'sgdfhdfg'),
(8, 1, 'mi poco f1', 'mobile phone', 'poco f1', 'wqrsfchgvbkjbytxc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market_add`
--
ALTER TABLE `market_add`
  ADD PRIMARY KEY (`Add_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `market_add`
--
ALTER TABLE `market_add`
  MODIFY `Add_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
