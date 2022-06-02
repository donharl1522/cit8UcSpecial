-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 09:48 AM
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
  `harvestYear` int(4) NOT NULL,
  `cropName` varchar(25) NOT NULL,
  `munName` varchar(25) NOT NULL,
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
(21, 2019, 'Cabbage', 'Tublay', 41.5, 410.5, 9.89);

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `id` int(10) UNSIGNED NOT NULL,
  `harvestYear` int(4) NOT NULL,
  `cropName` varchar(25) NOT NULL,
  `munName` varchar(25) NOT NULL,
  `prodArea` float NOT NULL,
  `cropProd` float NOT NULL,
  `prodRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintable`
--

INSERT INTO `maintable` (`id`, `harvestYear`, `cropName`, `munName`, `prodArea`, `cropProd`, `prodRate`) VALUES
(146, 2019, 'asadv', 'Kabayan', 2, 10, 0.2),
(147, 2019, 'new', 'Kapangan', 2, 10, 0.2),
(148, 2018, '123', 'Buguias', 3, 1, 0.333333),
(149, 2019, 'gsfgg', 'Kapangan', 2342, 23, 0.00982067);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` float NOT NULL,
  `production` float NOT NULL,
  `productivity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `area`, `production`, `productivity`) VALUES
(40, 'new', 10, 50, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `table2`
-- (See below for the actual view)
--
CREATE TABLE `table2` (
`production` float
,`area` float
,`productivity` double
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(255) NOT NULL,
  `userFirstName` varchar(20) NOT NULL,
  `userLastName` varchar(20) NOT NULL,
  `userAge` int(3) NOT NULL,
  `userGender` char(2) NOT NULL,
  `userLocation` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userFirstName`, `userLastName`, `userAge`, `userGender`, `userLocation`, `username`, `password`) VALUES
(1, '', '', 0, '', 0, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa'),
(0, 'fdg', 'fdg', 4, 'M', 3, 'vfg', '$2y$10$yBKy1H3g50tycJP2uWi1lOkwBhTyB8Q/QOHUvXE981YAQZxd1iVD6');

-- --------------------------------------------------------

--
-- Structure for view `table2`
--
DROP TABLE IF EXISTS `table2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `table2`  AS SELECT `table1`.`production` AS `production`, `table1`.`area` AS `area`, `table1`.`production`/ `table1`.`area` AS `productivity` FROM `table1``table1`  ;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
