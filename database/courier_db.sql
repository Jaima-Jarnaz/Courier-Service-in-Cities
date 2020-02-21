-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('jaima', '123');

-- --------------------------------------------------------

--
-- Table structure for table `percelinfo`
--

CREATE TABLE `percelinfo` (
  `Courier_no` varchar(30) NOT NULL,
  `Percel_Weight` int(20) NOT NULL,
  `Payment` int(30) NOT NULL,
  `Place_to_Sent` varchar(30) NOT NULL,
  `Sending_date` varchar(30) NOT NULL,
  `Ariving_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percelinfo`
--

INSERT INTO `percelinfo` (`Courier_no`, `Percel_Weight`, `Payment`, `Place_to_Sent`, `Sending_date`, `Ariving_date`) VALUES
('012', 20, 200, 'Khulna', '2020-12-02', '2020-12-01'),
('012', 20, 200, 'Khulna', '2020-12-02', '2020-12-01'),
('013', 3, 100, 'Jassor', '2020-02-21', '2020-07-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
