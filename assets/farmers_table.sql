-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 04:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpprototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers_table`
--

CREATE TABLE `farmers_table` (
  `farmerID` int(11) NOT NULL,
  `farmerName` varchar(20) NOT NULL,
  `farmerLName` varchar(20) NOT NULL,
  `farmer_contact_number` varchar(15) NOT NULL,
  `farmerLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_table`
--

INSERT INTO `farmers_table` (`farmerID`, `farmerName`, `farmerLName`, `farmer_contact_number`, `farmerLocation`) VALUES
(6, 'Kent', 'Cabatuan', '089788', 'Bakun'),
(7, 'Kent', 'Cabatuan', '0980', 'Atok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers_table`
--
ALTER TABLE `farmers_table`
  ADD PRIMARY KEY (`farmerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers_table`
--
ALTER TABLE `farmers_table`
  MODIFY `farmerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
