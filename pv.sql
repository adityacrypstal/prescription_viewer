-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2018 at 04:11 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`, `email`) VALUES
(1, 'adhi', 'adhi', 'adityavadityav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appoints`
--

DROP TABLE IF EXISTS `appoints`;
CREATE TABLE IF NOT EXISTS `appoints` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Doctor` varchar(100) NOT NULL,
  `Patient` varchar(100) NOT NULL,
  `Time` timestamp(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `s_from` time(6) NOT NULL,
  `s_to` time(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=76542 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `username`, `password`, `email`, `fname`, `lname`, `sex`, `contact`, `address`, `specialization`, `qualification`, `s_from`, `s_to`) VALUES
(3, 'doctor', 'doctor', 'adityav@gmail.com', 'Aditya', 'Vijayan', '', 2147483647, 'Rajesh Bhavan', 'md', 'mbbs', '09:30:00.000000', '06:30:00.000000'),
(4, 'vasudev', 'vasudev', 'imvasudec@gmail.com', 'Vasudev ', 'Menon', '', 2147483647, 'Flat No 20,Skyline appartments,Kakkanad,Kochi', 'Ongology', 'MBBS MD', '07:30:00.000000', '10:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `patient_id`, `status`, `message`) VALUES
(2, '76543', NULL, 'next text');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `age` int(10) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=76544 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `fname`, `lname`, `address`, `age`, `blood`, `contact`, `username`, `password`, `email`, `sex`) VALUES
(76542, 'Aditya', 'Vijayakumar', 'Rajesh Bhavan ,SOornanad NOrth,Anayadi Oo', 21, 'O-', '9567682232', 'adhiwebz', 'doordie', 'adityavadityav@gmail.com', 0),
(76543, 'Arun', 'VV', 'LAL bagh', 32, 'O+', '12345', 'adad', 'adad', 'adad@adad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharma`
--

DROP TABLE IF EXISTS `pharma`;
CREATE TABLE IF NOT EXISTS `pharma` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `licence` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharma`
--

INSERT INTO `pharma` (`Id`, `username`, `password`, `email`, `name`, `licence`, `contact`, `state`, `district`, `area`, `pin`) VALUES
(2, 'pharma', 'pharma', 'adityav@gmail.com', 'RV meds', 'klam4554', 12345678, 'Kerala', 'Kollam', 'Sooranad', 690561);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Medicine` varchar(200) NOT NULL,
  `Patient` varchar(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `Time` timestamp(6) NOT NULL,
  `Dosage` varchar(100) NOT NULL,
  `Volume` varchar(100) NOT NULL,
  `Pharma` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;