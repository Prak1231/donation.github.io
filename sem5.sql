-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 12:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem5`
--

-- --------------------------------------------------------

--
-- Table structure for table `donationtable`
--

CREATE TABLE `donationtable` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(245) DEFAULT NULL,
  `items` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationtable`
--

INSERT INTO `donationtable` (`id`, `name`, `email`, `address`, `items`, `des`) VALUES
(1, 'PRAKASH SHIVPOOJAN PRAJAPATI', 'prakash.sp@somaiya.edu', 'ROOM NO.  38/22 YASHWANTRAOW CHAUVAN NAGAR EKTA NAGAR MANKHURD MANDALA MUMBAI', 'RICE DAL ETC', 'I just want to donate');

-- --------------------------------------------------------

--
-- Table structure for table `registrationtable`
--

CREATE TABLE `registrationtable` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationtable`
--

INSERT INTO `registrationtable` (`id`, `fname`, `mobile`, `username`, `email`, `password`, `role`, `city`, `image`) VALUES
(1, 'PRAKASH SHIVPOOJAN PRAJAPATI', '08657206737', 'Prakash_12', 'prakash.sp@somaiya.edu', 'Prakash123', 'donator', 'Mumbai', 'upload/bn.jpg'),
(2, 'Prakash', '664654442', 'Ajay_12', 'ajay@gmail.com', 'ajay123', 'donator', 'mumbai', 'upload/bn.jpg'),
(3, 'Sunil sahu', '7655233424', 'sunil_123', 'sunil@gmail.com', 'sunil123', 'admin', 'mumbai', 'upload/banking-stock-photo_csp17032027.jpg'),
(4, 'Sunita', '86443460', 'Sunita_12', 'sunita@gmail.com', 'sunita123', 'donator', 'mumbai', 'upload/bn.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donationtable`
--
ALTER TABLE `donationtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationtable`
--
ALTER TABLE `registrationtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donationtable`
--
ALTER TABLE `donationtable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrationtable`
--
ALTER TABLE `registrationtable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
