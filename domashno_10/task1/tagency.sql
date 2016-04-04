-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 03:19 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Days` int(50) NOT NULL,
  `Packets` varchar(100) NOT NULL,
  `Transport` varchar(100) NOT NULL,
  `Price euro` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `Name`, `Country`, `City`, `Description`, `Days`, `Packets`, `Transport`, `Price euro`) VALUES
(5, 'Predi Hotel Son Jaumell', 'Spain', 'Capdepera', 'Located in the Mallorcan countryside just outside Capdepera, this restored 18th-century building is 6 minutes’ drive from the beach. It offers beautiful suites with free Wi-Fi, an LCD TV and great views.\r\n\r\nPredi Hotel Son Jaumell’s suites feature stylish, rustic décor. Each one has a minibar and a private bathroom with a bathrobe, slippers and a spa bath.\r\n\r\nSon Jaumell serves a traditional Mallorcan breakfast including fresh fruit and home-made yoghurt. Mallorcan food is available for lunch and dinner, and snacks are available throughout the day.\r\n\r\nThe house has a charming garden with an outdoor pool, hammocks, ancient caves and a Bronze Age path which leads to the sea. Staff can provide tourist information, and you can hire a bicycle.\r\n\r\nCapdepera Golf Course is a 5-minute drive from Predi Hotel Son Jaumell. Central Palma and Palma Airport are around 1 hour and 15 minutes’ drive away.', 5, 'Two Adults with Two Childs', 'Company Transport', 400);

-- --------------------------------------------------------

--
-- Table structure for table `lenght`
--

CREATE TABLE `lenght` (
  `lenght_id` int(11) NOT NULL,
  `Days` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lenght`
--

INSERT INTO `lenght` (`lenght_id`, `Days`) VALUES
(5, '10'),
(1, '20'),
(2, '30'),
(3, '5'),
(4, '7');

-- --------------------------------------------------------

--
-- Table structure for table `packetprice`
--

CREATE TABLE `packetprice` (
  `packet_id` int(11) NOT NULL,
  `packets` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packetprice`
--

INSERT INTO `packetprice` (`packet_id`, `packets`) VALUES
(6, 'Adult with child'),
(7, 'Adult with two childs'),
(5, 'Single Adult'),
(8, 'Two Adults with Two Childs');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `prices` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `prices`) VALUES
(1, 100),
(2, 200),
(3, 300),
(4, 400),
(5, 500),
(6, 600);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `trans_id` int(11) NOT NULL,
  `kind` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`trans_id`, `kind`) VALUES
(4, 'Bus'),
(2, 'Company Transport'),
(1, 'Own transport'),
(3, 'Plane'),
(5, 'Train');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packet_id` (`Packets`),
  ADD KEY `Price euro` (`Price euro`),
  ADD KEY `Transport` (`Transport`);

--
-- Indexes for table `lenght`
--
ALTER TABLE `lenght`
  ADD PRIMARY KEY (`lenght_id`),
  ADD KEY `Days` (`Days`);

--
-- Indexes for table `packetprice`
--
ALTER TABLE `packetprice`
  ADD PRIMARY KEY (`packet_id`),
  ADD KEY `packets` (`packets`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `prices` (`prices`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `kind` (`kind`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lenght`
--
ALTER TABLE `lenght`
  MODIFY `lenght_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `packetprice`
--
ALTER TABLE `packetprice`
  MODIFY `packet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
