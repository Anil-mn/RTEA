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
-- Table structure for table `distribution_inventoryreq`
--

CREATE TABLE `distribution_inventoryreq` (
  `inventoryReq_ID` int(11) NOT NULL,
  `Inventory_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribution_inventoryreq`
--

INSERT INTO `distribution_inventoryreq` (`inventoryReq_ID`, `Inventory_ID`, `Product_ID`, `Quantity`, `deadline`) VALUES
(1, 0, 0, 6, '2020-01-01'),
(2, 0, 0, 6, '2020-01-01'),
(3, 0, 0, 6, '2020-01-01'),
(4, 0, 0, 6, '2020-01-01'),
(5, 2, 0, 6, '2020-01-01'),
(6, 0, 0, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribution_inventoryreq`
--
ALTER TABLE `distribution_inventoryreq`
  ADD PRIMARY KEY (`inventoryReq_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribution_inventoryreq`
--
ALTER TABLE `distribution_inventoryreq`
  MODIFY `inventoryReq_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
