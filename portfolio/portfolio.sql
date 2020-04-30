-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 09:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL,
  `tagline` varchar(40) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `place` varchar(40) NOT NULL,
  `language` varchar(20) NOT NULL,
  `proficiency` varchar(35) NOT NULL,
  `technology` varchar(20) NOT NULL,
  `expertise` varchar(12) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pdescription` varchar(50) NOT NULL,
  `plink` varchar(200) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `clink` varchar(200) NOT NULL,
  `wpost` varchar(30) NOT NULL,
  `worg` varchar(40) NOT NULL,
  `wdesc` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `stackoverflow` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `image`, `tagline`, `qualification`, `place`, `language`, `proficiency`, `technology`, `expertise`, `pname`, `pdescription`, `plink`, `cname`, `clink`, `wpost`, `worg`, `wdesc`, `email`, `facebook`, `instagram`, `linkedin`, `github`, `stackoverflow`, `website`, `medium`) VALUES
(197, 'Hrituja Sen', 'DSC_2418.JPG', 'A Web Developer', 'B.Tech, Computer Sci', 'VIT Vellore', 'English', 'Full Professional Proficiency', 'PHP', 'Intermediate', 'Portfolio Maker', 'A website to generate portfolios.', 'https://www.portfoliomaker.com', 'HTML, CSS and JS ', 'https://www.coursera.org/account/accomplishments/certificate/FQJUF8D4RWDU', 'Business Development Manager', 'Codepark', 'Managed national-level Code-a-thon.', 'hrituja17.hs@gmail.com', 'facebook.com/hrituja17', '_.hrituja._', 'https://www.linkedin.com/in/hrituja-sen-b1aa0715b/', 'github.com/hrituja17', 'hritujaSen', 'https://hrituja.com', 'hrituja@medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
