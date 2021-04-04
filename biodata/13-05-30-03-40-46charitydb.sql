-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2013 at 08:55 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `charitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(25) NOT NULL,
  `d_quantity` int(100) NOT NULL,
  `d_purchase` date NOT NULL,
  `d_expiry` date NOT NULL,
  `d_keptplace` varchar(40) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`d_id`, `d_name`, `d_quantity`, `d_purchase`, `d_expiry`, `d_keptplace`) VALUES
(2, 'pragine 75mg', 60, '2013-05-07', '2015-05-07', 'rack 13');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `e_id` int(15) NOT NULL AUTO_INCREMENT,
  `e_amount` int(15) NOT NULL,
  `e_date` date NOT NULL,
  `e_purpose` varchar(50) NOT NULL,
  `e_remark` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `expense`
--


-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `i_id` int(15) NOT NULL AUTO_INCREMENT,
  `i_income` int(20) NOT NULL,
  `i_date` date NOT NULL,
  `i_purpose` varchar(50) NOT NULL,
  `i_remark` varchar(50) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`i_id`, `i_income`, `i_date`, `i_purpose`, `i_remark`) VALUES
(1, 1000, '2013-04-24', 'from medicines', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE IF NOT EXISTS `locality` (
  `locality_id` int(15) NOT NULL AUTO_INCREMENT,
  `location` varchar(25) NOT NULL,
  PRIMARY KEY (`locality_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`locality_id`, `location`) VALUES
(1, 'pala'),
(3, 'edapalli'),
(6, 'ekm'),
(7, 'rt'),
(8, 'jfd'),
(9, 'dfgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(25) NOT NULL,
  `p_addr` varchar(70) NOT NULL,
  `p_type` varchar(15) NOT NULL,
  `p_disease` varchar(40) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_addr`, `p_type`, `p_disease`) VALUES
(3, 'ramakrishnan', 'ekm', 'in patient', 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(25) NOT NULL,
  `v_addr` varchar(70) NOT NULL,
  `v_no` int(10) NOT NULL,
  `v_bloodgroup` varchar(10) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `v_name`, `v_addr`, `v_no`, `v_bloodgroup`) VALUES
(1, 'roby', 'ranni', 2147483647, 'a+');
