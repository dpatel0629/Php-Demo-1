-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `hobies` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `profile_image` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `gender`, `hobies`, `state`, `district`, `city`, `pincode`, `profile_image`, `address`, `password`) VALUES
(20, 'dhruv ', 'patel', 'dhruvpatel32@gmail.com', '7435956741', 'male', 'Learning,Writing,', 'gujrat', 'vadodara', 'vadodara', '384256', 'user.png', 'vadodara', '202cb962ac59075b964b07152d234b70'),
(21, 'Hitesh ', 'Patel', 'hiteshpatel34@gmail.com', '9574604567', 'male', 'Dance,Photography,', 'gujrat', 'vadodara', 'vadodara', '384265', 'hitesh.png', 'vadodara', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `admin_id`) VALUES
(17, 'Anne', 'Roach', 'hafisoju@mailinator.com', '+1 (395) 75', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 21),
(18, 'Jerry', 'Fox', 'xafo@mailinator.com', '+1 (285) 29', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 20),
(19, 'Dai', 'Fernandez', 'rujoro@mailinator.com', '+1 (425) 97', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
