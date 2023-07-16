-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 09:15 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `depwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `date` text NOT NULL,
  `cls` text NOT NULL,
  `do` text NOT NULL,
  `hr` text NOT NULL,
  `sub` text NOT NULL,
  `stn` text NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL,
  `s9` text NOT NULL,
  `s10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence2`
--

CREATE TABLE IF NOT EXISTS `attendence2` (
  `date` text NOT NULL,
  `cls` text NOT NULL,
  `do` text NOT NULL,
  `hr` text NOT NULL,
  `sub` text NOT NULL,
  `stn` text NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL,
  `s9` text NOT NULL,
  `s10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence3`
--

CREATE TABLE IF NOT EXISTS `attendence3` (
  `date` text NOT NULL,
  `cls` text NOT NULL,
  `do` text NOT NULL,
  `hr` text NOT NULL,
  `sub` text NOT NULL,
  `stn` text NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL,
  `s9` text NOT NULL,
  `s10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE IF NOT EXISTS `icon` (
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `date` text NOT NULL,
  `vote` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE IF NOT EXISTS `update` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` text NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vechicle`
--

CREATE TABLE IF NOT EXISTS `vechicle` (
  `foliono` text NOT NULL,
  `name` text NOT NULL,
  `ron` text NOT NULL,
  `mno` text NOT NULL,
  `em` text NOT NULL,
  `pa` int(11) NOT NULL,
  `pea` text NOT NULL,
  `place` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
