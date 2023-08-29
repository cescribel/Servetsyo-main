-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 02:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servetsyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `DogInfo` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(21) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `CatchLocation` varchar(255) NOT NULL,
  `DogImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `DogInfo`, `Name`, `Age`, `Gender`, `CatchLocation`, `DogImg`) VALUES
(12, 'Servetcoimagedogs', 'Servetcoimagedogs', 0, 'Servetcoimagedogs', 'Servetcoimagedogs', 'spiritual-renewal.jpg'),
(13, 'Servetcoimagedogs', 'Servetcoimagedogs', 0, 'Servetcoimagedogs', 'Servetcoimagedogs', 'victory.jpg'),
(14, 'Servetcoimagedogs', 'Servetcoimagedogs', 0, 'Servetcoimagedogs', 'Servetcoimagedogs', 'Picture1.png'),
(15, 'victory', 'victory', 0, 'victory', 'victory', 'victory.jpg'),
(16, 'try', 'try', 0, 'try', 'try', 'Leaning-Tower-of-Pisa-Italy.webp'),
(17, 'eto naaa', 'eto naaa', 0, 'eto naaa', 'eto naaa', 'A+Sure+Foundation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dogs_details`
--

CREATE TABLE `dogs_details` (
  `id` int(11) NOT NULL,
  `Name` varchar(258) NOT NULL,
  `DogInfo` varchar(258) NOT NULL,
  `Age` varchar(12) NOT NULL,
  `CatchLocation` varchar(255) NOT NULL,
  `Gender` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs_details`
--

INSERT INTO `dogs_details` (`id`, `Name`, `DogInfo`, `Age`, `CatchLocation`, `Gender`) VALUES
(18, 'dsa', 'dsa', 'dsa', '', ''),
(19, 'sadas', 'dsa', 'das', '', ''),
(20, 'dsa', 'das', 'das', '', ''),
(21, 'das', 'das', 'das', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `EventName` varchar(256) NOT NULL,
  `Details` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `EventName`, `Details`) VALUES
(1, 'dsa', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `FullN` varchar(256) NOT NULL,
  `PhoneNum` int(18) NOT NULL,
  `Sched` varchar(128) NOT NULL,
  `Date` varchar(128) NOT NULL,
  `Time` varchar(128) NOT NULL,
  `Message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `FullN`, `PhoneNum`, `Sched`, `Date`, `Time`, `Message`) VALUES
(1, 'ce', 0, 'Neuter', 'date', 'tine', 'note');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Fullname` varchar(128) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNum` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Email`, `Password`, `Fullname`, `Address`, `PhoneNum`) VALUES
(11, 'cescribel@gmail', '81dc9bdb52d04dc20036dbd8313ed055', 'cescribel', 'das', '1285'),
(12, 'cescribel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'cedric', 'address', 'number'),
(13, 'ds', '5f039b4ef0058a1d652f13d612375a5b', 'dsa', 'dsa', 'das'),
(14, 'cescribe22l@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'name', 'name name', 'namne'),
(15, 'c', '4a8a08f09d37b73795649038408b5f33', 'c', 'c', 'c'),
(17, 'c@c', '584e73f620d3f5f2a8f3db5e78eb1baf', 'cescribel', 'das', 'number ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs_details`
--
ALTER TABLE `dogs_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_4` (`Email`),
  ADD KEY `Email_3` (`Email`);
ALTER TABLE `user` ADD FULLTEXT KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dogs_details`
--
ALTER TABLE `dogs_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
