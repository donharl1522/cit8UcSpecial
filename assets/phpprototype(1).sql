-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 03:00 AM
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
-- Table structure for table `crops_table`
--

CREATE TABLE `crops_table` (
  `cropID` int(10) NOT NULL,
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
(5, 'Carrot', '2022-07-14', 'Harvest', '2022-07-27', 'dry', 'Bakun');

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
(7, 'Rogue', 'Guegue', 90390832, 'Tuba');

-- --------------------------------------------------------

--
-- Table structure for table `historicaldataset`
--

CREATE TABLE `historicaldataset` (
  `harvestYear` int(5) DEFAULT NULL,
  `munName` varchar(50) DEFAULT NULL,
  `cropName` varchar(50) DEFAULT NULL,
  `prodArea` double DEFAULT NULL,
  `cropProd` double DEFAULT NULL,
  `prodRate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historicaldataset`
--

INSERT INTO `historicaldataset` (`harvestYear`, `munName`, `cropName`, `prodArea`, `cropProd`, `prodRate`) VALUES
(2015, 'Atok', 'Cabbage', 1774.99, 30764.26, 17.33),
(2015, 'Atok', 'Chinese Cabbage', 141.65, 2453.65, 17.32),
(2015, 'Atok', 'Lettuce', 127.09, 1151.58, 9.06),
(2015, 'Atok', 'Cauliflower', 29, 288.54, 9.95),
(2015, 'Atok', 'Snap Beans', 113.9, 1041.98, 9.15),
(2015, 'Atok', 'Garden Peas', 71.4, 406.59, 5.69),
(2015, 'Atok', 'Sweet Pepper', 19.36, 153.4, 7.92),
(2015, 'Atok', 'White Potato', 1414.1, 21453.6, 15.17),
(2015, 'Atok', 'Carrots', 989.96, 14525.4, 14.67),
(2015, 'Bakun', 'Cabbage', 1473.73, 29739.6, 20.18),
(2015, 'Bakun', 'Chinese Cabbage', 665.42, 16635.4, 25),
(2015, 'Bakun', 'Lettuce', 60.79, 607.9, 10),
(2015, 'Bakun', 'Cauliflower', 0, 0, 0),
(2015, 'Bakun', 'Snap Beans', 265.21, 2652.1, 10),
(2015, 'Bakun', 'Garden Peas', 121.92, 731.52, 6),
(2015, 'Bakun', 'Sweet Pepper', 131.94, 1052.74, 7.98),
(2015, 'Bakun', 'White Potato', 1451.7, 29034, 20),
(2015, 'Bakun', 'Carrots', 374.24, 5987.84, 16),
(2015, 'Bokod', 'Cabbage', 44.85, 887.6, 19.79),
(2015, 'Bokod', 'Chinese Cabbage', 42.7, 604.95, 14.17),
(2015, 'Bokod', 'Lettuce', 18.95, 189.5, 10),
(2015, 'Bokod', 'Cauliflower', 22.44, 269.29, 12),
(2015, 'Bokod', 'Snap Beans', 57.88, 463.04, 8),
(2015, 'Bokod', 'Garden Peas', 37.78, 151.12, 4),
(2015, 'Bokod', 'Sweet Pepper', 32.95, 259.28, 7.87),
(2015, 'Bokod', 'White Potato', 46.69, 735.27, 15.75),
(2015, 'Bokod', 'Carrots', 34.45, 529.88, 15.38),
(2015, 'Buguias', 'Cabbage', 3092.66, 63676.6, 20.59),
(2015, 'Buguias', 'Chinese Cabbage', 1377.08, 26755.5, 19.43),
(2015, 'Buguias', 'Lettuce', 250.59, 2256.07, 9),
(2015, 'Buguias', 'Cauliflower', 28.69, 283.95, 9.9),
(2015, 'Buguias', 'Snap Beans', 34.8, 248.26, 7.13),
(2015, 'Buguias', 'Garden Peas', 70.41, 379.97, 5.4),
(2015, 'Buguias', 'Sweet Pepper', 57.99, 398.94, 6.88),
(2015, 'Buguias', 'White Potato', 3810.74, 61505.36, 16.14),
(2015, 'Buguias', 'Carrots', 1993.27, 30920.2, 15.51),
(2015, 'Itogon', 'Cabbage', 59, 590, 10),
(2015, 'Itogon', 'Chinese Cabbage', 75, 750, 10),
(2015, 'Itogon', 'Lettuce', 20, 180, 9),
(2015, 'Itogon', 'Cauliflower', 30, 280, 9.33),
(2015, 'Itogon', 'Snap Beans', 42, 294, 7),
(2015, 'Itogon', 'Garden Peas', 19, 66.5, 3.5),
(2015, 'Itogon', 'Sweet Pepper', 20, 120, 6),
(2015, 'Itogon', 'White Potato', 8, 128, 16),
(2015, 'Itogon', 'Carrots', 8, 112, 10),
(2015, 'Kabayan', 'Cabbage', 502, 9055, 18.04),
(2015, 'Kabayan', 'Chinese Cabbage', 104, 2380, 22.88),
(2015, 'Kabayan', 'Lettuce', 15.1, 136, 9.01),
(2015, 'Kabayan', 'Cauliflower', 272, 3990, 14.67),
(2015, 'Kabayan', 'Snap Beans', 122, 957, 7.84),
(2015, 'Kabayan', 'Garden Peas', 79, 395, 5),
(2015, 'Kabayan', 'Sweet Pepper', 244, 1629, 6.68),
(2015, 'Kabayan', 'White Potato', 267, 5520, 20.67),
(2015, 'Kabayan', 'Carrots', 600, 10240, 17.07),
(2015, 'Kapangan', 'Cabbage', 3.41, 40.92, 12),
(2015, 'Kapangan', 'Chinese Cabbage', 3.86, 46.32, 12),
(2015, 'Kapangan', 'Lettuce', 1.98, 23.76, 12),
(2015, 'Kapangan', 'Cauliflower', 1.06, 10.6, 10),
(2015, 'Kapangan', 'Snap Beans', 126.8, 1521.6, 12),
(2015, 'Kapangan', 'Garden Peas', 14.18, 141.8, 10),
(2015, 'Kapangan', 'Sweet Pepper', 87.2, 1046.4, 12),
(2015, 'Kapangan', 'White Potato', 0, 0, 0),
(2015, 'Kapangan', 'Carrots', 0, 0, 0),
(2015, 'Kibungan', 'Cabbage', 997.5, 15732, 15.77),
(2015, 'Kibungan', 'Chinese Cabbage', 31, 464, 14.97),
(2015, 'Kibungan', 'Lettuce', 25.55, 194.4, 7.61),
(2015, 'Kibungan', 'Cauliflower', 2.7, 14.7, 5.44),
(2015, 'Kibungan', 'Snap Beans', 83.55, 595.55, 7.13),
(2015, 'Kibungan', 'Garden Peas', 21, 83.45, 3.97),
(2015, 'Kibungan', 'Sweet Pepper', 63.65, 381.45, 5.99),
(2015, 'Kibungan', 'White Potato', 1360.5, 25792, 18.96),
(2015, 'Kibungan', 'Carrots', 211.75, 2700, 12.75),
(2015, 'La Trinidad', 'Cabbage', 57.5, 877.85, 15.27),
(2015, 'La Trinidad', 'Chinese Cabbage', 152.41, 2179.81, 14.3),
(2015, 'La Trinidad', 'Lettuce', 179.9, 2266.9, 12.6),
(2015, 'La Trinidad', 'Cauliflower', 22.65, 323.33, 14.27),
(2015, 'La Trinidad', 'Snap Beans', 54.84, 374.76, 6.83),
(2015, 'La Trinidad', 'Garden Peas', 34.27, 125.37, 3.66),
(2015, 'La Trinidad', 'Sweet Pepper', 25.32, 192.5, 7.6),
(2015, 'La Trinidad', 'White Potato', 19.8, 309.33, 15.62),
(2015, 'La Trinidad', 'Carrots', 33.82, 313.19, 9.26),
(2015, 'Mankayan', 'Cabbage', 705.49, 17773.51, 25.19),
(2015, 'Mankayan', 'Chinese Cabbage', 606.79, 12830.45, 21.14),
(2015, 'Mankayan', 'Lettuce', 112.56, 1273.16, 11.31),
(2015, 'Mankayan', 'Cauliflower', 180, 1900, 10.56),
(2015, 'Mankayan', 'Snap Beans', 131.96, 1069.43, 8.1),
(2015, 'Mankayan', 'Garden Peas', 130.3, 709.6, 5.45),
(2015, 'Mankayan', 'Sweet Pepper', 99.49, 658.43, 6.62),
(2015, 'Mankayan', 'White Potato', 1708.64, 39683.93, 23.23),
(2015, 'Mankayan', 'Carrots', 306.21, 5040.78, 16.46),
(2015, 'Sablan', 'Cabbage', 0.8, 14.4, 18),
(2015, 'Sablan', 'Chinese Cabbage', 2.9, 58, 20),
(2015, 'Sablan', 'Lettuce', 0, 0, 0),
(2015, 'Sablan', 'Cauliflower', 0, 0, 0),
(2015, 'Sablan', 'Snap Beans', 251.22, 2512.2, 10),
(2015, 'Sablan', 'Garden Peas', 13.1, 96.4, 7.36),
(2015, 'Sablan', 'Sweet Pepper', 54.12, 432.96, 8),
(2015, 'Sablan', 'White Potato', 0, 0, 0),
(2015, 'Sablan', 'Carrots', 0, 0, 0),
(2015, 'Tuba', 'Cabbage', 65.1, 781.2, 12),
(2015, 'Tuba', 'Chinese Cabbage', 52, 624, 12),
(2015, 'Tuba', 'Lettuce', 8.3, 88.4, 10.65),
(2015, 'Tuba', 'Cauliflower', 14.2, 170.4, 12),
(2015, 'Tuba', 'Snap Beans', 560.95, 6731.4, 12),
(2015, 'Tuba', 'Garden Peas', 30, 280, 9.33),
(2015, 'Tuba', 'Sweet Pepper', 68.3, 564.7, 8.27),
(2015, 'Tuba', 'White Potato', 43, 516, 12),
(2015, 'Tuba', 'Carrots', 32, 384, 12),
(2015, 'Tublay', 'Cabbage', 48.93, 84.77, 1.73),
(2015, 'Tublay', 'Chinese Cabbage', 22.1, 62.22, 2.82),
(2015, 'Tublay', 'Lettuce', 14.95, 34.07, 2.28),
(2015, 'Tublay', 'Cauliflower', 30.12, 77.84, 2.58),
(2015, 'Tublay', 'Snap Beans', 70.73, 135.11, 1.91),
(2015, 'Tublay', 'Garden Peas', 13.55, 19.83, 1.46),
(2015, 'Tublay', 'Sweet Pepper', 82.65, 271.63, 3.29),
(2015, 'Tublay', 'White Potato', 22.35, 93.46, 4.18),
(2015, 'Tublay', 'Carrots', 11.32, 34.32, 3.03),
(2015, 'Total', 'Cabbage', 8825.96, 170017.71, 19.26),
(2015, 'Total', 'Chinese Cabbage', 3276.91, 65844.3, 20.09),
(2015, 'Total', 'Lettuce', 835.76, 8401.74, 10.05),
(2015, 'Total', 'Cauliflower', 632.86, 7608.64, 12.02),
(2015, 'Total', 'Snap Beans', 1915.83, 18596.43, 9.71),
(2015, 'Total', 'Garden Peas', 655.91, 3587.15, 5.47),
(2015, 'Total', 'Sweet Pepper', 986.97, 7161.43, 7.26),
(2015, 'Total', 'White Potato', 10152.53, 184770.95, 18.2),
(2015, 'Total', 'Carrots', 4595.02, 70787.61, 15.41),
(2016, 'Atok', 'Cabbage', 927.75, 14498.91, 15.63),
(2016, 'Atok', 'Chinese Cabbage', 156.92, 2813.19, 17.93),
(2016, 'Atok', 'Lettuce', 75.98, 630.88, 8.3),
(2016, 'Atok', 'Cauliflower', 27.55, 190.48, 6.91),
(2016, 'Atok', 'Snap Beans', 97.51, 696.98, 7.15),
(2016, 'Atok', 'Garden Peas', 86.18, 436.71, 5.07),
(2016, 'Atok', 'Sweet Pepper', 25.2, 143.1, 5.68),
(2016, 'Atok', 'White Potato', 727.12, 12133.41, 16.69),
(2016, 'Atok', 'Carrots', 915.96, 10859.8, 11.86),
(2016, 'Bakun', 'Cabbage', 1754.61, 35131.8, 20.02),
(2016, 'Bakun', 'Chinese Cabbage', 623.75, 15593.79, 25),
(2016, 'Bakun', 'Lettuce', 73.65, 736.5, 10),
(2016, 'Bakun', 'Cauliflower', 0, 0, 0),
(2016, 'Bakun', 'Snap Beans', 304.76, 2620.12, 8.6),
(2016, 'Bakun', 'Garden Peas', 122.15, 867.06, 7.1),
(2016, 'Bakun', 'Sweet Pepper', 140.75, 1126, 8),
(2016, 'Bakun', 'White Potato', 1269.71, 25394.2, 20),
(2016, 'Bakun', 'Carrots', 490.18, 7842.88, 16),
(2016, 'Bokod', 'Cabbage', 61, 1220, 20),
(2016, 'Bokod', 'Chinese Cabbage', 40.5, 577.5, 14.26),
(2016, 'Bokod', 'Lettuce', 18, 180, 10),
(2016, 'Bokod', 'Cauliflower', 28, 336, 12),
(2016, 'Bokod', 'Snap Beans', 63, 504, 8),
(2016, 'Bokod', 'Garden Peas', 55, 220, 4),
(2016, 'Bokod', 'Sweet Pepper', 38, 304, 8),
(2016, 'Bokod', 'White Potato', 63, 884, 14.03),
(2016, 'Bokod', 'Carrots', 51, 784, 15.37),
(2016, 'Buguias', 'Cabbage', 3034.8, 62836.6, 20.71),
(2016, 'Buguias', 'Chinese Cabbage', 1342.5, 24779, 18.46),
(2016, 'Buguias', 'Lettuce', 318.3, 2850.65, 8.96),
(2016, 'Buguias', 'Cauliflower', 31.76, 332.76, 10.48),
(2016, 'Buguias', 'Snap Beans', 34.84, 261.88, 7.52),
(2016, 'Buguias', 'Garden Peas', 69, 382.8, 5.55),
(2016, 'Buguias', 'Sweet Pepper', 66.95, 505, 7.54),
(2016, 'Buguias', 'White Potato', 4143.36, 67813.76, 16.37),
(2016, 'Buguias', 'Carrots', 3206, 48388, 15.09),
(2016, 'Itogon', 'Cabbage', 61, 610, 10),
(2016, 'Itogon', 'Chinese Cabbage', 79.5, 795, 10),
(2016, 'Itogon', 'Lettuce', 13, 117, 9),
(2016, 'Itogon', 'Cauliflower', 30, 300, 10),
(2016, 'Itogon', 'Snap Beans', 44, 308, 7),
(2016, 'Itogon', 'Garden Peas', 30, 105, 3.5),
(2016, 'Itogon', 'Sweet Pepper', 20, 120, 6),
(2016, 'Itogon', 'White Potato', 30, 300, 10),
(2016, 'Itogon', 'Carrots', 30, 300, 10),
(2016, 'Kabayan', 'Cabbage', 520.66, 9789.85, 18.8),
(2016, 'Kabayan', 'Chinese Cabbage', 87.82, 2026.2, 23.07),
(2016, 'Kabayan', 'Lettuce', 32.47, 304.29, 9.37),
(2016, 'Kabayan', 'Cauliflower', 424.03, 6035.3, 14.23),
(2016, 'Kabayan', 'Snap Beans', 122.59, 959.51, 7.83),
(2016, 'Kabayan', 'Garden Peas', 81, 401, 4.95),
(2016, 'Kabayan', 'Sweet Pepper', 63.58, 431.9, 6.79),
(2016, 'Kabayan', 'White Potato', 240, 4750, 19.79),
(2016, 'Kabayan', 'Carrots', 851.32, 15653.4, 18.39),
(2016, 'Kapangan', 'Cabbage', 6.55, 78.6, 12),
(2016, 'Kapangan', 'Chinese Cabbage', 3.55, 42.6, 12),
(2016, 'Kapangan', 'Lettuce', 3.1, 37.2, 12),
(2016, 'Kapangan', 'Cauliflower', 0.65, 6.5, 10),
(2016, 'Kapangan', 'Snap Beans', 281.8, 3381.6, 12),
(2016, 'Kapangan', 'Garden Peas', 75, 625, 8.33),
(2016, 'Kapangan', 'Sweet Pepper', 339, 4068, 12),
(2016, 'Kapangan', 'White Potato', 0, 0, 0),
(2016, 'Kapangan', 'Carrots', 0, 0, 0),
(2016, 'Kibungan', 'Cabbage', 2266, 40298, 17.78),
(2016, 'Kibungan', 'Chinese Cabbage', 80.25, 947, 11.8),
(2016, 'Kibungan', 'Lettuce', 53.8, 503.4, 9.36),
(2016, 'Kibungan', 'Cauliflower', 2, 11.8, 5.9),
(2016, 'Kibungan', 'Snap Beans', 50.25, 472.5, 9.4),
(2016, 'Kibungan', 'Garden Peas', 26.5, 209.8, 7.92),
(2016, 'Kibungan', 'Sweet Pepper', 112.05, 915.6, 8.17),
(2016, 'Kibungan', 'White Potato', 2702, 51559, 19.08),
(2016, 'Kibungan', 'Carrots', 474.5, 7128.5, 15.02),
(2016, 'La Trinidad', 'Cabbage', 52.5, 806.84, 15.37),
(2016, 'La Trinidad', 'Chinese Cabbage', 58.7, 936.46, 15.95),
(2016, 'La Trinidad', 'Lettuce', 61.7, 845.06, 13.7),
(2016, 'La Trinidad', 'Cauliflower', 25, 352.32, 14.09),
(2016, 'La Trinidad', 'Snap Beans', 96.78, 831.59, 8.59),
(2016, 'La Trinidad', 'Garden Peas', 54.34, 208.77, 3.84),
(2016, 'La Trinidad', 'Sweet Pepper', 34.84, 299.12, 8.59),
(2016, 'La Trinidad', 'White Potato', 17.37, 300.29, 17.29),
(2016, 'La Trinidad', 'Carrots', 24.58, 223.53, 9.09),
(2016, 'Mankayan', 'Cabbage', 1152.76, 30306.14, 26.29),
(2016, 'Mankayan', 'Chinese Cabbage', 794.35, 17057, 21.47),
(2016, 'Mankayan', 'Lettuce', 182.1, 2156.25, 11.84),
(2016, 'Mankayan', 'Cauliflower', 172, 1884, 10.95),
(2016, 'Mankayan', 'Snap Beans', 233.15, 1984.2, 8.51),
(2016, 'Mankayan', 'Garden Peas', 158, 908, 5.75),
(2016, 'Mankayan', 'Sweet Pepper', 170.28, 1125.68, 6.61),
(2016, 'Mankayan', 'White Potato', 1450, 33650, 23.21),
(2016, 'Mankayan', 'Carrots', 361.8, 5912.4, 16.34),
(2016, 'Sablan', 'Cabbage', 0, 0, 0),
(2016, 'Sablan', 'Chinese Cabbage', 2.9, 58, 20),
(2016, 'Sablan', 'Lettuce', 0, 0, 0),
(2016, 'Sablan', 'Cauliflower', 0, 0, 0),
(2016, 'Sablan', 'Snap Beans', 226.98, 2269.8, 10),
(2016, 'Sablan', 'Garden Peas', 13.08, 96.24, 7.36),
(2016, 'Sablan', 'Sweet Pepper', 69.23, 553.84, 8),
(2016, 'Sablan', 'White Potato', 0, 0, 0),
(2016, 'Sablan', 'Carrots', 0, 0, 0),
(2016, 'Tuba', 'Cabbage', 47, 564, 12),
(2016, 'Tuba', 'Chinese Cabbage', 36.99, 443.88, 12),
(2016, 'Tuba', 'Lettuce', 13, 78, 6),
(2016, 'Tuba', 'Cauliflower', 0, 0, 0),
(2016, 'Tuba', 'Snap Beans', 246.99, 2961, 11.99),
(2016, 'Tuba', 'Garden Peas', 18.5, 152.62, 8.25),
(2016, 'Tuba', 'Sweet Pepper', 18.5, 166.48, 9),
(2016, 'Tuba', 'White Potato', 35, 420, 12),
(2016, 'Tuba', 'Carrots', 25.49, 305.8, 12),
(2016, 'Tublay', 'Cabbage', 19.6, 165.59, 8.45),
(2016, 'Tublay', 'Chinese Cabbage', 21.9, 167.89, 7.67),
(2016, 'Tublay', 'Lettuce', 22.9, 180.92, 7.9),
(2016, 'Tublay', 'Cauliflower', 16.45, 135.11, 8.21),
(2016, 'Tublay', 'Snap Beans', 95.5, 594.21, 6.22),
(2016, 'Tublay', 'Garden Peas', 11.25, 44.75, 3.98),
(2016, 'Tublay', 'Sweet Pepper', 133.15, 904.43, 6.79),
(2016, 'Tublay', 'White Potato', 16.55, 146.24, 8.84),
(2016, 'Tublay', 'Carrots', 12.85, 94.22, 7.33),
(2016, 'Total', 'Cabbage', 9904.23, 196306.33, 19.82),
(2016, 'Total', 'Chinese Cabbage', 3329.63, 66237.51, 19.89),
(2016, 'Total', 'Lettuce', 868, 8620.15, 9.93),
(2016, 'Total', 'Cauliflower', 757.44, 9584.27, 12.65),
(2016, 'Total', 'Snap Beans', 1898.15, 17845.39, 9.4),
(2016, 'Total', 'Garden Peas', 800, 4657.75, 5.82),
(2016, 'Total', 'Sweet Pepper', 1231.53, 10663.15, 8.66),
(2016, 'Total', 'White Potato', 10694.11, 197350.9, 18.45),
(2016, 'Total', 'Carrots', 6443.68, 97492.53, 15.13),
(2017, 'Atok', 'Cabbage', 1322.77, 23105.2, 17.47),
(2017, 'Atok', 'Chinese Cabbage', 212.81, 4402.66, 20.69),
(2017, 'Atok', 'Lettuce', 75.71, 697.72, 9.22),
(2017, 'Atok', 'Cauliflower', 26.79, 281, 10.49),
(2017, 'Atok', 'Snap Beans', 46.08, 374.99, 8.14),
(2017, 'Atok', 'Garden Peas', 47.73, 212.65, 4.46),
(2017, 'Atok', 'Sweet Pepper', 7.55, 51.65, 6.84),
(2017, 'Atok', 'White Potato', 1120.15, 20142.96, 17.98),
(2017, 'Atok', 'Carrots', 645.37, 9675.38, 14.99),
(2017, 'Bakun', 'Cabbage', 1555.45, 32216.74, 20.71),
(2017, 'Bakun', 'Chinese Cabbage', 727.58, 16548.98, 22.75),
(2017, 'Bakun', 'Lettuce', 84.46, 844.6, 10),
(2017, 'Bakun', 'Cauliflower', 0, 0, 0),
(2017, 'Bakun', 'Snap Beans', 373.52, 3041.6, 8.14),
(2017, 'Bakun', 'Garden Peas', 151.53, 1079.02, 7.12),
(2017, 'Bakun', 'Sweet Pepper', 165.09, 1320.72, 8),
(2017, 'Bakun', 'White Potato', 1580.79, 31615.8, 20),
(2017, 'Bakun', 'Carrots', 554.77, 8864.34, 15.98),
(2017, 'Bokod', 'Cabbage', 113.65, 2273, 20),
(2017, 'Bokod', 'Chinese Cabbage', 66.5, 997.5, 15),
(2017, 'Bokod', 'Lettuce', 25, 250, 10),
(2017, 'Bokod', 'Cauliflower', 33, 396, 12),
(2017, 'Bokod', 'Snap Beans', 78, 624, 8),
(2017, 'Bokod', 'Garden Peas', 59, 236, 4),
(2017, 'Bokod', 'Sweet Pepper', 45, 360, 8),
(2017, 'Bokod', 'White Potato', 74, 1044, 14.11),
(2017, 'Bokod', 'Carrots', 65, 880, 13.54),
(2017, 'Buguias', 'Cabbage', 2748, 59320.5, 21.59),
(2017, 'Buguias', 'Chinese Cabbage', 1350.5, 26654, 19.74),
(2017, 'Buguias', 'Lettuce', 268.3, 2600.2, 9.69),
(2017, 'Buguias', 'Cauliflower', 31.25, 351.6, 11.25),
(2017, 'Buguias', 'Snap Beans', 46.6, 361.7, 7.76),
(2017, 'Buguias', 'Garden Peas', 81.69, 467.34, 5.72),
(2017, 'Buguias', 'Sweet Pepper', 80.55, 621.55, 7.72),
(2017, 'Buguias', 'White Potato', 3894.5, 65073, 16.71),
(2017, 'Buguias', 'Carrots', 2964.6, 12579.6, 15.37),
(2017, 'Itogon', 'Cabbage', 61, 640, 10.49),
(2017, 'Itogon', 'Chinese Cabbage', 79.5, 795, 10),
(2017, 'Itogon', 'Lettuce', 13, 117, 9),
(2017, 'Itogon', 'Cauliflower', 30, 300, 10),
(2017, 'Itogon', 'Snap Beans', 44, 308, 7),
(2017, 'Itogon', 'Garden Peas', 30, 105, 3.5),
(2017, 'Itogon', 'Sweet Pepper', 20, 120, 6),
(2017, 'Itogon', 'White Potato', 20, 200, 10),
(2017, 'Itogon', 'Carrots', 20, 200, 10),
(2017, 'Kabayan', 'Cabbage', 669, 13380, 20),
(2017, 'Kabayan', 'Chinese Cabbage', 81.55, 2038.75, 25),
(2017, 'Kabayan', 'Lettuce', 19.5, 117, 6),
(2017, 'Kabayan', 'Cauliflower', 356, 5310, 14.92),
(2017, 'Kabayan', 'Snap Beans', 59, 472, 8),
(2017, 'Kabayan', 'Garden Peas', 48, 240, 5),
(2017, 'Kabayan', 'Sweet Pepper', 84, 588, 7),
(2017, 'Kabayan', 'White Potato', 204, 4080, 20),
(2017, 'Kabayan', 'Carrots', 815, 14670, 18),
(2017, 'Kapangan', 'Cabbage', 5.85, 70.2, 12),
(2017, 'Kapangan', 'Chinese Cabbage', 2.8, 33.6, 12),
(2017, 'Kapangan', 'Lettuce', 1.17, 14.02, 11.98),
(2017, 'Kapangan', 'Cauliflower', 1.35, 13.5, 10),
(2017, 'Kapangan', 'Snap Beans', 215.85, 2626.2, 12.17),
(2017, 'Kapangan', 'Garden Peas', 77, 635, 8.25),
(2017, 'Kapangan', 'Sweet Pepper', 301.25, 3615, 12),
(2017, 'Kapangan', 'White Potato', 0.03, 0.03, 10),
(2017, 'Kapangan', 'Carrots', 0.03, 0.03, 10),
(2017, 'Kibungan', 'Cabbage', 3175, 63780, 20.09),
(2017, 'Kibungan', 'Chinese Cabbage', 92, 1441, 15.66),
(2017, 'Kibungan', 'Lettuce', 55.5, 549, 9.89),
(2017, 'Kibungan', 'Cauliflower', 28.4, 112.35, 3.96),
(2017, 'Kibungan', 'Snap Beans', 102.55, 1022.5, 9.97),
(2017, 'Kibungan', 'Garden Peas', 45.45, 406.1, 8.94),
(2017, 'Kibungan', 'Sweet Pepper', 147.5, 1334, 9.04),
(2017, 'Kibungan', 'White Potato', 2347.5, 46950, 20),
(2017, 'Kibungan', 'Carrots', 262.5, 4200, 16),
(2017, 'La Trinidad', 'Cabbage', 57.04, 920.58, 16.14),
(2017, 'La Trinidad', 'Chinese Cabbage', 61.77, 1021.49, 16.54),
(2017, 'La Trinidad', 'Lettuce', 68.9, 966, 14.02),
(2017, 'La Trinidad', 'Cauliflower', 20.15, 302.25, 15),
(2017, 'La Trinidad', 'Snap Beans', 54.84, 815.94, 8.64),
(2017, 'La Trinidad', 'Garden Peas', 58.94, 235.76, 4),
(2017, 'La Trinidad', 'Sweet Pepper', 54.9, 474, 8.63),
(2017, 'La Trinidad', 'White Potato', 26, 410.79, 15.8),
(2017, 'La Trinidad', 'Carrots', 28.01, 284.07, 10.14),
(2017, 'Mankayan', 'Cabbage', 1294.02, 34071.08, 26.33),
(2017, 'Mankayan', 'Chinese Cabbage', 853.48, 18240.39, 21.37),
(2017, 'Mankayan', 'Lettuce', 195, 2311.5, 11.85),
(2017, 'Mankayan', 'Cauliflower', 177, 1934, 10.93),
(2017, 'Mankayan', 'Snap Beans', 340.63, 2914.9, 8.56),
(2017, 'Mankayan', 'Garden Peas', 167, 960, 5.75),
(2017, 'Mankayan', 'Sweet Pepper', 184.16, 1223.69, 6.64),
(2017, 'Mankayan', 'White Potato', 1750.24, 40818.46, 23.32),
(2017, 'Mankayan', 'Carrots', 511.8, 8312.4, 16.24),
(2017, 'Sablan', 'Cabbage', 0, 0, 0),
(2017, 'Sablan', 'Chinese Cabbage', 2.9, 58, 20),
(2017, 'Sablan', 'Lettuce', 0, 0, 0),
(2017, 'Sablan', 'Cauliflower', 0, 0, 0),
(2017, 'Sablan', 'Snap Beans', 243.24, 2432.4, 10),
(2017, 'Sablan', 'Garden Peas', 13.08, 96.24, 7.36),
(2017, 'Sablan', 'Sweet Pepper', 77.23, 617.84, 8),
(2017, 'Sablan', 'White Potato', 0, 0, 0),
(2017, 'Sablan', 'Carrots', 0, 0, 0),
(2017, 'Tuba', 'Cabbage', 17, 306, 18),
(2017, 'Tuba', 'Chinese Cabbage', 37, 666, 18),
(2017, 'Tuba', 'Lettuce', 9.5, 35.23, 3.71),
(2017, 'Tuba', 'Cauliflower', 0, 0, 0),
(2017, 'Tuba', 'Snap Beans', 153.75, 1845, 12),
(2017, 'Tuba', 'Garden Peas', 26, 208, 8),
(2017, 'Tuba', 'Sweet Pepper', 18.5, 166.5, 9),
(2017, 'Tuba', 'White Potato', 63, 756, 12),
(2017, 'Tuba', 'Carrots', 15.52, 185.95, 11.98),
(2017, 'Tublay', 'Cabbage', 6.7, 87, 12.99),
(2017, 'Tublay', 'Chinese Cabbage', 18.75, 236.4, 12.61),
(2017, 'Tublay', 'Lettuce', 23.1, 202.25, 8.76),
(2017, 'Tublay', 'Cauliflower', 11.15, 107, 9.6),
(2017, 'Tublay', 'Snap Beans', 97.65, 773.7, 7.92),
(2017, 'Tublay', 'Garden Peas', 24.19, 95.49, 3.95),
(2017, 'Tublay', 'Sweet Pepper', 124.8, 790.45, 6.33),
(2017, 'Tublay', 'White Potato', 16.37, 231.38, 14.13),
(2017, 'Tublay', 'Carrots', 12.95, 138.4, 10.69),
(2017, 'Total', 'Cabbage', 11025.48, 230170.3, 20.88),
(2017, 'Total', 'Chinese Cabbage', 3587.14, 73133.77, 20.39),
(2017, 'Total', 'Lettuce', 839.14, 8704.52, 10.37),
(2017, 'Total', 'Cauliflower', 715.09, 9107.7, 12.74),
(2017, 'Total', 'Snap Beans', 1895.33, 17612.93, 9.29),
(2017, 'Total', 'Garden Peas', 829.61, 4976.6, 6),
(2017, 'Total', 'Sweet Pepper', 1310.53, 11283.39, 8.61),
(2017, 'Total', 'White Potato', 11096.59, 211322.64, 19.04),
(2017, 'Total', 'Carrots', 5895.55, 92990.38, 15.77),
(2018, 'Atok', 'Cabbage', 936.57, 15435.76, 16.48),
(2018, 'Atok', 'Chinese Cabbage', 205.77, 3679.9, 17.88),
(2018, 'Atok', 'Lettuce', 73.58, 560.16, 7.61),
(2018, 'Atok', 'Cauliflower', 30.87, 295.69, 9.58),
(2018, 'Atok', 'Snap Beans', 82.91, 701.24, 8.46),
(2018, 'Atok', 'Garden Peas', 63.1, 236.36, 3.75),
(2018, 'Atok', 'Sweet Pepper', 19.22, 120.01, 6.24),
(2018, 'Atok', 'White Potato', 1045.5, 18523.52, 17.72),
(2018, 'Atok', 'Carrots', 826.45, 13156.9, 15.92),
(2018, 'Bakun', 'Cabbage', 1636.95, 32739.06, 20),
(2018, 'Bakun', 'Chinese Cabbage', 756.15, 18903.75, 25),
(2018, 'Bakun', 'Lettuce', 94.73, 947.3, 10),
(2018, 'Bakun', 'Cauliflower', 0, 0, 0),
(2018, 'Bakun', 'Snap Beans', 382.27, 3437.4, 8.99),
(2018, 'Bakun', 'Garden Peas', 198.39, 1421.18, 7.16),
(2018, 'Bakun', 'Sweet Pepper', 171.77, 1374.16, 8),
(2018, 'Bakun', 'White Potato', 1737.56, 34753.2, 20),
(2018, 'Bakun', 'Carrots', 494.2, 7907, 16),
(2018, 'Bokod', 'Cabbage', 107.87, 2092.52, 19.4),
(2018, 'Bokod', 'Chinese Cabbage', 63.57, 953.55, 15),
(2018, 'Bokod', 'Lettuce', 24.9, 249, 10),
(2018, 'Bokod', 'Cauliflower', 26, 302, 11.62),
(2018, 'Bokod', 'Snap Beans', 75.81, 602.58, 7.95),
(2018, 'Bokod', 'Garden Peas', 55.72, 222.88, 4),
(2018, 'Bokod', 'Sweet Pepper', 44.5, 356, 8),
(2018, 'Bokod', 'White Potato', 70.28, 1014.36, 14.43),
(2018, 'Bokod', 'Carrots', 63.92, 856.8, 13.4),
(2018, 'Buguias', 'Cabbage', 2124, 43302, 20.39),
(2018, 'Buguias', 'Chinese Cabbage', 1098.75, 20522, 18.68),
(2018, 'Buguias', 'Lettuce', 244.75, 2194.25, 8.97),
(2018, 'Buguias', 'Cauliflower', 29.35, 317.2, 10.81),
(2018, 'Buguias', 'Snap Beans', 44.7, 339.5, 7.6),
(2018, 'Buguias', 'Garden Peas', 75.7, 420.4, 5.55),
(2018, 'Buguias', 'Sweet Pepper', 75.6, 558.9, 7.39),
(2018, 'Buguias', 'White Potato', 3234.9, 51396.2, 15.89),
(2018, 'Buguias', 'Carrots', 2198, 32898.5, 14.97),
(2018, 'Itogon', 'Cabbage', 61, 610, 10),
(2018, 'Itogon', 'Chinese Cabbage', 72.5, 725, 10),
(2018, 'Itogon', 'Lettuce', 12, 108, 9),
(2018, 'Itogon', 'Cauliflower', 30, 300, 10),
(2018, 'Itogon', 'Snap Beans', 53, 371, 7),
(2018, 'Itogon', 'Garden Peas', 30, 105, 3.5),
(2018, 'Itogon', 'Sweet Pepper', 29, 174, 6),
(2018, 'Itogon', 'White Potato', 25, 250, 10),
(2018, 'Itogon', 'Carrots', 25, 250, 10),
(2018, 'Kabayan', 'Cabbage', 708, 10780, 15.23),
(2018, 'Kabayan', 'Chinese Cabbage', 90.55, 1704.1, 18.82),
(2018, 'Kabayan', 'Lettuce', 25.8, 152, 5.89),
(2018, 'Kabayan', 'Cauliflower', 390, 4270, 10.95),
(2018, 'Kabayan', 'Snap Beans', 100, 760, 7.6),
(2018, 'Kabayan', 'Garden Peas', 65, 325, 5),
(2018, 'Kabayan', 'Sweet Pepper', 100, 468, 4.68),
(2018, 'Kabayan', 'White Potato', 241, 4525, 18.78),
(2018, 'Kabayan', 'Carrots', 881, 13458, 15.28),
(2018, 'Kapangan', 'Cabbage', 2.88, 30.96, 10.75),
(2018, 'Kapangan', 'Chinese Cabbage', 1.25, 13.75, 11),
(2018, 'Kapangan', 'Lettuce', 1.27, 14.74, 11.62),
(2018, 'Kapangan', 'Cauliflower', 2.03, 18.83, 9.28),
(2018, 'Kapangan', 'Snap Beans', 92.99, 1080.5, 11.62),
(2018, 'Kapangan', 'Garden Peas', 74, 604, 8.16),
(2018, 'Kapangan', 'Sweet Pepper', 211, 2436, 11.55),
(2018, 'Kapangan', 'White Potato', 1, 10, 10),
(2018, 'Kapangan', 'Carrots', 0.05, 0.2, 4),
(2018, 'Kibungan', 'Cabbage', 2479, 37230, 15.02),
(2018, 'Kibungan', 'Chinese Cabbage', 126.5, 1934.5, 15.29),
(2018, 'Kibungan', 'Lettuce', 57, 511, 8.96),
(2018, 'Kibungan', 'Cauliflower', 6.85, 26.6, 3.88),
(2018, 'Kibungan', 'Snap Beans', 107, 954, 8.92),
(2018, 'Kibungan', 'Garden Peas', 44.1, 349, 7.91),
(2018, 'Kibungan', 'Sweet Pepper', 144.5, 1028, 7.11),
(2018, 'Kibungan', 'White Potato', 2326, 46502, 19.99),
(2018, 'Kibungan', 'Carrots', 260, 3774, 14.52),
(2018, 'La Trinidad', 'Cabbage', 53.24, 759.96, 14.27),
(2018, 'La Trinidad', 'Chinese Cabbage', 63.65, 937.89, 14.74),
(2018, 'La Trinidad', 'Lettuce', 71, 863.69, 12.16),
(2018, 'La Trinidad', 'Cauliflower', 18.27, 219.18, 12),
(2018, 'La Trinidad', 'Snap Beans', 94.66, 740.54, 7.82),
(2018, 'La Trinidad', 'Garden Peas', 49.09, 175.76, 3.58),
(2018, 'La Trinidad', 'Sweet Pepper', 57.4, 390.5, 6.8),
(2018, 'La Trinidad', 'White Potato', 28.1, 404.28, 14.39),
(2018, 'La Trinidad', 'Carrots', 27.87, 243.27, 8.73),
(2018, 'Mankayan', 'Cabbage', 1157.53, 30414.56, 26.28),
(2018, 'Mankayan', 'Chinese Cabbage', 812.81, 17399.9, 21.41),
(2018, 'Mankayan', 'Lettuce', 184.4, 2151.34, 11.69),
(2018, 'Mankayan', 'Cauliflower', 177, 1934, 10.93),
(2018, 'Mankayan', 'Snap Beans', 311.63, 2665.93, 8.55),
(2018, 'Mankayan', 'Garden Peas', 170.87, 978.22, 5.72),
(2018, 'Mankayan', 'Sweet Pepper', 168.87, 1130.4, 6.69),
(2018, 'Mankayan', 'White Potato', 1705.7, 39977.9, 23.44),
(2018, 'Mankayan', 'Carrots', 503.54, 8163.63, 16.21),
(2018, 'Sablan', 'Cabbage', 0, 0, 0),
(2018, 'Sablan', 'Chinese Cabbage', 2.9, 58, 20),
(2018, 'Sablan', 'Lettuce', 0, 0, 0),
(2018, 'Sablan', 'Cauliflower', 0, 0, 0),
(2018, 'Sablan', 'Snap Beans', 229.54, 2295.4, 10),
(2018, 'Sablan', 'Garden Peas', 12.99, 95.16, 7.33),
(2018, 'Sablan', 'Sweet Pepper', 67.01, 536.08, 8),
(2018, 'Sablan', 'White Potato', 0, 0, 0),
(2018, 'Sablan', 'Carrots', 0, 0, 0),
(2018, 'Tuba', 'Cabbage', 14.5, 245, 16.9),
(2018, 'Tuba', 'Chinese Cabbage', 31.63, 545.25, 17.24),
(2018, 'Tuba', 'Lettuce', 9.5, 57, 6),
(2018, 'Tuba', 'Cauliflower', 0, 0, 0),
(2018, 'Tuba', 'Snap Beans', 179.38, 2152.5, 12),
(2018, 'Tuba', 'Garden Peas', 23, 184, 8),
(2018, 'Tuba', 'Sweet Pepper', 16.5, 148.5, 9),
(2018, 'Tuba', 'White Potato', 55, 660, 12),
(2018, 'Tuba', 'Carrots', 27.44, 329.24, 12),
(2018, 'Tublay', 'Cabbage', 42.85, 531.5, 12.4),
(2018, 'Tublay', 'Chinese Cabbage', 18.99, 281.66, 14.83),
(2018, 'Tublay', 'Lettuce', 23.7, 158.5, 6.69),
(2018, 'Tublay', 'Cauliflower', 56, 546.18, 9.75),
(2018, 'Tublay', 'Snap Beans', 42.25, 318.8, 7.55),
(2018, 'Tublay', 'Garden Peas', 27.5, 105, 3.82),
(2018, 'Tublay', 'Sweet Pepper', 93.5, 634.4, 6.79),
(2018, 'Tublay', 'White Potato', 14, 186.63, 13.33),
(2018, 'Tublay', 'Carrots', 5.5, 64, 11.64),
(2018, 'Total', 'Cabbage', 9324.39, 174171.32, 18.68),
(2018, 'Total', 'Chinese Cabbage', 3345.02, 67659.25, 20.23),
(2018, 'Total', 'Lettuce', 822.27, 7966.98, 9.69),
(2018, 'Total', 'Cauliflower', 766.37, 8229.68, 10.74),
(2018, 'Total', 'Snap Beans', 1796.14, 16419.39, 9.14),
(2018, 'Total', 'Garden Peas', 889.46, 5221.96, 5.87),
(2018, 'Total', 'Sweet Pepper', 1198.87, 9354.95, 7.8),
(2018, 'Total', 'White Potato', 10484.04, 198203.09, 18.91),
(2018, 'Total', 'Carrots', 5312.96, 81101.74, 15.26),
(2019, 'Atok', 'Cabbage', 1647.76, 29862.15, 18.12),
(2019, 'Atok', 'Chinese Cabbage', 294.34, 6246.27, 21.22),
(2019, 'Atok', 'Lettuce', 332.7, 2429.59, 7.3),
(2019, 'Atok', 'Cauliflower', 44.93, 430.43, 9.58),
(2019, 'Atok', 'Snap Beans', 100.08, 765.77, 7.65),
(2019, 'Atok', 'Garden Peas', 62.68, 316.71, 5.05),
(2019, 'Atok', 'Sweet Pepper', 27.52, 169.8, 6.17),
(2019, 'Atok', 'White Potato', 1339.1, 24900.49, 18.59),
(2019, 'Atok', 'Carrots', 840.71, 12058.34, 14.34),
(2019, 'Bakun', 'Cabbage', 1658.51, 33146.8, 19.99),
(2019, 'Bakun', 'Chinese Cabbage', 768.23, 17952.23, 23.37),
(2019, 'Bakun', 'Lettuce', 93.91, 949.1, 10.11),
(2019, 'Bakun', 'Cauliflower', 0, 0, 0),
(2019, 'Bakun', 'Snap Beans', 390.58, 3439.4, 8.81),
(2019, 'Bakun', 'Garden Peas', 193.78, 1393.12, 7.19),
(2019, 'Bakun', 'Sweet Pepper', 186.22, 1489.76, 8),
(2019, 'Bakun', 'White Potato', 1744.2, 34884, 20),
(2019, 'Bakun', 'Carrots', 514.78, 8236.48, 16),
(2019, 'Bokod', 'Cabbage', 135.43, 2708.6, 20),
(2019, 'Bokod', 'Chinese Cabbage', 77.45, 1161.75, 15),
(2019, 'Bokod', 'Lettuce', 28, 280, 10),
(2019, 'Bokod', 'Cauliflower', 68, 816, 12),
(2019, 'Bokod', 'Snap Beans', 72, 576, 8),
(2019, 'Bokod', 'Garden Peas', 64, 256, 4),
(2019, 'Bokod', 'Sweet Pepper', 72, 576, 8),
(2019, 'Bokod', 'White Potato', 150, 2184, 14.56),
(2019, 'Bokod', 'Carrots', 115, 1520, 13.22),
(2019, 'Buguias', 'Cabbage', 2463.3, 53112.6, 21.56),
(2019, 'Buguias', 'Chinese Cabbage', 1193.2, 23321, 19.54),
(2019, 'Buguias', 'Lettuce', 287.25, 2806.5, 9.77),
(2019, 'Buguias', 'Cauliflower', 38.75, 444.45, 11.47),
(2019, 'Buguias', 'Snap Beans', 48.8, 381, 7.81),
(2019, 'Buguias', 'Garden Peas', 81.55, 475.3, 5.83),
(2019, 'Buguias', 'Sweet Pepper', 83.45, 650.85, 7.8),
(2019, 'Buguias', 'White Potato', 3541, 65236, 18.42),
(2019, 'Buguias', 'Carrots', 2346, 36472, 15.55),
(2019, 'Itogon', 'Cabbage', 41, 410, 10),
(2019, 'Itogon', 'Chinese Cabbage', 72.5, 725, 10),
(2019, 'Itogon', 'Lettuce', 16, 144, 9),
(2019, 'Itogon', 'Cauliflower', 34, 340, 10),
(2019, 'Itogon', 'Snap Beans', 56, 392, 7),
(2019, 'Itogon', 'Garden Peas', 30, 105, 3.5),
(2019, 'Itogon', 'Sweet Pepper', 29, 174, 6),
(2019, 'Itogon', 'White Potato', 35, 350, 10),
(2019, 'Itogon', 'Carrots', 35, 350, 10),
(2019, 'Kabayan', 'Cabbage', 725, 14145, 19.51),
(2019, 'Kabayan', 'Chinese Cabbage', 88.8, 2159, 24.31),
(2019, 'Kabayan', 'Lettuce', 21, 118, 5.62),
(2019, 'Kabayan', 'Cauliflower', 472, 6969, 14.76),
(2019, 'Kabayan', 'Snap Beans', 118, 941, 7.97),
(2019, 'Kabayan', 'Garden Peas', 83, 415, 5),
(2019, 'Kabayan', 'Sweet Pepper', 99, 678, 6.85),
(2019, 'Kabayan', 'White Potato', 258, 5065, 19.63),
(2019, 'Kabayan', 'Carrots', 1015, 17820, 17.56),
(2019, 'Kapangan', 'Cabbage', 5.9, 63.5, 10.76),
(2019, 'Kapangan', 'Chinese Cabbage', 2.92, 33.9, 11.61),
(2019, 'Kapangan', 'Lettuce', 3.04, 34.87, 11.47),
(2019, 'Kapangan', 'Cauliflower', 1.68, 16.8, 10),
(2019, 'Kapangan', 'Snap Beans', 104.5, 1241, 11.88),
(2019, 'Kapangan', 'Garden Peas', 74.9, 361, 4.82),
(2019, 'Kapangan', 'Sweet Pepper', 583, 6378.5, 10.94),
(2019, 'Kapangan', 'White Potato', 0.35, 0.18, 0.5),
(2019, 'Kapangan', 'Carrots', 0.06, 0.14, 2.25),
(2019, 'Kibungan', 'Cabbage', 2360.75, 48635.4, 20.6),
(2019, 'Kibungan', 'Chinese Cabbage', 90, 1223, 13.59),
(2019, 'Kibungan', 'Lettuce', 67.5, 650, 9.63),
(2019, 'Kibungan', 'Cauliflower', 4.3, 16.4, 3.81),
(2019, 'Kibungan', 'Snap Beans', 115, 1126, 9.79),
(2019, 'Kibungan', 'Garden Peas', 22.5, 180.25, 8.01),
(2019, 'Kibungan', 'Sweet Pepper', 79, 754, 9.54),
(2019, 'Kibungan', 'White Potato', 2303, 45970, 19.96),
(2019, 'Kibungan', 'Carrots', 332, 5192, 15.64),
(2019, 'La Trinidad', 'Cabbage', 57, 969, 17),
(2019, 'La Trinidad', 'Chinese Cabbage', 70.2, 1193.4, 17),
(2019, 'La Trinidad', 'Lettuce', 84.45, 1182.3, 14),
(2019, 'La Trinidad', 'Cauliflower', 19.3, 289.5, 15),
(2019, 'La Trinidad', 'Snap Beans', 67, 603, 9),
(2019, 'La Trinidad', 'Garden Peas', 50, 200, 4),
(2019, 'La Trinidad', 'Sweet Pepper', 72, 648, 9),
(2019, 'La Trinidad', 'White Potato', 105.57, 1801.65, 17.07),
(2019, 'La Trinidad', 'Carrots', 86.4, 936.9, 10.84),
(2019, 'Mankayan', 'Cabbage', 1680, 44105, 26.25),
(2019, 'Mankayan', 'Chinese Cabbage', 1180, 25190, 21.35),
(2019, 'Mankayan', 'Lettuce', 226, 2666, 11.8),
(2019, 'Mankayan', 'Cauliflower', 180, 1970, 10.94),
(2019, 'Mankayan', 'Snap Beans', 322, 2748.9, 8.54),
(2019, 'Mankayan', 'Garden Peas', 180, 1035, 5.75),
(2019, 'Mankayan', 'Sweet Pepper', 199, 1313, 6.6),
(2019, 'Mankayan', 'White Potato', 2250, 52550, 23.36),
(2019, 'Mankayan', 'Carrots', 571.8, 9212.4, 16.11),
(2019, 'Sablan', 'Cabbage', 0, 0, 0),
(2019, 'Sablan', 'Chinese Cabbage', 2.8, 56, 20),
(2019, 'Sablan', 'Lettuce', 0, 0, 0),
(2019, 'Sablan', 'Cauliflower', 0, 0, 0),
(2019, 'Sablan', 'Snap Beans', 213.77, 2137.7, 10),
(2019, 'Sablan', 'Garden Peas', 12.41, 89.8, 7.24),
(2019, 'Sablan', 'Sweet Pepper', 79.89, 639.12, 8),
(2019, 'Sablan', 'White Potato', 0, 0, 0),
(2019, 'Sablan', 'Carrots', 0, 0, 0),
(2019, 'Tuba', 'Cabbage', 10, 180, 18),
(2019, 'Tuba', 'Chinese Cabbage', 15, 270, 18),
(2019, 'Tuba', 'Lettuce', 3.5, 20.94, 5.98),
(2019, 'Tuba', 'Cauliflower', 0, 0, 0),
(2019, 'Tuba', 'Snap Beans', 110, 1320, 12),
(2019, 'Tuba', 'Garden Peas', 21.04, 168.32, 8),
(2019, 'Tuba', 'Sweet Pepper', 17.04, 153.36, 9),
(2019, 'Tuba', 'White Potato', 8, 96, 12),
(2019, 'Tuba', 'Carrots', 8, 96, 12),
(2019, 'Tublay', 'Cabbage', 41.5, 410.5, 9.89),
(2019, 'Tublay', 'Chinese Cabbage', 43.6, 397, 9.11),
(2019, 'Tublay', 'Lettuce', 72.6, 284.5, 3.92),
(2019, 'Tublay', 'Cauliflower', 75.05, 630.4, 8.4),
(2019, 'Tublay', 'Snap Beans', 74.9, 571.75, 7.63),
(2019, 'Tublay', 'Garden Peas', 52, 71.9, 1.38),
(2019, 'Tublay', 'Sweet Pepper', 130.3, 830.65, 6.37),
(2019, 'Tublay', 'White Potato', 18.5, 275.5, 14.89),
(2019, 'Tublay', 'Carrots', 8.6, 102.7, 11.94),
(2019, 'Total', 'Cabbage', 10826.15, 227748.55, 21.04),
(2019, 'Total', 'Chinese Cabbage', 3899.04, 79928.55, 20.5),
(2019, 'Total', 'Lettuce', 1235.95, 11565.8, 9.36),
(2019, 'Total', 'Cauliflower', 938.01, 11922.98, 12.71),
(2019, 'Total', 'Snap Beans', 1792.63, 16243.52, 9.06),
(2019, 'Total', 'Garden Peas', 927.86, 5067.4, 5.46),
(2019, 'Total', 'Sweet Pepper', 1657.42, 14455.04, 8.72),
(2019, 'Total', 'White Potato', 11752.72, 233312.82, 19.85),
(2019, 'Total', 'Carrots', 5873.35, 91996.95, 15.66);

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

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `municipalID` int(10) NOT NULL,
  `municipalName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`municipalID`, `municipalName`) VALUES
(1, 'Atok'),
(2, 'Bakun'),
(3, 'Bokod'),
(4, 'Buguias'),
(5, 'Itogon'),
(6, 'Kabayan'),
(7, 'Kapangan'),
(8, 'Kibungan'),
(9, 'La Trinidad'),
(10, 'Mankayan'),
(11, 'Sablan'),
(12, 'Tuba'),
(13, 'Tublay');

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
  `userType` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userFirstName`, `userLastName`, `userAge`, `userGender`, `userLocation`, `userType`, `username`, `password`) VALUES
(0, 'test', 'test', 26, 'Ma', 0, '', 'test', '$2y$10$lWVyFZhKZ3JgvwBroJoyqO.fDz3cLcz.IrAqkxb1VAacKoZfAmPDG'),
(0, 'test', 'test', 30, 'Ma', 31, 'Farmer', 'test123', '$2y$10$EUSKirkVwJaew0sCcIGZz..V9JczJyG8rYPGcwHj.gS92oFIAtU.a'),
(0, 'sdf', 'dsf', 32, 'Ma', 324, 'Coop', '', '$2y$10$ljRJ0bStWgyuBSPplgqFV.wVDvj5iNlEbvL60nwpNMdy2Vf/o70NS'),
(0, 'Anna Rhodora', 'Quitaleg', 35, 'Fe', 0, 'Coop', 'Admin', '$2y$10$2Z2S2Mgjn9OrPgHcUfL5GeQmfBd91NkxCCyEYa4mE2MFYs8pNTjiG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops_table`
--
ALTER TABLE `crops_table`
  ADD PRIMARY KEY (`cropID`);

--
-- Indexes for table `farmers_table`
--
ALTER TABLE `farmers_table`
  ADD PRIMARY KEY (`farmerID`);

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
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`municipalID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops_table`
--
ALTER TABLE `crops_table`
  MODIFY `cropID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmers_table`
--
ALTER TABLE `farmers_table`
  MODIFY `farmerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `historicaltable`
--
ALTER TABLE `historicaltable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `maintable`
--
ALTER TABLE `maintable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `municipalID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
