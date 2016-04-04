-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 09:45 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `manifactory` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `type`, `manifactory`, `price`, `in_stock`, `date_deleted`) VALUES
(1, 'skirt', 'Mango', 500, 50, NULL),
(2, 'shirtss', 'Mango', 100, 10, '2016-03-24'),
(3, 'asdasdasd', 'kokoasd', 123, 123, '0000-00-00'),
(4, 'jeans', 'H&m', 200, 0, '0000-00-00'),
(5, 'jeans', 'H&m', 200, 0, '0000-00-00'),
(6, 'jaket', 'H&m', 2002, 0, NULL),
(7, 'hat', 'none', 500, 100, NULL),
(8, 'Jeans', 'Zara', 500, 2, NULL),
(9, 'Coin jewel', 'Random', 1, 20, NULL),
(10, 'Shoes', 'random', 10, 500, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
