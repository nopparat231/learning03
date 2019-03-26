-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb25.runhosting.com
-- Generation Time: Mar 26, 2019 at 04:28 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2954298_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `Userlevel` varchar(1) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phone`, `Userlevel`, `session_id`, `Status`) VALUES
(30, 'admin', 'Admin123', 'admin', 'admin', '23.noop@gmail.com', '5165165165', 'A', '1476514e0f154b00cdfc68033cac8b01', 'Y'),
(31, 'gggg', 'Gggggg123', 'gggg', 'gggg', 'oiru6699@gmail.com', '5454543432', 'M', '1476514e0f154b00cdfc68033cac8b01', 'Y'),
(49, 'nnnnn', 'Nn123456', 'nnnnn', 'nnnnn', '23noop02@gmail.com', '2131354534', 'M', 'c89dfd82a51a7091d484d5fecc7ec51e', 'Y'),
(48, 'ole', 'Kannika26012538', 'กรรณิการ์', 'รอดภัย', 'kannika9953@gmail.com', '0897289953', 'M', 'ee4b0cd5213a8b9bc6ba0b9ffd34e32f', 'Y'),
(47, 'ink', 'Atiti120593', 'อทิติ', 'ขาวสอาดธนาภา', 'atitiink12@gmail.com', '0886259766', 'M', '88e6c6b1876ae534bdb30f3ddc7f9baa', 'Y'),
(46, 'tame', 'Tame3002', 'Ratti', 'khong', 'khongloet9@gmail.com', '089999999', 'M', '1db8dd43d895df23af27bb673379b7e5', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
