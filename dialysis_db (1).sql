-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 01:46 PM
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
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shifts_schedule`
--

CREATE TABLE `shifts_schedule` (
  `id` int(11) NOT NULL,
  `shift_id` varchar(30) NOT NULL,
  `preferred_date` varchar(100) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shifts_schedule`
--

INSERT INTO `shifts_schedule` (`id`, `shift_id`, `preferred_date`, `shift`, `title`, `description`, `start_datetime`) VALUES
(176, '2229686565', '2023-05-10', 'A', 'awd', '2229686565', '2023-05-10'),
(180, '4826525468', '2023-05-11', 'A', 'awd', '4826525468', '2023-05-11'),
(181, '7752612112', '2023-05-11', 'A', 'awd', '7752612112', '2023-05-11'),
(182, '5275592768', '2023-05-11', 'B', 'awdawd', '5275592768', '2023-05-11'),
(184, '5383636816', '2023-05-22', 'A', 'awda', '5383636816', '2023-05-22');

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
  `patient_source_assistance` varchar(11) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `best_time` varchar(100) NOT NULL,
  `how_can_arc` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `active_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `activestatus`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`, `active_status`) VALUES
(119, '2229686565', 'A', 'awdawd', 'adawd', 1, 'awdawd', '1', 'awdawd', '2023-05-10', 'awdadw', 'awdadw', 'awdawd', 'adawd', 'awwad', 'awdaw', '1', '1', '2023-05-10', 'awdad', 'addawd', 'awdad', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 1),
(120, '4826525468', 'A', 'awd', 'awd', 1, 'daw', '1', 'awd', '2023-05-12', 'awd', 'awd', 'awd', 'awd', 'awd', 'awd', '1', '1', '2023-05-11', 'awd', 'dwa', 'adw', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 1),
(121, '7752612112', 'A', 'awd', 'awd', 1, 'daw', '1', 'awd', '2023-05-12', 'awd', 'awd', 'awd', 'awd', 'awd', 'awd', '1', '1', '2023-05-11', 'awd', 'dwa', 'adw', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 1),
(122, '5275592768', 'B', 'awd', 'awd', 1, 'awd', '1', 'awd', '2023-05-11', 'awd', 'awd', 'awd', 'awd', 'ad', 'awd', '1', '3', '2023-05-11', 'awd', 'awda', 'awd', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'dw', '', '', 1),
(123, '5383636816', 'A', 'awda', 'awd', 1, 'awd', '1', 'awd', '2023-05-22', 'awd', '09226122187', 'cdo', 'awd', 'awd', 'awd', '1', '1', '2023-05-22', 'awd', 'awd', 'awd', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 1);

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
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
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
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shifts_schedule`
--
ALTER TABLE `shifts_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tbldates`
--
ALTER TABLE `tbldates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `temp_shift_sched_holder`
--
ALTER TABLE `temp_shift_sched_holder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
