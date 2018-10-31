-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 09:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` int(10) NOT NULL,
  `organization` text NOT NULL,
  `street` text NOT NULL,
  `building` varchar(50) NOT NULL,
  `landmark` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `firstName1` text NOT NULL,
  `midName1` text NOT NULL,
  `lastName1` text NOT NULL,
  `gender1` text NOT NULL,
  `phonecode1` varchar(4) NOT NULL,
  `phone1` bigint(10) NOT NULL,
  `firstName2` text NOT NULL,
  `midName2` text NOT NULL,
  `lastName2` text NOT NULL,
  `gender2` text NOT NULL,
  `phonecode2` varchar(4) NOT NULL,
  `phone2` bigint(10) NOT NULL,
  `req_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `projectName` text NOT NULL,
  `endUser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`id`, `organization`, `street`, `building`, `landmark`, `city`, `zipcode`, `country`, `website`, `firstName1`, `midName1`, `lastName1`, `gender1`, `phonecode1`, `phone1`, `firstName2`, `midName2`, `lastName2`, `gender2`, `phonecode2`, `phone2`, `req_date`, `exp_date`, `projectName`, `endUser`) VALUES
(4, 'Bosch', '175,netaji coloni kolkata -700090', '123456', 'West Bengal', 'Kolkata', '700090', '', 'bosch.com', 'Abhirup ', 'kr', 'Dey', 'male', 'IN', 8420770801, 'Mayurakshi', 'Kr.', 'Chtterjee', 'male', '', 70801, '2018-10-03', '2019-02-14', 'test', 'global'),
(5, 'Bosch', '175,netaji coloni kolkata -700090', '123456', 'West Bengal', 'Kolkata', '700090', '', 'bosch.com', 'Abhirup ', 'kr', 'Dey', 'male', 'IN', 8420770801, 'Mayurakshi', 'Kr.', 'Chtterjee', 'male', '', 70801, '2018-10-03', '2019-02-14', 'test', 'global'),
(6, 'Bosch', '175,netaji coloni kolkata -700090', '123456', 'West Bengal', 'Kolkata', '700090', '', 'bosch.com', 'Abhirup ', 'kr', 'Dey', 'male', 'IN', 8420770801, 'Mayurakshi', 'Kr.', 'Chtterjee', 'male', '', 70801, '2018-10-03', '2019-02-14', 'test', 'global'),
(7, 'facebook', '175,netaji coloni kolkata -700090', '1243456', 'West Bengal', 'Kolkata', '700090', '', 'http://facebook.com', 'Mark', '', 'Zukarbarg', 'male', 'US', 123456789, '', '', '', '', '', 0, '2018-10-11', '2018-10-17', 'test', 'global'),
(8, 'facebook', '175,netaji coloni kolkata -700090', '1243456', 'West Bengal', 'Kolkata', '700090', 'US', 'http://facebook.com', 'Mark', '', 'Zukarbarg', 'male', 'US', 123456789, '', '', '', '', '', 0, '2018-10-11', '2018-10-17', 'test', 'global'),
(9, 'vit', 'VIT university, vellore. Boys Hostel. M block .room no - G28., V', '123456', 'Tamil Nadu', 'Vellore', '632014', 'JP', 'http://vit.com', 'VIT', '', 'Student', 'male ', '', 8420770801, 'vit2', '', 'Student', 'female', '', 70801, '2018-10-10', '2018-10-16', 'test', 'bosch customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
