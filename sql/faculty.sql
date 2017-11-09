-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 12:46 PM
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `stdate` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `location`, `dob`, `stdate`, `salary`) VALUES
(1, 'Rajesh', 'Manipal', '1976-03-26', '2015-09-17', 100000),
(2, 'Aditya', 'Mumbai', '1989-04-27', '2012-04-18', 100000),
(3, 'Daniyal', 'Kolkata', '1979-04-28', '2009-07-10', 150000),
(4, 'Veena', 'Manipal', '1984-05-10', '2012-04-01', 200000),
(5, 'Kamlesh', 'Bhopal', '2004-04-18', '2017-10-05', 120),
(6, 'Charan', 'Kolkata', '1984-05-05', '2007-03-01', 1000000),
(7, 'Nisha Shetty', 'Bhopal', '1987-04-21', '2015-03-06', 500000),
(8, 'Vivek', 'Mumbai', '1992-04-10', '2015-08-19', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
