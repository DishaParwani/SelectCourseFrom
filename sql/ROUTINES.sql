-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 06:12 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `information_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `ROUTINES`
--

CREATE TEMPORARY TABLE `ROUTINES` (
  `SPECIFIC_NAME` varchar(64) NOT NULL DEFAULT '',
  `ROUTINE_CATALOG` varchar(512) NOT NULL DEFAULT '',
  `ROUTINE_SCHEMA` varchar(64) NOT NULL DEFAULT '',
  `ROUTINE_NAME` varchar(64) NOT NULL DEFAULT '',
  `ROUTINE_TYPE` varchar(9) NOT NULL DEFAULT '',
  `DATA_TYPE` varchar(64) NOT NULL DEFAULT '',
  `CHARACTER_MAXIMUM_LENGTH` int(21) DEFAULT NULL,
  `CHARACTER_OCTET_LENGTH` int(21) DEFAULT NULL,
  `NUMERIC_PRECISION` int(21) DEFAULT NULL,
  `NUMERIC_SCALE` int(21) DEFAULT NULL,
  `CHARACTER_SET_NAME` varchar(64) DEFAULT NULL,
  `COLLATION_NAME` varchar(64) DEFAULT NULL,
  `DTD_IDENTIFIER` longtext,
  `ROUTINE_BODY` varchar(8) NOT NULL DEFAULT '',
  `ROUTINE_DEFINITION` longtext,
  `EXTERNAL_NAME` varchar(64) DEFAULT NULL,
  `EXTERNAL_LANGUAGE` varchar(64) DEFAULT NULL,
  `PARAMETER_STYLE` varchar(8) NOT NULL DEFAULT '',
  `IS_DETERMINISTIC` varchar(3) NOT NULL DEFAULT '',
  `SQL_DATA_ACCESS` varchar(64) NOT NULL DEFAULT '',
  `SQL_PATH` varchar(64) DEFAULT NULL,
  `SECURITY_TYPE` varchar(7) NOT NULL DEFAULT '',
  `CREATED` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LAST_ALTERED` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SQL_MODE` varchar(8192) NOT NULL DEFAULT '',
  `ROUTINE_COMMENT` longtext NOT NULL,
  `DEFINER` varchar(77) NOT NULL DEFAULT '',
  `CHARACTER_SET_CLIENT` varchar(32) NOT NULL DEFAULT '',
  `COLLATION_CONNECTION` varchar(32) NOT NULL DEFAULT '',
  `DATABASE_COLLATION` varchar(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ROUTINES`
--

INSERT INTO `ROUTINES` (`SPECIFIC_NAME`, `ROUTINE_CATALOG`, `ROUTINE_SCHEMA`, `ROUTINE_NAME`, `ROUTINE_TYPE`, `DATA_TYPE`, `CHARACTER_MAXIMUM_LENGTH`, `CHARACTER_OCTET_LENGTH`, `NUMERIC_PRECISION`, `NUMERIC_SCALE`, `CHARACTER_SET_NAME`, `COLLATION_NAME`, `DTD_IDENTIFIER`, `ROUTINE_BODY`, `ROUTINE_DEFINITION`, `EXTERNAL_NAME`, `EXTERNAL_LANGUAGE`, `PARAMETER_STYLE`, `IS_DETERMINISTIC`, `SQL_DATA_ACCESS`, `SQL_PATH`, `SECURITY_TYPE`, `CREATED`, `LAST_ALTERED`, `SQL_MODE`, `ROUTINE_COMMENT`, `DEFINER`, `CHARACTER_SET_CLIENT`, `COLLATION_CONNECTION`, `DATABASE_COLLATION`) VALUES
('InsertPerson', 'def', 'dbslab', 'InsertPerson', 'PROCEDURE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SQL', 'insert into users values(name,email,phone,gender,dob,course)', NULL, NULL, 'SQL', 'NO', 'NO SQL', NULL, 'DEFINER', '2017-11-08 17:35:46', '2017-11-08 17:35:46', '', '', 'root@localhost', 'utf8', 'utf8_general_ci', 'latin1_swedish_ci'),
('Insert_courseenroll', 'def', 'dbslab', 'Insert_courseenroll', 'PROCEDURE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SQL', 'insert into course_enroll values(email,course_id)', NULL, NULL, 'SQL', 'NO', 'NO SQL', NULL, 'DEFINER', '2017-11-09 23:41:25', '2017-11-09 23:41:25', '', '', 'root@localhost', 'utf8', 'utf8_general_ci', 'latin1_swedish_ci'),
('Insert_hostelenroll', 'def', 'dbslab', 'Insert_hostelenroll', 'PROCEDURE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SQL', 'insert into hostel_enroll values(email,block_no)', NULL, NULL, 'SQL', 'NO', 'NO SQL', NULL, 'DEFINER', '2017-11-09 23:31:14', '2017-11-09 23:31:14', '', '', 'root@localhost', 'utf8', 'utf8_general_ci', 'latin1_swedish_ci');
