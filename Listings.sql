-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 01:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yardsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `Listings`
--

CREATE TABLE `listings` (
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Day` varchar(2) NOT NULL,
  `Year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Listings`
--

INSERT INTO `Listings` (`Email`, `Phone`, `Address`, `City`, `State`, `Zip`, `Description`, `Month`, `Day`, `Year`) VALUES
('benottman95@gmail.com', '4344733060', '1000 wildbriar place', 'Forest', 'VA', '24551', 'a;lksfjas;ldfkjas;ldkfjasd;fl', '1', '1', '2016'),
('benottman95@gmail.com', '1231231234', '1000 wildbriar place', 'Forest', 'VA', '24551', 'a;slkfjas;fklja', '1', '1', '2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
