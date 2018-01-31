-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 08:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kitchentreasures`
--

-- --------------------------------------------------------

--
-- Table structure for table `botransaction`
--

CREATE TABLE IF NOT EXISTS `botransaction` (
`bot_id` int(5) NOT NULL,
  `bo_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `advance` int(10) NOT NULL,
  `bname` varchar(25) NOT NULL,
  `payment` varchar(23) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `cardnumber` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `botransaction`
--

INSERT INTO `botransaction` (`bot_id`, `bo_id`, `login_id`, `amount`, `advance`, `bname`, `payment`, `cardtype`, `cardnumber`, `date`, `status`) VALUES
(1, 5, 50, 0, 5000, 'Federal', 'Debit', '', 0, '0000-00-00', 1),
(2, 5, 50, 6000, 6000, 'Federal', 'Debit', 'mastercard', 2147483647, '2018-01-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bulk_order`
--

CREATE TABLE IF NOT EXISTS `bulk_order` (
`bo_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `event_package` varchar(40) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulk_order`
--

INSERT INTO `bulk_order` (`bo_id`, `login_id`, `name`, `date`, `email`, `phone`, `event_type`, `event_package`, `num`) VALUES
(5, 50, 'Rahul R', '2018-01-23', 'rahulmadathil15@gmail.com', 2147483647, '4', '5', 100),
(6, 50, '', '0000-00-00', '', 0, '0', '0', 50),
(7, 50, '', '0000-00-00', '', 0, '0', '0', 50),
(8, 50, '', '0000-00-00', '', 0, '0', '0', 50),
(9, 50, 'gyhjkl,', '2018-01-13', 'fvhgjk@g.com', 5965, '0', '0', 50),
(10, 50, 'Rahul', '2018-02-16', 'fvgf@ghg.b', 2147483647, '1', '1', 50);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
`event_id` int(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_id`, `event_name`, `status`) VALUES
(1, 'Marriage', 0),
(2, 'Dinner Party', 0),
(3, 'Farewell party', 1),
(4, 'Evening Party', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE IF NOT EXISTS `foodcategory` (
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE IF NOT EXISTS `fooditems` (
`f_item_id` int(5) NOT NULL,
  `login_id` int(11) NOT NULL,
  `food_name` varchar(25) NOT NULL,
  `food_rate` int(10) NOT NULL,
  `food_description` varchar(100) NOT NULL,
  `food_category` varchar(25) NOT NULL,
  `food_quantity` int(100) NOT NULL DEFAULT '1',
  `food_image` varchar(70) NOT NULL,
  `fdate` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`f_item_id`, `login_id`, `food_name`, `food_rate`, `food_description`, `food_category`, `food_quantity`, `food_image`, `fdate`, `status`) VALUES
(38, 48, 'chappathi', 25, 'With Egg Curry', 'Dinner', 87, 'photo/1516263232chappathi.png', '2018-01-18', 0),
(39, 48, 'dosa', 20, 'with sambar and chutney', 'Breakfast', 37, 'photo/1516263777res02.jpg', '2018-01-18', 0),
(40, 49, 'Idli', 20, 'with sambar and chutney', 'Breakfast', 89, 'photo/15172897461503036356i3.jpg', '2018-01-30', 0),
(42, 49, 'chappathi', 20, 'with beef fry', 'Dinner', 93, 'photo/15172979531503036924fish.jpg', '2018-01-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE IF NOT EXISTS `foodorder` (
`order_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `req_quantity` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `f_item_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`order_id`, `login_id`, `name`, `req_quantity`, `total`, `f_item_id`, `date`, `status`) VALUES
(41, 50, 'dosa', 2, 40, 39, '2018-01-18', 0),
(52, 50, 'dosa', 2, 40, 39, '2018-01-30', 0),
(53, 50, 'chappathi', 2, 40, 42, '2018-01-30', 0),
(54, 50, 'chappathi', 3, 60, 42, '2018-01-30', 0),
(55, 50, 'dosa', 2, 40, 39, '2018-01-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`login_id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `type_id`, `password`, `email`, `status`) VALUES
(47, 1, 'OazHhJruUqeRNoNiLM0kVXHTAbWHmot3GM6mc1rwGgs=', 'administrator@gmail.com', 0),
(48, 2, 'flWvhijBFAd34L4TCrKLsZPDRfPHSw0+u+fQ6wZujsA=', 'harsha@gmail.com', 0),
(49, 2, 'yMZKr9kv3IPhPZaZXcPizXm8uVquLNsV2BbWrAHhM5o=', 'anupama@gmail.com', 0),
(50, 3, 'tJqKL6ZcIBQu+4uemBw0ZwTdHYYfK4VvuzrUqgjI8Hw=', 'justin@gmail.com', 0),
(51, 3, 'yu9RSnTKleTr6KYzYmNiI6u2P7ysBg2XqPk/NhkJuaA=', 'rahulr@mca.ajce.in', 1),
(53, 3, 'EagUIhVS65S6ffuXJxf/UDoRwdcJBF2lTTeVMm+Jrmo=', 'revathy@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE IF NOT EXISTS `package_type` (
`p_type_id` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`p_type_id`, `event_id`, `package_name`, `amount`, `status`) VALUES
(1, 1, 'Chicken Biriyani with icecraem and salad', 120, 0),
(2, 1, 'Non veg meals with chicken fry ', 60, 0),
(3, 2, 'Fried Rice with chicken curry or veg', 100, 1),
(4, 4, 'Vegetable/Chicken/Meat puff', 10, 1),
(5, 4, 'cutlet/meat roll', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffregistration`
--

CREATE TABLE IF NOT EXISTS `staffregistration` (
`staff_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `staff_firstname` varchar(20) NOT NULL,
  `staff_secondname` varchar(20) NOT NULL,
  `staff_phone` int(12) NOT NULL,
  `staff_housename` varchar(25) NOT NULL,
  `staff_city` varchar(25) NOT NULL,
  `staff_district` varchar(25) NOT NULL,
  `staff_unit` int(5) NOT NULL,
  `staff_adhar_no` int(20) NOT NULL,
  `staff_account_no` int(20) NOT NULL,
  `staff_image` varchar(70) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffregistration`
--

INSERT INTO `staffregistration` (`staff_id`, `login_id`, `staff_firstname`, `staff_secondname`, `staff_phone`, `staff_housename`, `staff_city`, `staff_district`, `staff_unit`, `staff_adhar_no`, `staff_account_no`, `staff_image`, `status`) VALUES
(29, 48, 'harsha', 'manjada', 2147483647, 'haghdcshj', 'Aranmula', 'Pathanamthitta', 321, 2147483647, 2147483647, 'photo/1516250557staff1.png', 1),
(30, 49, 'anupama', 's', 2147483647, 'vgdfhevdjk', 'Kumbanad', 'Pathanamthitta', 321, 2147483647, 2147483647, 'photo/1516263912staff.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`t_id` int(5) NOT NULL,
  `bankname` varchar(25) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `login_id` int(5) NOT NULL,
  `total` int(10) NOT NULL,
  `tdate` date NOT NULL,
  `f_item_id` int(5) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `bankname`, `cardtype`, `cardnumber`, `login_id`, `total`, `tdate`, `f_item_id`, `type`) VALUES
(31, 'Federal', 'visa', 2147483647, 50, 40, '2018-01-18', 39, 'online'),
(32, '', '', 0, 50, 40, '0000-00-00', 39, 'online'),
(33, '', '', 0, 50, 40, '0000-00-00', 39, 'online'),
(34, '', '', 0, 0, 0, '0000-00-00', 0, 'online'),
(35, 'Federal', 'visa', 2147483647, 50, 40, '2018-01-30', 39, 'online'),
(36, 'Federal', 'visa', 2147483647, 50, 40, '2018-01-30', 39, 'online'),
(37, 'Federal', 'mastercard', 2147483647, 50, 40, '2018-01-30', 39, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
`type_id` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`type_id`, `type`, `status`) VALUES
(1, 'admin', 1),
(2, 'staff', 1),
(3, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
`u_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `u_fname` varchar(25) NOT NULL,
  `u_sname` varchar(25) NOT NULL,
  `u_gender` varchar(15) NOT NULL,
  `u_phone` int(13) NOT NULL,
  `u_housename` varchar(25) NOT NULL,
  `u_city` varchar(25) NOT NULL,
  `u_district` varchar(25) NOT NULL,
  `adhar` int(20) NOT NULL,
  `u_image` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `login_id`, `u_fname`, `u_sname`, `u_gender`, `u_phone`, `u_housename`, `u_city`, `u_district`, `adhar`, `u_image`, `status`) VALUES
(15, 37, 'Rahul', 'R', 'male', 2147483647, 'Madathil', 'Aranmula', 'Pathanamthitta', 2147483647, 'photo/1508128419user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `botransaction`
--
ALTER TABLE `botransaction`
 ADD PRIMARY KEY (`bot_id`);

--
-- Indexes for table `bulk_order`
--
ALTER TABLE `bulk_order`
 ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
 ADD PRIMARY KEY (`f_item_id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`login_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
 ADD PRIMARY KEY (`p_type_id`);

--
-- Indexes for table `staffregistration`
--
ALTER TABLE `staffregistration`
 ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
 ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
 ADD PRIMARY KEY (`u_id`), ADD UNIQUE KEY `adhar` (`adhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `botransaction`
--
ALTER TABLE `botransaction`
MODIFY `bot_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bulk_order`
--
ALTER TABLE `bulk_order`
MODIFY `bo_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
MODIFY `f_item_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
MODIFY `p_type_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staffregistration`
--
ALTER TABLE `staffregistration`
MODIFY `staff_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
