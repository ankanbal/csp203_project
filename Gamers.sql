-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2018 at 12:28 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gamers`
--

-- --------------------------------------------------------

--
-- Table structure for table `indi_score`
--

CREATE TABLE `indi_score` (
  `name` varchar(100) NOT NULL,
  `score_car` bigint(10) NOT NULL,
  `score_archery` bigint(10) NOT NULL,
  `score_space` bigint(10) NOT NULL,
  `overall` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indi_score`
--

INSERT INTO `indi_score` (`name`, `score_car`, `score_archery`, `score_space`, `overall`) VALUES
('ankan', 23, 22, 32, 10),
('amiya', 21, 11, 90, 23),
('nitin', 34, 45, 56, 89);

-- --------------------------------------------------------

--
-- Table structure for table `scoring`
--

CREATE TABLE `scoring` (
  `name` varchar(100) NOT NULL,
  `game` varchar(10) NOT NULL,
  `score` bigint(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `Name` varchar(100) NOT NULL,
  `Email_address` varchar(100) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`Name`, `Email_address`, `Password`, `Date`) VALUES
('amiya', 'amiya@gmail.com', 'bala', '2018-04-26'),
('ankan', 'ankan@gmail.com', 'bal', '2018-04-26'),
('lahane', 'lahane@gmail.com', 'rahul', '2018-04-29'),
('mukesh', 'mukesh@gmail.com', 'chomu', '2018-04-26'),
('nitin', 'nitin@iitrpr.ac.in', 'gandhi', '2018-04-26'),
('paras', 'paras@gmail.com', 'kumar', '2018-04-26'),
('prasad', 'prasad@gmail.com', 'chod', '2018-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
