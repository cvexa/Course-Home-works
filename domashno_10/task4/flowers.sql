-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 05:14 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers_name`
--

CREATE TABLE `flowers_name` (
  `id_flowers` int(11) NOT NULL,
  `bg_name` varchar(100) NOT NULL,
  `latin_name` varchar(100) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `temp` int(11) NOT NULL,
  `amount_water` varchar(200) NOT NULL,
  `light` varchar(500) NOT NULL,
  `semen` varchar(100) NOT NULL,
  `specifications` varchar(500) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flowers_name`
--

INSERT INTO `flowers_name` (`id_flowers`, `bg_name`, `latin_name`, `kind`, `Country`, `temp`, `amount_water`, `light`, `semen`, `specifications`, `date_deleted`) VALUES
(1, 'глухарче', 'gluharche', 'ДЕКОРАТИВНО-ЦЪФТЯЩИ', 'България', 15, 'по няколко пъти на ден по 1 литър', 'дневна светлина', 'разсад', 'децата го обожават', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kinds`
--

CREATE TABLE `kinds` (
  `id_kind` int(11) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kinds`
--

INSERT INTO `kinds` (`id_kind`, `kind`, `date_deleted`) VALUES
(1, 'ДЕКОРАТИВНО-ЛИСТНИ', NULL),
(2, 'ДЪРВЕТА И ХРАСТИ', NULL),
(3, 'СЕЗОННИ ТРЕВИСТИ РАСТЕНИЯ', NULL),
(4, 'ДЕКОРАТИВНО-ЦЪФТЯЩИ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semens`
--

CREATE TABLE `semens` (
  `id_semen` int(11) NOT NULL,
  `semen` varchar(100) NOT NULL,
  `reznik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semens`
--

INSERT INTO `semens` (`id_semen`, `semen`, `reznik`) VALUES
(1, 'семена', 'луковици'),
(2, 'разсад', 'оранжерия');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers_name`
--
ALTER TABLE `flowers_name`
  ADD PRIMARY KEY (`id_flowers`),
  ADD KEY `bg_name` (`bg_name`),
  ADD KEY `latin_name` (`latin_name`),
  ADD KEY `id_kind` (`kind`),
  ADD KEY `Country` (`Country`),
  ADD KEY `temp` (`temp`),
  ADD KEY `amount_water` (`amount_water`),
  ADD KEY `light` (`light`(255)),
  ADD KEY `semen_id` (`semen`),
  ADD KEY `specifications` (`specifications`(255));

--
-- Indexes for table `kinds`
--
ALTER TABLE `kinds`
  ADD PRIMARY KEY (`id_kind`),
  ADD KEY `kind` (`kind`);

--
-- Indexes for table `semens`
--
ALTER TABLE `semens`
  ADD PRIMARY KEY (`id_semen`),
  ADD KEY `semen` (`semen`),
  ADD KEY `reznik` (`reznik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers_name`
--
ALTER TABLE `flowers_name`
  MODIFY `id_flowers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kinds`
--
ALTER TABLE `kinds`
  MODIFY `id_kind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `semens`
--
ALTER TABLE `semens`
  MODIFY `id_semen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
