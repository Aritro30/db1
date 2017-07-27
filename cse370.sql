-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2017 at 05:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse370`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `name` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(65) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`name`, `email`, `phone`, `address`, `age`, `gender`, `blood`) VALUES
('Shiny Raisa', 'shinyraisa@gmai', 17, 'Uttara', '0', 'female', 'Bitch+ve'),
('Hui', 'hui@ymail.com', 0, 'Eskaton', '22', 'idk', 'idk'),
('Shiny Raisa', 'hghjgjhgj', 0, 'Wonderland', '1', 'female', '+'),
('saadat', 'saadat@ymail.com', 875908713, 'jgfhjkadgj', '02', 'male', 'AB+'),
('saadat', 'saadat@ymail.com', 875908713, 'jgfhjkadgj', '02', 'male', 'AB+'),
('Shiny Raisa', 'dgfg@gmail.com', 17, 'mohakhali', '40', 'female', 'A+ve'),
('arif', 'hasa', 69, 'mogbajar', '2', 'male', 'B+'),
('yo', 'yo@gmail.com', 7688, 'zcnjknck', '56', 't', 'hui+'),
('d', 'saadatjhklh@ymail.com', 0, 'cc', 'ca', 'as', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `email` varchar(48) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`email`, `password`) VALUES
('preety@gmail.com', '15301046'),
('shiny@gmail.com', '15301047'),
('arko@gmail.com', '15201013'),
('saadat@gmail.com', '15201013'),
('mehrab@gmail.com', '15201003'),
('promi@gmail.com', '15301046');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
