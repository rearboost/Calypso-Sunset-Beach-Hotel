-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 23, 2021 at 10:26 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbillinfor`
--

CREATE TABLE `addbillinfor`
(
  `id` int
(11) NOT NULL,
  `foodid` int
(11) NOT NULL,
  `foodname` varchar
(500) NOT NULL,
  `foodsize` varchar
(500) NOT NULL,
  `foodquantity` int
(11) NOT NULL,
  `description` varchar
(1000) NOT NULL,
  `tootalprice` decimal
(10,2) NOT NULL,
  `roomnoid` int
(11) NOT NULL,
  `cbnic` varchar
(500) NOT NULL,
  `cbname` varchar
(500) NOT NULL,
  `createdate` varchar
(500) NOT NULL,
  `status` varchar
(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addbillinfor`
--

INSERT INTO `addbillinfor` (`
id`,
`foodid`,
`foodname`,
`foodsize
`, `foodquantity`, `description`, `tootalprice`, `roomnoid`, `cbnic`, `cbname`, `createdate`, `status`) VALUES
(1, 1, 'Rice', 'medium', 12, '', '1068.00', 1, '234534567v', 'test', '2018-05-13 (13:24:18)', NULL),
(2, 1, 'Rice', 'medium', 6, '', '534.00', 2, '435353678', 'buddhika', '2018-05-28 (05:46:38)', '1'),
(3, 1, 'Rice', 'small', 12, '', '672.00', 2, '435353678', 'buddhika', '2018-05-30 (18:14:03)', NULL),
(4, 1, 'Rice', 'small', 2, '', '112.00', 2, '435353678', 'buddhika', '2020-02-04 (14:45:47)', NULL),
(5, 1, 'Rice', 'small', 1, '', '56.00', 2, '435353678', 'buddhika', '2020-02-08 (15:59:17)', '0'),
(6, 1, 'Rice', 'small', 2, '', '112.00', 3, '98776576575', 'Hasitha', '2020-02-08 (16:04:37)', '0'),
(7, 1, 'Rice', 'small', 1, '', '56.00', 4, '7685854', 'buddika', '2020-02-09 (12:24:53)', '1'),
(8, 4, 'HJH', 'large', 3, '', '198.00', 4, '7685854', 'buddika', '2020-02-09 (20:14:41)', '0'),
(9, 4, 'WE', 'small', 2, '', '132.00', 4, '7685854', 'buddika', '2020-02-09 (20:14:41)', NULL),
(10, 4, 'HJH', 'large', 12, '', '792.00', 4, '7685854', 'buddika', '2020-02-09 (20:16:47)', NULL),
(11, 4, 'WE', 'small', 2, '', '132.00', 4, '7685854', 'buddika', '2020-02-09 (20:16:47)', NULL),
(12, 4, 'HJH', 'large', 2, '', '132.00', 4, '7685854', 'buddika', '2020-02-09 (20:19:31)', NULL),
(13, 4, 'WE', 'small', 3, '', '198.00', 4, '7685854', 'buddika', '2020-02-09 (20:19:31)', NULL),
(14, 4, 'HJH', 'large', 11, '', '726.00', 4, '7685854', 'buddika', '2020-02-09 (20:21:40)', NULL),
(15, 4, 'WE', 'small', 1, '', '66.00', 4, '7685854', 'buddika', '2020-02-09 (20:21:40)', NULL),
(16, 4, 'HJH', 'medium', 7, '', '238.00', 4, '7685854', 'buddika', '2020-02-10 (03:57:03)', NULL),
(17, 4, 'WE', 'small', 7, '', '238.00', 4, '7685854', 'buddika', '2020-02-10 (03:57:03)', '0'),
(18, 4, 'HJH', 'large', 12, '', '792.00', 2, '435353678', 'buddhika', '2020-02-10 (10:53:41)', NULL),
(19, 1, 'Rice', 'medium', 12, '', '1068.00', 2, '435353678', 'buddhika', '2020-02-10 (10:53:41)', NULL),
(20, 1, 'Rice', 'medium', 2, 'GHG', '178.00', 4, '7685854', 'buddika', '2020-02-10 (12:35:03)', '0');

-- --------------------------------------------------------

--
-- Table structure for table `assign_items`
--

