-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 05:54 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `id` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `remark` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`id`, `date`, `remark`) VALUES
('1706001', '2017-01-08', 'A'),
('1706001', '2017-01-09', 'A'),
('1706001', '2017-01-10', 'P'),
('1706001', '2017-01-22', 'A'),
('1706001', '2017-01-25', 'A'),
('1706001', '2017-01-26', 'P'),
('1706001', '2017-01-27', 'P'),
('1706002', '2017-01-08', 'A'),
('1706002', '2017-01-09', 'A'),
('1706002', '2017-01-10', 'A'),
('1706002', '2017-01-22', 'A'),
('1706002', '2017-01-25', 'A'),
('1706002', '2017-01-26', 'P'),
('1706002', '2017-01-27', 'P'),
('1706003', '2017-01-08', 'P'),
('1706003', '2017-01-09', 'A'),
('1706003', '2017-01-10', 'A'),
('1706003', '2017-01-22', 'P'),
('1706003', '2017-01-25', 'A'),
('1706003', '2017-01-26', 'P'),
('1706003', '2017-01-27', 'P'),
('1706004', '2017-01-08', 'P'),
('1706004', '2017-01-09', 'A'),
('1706004', '2017-01-10', 'P'),
('1706004', '2017-01-22', 'P'),
('1706004', '2017-01-25', 'P'),
('1706004', '2017-01-26', 'P'),
('1706004', '2017-01-27', 'P'),
('1706005', '2017-01-08', 'A'),
('1706005', '2017-01-09', 'P'),
('1706005', '2017-01-10', 'P'),
('1706005', '2017-01-22', 'P'),
('1706005', '2017-01-25', 'A'),
('1706005', '2017-01-26', 'A'),
('1706005', '2017-01-27', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` varchar(7) NOT NULL,
  `roll` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `roll`, `year`, `class`, `section`) VALUES
('1706001', 3, 2017, 6, 'A'),
('1706002', 4, 2017, 6, 'A'),
('1706003', 5, 2017, 6, 'A'),
('1706004', 1, 2017, 6, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `receiptid` varchar(20) NOT NULL,
  `receiver` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `date`, `amount`, `description`, `receiptid`, `receiver`) VALUES
('1706005', '2017-07-24', 25000, 'Tuition Fees', '123456789', '1700004'),
('1706005', '2017-07-30', 10000, 'Admisson Fees', '123456789125', '1700004'),
('1706005', '2017-07-01', 13000, 'Sports fees', '159357', '1700004');

-- --------------------------------------------------------

--
-- Table structure for table `feesdescription`
--

CREATE TABLE `feesdescription` (
  `serialno` int(11) NOT NULL,
  `feestypename` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feesdescription`
--

INSERT INTO `feesdescription` (`serialno`, `feestypename`) VALUES
(4, 'Admisson Fees'),
(5, 'Tution Fees'),
(6, 'Id CArd Fees'),
(7, 'Registration fees'),
(8, '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` varchar(7) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `year` year(4) NOT NULL,
  `class` int(11) NOT NULL,
  `examtype` varchar(100) NOT NULL,
  `examsno` int(11) NOT NULL,
  `sec` varchar(1) NOT NULL,
  `theory` int(11) NOT NULL,
  `practical` int(11) NOT NULL,
  `mcq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `subject`, `year`, `class`, `examtype`, `examsno`, `sec`, `theory`, `practical`, `mcq`) VALUES
('1706001', 'che', 2017, 6, 'te', 1, 'A', 0, 10, 0),
('1706002', 'phy', 0000, 6, 'ce', 1, 'A', 10, 0, 0),
('1706003', 'phy', 0000, 6, 'ce', 1, 'A', 10, 0, 0),
('1706004', 'che', 0000, 6, 'te', 0, 'A', 10, 10, 10),
('1706004', 'phy', 0000, 6, 'ce', 1, 'A', 10, 0, 0),
('1706005', 'ban-1', 2017, 6, 'te', 1, 'A', 9, 5, 5),
('1706005', 'che', 2017, 6, 'te', 1, 'A', 10, 10, 10),
('1706005', 'phy', 2017, 6, 'te', 1, 'A', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` varchar(7) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `password`, `email`, `role`) VALUES
('1700001', '12345', 'minmhazuddin044@gmail.com', 'Administator'),
('1700002', '12345', 'abdulkuddus@gmail.com', 'Teacher'),
('1700003', '12345', 'aikub@gmail.com', 'Teacher'),
('1700004', '12345', 'kader@gmail.com', 'Office assistant'),
('1706005', '12345', 'minhazuddin044@gmaiol.com', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` varchar(7) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `sclass` varchar(10) NOT NULL,
  `faname` varchar(300) NOT NULL,
  `moname` varchar(300) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `fname`, `mname`, `lname`, `gender`, `religion`, `sclass`, `faname`, `moname`, `bdate`, `address`, `contact`) VALUES
('1706001', 'Minhaz', 'uddin', 'Ahmed', 'M', 'Islam', '06', 'siraj uddin', 'jabun naher', '0000-00-00', 'katasur -1', '01852153044'),
('1706002', 'Minhaz', 'uddin', 'Ahmed', 'M', 'Islam', '06', 'siraj uddin', 'jabun naher', '0000-00-00', 'katasur -1', '01852153044'),
('1706003', 'fokrul', 'alam', '', 'M', 'Islam', '06', 'retesh alam', '--------naher', '0000-00-00', 'unknowmn', '0177885656'),
('1706004', '', 'krishna', 'das', 'M', 'Hinduism', '06', 'pronoy das', 'metu rane bala', '0000-00-00', 'unknown', '01845854665'),
('1706005', 'minhaz ', 'uddin', '', 'M', 'Islam', '06', 'siraj uddin', 'jebun naher ', '2017-07-13', 'kuthir hut', '01852153044');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjecttitle` varchar(2000) NOT NULL,
  `subjectcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjecttitle`, `subjectcode`) VALUES
('Bangla 1st Paper', 'BAN-101'),
('Bangla 2st Paper', 'BAN-102'),
('English 1st Paper', 'ENG-101'),
('English 2st Paper', 'ENG-102');

-- --------------------------------------------------------

--
-- Table structure for table `subjectteacher`
--

CREATE TABLE `subjectteacher` (
  `subjectid` varchar(10) NOT NULL,
  `teachersid` varchar(7) NOT NULL,
  `year` year(4) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(1) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectteacher`
--

INSERT INTO `subjectteacher` (`subjectid`, `teachersid`, `year`, `class`, `section`, `role`) VALUES
('BAN-101', '1700002', 2017, 6, 'A', 'Class Teacher'),
('ECE-302', '1700003', 2017, 6, 'A', 'subject teacher'),
('ENG-102', '1700003', 2017, 7, 'B', 'Class Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teachersinfo`
--

CREATE TABLE `teachersinfo` (
  `id` varchar(7) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `faname` varchar(300) NOT NULL,
  `moname` varchar(300) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`id`, `fname`, `mname`, `lname`, `gender`, `religion`, `faname`, `moname`, `bdate`, `address`, `contact`) VALUES
('1700001', 'Minhaz', 'uddin', '', 'M', 'Islam', 'siraj uddin', 'jebun nahar', '1996-09-09', 'katasur ,100', '01852153044'),
('1700002', 'F', 'Rahman', '', 'M', 'Islam', 'adbul kuddus', 'rokeya begam', '2017-07-13', 'kutir hut', '0152153044'),
('1700003', 'aiakub', '', '', 'M', 'Islam', 'ratul', 'kabeya', '2017-07-12', 'ds', '01852153088'),
('1700004', 'Mohammed', 'kader', '', 'M', 'Islam', 'abdul haque', 'fgbb', '2017-07-14', 'kk', 'kader@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`id`,`date`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`,`year`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`receiptid`);

--
-- Indexes for table `feesdescription`
--
ALTER TABLE `feesdescription`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`,`subject`,`year`,`class`,`examtype`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectcode`);

--
-- Indexes for table `subjectteacher`
--
ALTER TABLE `subjectteacher`
  ADD PRIMARY KEY (`subjectid`,`teachersid`,`year`,`class`,`section`);

--
-- Indexes for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feesdescription`
--
ALTER TABLE `feesdescription`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
