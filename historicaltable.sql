-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 04:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4  test*/;

--
-- Database: `phpprototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `historicaltable`
--

CREATE TABLE `historicaltable` (
  `id` int(10) UNSIGNED NOT NULL,
  `harvestYear` int(4) NOT NULL,
  `cropName` varchar(100) NOT NULL,
  `munName` varchar(100) NOT NULL,
  `prodArea` float NOT NULL,
  `cropProd` float NOT NULL,
  `prodRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historicaltable`
--

INSERT INTO `historicaltable` (`id`, `harvestYear`, `cropName`, `munName`, `prodArea`, `cropProd`, `prodRate`) VALUES
(2, 2019, 'Cabbage', 'Atok', 1647.76, 29862.2, 18.12),
(11, 2019, 'Cabbage', 'Bakun', 1658.51, 33146.8, 19.99),
(12, 2019, 'Cabbage', 'Bokod', 135.43, 2708.6, 20),
(13, 2019, 'Cabbage', 'Buguias', 2463.3, 53112.6, 21.56),
(14, 2019, 'Cabbage', 'Itogon', 41, 410, 10),
(15, 2019, 'Cabbage', 'Kabayan', 725, 14145, 19),
(16, 2019, 'Cabbage', 'Kapangan', 5.9, 63.5, 10.76),
(17, 2019, 'Cabbage', 'Kibungan', 2360.75, 48635.4, 20.6),
(18, 2019, 'Cabbage', 'La Trinidad', 57, 969, 17),
(19, 2019, 'Cabbage', 'Mankayan', 1680, 44105, 26.25),
(20, 2019, 'Cabbage', 'Tuba', 10, 180, 18),
(21, 2019, 'Cabbage', 'Tublay', 41.5, 410.5, 9.89),
(22, 2018, 'Corn', 'Atok', 23, 24, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historicaltable`
--
ALTER TABLE `historicaltable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historicaltable`
--
ALTER TABLE `historicaltable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
