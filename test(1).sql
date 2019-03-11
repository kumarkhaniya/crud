-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 07:22 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE IF NOT EXISTS `hello` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`id`, `username`, `email`, `password`, `datetime`) VALUES
(1, 'amish', 'aaa@gmail.com', '123123', '0000-00-00 00:00:00'),
(2, 'jjj', 'ja@g.com', '121212', '0000-00-00 00:00:00'),
(3, 'jeny', 'jeny@gmail.com', '123123', '0000-00-00 00:00:00'),
(4, 'reena', 'reena@gmail.com', '123123', '0000-00-00 00:00:00'),
(5, 'gopi', 'gopi@gmail.com', '123123', '0000-00-00 00:00:00'),
(8, 'sa', 'am@gmail.com', 'asasa', '2017-08-29 06:32:50'),
(9, 'as', 'am@gmail.com', 'asasasasa', '2017-08-29 06:33:19'),
(10, 'ammm', 'amfdfd@gmail.com', 'sadsadsad', '0000-00-00 00:00:00'),
(11, 'asassa', 'amfdfd@gmail.com', 'asasas', '2017-08-29 06:54:12'),
(12, 'asa', 'd@g.com', 'fdfdf', '2017-08-29 06:57:29'),
(13, 'sdcsd', 'd@g.com', 'sdsfd', '2017-08-29 06:57:57'),
(14, 'amidsdsds', 'd@g.com', 'dfdfd', '0000-00-00 00:00:00'),
(15, 'scvcvf', 'd@g.com', 'sdsd', '0000-00-00 00:00:00'),
(16, 'rtrt', 'd@g.com', 'fdfd', '0000-00-00 00:00:00'),
(17, 'tttt', 't@g.com', '121212', '0000-00-00 00:00:00'),
(18, 'uuu', 'd@g.com', 'fdfd', '2017-08-29 07:05:01'),
(19, 'ytytyty', 'a@g.com', '121212121', '2017-08-29 07:05:33'),
(20, 'uuuuuu', 'r@g.com', 'AQWQW', '2017-08-29 07:06:43'),
(21, 'sd', 'd@g.com', 'sdsd', '0000-00-00 00:00:00'),
(22, 's', 'w@g.com', 'vdf', '0000-00-00 00:00:00'),
(23, 'rtrtrtrtrtrrt', 'd@g.com', 'jkj', '2017-08-11 01:59:00'),
(24, 'januuu', 'j@g.com', 'zdxsads', '2017-08-11 02:58:00'),
(25, 'surya', 'sur@gmail.com', '12121212', '2017-08-01 01:59:00'),
(26, 'jhjh', 'har@gmail.com', 'wqwq', '2017-08-16 03:01:00'),
(27, 'jitu', 'jitu@gmail.com', 'asasasasasa', '2017-08-04 01:00:00'),
(28, 'minu', 'mina@gmail.com', 'amishpatel', '2017-08-11 14:01:00');
