-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 10:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekobits`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekobits_users`
--

CREATE TABLE `ekobits_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `dob` varchar(300) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekobits_users`
--

INSERT INTO `ekobits_users` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `dob`, `date`) VALUES
(3, 'Ojo Joseph', 'Ojo ', 'ddd@hh.com', '2147483647', 'test', '1998-01-05', '2018-07-13 07:45:26'),
(4, 'Ojo Joseph', 'Ojo ', 'smarzzy5@gmail.com', '2147483647', 'test', '2003-02-11', '2018-07-13 08:06:33'),
(5, 'Ojo Joseph', 'Ojo ', 'seun@zoracom.com', '2147483647', 'hey', '2001-01-16', '2018-07-13 08:13:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekobits_users`
--
ALTER TABLE `ekobits_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekobits_users`
--
ALTER TABLE `ekobits_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
