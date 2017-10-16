-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 07:16 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`f_item_id`, `login_id`, `food_name`, `food_rate`, `food_description`, `food_category`, `food_quantity`, `food_image`, `fdate`, `status`) VALUES
(22, 35, 'dosa', 30, 'delicious', 'Breakfast', 84, 'photo/1507747237i5.jpg', '2017-10-12', 0);

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
  `f_item_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`order_id`, `login_id`, `name`, `req_quantity`, `total`, `f_item_id`) VALUES
(12, 35, 'dosa', 2, 60, 22);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`login_id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `type_id`, `password`, `email`, `status`) VALUES
(22, 2, 'rahulji', 'rahulmadathil15@gmail.com', 1),
(23, 2, 'anu123', 'anu@gmail.com', 1),
(24, 3, '3546734', 'rk@gmail.com', 1),
(25, 1, 'admin', 'admin@gmail.com', 1),
(26, 2, 'asdfg', 'subin@gmail.com', 1),
(35, 3, 'rahulji', 'rahul@mca.ajce.in', 0),
(36, 2, 'niru', 'nirmal@gmail.com', 0),
(46, 3, '', '', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffregistration`
--

INSERT INTO `staffregistration` (`staff_id`, `login_id`, `staff_firstname`, `staff_secondname`, `staff_phone`, `staff_housename`, `staff_city`, `staff_district`, `staff_unit`, `staff_adhar_no`, `staff_account_no`, `staff_image`, `status`) VALUES
(19, 22, 'rahul', 'nair', 2147483647, 'madathil', 'aranmula', 'pathanamthitta', 400, 2147483647, 234678123, 'photo/1503047615user.png', 0),
(20, 23, 'anu', 'rr', 2147483647, 'tghjkd', 'kozhencherry', 'pathanamthitta', 123, 44567822, 12325467, 'photo/1503048612staff.jpg', 1),
(21, 25, 'rahul', 'r', 2147483647, 'madathil malayil', 'kidangannur', 'pathanamthitta', 123, 3456822, 123345347, 'photo/1503807042log.jpg', 1),
(22, 26, 'subin', 'john', 9961525, 'nellissery', 'sssss', 'pathanamthitta', 123, 232532543, 20, 'photo/1504019581addfood.jpg', 1),
(23, 35, 'rahul', 'aaa', 2147483647, 'ss', 'sss', 'ss', 123, 122, 10, 'photo/1506418686addfood.jpg', 1),
(24, 36, 'nirmal', 'nair', 2147483647, 'madnej', 'd cn', ' he fj', 123, 2147483647, 11, 'photo/1506493440baby.jpg', 0),
(25, 36, 'nirmal', 'nair', 2147483647, 'madnej', 'd cn', ' he fj', 123, 2147483647, 11, 'photo/1506493609baby.jpg', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `bankname`, `cardtype`, `cardnumber`, `login_id`, `total`, `tdate`, `f_item_id`, `type`) VALUES
(17, 'Federal', 'visa', 12345, 35, 60, '2017-10-13', 22, 'online'),
(18, 'null', 'null', 0, 35, 60, '2017-10-13', 22, 'offline');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `login_id`, `u_fname`, `u_sname`, `u_gender`, `u_phone`, `u_housename`, `u_city`, `u_district`, `adhar`, `u_image`, `status`) VALUES
(10, 0, 'rahul', 'r', 'male', 2147483647, 'madathil', 'aranmula', 'pathanamthitta', 12345678, 'photo/1506100727addetails', 1),
(12, 22, 'rahul', 'r', 'male', 354634, 'madathil', 'aranmula', 'pathanamthitta', 4567, 'photo/1506100854addetails', 1),
(13, 37, 'qw', '', '', 0, '', '', '', 0, 'photo/1507176159', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
MODIFY `f_item_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `staffregistration`
--
ALTER TABLE `staffregistration`
MODIFY `staff_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
