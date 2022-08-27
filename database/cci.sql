-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2016 at 01:44 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cci`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about-id` int(50) NOT NULL AUTO_INCREMENT,
  `image3` mediumtext NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`about-id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about-id`, `image3`, `status`) VALUES
(10, 'Picture1.jpg', 'off'),
(12, 'all.pnp.JPG', 'off'),
(13, 'about us.png', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` mediumtext NOT NULL,
  `request_status` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `recovery_question` varchar(200) NOT NULL,
  `answer` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user_id`, `username`, `passwords`, `user_type`, `email`, `image`, `request_status`, `fname`, `mname`, `recovery_question`, `answer`) VALUES
(27, '112255', 'YWxlbXUxMTE=', 'c2FyYTIyMjI=', 'admin', 'aleewen18@gmial.com', 'DSC_5901.JPG', 'Accepted', 'Dese', 'Wendimu', 'What is your nickname?', 'ale'),
(28, '114477', 'eW9oZ3V0MjE=', 'eW9oZ3V0MjE=', 'department', 'yohgut21@gmail.com', 'DSC_6086.JPG', 'Accepted', 'yohannis', 'gutema', 'What is your nickname?', 'nasa'),
(29, '114488', 'eW9oZ3V0MjI=', 'eW9oZ3V0MjI=', 'registrar', 'yohgut22@gmail.com', 'DSC_5926.JPG', 'Accepted', 'kajela', 'niguse', '', 'yoh'),
(31, '101104', 'cmFtZ29zMTc=', 'cmFtZ29zMTc=', 'student', 'ramgo16@gmail.com', '1036-014-22-1069.gif', 'Accepted', 'rameto', 'gose', '', 'ram'),
(32, '101102', 'ZGF3dGVzMTg=', 'ZGF3dGVzMTg=', 'student', 'dawtes500@gmail.com', 'DSC_6031.JPG', 'Accepted', 'dawit', 'tesfaye', 'What is your nickname?', 'daw'),
(33, '101103', 'YXl1azE4MDQ=', 'YXl1azE4MDQ=', 'student', 'ayuk1804@gmail.com', '20160129220020.jpg', 'Accepted', 'ayenachewu', 'kasa', '', 'ayu'),
(36, '101113', 'aGFiYXJhMDU=', 'aGFiYXJhMDU=', 'student', 'habar12@gmail.com', 'all.jpg', 'Accepted', 'habtamu', 'ararse', '', 'hab'),
(38, '121212', 'YWxlbXUxMjM=', 'MTIzNDU2Nzg=', 'department', 'asewen18@gmail.com', '', 'Accepted', 'des', 'gutema', '', ''),
(39, '100200', 'c2FyYTEyMzQ=', 'c2FyYTEyMzQ=', 'department', 'sara123@gmail.com', '', 'Accepted', 'sara', 'atlaw', '', ''),
(45, '321654', 'dG9sYTEyMzQ=', 'dG9sYTEyMzQ=', 'department', 'yohgut@gmail.com', '', 'Accepted', 'abe', 'nao', '', ''),
(46, '101110', 'c3R1NzM4Nw==', 'cGFzMTMxNzY=', 'student', 'hjf1@gmail.com', '', 'Accepted', 'abeba', 'abekebe', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `statu` text NOT NULL,
  `status` text NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `content`, `email`, `date`, `deadline`, `statu`, `status`, `position`) VALUES
