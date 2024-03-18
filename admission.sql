-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 22, 2023 at 03:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(10) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Middlename` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `POB` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `Degree`, `Title`, `Surname`, `Firstname`, `Middlename`, `Email`, `DOB`, `POB`, `Username`, `Password`, `Code`) VALUES
(2, 'degree', 'Mr', 'Bador', 'Gideon', 'Opata', 'opatagideon25@gmail.com', '2003-04-24', 'Berekum', 'Gideon', 'icui4cuitN#', 'CUCG-001'),
(3, 'diploma', 'Mr', 'bador ', 'opata', 'gideon', 'opatagideon@gmail.com', '2023-09-06', 'Berekum', 'Gideon', 'icui4cuitN#', 'CUCG-001'),
(4, 'diploma', 'Mr', 'bador ', 'opata', 'gideon', 'opatagideon@gmail.com', '2023-09-06', 'Berekum', 'Gideon', 'icui4cuitN#', 'CUCG-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
