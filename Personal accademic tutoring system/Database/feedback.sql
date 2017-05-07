-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 08:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Name` varchar(40) NOT NULL,
  `Year` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Year`, `Department`, `Feedback`, `Email`) VALUES
('Muhammad Umar', 3, 'Computer Science', 'Pata Nahin Kia Banaya haiii!! :p', 'mumar2014@namal.edu.pk'),
('Umair Aziz', 3, 'Computer Science', 'Awesome Bro!! Wonderful Thing it is.', 'uaziz2014@namal.edu.pk'),
('Murad Khateeb', 3, 'Computer Science', 'I am an innocent gueyyy!!\r\nfrom Pindi..', 'murad2014@namal.edu.pk'),
('Shahrukh', 3, 'Computer Science', 'Wooow!! Its Great!!', 'shahrukh2014@namal.edu.pk'),
('M.Shoaib Ahmed', 3, 'Computer Science', 'What is This Thing!! ', 'shoaib2014@namal.edu.pk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
