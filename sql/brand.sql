-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brand`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `departure` varchar(10) NOT NULL,
  `arrival` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `D_Date` date NOT NULL,
  `R_Date` date NOT NULL,
  `triptype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `departure`, `arrival`, `class`, `D_Date`, `R_Date`, `triptype`) VALUES
(1, 'India', 'Korea', '2023-01-04', '2023-01-19', '0000-00-00', 'round'),
(2, 'India', 'Korea', 'Bussiness', '2023-01-04', '2023-01-19', 'round'),
(3, 'India', 'Singapore', 'Economy', '2023-01-07', '2023-01-31', 'oneway');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `dtime` varchar(10) NOT NULL,
  `atime` varchar(10) NOT NULL,
  `fclass` int(3) NOT NULL,
  `economy` int(3) NOT NULL,
  `gtotal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `departure`, `arrival`, `dtime`, `atime`, `fclass`, `economy`, `gtotal`) VALUES
(3, 'gulbarga', 'yelahanka', '2023-01-06', '2023-01-17', 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'akash', 'akash@gmail.com', 'akash@666'),
(2, 'abu', 'abu@gmail.com', 'abu@12345'),
(3, 'abb', 'abb@gmail.com', 'aabb'),
(4, 'admin', 'admin@gmail.com', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(6) UNSIGNED NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `stationStart` varchar(50) NOT NULL,
  `stationEnd` varchar(50) NOT NULL,
  `visitorClass` varchar(15) NOT NULL,
  `seats` char(1) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `checkInDate` date NOT NULL,
  `checkInTime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `userName`, `email`, `phone`, `stationStart`, `stationEnd`, `visitorClass`, `seats`, `amount`, `checkInDate`, `checkInTime`) VALUES
(1, 'akash hiremath', 'akash@gmail.com', '7795021210', 'Yelhanka Junction', 'Gulbarga', 'First Class', '2', 'Rs.250', '2023-01-11', '19:00 PM'),
(2, 'akash hiremath', 'akash@gmail.com', '7795021210', 'Raichur', 'Bangalore', 'Second Class', '3', 'Rs.250', '2023-01-18', '20:15 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
