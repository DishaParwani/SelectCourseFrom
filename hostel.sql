-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 05:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `block_no` int(11) NOT NULL,
  `bname` varchar(30) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `htype` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`block_no`, `bname`, `cost`, `htype`) VALUES
(1, 'Acharya', 1200, 'MALE'),
(2, 'Annapurna', 1500, 'MALE'),
(3, 'Aditya', 1000, 'MALE'),
(4, 'Apporva', 1200, 'FEMALE'),
(5, 'Asraya', 1600, 'FEMALE'),
(6, 'Sangeeta', 900, 'FEMALE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`block_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
