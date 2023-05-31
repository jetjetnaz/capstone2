-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:39 AM
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
  `religion` varchar(100) NOT NULL,
  `best_time` varchar(100) NOT NULL,
  `how_can_arc` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `active_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `shiftID`, `shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`, `active_status`) VALUES
(49, '4997326452', 'A', 'awda', 'wdawd', 'awdawda', '2', 'daw', '2023-03-22', 'awdawda', 'wdaw', 'dawd', 'awdawdawd', 'awd', 'dawdaw', '2', '2', 'SATURDAY', 'da', 'awdawd', 'dawd', 'Job(trabaho)', 'Below 10,000', 'PSCO', '', '', '', '', 0),
(50, '7461784628', 'A', 'awd', 'awdaw', 'daw', '2', 'awdawd', '2023-03-09', 'awdaw', 'dawd', 'awdawd', 'awdawd', 'awd', 'wdaw', '2', '2', 'SATURDAY', 'awdawdawda', 'awdawd', 'dawdawd', 'Job(trabaho)', 'Below 10,000', 'PSCO', '', '', '', '', 0),
(55, '4826525468', 'A', 'awd', 'awd', 'daw', '1', 'awd', '2023-05-12', 'awd', 'awd', 'awd', 'awd', 'awd', 'awd', '1', '1', '2023-05-11', 'awd', 'dwa', 'adw', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 0),
(56, '7752612112', 'A', 'awd', 'awd', 'daw', '1', 'awd', '2023-05-12', 'awd', 'awd', 'awd', 'awd', 'awd', 'awd', '1', '1', '2023-05-11', 'awd', 'dwa', 'adw', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 0),
(62, '7932937246', 'B', 'CANONIGO ', 'IRENEO', ' ORDANIZA', '69', 'MALE', '1952-12-22', '#040 ZONE 4 TABLON CDOC', '0905-966-6836', 'TABLON', 'NONE', 'DR.GONZALES', 'IRENE E CANONIGO', '3', '2', '2023-05-26', 'POLYMEDIC HOSPITAL', 'None', 'FATHER ', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'CHURCH OF CHRIST', 'ANYTIME', '', '', 0),
(63, '1373613879', 'A', 'OCO', 'CRISTINA', 'Langala', '57', 'FAMALE', '1958-07-24', 'Cogon, Cagayan de Oro', '09565734704', 'COGON', 'None', 'Dr. Karen Gonzales', 'Ernesto Oco', '2', '2', '2023-05-31', 'NONE', 'NONE', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'R.CATHOLIC', 'Anytime', '', '', 0),
(64, '7622498696', 'A', 'OCO', 'CRISTINA', 'Langala', '57', 'FAMALE', '1958-07-24', 'Cogon, Cagayan de Oro', '09565734704', 'COGON', 'None', 'Dr. Karen Gonzales', 'Ernesto Oco', '2', '2', '2023-05-30', 'NONE', 'NONE', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'R.CATHOLIC', 'Anytime', '', '', 0),
(66, '1257797962', 'A', 'Calibod', 'Johnny ', 'Ordaniza', '45', 'Male', '2023-05-25', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '2', '2023-01-25', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'RC', 'Anytime', '', '', 0),
(68, '2229686565', 'A', 'awdawd', 'adawd', 'awdawd', '1', 'awdawd', '2023-05-10', 'awdadw', 'awdadw', 'awdawd', 'adawd', 'awwad', 'awdaw', '1', '1', '2023-05-10', 'awdad', 'addawd', 'awdad', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'awd', 'awd', '', '', 0),
(69, '2265323277', 'A', 'Sarniento', 'Johnny ', 'Ordaniza', '69', 'Male', '2023-02-12', 'Pangasihan Gingoog City', '09565734704', 'Gingoog City', 'None', 'Dr. Gonzales', 'Jeanette Nazareno', '3', '3', '2023-05-29', 'Medical', 'None', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '', 0),
(70, '3193682651', 'A', 'Calibod', 'Johnny ', 'Ordaniza', '45', 'Male', '2023-05-25', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '2', '2023-05-24', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'RC', 'Anytime', '', '', 0),
(71, '3416348122', 'A', 'awdaw', 'dawdaw', 'dawd', '2', 'awdawdawd', '2023-03-08', 'awdaw', 'dawd', 'awdawdaw', 'dawdawdawd', 'awdaw', 'awdawd', '2', '2', '2023-03-10', 'dawd', 'awdawda', 'awdaw', 'Job(trabaho)', 'Below 10,000', 'PSCO', '', '', '', '', 0),
(72, '4397187437', 'C', 'Sarniento', 'Johnny ', 'Ordaniza', '69', 'Male', '2023-02-12', 'Pangasihan Gingoog City', '09565734704', 'Gingoog City', 'None', 'Dr. Gonzales', 'Jeanette Nazareno', '3', '3', 'WEDNESDAY', 'Medical', 'None', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '', 0),
(73, '5143236274', 'A', 'Hermosa', 'Carmen', 'Ordaniza', '57', 'Female', '2023-05-17', 'Spuc Camp., Masterson AVE.', '09263099612', 'Igpit Opoc Mis.Or', 'None', 'Dr. Gonzales', 'Roel Hermosa', '2', '2', 'MONDAY', 'None', 'None', 'Husband', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'T.C.M', 'Anytime', '', '', 0),
(74, '6695676778', 'A', 'Calibod', 'Johnny ', 'Ordaniza', '69', 'Male', '1965-12-07', 'Pangasihan Gingoog City', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Roel Hermosa', '3', '2', '2023-05-27', 'Polymedic Hospital', 'NONE', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'ANYTIME', '', '', 0),
(75, '6853784812', 'A', 'DE ASIS', 'WENDY ', 'DAMASCO', '63', 'FEMALE', '1957-10-19', 'Block 11 LOTG Villa Angela Subd Balulang, CDO', '0955011749', 'Balulang, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Romeo M. De Asis/Esther De Asis', '3', '2', '2023-05-29', 'Medical', 'None', 'Husband and', 'Job(trabaho)', 'Above 100,000', 'PhilHealth', 'EVANGELICAL', 'Anytime', '', '', 0),
(76, '7266891874', 'C', 'Leyson', 'Carlito', 'Padilla', '57', 'Male', '2023-05-31', '#42 Vamenta Blud, Ilaya, Carmen', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Karla Marie Leyson', '2', '1', '2023-05-29', 'None', 'None', 'Niece', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'baptist', 'Anytime', '', '', 0),
(77, '7694775518', 'B', 'CANONIGO ', 'IRENEO', ' ORDANIZA', '69', 'MALE', '1952-12-22', '#040 ZONE 4 TABLON CDOC', '0905-966-6836', 'TABLON', 'NONE', 'DR.GONZALES', 'IRENE E CANONIGO', '3', '2', '2023-05-26', 'POLYMEDIC HOSPITAL', 'None', 'FATHER ', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'CHURCH OF CHRIST', 'ANYTIME', '', '', 0),
(78, '7924497293', 'B', 'Velasco', 'Mar', 'Paza', '23', 'Male', '2023-05-11', 'Tubajon, Laguindingan Misamis Oriental', '786867676876', 'N/A', 'None', 'Dr. Cahilog', 'Robert Pacatan Jr.', '3', '3', '2023-05-30', 'None', 'None', 'Cousin in L', 'Job(trabaho)', 'Below 10,000', 'PhilHealth', 'RC', 'Anytime', '', '', 0),
(79, '8171963545', 'B', 'Calibod', 'Johnny ', 'Ordaniza', '45', 'Male', '2023-05-25', 'Spuc Camp., Masterson AVE.', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Johnster Calibod', '3', '2', '2023-01-25', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'RC', 'Anytime', '', '', 0),
(80, '8218951839', 'A', 'Gregorio', 'Garry', 'Rajaco', '36', 'Male', '2023-05-08', 'Capas Kulambos Lapasan', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Licuanan, Jecerey Lumagok', '3', '2', '2023-05-25', 'None', 'None', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 0),
(81, '8321724614', 'B', 'Velasco', 'Mar', 'Paza', '23', 'Male', '2023-05-11', 'Tubajon, Laguindingan Misamis Oriental', '786867676876', 'N/A', 'None', 'Dr. Cahilog', 'Robert Pacatan Jr.', '3', '3', '2023-05-31', 'None', 'None', 'Cousin in L', 'Job(trabaho)', 'Below 10,000', 'PhilHealth', 'RC', 'Anytime', '', '', 0),
(82, '8649571294', 'B', 'Gregorio', 'Garry', 'Rajaco', '36', 'Male', '2023-05-08', 'Capas Kulambos Lapasan', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Licuanan, Jecerey Lumagok', '3', '2', '2023-05-25', 'None', 'None', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 0),
(83, '8898229299', 'C', 'OCO', 'CRISTINA', ' LANGAL', '57', 'Female', '1958-07-24', 'Cogon, Cagayan de Oro', '09362591998', 'COGON', 'NONE ', 'Dr. Karen Gonzales', 'Ernesto Oco', '1', '2', '2023-05-31', 'NONE', 'NONE', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'R.CATHOLIC', 'ANYTIME', '', '', 0),
(84, '9635351738', 'C', 'OCO', 'CRISTINA', ' LANGAL', '57', 'Female', '1958-07-24', 'Cogon, Cagayan de Oro', '09362591998', 'COGON', 'NONE ', 'Dr. Karen Gonzales', 'Ernesto Oco', '1', '2', '2023-05-30', 'NONE', 'NONE', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'R.CATHOLIC', 'ANYTIME', '', '', 0),
(85, '9745922543', 'A', 'Calibod', 'Johnny ', 'Ordaniza', '69', 'Male', '1965-12-07', 'Pangasihan Gingoog City', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Roel Hermosa', '3', '2', '2023-05-24', 'Polymedic Hospital', 'NONE', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'ANYTIME', '', '', 0),
(86, '1788941332', 'A', 'Sarmiento', 'Danilo', 'Malicsi', '51', 'Male', '1970-12-09', 'San Agustin Valley Homes Carmen', '09267461527', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Estrella Bautista', '3', '3', '2023-05-24', 'None', 'NONE', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Catholic', 'Anytime', '', '', 0),
(87, '4662735159', 'A', 'Hermosa', 'Carmen', 'Ordaniza', '57', 'Female', '2023-05-10', 'Spuc Camp., Masterson AVE.', '09565734704', 'Igpit Opoc Mis.Or', 'None', 'None', 'Roel Hermosa', '3', '2', '2023-05-25', 'None', 'None', 'Husband', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'TCM', 'Anytime', '', '', 0),
(88, '5761437314', 'B', 'Guzom', 'Vermie', 'Valle', '59', 'Male', '2023-05-08', 'Purok 5', '09263099612', 'Calatcat, Alubijid', 'None', 'None', 'Olympia M. Guzom', '2', '3', '2023-05-26', 'None', 'None', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 0),
(89, '8584352964', 'A', 'Sarmiento', 'Danilo', 'Malicsi', '51', 'Male', '1970-12-09', 'San Agustin Valley Homes Carmen', '09267461527', 'Carmen, Cagayan De Oro City', 'None', 'None', 'Estrella Bautista', '3', '3', '2023-05-27', 'None', 'NONE', 'Sister', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Catholic', 'Anytime', '', '', 0),
(90, '8695179177', 'A', 'Guzom', 'Vermie', 'Valle', '59', 'Male', '2023-05-08', 'Purok 5', '09263099612', 'Calatcat, Alubijid', 'None', 'None', 'Olympia M. Guzom', '2', '3', '2023-05-30', 'None', 'None', 'Husband', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 0),
(91, '9191893258', 'A', 'Hermosa', 'Carmen', 'Ordaniza', '57', 'Female', '2023-05-10', 'Spuc Camp., Masterson AVE.', '09565734704', 'Igpit Opoc Mis.Or', 'None', 'None', 'Roel Hermosa', '3', '2', '2023-05-27', 'None', 'None', 'Husband', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'TCM', 'Anytime', '', '', 0),
(92, '5862896723', 'B', 'Serino', 'Andrian James', 'Yu', '22', 'Male', '2000-12-14', 'Upper Carmen', '09262379978', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Jacky Lim', '3', '2', '2023-05-29', 'City Hospital', 'None', 'Father', 'HMO', 'Below 10,000', 'DSWD', 'Catholic', 'Anytime', '', '', 0),
(93, '5983411799', 'A', 'Nazareno', 'Mark Dave', 'Ayuban', '20', 'Male', '2002-07-23', 'Pangasihan Gingoog City', '09263099612', 'G', 'None', 'Dr. Karen Gonzales', 'Nazareno Andrian', '2', '3', '2023-05-24', 'City Hospital', 'None', 'Brother', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Catholic', 'Anytime', '', '', 0),
(94, '3877478314', 'C', 'Senepete', 'Angel Grace', 'Yu', '22', 'Female', '2000-07-16', 'Carmen, Cagayan De Oro City', '09565734704', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Karen Gonzales', 'Vhen Pabualan', '3', '2', '2023-05-29', 'None', 'NONE', 'Brother', 'Help from other family member/relative (tulong mul', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '', 0);

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
(213, '3654936937', '2023-05-27', 'A', 'Nazareno', '3654936937', '2023-05-27'),
(214, '2177284457', '2023-05-25', 'B', 'Serino', '2177284457', '2023-05-25'),
(216, '3237571972', '2023-05-24', 'C', 'Senepete', '3237571972', '2023-05-24'),
(218, '6741666956', '2023-05-30', 'A', 'Dablio', '6741666956', '2023-05-30'),
(219, '2322134192', '2023-05-29', 'B', 'Serino ', '2322134192', '2023-05-29'),
(220, '7443223456', '2023-05-30', 'A', 'Gates', '7443223456', '2023-05-30'),
(221, '4251593934', '2023-05-29', 'A', 'Gates', '4251593934', '2023-05-29'),
(222, '8237934475', '2023-05-24', 'A', 'Calibod', '8237934475', '2023-05-24'),
(223, '9371597295', '2023-05-24', 'A', 'Sarniento', '9371597295', '2023-05-24'),
(224, '3692157918', '2023-05-24', 'A', 'ASDAS', '3692157918', '2023-05-24'),
(225, '5481854295', '2023-05-24', 'A', 'GEDDGDH', '5481854295', '2023-05-24'),
(226, '3118973718', '2023-05-24', 'A', 'VFDNFYT', '3118973718', '2023-05-24'),
(227, '9683627423', '2023-05-24', 'A', 'BHDHN', '9683627423', '2023-05-24'),
(228, '5339627666', '2023-05-24', 'A', 'BHDHN', '5339627666', '2023-05-24'),
(229, '2547872393', '2023-05-24', 'A', 'Guzom', '2547872393', '2023-05-24'),
(230, '5869449916', '2023-05-31', 'A', 'HD', '5869449916', '2023-05-31'),
(231, '3795523913', '2023-05-29', 'A', 'HD', '3795523913', '2023-05-29'),
(232, '2154589283', '2023-05-29', 'A', 'HD', '2154589283', '2023-05-29'),
(233, '1631295924', '2023-05-29', 'A', 'HD', '1631295924', '2023-05-29');

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
(156, '3654936937', 'A', 'Nazareno', 'Mark Dave', 1, 'Ayuban', '20', 'Male', '2002-07-23', 'Pangasihan Gingoog City', '09263099612', 'G', 'None', 'Dr. Karen Gonzales', 'Nazareno Andrian', '2', '3', '2023-05-27', 'City Hospital', 'None', 'Brother', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Catholic', 'Anytime', '', '', 1),
(157, '2177284457', 'B', 'Serino', 'Andrian James', 1, 'Yu', '22', 'Male', '2000-12-14', 'Upper Carmen', '09262379978', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Jacky Lim', '3', '2', '2023-05-25', 'City Hospital', 'None', 'Father', 'HMO', 'Below 10,000', 'DSWD', 'Catholic', 'Anytime', '', '', 1),
(159, '3237571972', 'C', 'Senepete', 'Angel Grace', 1, 'Yu', '22', 'Female', '2000-07-16', 'Carmen, Cagayan De Oro City', '09565734704', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Karen Gonzales', 'Vhen Pabualan', '3', '2', '2023-05-24', 'None', 'NONE', 'Brother', 'Help from other family member/relative (tulong mula sa mga kamag-anak', 'Below 10,000', 'PhilHealth', 'Roman Catholic', 'Anytime', '', '', 1),
(161, '6741666956', 'A', 'Dablio', 'Mary Faith', 1, 'Dablio', '20', 'Female', '2002-09-12', 'Patag Cagayan De Oro City', '09565734704', 'Patag Cagayan De Oro City', 'None', 'Dr. Cahilog', 'Aldwin Labial', '6', '2', '2023-05-30', 'Polymedic Hospital', 'None', 'Brother', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 1),
(162, '2322134192', 'B', 'Serino ', 'Andrian James', 1, 'Yu', '22', 'Male', '2000-12-14', 'Upper Carmen', '09262379978', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Gonzales', 'Jacky Lim', '3', '2', '2023-05-29', 'City Hospital', 'None', 'Brother', 'HMO', 'Below 10,000', 'DSWD', 'Catholic', 'Anytime', '', '', 1),
(163, '7443223456', 'A', 'Gates', 'Bill', 1, 'A', '68', 'Male', '1975-12-12', 'Pangasihan Gingoog City', '09565734704', 'Gingoog City', 'None', 'Dr. Gonzales', 'Johnster Calibod', '2', '2', '2023-05-30', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Catholic', 'Anytime', '', '', 1),
(164, '4251593934', 'A', 'Gates', 'Bill', 1, 'A', '68', 'Male', '1975-12-12', 'Pangasihan Gingoog City', '09565734704', 'Gingoog City', 'None', 'Dr. Gonzales', 'Johnster Calibod', '2', '3', '2023-05-29', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Catholic', 'Anytime', '', '', 1),
(165, '8237934475', 'A', 'Calibod', 'Johnny ', 1, 'Ordaniza', '69', 'Male', '0197-01-15', 'Cogon, Cagayan de Oro', '786867676876', 'COGON', 'None', 'Dr. Dacudao', 'Johnster Calibod', '3', '2', '2023-05-24', 'Polymedic Hospital', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 1),
(166, '9371597295', 'A', 'Sarniento', 'Adrian', 1, 'Ayuban', '45', 'Male', '1975-03-12', 'Spuc Camp., Masterson AVE.', '09263099612', 'Igpit Opoc Mis.Or', 'None', 'Dr. Gonzales', 'Roel Hermosa', '3', '2', '2023-05-24', 'None', 'None', 'Father', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 1),
(167, '3692157918', 'A', 'ASDAS', 'ASDASD', 1, 'DASIODJ', '75', 'AGAE', '2023-05-17', 'FAFVD', 'fvsdv', 'gegvs', 'gbs', 'BDFBR', 'BDFB', '3', '2', '2023-05-24', 'FDBDB', 'DHFBDD', 'BDFBES', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'GDFB', '', '', 1),
(168, '5481854295', 'A', 'GEDDGDH', 'FGTHD', 1, 'FGHDF', '45', 'GCNBF', '2023-05-04', 'BFDG', 'FDHDF', 'GDHND', 'GHDNHD', 'QBFDNFD', 'HNHF', '3', '2', '2023-05-24', 'WHTFDD', 'bcfdbs', 'gff', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'BNCG', 'NDFQ', '', '', 1),
(169, '3118973718', 'A', 'VFDNFYT', 'HTHDR', 1, 'HDH', '57', 'BNGF', '2023-05-12', 'FHDRFH', 'DFBFD', 'BDF', 'NGF', 'GBFDQ', 'ngf', '4', '3', '2023-05-24', 'bhfdhn', 'BDF', 'SDFFGGM', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'GDFH', 'NGFN', '', '', 1),
(170, '9683627423', 'A', 'BHDHN', 'HDH', 1, 'HDRH', '56', 'SDBHDFH', '2023-05-13', 'JYRD', 'VBFBD', 'GFDH', 'BFD', 'HBDF', 'wedhrd', '4', '2', '2023-05-24', 'DHD', 'fd ngdn', 'fhd', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'GFDH', 'ncd', '', '', 1),
(171, '5339627666', 'A', 'BHDHN', 'HDH', 1, 'HDRH', '56', 'SDBHDFH', '2023-05-13', 'JYRD', 'VBFBD', 'GFDH', 'BFD', 'HBDF', 'wedhrd', '4', '1', '2023-05-24', 'DHD', 'fd ngdn', 'fhd', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'GFDH', 'ncd', '', '', 1),
(172, '2547872393', 'A', 'Guzom', 'Danilo', 1, 'Valle', '56', 'Male', '2023-05-10', 'Pangasihan Gingoog City', '09263099612', 'Carmen, Cagayan De Oro City', 'None', 'Dr. Karen Gonzales', 'Roel Hermosa', '3', '1', '2023-05-24', 'None', 'None', 'Sister', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'Roman Catholic', 'Anytime', '', '', 1),
(173, '5869449916', 'A', 'HD', 'HD', 1, 'HD', '45', 'HD', '2023-05-11', 'HD', 'HD', 'HD', 'HD', 'HD', 'HD', '2', '3', '2023-05-31', 'HD', 'HD', 'HD', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'HD', 'HD', '', '', 1),
(174, '3795523913', 'A', 'HD', 'HD', 1, 'HD', '45', 'HD', '2023-05-11', 'HD', 'HD', 'HD', 'HD', 'HD', 'HD', '2', '3', '2023-05-29', 'HD', 'HD', 'HD', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'HD', 'HD', '', '', 1),
(175, '2154589283', 'A', 'HD', 'HD', 1, 'HD', '45', 'HD', '2023-05-11', 'HD', 'HD', 'HD', 'HD', 'HD', 'HD', '2', '3', '2023-05-29', 'HD', 'HD', 'HD', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'HD', 'HD', '', '', 1),
(176, '1631295924', 'A', 'HD', 'HD', 1, 'HD', '45', 'HD', '2023-05-11', 'HD', 'HD', 'HD', 'HD', 'HD', 'HD', '2', '3', '2023-05-29', 'HD', 'HD', 'HD', 'Job(trabaho)', 'Below 10,000', 'PSCO', 'HD', 'HD', '', '', 1);

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
(1, 'Administrator', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '168490421420220904_175554.jpg'),
(2, 'Receptionist', 'receptionist', 'jetjet', '69c77fec90088c2b68297fe7a8be98ed', '168490407520220911_162555.jpg'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `tbldates`
--
ALTER TABLE `tbldates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `temp_shift_sched_holder`
--
ALTER TABLE `temp_shift_sched_holder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
