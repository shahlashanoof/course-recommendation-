-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 08:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE IF NOT EXISTS `coursereg` (
  `id` int(100) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `root_subject` varchar(50) NOT NULL,
  `main_subject` varchar(50) NOT NULL,
  `major_subject` varchar(50) NOT NULL,
  `college_address` varchar(50) NOT NULL,
  `course_jobs` varchar(50) NOT NULL,
  `course_qualification_level` varchar(50) NOT NULL,
  `management_fee` int(50) NOT NULL,
  `govt_fee` int(50) NOT NULL,
  `collage_rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`id`, `course_title`, `root_subject`, `main_subject`, `major_subject`, `college_address`, `course_jobs`, `course_qualification_level`, `management_fee`, `govt_fee`, `collage_rank`) VALUES
(1, 'civil engineering', 'civil engineering', 'civil engineering', '', 'mea engineering college', '', '+2 0r diploma', 60000, 30000, '0'),
(3, 'Department of Computer Science & Engineering', 'computer science', '', '', 'mea engineering college', '', '+2', 60000, 30000, '0'),
(0, 'civil engineering', 'civil engineering', 'civil engineering', '', 'mea engineering college', '', '+2 0r diploma', 60000, 30000, '0'),
(0, 'Department of Computer Science & Engineering', 'computer science', '', '', 'mea engineering college', '', '+2 or diploma', 60000, 30000, '0'),
(2, 'Electronics & Communication Engineering', 'Electronics & Communication Engineering', '', '', 'mea engineering college', '', '+2 0r diploma', 60000, 60000, ''),
(3, 'Information Technology', 'Information Technology', '', '', 'mea engineering college', '', '+2 0r diploma', 60000, 30000, ''),
(4, 'Mechanical Engineering', 'Mechanical Engineering', '', '', 'mea engineering college', '', '+2 0r diploma', 60000, 30000, ''),
(5, ' BA Arabic', 'arabic', 'History of Islam and culture,Socio Economic Concep', '', 'POOKOYA THANGAL MEMORIAL GOVERNMENT COLLAGE', '', '+2', 0, 0, ''),
(6, 'BA English Language & Literature', 'english', 'Applied Language Skills,World History, Social and ', '', 'POOKOYA THANGAL MEMORIAL GOVERNMENT COLLAGE', '', '+2', 0, 0, ''),
(7, 'BBA', 'business application', 'Finance,Hospitality Management', '', 'POOKOYA THANGAL MEMORIAL GOVERNMENT COLLAGE', '', '+2', 30000, 15000, '');

-- --------------------------------------------------------

--
-- Table structure for table `jobreg`
--

CREATE TABLE IF NOT EXISTS `jobreg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `academic_rquirement` varchar(100) NOT NULL,
  `skill_reqirement` varchar(100) NOT NULL,
  `job_salary` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `field_of_study` varchar(30) NOT NULL,
  `main_subject` varchar(30) NOT NULL,
  `major_subject` varchar(30) NOT NULL,
  `current_qualification_level` varchar(30) NOT NULL,
  `preffered_language` varchar(30) NOT NULL,
  `interest_area` varchar(30) NOT NULL,
  `technical_skill` varchar(30) NOT NULL,
  `non_technical_skill` varchar(30) NOT NULL,
  `other_skills` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `phone_number`, `contact_email`, `country`, `region`, `city`, `field_of_study`, `main_subject`, `major_subject`, `current_qualification_level`, `preffered_language`, `interest_area`, `technical_skill`, `non_technical_skill`, `other_skills`) VALUES
(1, 'shahla', 'koorimannil', '9539475009', 'shahlahamd@email.com', 'India', 'kerala', 'manjeri', 'computer science and engineeri', 'computer science', '', '+2', 'english', 'programming', 'nill', 'drawing', ''),
(2, 'shirin', 'kt', '954634788', 'shirinkt@gmail.com', 'India', 'kerala', 'perinthalmanna', 'computer science and engineeri', 'computer science', '', '', 'english', 'programming', 'coding', '', ''),
(3, 'safna', 'A', '978563827', 'safnaasdd@gmail.com', 'India', 'kerala', 'amminikkad', 'BA Arabic', '', '', '+2', '', '', '', 'play tennis', ''),
(4, 'abhishek', 'KT', '', 'abhimadd@gmail.com', 'India', 'kerala', 'malappuram', 'mechanical engineering', '', '', '', 'english', '', '', '', 'playing football'),
(5, 'shanoof', 'P', '9645764531', 'shanoof@gmail.com', 'India', 'kerala', 'manjeri', 'BA English Language & Literatu', '', '', '+2', 'english', 'literature', 'writer', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
