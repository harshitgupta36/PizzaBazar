-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 02:16 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useractivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignin`
--

CREATE TABLE `asignin` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ProfileImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignin`
--

INSERT INTO `asignin` (`sr`, `name`, `email`, `password`, `mobile`, `address`, `time`, `ProfileImage`) VALUES
(1, 'vihan Gupta', 'vihan@gmail.com', 'vihan', '9005170392', 'sitapur', '2018-08-06 11:53:58', '1371170.png');

-- --------------------------------------------------------

--
-- Table structure for table `sighnin`
--

CREATE TABLE `sighnin` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ProfileImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sighnin`
--

INSERT INTO `sighnin` (`sr`, `name`, `email`, `password`, `mobile`, `address`, `time`, `ProfileImage`) VALUES
(23, 'harshit  gupta g', 'shdc.bca.1.harshit@gmail.com', 'admin@123', '9559097135', 'Mo makhupur', '2018-08-06 12:02:49', '1371170.png'),
(27, 'Abhishek Jaiswal ', 'abhishek@gmail.com', 'abhi@123', '9559097135', 'Rowza Darwaza', '2018-08-05 14:46:39', '1371862.png'),
(28, 'harshit ', 'abhishekjaiswal@gmail.com', 'admin@123', '9559097135', 'Mo makhupur sitapur ', '2018-08-05 10:05:56', '1371862.png'),
(29, 'harshita', 'harshita@gmail.com', 'admin@123', '6666666666', 'Mo makhupur', '2018-08-05 16:02:44', '1371174.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignin`
--
ALTER TABLE `asignin`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sighnin`
--
ALTER TABLE `sighnin`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asignin`
--
ALTER TABLE `asignin`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sighnin`
--
ALTER TABLE `sighnin`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
