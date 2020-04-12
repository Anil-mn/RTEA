-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 06:36 PM
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
(1, 'Palakkad', 'Amithalla', '7894561230', 'Amithalla@123'),
(2, 'Ottapalam', 'induleka', '9746903914', 'anil1234');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_stock`
--

CREATE TABLE `distribution_stock` (
  `stk_id` int(11) NOT NULL,
  `Dis_ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribution_stock`
--

INSERT INTO `distribution_stock` (`stk_id`, `Dis_ID`, `product_id`, `quantity`, `sold`) VALUES
(3, 2, 1, 50, 20),
(4, 2, 3, 40, 30);

-- --------------------------------------------------------

--
-- Table structure for table `distributor_orders`
--

CREATE TABLE `distributor_orders` (
  `Order_ID` int(11) NOT NULL,
  `Distributor_ID` int(11) NOT NULL,
  `Request_ID` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Order Accepted ',
  `payment` varchar(25) NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor_orders`
--

INSERT INTO `distributor_orders` (`Order_ID`, `Distributor_ID`, `Request_ID`, `Status`, `payment`) VALUES
(11, 1, 1, 'Order Delivered', 'Paied'),
(12, 1, 2, 'Order Delivered', 'Paied'),
(13, 1, 8, 'Order Delivered', 'Paied'),
(19, 1, 4, 'Order Delivered', 'Paied'),
(20, 1, 9, 'Order Delivered', 'Paied'),
(22, 1, 7, 'Order Delivered', 'Paied'),
(23, 1, 10, 'Order Delivered', 'Paied'),
(24, 1, 7, 'Order Delivered', 'Paied'),
(25, 1, 11, 'Order Delivered', 'Paid');

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
-- Table structure for table `dis_shopreq`
--

