-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 07:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edisposer`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `addid` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(20) NOT NULL,
  `condition` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`addid`, `uid`, `date`, `type`, `condition`, `pname`, `description`, `path`) VALUES
(7, 'sachinpal552@gmail.com', '2018-08-27 13:21:55', 'tv', 'notworking', 'lg 32 inch', 'tv got damaged because of water\r\n', 'tvimg.jpg'),
(9, 'sdsanketdhumal2104@gmail.com', '2018-08-27 13:24:25', 'tv', 'notworking', 'old crt tv', 'many not working tv', 'tvmulti.jpg'),
(10, 'sdsanketdhumal2104@gmail.com', '2018-08-27 13:26:24', 'washing_machine', 'notworking', 'wirlpool', 'Its old now and i want to buy new.', 'washing.jpg'),
(11, 'sdsanketdhumal2104@gmail.com', '2018-08-27 13:27:18', 'fridge', 'working', 'samsung', 'old and not working porperly', 'fridge2.jpg'),
(12, 'sdsanketdhumal2104@gmail.com', '2018-08-27 13:27:47', 'fridge', 'notworking', 'wirlpool', 'scrab ', 'fridge.jpg'),
(13, 'sachinpal552@gmail.com', '2018-08-27 18:20:28', 'tv', 'partiallyworking', 'onida', 'power source damaged', 'tv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `elogin`
--

CREATE TABLE `elogin` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elogin`
--

INSERT INTO `elogin` (`userid`, `password`) VALUES
('sachinpal552@gmail.com', 'sachin123'),
('sdsanketdhumal2104@gmail.com', 'sankya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `phoneno`, `street`, `city`, `country`, `zip`) VALUES
('sachinpal552@gmail.com', 'sachin', 'pal', 2147483647, '2, satish niwas, vai', 'mumbai', 'India', '400097'),
('sdsanketdhumal2104@gmail.com', 'sanket', 'dhumal', 2147483647, '417/B omkar', 'mumbai', 'India', '400097');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`addid`);

--
-- Indexes for table `elogin`
--
ALTER TABLE `elogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `addid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
