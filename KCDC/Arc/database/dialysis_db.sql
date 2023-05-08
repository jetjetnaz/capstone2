-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 07:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dialysis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `shiftID` varchar(20) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `patient_last_name` varchar(50) NOT NULL,
  `patient_first_name` varchar(50) NOT NULL,
  `patient_middle_name` varchar(50) NOT NULL,
  `patient_age` varchar(5) NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `patient_date_birth` varchar(10) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_contact_number` varchar(15) NOT NULL,
  `patient_barangay_city` varchar(50) NOT NULL,
  `patient_social_media` varchar(20) NOT NULL,
  `patient_attending_physician` varchar(50) NOT NULL,
  `patient_name_of_companion` varchar(100) NOT NULL,
  `patient_years_of_dialysis_facility` varchar(5) NOT NULL,
  `patient_frequency_of_treatment` varchar(5) NOT NULL,
  `patient_preffered_day_treatment` varchar(20) NOT NULL,
  `patient_hospital_affiliated` varchar(50) NOT NULL,
  `patient_old_dialysis_facility` varchar(50) NOT NULL,
  `patient_relationship_with_patient` varchar(20) NOT NULL,
  `patient_source_funds` varchar(50) NOT NULL,
  `patient_source_income` varchar(50) NOT NULL,
  `patient_source_assistance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`) VALUES
(46, '1658793614', 'A', 'awdaw', 'dawdaw', 'dawd', '2', 'awdawdawd', '2023-03-08', 'awdaw', 'dawd', 'awdawdaw', 'dawdawdawd', 'awdaw', 'awdawd', '2', '2', '2023-03-22', 'dawd', 'awdawda', 'awdaw', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(48, '3416348122', 'A', 'awdaw', 'dawdaw', 'dawd', '2', 'awdawdawd', '2023-03-08', 'awdaw', 'dawd', 'awdawdaw', 'dawdawdawd', 'awdaw', 'awdawd', '2', '2', '2023-03-10', 'dawd', 'awdawda', 'awdaw', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(49, '4997326452', 'A', 'awda', 'wdawd', 'awdawda', '2', 'daw', '2023-03-22', 'awdawda', 'wdaw', 'dawd', 'awdawdawd', 'awd', 'dawdaw', '2', '2', 'SATURDAY', 'da', 'awdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(50, '7461784628', 'A', 'awd', 'awdaw', 'daw', '2', 'awdawd', '2023-03-09', 'awdaw', 'dawd', 'awdawd', 'awdawd', 'awd', 'wdaw', '2', '2', 'SATURDAY', 'awdawdawda', 'awdawd', 'dawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `assign_day` varchar(20) NOT NULL,
  `doctors_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `assign_day`, `doctors_name`) VALUES
(1, 'MONDAY', 'Dr. Guillermo'),
(2, 'TUESDAY', 'Dr. Glenns'),
(3, 'WEDNESDAY', 'Dr. Buenavides'),
(4, 'THURSDAY', 'Dr. Buenavintura'),
(5, 'FRIDAY', 'Dr. Amamio'),
(6, 'SATURDAY', 'Dr. Cabrehas');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_name`, `address`, `cnic`, `date_of_birth`, `phone_number`, `gender`) VALUES
(1, 'Canonigo Ireneo Ordaniza', '#040 Zone 4, Tablon Cdoc', 'Dr. Gonzales', '1952-12-22', '09059666836', 'Male'),
(2, 'Gregorio, Garry Lois Rajaco', 'Capas Kulambos Lapasan', 'None', '1986-01-04', '09360330901/', 'Male'),
(3, 'Velasco Mar Paza', 'Tubajon, Laguindingan Misamis Oriental', 'Dr. Cahilog', '1973-03-19', '09668972426', 'Female'),
(4, 'Leyson, Carlito, Pardilla', '#42 Vamenta Blud, Ilaya, Carmen', 'Dr. Gonzales', '1963-02-21', '09177760154', 'Male'),
(5, 'Sarmiento Danilo Malicsi', 'B-1 L-11-13 San Agustin Valley Homes Carmen', 'None', '1970-12-09', '09267461527', 'Male'),
(6, 'Bellesco, Elizabeth Daayata', 'Zone-5, Igpit, Opol Misamis Oriental', 'None', '1986-01-09', '09069292238', 'Female'),
(7, 'Josue Charleston Cabiladas', '045 Zone 10, Patag Cagayan De Oro', 'None', '1982-09-18', '09103461101', 'Male'),
(8, 'Oco, Cristina Langala', 'Cogon, Cagayan De Oro', 'Dr. Karen Gonzales', '1958-07-24', '09168509930', 'Female'),
(9, 'Calibod, Johnny Lumocso', 'Spuc Camp, Masterson Ave', 'None', '1953-02-28', '09263909612', 'Male'),
(10, 'De Asis Wendy Damasco', 'Block 11 Lotg Villa Angela Subd Balulang, Cdo', 'Dr. Gonzales', '1957-10-19', '09950117149', 'Female'),
(11, 'Monares, Kimberly Reynalda', 'Zone-8 Blgpit Opol Mrs, Or.', 'Dr. Dacudao', '1966-12-03', 'None', 'Female'),
(12, 'Guzom, Vermie Valle', 'Zone-5, Calatcat, Alubijid', 'None', '1961-11-13', '09157133176', 'Male'),
(13, 'Aspril, Luzvillanueva', 'Belen Jongro Apolvelsubo. Bulua, Cdoc', 'None', '1952-09-21', '09666207146', 'Female'),
(14, 'Hermosa Ordaniza Carmen Ordaniza', 'Zone-a4 Igpit Opoc', 'Dr. Gonzales', '1965-11-15', '09362591998', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `shifts_schedule`
--

CREATE TABLE `shifts_schedule` (
  `id` int(11) NOT NULL,
  `shift_id` varchar(30) NOT NULL,
  `preferred_date` varchar(20) NOT NULL,
  `shift` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shifts_schedule`
