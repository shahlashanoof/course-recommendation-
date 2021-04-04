-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 08:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE IF NOT EXISTS `apply_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `applied` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approve` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id`, `name`, `email`, `mob`, `applied`, `path`, `p_date`, `approve`) VALUES
(1, 'Anish', 'gettoanish@gmail.com', '55245452424', '7', 'biodata/13-05-30-04-00-11charitydb.sql', '2013-05-30 10:29:47', 'approve'),
(2, 'Anish', 'gettoanish@gmail.com', '55245452424', '7', 'biodata/13-05-30-04-12-46charitydb.sql', '2013-05-30 10:42:22', 'clear'),
(3, 'xX', 'gettoanish@gmail.com', '32322321323', '6', 'biodata/13-05-30-04-19-04connection_charity.php', '2013-05-30 10:48:40', 'approve'),
(4, 'fefer', 'gettoanish@gmail.com', '9847630162', '7', 'biodata/13-05-30-07-36-51index.php', '2013-05-30 14:06:27', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE IF NOT EXISTS `company_details` (
  `C_id` int(11) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(30) NOT NULL,
  `C_location` varchar(30) NOT NULL,
  `C_website` varchar(100) NOT NULL,
  `C_address` varchar(50) NOT NULL,
  `C_email` varchar(30) NOT NULL,
  `C_mobile` bigint(20) NOT NULL,
  `C_phone` bigint(20) NOT NULL,
  `C_person` varchar(100) NOT NULL,
  `C_password` varchar(20) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`C_id`, `C_name`, `C_location`, `C_website`, `C_address`, `C_email`, `C_mobile`, `C_phone`, `C_person`, `C_password`) VALUES
(1, 'College1', 'Ernakulam', '', 'palarivatom', 'c1@gmail.com', 9847630162, 4846444762, '', '123456'),
(2, 'College2', '', '', '', 'c2@gmail.com', 9895668811, 9895668811, '', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `college`, `name`, `description`) VALUES
(1, 'c2@gmail.com', 'Information Technology', 'html ,c ,c++,cpp'),
(2, 'c1@gmail.com', 'Computer Science', 'database, apple'),
(3, 'c1@gmail.com', 'Information Technology', 'html ,c,network,Nnn'),
(4, 'c1@gmail.com', 'physics', 'techno,fission');

-- --------------------------------------------------------

--
-- Table structure for table `course_rate`
--

CREATE TABLE IF NOT EXISTS `course_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_rate`
--

INSERT INTO `course_rate` (`id`, `email`, `course`, `college`, `rate`) VALUES
(1, 'g@gmail.com', 'Information Technology', 'c1@gmail.com', 4),
(2, 'g@gmail.com', 'Computer Science', 'c2@gmail.com', 4),
(3, 'b@gmail.com', 'Information Technology', 'c1@gmail.com', 4),
(4, 'b@gmail.com', 'physics', 'c1@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `c_biodata`
--

CREATE TABLE IF NOT EXISTS `c_biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `applied` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE IF NOT EXISTS `job_details` (
  `J_id` int(11) NOT NULL AUTO_INCREMENT,
  `J_title` varchar(30) NOT NULL,
  `J_type` varchar(20) NOT NULL,
  `J_posted` varchar(20) NOT NULL,
  `J_close` date NOT NULL,
  `J_email` varchar(30) NOT NULL,
  `J_description` varchar(60) NOT NULL,
  `J_skills` varchar(60) NOT NULL,
  `J_experience` varchar(30) NOT NULL,
  `J_user` varchar(255) NOT NULL,
  PRIMARY KEY (`J_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`J_id`, `J_title`, `J_type`, `J_posted`, `J_close`, `J_email`, `J_description`, `J_skills`, `J_experience`, `J_user`) VALUES
(1, 'Marketing', '', '', '2013-05-21', 'info@allievo.in', 'Need marketers', 'Good communication skills, Goo', 'Nil', ''),
(2, 'Tester', '', '', '2013-07-25', 'ddsfd@fddf.df', 'sads', 'sads', '20', ''),
(3, 'Marketing', '', '', '2013-05-08', 'gettoanish@gmail.com', '3 YEAR EXPERICENCE', 'PHP', '5', ''),
(4, 'Marketing', '', '', '2013-05-08', 'gettoanish@gmail.com', '3 YEAR EXPERICENCE', 'PHP', '5', ''),
(5, 'Android Developer', '', '', '2013-05-30', 'gettoanish@gmail.com', 'Freshers', 'android', '3', 'gettoanish@gmail.com'),
(6, 'test', 'Full Time', '2013-05-22', '2013-05-22', 'gettoanish@gmail.com', 'ss', 's', '5', 'gettoanish@gmail.com'),
(7, 'hhhh', 'Full Time', '2013-05-30', '0000-00-00', 'tytyry', 'grgq', 'ttq', '3', 'nidhints@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE IF NOT EXISTS `log_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date1` datetime NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `date1`, `user_name`, `ip`) VALUES
(1, '2013-05-22 18:12:04', 'gettoanish@gmail.com', '::1'),
(2, '2013-05-22 18:13:55', 'gettoanish@gmail.com', '::1'),
(3, '2013-05-22 18:14:18', 'gettoanish@gmail.com', '::1'),
(4, '2013-05-22 18:18:10', 'gettoanish@gmail.com', '::1'),
(5, '2013-05-22 18:46:14', 'gettoanish@gmail.com', '::1'),
(6, '2013-05-22 18:56:43', 'gettoanish@gmail.com', '::1'),
(7, '2013-05-23 17:31:29', 'gettoanish@gmail.com', '::1'),
(8, '2013-05-23 17:55:23', 'nidhints@gmail.com', '::1'),
(9, '2013-05-23 17:55:44', 'nidhints@gmail.com', '::1'),
(10, '2013-05-23 18:12:44', 'nidhints@gmail.com', '::1'),
(11, '2013-05-23 18:13:54', 'nidhints@gmail.com', '::1'),
(12, '2013-05-23 18:15:28', 'nidhints@gmail.com', '::1'),
(13, '2013-05-23 18:20:30', 'gettoanish@gmail.com', '::1'),
(14, '2013-05-23 18:21:02', 'nidhints@gmail.com', '::1'),
(15, '2013-05-23 18:23:02', 'nidhints@gmail.com', '::1'),
(16, '2013-05-30 14:55:03', 'gettoanish@gmail.com', '::1'),
(17, '2013-05-30 14:56:25', 'nidhints@gmail.com', '::1'),
(18, '2013-05-30 19:21:36', 'gettoanish@gmail.com', '::1'),
(19, '2019-04-12 23:06:07', 'gettoanish@gmail.com', '::1'),
(20, '2019-04-12 23:19:23', 'gettoanish@gmail.com', '::1'),
(21, '2019-04-12 23:52:34', 'g@gmail.com', '::1'),
(22, '2019-04-13 10:38:16', 'g@gmail.com', '::1'),
(23, '2019-04-13 10:38:16', 'g@gmail.com', '::1'),
(24, '2019-04-13 10:57:57', 'gettoanish@gmail.com', '::1'),
(25, '2019-04-13 10:58:25', 'g@gmail.com', '::1'),
(26, '2019-04-13 11:08:48', 'g@gmail.com', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `S_id` int(11) NOT NULL AUTO_INCREMENT,
  `S_name` varchar(30) NOT NULL,
  `S_location` varchar(30) NOT NULL,
  `S_address` varchar(50) NOT NULL,
  `S_email` varchar(30) NOT NULL,
  `S_mobile` bigint(20) NOT NULL,
  `S_password` varchar(20) NOT NULL,
  PRIMARY KEY (`S_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`S_id`, `S_name`, `S_location`, `S_address`, `S_email`, `S_mobile`, `S_password`) VALUES
(1, 'Gokul', 'ernakulam', 'asdfghjkl', 'g@gmail.com', 9562106250, '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
