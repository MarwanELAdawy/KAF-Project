-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 09:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `clinic_id` int(11) NOT NULL,
  `clinic_hospital_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `clinic_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `clinic_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `clinic_rate` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_specific` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_type` varchar(255) COLLATE utf8_bin NOT NULL,
  `doctor_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_clincs`
--

CREATE TABLE `doctors_clincs` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_full_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_full_name`) VALUES
(22, 'marioeid_9', '01006007990', 'marioeid01060079909@gmail.com', '01006007990', 'marioeid9'),
(23, 'marioeid_10', '01006007990', 'marioeid010600799010@gmail.com', '01006007990', 'marioeid10'),
(24, 'marioeid_11', '01006007990', 'marioeid010600799011@gmail.com', '01006007990', 'marioeid11'),
(25, 'marioeid_12', '01006007990', 'marioeid010600799012@gmail.com', '01006007990', 'marioeid12'),
(26, 'marioeid_13', '01006007990', 'marioeid010600799013@gmail.com', '01006007990', 'marioeid13'),
(27, 'marioeid_14', '01006007990', 'marioeid010600799014@gmail.com', '01006007990', 'marioeid14');

-- --------------------------------------------------------

--
-- Table structure for table `user_clinic`
--

CREATE TABLE `user_clinic` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_doctor`
--

CREATE TABLE `user_doctor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctors_clincs`
--
ALTER TABLE `doctors_clincs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_clinic`
--
ALTER TABLE `user_clinic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`clinic_id`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- Indexes for table `user_doctor`
--
ALTER TABLE `user_doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`doctor_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors_clincs`
--
ALTER TABLE `doctors_clincs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_clinic`
--
ALTER TABLE `user_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_doctor`
--
ALTER TABLE `user_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_clinic`
--
ALTER TABLE `user_clinic`
  ADD CONSTRAINT `user_clinic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_clinic_ibfk_2` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`clinic_id`);

--
-- Constraints for table `user_doctor`
--
ALTER TABLE `user_doctor`
  ADD CONSTRAINT `user_doctor_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`doctor_id`),
  ADD CONSTRAINT `user_doctor_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
