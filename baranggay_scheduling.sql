-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 09:34 AM
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
-- Database: `baranggay_scheduling`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `ConfirmationNo` varchar(50) NOT NULL,
  `Client_id` int(10) UNSIGNED NOT NULL,
  `Service_id` int(11) DEFAULT NULL,
  UNIQUE KEY `UNIQUE_Appointment_confirmationNo` (`ConfirmationNo`),
  KEY `FK_Appointment_Client` (`Client_id`),
  KEY `Service_id` (`Service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ConfirmationNo`, `Client_id`, `Service_id`) VALUES
('6AkLTa8mUH', 19, 1),
('G8I7Lx8PVd', 20, NULL),
('QfZuKxZ8Ll', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `Client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Client_FirstName` text NOT NULL,
  `Client_LastName` text NOT NULL,
  PRIMARY KEY (`Client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Client_id`, `Client_FirstName`, `Client_LastName`) VALUES
(19, 'Denise', 'Teomale'),
(20, 'Clau', 'Ferrer'),
(21, 'Patricia', 'Bagazin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Service_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Service_type`) VALUES
(1, 'Health'),
(2, 'Document-Services'),
(3, 'Public Affairs');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `FK_Appointment_Client` FOREIGN KEY (`Client_id`) REFERENCES `clients` (`Client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_Appointment_Service` FOREIGN KEY (`Service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
