-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 06:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actorid` int(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `aaddress` varchar(50) NOT NULL,
  `atelephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actorid`, `aname`, `alastname`, `aaddress`, `atelephone`) VALUES
(301, 'payut', 'kuykuykuy', 'hellhit', 1112223333),
(302, 'lenova', 'suka', 'there', 1112223333),
(303, 'SE', 'SA', 'hell', 222333444),
(304, 'asda', 'gfdfg', 'tesjj', 124564212);

-- --------------------------------------------------------

--
-- Table structure for table `movieactor`
--

CREATE TABLE `movieactor` (
  `movieid` int(3) NOT NULL,
  `actorid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieactor`
--

INSERT INTO `movieactor` (`movieid`, `actorid`) VALUES
(201, 301),
(201, 302);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieid` int(3) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `mname`, `price`, `time`, `details`) VALUES
(201, 'testM', '50$', '1hr 45m', 'gg ez 555'),
(202, 'liar', '14$', '1hr ', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `ulastname` varchar(30) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `utelephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `uname`, `ulastname`, `uaddress`, `utelephone`) VALUES
(101, 'Kaurakoch', 'Sriunprasert', 'test0100', 983262571),
(102, 'jaoh', 'jara', 'tea', 1112222);

-- --------------------------------------------------------

--
-- Table structure for table `userrent`
--

CREATE TABLE `userrent` (
  `rentid` int(3) NOT NULL,
  `userid` int(3) NOT NULL,
  `movieid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrent`
--

INSERT INTO `userrent` (`rentid`, `userid`, `movieid`) VALUES
(401, 101, 201);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actorid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userrent`
--
ALTER TABLE `userrent`
  ADD PRIMARY KEY (`rentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
