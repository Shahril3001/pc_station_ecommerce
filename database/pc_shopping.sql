-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 10:10 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pc_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_login`) VALUES
('admin', 'admin', '2016-03-23 19:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contactID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customerID` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone` int(11) NOT NULL,
  `member` varchar(20) NOT NULL,
  `serial` varchar(10) NOT NULL,
  `expire_date` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE IF NOT EXISTS `item_order` (
`orderID` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `itemID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pc_item`
--

CREATE TABLE IF NOT EXISTS `pc_item` (
`itemID` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `category` varchar(35) NOT NULL,
  `descri` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `status` varchar(3) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total_sold` varchar(100) NOT NULL,
  `date_return` int(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pc_item`
--

INSERT INTO `pc_item` (`itemID`, `name`, `image`, `category`, `descri`, `price`, `status`, `quantity`, `total_sold`, `date_return`, `date`) VALUES
(1, 'NEW DELL INSPIRON 15 5555', 'item/s-l1600.jpg', 'Computers & Tablets', '<li>Condition:	New</li></br>\r\n\r\n<li>Processor Type: AMD A10 APU</li></br>\r\n\r\n<li>Processor Speed: 1.8 GHz</li></br>\r\n\r\n<li>Memory: 8GB</li></br>\r\n\r\n<li>Hard Drive Capacity: 1TB</li></br>\r\n\r\n<li>Processor Configuration: Quad Core</li></br>\r\n\r\n<li>Co: Silver</li></br>\r\n\r\n<li>UPC: 884116205227</li></br>\r\n\r\n<li>Type: Laptop/Notebook</li></br>\r\n\r\n<li>Brand: Dell</li></br>\r\n\r\n<li>Product Line: Inspiron</li></br>\r\n\r\n<li>Model: 5555</li></br>\r\n\r\n<li>MPN: Does Not Apply</li></br>\r\n\r\n<li>Operating System: Windows 10</li></br>\r\n\r\n<li>Screen Size: 15.6"</li></br>\r\n\r\n', '329.99', 'Yes', 14, '1', 15, '2016-03-23 06:42:38'),
(2, 'Dell XPS 13 13.3', 'item/s-l1600 (1).jpg', 'Computers & Tablets', '<li>Condition: New</li></br>\r\n\r\n<li>Processor Type: Intel Core i7 5th Gen</li></br>\r\n\r\n<li>Processor Speed: 3.00GHz</li></br>\r\n\r\n<li>Graphics Processing Type: Integrated/On-Board Graphics</li></br>\r\n\r\n<li>UPC: 884116165101</li></br>\r\n\r\n<li>Brand: Dell</li></br>\r\n\r\n<li>MPN: XPS9343-7273SLV</li></br>\r\n\r\n<li>Operating System: Windows 8</li></br>\r\n\r\n<li>Screen Size: 13.3"</li></br>\r\n', '1000.00', 'Yes', 10, '0', 15, '2016-03-23 06:44:03'),
(3, 'New Dell XPS 13 9343 i7-5500U 3.0GHz QHD+3200P', 'item/s-l1600 (2).jpg', 'Computers & Tablets', '<li>Condition: New </li></br>\r\n\r\n<li>Graphics Processing Type: Integrated/On-Board Graphics </li></br>\r\n\r\n<li>Memory: 8GB </li></br>\r\n\r\n<li>Hard Drive Capacity: 256GB </li></br>\r\n\r\n<li>Battery Life: Up to 11 Hours </li></br>\r\n\r\n<li>Keyboard: Backlit Keyboard </li></br>\r\n\r\n<li>Port: Wifi, BT, Webcam, USB3.0, Mini DisplayPort </li></br>\r\n\r\n<li>Feature: Waves MaxxAudio, Card Reader </li></br>\r\n\r\n<li>UPC: 884116165101 </li></br>\r\n\r\n<li>Type: Ultrabook </li></br>\r\n\r\n<li>Brand: Dell </li></br>\r\n\r\n<li>Model: Dell XPS 13 </li></br>\r\n\r\n<li>MPN: XPS9343-7273SLV </li></br>\r\n\r\n<li>Operating System: Windows 8.1 </li></br>\r\n\r\n<li>Screen Size: 13.3" </li></br>\r\n\r\n<li>Processor Type: Intel Core i7 5th Gen. </li></br>\r\n\r\n<li>Processor Speed: 3.0GHz </li></br>\r\n', '1131.96', 'Yes', 20, '0', 15, '2016-03-23 06:49:25'),
(4, 'Nikon F 35mm SLR Film Camera Body from JAPAN', 'item/s-l300.jpg', 'Cameras Accessories', '<li>Type: SLR</li></br>\r\n\r\n<li>Brand: Nikon</li></br>\r\n\r\n<li>Model: F eye level</li></br>\r\n\r\n<li>Film Format: 35mm</li></br>\r\n\r\n<li>Focus Type: Manual</li></br>\r\n\r\n<li>Country/Region of Manufacture: Japan</li></br>\r\n', '239.99', 'Yes', 10, '0', 15, '2016-03-23 06:51:00'),
(5, 'APPLE WATCH SPORT 42MM SILVER ALUMINIUM CASE', 'item/s-l1600 (3).jpg', 'Mobile Phones & Accessories', '<li>Condition: New</li></br>\r\n\r\n<li>Band Material: Sport Band</li></br>\r\n\r\n<li>Manufacturer Part Number: MLC42X/A</li></br>\r\n\r\n<li>UPC: Does not apply</li></br>\r\n\r\n<li>Brand: Apple</li></br>\r\n\r\n<li>MPN: MLC42X/A</li></br>\r\n\r\n<li>Case Size: 42mm</li></br>\r\n', '499.00', 'Yes', 20, '0', 15, '2016-03-23 06:54:07'),
(6, 'NEW APPLE WATCH 42MM GOLD ALUMINUM CASE MIDNIGHT BLUE', 'item/s-l1600 (4).jpg', 'Mobile Phones & Accessories', '<li>Condition: New</li></br>\r\n\r\n<li>Case Size: 42mm</li></br>\r\n\r\n<li>Case Material: Aluminum</li></br>\r\n\r\n<li>Band Color: Blue</li></br>\r\n\r\n<li>Country/Region of Manufacture: China</li></br>\r\n\r\n<li>Brand: Apple</li></br>\r\n\r\n<li>Model: MLC72LL/A</li></br>\r\n\r\n<li>MPN: MLC72LL/A</li></br>\r\n\r\n<li>Operating System: Apple Watch OS</li></br>\r\n\r\n<li>UPC: 888462669337</li></br>\r\n', '319.99', 'Yes', 25, '0', 15, '2016-03-23 06:56:13'),
(7, 'Samsung GALAXY S6 32GB 4G LTE', 'item/s-l1600 (5).jpg', 'Mobile Phones & Accessories', '<li>Condition: New</li></br>\r\n\r\n<li>Camera Resolution: 16.0MP</li></br>\r\n\r\n<li>Cellular Band: 4G</li></br>\r\n\r\n<li>Screen Size: 5.1"</li></br>\r\n\r\n<li>Lock Status: Factory Unlocked</li></br>\r\n\r\n<li>Processor: Octa Core</li></br>\r\n\r\n<li>RAM: 3GB</li></br>\r\n\r\n<li>Country/Region of Manufacture: Vietnam</li></br>\r\n\r\n<li>Unlock Status: Factory Unlocked</li></br>\r\n\r\n<li>EAN: 8806086666961</li></br>\r\n\r\n<li>Brand: Samsung</li></br>\r\n\r\n<li>Model: Galaxy S6</li></br>\r\n\r\n<li>Network: Unlocked</li></br>\r\n\r\n<li>Contract: Without Contract</li></br>\r\n\r\n<li>Operating System: Android</li></br>\r\n\r\n<li>Storage Capacity: 32GB</li></br>\r\n\r\n<li>Color: Black</li></br>\r\n\r\n<li>Style: Bar</li></br>\r\n\r\n<li>Features: 3G Data Capable, 4G Data Capable, Bluetooth Enabled, Fingerprint Sensor, Global Ready, GPS, Internet Browser, Music Player, Near Field Communication, Speakerphone, Touchscreen, Wi-Fi Capable, Wireless Charging</li></br>\r\n', '578.00', 'Yes', 20, '0', 15, '2016-03-23 06:58:10'),
(8, 'White Sports Phone Bluetooth Wireless Headphone Headset', 'item/s-l300 (1).jpg', 'TV, Audio & Surveillance', '<li>Condition: New</li></br>\r\n\r\n<li>Wireless Technology: Bluetooth</li></br>\r\n\r\n<li>Country/Region of Manufacture: China</li></br>\r\n\r\n<li>MPN: Does not apply\r\n\r\n<li>UPC: Does not apply</li></br>\r\n\r\n<li>Brand: Unbranded/Generic</li></br>\r\n\r\n<li>Earpiece: Double</li></br>\r\n\r\n<li>Color: White</li></br>\r\n\r\n<li>Compatible Brand: For LG HBS800</li></br>\r\n\r\n<li>EAN: Does not apply</li></br>\r\n', '13.16', 'Yes', 40, '0', 15, '2016-03-23 07:02:11'),
(9, 'Wireless Bluetooth 4.0 Music Receiver 3.5mm Adapter Handsfree', 'item/s-l1600 (7).jpg', 'Musical Instruments & Gears', '<li>Condition: New</li></br>\r\n\r\n<li>UPC: Does not apply</li></br>\r\n\r\n<li>Brand: Unbranded</li></br>\r\n\r\n<li>MPN: Does not apply</li></br>\r\n\r\n<li>EAN: Does not apply</li></br>\r\n\r\n<li>Compatible Brand: Universal, For Apple, For BlackBerry, For HTC, For LG</li></br>\r\n\r\n<li>Features: Bluetooth Wireless</li></br>\r\n\r\n<li>Country/Region of Manufacture: China</li></br>\r\n\r\n<li>Bluetooth version: 4.0</li></br>\r\n', '17.89', 'Yes', 25, '0', 15, '2016-03-23 07:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `p_cash`
--

CREATE TABLE IF NOT EXISTS `p_cash` (
`paymentID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `itemID` int(100) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_credit`
--

CREATE TABLE IF NOT EXISTS `p_credit` (
`paymentID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pinno` varchar(25) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `expire_date` date NOT NULL,
  `itemID` int(100) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_debit`
--

CREATE TABLE IF NOT EXISTS `p_debit` (
`paymentID` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pinno` varchar(25) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `expire_date` date NOT NULL,
  `itemID` int(100) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_shipping`
--

CREATE TABLE IF NOT EXISTS `p_shipping` (
`shippingID` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
 ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `pc_item`
--
ALTER TABLE `pc_item`
 ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `p_cash`
--
ALTER TABLE `p_cash`
 ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `p_credit`
--
ALTER TABLE `p_credit`
 ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `p_debit`
--
ALTER TABLE `p_debit`
 ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `p_shipping`
--
ALTER TABLE `p_shipping`
 ADD PRIMARY KEY (`shippingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contactID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
MODIFY `orderID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_item`
--
ALTER TABLE `pc_item`
MODIFY `itemID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `p_cash`
--
ALTER TABLE `p_cash`
MODIFY `paymentID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_credit`
--
ALTER TABLE `p_credit`
MODIFY `paymentID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_debit`
--
ALTER TABLE `p_debit`
MODIFY `paymentID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_shipping`
--
ALTER TABLE `p_shipping`
MODIFY `shippingID` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
