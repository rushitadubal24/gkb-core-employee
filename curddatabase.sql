-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 05:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpcurd`
--

DROP TABLE IF EXISTS `phpcurd`;
CREATE TABLE `phpcurd` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Gender` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Jdate` date NOT NULL,
  `DeptName` varchar(120) NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Hobbies` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phpcurd`
--

INSERT INTO `phpcurd` (`id`, `FirstName`, `LastName`, `Gender`, `Email`, `Jdate`, `DeptName`, `Image`, `Hobbies`) VALUES
(1, 'Test', 'Test', 'Female', 'test@gmail.com', '2020-09-15', 'HR', 'Capture.png', 'Coding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpcurd`
--
ALTER TABLE `phpcurd`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
