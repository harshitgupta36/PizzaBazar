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
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `anurag`
--

CREATE TABLE `anurag` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `ImgName` varchar(50) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'anurag',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anurag`
--

INSERT INTO `anurag` (`DishId`, `DishName`, `DishPath`, `ImgName`, `DishMetarial`, `DishPrice`, `DishStander`, `Crust`, `Size`) VALUES
(1, 'anuraGpizza', 'photos/pizza/1371860.png', '1371860.png', 'Onion, Capsicum, Mushroom, Red Paprika, Black Olives, Sweet Corn', 56.00, 'anurag', 'Panhh', 'Medium'),
(2, 'anu', 'photos/pizza/1371860.png', '1371860.png', 'malik', 7879.00, 'anurag', 'copy', 'Medium'),
(3, 'jhggiuio', 'photos/pizza/1371170.png', '1371170.png', 'nk', 545.00, 'anurag', 'Pan', 'Medium'),
(9, 'hamza khan', 'photos/pizza/ajax-loader.gif', 'ajax-loader.gif', 'fhgfjfj', 9999.99, 'anurag', 'Pankjk', 'Medium'),
(10, 'bnjbj', 'photos/pizza/1371170.png', '1371170.png', 'n jbjk', 979.00, 'anurag', 'Pankhki', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `constructer`
--

CREATE TABLE `constructer` (
  `ProId` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPage` varchar(100) NOT NULL DEFAULT 'pizza',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constructer`
--

INSERT INTO `constructer` (`ProId`, `ProductName`, `ProductPage`, `Time`) VALUES
(14, 'anurag', 'pizza', '2018-08-01 16:30:44'),
(15, 'harshit', 'pizza', '2018-08-05 16:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `harshit`
--

CREATE TABLE `harshit` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `ImgName` varchar(50) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'harshit',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anurag`
--
ALTER TABLE `anurag`
  ADD PRIMARY KEY (`DishId`);

--
-- Indexes for table `constructer`
--
ALTER TABLE `constructer`
  ADD PRIMARY KEY (`ProId`);

--
-- Indexes for table `harshit`
--
ALTER TABLE `harshit`
  ADD PRIMARY KEY (`DishId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anurag`
--
ALTER TABLE `anurag`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `constructer`
--
ALTER TABLE `constructer`
  MODIFY `ProId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `harshit`
--
ALTER TABLE `harshit`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
