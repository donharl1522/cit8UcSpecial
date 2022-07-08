-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 04:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `farmerID` int(10) NOT NULL,
  `farmerFName` varchar(20) NOT NULL,
  `farmerLName` varchar(20) NOT NULL,
  `farmer_contact_number` int(15) NOT NULL,
  `farmerLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_table`
--

INSERT INTO `farmers_table` (`farmerID`, `farmerFName`, `farmerLName`, `farmer_contact_number`, `farmerLocation`) VALUES
(4, 'Kent', 'John', 2147483647, 'Atok'),
(6, 'Vlademir', 'Putin', 9432423, 'La Trinidad');

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
  MODIFY `farmerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
