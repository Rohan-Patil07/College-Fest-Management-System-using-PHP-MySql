-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 10:57 AM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fest`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`Rohan`@`%` PROCEDURE `insertStudentData` (IN `name` VARCHAR(20), IN `usn` VARCHAR(20), IN `pass` VARCHAR(20), IN `phno` BIGINT(15), IN `email` VARCHAR(20), IN `clg` VARCHAR(20))  BEGIN
      insert into student (name, usn, pass, phno, email, clg) values (name, usn, pass, phno, email, clg);
    end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `pass`) VALUES
('Rohan Patil', 'rohanpatil9529@gmail.com', 'Rohan123');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `usn` varchar(20) NOT NULL,
  `eid` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `cname` varchar(20) DEFAULT NULL,
  `cid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL DEFAULT 'co123',
  `did` int(10) DEFAULT NULL,
  `phno` bigint(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `eventid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`cname`, `cid`, `pass`, `did`, `phno`, `email`, `eventid`) VALUES
('Rohan Patil', '101', 'co123', 1002, 123456, 'rp796040@gmail.com', 'CS01');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dname` varchar(20) DEFAULT NULL,
  `did` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL DEFAULT 'dedpt123'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dname`, `did`, `pass`) VALUES
('ME', '1001', 'dedpt123'),
('CSE', '1002', 'dedpt123'),
('CV', '1003', 'dedpt123'),
('EC', '1004', 'dedpt123'),
('EEE', '1005', 'dedpt123'),
('Sports', '1006', 'dedpt123');

-- --------------------------------------------------------

--
-- Table structure for table `eventt`
--

CREATE TABLE `eventt` (
  `name` varchar(20) DEFAULT NULL,
  `eid` varchar(10) NOT NULL,
  `descp` varchar(500) DEFAULT NULL,
  `cid` varchar(10) DEFAULT NULL,
  `did` varchar(10) DEFAULT NULL,
  `loc` varchar(20) DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `etime` time DEFAULT NULL,
  `fee` int(10) DEFAULT NULL,
  `noapplied` int(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventt`
--

INSERT INTO `eventt` (`name`, `eid`, `descp`, `cid`, `did`, `loc`, `stime`, `etime`, `fee`, `noapplied`) VALUES
('Mystery Code', 'CS01', 'This is just example', '101', '1002', 'CSE lab', '09:00:00', '12:00:00', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) DEFAULT NULL,
  `usn` varchar(20) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `phno` bigint(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `clg` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `usn`, `pass`, `phno`, `email`, `clg`) VALUES
('ROHAN', '1rv18me037', '1234', 45677, ' abd@gmail.com', 'jce'),
('Arjun', '1rv18cs03', '123', 4577, 'abdf@gmail.com', 'jgi'),
('vikas', '2hi34577', '1234', 356677, ' avd@gmail.com', 'jce');

-- --------------------------------------------------------

--
-- Table structure for table `win`
--

CREATE TABLE `win` (
  `eid` varchar(10) NOT NULL,
  `place` varchar(20) NOT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `win`
--

INSERT INTO `win` (`eid`, `place`, `price`) VALUES
('CS01', 'second', 1500),
('CS01', 'first', 2500),
('CS01', 'third', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`usn`,`eid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `did` (`did`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `eventt`
--
ALTER TABLE `eventt`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `win`
--
ALTER TABLE `win`
  ADD PRIMARY KEY (`eid`,`place`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
