-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 09:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `customerid` varchar(20) NOT NULL,
  `vehicleid` varchar(20) NOT NULL,
  `servicedescription` varchar(500) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `duedate` date NOT NULL,
  `fromtime` time NOT NULL,
  `endtime` time NOT NULL,
  `userid` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `customerid`, `vehicleid`, `servicedescription`, `dob`, `duedate`, `fromtime`, `endtime`, `userid`, `status`) VALUES
(2, '8126/15/5', '2019-11-04', 'engine problems', '2019-11-04 11:55:48', '2019-11-04', '13:00:00', '14:00:00', '2', 'booked'),
(3, '8126/15/5', '2019-11-04', 'engine', '2019-11-04 13:14:06', '2019-11-04', '15:01:00', '00:00:00', '1', 'booked'),
(4, '8126/15/5', '2019-11-04', 'engine', '2019-11-04 13:14:50', '0000-00-00', '15:01:00', '17:00:00', '1', 'booked'),
(5, '8126/15/5', '2019-11-04', 'engine', '2019-11-04 16:09:26', '0000-00-00', '15:01:00', '17:00:00', '1', 'booked'),
(6, '8126/15/5', '2019-11-04', 'broken head lights', '2019-11-06 11:55:43', '2019-11-06', '14:03:00', '16:03:00', '1', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `datecheckin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datecheckout` timestamp NULL DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `appointmentid`, `datecheckin`, `datecheckout`, `userid`) VALUES
(1, 5, '2019-11-05 11:37:04', '2019-11-05 00:00:00', '2'),
(2, 6, '2019-11-06 11:56:24', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `description`, `address`, `email`, `phone`, `doa`) VALUES
(1, 'harri service', 'noad', 'dfoid', 'harridadzie28@gmail.com', '0547260262', '2019-11-07 13:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(80) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `company`, `doa`) VALUES
('8126/15/5', 'John', 'Jebo', 'male', '0201896820', 'johnjebo@gmail.com', '', '2019-11-07 14:34:31'),
('8194/14/4', 'Mary', 'Agba', 'female', '0547260262', 'mary@gmail.com', '', '2019-11-07 12:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `jobplan`
--

CREATE TABLE `jobplan` (
  `id` int(11) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `technician` varchar(20) NOT NULL,
  `datejob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `starttime` text,
  `endtime` text,
  `timespent` time DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobplan`
--

INSERT INTO `jobplan` (`id`, `appointmentid`, `technician`, `datejob`, `starttime`, `endtime`, `timespent`, `comment`) VALUES
(3, 6, 'st908', '2019-11-07 00:00:00', '15:02', '18:01', '01:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `rolename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, 'appointment'),
(2, 'reception'),
(3, 'serviceadvisor'),
(4, 'jobplanner'),
(5, 'technician'),
(8, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `serviceadvice`
--

CREATE TABLE `serviceadvice` (
  `id` int(11) NOT NULL,
  `appointmentid` int(11) NOT NULL,
  `newdescription` varchar(500) NOT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `dos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceadvice`
--

INSERT INTO `serviceadvice` (`id`, `appointmentid`, `newdescription`, `userid`, `dos`) VALUES
(1, 2, 'the engine has to be replaced', '3', '2019-11-05 12:50:13'),
(2, 6, 'correct', '3', '2019-11-06 12:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` text,
  `role` varchar(20) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `role`, `doa`) VALUES
('st2385558', 'Kwame ', 'Ewusi', 'male', '0459866348', 'kwame@gmail.com', '4', '2019-11-07 16:00:46'),
('st908', 'Vasily ', 'Lomancheko', 'male', '1225799962', 'loma@gmail.com', '5', '2019-11-06 11:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `staffid`, `username`, `password`, `role`, `doa`) VALUES
(1, 'st11', 'app', 'app', 1, '2019-11-04 09:01:44'),
(2, 'st34', 'rec', 'rec', 2, '2019-11-05 10:35:25'),
(3, 'st234', 'serve', 'serve', 3, '2019-11-05 12:13:16'),
(4, 'st456', 'job', 'job', 4, '2019-11-06 10:49:08'),
(5, 'st908', 'tech', 'tech', 5, '2019-11-07 08:52:31'),
(6, 'admin', 'admin', 'admin', 8, '2019-11-07 15:33:33'),
(8, 'st2385558', 'st2385558', 'kwame', 4, '2019-11-07 16:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` varchar(20) NOT NULL,
  `customerid` varchar(20) NOT NULL,
  `chasis` varchar(20) NOT NULL,
  `makeandmodel` varchar(100) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `descriptionservice` varchar(500) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `customerid`, `chasis`, `makeandmodel`, `mileage`, `descriptionservice`, `doa`) VALUES
('2019-11-04', '8126/15/5', 'vl567', 'benz', '300', 'engine problems', '2019-11-04 11:55:48'),
('wr234-20', '8194/14/4', 'c4232bn', 'bentley', '300', 'N/A', '2019-11-07 12:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobplan`
--
ALTER TABLE `jobplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceadvice`
--
ALTER TABLE `serviceadvice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobplan`
--
ALTER TABLE `jobplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `serviceadvice`
--
ALTER TABLE `serviceadvice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
