-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 07:28 PM
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
-- Table structure for table `gorgeous_biz`
--

CREATE TABLE IF NOT EXISTS `gorgeous_biz` (
  `SERVICE_ID` int(4) NOT NULL AUTO_INCREMENT,
  `SERVICE_NAME` varchar(128) NOT NULL,
  `PRICE` float NOT NULL,
  `CLASS` varchar(128) NOT NULL,
  `DURATION` int(3) NOT NULL DEFAULT '70',
  `AVAILABILITY` tinyint(1) NOT NULL,
  UNIQUE KEY `Service_ID` (`SERVICE_ID`,`SERVICE_NAME`,`PRICE`,`CLASS`,`AVAILABILITY`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2079 ;

--
-- Dumping data for table `gorgeous_biz`
--

INSERT INTO `gorgeous_biz` (`SERVICE_ID`, `SERVICE_NAME`, `PRICE`, `CLASS`, `DURATION`, `AVAILABILITY`) VALUES
(2000, 'Basic clean up', 400, 'FACIAL', 60, 1),
(2001, 'Fruit Secret Facial  ', 600, 'FACIAL', 60, 1),
(2002, 'Spirulona Facial', 800, 'FACIAL', 60, 1),
(2003, 'Herbal Secret Facial  ', 750, 'FACIAL', 60, 1),
(2004, 'Aroma Skin Lightening Facial  ', 1000, 'FACIAL', 60, 1),
(2005, 'Strawberry vitamin - C Face Spa  ', 1100, 'FACIAL', 60, 1),
(2006, 'Chocolate Face Spa  ', 1150, 'FACIAL', 60, 1),
(2007, 'Fair bloom Facial  ', 1300, 'FACIAL', 60, 1),
(2008, 'Perfect White Facial  ', 1700, 'ULITIMATEFACIAL', 60, 1),
(2009, '24 Karat Facial  ', 1800, 'ULITIMATEFACIAL', 60, 1),
(2010, 'Skin Lightening Advanced Facial ', 2000, 'ULITIMATEFACIAL', 60, 1),
(2011, 'Insta Whitening Facial  ', 2200, 'ULITIMATEFACIAL', 60, 1),
(2012, 'Perfect White - Ultimate Facial (with double mask)', 2300, 'ULITIMATEFACIAL', 60, 1),
(2013, '24 Karat Gold - Ultimate Facial (with double mask)', 2500, 'ULITIMATEFACIAL', 60, 1),
(2013, 'Oxygen Facial  ', 2700, 'ULITIMATEFACIAL', 60, 1),
(2014, 'Vitamin Vegetable Mask (lightens skin)  ', 800, 'SPECIALMASK', 60, 1),
(2015, 'Green Mask (revitalized skin)  ', 800, 'SPECIALMASK', 60, 1),
(2016, 'Goji Mask (younger & tighter skin)  ', 900, 'SPECIALMASK', 60, 1),
(2017, 'Gold Mask (glowing & moisturized skin)  ', 1000, 'SPECIALMASK', 60, 1),
(2018, 'Face (cream bleach)  ', 150, 'DETANANDBLEACH', 60, 1),
(2019, 'Neck (cream bleach)  ', 150, 'DETANANDBLEACH', 60, 1),
(2020, 'Face (Detan)  ', 230, 'DETAN', 60, 1),
(2021, 'Neck (Detan)  ', 230, 'DETAN', 60, 1),
(2022, 'Feet (Detan)', 340, 'DETAN', 60, 1),
(2023, 'Half Arm (Detan)', 400, 'DETAN', 60, 1),
(2024, 'Full Arm (Detan)  ', 600, 'DETAN', 60, 1),
(2025, 'Full Body (Detan)  ', 2700, 'DETAN', 60, 1),
(2026, 'Galvanic Facial ', 1258, 'SPECIALTREATMENTS', 60, 1),
(2027, 'Galvanic Facial ', 524, 'SPECIALTREATMENTS', 60, 1),
(2028, 'Black heads & White heads remover ', 100, 'SPECIALTREATMENTS', 60, 1),
(2029, 'Dandruff ', 250, 'SPECIALTREATMENTS', 60, 1),
(2030, 'Pigmentation Treatment', 200, 'SPECIALTREATMENTS', 60, 1),
(2031, 'Neck Black Treatment', 200, 'SPECIALTREATMENTS', 60, 1),
(2032, 'Under Eye Treatment ', 250, 'SPECIALTREATMENTS', 60, 1),
(2033, 'HAIR WASH & CONDITIONER ', 100, 'HAIRTREATMENTS', 60, 1),
(2034, 'Anti Dandruff Treatment ', 600, 'HAIRTREATMENTS', 60, 1),
(2035, 'Mythic Shine Magic (According to Length)', 700, 'HAIRTREATMENTS', 60, 1),
(2036, 'Mythic Repair Magic (According to Length)', 600, 'HAIRTREATMENTS', 60, 1),
(2037, 'Mythic Smooth Magic (According to Length)', 950, 'HAIRTREATMENTS', 60, 1),
(2038, 'Pure Coconut Nourisher  ', 375, 'HEADMASSAGE', 60, 1),
(2039, 'Menthol Chiller', 375, 'HEADMASSAGE', 60, 1),
(2040, 'Olive Bliss', 400, 'HEADMASSAGE', 60, 1),
(2041, 'Almond Indulgence', 400, 'HEADMASSAGE', 60, 1),
(2042, 'Express Oil Spa', 480, 'HAIRSPALOREAL', 60, 1),
(2043, 'Hair Spa ', 700, 'HAIRSPALOREAL', 60, 1),
(2044, 'Detox Hair Spa', 950, 'HAIRSPALOREAL', 60, 1),
(2045, 'Henna Coloring with conditioner - Short Hair (with shampoo conditioner & blast styling)', 400, 'HENNA', 60, 1),
(2046, 'Herbal Henna without Hair wash', 250, 'HENNA', 60, 1),
(2047, 'Herbal Hair Dye', 150, 'HENNA', 60, 1),
(2048, 'Streaking & Highlighting ', 220, 'HAIRCOLOURING', 60, 1),
(2049, 'Sunkist', 250, 'HAIRCOLOURING', 60, 1),
(2050, 'Global according to Hair Length  ', 700, 'HAIRCOLOURING', 60, 1),
(2051, 'HAIR STRAIGHTENING TEMPERARY (ACCORDING TO HAIR LENGTH)', 500, 'HAIRSTRAIGHTENING', 60, 1),
(2052, 'HAIR STRAIGHTENING PERMENENT (ACCORDING TO HAIR LENGTH)', 3000, 'HAIRSTRAIGHTENING', 60, 1),
(2053, 'HAIR SMOOTHNING (ACCORDING TO HAIR LENGTH)', 3000, 'HAIRSTRAIGHTENING', 60, 1),
(2054, 'Half Arms ', 300, 'WAXING', 60, 1),
(2055, 'Full Arms ', 400, 'WAXING', 60, 1),
(2055, 'Legs', 400, 'WAXING', 60, 1),
(2056, 'Under Arms', 65, 'WAXING', 60, 1),
(2057, 'Full Face', 200, 'WAXING', 60, 1),
(2058, 'Full Back', 370, 'WAXING', 60, 1),
(2059, 'Half Arms ', 350, 'FLAVOUREDWAXING', 60, 1),
(2060, 'Full Arms ', 450, 'FLAVOUREDWAXING', 60, 1),
(2061, 'Legs', 450, 'FLAVOUREDWAXING', 60, 1),
(2062, 'Under Arms', 100, 'FLAVOUREDWAXING', 60, 1),
(2063, 'Full Back', 450, 'FLAVOUREDWAXING', 60, 1),
(2064, 'Full Face', 250, 'FLAVOUREDWAXING', 60, 1),
(2065, 'Half Arms', 0, 'SPECIALWAXING', 60, 1),
(2066, 'Full Arms', 0, 'SPECIALWAXING', 60, 1),
(2067, 'Legs', 0, 'SPECIALWAXING', 60, 1),
(2068, 'Under Arms', 0, 'SPECIALWAXING', 60, 1),
(2069, 'Full Face', 0, 'SPECIALWAXING', 60, 1),
(2070, 'Full Back', 0, 'SPECIALWAXING', 60, 1),
(2071, 'Heal Peel Treatments (3 sittings)', 1500, 'SPA', 60, 1),
(2072, 'Foot Spa', 500, 'SPA', 60, 1),
(2073, 'Hand Spa', 300, 'SPA', 60, 1),
(2074, 'Body Spa', 1500, 'SPA', 60, 1),
(2075, 'Body Polishing', 3000, 'SPA', 60, 1),
(2076, 'Body Polishing with sauna bauth', 3500, 'SPA', 60, 1),
(2077, 'Classic Manicure', 450, 'NAILING', 60, 1),
(2078, 'Classic Pedicure', 600, 'NAILING', 60, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
