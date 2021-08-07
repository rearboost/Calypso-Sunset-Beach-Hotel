-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 08, 2020 at 10:24 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbillinfor`
--

CREATE TABLE `addbillinfor` (
  `id` int(11) NOT NULL,
  `foodid` int(11) NOT NULL,
  `foodname` varchar(500) NOT NULL,
  `foodsize` varchar(500) NOT NULL,
  `foodquantity` int(11) NOT NULL,
  `tootalprice` decimal(10,2) NOT NULL,
  `roomnoid` int(11) NOT NULL,
  `cbnic` varchar(500) NOT NULL,
  `cbname` varchar(500) NOT NULL,
  `createdate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addbillinfor`
--

INSERT INTO `addbillinfor` (`id`, `foodid`, `foodname`, `foodsize`, `foodquantity`, `tootalprice`, `roomnoid`, `cbnic`, `cbname`, `createdate`) VALUES
(1, 1, 'Rice', 'medium', 12, '1068.00', 1, '234534567v', 'test', '2018-05-13 (13:24:18)'),
(2, 1, 'Rice', 'medium', 6, '534.00', 2, '435353678', 'buddhika', '2018-05-28 (05:46:38)'),
(3, 1, 'Rice', 'small', 12, '672.00', 2, '435353678', 'buddhika', '2018-05-30 (18:14:03)'),
(4, 1, 'Rice', 'small', 2, '112.00', 2, '435353678', 'buddhika', '2020-02-04 (14:45:47)');

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfor`
--

CREATE TABLE `bookinginfor` (
  `id` int(11) NOT NULL,
  `bookingno` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `cnic` varchar(500) NOT NULL,
  `bookby` varchar(500) NOT NULL,
  `arrivaldate` varchar(100) NOT NULL,
  `departuredate` varchar(100) NOT NULL,
  `numofpeo` varchar(100) NOT NULL,
  `connum` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `alocatedroom` varchar(100) NOT NULL,
  `roomprice` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `billstatus` varchar(200) NOT NULL,
  `createdate` varchar(100) NOT NULL,
  `billstaledate` varchar(500) NOT NULL,
  `ftootalprice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookinginfor`
--

INSERT INTO `bookinginfor` (`id`, `bookingno`, `cname`, `cnic`, `bookby`, `arrivaldate`, `departuredate`, `numofpeo`, `connum`, `address`, `alocatedroom`, `roomprice`, `discount`, `billstatus`, `createdate`, `billstaledate`, `ftootalprice`) VALUES
(1, '1', 'test', '234534567v', 'asd', '2018-05-05', '2018-05-08', '2', '123', 'asd', '1', '10000.00', '7.00', '1', '2018-05-10 (12:38:55)', '2018-05-13', '81063.00'),
(2, '1234', 'buddhika', '435353678', 'test', '2018-05-23', '2018-05-24', '2', '4848888', 'test', '2', '1000.00', '10.00', '1', '2018-05-23 (16:25:00)', '2020-02-01', '620196.00'),
(3, '0001', 'Test', '3432524234', 'Me ', '2020-02-04', '2020-02-05', '6', '080987786587', 'No1 , Galkaduwa\\nNeboda', '2', '1000.00', '6.00', '0', '2020-02-04 (14:44:58)', '', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `foodinfor`
--

CREATE TABLE `foodinfor` (
  `id` int(11) NOT NULL,
  `foodcode` varchar(500) NOT NULL,
  `foodname` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `foodview` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `smallsize` decimal(10,2) NOT NULL,
  `mediumsize` decimal(10,2) NOT NULL,
  `largesize` decimal(10,2) NOT NULL,
  `createdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodinfor`
--

INSERT INTO `foodinfor` (`id`, `foodcode`, `foodname`, `description`, `foodview`, `category`, `smallsize`, `mediumsize`, `largesize`, `createdate`) VALUES
(1, 'CRT99', 'Rice', 'HHHH', 'images/185.jpg', 'breakfast', '56.00', '89.00', '0.00', '2018-05-13 (13:23:54)'),
(2, '312', 'qweq', 'qeq', 'images/349.jpeg', 'lunch', '0.00', '0.00', '0.00', '2018-06-05 (15:02:13)');

-- --------------------------------------------------------

--
-- Table structure for table `roominfor`
--

CREATE TABLE `roominfor` (
  `id` int(11) NOT NULL,
  `roomno` varchar(500) NOT NULL,
  `roomtype` varchar(1000) NOT NULL,
  `numbed` int(11) NOT NULL,
  `roomprice` decimal(10,2) NOT NULL,
  `roomstatus` varchar(200) NOT NULL,
  `createdate` varchar(500) NOT NULL,
  `lastupdate` varchar(500) NOT NULL,
  `bookingtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roominfor`
--

INSERT INTO `roominfor` (`id`, `roomno`, `roomtype`, `numbed`, `roomprice`, `roomstatus`, `createdate`, `lastupdate`, `bookingtime`) VALUES
(2, '101', 'test', 2, '1000.00', '1', '2018-05-23 (16:15:58)', '', '2020-02-04 (14:44:58)');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `tempbill`
--

CREATE TABLE `tempbill` (
  `id` int(11) NOT NULL,
  `bnic` varchar(500) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `bdec` varchar(500) NOT NULL,
  `bprice` decimal(10,2) NOT NULL,
  `bcreatedate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbillinfor`
--
ALTER TABLE `addbillinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinginfor`
--
ALTER TABLE `bookinginfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodinfor`
--
ALTER TABLE `foodinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roominfor`
--
ALTER TABLE `roominfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempbill`
--
ALTER TABLE `tempbill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbillinfor`
--
ALTER TABLE `addbillinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookinginfor`
--
ALTER TABLE `bookinginfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foodinfor`
--
ALTER TABLE `foodinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roominfor`
--
ALTER TABLE `roominfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempbill`
--
ALTER TABLE `tempbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
