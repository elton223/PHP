-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 10:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `p149pm_roombook`
--

CREATE TABLE `p149pm_roombook` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `FName` varchar(255) DEFAULT NULL,
  `LName` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `TRoom` varchar(10) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p149pm_roombook`
--

INSERT INTO `p149pm_roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `cin`, `cout`) VALUES
(4, 't', 'test', 'test', 'eltonmarkaj1@gmail.com', 'england', 699810152, '2', '2', '1', '2018-05-24', '2018-05-30'),
(10, 'Miss.TTTTTT', 'Elton', 'Markaj', '1@r.com', 'Albania', 699810152, 'Deluxe Roo', 'Double', '7', '2018-06-22', '2018-06-21'),
(12, 'Miss.', 'Elton', 'Markaj', 'admin@admin.com', 'Albania', 699810152, 'Deluxe Roo', 'Double', '4', '2018-06-22', '2018-06-30'),
(13, 'Mr.', 'Elton', 'Markaj', 'eltonmarkaj0@gmail.com', 'Albania', 699810152, 'Deluxe Roo', 'Double', '7', '2018-06-21', '2018-06-28'),
(14, 'Miss.', 'Elton', 'Markaj', '1@r.com', 'Albania', 699810152, 'Deluxe Roo', 'Double', '3', '2018-06-21', '2018-06-28'),
(15, 'Miss.', 'Elton', 'Markaj', 'dsafg@sadg.com', 'Albania', 699810152, 'Deluxe Roo', 'Triple', '3', '2018-06-21', '2018-06-29'),
(16, 'Dr.', 'testing', 'Markaj', '1@r.com', 'Albania', 699810152, 'Superior R', 'Double', '6', '2018-06-15', '2018-06-29'),
(17, 'Dr.', 'fdashKJL', 'Markaj', 'asdf@gnmaegf.dsjfk', 'Albania', 699810152, 'Guest Hous', 'Single', '5', '2018-06-08', '2018-06-30'),
(18, 'Miss.', 'TESTFKJDMSDFRLKDS', 'Markaj', 'admin@admin.com', 'Albania', 699810152, 'Deluxe Roo', 'Triple', '2', '2018-06-29', '2018-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p149pm_roombook`
--
ALTER TABLE `p149pm_roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p149pm_roombook`
--
ALTER TABLE `p149pm_roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
