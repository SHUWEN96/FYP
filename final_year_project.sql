-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 11:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `acknowledgement`
--

CREATE TABLE `acknowledgement` (
  `acknowledgement_id` int(2) NOT NULL,
  `user_Ic` varchar(13) NOT NULL,
  `acknowledgement_1` varchar(5) NOT NULL,
  `acknowledgement_2` varchar(5) NOT NULL,
  `acknowledgement_3` varchar(5) NOT NULL,
  `acknowledgement_4` varchar(5) NOT NULL,
  `acknowledgement_5` varchar(5) NOT NULL,
  `Ack_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acknowledgement`
--

INSERT INTO `acknowledgement` (`acknowledgement_id`, `user_Ic`, `acknowledgement_1`, `acknowledgement_2`, `acknowledgement_3`, `acknowledgement_4`, `acknowledgement_5`, `Ack_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-19 08:50:15', '2019-04-16 05:04:06'),
(2, '971015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-19 08:50:15', '2019-04-17 03:18:43'),
(3, '970809080809', 'no', 'no', 'no', 'no', 'no', 1, '2019-04-19 08:50:15', '2019-04-17 03:48:36'),
(4, '971013086090', 'yes', 'no', 'no', 'no', 'no', 1, '2019-04-19 08:50:15', '2019-04-17 10:59:50'),
(5, '921015086090', 'yes', 'no', 'no', 'no', 'yes', 1, '2019-04-19 09:33:19', '2019-04-19 09:36:48'),
(7, '911015086090', 'no', 'no', 'no', 'no', 'yes', 1, '2019-04-20 23:38:49', '2019-04-20 23:38:52'),
(8, '901015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-21 02:02:14', '2019-04-21 02:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `Applicant_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `Applicant_Add` varchar(100) NOT NULL,
  `Applicant_Email` varchar(50) NOT NULL,
  `Applicant_NoTel` int(11) NOT NULL,
  `Applicant_Age` int(2) NOT NULL,
  `Applicant_gender` varchar(10) NOT NULL,
  `Applicant_DOB` date NOT NULL,
  `Applicant_POB` varchar(50) NOT NULL,
  `Applicant_Citizen` varchar(50) NOT NULL,
  `Applicant_Religion` varchar(50) NOT NULL,
  `Applicant_Nation` varchar(50) NOT NULL,
  `Applicant_MaritalStatus` varchar(50) NOT NULL,
  `Applicant_Height` float NOT NULL,
  `Applicant_Weight` float NOT NULL,
  `Applicant_NoHP` int(11) NOT NULL,
  `Applicant_VLC` varchar(10) NOT NULL,
  `Mom_Name` varchar(50) NOT NULL,
  `Mom_Ic` char(13) NOT NULL,
  `Dad_Name` varchar(50) NOT NULL,
  `Dad_Ic` char(13) NOT NULL,
  `Spouse_name` varchar(50) NOT NULL,
  `Applicant_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`Applicant_Id`, `user_Ic`, `Applicant_Name`, `Applicant_Add`, `Applicant_Email`, `Applicant_NoTel`, `Applicant_Age`, `Applicant_gender`, `Applicant_DOB`, `Applicant_POB`, `Applicant_Citizen`, `Applicant_Religion`, `Applicant_Nation`, `Applicant_MaritalStatus`, `Applicant_Height`, `Applicant_Weight`, `Applicant_NoHP`, `Applicant_VLC`, `Mom_Name`, `Mom_Ic`, `Dad_Name`, `Dad_Ic`, `Spouse_name`, `Applicant_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'CHNG SHU WEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 12, 'male', '2019-04-12', 'Selangor', 'Malaysia', 'Buddha', 'Johor', 'Single', 187, 55.44, 176650496, 'C', 'lim swee fang', '650909085678', 'CHNG CHUAN HOCK', '590526085321', 'shuwen_1015@hotmail.com', 1, '2019-04-19 08:44:47', '2019-04-16 04:34:15'),
(2, '971015086090', 'FITRAH', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 26, 'female', '2019-04-18', 'Taiping', 'CHINESE', 'BUDDHA', 'MALAYSIAN', 'SINGLE', 167.9, 55.44, 176650496, 'D', 'LORIS MONAH', '650909085678', 'goh kuek ken', '590526085321', 'shuwen_1015@hotmail.com', 1, '2019-04-19 08:44:47', '2019-04-17 03:12:11'),
(3, '970809080809', 'FIZA', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 26, 'female', '2019-04-10', 'Selangor', 'Malaysia', 'ISLAM', 'Chinese', 'Single', 164, 49, 176650496, 'D', 'lim swee fang', '650909085678', 'AMBALAGAN A/L KAJI', '590526085321', 'shuwen_1015@hotmail.com', 1, '2019-04-19 08:44:47', '2019-04-17 03:45:14'),
(4, '971013086090', 'suthanon', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 26, 'male', '2019-04-10', 'kedah', 'Malaysian', 'Buddha', 'CHINESE', 'Single', 163.9, 59, 176650496, 'D', 'LOGESWARI A/P MOHAN', '650909085678', 'AMBALAGAN A/L KAJI', '590526085321', '', 1, '2019-04-19 08:44:47', '2019-04-17 10:44:26'),
(5, '921015086090', 'pravart', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'pravart@gmail.com', 176650496, 12, 'male', '2019-04-10', 'Thailand', 'Thailand', 'Buddha', 'siam', 'Single', 167.9, 70, 176650496, 'D', 'LOGESWARI A/P MOHAN', '660989012345', 'AMBALAGAN A/L KAJI', '590526085321', '', 1, '2019-04-19 09:31:10', '2019-04-19 09:31:16'),
(7, '911015086090', 'kay', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 26, 'male', '2019-04-11', 'Taiping', 'Malaysian', 'Buddha', 'Chinese', 'Single', 163.9, 49, 176650496, 'D', 'LIM TAI FANG', '650909085678', 'KOH TIAN HUAT', '590526085321', '', 1, '2019-04-20 23:37:08', '2019-04-20 23:37:11'),
(8, '901015086090', 'Nor Jasmin', 'Taman Universiti Jalan 22', 'jasmin@gmail.com', 179748178, 22, 'female', '1997-01-25', 'Kuala Lumpur', 'Malaysia', 'ISLAM', 'Pahang', 'SINGLE', 168, 48, 179748178, 'D', 'Faridah', '720418081234', 'Kasim', '600720031234', '', 1, '2019-04-21 01:56:34', '2019-04-21 01:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `cocuriculum`
--

CREATE TABLE `cocuriculum` (
  `Cocuriculum_Id` int(2) NOT NULL,
  `coco_level` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Koko_Activity_Year` year(4) NOT NULL,
  `Koko_Activity_name` varchar(50) NOT NULL,
  `Koko_Activity_Cert` varchar(100) NOT NULL,
  `Cocuriculum_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocuriculum`
--

INSERT INTO `cocuriculum` (`Cocuriculum_Id`, `coco_level`, `user_Ic`, `Koko_Activity_Year`, `Koko_Activity_name`, `Koko_Activity_Cert`, `Cocuriculum_checklist`, `Created_date`, `Modified_date`) VALUES
(1, 'School/University Level', '961015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-19 08:51:28', '2019-04-16 04:47:52'),
(2, 'School/University Level', '961015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-19 08:51:28', '2019-04-16 04:47:52'),
(3, 'School/University Level', '971015086090', 1990, 'kawat', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:51:28', '2019-04-17 03:16:28'),
(4, 'After graduation', '971015086090', 1990, 'HACKING', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:51:28', '2019-04-17 03:16:28'),
(5, 'School/University Level', '970809080809', 1990, 'HACKING', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:51:28', '2019-04-17 03:47:03'),
(6, 'After graduation', '970809080809', 1990, 'kawat', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:51:28', '2019-04-17 03:47:03'),
(7, 'After graduation', '971013086090', 1990, 'kawat', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:51:28', '2019-04-17 10:56:52'),
(8, 'School/University Level', '921015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-19 08:52:07', '2019-04-19 09:32:11'),
(10, 'After graduation', '911015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-20 23:37:47', '2019-04-20 23:37:51'),
(11, 'After graduation', '901015086090', 2009, 'BOLA JARING', 'chap13DSS.pdf', 1, '2019-04-21 01:59:27', '2019-04-21 01:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE `decision` (
  `Decision_Id` int(2) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `app_post1` varchar(50) NOT NULL,
  `Status_1` varchar(15) DEFAULT NULL,
  `Status_2` varchar(50) NOT NULL,
  `Is_active` varchar(12) NOT NULL,
  `Officer_Name` varchar(50) NOT NULL,
  `date_Officer` date NOT NULL,
  `Approval_status` varchar(10) NOT NULL DEFAULT 'In Process',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`Decision_Id`, `Applicant_Name`, `user_Ic`, `app_post1`, `Status_1`, `Status_2`, `Is_active`, `Officer_Name`, `date_Officer`, `Approval_status`, `Created_date`, `Modified_date`) VALUES
(4, 'CHNG SHU WEN', '961015086090', 'DS45 LECTURER', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 08:55:09', '2019-04-19 15:15:35'),
(5, 'CHNG SHU WEN ', '961015086090', 'DS45 LECTURER', 'Waiting List', '', '1', 'ALI', '2018-12-05', 'Approval', '2019-04-19 08:55:09', '2019-04-19 14:48:42'),
(6, 'FITRAH', '971015086090', 'DS51 SENIOR LECTURER', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 08:55:09', '2019-04-19 15:15:35'),
(7, 'FITRAH ', '971015086090', 'DS51 SENIOR LECTURER', 'Waiting List', 'YOU LESS THE CERTIFICATE', '1', 'ALI', '2018-12-20', 'Approval', '2019-04-19 08:55:09', '2019-04-19 14:48:49'),
(8, 'FIZA', '970809080809', 'DS53 PROFESOR MADYA', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 08:55:09', '2019-04-19 15:15:35'),
(9, 'FIZA ', '970809080809', 'DS53 PROFESOR MADYA', 'Interview', '', '1', 'hui yee', '2018-12-06', 'Approval', '2019-04-19 08:55:09', '2019-04-19 14:48:57'),
(12, 'suthanon', '971013086090', 'DS51 SENIOR LECTURER', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 08:55:09', '2019-04-19 15:15:35'),
(13, 'suthanon ', '971013086090', 'DS51 SENIOR LECTURER', 'Interview', '', '1', 'ALI', '2018-12-03', 'Approval', '2019-04-19 08:55:09', '2019-04-19 14:49:06'),
(14, 'pravart', '921015086090', 'DS53 PROFESOR MADYA', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 09:40:35', '2019-04-19 15:15:35'),
(15, 'pravart ', '921015086090', 'DS53 PROFESOR MADYA', 'Rejected', 'YOU LESS THE CERTIFICATE', '1', 'ALI', '2018-12-27', 'Approval', '2019-04-19 09:44:16', '2019-04-19 14:49:14'),
(17, 'AHMAD KAMIL BIN KAMARUDDIN MALIK', '971123015539', 'DS53 PROFESOR MADYA', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-19 14:54:12', '2019-04-19 15:15:35'),
(22, 'kay', '911015086090', 'DS45 LECTURER', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-20 23:38:54', '2019-04-20 23:39:30'),
(23, 'kay ', '911015086090', 'DS45 LECTURER', 'Rejected', 'YOU LESS THE CERTIFICATE', '1', 'ALI', '2018-12-06', 'Approval', '2019-04-20 23:39:30', '2019-04-20 23:40:04'),
(24, 'Nor Jasmin', '901015086090', 'DS53 PROFESOR MADYA', 'In Process', '', '0', '', '0000-00-00', 'In Process', '2019-04-21 02:02:21', '2019-04-21 02:04:39'),
(25, 'Nor Jasmin ', '901015086090', 'DS53 PROFESOR MADYA', 'Interview', '', '1', 'MAY', '2018-12-06', 'Approval', '2019-04-21 02:04:39', '2019-04-21 02:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `decision_interview`
--

CREATE TABLE `decision_interview` (
  `decision_Interview_id` int(2) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `criteria_1` int(2) NOT NULL,
  `criteria_2` int(2) NOT NULL,
  `criteria_3` int(2) NOT NULL,
  `criteria_4` int(2) NOT NULL,
  `criteria_5` int(2) NOT NULL,
  `total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision_interview`
--

INSERT INTO `decision_interview` (`decision_Interview_id`, `Applicant_Name`, `user_Ic`, `criteria_1`, `criteria_2`, `criteria_3`, `criteria_4`, `criteria_5`, `total`) VALUES
(1, 'FIZA  ', '970809080809', 40, 10, 5, 5, 5, 65),
(2, 'suthanon  ', '971013086090', 40, 1, 10, 1, 1, 53),
(3, 'Nor Jasmin  ', '901015086090', 10, 10, 10, 10, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Education_detail_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Edu_Type` varchar(50) NOT NULL,
  `Edu_School` varchar(100) NOT NULL,
  `Edu_Year` year(4) NOT NULL,
  `Edu_Level` varchar(50) NOT NULL,
  `Edu_Specialize` varchar(50) NOT NULL,
  `Edu_Status` varchar(50) NOT NULL,
  `Edu_Date` date NOT NULL,
  `Edu_Cert` varchar(50) NOT NULL,
  `Edu_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Education_detail_Id`, `user_Ic`, `Edu_Type`, `Edu_School`, `Edu_Year`, `Edu_Level`, `Edu_Specialize`, `Edu_Status`, `Edu_Date`, `Edu_Cert`, `Edu_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'SPM/SPVM', 'SMK SARS1', 1990, '5A', 'BIO', 'PASS', '2019-04-03', '2008-56.pdf', 1, '2019-04-19 08:56:51', '2019-04-16 04:40:51'),
(2, '961015086090', 'SRP/PMR', 'SJK(C)AI HWA', 1990, '5A', 'BIO', 'PASS', '2019-04-10', '2008-56.pdf', 1, '2019-04-19 08:56:51', '2019-04-16 04:40:51'),
(3, '971015086090', 'SPM/SPVM', 'SMK SARS1', 1992, '10A', 'BIO', 'PASS', '2019-04-10', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:15:57'),
(4, '971015086090', 'SPM/SPVM', 'HIGH SCHOOL MUAR', 1990, '5A', 'BIO', 'PASS', '2019-04-03', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:15:57'),
(5, '971015086090', 'STPM/STAM', 'SJK(C) PANGKALAN ', 1990, '10A', 'IT', 'PASS', '2019-04-03', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:15:57'),
(6, '971015086090', 'University/College/Polytechnic', 'SJK(C)AI HWA', 1990, '5A', 'BIO', 'PASS', '2019-04-03', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:15:57'),
(7, '970809080809', 'Primary', 'SJK(C)AI HWA', 1990, '5A', 'BIO', 'PASS', '2019-04-02', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:46:30'),
(8, '970809080809', 'SRP/PMR', 'SMK SARS1', 1990, '10A', 'BIO', 'PASS', '2019-04-11', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:46:30'),
(9, '970809080809', 'SPM/SPVM', 'SJK(C) PANGKALAN ', 1990, '5A', 'BIO', 'PASS', '2019-04-09', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 03:46:30'),
(10, '971013086090', 'Primary', 'SJK(C)AI HWA', 1991, '5A', 'IT', 'PASS', '2019-04-16', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 10:54:20'),
(11, '971013086090', 'SRP/PMR', 'SJK(C)AI HWA', 1990, '10A', 'BIO', 'PASS', '2019-04-01', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 10:54:20'),
(12, '971013086090', 'SPM/SPVM', 'HIGH SCHOOL MUAR', 1990, '5A', 'BIO', 'PASS', '2019-04-01', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 10:54:20'),
(13, '971013086090', 'STPM/STAM', 'HIGH SCHOOL MUAR', 1990, '5A', 'BIO', 'PASS', '2019-04-04', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-19 08:56:51', '2019-04-17 10:54:20'),
(14, '921015086090', 'SPM/SPVM', 'HIGH SCHOOL MUAR', 1990, '5A', 'BIO', 'PASS', '2019-04-24', 'yiting3.pdf', 1, '2019-04-19 09:31:42', '2019-04-19 09:32:05'),
(16, '911015086090', 'SRP/PMR', 'SJK(C)AI HWA', 1990, '10A', 'BIO', 'PASS', '2019-04-02', '2008-56.pdf', 1, '2019-04-20 23:37:25', '2019-04-20 23:37:39'),
(17, '901015086090', 'Primary', 'SK Batu Talam', 2009, '5A', 'IT', 'PASS', '2009-12-01', 'chap13DSS.pdf', 1, '2019-04-21 01:58:06', '2019-04-21 01:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirement`
--

CREATE TABLE `job_requirement` (
  `Job_Requirement_Id` int(2) NOT NULL,
  `Job_Post_Nama` varchar(50) NOT NULL,
  `Job_Post_Syarat` text NOT NULL,
  `Job_Post_Salary` varchar(20) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_requirement`
--

INSERT INTO `job_requirement` (`Job_Requirement_Id`, `Job_Post_Nama`, `Job_Post_Syarat`, `Job_Post_Salary`, `Created_date`, `Modified_date`) VALUES
(1, 'DS45 LECTURER', '1. Master degree in relevant fields recognized by Government from local institutions of higher learning or recognized qualifications its equivalent.\r\n2. Bachelor of Architecture or advanced diploma in related fields recognized by the Government from local institutions of higher learning or qualifications recognized equivalent to it and have been registered with the Board of Architects Malaysia.\r\n3. Doctoral Degree of Veterinary Medicine and advanced diploma in this area recognized by the Government from local institutions of higher learning or qualifications recognized equivalent to it.', 'RM 3070.00', '2019-04-19 08:57:54', '2019-04-08 12:30:18'),
(2, 'DS45 LECTURER', '1. Veterinary Medicine qualification registered as a Veterinary Doctors under Schedule II Part I of the Act\r\nVeterinary Doctorate 1974 and advanced diploma in the field as regards the Government recognition of the institution local higher education or recognized qualifications its equivalent.\r\n2. A doctorate degree (PhD) in a related field recognized by the Government from institutions of higher learning local or equivalent qualifications recognized.', 'RM 3380.37', '2019-04-19 08:57:54', '2019-04-08 12:30:18'),
(4, 'DS53 PROFESOR MADYA', ' 1. Has the qualifications as DS45. 2. Proving the level of academic excellence special quality. 3. Have extensive experience in relevant fields', 'RM 6162.00', '2019-04-19 08:57:54', '2019-04-08 12:30:18'),
(6, 'DS51 SENIOR LECTURER', '1. Has the qualifications as DS45. 2. Proving the level of academic excellence special quality. 3. Have extensive experience in relevant fields', 'RM 5855.00', '2019-04-19 08:57:54', '2019-04-08 16:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `Notify_Id` int(2) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `message` varchar(100) NOT NULL,
  `interview_date` date NOT NULL,
  `notify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Notify_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`Notify_Id`, `Applicant_Name`, `user_Ic`, `message`, `interview_date`, `notify_date`, `Notify_Status`) VALUES
(1, 'FITRAH  ', '971015086090', 'YOU ARE WAITING LIST', '2019-04-19', '2019-04-17 12:54:53', '0'),
(2, 'FIZA  ', '970809080809', 'You are selected for interview', '2019-04-18', '2019-04-17 03:51:27', ''),
(3, 'CHNG SHU WEN  ', '961015086090', 'you are waiting list', '2019-04-18', '2019-04-17 03:57:08', ''),
(4, 'kay  ', '911015086090', 'you are rejected', '0000-00-00', '2019-04-20 23:40:23', ''),
(5, 'Nor Jasmin  ', '901015086090', 'YOU ARE BE SELECTED', '2019-04-19', '2019-04-21 02:06:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `Choose_Position_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `app_post1` varchar(50) NOT NULL,
  `Position_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`Choose_Position_Id`, `user_Ic`, `faculty`, `app_post1`, `Position_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'FKAAS', 'DS45 LECTURER', 1, '2019-04-19 08:47:05', '2019-04-16 04:08:58'),
(2, '971015086090', 'FKMP', 'DS51 SENIOR LECTURER', 1, '2019-04-19 08:47:05', '2019-04-17 03:09:57'),
(3, '970809080809', 'FSKTM', 'DS53 PROFESOR MADYA', 1, '2019-04-19 08:47:05', '2019-04-17 03:41:48'),
(4, '971013086090', 'FPTV', 'DS51 SENIOR LECTURER', 1, '2019-04-19 08:47:05', '2019-04-17 10:38:06'),
(5, '921015086090', 'FAST', 'DS53 PROFESOR MADYA', 1, '2019-04-19 08:47:20', '2019-04-19 09:28:38'),
(7, '911015086090', 'FKEE', 'DS45 LECTURER', 1, '2019-04-20 23:36:35', '2019-04-20 23:36:38'),
(8, '901015086090', 'FKMP', 'DS53 PROFESOR MADYA', 1, '2019-04-21 01:53:19', '2019-04-21 01:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `position_level`
--

CREATE TABLE `position_level` (
  `Position_level_id` int(11) NOT NULL,
  `Position_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position_level`
--

INSERT INTO `position_level` (`Position_level_id`, `Position_level`) VALUES
(1, 'DS45 LECTURER'),
(2, 'DS51 SENIOR LECTURER'),
(3, 'DS53 PROFESOR MADYA');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_Id` int(11) NOT NULL,
  `app_post1` varchar(20) NOT NULL,
  `Interview` int(11) NOT NULL,
  `WaitingList` int(11) NOT NULL,
  `Rejected` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_Id`, `app_post1`, `Interview`, `WaitingList`, `Rejected`, `total`) VALUES
(1, 'DS45 LECTURER', 0, 1, 1, 2),
(2, 'DS51 SENIOR LECTURER', 1, 1, 0, 2),
(3, 'DS53 PROFESOR MADYA', 2, 0, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `self_reference`
--

CREATE TABLE `self_reference` (
  `self_reference_id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `person1` varchar(50) NOT NULL,
  `person2` varchar(50) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `job1` varchar(50) NOT NULL,
  `job2` varchar(50) NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `self_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_reference`
--

INSERT INTO `self_reference` (`self_reference_id`, `user_Ic`, `person1`, `person2`, `add1`, `add2`, `job1`, `job2`, `tel1`, `tel2`, `self_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'CHNG SHU WEN', 'CHNG SHU WEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'ENGINEER', 176650496, 176650496, 1, '2019-04-19 09:02:20', '2019-04-16 04:59:02'),
(2, '971015086090', 'CHNG SHU WEN', 'CHNG SHU WEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'CEO', 176650496, 176650496, 1, '2019-04-19 09:02:20', '2019-04-17 03:18:20'),
(3, '970809080809', 'alison', 'alicia', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'engineer', 'CEO', 176650496, 176650496, 1, '2019-04-19 09:02:20', '2019-04-17 03:48:09'),
(4, '971013086090', 'AKON', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'ACCOUNTANT', 176650496, 176650496, 1, '2019-04-19 09:02:20', '2019-04-17 10:57:55'),
(5, '921015086090', 'AKON', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'CEO', 'ACCOUNTANT', 176650496, 176650496, 1, '2019-04-19 09:33:07', '2019-04-19 09:33:09'),
(7, '911015086090', 'AJET', 'AKEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'CEO', 'ACCOUNTANT', 176650496, 176650496, 1, '2019-04-20 23:38:35', '2019-04-20 23:38:38'),
(8, '901015086090', 'FATIN', 'FIZA', 'TAMAN UNIVERSITI', 'TAMAN UNIVERSITI', 'STUDENT', 'STUDENT', 176650496, 176650496, 1, '2019-04-21 02:01:51', '2019-04-21 02:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(2) NOT NULL,
  `Education_detail_Id` int(11) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Edu_Type` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `gred` varchar(2) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `Education_detail_Id`, `user_Ic`, `Edu_Type`, `subject`, `gred`, `Created_date`, `Modified_date`) VALUES
(1, 3, '971015086090', 'SPM/SPVM', 'BAHASA CINA', 'A', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(2, 3, '971015086090', 'SPM/SPVM', 'BAHASA INGERRIS', 'B+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(3, 3, '971015086090', 'SPM/SPVM', 'GERMAN', 'A-', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(4, 5, '971015086090', 'STPM/STAM', 'BAHASA MELAYU', 'B+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(5, 5, '971015086090', 'STPM/STAM', 'BAHASA MELAYU', 'B+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(6, 6, '971015086090', 'University/College/Polytechnic', 'GERMAN', 'A+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(7, 6, '971015086090', 'University/College/Polytechnic', 'GERMAN', 'A-', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(8, 7, '970809080809', 'Primary', 'BAHASA MELAYU', 'A', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(9, 8, '970809080809', 'SRP/PMR', 'BAHASA INGERRIS', 'B+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(10, 9, '970809080809', 'SPM/SPVM', 'PHYSICS', 'A', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(11, 10, '971013086090', 'Primary', 'BAHASA CINA', 'A-', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(12, 10, '971013086090', 'Primary', 'BAHASA MELAYU', 'A+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(13, 10, '971013086090', 'Primary', 'BAHASA INGERRIS', 'A+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(14, 11, '971013086090', 'SRP/PMR', 'BAHASA CINA', 'A', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(15, 11, '971013086090', 'SRP/PMR', 'GERMAN', 'A+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(16, 12, '971013086090', 'SPM/SPVM', 'BAHASA CINA', 'A+', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(17, 13, '971013086090', 'STPM/STAM', 'PHYSICS', 'A-', '2019-04-19 09:04:46', '2019-04-19 09:03:39'),
(18, 14, '921015086090', 'SPM/SPVM', 'GERMAN', 'A+', '2019-04-19 09:31:51', '2019-04-19 09:31:51'),
(19, 14, '921015086090', 'SPM/SPVM', 'THAILAND', 'A', '2019-04-19 09:32:00', '2019-04-19 09:32:00'),
(21, 16, '911015086090', 'SRP/PMR', 'BAHASA MELAYU', 'A', '2019-04-20 23:37:34', '2019-04-20 23:37:34'),
(22, 17, '901015086090', 'Primary', 'BAHASA MELAYU', 'A+', '2019-04-21 01:58:20', '2019-04-21 01:58:20'),
(23, 17, '901015086090', 'Primary', 'BAHASA INGERRIS', 'A+', '2019-04-21 01:58:32', '2019-04-21 01:58:32'),
(24, 17, '901015086090', 'Primary', 'PENDIDIKAN ISLAM', 'A+', '2019-04-21 01:58:43', '2019-04-21 01:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `Training_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Training_Name` varchar(50) NOT NULL,
  `Training_date_start` date NOT NULL,
  `Training_date_end` date NOT NULL,
  `Training_Organizer` varchar(50) NOT NULL,
  `Training_Place` varchar(50) NOT NULL,
  `Training_Result` varchar(50) NOT NULL,
  `Training_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Training_Id`, `user_Ic`, `Training_Name`, `Training_date_start`, `Training_date_end`, `Training_Organizer`, `Training_Place`, `Training_Result`, `Training_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'security', '2019-04-18', '2019-04-11', 'KPMG', 'SUBANG JAYA', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-16 04:55:33'),
(2, '961015086090', 'security', '2019-04-04', '2019-04-17', 'cyber city', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-16 04:56:12'),
(3, '971015086090', 'security', '2019-04-11', '2019-05-02', 'KPMG', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-17 03:17:43'),
(4, '971015086090', 'CISCO', '2019-04-17', '2019-04-03', 'KPMG', 'SUBANG JAYA', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-17 03:17:43'),
(5, '970809080809', 'CISCO', '2019-04-24', '2019-04-17', 'cyber city', 'SUBANG JAYA', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-17 03:47:48'),
(6, '971013086090', 'security', '2019-04-03', '2019-04-11', 'cyber city', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-19 09:05:41', '2019-04-17 10:57:29'),
(7, '921015086090', 'CISCO', '2019-04-11', '2019-04-04', 'cyber city', 'KL CONVENTION CENTRE', 'PASS', 1, '2019-04-19 09:09:26', '2019-04-19 09:32:45'),
(8, '921015086090', 'CISCO', '2019-04-11', '2019-04-11', 'KPMG', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-19 09:32:42', '2019-04-19 09:32:45'),
(10, '911015086090', 'security', '2019-04-12', '2019-04-04', 'cyber city', 'SUBANG JAYA', 'FAIL', 1, '2019-04-20 23:38:17', '2019-04-20 23:38:19'),
(11, '901015086090', 'CISCO', '2019-04-24', '2019-04-19', 'cyber city', 'KL CONVENTION CENTRE', 'PASS', 1, '2019-04-21 02:01:04', '2019-04-21 02:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `user_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `emailAdd` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `confirmpassword` char(32) NOT NULL,
  `selected_val` varchar(50) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`user_id`, `name`, `user_Ic`, `emailAdd`, `password`, `confirmpassword`, `selected_val`, `Created_date`, `Modified_date`) VALUES
(1, 'ADMIN', '941015086090', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', '2019-04-19 09:07:02', '2019-04-14 10:17:29'),
(2, 'CHNG SHU WEN', '961015086090', 'shuwen_1015@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-14 10:17:47'),
(3, 'VICKY', '951015086090', 'shuwen_1015@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'officer', '2019-04-19 09:07:02', '2019-04-16 07:03:45'),
(4, 'FITRAH', '971015086090', 'fitrah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-17 03:08:50'),
(5, 'FIZA', '970809080809', 'fiza@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-17 03:41:13'),
(6, 'SUTHANON', '971014086090', 'suthanon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-17 10:36:39'),
(7, 'suthanon', '971013086090', 'suthanon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-17 10:37:04'),
(8, 'GUAN YIN', '981015086090', 'guanyin@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-17 14:58:33'),
(9, 'pravart', '921015086090', 'pravart@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-19 09:07:02', '2019-04-19 08:46:13'),
(11, 'kay', '911015086090', 'kay@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-20 23:36:23', '2019-04-20 23:36:23'),
(12, 'jasmin', '901015086090', 'jasmin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-21 01:52:33', '2019-04-21 01:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `Work_Experience_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Employer_Name_Add` varchar(100) NOT NULL,
  `Applicant_Post` varchar(50) NOT NULL,
  `Applicant_Month_Salary` float NOT NULL,
  `Work_Start_Date` date NOT NULL,
  `Work_End_Date` date NOT NULL,
  `Work_Contract` varchar(5) NOT NULL,
  `Reason_Stop` varchar(100) NOT NULL,
  `Work_experience_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`Work_Experience_Id`, `user_Ic`, `Employer_Name_Add`, `Applicant_Post`, `Applicant_Month_Salary`, `Work_Start_Date`, `Work_End_Date`, `Work_Contract`, `Reason_Stop`, `Work_experience_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'intel', 'manager', 5444, '2019-04-11', '2019-04-03', 'NO', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-16 04:52:22'),
(2, '961015086090', 'intel', 'manager', 5444, '2019-04-17', '2019-04-11', 'NO', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-16 04:52:22'),
(3, '971015086090', 'CYBER SECURITY', 'manager', 5444, '2019-04-05', '2019-04-10', 'YES.C', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-17 03:17:02'),
(4, '971015086090', 'HUAWEI', 'MANAGER', 6000, '2019-04-09', '2019-04-17', 'YES.C', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-17 03:17:02'),
(5, '970809080809', 'intel44', 'manager', 9000, '2019-04-18', '2019-04-18', 'NO', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-17 03:47:29'),
(6, '971013086090', 'intel44', 'manager', 5444, '2019-04-17', '2019-04-11', 'NO', 'FOR FUN', 1, '2019-04-19 09:08:58', '2019-04-17 10:57:16'),
(7, '921015086090', 'CYBER SECURITY', 'manager', 6000, '2019-04-11', '2019-04-03', 'YES.C', 'FOR FUN', 1, '2019-04-19 09:32:23', '2019-04-19 09:32:26'),
(9, '911015086090', 'CYBER SECURITY', 'MANAGER', 5444, '2019-04-11', '2019-04-17', 'YES.C', 'FOR FUN', 1, '2019-04-20 23:38:02', '2019-04-20 23:38:05'),
(10, '901015086090', 'HUAWEI', 'MANAGER', 6000, '2019-04-15', '2019-04-25', 'YES.C', 'FOR FUN', 1, '2019-04-21 02:00:15', '2019-04-21 02:00:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  ADD PRIMARY KEY (`acknowledgement_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`Applicant_Id`);

--
-- Indexes for table `cocuriculum`
--
ALTER TABLE `cocuriculum`
  ADD PRIMARY KEY (`Cocuriculum_Id`);

--
-- Indexes for table `decision`
--
ALTER TABLE `decision`
  ADD PRIMARY KEY (`Decision_Id`);

--
-- Indexes for table `decision_interview`
--
ALTER TABLE `decision_interview`
  ADD PRIMARY KEY (`decision_Interview_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`Education_detail_Id`);

--
-- Indexes for table `job_requirement`
--
ALTER TABLE `job_requirement`
  ADD PRIMARY KEY (`Job_Requirement_Id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`Notify_Id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`Choose_Position_Id`);

--
-- Indexes for table `position_level`
--
ALTER TABLE `position_level`
  ADD PRIMARY KEY (`Position_level_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_Id`);

--
-- Indexes for table `self_reference`
--
ALTER TABLE `self_reference`
  ADD PRIMARY KEY (`self_reference_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`Training_Id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`Work_Experience_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  MODIFY `acknowledgement_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cocuriculum`
--
ALTER TABLE `cocuriculum`
  MODIFY `Cocuriculum_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `Decision_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `decision_interview`
--
ALTER TABLE `decision_interview`
  MODIFY `decision_Interview_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Education_detail_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_requirement`
--
ALTER TABLE `job_requirement`
  MODIFY `Job_Requirement_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `Notify_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `Choose_Position_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position_level`
--
ALTER TABLE `position_level`
  MODIFY `Position_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `self_reference`
--
ALTER TABLE `self_reference`
  MODIFY `self_reference_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Training_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `Work_Experience_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
