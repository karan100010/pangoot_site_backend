-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 06:52 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15
USE `hotel`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------
--
--Table struxture meals
--
CREATE TABLE IF NOT EXISTS `meals` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `price` int,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
--Table struxture for room details and prices
--
-- CREATE TABLE IF NOT EXISTS `details` (
-- `id` int(10) unsigned NOT NULL,
--   `type` varchar(100) DEFAULT NULL,
--   `Date from` date DEFAULT NULL ,
--   `Date to` date DEFAULT NULL ,
--   `Price` int,
--   `Extra Bed` int,
--   `Lunch/Dinner` int 
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- INSERT INTO `details` (`id`, `type`, `Date from` , `Date to`, `Price`, `Extra Bed`, `Lunch/Dinner`) VALUES
-- (1, 'Single Occupancy', '2022/8/1', '2022/12/10', '3000' , '650' , '350'),
-- (2, 'Double Occupancy', '2022/8/1', '2022/12/10', '2200' , '650' , '350'),
-- (3, 'Tripple Occupancy', '2022/8/1', '2022/12/10', '2000' , '650' , '350'),
-- (4, 'Four Occupancy', '2022/8/1', '2022/12/10', '1800' , '650' , '350'),
-- (5, 'Single Occupancy', '2022/12/11', '2022/2/28', '3600' , '650' , '350'),
-- (6, 'Double Occupancy', '2022/12/11', '2022/2/28', '3000' , '650' , '350'),
-- (7, 'Triple Occupancy', '2022/12/11', '2022/2/28', '2760' , '650' , '350'),
-- (8, 'Four Occupancy', '2022/12/11', '2022/2/28', '2500' , '650' , '350'),
-- (9, 'Single Occupancy', '2022/5/1', '2022/7/30', '3750' , '650' , '350'),
-- (10, 'Double Occupancy', '2022/5/1', '2022/7/30', '4000' , '650' , '350'),
-- (11, 'Triple Occupancy', '2022/5/1', '2022/7/30', '3000' , '650' , '350'),
-- (12, 'Four Occupancy', '2022/5/1', '2022/7/30', '2750' , '650' , '350');

--
-- Table structure for table `contact`
--

-- CREATE TABLE IF NOT EXISTS `contact` (
-- `id` int(10) unsigned NOT NULL,
--   `fullname` varchar(100) DEFAULT NULL,
--   `phoneno` int(10) DEFAULT NULL,
--   `email` text,
--   `cdate` date DEFAULT NULL,
--   `approval` varchar(12) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(10) unsigned NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

-- CREATE TABLE IF NOT EXISTS `newsletterlog` (
-- `id` int(10) unsigned NOT NULL,
--   `title` varchar(52) DEFAULT NULL,
--   `subject` varchar(100) DEFAULT NULL,
--   `news` text
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) DEFAULT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(15) DEFAULT NULL,
  `particulars` varchar(10) DEFAULT NULL,
  `extra bedding` int ,
  `single_price` int(11) DEFAULT NULL,
  `double_price` int(11) DEFAULT NULL,
  `triple_price` int(11) DEFAULT NULL,
  `quard_price` int(11) DEFAULT NULL,
  `no. of rooms` int(11) DEFAULT NULL,
  `no. of free rooms` int(11) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `room`
--

-- INSERT INTO `room` (`id`, `type`,`Particulars`, `Date from` , `Date to`, `Price`, `Extra Bed`, `Lunch/Dinner`, `bedding`, `place`, `cusid`) VALUES
-- (1, 'Superior Room', 'Single', 'Free', NULL),
-- (2, 'Superior Room', 'Double', 'Free', NULL),
-- (3, 'Superior Room', 'Triple', 'Free', NULL),
-- (4, 'Single Room', 'Quad', 'Free', NULL),
-- (5, 'Superior Room', 'Quad', 'Free', NULL),
-- (6, 'Deluxe Room', 'Single', 'Free', NULL),
-- (7, 'Deluxe Room', 'Double', 'Free', NULL),
-- (8, 'Deluxe Room', 'Triple', 'Free', NULL),
-- (9, 'Deluxe Room', 'Quad', 'Free', NULL),
-- (10, 'Guest House', 'Single', 'Free', NULL),
-- (11, 'Guest House', 'Double', 'Free', NULL),
-- (12, 'Guest House', 'Quad', 'Free', NULL),
-- (13, 'Single Room', 'Single', 'Free', NULL),
-- (14, 'Single Room', 'Double', 'Free', NULL),
-- (15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Particulars` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Extra bedding` varchar(10) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