--

INSERT INTO `shifts_schedule` (`id`, `shift_id`, `preferred_date`, `shift`) VALUES
(150, '8392891454', 'THURSDAY', 'A'),
(151, '4641169416', 'TUESDAY', 'A'),
(152, '6554782481', 'WEDNESDAY', 'A'),
(153, '3996717475', 'MONDAY', 'A'),
(154, '8962586755', 'FRIDAY', 'A'),
(155, '5237225458', 'MONDAY', 'A'),
(156, '9656973441', 'SATURDAY', 'A'),
(157, '5283274293', 'MONDAY', 'B'),
(158, '7194129121', 'THURSDAY', 'B'),
(159, '6667773886', 'MONDAY', 'C'),
(160, '1936528293', 'TUESDAY', 'B'),
(161, '3218712774', 'TUESDAY', 'C'),
(162, '8137112284', 'WEDNESDAY', 'B'),
(163, '9344989655', 'WEDNESDAY', 'C'),
(164, '1632856264', 'THURSDAY', 'C'),
(165, '5176926544', 'FRIDAY', 'B'),
(166, '8359982724', 'FRIDAY', 'C'),
(167, '9377452392', 'SATURDAY', 'B'),
(168, '3759362343', 'MONDAY', 'A'),
(169, '8739854663', 'MONDAY', 'B'),
(170, '8214457839', 'MONDAY', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbldates`
--

CREATE TABLE `tbldates` (
  `date_id` int(11) NOT NULL,
  `date_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldates`
--

INSERT INTO `tbldates` (`date_id`, `date_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `shiftID` varchar(30) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `patient_last_name` varchar(100) NOT NULL,
  `patient_first_name` varchar(100) NOT NULL,
  `activestatus` int(11) NOT NULL DEFAULT 1,
  `patient_middle_name` varchar(50) NOT NULL,
  `patient_age` varchar(50) NOT NULL,
  `patient_gender` varchar(100) NOT NULL,
  `patient_date_birth` varchar(100) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `patient_contact_number` varchar(20) NOT NULL,
  `patient_barangay_city` varchar(100) NOT NULL,
  `patient_social_media` varchar(100) NOT NULL,
  `patient_attending_physician` varchar(100) NOT NULL,
  `patient_name_of_companion` varchar(50) NOT NULL,
  `patient_years_of_dialysis_facility` varchar(11) NOT NULL,
  `patient_frequency_of_treatment` varchar(11) NOT NULL,
  `patient_preffered_day_treatment` varchar(11) NOT NULL,
  `patient_hospital_affiliated` varchar(50) NOT NULL,
  `patient_old_dialysis_facility` varchar(50) NOT NULL,
  `patient_relationship_with_patient` varchar(11) NOT NULL,
  `patient_source_funds` varchar(100) NOT NULL,
  `patient_source_income` varchar(100) NOT NULL,
  `patient_source_assistance` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `activestatus`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`) VALUES
(96, '8392891454', 'A', 'madera', 'marvin ', 1, 'bautista', '2', 'awd', '2023-03-15', 'awd', 'awdawd', 'awd', 'awdawdawd', 'awdawd', 'awdaw', '2', '2', 'THURSDAY', 'awdawdawd', 'awdawdaw', 'dawdawdaw', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(97, '4641169416', 'A', 'madera', 'joan', 1, 'bautista', '2', 'awdawd', '2023-04-05', 'adawd', 'awdawda', 'wdaw', 'dawdaw', 'awd', 'awdaw', '2', '2', 'TUESDAY', 'awdawd', 'awdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(98, '6554782481', 'A', 'madera', 'joan', 1, 'bautista', '2', 'awdawd', '2023-04-05', 'adawd', 'awdawda', 'wdaw', 'dawdaw', 'awd', 'awdaw', '2', '2', 'WEDNESDAY', 'awdawd', 'awdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(99, '3996717475', 'A', 'Cherry', 'Pipaypaypayin', 1, 'Choy', '2', 'awdawda', '2023-03-08', 'awdawd', 'awdaw', 'dawd', 'awdawdwad', 'awdaw', 'awdaw', '2', '2', 'MONDAY', 'dawd', 'awdawdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(100, '8962586755', 'A', 'Perkeler', 'keter', 1, 'ran', '2', 'awdawda', '2023-03-08', 'awdawd', 'awdaw', 'dawd', 'awdawdwad', 'awdaw', 'awdaw', '2', '2', 'FRIDAY', 'dawd', 'awdawdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(101, '5237225458', 'A', 'John', 'mulac', 1, 'mulac', '2', 'awdawd', '2023-03-21', 'awdaw', 'dawdawd', 'awdaw', 'dawdawdawd', 'awdaw', 'wdawd', '2', '2', 'MONDAY', 'dawdaw', 'awdawdaw', 'awdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(102, '9656973441', 'A', 'Adawpinaka', 'dalahads', 1, 'ng Panids', '2', 'awdawd', '2023-03-21', 'awdaw', 'dawdawd', 'awdaw', 'dawdawdawd', 'awdaw', 'wdawd', '2', '2', 'SATURDAY', 'dawdaw', 'awdawdaw', 'awdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(103, '5283274293', 'B', 'awdawd', 'awdawd', 1, 'dawd', '2', 'awdawd', '2023-03-16', 'awdawd', 'awdawd', 'awdawd', 'awdawd', 'adwadaw', 'awdawd', '2', '3', 'MONDAY', 'dawd', 'awdawdaw', 'dawdawdwa', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(104, '7194129121', 'B', 'awdawd', 'awdawd', 1, 'dawd', '2', 'awdawd', '2023-03-16', 'awdawd', 'awdawd', 'awdawd', 'awdawd', 'adwadaw', 'awdawd', '2', '3', 'THURSDAY', 'dawd', 'awdawdaw', 'dawdawdwa', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(105, '6667773886', 'C', 'awawdaw', 'dawd', 1, 'awdawd', '2', 'awdawd', '2023-02-27', 'awd', 'awda', 'wdawda', 'wdawdawd', 'awd', 'awdawd', '2', '3', 'MONDAY', 'awdawd', 'awdawd', 'awdawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(106, '1936528293', 'B', 'awawdaw', 'dawd', 1, 'awdawd', '2', 'awdawd', '2023-02-27', 'awd', 'awda', 'wdawda', 'wdawdawd', 'awd', 'awdawd', '2', '3', 'TUESDAY', 'awdawd', 'awdawd', 'awdawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(107, '3218712774', 'C', 'awd', 'awdaw', 1, 'dawdawd', '2', 'awdawd', '2023-03-15', 'awdaw', 'dawdaw', 'dad', 'awdawdawd', 'awd', 'wdawdaw', '2', '3', 'TUESDAY', 'awdawdaw', 'awdawdaw', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(108, '8137112284', 'B', 'awd', 'awdaw', 1, 'dawdawd', '2', 'awdawd', '2023-03-15', 'awdaw', 'dawdaw', 'dad', 'awdawdawd', 'awd', 'wdawdaw', '2', '3', 'WEDNESDAY', 'awdawdaw', 'awdawdaw', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(109, '9344989655', 'C', 'awd', 'awdaw', 1, 'dawda', '2', 'awdawd', '2023-03-21', 'awdawd', 'awdawdawd', 'awda', 'wdawdawdaw', 'awda', 'dawd', '2', '3', 'WEDNESDAY', 'wdawdaw', 'awdawd', 'awdawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(110, '1632856264', 'C', 'awd', 'awdaw', 1, 'dawda', '2', 'awdawd', '2023-03-21', 'awdawd', 'awdawdawd', 'awda', 'wdawdawdaw', 'awda', 'dawd', '2', '3', 'THURSDAY', 'wdawdaw', 'awdawd', 'awdawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(111, '5176926544', 'B', 'awd', 'awdaw', 1, 'dawda', '2', 'awdawd', '2023-03-21', 'awdawd', 'awdawdawd', 'awda', 'wdawdawdaw', 'awda', 'dawd', '2', '3', 'FRIDAY', 'wdawdaw', 'awdawd', 'awdawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(112, '8359982724', 'C', 'awd', 'awdawdaw', 1, 'dawd', '2', 'awdawd', '2023-03-13', 'awdawd', 'wdawd', 'awdawd', 'awdawawd', 'awdaw', 'awda', '2', '2', 'FRIDAY', 'dawdawd', 'awdawd', 'wdawdwad', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(113, '9377452392', 'B', 'awd', 'awdawdaw', 1, 'dawd', '2', 'awdawd', '2023-03-13', 'awdawd', 'wdawd', 'awdawd', 'awdawawd', 'awdaw', 'awda', '2', '2', 'SATURDAY', 'dawdawd', 'awdawd', 'wdawdwad', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(114, '3759362343', 'A', 'awda', 'wdawdaw', 1, 'dawd', '2', 'awdawdawd', '2023-03-15', 'awdaw', 'dawdaw', 'dawd', 'awdawdawd', 'awdaw', 'awdawdaw', '2', '1', 'MONDAY', 'dawd', 'awdaw', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(115, '8739854663', 'B', 'awd', 'awd', 1, 'awdaw', '2', 'awdawd', '2023-03-08', 'awdaw', 'dawd', 'awdaw', 'dwadawd', 'awdaw', 'awdawdawd', '2', '1', 'MONDAY', 'dawd', 'awdawd', 'awdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO'),
(116, '8214457839', 'A', 'sample', 'sample', 1, 'sample', '33', 'male', '2023-03-21', 'sample address', '0922222', 'taytay', 'facebook', 'Dr. Sample', 'Sarah Doe', '2', '2', 'MONDAY', 'Taytay Clinic', 'NA', 'Mother', 'NGO(Non-goverment organization)', '40-000-60,000', 'DSWD');

-- --------------------------------------------------------

--
-- Table structure for table `temp_shift_sched_holder`
--

CREATE TABLE `temp_shift_sched_holder` (
  `id` int(11) NOT NULL,
  `shift_id` varchar(20) NOT NULL,
  `shift` varchar(5) NOT NULL,
  `preferred_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `total_shift`
--

CREATE TABLE `total_shift` (
  `id` int(11) NOT NULL,
  `number_of_shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_shift`
--

INSERT INTO `total_shift` (`id`, `number_of_shift`) VALUES
(1, '8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `display_name` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_picture` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `display_name`, `role`, `user_name`, `password`, `profile_picture`) VALUES
(1, 'Administrator', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1678087307background.jpg '),
(2, 'jetjet', 'receptionist', 'jetjet', '21232f297a57a5a743894a0e4a801fc3', '16669116321656551981avatar.png'),
(3, 'mark', 'receptionist', 'mark', '21232f297a57a5a743894a0e4a801fc3', '1678087265user.png '),
(5, 'andrian', 'receptionist', 'ajames', '9366d86d48d2faeec5c72ffe824d3453', '1678087250logo1.jpg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shiftID` (`shiftID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts_schedule`
--
ALTER TABLE `shifts_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldates`
--
ALTER TABLE `tbldates`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shiftID` (`shiftID`),
  ADD UNIQUE KEY `shiftID_2` (`shiftID`);

--
-- Indexes for table `temp_shift_sched_holder`
--
ALTER TABLE `temp_shift_sched_holder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shifts_schedule`
--
ALTER TABLE `shifts_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tbldates`
--
ALTER TABLE `tbldates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `temp_shift_sched_holder`
--
ALTER TABLE `temp_shift_sched_holder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