CREATE TABLE `assign_items`
(
  `id` int
(11) NOT NULL,
  `room_id` int
(11) NOT NULL,
  `item_id` int
(11) NOT NULL,
  `quantity` decimal
(10,2) NOT NULL,
  `description` varchar
(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign_items`
--

INSERT INTO `assign_items` (`
id`,
`room_id
`, `item_id`, `quantity`, `description`) VALUES
(1, 3, 2, '1.00', 'Not '),
(2, 3, 2, '0.00', 'NOU');

-- --------------------------------------------------------

--
-- Table structure for table `bad_items`
--

CREATE TABLE `bad_items`
(
  `id` int
(11) NOT NULL,
  `item_id` int
(11) NOT NULL,
  `quantity` decimal
(10,2) NOT NULL,
  `reson` varchar
(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bad_items`
--

INSERT INTO `bad_items` (`
id`,
`item_id
`, `quantity`, `reson`) VALUES
(1, 2, '1.00', 'Damage'),
(2, 2, '1.00', 'A'),
(3, 2, '1.00', 'AAA'),
(4, 2, '1.00', 'A'),
(5, 2, '1.00', 'ADA'),
(6, 2, '1.00', 'RE');

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfor`
--

CREATE TABLE `bookinginfor`
(
  `id` int
(11) NOT NULL,
  `bookingno` varchar
(500) NOT NULL,
  `cname` varchar
(500) NOT NULL,
  `cnic` varchar
(500) NOT NULL,
  `bookby` varchar
(500) NOT NULL,
  `arrivaldate` varchar
(100) NOT NULL,
  `departuredate` varchar
(100) NOT NULL,
  `numofpeo` varchar
(100) NOT NULL,
  `connum` varchar
(100) NOT NULL,
  `address` varchar
(500) NOT NULL,
  `alocatedroom` varchar
(100) NOT NULL,
  `roomprice` decimal
(10,2) NOT NULL,
  `discount` decimal
(10,2) NOT NULL,
  `checkDiscount` varchar
(20) NOT NULL,
  `billstatus` varchar
(200) NOT NULL,
  `createdate` varchar
(100) NOT NULL,
  `billstaledate` varchar
(500) DEFAULT NULL,
  `ftootalprice` decimal
(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookinginfor`
--

INSERT INTO `bookinginfor` (`
id`,
`bookingno`,
`cname`,
`cnic`,
`bookby`,
`arrivaldate`,
`departuredate`,
`numofpeo`,
`connum`,
`address
`, `alocatedroom`, `roomprice`, `discount`, `checkDiscount`, `billstatus`, `createdate`, `billstaledate`, `ftootalprice`) VALUES
(1, '1', 'test', '234534567v', 'asd', '2018-05-05', '2018-05-08', '2', '123', 'asd', '1', '10000.00', '7.00', '', '1', '2018-05-10 (12:38:55)', '2018-05-13', '81063.00'),
(2, '1234', 'buddhika', '435353678', 'test', '2018-05-23', '2018-05-24', '2', '4848888', 'test', '2', '1000.00', '10.00', '', '1', '2018-05-23 (16:25:00)', '2020-02-01', '620196.00'),
(3, '0001', 'Test', '3432524234', 'Me ', '2020-02-04', '2020-02-05', '6', '080987786587', 'No1 , Galkaduwa\\nNeboda', '2', '1000.00', '6.00', '', '1', '2020-02-04 (14:44:58)', '2020-02-22', '17994.00'),
(4, '123', 'Hasitha', '98776576575', 'Me', '2020-02-08', '2020-02-12', '12', '435435353', 'No1 , Galkaduwa\\nNeboda', '3', '34.00', '3.00', '', '1', '2020-02-08 (16:04:13)', '2020-02-08', '0.00'),
(5, '7', 'buddika', '7685854', 'booking.com', '2020-02-09', '2020-02-10', '2', '7788003303', 'No1 , Galkaduwa\\nNeboda', '4', '55.00', '10.00', '', '1', '2020-02-09 (12:24:26)', '2020-02-10', '0.00'),
(6, '12', 'A', '3242', 'Me', '2020-02-10', '2020-02-12', '12', '211212', 'No1 , Galkaduwa\\nNeboda', '3', '34.00', '1212.00', 'on', '1', '2020-02-10 (11:28:55)', '2021-09-16', '19089.00'),
(7, '323', 'SDS', '453453', 'ME', '2020-02-10', '2020-02-12', '23', '543656', 'No1 , Galkaduwa\\nNeboda', '5', '12.00', '4.00', 'on', '1', '2020-02-10 (11:30:05)', '2020-03-01', '0.00'),
(8, '2342', 'WE', '34234', 'MMS', '2020-02-10', '2020-02-22', '2', '2342342', 'No1 , Galkaduwa\\nNeboda', '4', '55.00', '2.00', 'true', '1', '2020-02-10 (11:33:38)', '2021-09-16', '32118.00'),
(9, '332', 'FG', '45353', 'MK', '2020-02-10', '2020-02-20', '2', '12', 'No1 , Galkaduwa\\nNeboda', '2', '1000.00', '67.00', 'true', '1', '2020-02-10 (11:34:35)', '2021-09-16', '583933.00'),
(10, '342', '3424', '23424', '32424', '2020-02-10', '2020-02-14', '234', '213', 'No1 , Galkaduwa\\nNeboda', '5', '12.00', '6.00', 'false', '0', '2020-02-10 (11:35:08)', NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(250) NOT NULL,
  `isFood` varchar
(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`
id`,
`name
`, `isFood`) VALUES
(1, 'A', 'on'),
(2, 'B', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`
id`,
`name
`) VALUES
(1, 'A'),
(2, 'B'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee`
(
  `id` int
(11) NOT NULL,
  `emp_id` varchar
(50) NOT NULL,
  `name` varchar
(150) NOT NULL,
  `des_id` int
(11) NOT NULL,
  `address` varchar
(250) NOT NULL,
  `phoneNo` varchar
(50) NOT NULL,
  `join_date` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`
id`,
`emp_id
`, `name`, `des_id`, `address`, `phoneNo`, `join_date`) VALUES
(1, 'EMP-00001', 'Hasitha ', 2, 'No 01,\\r\\nGalkaudwa\\r\\nNeboda', '0704867765', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `foodinfor`
--

CREATE TABLE `foodinfor`
(
  `id` int
(11) NOT NULL,
  `foodcode` varchar
(500) NOT NULL,
  `foodname` varchar
(500) NOT NULL,
  `description` varchar
(500) NOT NULL,
  `foodview` varchar
(500) NOT NULL,
  `category` varchar
(500) NOT NULL,
  `smallsize` decimal
(10,2) NOT NULL,
  `mediumsize` decimal
(10,2) NOT NULL,
  `largesize` decimal
(10,2) NOT NULL,
  `createdate` varchar
(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodinfor`
--

INSERT INTO `foodinfor` (`
id`,
`foodcode
`, `foodname`, `description`, `foodview`, `category`, `smallsize`, `mediumsize`, `largesize`, `createdate`) VALUES
(1, 'CRT99', 'Rice', 'HHHH', 'images/185.jpg', 'breakfast', '56.00', '89.00', '0.00', '2018-05-13 (13:23:54)'),
(2, '312', 'qweq', 'qeq', 'images/349.jpeg', 'lunch', '0.00', '0.00', '0.00', '2018-06-05 (15:02:13)'),
(3, '232', 'WE', '3244\\n42342\\n4324', 'images/170.jpg', 'beverage', '12.00', '0.00', '0.00', '2020-02-09 (12:16:02)'),
(4, '123', 'HJH', 'HJH\\nsh', 'images/118.jpg', 'beverage', '12.00', '34.00', '66.00', '2020-02-09 (16:25:47)');

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory`
(
  `id` int
(11) NOT NULL,
  `item_id` varchar
(250) NOT NULL,
  `cat_id` int
(11) NOT NULL,
  `name` varchar
(250) NOT NULL,
  `measurement` varchar
(100) DEFAULT NULL,
  `quantity` decimal
(10,2) NOT NULL,
  `assign` decimal
(10,2) NOT NULL DEFAULT '0.00',
  `description` varchar
(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`
id`,
`item_id
`, `cat_id`, `name`, `measurement`, `quantity`, `assign`, `description`) VALUES
(1, 'INV-00001', 2, 'TV', '', '6.00', '0.00', 'Good TB '),
(2, 'INV-00002', 2, 'Bed', '', '14.00', '3.00', 'Good Bed'),
(3, 'INV-00003', 2, 'UI', '', '12.00', '0.00', 'New \\r\\nDoc'),
(4, 'INV-00004', 1, 'Food New', 'ml ', '2.00', '0.00', 'NOT GOD'),
(5, 'INV-00005', 1, 'Food New 01', 'l', '0.00', '0.00', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment`
(
  `p_id` int
(11) NOT NULL,
  `emp_id` int
(11) NOT NULL,
  `amount` decimal
(10,2) NOT NULL,
  `description` varchar
(500) NOT NULL,
  `date` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`
p_id`,
`emp_id
`, `amount`, `description`, `date`) VALUES
(1, 1, '2000.00', 'HH:\\r\\nUU', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase`
(
  `id` int
(11) NOT NULL,
  `cat_id` int
(11) NOT NULL,
  `item_id` int
(11) NOT NULL,
  `quantity` decimal
(10,2) NOT NULL,
  `price` decimal
(10,2) NOT NULL,
  `note` varchar
(1000) NOT NULL,
  `cdate` varchar
(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`
id`,
`cat_id
`, `item_id`, `quantity`, `price`, `note`, `cdate`) VALUES
(1, 2, 2, '5.00', '5000.00', 'New Bed ', '2021-09-20'),
(2, 2, 1, '2.00', '6500.00', 'New', '2021-09-20'),
(3, 2, 2, '4.00', '5000.00', 'N\\r\\nU', '2021-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `roominfor`
--

CREATE TABLE `roominfor`
(
  `id` int
(11) NOT NULL,
  `roomno` varchar
(500) NOT NULL,
  `roomtype` varchar
(1000) NOT NULL,
  `numbed` int
(11) NOT NULL,
  `roomprice` decimal
(10,2) NOT NULL,
  `roomstatus` varchar
(200) NOT NULL,
  `createdate` varchar
(500) NOT NULL,
  `lastupdate` varchar
(500) DEFAULT NULL,
  `bookingtime` varchar
(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roominfor`
--

INSERT INTO `roominfor` (`
id`,
`roomno
`, `roomtype`, `numbed`, `roomprice`, `roomstatus`, `createdate`, `lastupdate`, `bookingtime`) VALUES
(2, '101', 'test', 2, '1000.00', '0', '2018-05-23 (16:15:58)', '2020-02-08 (10:54:34)', '2020-02-10 (11:34:35)'),
(3, '113', '345', 234, '34.00', '0', '2020-02-08 (16:00:38)', '', '2020-02-10 (11:28:55)'),
(4, '107', 'Dulex', 2, '55.00', '0', '2020-02-09 (12:23:21)', '2021-09-20 (18:01:57)', '2020-02-10 (11:33:38)'),
(5, '123', 'D1', 2, '12.00', '0', '2020-02-10 (08:57:23)', NULL, '2020-02-10 (11:35:08)');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup`
(
  `id` int
(11) NOT NULL,
  `username` varchar
(500) NOT NULL,
  `password` varchar
(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`
id`,
`username
`, `password`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668'),
(2, 'user', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `tempbill`
--

CREATE TABLE `tempbill`
(
  `id` int
(11) NOT NULL,
  `bnic` varchar
(500) NOT NULL,
  `bname` varchar
(500) NOT NULL,
  `bdec` varchar
(500) NOT NULL,
  `bprice` decimal
(10,2) NOT NULL,
  `bcreatedate` varchar
(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempbill`
--

INSERT INTO `tempbill` (`
id`,
`bnic
`, `bname`, `bdec`, `bprice`, `bcreatedate`) VALUES
(1, '6', 'TRR', '23', '445.00', '2020-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbillinfor`
--
ALTER TABLE `addbillinfor`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `assign_items`
--
ALTER TABLE `assign_items`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `bad_items`
--
ALTER TABLE `bad_items`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `bookinginfor`
--
ALTER TABLE `bookinginfor`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `foodinfor`
--
ALTER TABLE `foodinfor`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
ADD PRIMARY KEY
(`p_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `roominfor`
--
ALTER TABLE `roominfor`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `tempbill`
--
ALTER TABLE `tempbill`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbillinfor`
--
ALTER TABLE `addbillinfor`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `assign_items`
--
ALTER TABLE `assign_items`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bad_items`
--
ALTER TABLE `bad_items`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookinginfor`
--
ALTER TABLE `bookinginfor`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foodinfor`
--
ALTER TABLE `foodinfor`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roominfor`
--
ALTER TABLE `roominfor`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempbill`
--
ALTER TABLE `tempbill`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
