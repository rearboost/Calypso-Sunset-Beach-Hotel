-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2018 at 12:04 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hmsdb`
--

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
  `lastupdate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roominfor`
--

INSERT INTO `roominfor` (`id`, `roomno`, `roomtype`, `numbed`, `roomprice`, `roomstatus`, `createdate`, `lastupdate`) VALUES
(3, 'asas', 'asannn', 343, '454.00', '', '2018-04-29 (14:19:51)', ''),
(4, '353', 'dfdf', 65, '565.00', '', '2018-04-30 (16:22:05)', ''),
(5, 'K89', 'OPO', 453, '22.00', '', '2018-04-30 (16:40:30)', '2018-04-30 (17:15:29)');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roominfor`
--
ALTER TABLE `roominfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