(3, 'desalegn', 'selam newu endt nesh', 'asewen18@gmail.com', '16-06-26', '16-07-01', 'posted', 'comm', ''),
(4, 'ayenachewu', 'endet nesh alesh', 'dawtes500@gmail.com', '16-06-26', '16-07-01', 'posted', 'comm', ''),
(5, 'sara', 'well come', 'sara@gmail.com', '16-06-27', '16-07-02', 'posted', 'comm', ''),
(6, 'ayenachewu', 'sdesdsd', 'ayuk1804@gmail.com', '16-06-28', '16-07-03', 'posted', 'comm', 'student'),
(7, 'ayenachewu', 'please che it', 'ayuk1804@gmail.com', '16-06-28', '16-07-03', 'posted', 'comm', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `subject_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `unit` int(50) NOT NULL,
  `pre_requisites` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `instname` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=438 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`subject_id`, `user_id`, `year`, `term`, `code`, `title`, `unit`, `pre_requisites`, `course`, `instname`) VALUES
(313, 101101, 'Third Year', '1st', 'IS109', 'information and security', 3, '', 'information systems', 'yohanis gutema'),
(314, 101101, 'Third Year', '1st', 'IS110', 'internet programming I', 3, '', 'information systems', 'wendimu bereda'),
(327, 101102, 'First year', '2nd', 'IS103', 'programming II', 3, 'programming I', 'information systems', 'misigina fikadu'),
(328, 101102, 'First year', '2nd', 'IS104', 'introduction to management', 3, '', 'information systems', 'Rahma amati'),
(329, 101102, 'Second year', '1st', 'IS105', 'object oriented programming', 4, 'programming II', 'information systems', 'Tesfu haftom'),
(330, 101102, 'Second year', '1st', 'IS106', 'fundamental of database', 3, '', 'information systems', 'Beyene bedasa'),
(331, 101102, 'Second year', '2nd', 'IS107', 'event driven programming', 4, 'object oriented programming', 'information systems', 'Haily hailu'),
(332, 101102, 'Second year', '2nd', 'IS108', 'advanced database', 3, 'fundamental of database', 'information systems', 'Muluken mule'),
(333, 101102, 'Third year', '1st', 'IS109', 'information and security', 3, '', 'information systems', 'Haily nirya'),
(334, 101102, 'Third year', '1st', 'IS110', 'internet programming I', 3, '', 'information systems', 'Kedir gena'),
(335, 101102, 'Third year', '2nd', 'IS111', 'internet programming II', 3, 'internet programming I', 'information systems', 'kelemu shefete'),
(336, 101102, 'Third year', '2nd', 'IS112', 'data mining', 3, '', 'information systems', 'yadechu tolcha'),
(337, 101102, 'First year', '1st', 'IS101', 'introduction to information systems', 4, '', 'information systems', 'tigist girma'),
(338, 101102, 'First year', '1st', 'IS102', 'programming I', 3, '', 'information systems', 'abenezer bayu'),
(343, 101113, 'First year', '1st', 'IS101', 'introduction to information systems', 4, '', 'information systems', 'yohanis gutema'),
(344, 101113, 'First year', '1st', 'IS102', 'programming I', 3, '', 'information systems', 'danay misigna'),
(345, 101103, 'First year', '1st', 'IS101', 'introduction to information systems', 4, '', 'information systems', 'yohanis gutema'),
(346, 101103, 'First year', '1st', 'IS102', 'programming I', 3, '', 'information systems', 'danay misigna'),
(429, 101104, 'First year', '1st', 'IS101', 'introduction to information systems', 4, '', 'information systems', 'yohanis gutema'),
(430, 101104, 'First year', '1st', 'IS102', 'programming I', 3, '', 'information systems', 'danay misigna'),
(432, 101103, 'First year', '2nd', 'IS104', 'introduction to management', 3, '', 'information systems', 'habtamu ararse'),
(433, 101103, 'Second year', '1st', 'IS105', 'object oriented programming', 4, 'programming II', 'information systems', 'habtamu desalegn'),
(434, 101103, 'Second year', '1st', 'IS106', 'fundamental of database', 3, '', 'information systems', 'yohanis gutema'),
(435, 101103, 'Second year', '1st', 'IS456', 'information systems', 2, '', 'information systems', 'yohanis gutema'),
(436, 101110, 'First year', '1st', 'IS101', 'introduction to information systems', 4, '', 'information systems', 'yohanis gutema'),
(437, 101110, 'First year', '1st', 'IS102', 'programming I', 3, '', 'information systems', 'danay misigna');

-- --------------------------------------------------------

--
-- Table structure for table `datecontrol`
--

CREATE TABLE IF NOT EXISTS `datecontrol` (
  `ID` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datecontrol`
--

INSERT INTO `datecontrol` (`ID`, `reg_date`, `deadline`) VALUES
(0, '2016-06-30', '2016-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `course_id` int(50) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`course_id`, `code`, `title`) VALUES
(4, 'IT32', 'information technology'),
(5, 'SWE', 'software Enginering'),
(7, 'cs123', 'computer science'),
(10, 'info101', 'information systems');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gen_ave` varchar(200) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `Grade` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `uid`, `subject_id`, `code`, `title`, `gen_ave`, `school_year`, `semester`, `Grade`, `unit`) VALUES
(1, 101102, '24', 'IS101', 'introduction to information systems', '3.5', 'First year', '1st', 'B+', '4'),
(2, 101102, '25', 'IS102', 'programming I', '4', 'First year', '1st', 'A+', '3'),
(3, 101103, '24', 'IS101', 'introduction to information systems', '4', 'First year', '1st', 'A', '4'),
(4, 101103, '25', 'IS102', 'programming I', '0', 'First year', '1st', 'Fx', '3'),
(5, 101102, '26', 'IS103', 'programming II', '4', 'First year', '2nd', 'A', '3'),
(6, 101102, '27', 'IS104', 'introduction to management', '3', 'First year', '2nd', 'B', '3'),
(7, 101102, '28', 'IS105', 'object oriented programming', '3.5', 'Second year', '1st', 'B+', '4'),
(8, 101102, '29', 'IS106', 'fundamental of database', '2.75', 'Second year', '1st', 'B-', '3'),
(9, 101102, '30', 'IS107', 'event driven programming', '3', 'Second year', '2nd', 'B', '4'),
(10, 101102, '31', 'IS108', 'advanced database', '4', 'Second year', '2nd', 'A', '3'),
(11, 101102, '32', 'IS109', 'information and security', '3', 'Third year', '1st', 'B', '3'),
(12, 101102, '33', 'IS110', 'internet programming I', '3.75', 'Third year', '1st', 'A-', '3'),
(13, 101102, '34', 'IS111', 'internet programming II', '4', 'Third year', '2nd', 'A', '3'),
(14, 101102, '35', 'IS112', 'data mining', '4', 'Third year', '2nd', 'A', '3'),
(20, 101110, '24', 'IS101', 'introduction to information systems', '3.5', 'First year', '1st', 'B+', '4'),
(21, 101110, '25', 'IS102', 'programming I', '2.75', 'First year', '1st', 'B-', '3');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `inst_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`inst_id`, `user_id`, `fname`, `lname`, `department`, `qual`, `sex`, `date`) VALUES
(5, 111102, 'yohanis', 'gutema', 'information systems', 'Msc', 'Male', '06-02-16'),
(6, 111104, 'danay', 'misigna', 'information systems', 'Msc', 'Male', '06-04-16'),
(7, 111105, 'zerihujn', 'driba', 'information systems', 'AS.profesor', 'Male', '06-04-16'),
(8, 111106, 'habtamu', 'ararse', 'information systems', 'Msc', 'Male', '06-04-16'),
(9, 111107, 'habtamu', 'desalegn', 'information systems', 'Msc', 'Male', '06-04-16'),
(10, 100200, 'sara', 'atlaw', 'information systems', 'PHD', 'Female', '06-27-16');

-- --------------------------------------------------------

--
-- Table structure for table `post_noticee`
--

CREATE TABLE IF NOT EXISTS `post_noticee` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_content` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `statu` varchar(89) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post_noticee`
--

INSERT INTO `post_noticee` (`post_id`, `date`, `deadline`, `post_title`, `post_content`, `username`, `status`, `statu`) VALUES
(8, '06-25-16', '16-07-05', 'dese selam newu', 'Haramaya University College of continuing and distance education E-learning is a web based application which aim to change the manual system into a computerized one which overcome the difficulties of the manual system and make the college beneficiary.  \r\nThe developed system makes the process of learning and teaching process more attractive by reducing the problem currently faced by the college. This paper shows the problem of the existing system and the design of the new proposed system and show the solution to the problems of the existing system\r\n', 'registrar', 'posted', 'posst');

-- --------------------------------------------------------

--
-- Table structure for table `studentgrade`
--

CREATE TABLE IF NOT EXISTS `studentgrade` (
  `grade_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(89) NOT NULL,
  `code` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(89) NOT NULL,
  `grade` text NOT NULL,
  `user_type` varchar(89) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `studentgrade`
--

INSERT INTO `studentgrade` (`grade_id`, `name`, `code`, `fname`, `lname`, `grade`, `user_type`) VALUES
(65, 'rewr', 'reew', 'wer', 'wer', 'front page.docx', 'department'),
(66, 'rer', 'ewrew', 'ewrew', 'ewrew', 'edit.docx', 'department'),
(68, 'java', 'ccc', 'dessss', 'dessss', 'CHAPTER TWO.docx', 'department'),
(69, 'database', 'IS11111', 'yohanis', 'yohanis', 'Book1.csv', 'department'),
(70, 'information systems', 'IS456', 'sara', 'sara', 'Book1.csv', 'department'),
(71, 'information systems', 'IS102', 'john', 'john', '101110.csv', 'department');

-- --------------------------------------------------------

--
-- Table structure for table `studentt`
--

CREATE TABLE IF NOT EXISTS `studentt` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deadline` varchar(89) NOT NULL,
  `controlstatus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `studentt`
--

INSERT INTO `studentt` (`id`, `uid`, `fname`, `mname`, `lname`, `year`, `semester`, `email`, `phone`, `date`, `region`, `department`, `status`, `deadline`, `controlstatus`) VALUES
(12, 101102, 'dawit', 'tesfaye', 'gebretshadik', 'First year', '1st', 'dawtes500@gmail.com', 912034952, '2016-05-26', 'oromia', 'information systems', 'regular', 'Active', 'finished'),
(13, 101103, 'ayenachewu', 'kasa', 'mirete', 'First year', '1st', 'ayuk1804@gmail.com', 963256355, '2016-05-26', 'amhara', 'information systems', 'regular', 'Active', 'finished'),
(15, 101104, 'rameto', 'gose', 'robi', 'First year', '1st', 'ramgo16@gmail.com', 916151413, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finish'),
(24, 101102, 'dawit', 'tesfayee', 'gebretshadik', 'First year', '2nd', 'dawtes500@gmail.com', 912034952, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finished'),
(25, 101102, 'dawit', 'tesfayee', 'gebretshadik', 'Second year', '1st', 'dawtes500@gmail.com', 912034952, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finished'),
(26, 101102, 'dawit', 'tesfayee', 'gebretshadik', 'Second year', '2nd', 'dawtes500@gmail.com', 912034952, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finished'),
(27, 101102, 'dawit', 'tesfayee', 'gebretshadik', 'Third year', '1st', 'dawtes500@gmail.com', 912034952, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finished'),
(28, 101102, 'dawit', 'tesfayee', 'gebretshadik', 'Third year', '2nd', 'dawtes500@gmail.com', 912034952, '2016-05-27', 'oromia', 'information systems', 'regular', 'Active', 'finish'),
(32, 101113, 'habtamu', 'ararse', 'kwuye', 'First year', '1st', 'habar12@gmail.com', 913457898, '2016-06-07', 'Amhara', 'information systems', 'regular', 'Active', 'finish'),
(48, 101103, 'ayenachewu', 'kasa', 'mirete', 'First year', '2nd', 'ayuk1804@gmail.com', 963256355, '16-06-26', 'amhara', 'information systems', 'regular', 'Active', 'finished'),
(52, 101103, 'ayenachewu', 'kasa', 'mirete', 'Second year', '1st', 'ayuk1804@gmail.com', 963256355, '16-06-29', 'amhara', 'information systems', 'regular', 'Active', 'finish'),
(53, 147258, 'akkas', 'akkana', 'akkasuma', 'First year', '1st', 'ak1@gmail.com', 925892356, '2016-06-30', 'Oromia', 'information technology', 'regular', 'Active', 'finish'),
(55, 101110, 'abeba', 'abekebe', 'kejelanihg', 'First year', '1st', 'hjf1@gmail.com', 926589565, '2016-06-30', 'Oromia', 'information systems', 'regular', 'Active', 'finish');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(50) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `term` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(80) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `pre_requisites` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `inst_id` int(200) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `year`, `term`, `code`, `title`, `unit`, `pre_requisites`, `course`, `inst_id`, `instructor`) VALUES
(24, 'First year', '1st', 'IS101', 'introduction to information systems', '4', '', 'information systems', 111102, 'yohanis gutema'),
(25, 'First year', '1st', 'IS102', 'programming I', '3', '', 'information systems', 111104, 'danay misigna'),
(26, 'First year', '2nd', 'IS103', 'programming II', '3', 'programming I', 'information systems', 111105, 'zerihujn driba'),
(27, 'First year', '2nd', 'IS104', 'introduction to management', '3', '', 'information systems', 111106, 'habtamu ararse'),
(28, 'Second year', '1st', 'IS105', 'object oriented programming', '4', 'programming II', 'information systems', 111107, 'habtamu desalegn'),
(29, 'Second year', '1st', 'IS106', 'fundamental of database', '3', '', 'information systems', 111102, 'yohanis gutema'),
(30, 'Second year', '2nd', 'IS107', 'event driven programming', '4', 'object oriented programming', 'information systems', 111104, 'danay misigna'),
(31, 'Second year', '2nd', 'IS108', 'advanced database', '3', 'fundamental of database', 'information systems', 111105, 'zerihujn driba'),
(32, 'Third year', '1st', 'IS109', 'information and security', '3', '', 'information systems', 111106, 'habtamu ararse'),
(33, 'Third year', '1st', 'IS110', 'internet programming I', '3', '', 'information systems', 111107, 'habtamu desalegn'),
(34, 'Third year', '2nd', 'IS111', 'internet programming II', '3', 'internet programming I', 'information systems', 111102, 'yohanis gutema'),
(35, 'Third year', '2nd', 'IS112', 'data mining', '3', '', 'information systems', 111104, 'danay misigna'),
(36, 'Fourth year', '1st', 'IS113', 'human and computer interaction', '3', '', 'information systems', 111105, 'zerihujn driba'),
(37, 'Fourth year', '1st', 'IS114', 'general psychology', '3', '', 'information systems', 111105, 'zerihujn driba'),
(38, 'Fourth year', '2nd', 'IS115', 'civic and ethical education', '3', '', 'information systems', 111106, 'habtamu ararse'),
(39, 'Fourth year', '2nd', 'IS116', 'organizational behaviour', '3', '', 'information systems', 111107, 'habtamu desalegn'),
(40, 'Second year', '1st', 'IS456', 'information systems', '2', '', 'information systems', 111102, 'yohanis gutema'),
(41, 'First year', '1st', '1245abc', 'peogramin', '3', '', 'information systems', 111102, 'yohanis gutema');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `image1` mediumtext NOT NULL,
  `image2` mediumtext NOT NULL,
  `image3` mediumtext NOT NULL,
  `image4` mediumtext NOT NULL,
  `user_type` varchar(200) NOT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`up_id`, `news`, `image1`, `image2`, `image3`, `image4`, `user_type`) VALUES
(14, 'The College of Computing and Informatics was found in Haramaya University. In its original intention computingrefers to statistics while informatics is for computer sciences fields. The college was established in April 2008 by bringing together the three departments- Computer Science, Management Information Systemhttp://gib.haramaya.edu/academics/college-of-computing-and-informatics/sand Information Studies that were established under the Faculty of Business and Economics. At this time College of computing and informatics is running six department programs at UG (Undergraduate) these are Computer Science,Information Science, Information Systems, Information Technology, Software Engineering, and Statistics and postgraduate in Information Science(Regular and summer), Statistics (Regular and summer)with following specializations: -Econometrics Stream, Biometry Stream CCI had less than 13 academic staffs including its three Technical Assistants on its establishment but as of December 2014 it has more than 100 college staffs including instructors, TAs, Secretaries, Messengers and Registrar. The college currently has 7 classrooms for its 5 batches! and 11 laboratories', '1 (2).jpg', '1 (18).jpg', '8d22b49afd23baf97986ba3a5582a097-d4n9qh4.jpg', '1 (19).jpg', '112255');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
