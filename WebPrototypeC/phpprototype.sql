-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 08:41 AM
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
-- Table structure for table `historicaltable`
--

CREATE TABLE `historicaltable` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `area` float NOT NULL,
  `production` float NOT NULL,
  `productivity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historicaltable`
--

INSERT INTO `historicaltable` (`id`, `year`, `name`, `municipality`, `area`, `production`, `productivity`) VALUES
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
(21, 2019, 'Cabbage', 'Tublay', 41.5, 410.5, 9.89);

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `area` float NOT NULL,
  `production` float NOT NULL,
  `productivity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintable`
--

INSERT INTO `maintable` (`id`, `name`, `municipality`, `area`, `production`, `productivity`) VALUES
(7, 'palay', 'palay', 540, 300, 2);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `production` varchar(100) NOT NULL,
  `productivity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historicaltable`
--
ALTER TABLE `historicaltable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintable`
--
ALTER TABLE `maintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historicaltable`
--
ALTER TABLE `historicaltable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `maintable`
--
ALTER TABLE `maintable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
