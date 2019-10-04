-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 03:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roofland`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicantID` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `userType` char(30) NOT NULL,
  `monthlyIncome` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicantID`, `fullname`, `username`, `email`, `password`, `userType`, `monthlyIncome`) VALUES
(1, 'Aishath Junana', 'junana123', 'jun@test.com', 'junana123', 'Applicant', 5000),
(2, 'Cymantha Sothiar', 'cym123', 'cym@test.com', 'cym123', 'Applicant', 4700);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationID` int(11) NOT NULL,
  `applicationDate` date NOT NULL,
  `requiredMonth` varchar(20) NOT NULL,
  `requiredYear` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `requiredUnit` int(11) NOT NULL,
  `applicantID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationID`, `applicationDate`, `requiredMonth`, `requiredYear`, `status`, `requiredUnit`, `applicantID`) VALUES
(1, '2019-03-19', 'December', '2020', 'approved', 2, 1),
(2, '2019-06-30', 'November', '2019', 'rejected', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `housingofficer`
--

CREATE TABLE `housingofficer` (
  `officerID` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `userType` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housingofficer`
--

INSERT INTO `housingofficer` (`officerID`, `fullname`, `username`, `email`, `password`, `userType`) VALUES
(1, 'Administrator', 'admin', 'admin@test.com', 'admin123', 'Housing Officer'),
(2, 'Serena Rekha Raj', 'serena', 'serena@test.com', 'serena123', 'Housing Officer');

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `residenceID` int(11) NOT NULL,
  `residenceName` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` decimal(50,10) NOT NULL,
  `facilities` char(100) NOT NULL,
  `sizePerUnit` int(100) NOT NULL,
  `numOfUnit` int(100) NOT NULL,
  `officerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`residenceID`, `residenceName`, `location`, `price`, `facilities`, `sizePerUnit`, `numOfUnit`, `officerID`) VALUES
(1, 'Paramount View', 'Taman Paramount, Petaling Jaya', '1000.0000000000', 'swimming pool, gym, laundry', 1000, 5, 1),
(2, 'Prima 16 ', 'Phileo Damansara, Petaling Jaya', '2300.0000000000', 'swimming pool, gym', 3400, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unitID` int(11) NOT NULL,
  `availability` char(30) NOT NULL,
  `residenceID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitID`, `availability`, `residenceID`) VALUES
(1, 'available', 2),
(2, 'not available', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`),
  ADD KEY `requiredUnit` (`requiredUnit`),
  ADD KEY `applicantID` (`applicantID`);

--
-- Indexes for table `housingofficer`
--
ALTER TABLE `housingofficer`
  ADD PRIMARY KEY (`officerID`);

--
-- Indexes for table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`residenceID`),
  ADD KEY `officerID` (`officerID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unitID`),
  ADD KEY `residenceID` (`residenceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residence`
--
ALTER TABLE `residence`
  MODIFY `residenceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`requiredUnit`) REFERENCES `unit` (`unitID`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`applicantID`) REFERENCES `applicant` (`applicantID`);

--
-- Constraints for table `residence`
--
ALTER TABLE `residence`
  ADD CONSTRAINT `officerID` FOREIGN KEY (`officerID`) REFERENCES `housingofficer` (`officerID`);

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`residenceID`) REFERENCES `residence` (`residenceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
