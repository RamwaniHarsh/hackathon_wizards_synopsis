-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 08:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khelmahakumbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `state`) VALUES
(1, 'Ahmedabad', 'Gujarat'),
(2, 'Vadodara', 'Gujarat'),
(3, 'Rajkot', 'Gujarat'),
(4, 'Surat', 'Gujarat'),
(5, 'Gandhinagar', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `coach_details`
--

CREATE TABLE `coach_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach_details`
--

INSERT INTO `coach_details` (`id`, `first_name`, `last_name`, `username`, `password`, `gender`, `designation`, `city`, `mobile`, `email`) VALUES
(1, 'Vansh', 'Kanjani', 'Vans123', 'Ramwani8740', 'Male', 'Manager', 'Ahmedabad', 9978676386, 'harshramwani5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `user_choice` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`id`, `name`, `event_name`, `age`, `user_choice`, `mobile`, `emailid`) VALUES
(1, 'Harsh', 'Basketball', 18, 'Individual', 9978676386, 'harshramwani5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration_individual`
--

CREATE TABLE `registration_individual` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_individual`
--

INSERT INTO `registration_individual` (`id`, `f_name`, `l_name`, `username`, `password`, `gender`, `dob`, `education`, `designation`, `mobile`, `email`) VALUES
(1, 'Harsh', 'Ramwani', 'HarshRamwani', 'Ramwani8740', 'Male', '2003-06-06', 'B.Tech.', 'Warehouse Manager', 9978676386, 'harshramwani5@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_details`
--
ALTER TABLE `coach_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_individual`
--
ALTER TABLE `registration_individual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coach_details`
--
ALTER TABLE `coach_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_individual`
--
ALTER TABLE `registration_individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
