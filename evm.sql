-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 02:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evm`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(30) NOT NULL,
  `criteria` decimal(11,2) NOT NULL,
  `pkg` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `criteria`, `pkg`, `id`, `email`) VALUES
('TCS', '9.10', 400000, 1, 'tcs@tcs.in'),
('Atos', '9.00', 350000, 2, 'atos@atos.in');

-- --------------------------------------------------------

--
-- Table structure for table `council`
--

CREATE TABLE `council` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `council`
--

INSERT INTO `council` (`cid`, `cname`, `contact`, `email`) VALUES
(1, 'Mahesh', '7507827367', 'umeshparwani228@gmail.com'),
(3, 'Rajeev', '8976911969', 'rajeev11430@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pastevent`
--

CREATE TABLE `pastevent` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `path` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastevent`
--

INSERT INTO `pastevent` (`id`, `name`, `path`, `date`) VALUES
(1, 'BitCamp', 'images/a5.jpg', '2018-01-10'),
(2, 'Technovanza', 'images/a6.jpg', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `past_placed`
--

CREATE TABLE `past_placed` (
  `name` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `skillset` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_placed`
--

INSERT INTO `past_placed` (`name`, `cname`, `skillset`, `id`) VALUES
('Rudra', 'TCS', 'Java,Python,CN', 1),
('Sachin', 'Atos', 'OS,cpp,Java', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pevent`
--

CREATE TABLE `pevent` (
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `pkg` int(11) NOT NULL,
  `ptr` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pevent`
--

INSERT INTO `pevent` (`name`, `date`, `pkg`, `ptr`) VALUES
('rajeev', '2018-03-13', 123333, '9.12'),
('TCS', '2018-03-22', 10, '9.50'),
('Infosys', '2018-03-21', 4, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('DBA', '2018-03-07', 6, '5.00'),
('AMWAY', '2018-03-07', 6, '9.00'),
('AMWAY', '2018-03-07', 6, '9.00'),
('AMWAY', '2018-03-07', 6, '9.00'),
('AMWAY', '2018-03-07', 6, '9.00'),
('AMWAY', '2018-03-07', 6, '9.00'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('AMWAY', '2018-03-07', 6, '9.10'),
('TCS', '2018-03-07', 6, '5.00'),
('ATOS', '2018-03-15', 5, '6.50'),
('Amway', '2018-03-23', 500000, '8.50');

-- --------------------------------------------------------

--
-- Table structure for table `registeredevent`
--

CREATE TABLE `registeredevent` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(100) NOT NULL,
  `council` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredevent`
--

INSERT INTO `registeredevent` (`id`, `name`, `date`, `path`, `council`) VALUES
(1, 'Unscript2k18', '2018-04-02', 'images/a1.jpg', 'Mozilla Crce'),
(2, 'Code League', '2018-04-01', 'images/a2.jpg', 'Google'),
(3, 'HackerCup', '2018-04-03', 'images/a3.jpg', 'Facebook');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CGPA` float NOT NULL,
  `Skillsets` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `CGPA`, `Skillsets`) VALUES
(1, 'Rohan', 9.3, 'Java,Python,Algorithm,CN,Microcontroller'),
(2, 'Punit', 9.2, 'DBMS,DS,Java'),
(3, 'Sumeet', 9, 'OS,Python,CN,Mysql'),
(4, 'Vinay', 7.2, 'Java,Python,Cpp,OS');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`email`, `password`) VALUES
('ravi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_table`
--

CREATE TABLE `temporary_table` (
  `event_no` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `committee_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timing` varchar(100) NOT NULL,
  `studentid` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporary_table`
--

INSERT INTO `temporary_table` (`event_no`, `event_name`, `committee_name`, `date`, `timing`, `studentid`, `capacity`, `type`) VALUES
(3, 'codevita', 'iste', '2028-03-17', '11 AM - 3PM', 2, 100, 0),
(4, 'CodeHack', 'CSI', '2018-03-23', '1pm-9pm', 3, 30, 1),
(5, 'HackQuest', 'ISTE', '2018-03-31', '9pm-2pm', 2, 30, 1),
(6, 'Bitcode', 'CSI', '2018-05-08', '9am-5pm', 2, 30, 0),
(7, 'TechRay', 'csi', '0000-00-00', '10PM-2PM', 2, 56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE `tpo` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `council`
--
ALTER TABLE `council`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `pastevent`
--
ALTER TABLE `pastevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `past_placed`
--
ALTER TABLE `past_placed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeredevent`
--
ALTER TABLE `registeredevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `temporary_table`
--
ALTER TABLE `temporary_table`
  ADD PRIMARY KEY (`event_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `council`
--
ALTER TABLE `council`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temporary_table`
--
ALTER TABLE `temporary_table`
  MODIFY `event_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
