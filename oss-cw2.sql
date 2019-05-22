-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2019 at 11:03 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oss-cw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `modulecode` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`modulecode`, `name`, `level`) VALUES
('CO106', 'Programming Development', 1),
('CO107', 'Programming Principles', 1),
('CO222', 'Computer Architecture', 2),
('CO333', 'Network Management', 3),
('CO444', 'Cloud Computing', 4),
('IN251', 'Internet Systems Development', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `house` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('12345678', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS', '2019-05-31', 'Junior', 'Mc Queen', 'Hilly House', 'Hillville', 'Hillton', 'Hillcraft', 'H1LL TWN'),
('20000000', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS', '1992-12-12', 'Jon', 'Jackson', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
('21704593', 'c54851ce7db5e1bee4ca60221c248880', '1997-04-24', 'Jake', 'Jonczyk', 'Somewhere', 'Some', 'Some', 'Where', 'Where');

-- --------------------------------------------------------

--
-- Table structure for table `studentmodules`
--

CREATE TABLE `studentmodules` (
  `studentid` varchar(8) NOT NULL,
  `modulecode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmodules`
--

INSERT INTO `studentmodules` (`studentid`, `modulecode`) VALUES
('12345678', 'CO106'),
('12345678', 'CO333'),
('20000000', 'CO107'),
('20000000', 'IN251');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`modulecode`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentmodules`
--
ALTER TABLE `studentmodules`
  ADD PRIMARY KEY (`studentid`,`modulecode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
