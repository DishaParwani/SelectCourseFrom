-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 05:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbslab`
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
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Phone No.`, `Gender`, `DOB`, `course`) VALUES
('disha', 'disha.parwani9927@gmail.com', 7702087500, 'F', '1997-06-27', 'Data Structures'),
('rishav', 'gupta.rishav96@gmail.com', 8961682172, 'M', '1996-08-26', 'Data Structures'),
('rajesh', 'rparwani@hotmail.com', 9000324530, 'M', '1978-06-06', 'esd'),
('vaibhav', 'vaibhavtk97@gmail.com', 9920118778, 'M', '1997-09-20', 'Data Structures');
