-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2017 at 07:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone No.` bigint(10) NOT NULL,
  `Gender` char(1) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Phone No.`, `Gender`, `DOB`) VALUES
('disha', 'disha.parwani9927@gmail.com', 7702087500, 'F', '27/061997'),
('rishav', 'gupta.rishav96@gmail.com', 8961682172, 'M', '26/08/1996'),
('vaibhav', 'vaibhavtk97@gmail.com', 9920118778, 'M', '20/09/1997');
