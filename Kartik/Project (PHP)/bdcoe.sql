-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 03:08 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `type`) VALUES
(1, 'Kartik', '1234', 'jain.kartik80@yahoo.com', 'M'),
(2, 'Jain', '12345', 'jain@gmail.com', 'A'),
(4, 'Vasu', '123456', 'vasu@gmail.com', 'M'),
(5, 'Himanshu', 'gupta', 'gupta@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`question`, `answer`, `id`) VALUES
(' Hiiiiii', '', 28),
('', 'Hii', 28),
('', 'Kartik', 28),
('', 'Jain', 28),
('', '28', 28),
('', 'Hiii,WELCOME', 25),
(' HELLO....', '', 25),
('', 'whaasfc', 25),
(' AZf xdswdf', '', 25),
(' asbaafs sb', '', 25),
('', 'wseh,jvams', 25),
(' Hlo Sir', '', 31),
('', 'Bhakkk Mai garibo se bat nhi karta', 31),
(' Hiiii', '', 31),
(' Hiiii', '', 30),
('', 'Hello', 31),
('', 'hlo', 30),
(' salary', '', 31),
(' hissss', '', 30),
('', 'kya', 31),
('', 'kya be', 30),
(' eavsd vsd', '', 31),
(' hii', '', 28),
('', 'Hiii,WELCOME', 28),
(' avadavavd', '', 28),
(' eeavesdv', '', 31),
('', 'zvzdvdz', 28),
('', 'z z czxz ', 31),
(' sggsgs', '', 31),
(' EADSV', '', 28),
('', 'WSGSDVE', 28),
('', 'eadzv', 31),
(' hoyeeee', '', 32),
('', 'hoyeee', 32),
('yoyoy', '', 28),
('', 'hloo', 28),
(' ohsyoo\r\nohayoo', '', 28),
(' huhuhu', '', 31),
(' xc  xc ', '', 28),
('', 'dczscz', 28),
('', 'vzdzc', 31),
(' sdvsdsd', '', 28),
('', 'sdvdvs', 28),
(' kyftyrkuy', '', 28),
('', 'hkjgjkjk', 28),
(' fsbfx xzf', '', 28),
('', 'sdzdv', 28),
(' lkjkjlkj', '', 35),
('', 'dfdfsd', 35);

-- --------------------------------------------------------

--
-- Table structure for table `dp`
--

CREATE TABLE `dp` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dp`
--

INSERT INTO `dp` (`username`, `name`, `id`) VALUES
('Prem', '4-Information-technology.jpg', 25),
('Kartik', '4-Information-technology.jpg', 28),
('AP', '8-Programming-Computer-Wallpapers-3.jpg', 29),
('Honey', '20151226_142058.jpg', 30),
('Archit', '10-Demain-le-mot-anglais-blanc.jpg', 31),
('Piyush', '20160126_141927.jpg', 32),
('<u> anshul</u>', 'default.jpeg', 0),
('Vaibhav', 'default.jpeg', 34),
('D', 'default.jpeg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(50) NOT NULL,
  `stno` int(50) NOT NULL,
  `unroll` int(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `section` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `stno`, `unroll`, `branch`, `section`, `year`, `mobile`, `id`) VALUES
('Kk', 15100, 1502, 'CS', 1, 555, 5555, 25),
('Kartik', 1510139, 1502710070, 'CS', 2, 2, 9990796938, 28),
('Kartik', 1510139, 1502710070, 'CS', 2, 2, 9990796938, 28),
('Kartik', 1510139, 1502710070, 'CS', 2, 2, 9990796938, 28),
('AP', 1510023, 1502710025, 'CS', 1, 2, 9412806487, 29),
('Honey', 1510029, 1502710065, 'CS', 2, 2, 9458791146, 30),
('Archit', 1510130, 1502710042, 'CS', 1, 2, 9458791146, 31),
('Piyush', 1500115, 150270035, 'CE', 3, 2, 9876543210, 32),
('<u> anshul</u>', 0, 0, '', 0, 0, 0, 0),
('Vaibhav', 0, 0, '', 0, 0, 0, 34),
('D', 0, 0, '', 0, 0, 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(25, 'Kk', 'SINGH', 'prem@gmail.com', '123456'),
(28, 'Kartik', 'Jain', 'kartik@gmail.com', '1234'),
(29, 'AP', 'Sharma', 'anshul@gmail.com', '1234'),
(30, 'Honey', 'Gupta', 'gupta@gmail.com', '1234'),
(31, 'Archit', 'agrawal', 'archit@gmail.com', '1234'),
(32, 'Piyush', 'Trivedi', 'piyush@gmail.com', 'piyush'),
(34, 'Vaibhav', 'Kaushik', 'mech@vaibahv', '1234'),
(35, 'D', 'vv', 'dd@dd', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `cid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `stdate` varchar(255) NOT NULL,
  `endate` varchar(255) NOT NULL,
  `workshop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`cid`, `email`, `name`, `status`, `uid`, `stdate`, `endate`, `workshop`) VALUES
(63, 'jainkartik203@gmail.com', 'Kartik', 'Completed', 28, '22/08/16', '28/08/16', 'Hadoop'),
(64, 'jain.kartik80@yahoo.com', 'Kartik', 'Completed', 31, '22/08/16', '28/08/16', 'Pig'),
(65, 'jainkartik203@gmail.com', 'Kartik', 'Completed', 32, '22/08/16', '28/08/16', 'Hive'),
(66, 'jainkartik203@gmail.com', 'Kartik', 'Completed', 28, '22/09/16', '22/09/16', 'Pig'),
(67, 'monalkansal121@gmail.com', 'Monal', 'Completed', 0, '22/09/16', '29/09/16', 'HIVE'),
(68, 'monalkansal21@gmail.com', 'Monal', 'Completed', 0, '22/08/10', '28/08/10', 'Hadoop'),
(69, 'jainkartik203@gmail.com', 'Kartik', 'Completed', 25, '22/08/16', '29/08/16', 'Result'),
(70, 'jainkartik203@gmail.com', 'Kartik', 'Incomplete', 0, '22/09/19', '29/09/49', 'sss'),
(71, 'jainkartik203@gmail.com', 'Kartik', 'Incomplete', 0, '22/09/19', '29/09/49', 'sss'),
(72, 'jainkartik203@gmail.com', 'Kartik', 'Completed', 0, '22/08/19', '22/08/20', 'LK'),
(73, 'jainkartik203@gmail.com', 'kjajk', 'kjk', 35, 'addc ', 'ds', 'pig');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `type`, `cid`) VALUES
(28, 'Marksheet Sem 2.pdf', 'application/pdf', 63),
(31, 'kartik12.pdf', 'application/pdf', 64),
(32, 'Marksheet Sem 2.pdf', 'application/pdf', 65),
(28, 'kartik12.pdf', 'application/pdf', 66),
(0, 'Marksheet Sem 1.pdf', 'application/pdf', 67),
(0, 'Penguins.jpg', 'image/jpeg', 68),
(25, 'Marksheet Sem 2.pdf', 'application/pdf', 69),
(0, 'Marksheet Sem 2.pdf', 'application/pdf', 70),
(0, 'Marksheet Sem 2.pdf', 'application/pdf', 71),
(0, 'Desert.jpg', 'image/jpeg', 72),
(35, 'Marksheet Sem 2.pdf', 'application/pdf', 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
