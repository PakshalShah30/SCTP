-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 05:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `city` text NOT NULL,
  `starting_point` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `hours` int(30) NOT NULL,
  `plan` varchar(5000) NOT NULL,
  `description` varchar(32000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`city`, `starting_point`, `zone`, `hours`, `plan`, `description`) VALUES
('Mumbai', 'Zone1', 'Zone1', 3, 'Marine lines', 'XYZ'),
('Mumbai', 'Zone2', 'Zone1', 4, 'Marine lines', 'XYZ'),
('Mumbai', 'Zone1', 'Zone2', 4, 'Bandra Sealink', 'ABC'),
('Mumbai', 'Zone2', 'Zone2', 3, 'Bandra Sealink', 'ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD KEY `starting_point` (`starting_point`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
