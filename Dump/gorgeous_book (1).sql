-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 07:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectx`
--

-- --------------------------------------------------------

--
-- Table structure for table `gorgeous_book`
--

CREATE TABLE IF NOT EXISTS `gorgeous_book` (
  `BOOK_ID` int(6) NOT NULL,
  `USER_ID` int(6) NOT NULL,
  `CUSTOMER_NAME` varchar(256) NOT NULL,
  `MOBILE_NO` int(10) NOT NULL,
  `EMAIL` varchar(256) NOT NULL,
  `SERVICE_AT` varchar(256) NOT NULL,
  `APPOINTMENT_FOR` varchar(256) NOT NULL,
  `SERVICE_NAME` varchar(256) NOT NULL,
  `SERVICE_PRICE` int(5) NOT NULL,
  `SERVICE_TIME` int(3) NOT NULL DEFAULT '70'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
