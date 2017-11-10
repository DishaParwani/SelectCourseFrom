-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 05:40 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_courseenroll` (IN `email` VARCHAR(50), IN `course_id` INTEGER(11))  NO SQL
insert into course_enroll values(email,course_id,'false')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_courseenroll_afterpay` (IN `email` VARCHAR(50), IN `course_id` INTEGER(11))  NO SQL
update course_enroll set payed='true' where email=`email`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_hostelenroll` (IN `email` VARCHAR(50), IN `block_no` INTEGER(11))  NO SQL
insert into hostel_enroll values(email,block_no,'false')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_hostelenroll_afterpay` (IN `email` VARCHAR(50), IN `block_no` INTEGER(11))  NO SQL
update hostel_enroll set payed='true' where email=`email`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Person` (IN `name` VARCHAR(50), IN `email` VARCHAR(100), IN `phone` BIGINT, IN `gender` CHAR, IN `dob` VARCHAR(10))  NO SQL
insert into registration values(name,email,phone,gender,dob)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `cname`, `price`) VALUES
(1, 'AutoCAD', 9000),
(2, 'ASP', 15000),
(3, 'Linux', 13000),
(4, 'C++ Programming Language', 12000),
(5, 'PHP with Wordpress', 15000),
(6, 'Core Java', 13000),
(7, 'Android', 15000),
(8, 'Python', 17000);

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

CREATE TABLE `course_enroll` (
  `email` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `payed` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_enroll`
--

INSERT INTO `course_enroll` (`email`, `course_id`, `payed`) VALUES
('gupta.rishav96@gmail.com', 1, 'true'),
('gupta.rishav96@gmail.com', 2, 'false');

--
-- Triggers `course_enroll`
--
DELIMITER $$
CREATE TRIGGER `mul_course_book` BEFORE INSERT ON `course_enroll` FOR EACH ROW begin
DECLARE 
counter int;
SET counter =(select count(*)
from course_enroll
where email=new.email and
	course_id=new.course_id);
if (counter=1)
then
SIGNAL SQLSTATE '12345';
end if;
end
$$
DELIMITER ;

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
(6, 'Charan', 'Kolkata', '1984-05-05', '2007-03-01', 1000000);

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

-- --------------------------------------------------------

--
-- Table structure for table `hostel_enroll`
--

CREATE TABLE `hostel_enroll` (
  `email` varchar(50) NOT NULL,
  `block_no` int(11) NOT NULL,
  `payed` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_enroll`
--

INSERT INTO `hostel_enroll` (`email`, `block_no`, `payed`) VALUES
('gupta.rishav96@gmail.com', 2, 'true');

--
-- Triggers `hostel_enroll`
--
DELIMITER $$
CREATE TRIGGER `not_reg_course` BEFORE INSERT ON `hostel_enroll` FOR EACH ROW begin
DECLARE 
counter int;
SET counter =(select count(*)
from course_enroll
where email=new.email);
if (counter=0)
then
SIGNAL SQLSTATE '12345';
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `phone`, `gender`, `dob`) VALUES
('disha', 'disha.parwani9927@gmail.com', 7702087500, 'F', '1997-06-27'),
('rishav', 'gupta.rishav96@gmail.com', 8961682172, 'M', '1996-08-26'),
('vaibhav', 'vaibhavtk97@gmail.com', 9920118778, 'M', '1997-09-20'),
('shyamal', 'shyamal@gmail.com', 9876543210, 'M', '1997-09-09');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `mul_signup` BEFORE INSERT ON `registration` FOR EACH ROW begin
DECLARE 
counter int;
SET counter =(select count(*)
from registration
where email=new.email);
if (counter=1)
then
SIGNAL SQLSTATE '12345';
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `course_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cours_duration` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`course_id`, `id`, `cours_duration`) VALUES
(1, 1, 30),
(2, 1, 30),
(5, 2, 60),
(8, 2, 30),
(4, 2, 45),
(7, 3, 30),
(6, 3, 45),
(1, 4, 30),
(8, 4, 45),
(4, 4, 30),
(5, 5, 60),
(8, 5, 30),
(7, 5, 45),
(3, 6, 45),
(6, 6, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_enroll`
--
ALTER TABLE `course_enroll`
  ADD PRIMARY KEY (`email`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`block_no`);

--
-- Indexes for table `hostel_enroll`
--
ALTER TABLE `hostel_enroll`
  ADD PRIMARY KEY (`email`,`block_no`),
  ADD KEY `block_no` (`block_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`course_id`,`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
