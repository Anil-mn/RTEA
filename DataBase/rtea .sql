-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 05:07 AM
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
-- Table structure for table `distribution_info`
--

CREATE TABLE `distribution_info` (
  `Distribution_ID` int(11) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribution_info`
--

INSERT INTO `distribution_info` (`Distribution_ID`, `Place`, `name`, `phoneNumber`, `Password`) VALUES
(1, 'Palakkad', 'Amithalla', '7894561230', 'Amithalla@123');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_inventoryreq`
--

CREATE TABLE `distribution_inventoryreq` (
  `inventoryReq_ID` int(11) NOT NULL,
  `Inventory_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributor_req`
--

CREATE TABLE `distributor_req` (
  `ProductReq_ID` int(11) NOT NULL,
  `From_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationID`, `Name`) VALUES
(1, 'Palakkad'),
(2, 'Thrissur');

-- --------------------------------------------------------

--
-- Table structure for table `market_add`
--

CREATE TABLE `market_add` (
  `Add_ID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `price` float NOT NULL,
  `TimePeriod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_addcollection`
--

CREATE TABLE `market_addcollection` (
  `AD_ID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `AddName` varchar(20) NOT NULL,
  `Categories` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_companyinfo`
--

CREATE TABLE `market_companyinfo` (
  `CompanyID` int(11) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `CompanyCata` varchar(50) NOT NULL,
  `CompanyMember` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `Categorie_ID` int(11) NOT NULL,
  `Categories` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`Categorie_ID`, `Categories`) VALUES
(1, 'Food');

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
(3, '1234567890', 'Dell ', 'Dell@1234', 'Palakkad');

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
(1, 1, 1, 2, 'ads');

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `Product_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(200) NOT NULL,
  `superSubID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`Product_ID`, `Name`, `Price`, `Description`, `superSubID`) VALUES
(1, 'Tomato', 30, 'Ntg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_subcategories`
--

CREATE TABLE `shop_subcategories` (
  `SubCategorie_ID` int(11) NOT NULL,
  `Categorie_ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_subcategories`
--

INSERT INTO `shop_subcategories` (`SubCategorie_ID`, `Categorie_ID`, `Name`) VALUES
(1, 1, 'FastFood'),
(2, 1, 'Grocery ');

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
(1, 2, 'Vegetables');

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
(19, 'anil', '9746903914', 'anil@anil.com', '1234', '', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `LogID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `TotalAmt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `TransactionID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribution_info`
--
ALTER TABLE `distribution_info`
  ADD PRIMARY KEY (`Distribution_ID`);

--
-- Indexes for table `distribution_inventoryreq`
--
ALTER TABLE `distribution_inventoryreq`
  ADD PRIMARY KEY (`inventoryReq_ID`);

--
-- Indexes for table `distributor_req`
--
ALTER TABLE `distributor_req`
  ADD PRIMARY KEY (`ProductReq_ID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationID`);

--
-- Indexes for table `market_add`
--
ALTER TABLE `market_add`
  ADD PRIMARY KEY (`Add_ID`);

--
-- Indexes for table `market_addcollection`
--
ALTER TABLE `market_addcollection`
  ADD PRIMARY KEY (`AD_ID`);

--
-- Indexes for table `market_companyinfo`
--
ALTER TABLE `market_companyinfo`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`Categorie_ID`);

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`ShopID`);

--
-- Indexes for table `shop_link`
--
ALTER TABLE `shop_link`
  ADD PRIMARY KEY (`Link_ID`);

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `shop_subcategories`
--
ALTER TABLE `shop_subcategories`
  ADD PRIMARY KEY (`SubCategorie_ID`);

--
-- Indexes for table `shop_supersub`
--
ALTER TABLE `shop_supersub`
  ADD PRIMARY KEY (`SuperSubCat_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribution_info`
--
ALTER TABLE `distribution_info`
  MODIFY `Distribution_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `distribution_inventoryreq`
--
ALTER TABLE `distribution_inventoryreq`
  MODIFY `inventoryReq_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `distributor_req`
--
ALTER TABLE `distributor_req`
  MODIFY `ProductReq_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `market_add`
--
ALTER TABLE `market_add`
  MODIFY `Add_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `market_addcollection`
--
ALTER TABLE `market_addcollection`
  MODIFY `AD_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `market_companyinfo`
--
ALTER TABLE `market_companyinfo`
  MODIFY `CompanyID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `Categorie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shop_link`
--
ALTER TABLE `shop_link`
  MODIFY `Link_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_subcategories`
--
ALTER TABLE `shop_subcategories`
  MODIFY `SubCategorie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_supersub`
--
ALTER TABLE `shop_supersub`
  MODIFY `SuperSubCat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
