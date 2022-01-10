-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Okt 03, 2021 at 06:01 PM
-- Server version: 10.4.6-MariaDB


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_Code` int(15) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` varchar(8) NOT NULL,
  `Release_Date` date NOT NULL,
  `Category` varchar(8) NOT NULL,
  `Item_Type` varchar(8) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_Code`, `Item_Name`, `Price`, `Release_Date`, `Category`, `Item_Type`) VALUES
('T737001', 'Sleepless', '$25', '20/07/13','Top','Crop Top LS'),
('T737002', 'Selcouth', '$25', '20/08/04','Top','Crop Top LS'),
('T862001', 'Healing', '$30', '20/07/31','Top','Tshirts'),
('T862002', 'The_First_Curse', '$30', '20/08/14','Top','Tshirts'),
('T642003', 'Linverse_Classic', '$15', '20/08/05','Top','Crop Top SS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
