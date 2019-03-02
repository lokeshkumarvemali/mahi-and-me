-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 05:22 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college details`
--

-- --------------------------------------------------------

--
-- Table structure for table `college name`
--

CREATE TABLE `college name` (
  `serial no.` int(100) NOT NULL,
  `college name` varchar(50) NOT NULL,
  `gre score` int(3) NOT NULL,
  `ielts` int(2) NOT NULL,
  `toefl` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college name`
--

INSERT INTO `college name` (`serial no.`, `college name`, `gre score`, `ielts`, `toefl`) VALUES
(1, 'university of dellas, texas', 300, 7, 110),
(2, 'university of missouri- kansas city', 300, 8, 115);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college name`
--
ALTER TABLE `college name`
  ADD PRIMARY KEY (`serial no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college name`
--
ALTER TABLE `college name`
  MODIFY `serial no.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
