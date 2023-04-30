-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 03:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic_waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `donated_device`
--

CREATE TABLE `donated_device` (
  `donator_id` int(11) NOT NULL,
  `device_type` enum('laptop','desktop','tablet','smartphone','television','camera','gaming-console','other') DEFAULT NULL,
  `device_condition` enum('excellent','good','fair','poor','not-working') DEFAULT NULL,
  `device_brand` varchar(30) NOT NULL,
  `device_model` varchar(40) NOT NULL,
  `device_age` int(11) NOT NULL,
  `device_description` varchar(300) NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donator_id` int(11) NOT NULL,
  `card_number` varchar(30) NOT NULL,
  `donation_amount` int(11) NOT NULL,
  `donation_frequency` enum('once','monthly','quarterly','annually') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation_card`
--

CREATE TABLE `donation_card` (
  `donator_id` int(11) NOT NULL,
  `card_number` varchar(30) NOT NULL,
  `expiration_date` varchar(7) DEFAULT NULL,
  `security_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `donator_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donated_device`
--
ALTER TABLE `donated_device`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `donator_card_fk` (`donator_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donator_id`,`card_number`),
  ADD KEY `donation_card_fk` (`card_number`);

--
-- Indexes for table `donation_card`
--
ALTER TABLE `donation_card`
  ADD PRIMARY KEY (`card_number`),
  ADD KEY `donator_device_fk` (`donator_id`);

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`donator_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donated_device`
--
ALTER TABLE `donated_device`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `donator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donated_device`
--
ALTER TABLE `donated_device`
  ADD CONSTRAINT `donator_card_fk` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`donator_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_card_fk` FOREIGN KEY (`card_number`) REFERENCES `donation_card` (`card_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_donator_fk` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`donator_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_card`
--
ALTER TABLE `donation_card`
  ADD CONSTRAINT `donator_device_fk` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`donator_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
