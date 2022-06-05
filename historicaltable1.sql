-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 01:47 PM
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
-- Table structure for table `historicaltable1`
--

CREATE TABLE `historicaltable1` (
  `id` int(11) NOT NULL,
  `harvestDate` date NOT NULL,
  `cropName` varchar(25) NOT NULL,
  `munName` varchar(25) NOT NULL,
  `prodArea` float NOT NULL,
  `cropProd` float NOT NULL,
  `prodRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historicaltable1`
--

INSERT INTO `historicaltable1` (`id`, `harvestDate`, `cropName`, `munName`, `prodArea`, `cropProd`, `prodRate`) VALUES
(1, '2022-06-08', 'adfasdf', 'atok', 2, 10, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historicaltable1`
--
ALTER TABLE `historicaltable1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historicaltable1`
--
ALTER TABLE `historicaltable1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
