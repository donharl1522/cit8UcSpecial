-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 09:56 AM
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
-- Database: `phpprototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops_table`
--

CREATE TABLE `crops_table` (
  `cropID` int(10) NOT NULL,
  `cropName` varchar(20) NOT NULL,
  `cropStart` date NOT NULL,
  `cropMaturity` int(2) NOT NULL,
  `cropHarvest` date NOT NULL,
  `cropSeason` varchar(3) NOT NULL,
  `cropLocation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops_table`
--

INSERT INTO `crops_table` (`cropID`, `cropName`, `cropStart`, `cropMaturity`, `cropHarvest`, `cropSeason`, `cropLocation`) VALUES
(3, 'adasfd', '0000-00-00', 0, '0000-00-00', '', ''),
(4, 'new crop', '2022-07-07', 0, '2022-07-14', 'dry', 'Bakun'),
(5, 'adfadf', '2022-06-28', 34, '2022-07-26', 'dry', 'Buguias');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops_table`
--
ALTER TABLE `crops_table`
  ADD PRIMARY KEY (`cropID`),
  ADD UNIQUE KEY `cropLocation` (`cropLocation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops_table`
--
ALTER TABLE `crops_table`
  MODIFY `cropID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
