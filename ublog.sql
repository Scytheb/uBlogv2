-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2012 at 04:15 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ublog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `stuff` longtext COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `blogdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blogid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogid`, `userid`, `title`, `stuff`, `image`, `blogdate`) VALUES
(1, 3, 'Finally', 'Controller should work', '', '2011-12-29 19:20:36'),
(2, 3, 'second', 'lololol', '', '2011-12-29 20:25:34'),
(3, 3, 'hohoho', 'merry christmass', '', '2011-12-30 13:21:47'),
(4, 2, 'omgomg', 'lolol', '', '2011-12-30 17:54:18'),
(5, 2, 'fasdf', 'sadfasd', '', '2011-12-30 17:54:48'),
(6, 2, 'hahaha ', 'thris post\r\n', '', '2011-12-31 12:25:25'),
(7, 2, 'hahah', 'kai 3 lol', '', '2011-12-31 12:30:30'),
(9, 2, 'Newww', 'awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg \r\nawserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg awserogiwe4p;oihwseorg ', '', '2012-01-01 15:44:42'),
(10, 2, 'asdfasdf', '32534t34tg345y', '', '2012-01-01 15:55:46'),
(11, 2, '', '', '', '2012-01-01 19:12:24'),
(12, 2, 'Titel', 'keimeno', '', '2012-01-01 19:12:41'),
(13, 2, 'Bombistikh epithesh xthes stin omonoia', 'WAPTIWAJETGPIUJwe sdfhsdrhswerhoije  WAPTIWAJETGPIUJwe sdfhsdrhswerhoije  WAPTIWAJETGPIUJwe sdfhsdrhswerhoije  WAPTIWAJETGPIUJwe sdfhsdrhswerhoije  WAPTIWAJETGPIUJwe sdfhsdrhswerhoije  ', '', '2012-01-01 19:13:58'),
(14, 2, 'Kainourgio pOstq', 'sdglksdjfglkjsdfg', '', '2012-01-01 19:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `enter` tinyint(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `email`, `enter`, `created`) VALUES
(9, 'ela re mlaka', '147c70c5f0987745f68e334d31a36cbcaddc2f7a', 'fwergh', 0, '2012-01-01 19:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `surname` varchar(20) COLLATE utf8_bin NOT NULL,
  `location` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'NULL',
  `occupation` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'NULL',
  `interests` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT 'NULL',
  `posts` int(20) NOT NULL,
  `avatar` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'NULL',
  `website` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
