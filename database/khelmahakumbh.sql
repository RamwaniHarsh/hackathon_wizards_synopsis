-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 07:15 PM
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
CREATE DATABASE IF NOT EXISTS `khelmahakumbh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `khelmahakumbh`;

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_verification`
--

DROP TABLE IF EXISTS `aadhar_verification`;
CREATE TABLE `aadhar_verification` (
  `id` int(11) NOT NULL,
  `aadharcard` bigint(12) NOT NULL,
  `First_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhar_verification`
--

INSERT INTO `aadhar_verification` (`id`, `aadharcard`, `First_Name`) VALUES
(1, 413894942540, 'Jaynil Zala'),
(2, 427196375676, 'Harsh Thakkar'),
(3, 892670521003, 'Hirak Modi'),
(4, 449462213454, 'Harsh Ramwani'),
(5, 877901990623, 'Meet Thakkar'),
(6, 716669571224, 'VanshKumar Kanjani');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `mobile`, `email`) VALUES
(1, 'Harsh', 'admin', 9978676386, 'harshramwani5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `badm`
--

DROP TABLE IF EXISTS `badm`;
CREATE TABLE `badm` (
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `score` int(3) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badm`
--

INSERT INTO `badm` (`name`, `event_name`, `score`, `region`) VALUES
('ahmed', 'Badminton', 10, 'Vadodara'),
('ahmed', 'Badminton', 9, 'Ahmedabad'),
('raj', 'Badminton', 8, 'Vadodara'),
('jalsen', 'Badminton', 7, 'Ahmedabad'),
('ajay', 'Badminton', 6, 'Gandhinagar'),
('krish', 'Badminton', 5, 'Vadodara'),
('parth', 'Badminton', 4, 'Surat'),
('dhruv', 'Badminton', 3, 'Gandhinagar'),
('krish', 'Badminton', 2, 'Ahmedabad'),
('Smit', 'Badminton', 1, 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
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

DROP TABLE IF EXISTS `coach_details`;
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
-- Table structure for table `event_registration_coach`
--

DROP TABLE IF EXISTS `event_registration_coach`;
CREATE TABLE `event_registration_coach` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `user_choice` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration_coach`
--

INSERT INTO `event_registration_coach` (`id`, `name`, `event_name`, `age`, `city`, `user_choice`, `mobile`, `emailid`) VALUES
(1, 'Rikin', 'Kho-Kho', 30, 'Ahmedabad', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(2, 'vansh', 'Vollyball', 18, 'Vadodara', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(3, 'Prachi', 'Running', 18, 'Porbandar', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(6, 'Ankit', 'Weight lifting', 18, 'Bhuj', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(7, 'ajith', 'Basketball', 18, 'Anand', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(8, 'ravindra', 'Hockey', 18, 'Palanpur', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(9, 'raviraj', 'cycling', 18, 'Morbi', 'Coach', 9978676386, 'harshramwani5@gmail.com'),
(10, 'shreyash', 'Badminton', 18, 'Sanand', 'Coach', 9978676386, 'harshramwani5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration_individual`
--

DROP TABLE IF EXISTS `event_registration_individual`;
CREATE TABLE `event_registration_individual` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `user_choice` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration_individual`
--

INSERT INTO `event_registration_individual` (`id`, `name`, `event_name`, `age`, `city`, `user_choice`, `mobile`, `emailid`) VALUES
(1, 'Harsh', 'Kho-Kho', 18, 'Ahmedabad', 'Individual', 9978676386, 'harshramwani5@gmail.com'),
(2, 'Jenil', 'Vollyball', 18, 'Vadodara', 'Individual', 9978676386, 'harshramwani5@gmail.com'),
(3, 'Hirak', 'Kho-Kho', 18, 'Ahmedabad', 'Individual', 9978676386, 'harshramwani5@gmail.com'),
(4, 'Smit', 'Kho-Kho', 18, 'Ahmedabad', 'Individual', 9978676386, 'harshramwani5@gmail.com'),
(5, 'Krish', 'Vollyball', 18, 'Vadodara', 'Individual', 9978676386, 'harshramwani5@gmail.com'),
(6, 'Ronak', 'Basketball', 18, 'Surat', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in'),
(7, 'Bhuvan', 'Running', 18, 'Vadodara', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in'),
(8, 'Bhandresh', 'Cycling', 18, 'Gandhinagar', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in'),
(9, 'Bhavesh', 'Weight Lifting', 18, 'Rajkot', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in'),
(10, 'Vivek', 'Badminton', 18, 'Ahmedabad', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in'),
(11, 'Gunesh', 'Hockey', 18, 'Ahmedabad', 'Individual', 9978676386, 'harshramwani.21.cs@iite.indusuni.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `institute_registration`
--

DROP TABLE IF EXISTS `institute_registration`;
CREATE TABLE `institute_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `institute_code` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute_registration`
--

INSERT INTO `institute_registration` (`id`, `name`, `institute_code`, `password`, `mobile`, `emailid`) VALUES
(1, 'IndusUniversity', 1, 'Indus', 9978676386, 'harshramwani5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_data`
--

DROP TABLE IF EXISTS `mapping_data`;
CREATE TABLE `mapping_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_data`
--

INSERT INTO `mapping_data` (`id`, `name`, `event_name`, `mobile`, `city`) VALUES
(1, 'Harsh', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(2, 'Jenil', 'Vollyball', 9978676386, 'Vadodara'),
(3, 'Hirak', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(4, 'Smit', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(5, 'Krish', 'Vollyball', 9978676386, 'Vadodara'),
(6, 'Harsh', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(7, 'Jenil', 'Vollyball', 9978676386, 'Vadodara'),
(8, 'Hirak', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(9, 'Smit', 'Kho-Kho', 9978676386, 'Ahmedabad'),
(10, 'Krish', 'Vollyball', 9978676386, 'Vadodara');

-- --------------------------------------------------------

--
-- Table structure for table `registration_individual`
--

DROP TABLE IF EXISTS `registration_individual`;
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
  `email` varchar(50) NOT NULL,
  `aadhar` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_individual`
--

INSERT INTO `registration_individual` (`id`, `f_name`, `l_name`, `username`, `password`, `gender`, `dob`, `education`, `designation`, `mobile`, `email`, `aadhar`) VALUES
(1, 'Harsh', 'Ramwani', 'Admin', 'Admin', 'Male', '2003-06-06', 'B.Tech.', 'Warehouse Manager', 9978676386, 'harshramwani5@gmail.com', 449462213454),
(2, 'Laxman', 'Ramwani', 'hahaha', 'Ramwani@8740', 'Male', '2003-06-06', 'B.Tech.', 'Warehouse Manager', 9998599689, 'harshramwani5@gmail.com', 858577148878);

-- --------------------------------------------------------

--
-- Table structure for table `run`
--

DROP TABLE IF EXISTS `run`;
CREATE TABLE `run` (
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `score` int(3) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `run`
--

INSERT INTO `run` (`name`, `event_name`, `score`, `region`) VALUES
('vishal', 'Running', 10, 'Ahmedabad'),
('vishal', 'Running', 9, 'Ahmedabad'),
('hirak', 'Running', 8, 'Ahmedabad'),
('jaynil', 'Running', 7, 'Vadodra'),
('harsh', 'Running', 6, 'Ganhdhinagar'),
('hirak', 'Running', 5, 'Ahmedabad'),
('rikin', 'Running', 4, 'Rajkot'),
('dhaivat', 'Running', 3, 'Gandhidham'),
('sejal', 'Running', 2, 'Ahmedabad'),
('hiren', 'Running', 1, 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `swim`
--

DROP TABLE IF EXISTS `swim`;
CREATE TABLE `swim` (
  `name` varchar(20) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `score` int(3) NOT NULL,
  `region` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `swim`
--

INSERT INTO `swim` (`name`, `event_name`, `score`, `region`) VALUES
('Rahul', 'Swimming', 10, 'Ahmedabad'),
('Narendra', 'Swimming', 9, 'Ahmedabad'),
('Mamta', 'Swimming', 8, 'Gandhinagr'),
('Zafeer', 'Swimming', 7, 'Surat'),
('Harsh', 'Swimming', 6, 'Vadodara'),
('Smit', 'Swimming', 5, 'Gandnagar'),
('Rohan', 'Swimming', 4, 'Ahmedabad'),
('Hirak', 'Swimming', 3, 'Surat'),
('Prachi', 'Swimming', 2, 'Ahmedabad'),
('Muskan', 'Swimming', 1, 'Vadodara');

-- --------------------------------------------------------

--
-- Table structure for table `vallyball`
--

DROP TABLE IF EXISTS `vallyball`;
CREATE TABLE `Vollyball` (
  `name` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `score` int(3) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vallyball`
--

INSERT INTO `Vollyball` (`name`, `event_name`, `score`, `region`) VALUES
('jasprit', 'Vollyball', 10, 'Ahmedabad'),
('pranit', 'Vollyball', 9, 'Ahmedabad'),
('prachi', 'Vollyball', 8, 'Gandhinagar'),
('prem', 'Vollyball', 7, 'Ahmedabad'),
('ajay', 'Vollyball', 6, 'Surat'),
('ana', 'Vollyball', 5, 'Ahmedabad'),
('ajit', 'Vollyball', 4, 'Vadodara'),
('arjun', 'Vollyball', 3, 'Ahmedabad'),
('avesh', 'Vollyball', 2, 'Surat'),
('arvind', 'Vollyball', 1, 'Gandhinagar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
