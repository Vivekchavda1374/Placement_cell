-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 03:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `id` int(11) NOT NULL,
  `ComapnyName` varchar(20) NOT NULL,
  `CampaseDate` date NOT NULL,
  `LastRegistration` date NOT NULL,
  `JobProfile` varchar(30) NOT NULL,
  `CompanyPackage` varchar(10) NOT NULL,
  `TechSkill` varchar(30) NOT NULL,
  `Stipend` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`id`, `ComapnyName`, `CampaseDate`, `LastRegistration`, `JobProfile`, `CompanyPackage`, `TechSkill`, `Stipend`) VALUES
(9, 'Amazon', '1111-11-11', '2222-02-22', '1000', '20', 'vivek', 21202);

-- --------------------------------------------------------

--
-- Table structure for table `companyplacement`
--

CREATE TABLE `companyplacement` (
  `id` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companyplacement`
--

INSERT INTO `companyplacement` (`id`, `CompanyName`, `StudentName`, `Position`) VALUES
(11, 'Amazon', 'Vivek Chavda<br/> Vivek Chavda', 'software developer'),
(12, 'Amazon', 'Vivek Chavda<br/> Renish<br/> Kaushal', 'software developer'),
(13, 'tesla', 'harshvardhan <br/> vivek<br/> bhavik', 'software developer'),
(14, 'flipkart', 'Vivek Chavda<br/> harshvardhan <br/> bhavik', 'software developer');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `CompanyName` varchar(30) NOT NULL,
  `CompanyPackage` varchar(7) NOT NULL,
  `Domain` varchar(20) NOT NULL,
  `JobProfile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `CompanyName`, `CompanyPackage`, `Domain`, `JobProfile`) VALUES
(13, 'Vivek Manishbhai Chavda', 'vivek.chavda119486@marwadiuniv', 9104231590, 'Amazon', '', 'java', 'java developer'),
(14, 'Vivek Manishbhai Chavda', 'vivek.chavda119486@marwadiuniv', 9104231590, 'dvs', '20lpa', 'java', 'vivek'),
(15, 'bhavik', 'xyz@gmail.com', 9104231590, 'qedexewd', 'edd', 'ec', 'wc'),
(16, '', '', 0, '', '', '', ''),
(17, 'Vivek Manishbhai Chavda', 'vivek.chavda119486@marwadiuniv', 9104231590, 'Amaz', '20lpa', 'java', 'asd'),
(18, 'Vraj Nandwana', 'vraj20@gmail.com', 123456789, 'rtCamp', '15lpa', 'trainee', 'Wordpress developer'),
(19, 'Bhavik', 'bhavi@gmail.com', 123456789, 'rtcamp', '20lpa', 'java', 'java developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyplacement`
--
ALTER TABLE `companyplacement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companyplacement`
--
ALTER TABLE `companyplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
