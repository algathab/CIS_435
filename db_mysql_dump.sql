-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 04:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `color_picker`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_set`
--

CREATE TABLE `color_set` (
  `ID` int(11) NOT NULL,
  `COLOR1` varchar(7) NOT NULL,
  `COLOR2` varchar(7) NOT NULL,
  `COLOR3` varchar(7) NOT NULL,
  `COLOR4` varchar(7) NOT NULL,
  `COLOR5` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_set`
--

INSERT INTO `color_set` (`ID`, `COLOR1`, `COLOR2`, `COLOR3`, `COLOR4`, `COLOR5`) VALUES
(54, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(55, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(56, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(57, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(58, '#ff0000', '#00ff00', '#000000', '#000000', '#000000'),
(59, '#000000', '#000000', '#0000ff', '#ffffff', '#000000'),
(60, '#ff0000', '#ff0000', '#ff0000', '#ff0000', '#000000'),
(61, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(62, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#000000'),
(63, '#ff0000', '#00ff00', '#0000ff', '#ffffff', '#ff0080');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color_set`
--
ALTER TABLE `color_set`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color_set`
--
ALTER TABLE `color_set`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
