-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:41 AM
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
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `id` int(10) UNSIGNED NOT NULL,
  `cropName` varchar(100) NOT NULL,
  `munName` varchar(100) NOT NULL,
  `prodArea` float NOT NULL,
  `cropProd` float NOT NULL,
  `prodRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintable`
--

INSERT INTO `maintable` (`id`, `cropName`, `munName`, `prodArea`, `cropProd`, `prodRate`) VALUES
(140, 'AFGAG', 'Kabayan', 2, 10, 0),
(141, '', '', 0, 0, 0),
(142, '', '', 2, 10, 10),
(143, 'enew', 'Kibungan', 2, 10, 0.2),
(144, 'new', 'Sablan', 2, 10, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintable`
--
ALTER TABLE `maintable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintable`
--
ALTER TABLE `maintable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