CREATE TABLE `dis_shopreq` (
  `ReqID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Quntity` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Not Requested'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dis_shopreq`
--

INSERT INTO `dis_shopreq` (`ReqID`, `ShopID`, `Product`, `Quntity`, `Date`, `Time`, `Status`) VALUES
(2, 4, 'Tomato', 12, '2020-03-18', '00:00:00', 'Order Purchased'),
(7, 4, 'Maggi', 34, '2020-03-20', '12:00:00', 'Delivery Confirmed'),
(8, 4, 'Brinjal', 12, '2020-03-20', '08:00:00', 'Delivery Confirmed'),
(9, 3, 'Tomato', 20, '2020-03-27', '00:00:00', 'Not Requested'),
(10, 3, 'Red chilli', 20, '2020-04-05', '00:00:00', 'Not Requested'),
(11, 4, 'Brinjal', 12, '2020-04-08', '00:00:00', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `companyAddress` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `location` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `phoneNumber`, `companyName`, `companyAddress`, `password`, `location`, `date`) VALUES
(1, '9746903914', 'AMN', 'Sillicon vally', 'anil1234', 'Ottapalam', '2020-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_products`
--

CREATE TABLE `inventory_products` (
  `ID` int(11) NOT NULL,
  `invName` varchar(50) NOT NULL,
  `InvID` int(11) NOT NULL,
  `ProName` varchar(40) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_products`
--

INSERT INTO `inventory_products` (`ID`, `invName`, `InvID`, `ProName`, `Location`) VALUES
(1, 'Anil''s Shop', 1, 'Tomato', 'Palakkad'),
(2, 'AMn', 1, 'Brinjal', 'Palakkad '),
(5, 'AMN', 1, 'Maggi', 'Ottapalam');

-- --------------------------------------------------------

--
-- Table structure for table `invent_orders`
--

CREATE TABLE `invent_orders` (
  `ordr_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `product` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invent_stock`
--

CREATE TABLE `invent_stock` (
  `stk_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `qty_available` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invent_stock`
--

INSERT INTO `invent_stock` (`stk_id`, `inventory_id`, `product_name`, `qty_available`, `sold`) VALUES
(1, 3, 'ICE', 12, 6);

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
(2, 'Thrissur'),
(4, 'Ottapalam');

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
  `description` varchar(50) NOT NULL,
  `PostDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_add`
--

INSERT INTO `market_add` (`Add_ID`, `id`, `adName`, `catProd`, `productName`, `description`, `PostDate`) VALUES
(1, 1, 'Maggi Nudels', 'Banner', 'Maggi', 'anuydjf', '2020-03-16'),
(5, 1, 'Tomato thakkall', 'Banner Add', 'Tomato', 'Thakalli 10 rs kku orannam kooduthal kittum', '2020-03-20');

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
(1, 1, '2020-03-20', '30', '12'),
(2, 2, '2020-03-20', '12', '34'),
(3, 3, '2020-03-17', '30', '12'),
(4, 4, '2020-03-15', '30', '2'),
(5, 5, '2020-03-23', '25', '5');

-- --------------------------------------------------------

--
-- Table structure for table `market_ads`
--

CREATE TABLE `market_ads` (
  `ID` int(11) NOT NULL,
  `invID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `AddID` int(11) NOT NULL,
  `NoOfShops` int(11) NOT NULL,
  `NoOfUsers` int(11) NOT NULL,
  `DueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_ads`
--

INSERT INTO `market_ads` (`ID`, `invID`, `ProductID`, `AddID`, `NoOfShops`, `NoOfUsers`, `DueDate`) VALUES
(1, 1, 10003, 5, 1, 1, '2020-03-28');

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
-- Table structure for table `market_membership`
--

CREATE TABLE `market_membership` (
  `mem_ID` int(10) NOT NULL,
  `add_id` int(10) NOT NULL,
  `ad_Slot` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_membership`
--

INSERT INTO `market_membership` (`mem_ID`, `add_id`, `ad_Slot`, `Price`) VALUES
(2, 1, '4', 400),
(3, 2, '2', 200),
(4, 4, '3', 300),
(5, 5, '3', 300);

-- --------------------------------------------------------

--
-- Table structure for table `market_shopads`
--

CREATE TABLE `market_shopads` (
  `ID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `AddID` int(11) NOT NULL,
  `SoltNumber` int(11) NOT NULL,
  `DueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_shopads`
--

INSERT INTO `market_shopads` (`ID`, `ShopID`, `AddID`, `SoltNumber`, `DueDate`) VALUES
(1, 3, 5, 5, '2020-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `market_shopslots`
--

CREATE TABLE `market_shopslots` (
  `ID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `SlotNumber` int(11) NOT NULL,
  `SlotName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_shopslots`
--

INSERT INTO `market_shopslots` (`ID`, `ShopID`, `SlotNumber`, `SlotName`) VALUES
(52, 3, 5, 'Front banner');

-- --------------------------------------------------------

--
-- Table structure for table `market_userads`
--

CREATE TABLE `market_userads` (
  `ID` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Add_ID` int(11) NOT NULL,
  `SlotNumbers` int(11) NOT NULL,
  `DueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_userads`
--

INSERT INTO `market_userads` (`ID`, `User_id`, `Add_ID`, `SlotNumbers`, `DueDate`) VALUES
(1, 26, 5, 1, '2020-04-09');

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
(1, 'Food'),
(2, 'Clothing'),
(3, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `ShopID` int(11) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `ShopName` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `AddSlots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`ShopID`, `PhoneNumber`, `ShopName`, `Password`, `Location`, `Date`, `AddSlots`) VALUES
(1, '9874563210', 'big Bazzar', 'Big@1234', 'Palakkad', '2020-03-15', 8),
(2, '9874563201', 'Royal Market', 'Royal@1234', 'Thrissur', '0000-00-00', 8),
(3, '1234567890', 'Dell ', 'Dell@1234', 'Palakkad', '0000-00-00', 6),
(4, '9847895795', 'bliss', 'bliss123', 'Palakkad', '0000-00-00', 8),
(5, '7306719427', 'poco', 'poco123', 'Ottapalam', '2020-04-07', 8);

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
(4, 10003, 3, 0, 'asdf'),
(5, 10003, 4, 1, 'as'),
(6, 10002, 4, 38, 'to'),
(7, 10002, 3, 29, 'de'),
(8, 10002, 2, 4, 'real'),
(9, 10006, 3, 3, 'Bottom row'),
(10, 10008, 3, 8, 'top');

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
(10000, 'Brinjal', 32, 'tha s a  veg', 1),
(10001, 'Cauliflower', 20, 'ths s a vege', 1),
(10002, 'Maggi', 30, 'packed food item', 2),
(10003, 'Tomato', 10, 'ths s s vege', 1),
(10004, 'Capsicum', 15, 'ths s a vege', 1),
(10005, 'Spinach', 20, 'leafy veg', 1),
(10006, 'Red chilli', 20, 'ths s a fruit', 1),
(10007, 'Cabbage', 25, 'ths s a vege', 1),
(10008, 'Chocoalte', 50, 'sdddd', 5);

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
(1, 1, 'Grocery'),
(2, 1, 'Cold foods');

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
(3, 1, 'Fruit'),
(5, 2, 'Ice cream');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `onlineID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Numberofprod` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `Message` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`ID`, `UserID`, `ShopID`, `Message`) VALUES
(1, 23, 3, 'goofd'),
(2, 23, 3, 'bad'),
(3, 23, 3, '');

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
  `Gender` varchar(6) NOT NULL,
  `Dob` date NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserId`, `Name`, `PhoneNumber`, `Email_ID`, `Password`, `Gender`, `Dob`, `Location`, `Date`) VALUES
(21, 'Aleesha', '9142844353', 'aleesha123@gmail.com', 'aleesha123', 'Female', '2020-02-06', '3', '2020-03-26'),
(23, 'Amitha Suresh', '9847895795', 'amithasuresh@gmail.com', 'Ami@123', 'Female', '2019-11-07', '1', '0000-00-00'),
(25, 'amritha', '9847895799', 'amritha.kunnath@gmail.com', 'amritha@12', 'Female', '2020-02-05', '1', '0000-00-00'),
(26, 'Anil', '9400785640', 'anil@anil.com', 'mini@123', 'Male', '2020-03-17', '4', '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `LogID` int(11) NOT NULL,
  `ShopID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `TotalAmt` float NOT NULL,
  `TotalProducts` int(100) NOT NULL,
  `Behaviour` varchar(30) NOT NULL DEFAULT 'Neutral'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`LogID`, `ShopID`, `User_ID`, `Date`, `Time`, `TotalAmt`, `TotalProducts`, `Behaviour`) VALUES
(1, 3, 23, '2020-03-06', '08:30:51', 1837, 15, 'Neutral'),
(2, 3, 23, '2020-03-12', '08:30:51', 1837, 12, 'Happy'),
(3, 3, 4, '2020-03-05', '12:50:15', 300, 7, 'Sad'),
(4, 4, 23, '2020-03-17', '09:00:00', 1232, 15, 'Angry'),
(5, 4, 25, '2020-03-15', '06:11:00', 1652, 14, 'Happy'),
(6, 3, 26, '2020-04-03', '10:40:42', 40, 2, 'Neutral'),
(7, 3, 23, '2020-04-07', '03:29:08', 90, 3, 'Neutral'),
(8, 0, 23, '2020-04-08', '03:23:14', 248, 10, 'Neutral'),
(9, 0, 23, '2020-04-08', '04:09:04', 30, 1, 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `onlineID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `shopID` int(11) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Review` varchar(500) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`ID`, `ProductID`, `UserName`, `Review`, `Rating`) VALUES
(8, 10002, '26', 'asdsa', 4),
(9, 10008, '23', 'good', 1),
(10, 10002, '23', 'poda', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_tobuylist`
--

CREATE TABLE `user_tobuylist` (
  `listid` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tobuylist`
--

INSERT INTO `user_tobuylist` (`listid`, `ProductID`, `Price`, `Quantity`, `userID`) VALUES
(30, 10002, 30, 1, 26),
(31, 10003, 10, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `TransactionID` int(11) NOT NULL,
  `LogID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `amount` float NOT NULL,
  `No of products` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_transactions`
--

INSERT INTO `user_transactions` (`TransactionID`, `LogID`, `ProductID`, `amount`, `No of products`) VALUES
(1, 1, 10003, 50, 5),
(4, 2, 10002, 100, 1),
(5, 4, 10003, 200, 4),
(6, 5, 10003, 120, 4),
(7, 7, 10003, 30, 3),
(8, 4, 10002, 23, 1),
(9, 6, 10002, 30, 1),
(10, 6, 10003, 10, 1),
(11, 7, 10002, 90, 3),
(12, 8, 10003, 30, 3),
(13, 8, 10002, 90, 3),
(14, 8, 10000, 128, 4),
(15, 9, 10002, 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribution_info`
--
ALTER TABLE `distribution_info`
  ADD PRIMARY KEY (`Distribution_ID`);

--
-- Indexes for table `distribution_stock`
--
ALTER TABLE `distribution_stock`
  ADD PRIMARY KEY (`stk_id`);

--
-- Indexes for table `distributor_orders`
--
ALTER TABLE `distributor_orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `distributor_req`
--
ALTER TABLE `distributor_req`
  ADD PRIMARY KEY (`ProductReq_ID`);

--
-- Indexes for table `dis_shopreq`
--
ALTER TABLE `dis_shopreq`
  ADD PRIMARY KEY (`ReqID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_products`
--
ALTER TABLE `inventory_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invent_orders`
--
ALTER TABLE `invent_orders`
  ADD PRIMARY KEY (`ordr_id`);

--
-- Indexes for table `invent_stock`
--
ALTER TABLE `invent_stock`
  ADD PRIMARY KEY (`stk_id`);

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
-- Indexes for table `market_ads`
--
ALTER TABLE `market_ads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `market_companyinfo`
--
ALTER TABLE `market_companyinfo`
  ADD PRIMARY KEY (`CompanyID`);

--
-- Indexes for table `market_membership`
--
ALTER TABLE `market_membership`
  ADD PRIMARY KEY (`mem_ID`);

--
-- Indexes for table `market_shopads`
--
ALTER TABLE `market_shopads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `market_shopslots`
--
ALTER TABLE `market_shopslots`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `market_userads`
--
ALTER TABLE `market_userads`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`onlineID`);

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_tobuylist`
--
ALTER TABLE `user_tobuylist`
  ADD PRIMARY KEY (`listid`);

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
  MODIFY `Distribution_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `distribution_stock`
--
ALTER TABLE `distribution_stock`
  MODIFY `stk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `distributor_orders`
--
ALTER TABLE `distributor_orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `distributor_req`
--
ALTER TABLE `distributor_req`
  MODIFY `ProductReq_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dis_shopreq`
--
ALTER TABLE `dis_shopreq`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventory_products`
--
ALTER TABLE `inventory_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invent_orders`
--
ALTER TABLE `invent_orders`
  MODIFY `ordr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invent_stock`
--
ALTER TABLE `invent_stock`
  MODIFY `stk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `market_add`
--
ALTER TABLE `market_add`
  MODIFY `Add_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `market_addcollection`
--
ALTER TABLE `market_addcollection`
  MODIFY `AD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `market_ads`
--
ALTER TABLE `market_ads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `market_companyinfo`
--
ALTER TABLE `market_companyinfo`
  MODIFY `CompanyID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `market_membership`
--
ALTER TABLE `market_membership`
  MODIFY `mem_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `market_shopads`
--
ALTER TABLE `market_shopads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `market_shopslots`
--
ALTER TABLE `market_shopslots`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `market_userads`
--
ALTER TABLE `market_userads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `Categorie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_link`
--
ALTER TABLE `shop_link`
  MODIFY `Link_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;
--
-- AUTO_INCREMENT for table `shop_subcategories`
--
ALTER TABLE `shop_subcategories`
  MODIFY `SubCategorie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_supersub`
--
ALTER TABLE `shop_supersub`
  MODIFY `SuperSubCat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_online`
--
ALTER TABLE `user_online`
  MODIFY `onlineID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_tobuylist`
--
ALTER TABLE `user_tobuylist`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
