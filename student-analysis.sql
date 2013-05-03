-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2013 at 12:24 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student-analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` int(11) NOT NULL,
  `idSupervisor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE IF NOT EXISTS `science` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(16) COLLATE utf8_bin NOT NULL,
  `SecondName` varchar(16) COLLATE utf8_bin NOT NULL,
  `FatherName` varchar(16) COLLATE utf8_bin NOT NULL,
  `JoinDate` date NOT NULL,
  `BirthDate` date NOT NULL,
  `Class` tinyint(4) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(254) COLLATE utf8_bin NOT NULL,
  `FaceBook` varchar(254) COLLATE utf8_bin NOT NULL,
  `Twitter` varchar(254) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` int(11) NOT NULL,
  `idScience` int(11) NOT NULL,
  `Description` tinytext COLLATE utf8_bin NOT NULL,
  `Book` varchar(32) COLLATE utf8_bin NOT NULL,
  `Author` varchar(32) COLLATE utf8_bin NOT NULL,
  `FromAge` int(2) NOT NULL,
  `ToAge` int(2) NOT NULL,
  `TermsAttendance` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(16) COLLATE utf8_bin NOT NULL,
  `SecondName` varchar(16) COLLATE utf8_bin NOT NULL,
  `BirthDate` date NOT NULL,
  `idPermission` int(11) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(254) COLLATE utf8_bin NOT NULL,
  `FaceBook` varchar(254) COLLATE utf8_bin NOT NULL,
  `Twitter` varchar(254) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject_time`
--

CREATE TABLE IF NOT EXISTS `teacher_subject_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTeacher` int(11) NOT NULL,
  `idSubject` int(11) NOT NULL,
  `idClass` int(11) NOT NULL,
  `SessionNum` int(4) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
