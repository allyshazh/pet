-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 10:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('allysha@gmail.com', 'ally123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `num` int(15) NOT NULL,
  `dates` date NOT NULL,
  `daten` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `type`, `remark`, `num`, `dates`, `daten`, `gender`) VALUES
(16, 'prototype', 'Cat', 'he hates meat', 12354, '2021-07-27', '2021-08-07', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`) VALUES
('Nurul Liyana', 'nrl.liyana01@gmail.com', 'i ned elp my cat hungy'),
('Lee', 'wusyaname@yahoo.com', 'can i come n pet all cats pls'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('Nurul Liyana', 'katycat.perry123@gmail.com', 'sdfestgwetrg'),
('', '', ''),
('Nurul Liyana', 'nrl.liyana01@gmail.com', 'oisdhfosdf'),
('', '', ''),
('Allysha', 'allyshazullh@gmail.com', '5 star place'),
('khalida khairuddin', 'khalidakhairuddin57@gmail.com', 'stream D.O Rose');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `custID` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` int(10) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`custID`, `email`, `firstname`, `lastname`, `phone`, `password1`, `password2`) VALUES
('60dc261bba09c', 'syhmi23@gmail.com', 'Ahmad', 'Syahmi', 176350603, '123', '123'),
('60dd3c305f83e', 'wusyaname@gmail.com', 'Nurul', 'Liyana', 483882, 'lee010101', 'lee010101'),
('60dda5dc6eaa3', 'allyshazullh@gmail.com', 'Allysha', 'Zull Hizam', 2147483647, 'allysha123', 'allysha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`custID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
