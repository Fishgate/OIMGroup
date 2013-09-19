-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2013 at 01:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oimgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactlogs`
--

CREATE TABLE IF NOT EXISTS `contactlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `company` text NOT NULL,
  `enquiry` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `unix` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contactlogs`
--

INSERT INTO `contactlogs` (`id`, `name`, `company`, `enquiry`, `number`, `email`, `message`, `date`, `unix`) VALUES
(1, 'kyle', '', '', '123', 'kyle@fishgate.co.za', '123', '17-09-2013', '1379408689'),
(2, 'Tyrone', '', '', '78945123', 'kyle@fishgate.co.za', '123', '17-09-2013', '1379423039'),
(3, '123', '', '', '123', 'qwe@qwe.qwe', 'qwe', '17-09-2013', '1379423201'),
(4, 'Kyle', '', 'Sales enquiry', '', 'kyle@fishgate.co.za', '', '19-09-2013', '1379590528'),
(5, 'Kyle', 'Fishgate', 'Sales enquiry', '123456789', 'kyle@fishgate.co.za', 'Hello', '19-09-2013', '1379590562');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
