-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 05:15 AM
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
-- Table structure for table `crops_table`
--

CREATE TABLE `crops_table` (
  `cropID` int(11) NOT NULL,
  `cropName` varchar(20) NOT NULL,
  `cropStart` varchar(20) NOT NULL,
  `cropMaturity` varchar(20) NOT NULL,
  `cropHarvest` varchar(20) NOT NULL,
  `cropSeason` varchar(20) NOT NULL,
  `cropLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops_table`
--

INSERT INTO `crops_table` (`cropID`, `cropName`, `cropStart`, `cropMaturity`, `cropHarvest`, `cropSeason`, `cropLocation`) VALUES
(1, 'Kent', '2022-06-17', 'iuoiuo', '2022-06-24', 'oio', 'Bakun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops_table`
--
ALTER TABLE `crops_table`
  ADD PRIMARY KEY (`cropID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops_table`
--
ALTER TABLE `crops_table`
  MODIFY `cropID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
