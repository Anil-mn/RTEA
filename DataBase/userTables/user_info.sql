-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:51 AM
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
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email_ID` varchar(40) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Gender` varchar(4) NOT NULL,
  `Dob` date NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserId`, `Name`, `PhoneNumber`, `Email_ID`, `Password`, `Gender`, `Dob`, `Location`) VALUES
(20, 'jayalakshmi', '9847895795', 'jlakshmi12@gmail.com', 'Lak@123', 'Fema', '2020-02-05', 'allapuzha'),
(21, 'Aleesha', '9142844353', 'aleesha123@gmail.com', 'aleesha123', 'Fema', '2020-02-06', '3'),
(23, 'Amitha Suresh', '9847895795', 'amithasuresh@gmail.com', 'Ami@123', 'Fema', '2019-11-07', '1'),
(24, 'amritha', '9847895795', 'ami.pearls@gmail.com', 'Amritha@12', 'Fema', '2020-02-05', '1'),
(25, 'amritha', '9847895799', 'amritha.kunnath@gmail.com', 'amritha@12', 'Fema', '2020-02-05', '1'),
(26, 'twrwgzff', '09947893703', 'amritha.kunnath@gmail.com', 'atetg', 'Fema', '2020-02-05', '1'),
(27, 'twrwgzff', '09947893703', 'amritha.kunnath@gmail.com', 'atetg', 'Fema', '2020-02-05', '1'),
(28, 'twrwgzff', '09947893703', 'amritha.kunnath@gmail.com', 'atetg', 'Fema', '2020-02-05', '1'),
(30, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(31, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(32, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(33, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(34, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(35, 'Anil', '9746903914', 'asdf@sdf', 'shehe', 'Male', '2020-02-01', '1'),
(36, '9746903914', '9746903914', '9746903914', '9746903914', 'Male', '2020-02-06', '1'),
(37, '9746903914', '9746903914', '9746903914', '9746903914', 'Male', '2020-02-06', '1'),
(38, '9746903914', '9746903914', '9746903914', '9746903914', 'Male', '2020-02-06', '1'),
(39, '9746903914', '9746903914', '9746903914', 'dfhhfgjjmh', 'Male', '2020-02-06', '1'),
(40, 'ami', '9746903914', 'hjhlk@gmail.com', 'kgjb.m,', 'Fema', '2020-02-06', '1'),
(41, 'ami', '9746903914', 'hjhlk@gmail.com', 'kgjb.m,', 'Fema', '2020-02-06', '1'),
(42, 'anil', '09947893703', 'amritha.kunnath@gmail.com', 'lgyh.', 'Fema', '2020-02-04', '1'),
(43, 'j.jk', '9896', 'mgcf,@', ',h', 'Fema', '2020-03-03', '1'),
(44, 'j.jk', '9896', 'mgcf,@', 'kfgk', 'Fema', '2020-03-03', '1'),
(45, 'Aleesha', '9142844353', 'aleesha123@gmail.com', 'aleesha123', 'Fema', '2020-02-06', '1'),
(46, 'Aleesha', '9142844353', 'aleesha123@gmail.com', 'aleesha123', 'Fema', '2020-02-06', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
