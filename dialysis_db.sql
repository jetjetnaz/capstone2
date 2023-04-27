-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 08:27 AM
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
  `patient_source_assistance` varchar(20) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `best_time` varchar(20) NOT NULL,
  `how_can_arc` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`) VALUES
(68, '2589978181', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(69, '1551513352', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(70, '1389936543', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(71, '4191297998', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(72, '3753166726', 'C', 'Calibod', 'Carmen', 'Ordaniza', '23', 'Female', '2023-03-08', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Roel Hermosa', '3', '3', 'WEDNESDAY', 'None', 'None', 'Father', 'Help from other family member/relative (tulong mul', '10-000-30,000', 'PhilHealth', 'RC', 'Anytime', '', ''),
(73, '1118776633', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(74, '5842597551', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(75, '5842148684', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(76, '7268965931', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '');

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
(7, 'MONDAY', 'Dr. Guillermo'),
(8, 'TUESDAY', 'Dr. Glenn'),
(9, 'WEDNESDAY', 'Dr. Guillermo'),
(14, 'THURSDAY', 'Dr. Guillermo'),
(15, 'FRIDAY', 'Dr. Glenn'),
(16, 'SATURDAY', 'Dr. Buenavides');

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
(236, '8473249985', 'MONDAY', 'A'),
(239, '4635128323', 'MONDAY', 'B'),
(240, '4545625919', 'TUESDAY', 'B'),
(241, '4783485389', 'THURSDAY', 'B'),
(242, '7582761944', 'THURSDAY', 'B'),
(243, '7546115129', 'FRIDAY', 'B'),
(244, '4355179253', 'SATURDAY', 'B'),
(245, '5527866669', 'MONDAY', 'C'),
(246, '7234117624', 'TUESDAY', 'C'),
(247, '2758369792', 'WEDNESDAY', 'A'),
(248, '5491268375', 'WEDNESDAY', 'B'),
(250, '9567475467', 'MONDAY', 'A'),
(252, '8963896193', 'MONDAY', 'A'),
(253, '9878642648', 'MONDAY', 'A'),
(254, '8792475661', 'MONDAY', 'A'),
(261, '8676443588', 'MONDAY', 'A'),
(263, '7753226197', 'MONDAY', 'A');

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
  `patient_middle_name` varchar(20) NOT NULL,
  `patient_age` varchar(5) NOT NULL,
  `patient_gender` varchar(10) NOT NULL,
  `patient_date_birth` varchar(20) NOT NULL,
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
  `religion` varchar(50) NOT NULL,
  `best_time` varchar(20) NOT NULL,
  `how_can_arc` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`) VALUES
(182, '8473249985', 'A', 'Nazareno', 'Mark Dave', 'Ayuban', '20', 'Male', '2023-03-11', 'Pangasihan Gingoog City', '09565734704', 'Gingoog City', 'None', 'None', 'Jeanette Nazareno', '3', '2', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'RC', 'Anytime', '', ''),
(185, '4635128323', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'MONDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(186, '4545625919', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'TUESDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(187, '4783485389', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'THURSDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(188, '7582761944', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'THURSDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(189, '7546115129', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'FRIDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(190, '4355179253', 'B', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'SATURDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(191, '5527866669', 'C', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'MONDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(192, '7234117624', 'C', 'fafaf', 'iuuyfyf', 'yiyfyf', '34', 'uviuv', '2023-03-02', 'fdvgsdgf', 'bfdbdfdf', 'bdfbsdvggsd', 'dbf', 'bfbfdbxb', 'cbxbxfbf', '3', '3', 'TUESDAY', 'bxfbx', 'dfgsdfxhbdf', 'fxcbxfbx', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'iuiuviuvi', 'hnfcndfh', '', ''),
(193, '2758369792', 'A', 'Calibod', 'Carmen', 'Ordaniza', '23', 'Female', '2023-03-08', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Roel Hermosa', '3', '3', 'WEDNESDAY', 'None', 'None', 'Father', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'RC', 'Anytime', '', ''),
(194, '5491268375', 'B', 'Calibod', 'Carmen', 'Ordaniza', '23', 'Female', '2023-03-08', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Roel Hermosa', '3', '3', 'WEDNESDAY', 'None', 'None', 'Father', 'Help from other family member/relative (tulong mula sa mga kamag-anak', '10-000-30,000', 'PhilHealth', 'RC', 'Anytime', '', ''),
(196, '9567475467', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(198, '8963896193', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(199, '9878642648', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(200, '8792475661', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(207, '8676443588', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', ''),
(209, '7753226197', 'A', 'Serino', 'Adrian', 'Lumocso', '45', 'Male', '2023-04-14', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '3', 'MONDAY', 'None', 'None', 'Son', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '');

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
(2, 'jetjet', 'receptionist', 'jetjet', '69c77fec90088c2b68297fe7a8be98ed', '16669116321656551981avatar.png'),
(3, 'mark', 'receptionist', 'mark', 'ea82410c7a9991816b5eeeebe195e20a', '1678087265user.png '),
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
-- Indexes for table `shifts_schedule`
--
ALTER TABLE `shifts_schedule`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `total_shift`
--
ALTER TABLE `total_shift`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shifts_schedule`
--
ALTER TABLE `shifts_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `temp_shift_sched_holder`
--
ALTER TABLE `temp_shift_sched_holder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `total_shift`
--
ALTER TABLE `total_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
