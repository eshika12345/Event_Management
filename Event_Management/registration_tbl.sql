-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2022 at 02:24 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_tbl`
--

DROP TABLE IF EXISTS `registration_tbl`;
CREATE TABLE IF NOT EXISTS `registration_tbl` (
  `User_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Number` varchar(180) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(90) NOT NULL,
  `Password` varchar(90) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tbl`
--

INSERT INTO `registration_tbl` (`User_ID`, `Name`, `Number`, `Email`, `Username`, `Password`) VALUES
(1, 'Purna Majumdar', '1234567890', 'purna@gmail.com', 'purna', '12345'),
(3, 'Selena Rathi', '9730078423', 'selena@gmail.com', 'selena', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
