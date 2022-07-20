-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 02:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dateofbirth` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `conformpwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `gender`, `dateofbirth`, `email`, `phonenumber`, `password`, `conformpwd`) VALUES
(2, 'maha', 'r', 'female', '2022-07-22', 'bausdsad@gmail.com', 415125215, '1234', '1234'),
(3, 'vicky', 'r', 'male', '2022-07-21', 'malar@gmail.com', 3424324, 'dfsadfs', 'sfsafsda'),
(5, 'adbul', 'rahum', 'male', '2022-07-21', 'bausdsad@gmail.com', 1232434, '13421', '124323'),
(6, 'balaji', 'a', 'male', '2022-07-08', 'devaguru.r@optisolbusiness.com', 2147483647, '12345', '12345'),
(8, 'balaji', 'adsfs', 'male', '2022-07-08', 'devaguru.r@optisolbusiness.com', 1234567890, '1234', '1234'),
(14, 'devaguru', 'R', 'male', '2022-07-15', 'devaguru.r@optisolbusiness.com', 123456789, '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
