-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 04:32 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tools`
--

-- --------------------------------------------------------

--
-- Table structure for table `manifactorys`
--

CREATE TABLE `manifactorys` (
  `manifactory_id` int(11) NOT NULL,
  `manifactory_name` varchar(100) NOT NULL,
  `manifactory_adress` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manifactorys`
--

INSERT INTO `manifactorys` (`manifactory_id`, `manifactory_name`, `manifactory_adress`, `date_deleted`) VALUES
(1, 'Stihl', '2571 Hickory Street \r\nWest Bend, WI 53095', NULL),
(2, 'Home and garden ', '6488 Colonial Avenue \r\nZion, IL 60099', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_adress` varchar(100) NOT NULL,
  `service_phone` int(11) NOT NULL,
  `technich_name` varchar(100) NOT NULL,
  `technich_phone` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_adress`, `service_phone`, `technich_name`, `technich_phone`, `date_deleted`) VALUES
(1, 'Tools repair ', '3606 Pin Oak Drive \r\nLadson, SC 29456', 54235345, 'Ivan Ivanov Ivanov', 342341231, NULL),
(2, 'Tools replace', '2087 Glenwood Avenue \r\nSnohomish, WA 98290', 412234134, 'Kaloqn Mike Gods', 52342343, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools_name`
--

CREATE TABLE `tools_name` (
  `tools_id` int(11) NOT NULL,
  `tool_model` varchar(100) NOT NULL,
  `usefull_for` text NOT NULL,
  `release date` date DEFAULT NULL,
  `manifactury` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools_name`
--

INSERT INTO `tools_name` (`tools_id`, `tool_model`, `usefull_for`, `release date`, `manifactury`, `service`, `date_deleted`) VALUES
(1, 'Косачка', 'Косене на тревни площи и ливади', '2000-01-10', 'Home and garden ', 'Tools repair ', NULL),
(2, 'Чук', 'Ковене на пирони и други инструменти....', '2005-09-05', 'Stihl', 'Tools replace', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manifactorys`
--
ALTER TABLE `manifactorys`
  ADD PRIMARY KEY (`manifactory_id`),
  ADD KEY `manifactory_name` (`manifactory_name`),
  ADD KEY `manifactory_adress` (`manifactory_adress`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `service_name` (`service_name`),
  ADD KEY `service_adress` (`service_adress`),
  ADD KEY `service_phone` (`service_phone`),
  ADD KEY `technich_name` (`technich_name`),
  ADD KEY `technich_phone` (`technich_phone`);

--
-- Indexes for table `tools_name`
--
ALTER TABLE `tools_name`
  ADD PRIMARY KEY (`tools_id`),
  ADD KEY `manifactury_id` (`manifactury`),
  ADD KEY `service_id` (`service`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manifactorys`
--
ALTER TABLE `manifactorys`
  MODIFY `manifactory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tools_name`
--
ALTER TABLE `tools_name`
  MODIFY `tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
