-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2020 at 04:26 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic_tables_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_list`
--

CREATE TABLE `students_list` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `student_age` int(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students_list`
--

INSERT INTO `students_list` (`id`, `student_id`, `student_name`, `student_age`, `student_class`) VALUES
(1, '3D-15420', 'Jon James', 13, 'CLASS-3D'),
(2, '3A-12020', 'Judith Simon', 11, 'CLASS-3A'),
(3, '2B-11920', 'Tyler Perry', 14, 'CLASS-2B'),
(4, '3D-07825', 'Sylvia Thompson', 11, 'CLASS-3D'),
(5, '1D-15420', 'Alex Bright', 13, 'CLASS-1D'),
(6, '3D-32647', 'Harry McCarthy', 13, 'CLASS-3D'),
(7, '3D-93827', 'Bright Trager', 12, 'CLASS-3D'),
(8, '3D-39373', 'Bart Simpson', 11, 'CLASS-3D'),
(9, '3D-87362', 'Jessi McDowell', 13, 'CLASS-3D'),
(10, '3C-09873', 'Holander Davids', 13, 'CLASS-3C'),
(11, '3D-29182', 'Mark Benneth', 12, 'CLASS-3D'),
(12, '3A-29364', 'Demi Levato', 13, 'CLASS-3A'),
(13, '3D-10271', 'Benny Hill', 13, 'CLASS-3D'),
(14, '2A-09362', 'Ronald Poole', 14, 'CLASS-2A'),
(15, '3D-93826', 'Olivia Mathhews', 13, 'CLASS-3D'),
(16, '3G-36453', 'Luna Watkins', 13, 'CLASS-3G'),
(17, '1D-29372', 'Kathie Perry', 12, 'CLASS-1D'),
(18, '2B-10283', 'Juliana Bryant', 13, 'CLASS-2B'),
(19, '3C-93763', 'Emily Sanders', 11, 'CLASS-3C'),
(20, '4D-29172', 'Alberto Simmons', 13, 'CLASS-4D');


--
-- Table structure for table `employers_list`
--

CREATE TABLE `employers_list` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(10) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(10) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employers_list`
--

INSERT INTO `employers_list` (`id`, `name`, `address`, `contact`, `zipcode`, `capacity`, `linkedin`, `facebook`, `instagram`) VALUES
(1, 'Condax', '7893 Smith Store St.Des Moines, IA 50310', '+12 099 837 212', '292832', 143, "@linkedin", "@facebook","@instagram" ),
(2, 'Gogozoom', '9046 Riverside Drive Richardson, TX 75080', '+12 099 837 212', '293323', 3343, "@linkedin", "@facebook","@instagram" ),
(3, 'Golddex', '38 Simon Street, Louisana', '+12 099 837 212', '503455', 100, "@linkedin", "@facebook","@instagram" ),
(4, 'Lexiqvolax', '91 Lower River Street Winchester, VA 22601', '+12 099 837 212', '101013', 134134, "@linkedin", "@facebook","@instagram" ),
(5, 'Iselectrics', '507 Oak St. Leominster, MA 01453', '+12 099 837 212', '90092', 45345, "@linkedin", "@facebook","@instagram" ),
(6, 'Zencorporation', '935 Division Drive Patchogue, NY 11772', '+12 099 837 212', '384736', 34543, "@linkedin", "@facebook","@instagram" ),
(7, 'Yearin', '346 Cedar St. Apt 36 Ft Mitchell, KY 41017', '+12 099 837 212', '2726253', 3243, "@linkedin", "@facebook","@instagram" ),
(8, 'Plusstrip', '7853 Briarwood Ave. Macomb, MI 48042', '+12 099 837 212', '039382', 45346434, "@linkedin", "@facebook","@instagram" ),
(9, 'dambase', '85 Delaware St. Langhorne, PA 19047', '+12 099 837 212', '19827', 543254, "@linkedin", "@facebook","@instagram" ),
(10, 'Zumgoity', '300 Arch St. Fairmont, WV 26554', '+12 099 837 212', '393923', 24524524, "@linkedin", "@facebook","@instagram" );



--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
 `id` int(100) NOT NULL AUTO_INCREMENT,
 `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
 `quantity` int(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`id`, `name`, `quantity`) VALUES
(1, 'Shoes', 131),
(2, 'Suits', 43),
(3, 'Bikinis', 33),
(4, 'ShoCummerbundes', 123),
(5, 'Hoody', 100),
(6, 'Boots', 123),
(7, 'Shoes', 37),
(8, 'Sweatshirt', 22),
(9, 'Shawl', 43),
(10, 'Poncho', 634),
(11, 'Fleece', 4234),
(12, 'Tie', 45),
(13, 'Swimwear', 5242),
(14, 'Top', 24),
(15, 'Robe', 241),
(16, 'Knickers', 3413),
(17, 'Blazer', 4545),
(18, 'Tights', 5654),
(19, 'Scarf', 443),
(21, 'Robe', 104),
(22, 'Blazer', 223),
(23, 'Corset', 444),
(24, 'Pajamas', 232),
(25, 'Overalls', 756),
(26, 'Camisole', 2343),
(27, 'Waistcoat', 9098),
(28, 'Cufflinks', 34534),
(29, 'Gloves', 222),
(30, 'Kilt', 5454);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


