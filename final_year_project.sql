-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 03:15 PM
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
(2, '961015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-23 11:34:42', '2019-04-23 11:34:45'),
(3, '971015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-23 12:23:15', '2019-04-23 12:23:18'),
(4, '970809080809', 'no', 'no', 'no', 'no', 'no', 1, '2019-04-23 12:35:05', '2019-04-23 12:35:07'),
(5, '921015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-24 15:59:52', '2019-04-24 15:59:56'),
(6, '901015086090', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2019-04-24 16:12:13', '2019-04-24 16:12:16');

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
(1, '961015086090', 'CHNG SHU WEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 12, 'female', '2019-04-19', 'Taiping', 'Malaysian', 'Buddha', 'Chinese', 'Single', 167, 59, 176650496, 'D', 'lim swee fang', '650909085678', 'goh kuek ken', '600720031234', '', 1, '2019-04-23 11:31:21', '2019-04-23 11:31:24'),
(2, '971015086090', 'FITRAH', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 12, 'female', '2019-04-11', 'Taiping', 'Malaysian', 'ISLAM', 'Chinese', 'Single', 167, 59, 176650496, 'D', 'LORIS MONAH', '650909085678', 'LOO KOH HUAT', '600720031234', '', 1, '2019-04-23 12:21:39', '2019-04-23 12:21:41'),
(3, '970809080809', 'jayson', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 26, 'female', '2019-04-11', 'Taiping', 'Malaysian', 'Buddha', 'Chinese', 'Single', 167.9, 55, 176650496, 'D', 'lim swee fang', '650909085678', 'LOO KOH HUAT', '590526085321', '', 1, '2019-04-23 12:33:33', '2019-04-23 12:33:36'),
(4, '921015086090', 'Michael Lim', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'michael@gmail.com', 176650496, 27, 'male', '2019-04-11', 'Sarawak', 'Malaysian', 'Kristian', 'Kadazan', 'Single', 164, 60, 176650496, 'D', 'LIM TAI FANG', '660989012345', 'KOH KUEK KEN', '650978012678', '', 1, '2019-04-24 15:53:02', '2019-04-24 15:56:31'),
(5, '901015086090', 'suthanon', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 22, 'male', '2019-04-19', 'Thailand', 'Thailand', 'Buddha', 'siam', 'Single', 164, 51.8, 176650496, 'D', 'LOGESWARI A/P MOHAN', '650909085678', 'AMBALAGAN A/L KAJI', '600720031234', '', 1, '2019-04-24 16:09:56', '2019-04-24 16:09:59');

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
(1, 'School/University Level', '961015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-23 11:31:51', '2019-04-23 11:31:54'),
(2, 'After graduation', '971015086090', 1990, 'kawat', '2008-56.pdf', 1, '2019-04-23 12:22:15', '2019-04-23 12:22:19'),
(3, 'School/University Level', '970809080809', 1991, 'HACKING', '2008-56.pdf', 1, '2019-04-23 12:34:12', '2019-04-23 12:34:15'),
(4, 'School/University Level', '921015086090', 1990, 'HACKING', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-24 15:58:09', '2019-04-24 15:58:13'),
(5, 'School/University Level', '901015086090', 1990, 'HACKING', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-24 16:11:17', '2019-04-24 16:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE `decision` (
  `Decision_Id` int(2) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `app_post1` varchar(50) NOT NULL,
  `Status_1` varchar(15) DEFAULT NULL,
  `Status_2` varchar(50) NOT NULL,
  `Is_active` int(1) NOT NULL,
  `Officer_Name` varchar(50) NOT NULL,
  `date_Officer` date NOT NULL,
  `Approval_status` varchar(10) NOT NULL DEFAULT 'In Process',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`Decision_Id`, `Applicant_Name`, `user_Ic`, `faculty`, `app_post1`, `Status_1`, `Status_2`, `Is_active`, `Officer_Name`, `date_Officer`, `Approval_status`, `Created_date`, `Modified_date`) VALUES
(3, 'CHNG SHU WEN', '961015086090', 'FKAAS', 'DS45 LECTURER', 'In Process', '', 0, '', '0000-00-00', 'In Process', '2019-04-23 12:20:01', '2019-04-23 12:23:44'),
(4, 'FITRAH', '971015086090', 'FKEE', 'DS51 SENIOR LECTURER', 'In Process', '', 0, '', '0000-00-00', 'In Process', '2019-04-23 12:23:20', '2019-04-23 12:23:44'),
(5, 'FITRAH ', '971015086090', 'FKEE', 'DS51 SENIOR LECTURER ', 'Interview', '', 1, 'ALI', '2018-11-29', 'Approval', '2019-04-23 12:23:44', '2019-04-23 14:42:03'),
(6, 'CHNG SHU WEN ', '961015086090', 'FKAAS', 'DS45 LECTURER ', 'Interview', '', 1, 'ALI', '2018-12-06', 'Approval', '2019-04-23 12:24:21', '2019-04-23 14:03:29'),
(7, 'jayson', '970809080809', 'FKMP', 'DS51 SENIOR LECTURER', 'In Process', '', 0, '', '0000-00-00', 'In Process', '2019-04-23 12:35:09', '2019-04-23 12:44:42'),
(8, 'jayson ', '970809080809', 'FKMP', 'DS51 SENIOR LECTURER ', 'Waiting List', '', 1, 'ALI', '2018-12-12', 'In Process', '2019-04-23 12:44:42', '2019-04-23 12:44:42'),
(27, 'Michael Lim', '921015086090', 'FKEE', 'DS53 PROFESOR MADYA', 'In Process', '', 0, '', '0000-00-00', 'In Process', '2019-04-24 16:53:07', '2019-04-24 16:53:25'),
(28, 'Michael Lim ', '921015086090', 'FKEE', 'DS53 PROFESOR MADYA ', 'Interview', '', 1, 'ALI', '2018-12-04', 'Approval', '2019-04-24 16:53:25', '2019-04-24 16:53:49'),
(29, 'suthanon', '901015086090', 'FSKTM', 'DS51 SENIOR LECTURER', 'In Process', '', 0, '', '0000-00-00', 'In Process', '2019-04-24 16:54:23', '2019-04-24 16:54:48'),
(30, 'suthanon ', '901015086090', 'FSKTM', 'DS51 SENIOR LECTURER ', 'Rejected', 'YOU LESS THE CERTIFICATE', 1, 'ALI', '2018-12-03', 'Approval', '2019-04-24 16:54:48', '2019-04-24 16:55:53');

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
  `total` int(3) NOT NULL,
  `decision_checklist` int(1) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision_interview`
--

INSERT INTO `decision_interview` (`decision_Interview_id`, `Applicant_Name`, `user_Ic`, `criteria_1`, `criteria_2`, `criteria_3`, `criteria_4`, `criteria_5`, `total`, `decision_checklist`, `Created_date`) VALUES
(1, 'FITRAH  ', '971015086090', 40, 30, 10, 10, 10, 100, 1, '2019-04-23 14:42:49'),
(2, 'Michael Lim  ', '921015086090', 40, 25, 5, 10, 10, 90, 1, '2019-04-24 16:01:49');

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
(1, '961015086090', 'Primary', 'SJK(C)AI HWA', 1990, '10A', 'IT', 'PASS', '2019-04-10', '2008-56.pdf', 1, '2019-04-23 11:31:40', '2019-04-23 11:31:43'),
(2, '971015086090', 'Primary', 'SJK(C)AI HWA', 1990, '5A', 'BIO', 'PASS', '2019-04-01', '2008-56.pdf', 1, '2019-04-23 12:21:55', '2019-04-23 12:22:06'),
(3, '970809080809', 'SRP/PMR', 'SMK SARS1', 1990, '5A', 'BIO', 'PASS', '2019-04-16', '2008-56.pdf', 1, '2019-04-23 12:33:53', '2019-04-23 12:34:02'),
(4, '921015086090', 'University/College/Polytechnic', 'UTHM', 2018, '3.50', 'IT', 'Expert', '2019-04-11', 'e29abb4b-2f8a-4d02-be4d-ae0df82dea54.pdf', 1, '2019-04-24 15:57:09', '2019-04-24 15:57:59'),
(5, '901015086090', 'University/College/Polytechnic', 'UTHM', 1991, '4.00', 'IT', 'Expert', '2019-04-17', 'IT Quiz.pdf', 1, '2019-04-24 16:10:19', '2019-04-24 16:11:06');

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
  `notify_checklist` int(1) NOT NULL,
  `offer_checklist` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`Notify_Id`, `Applicant_Name`, `user_Ic`, `message`, `interview_date`, `notify_date`, `notify_checklist`, `offer_checklist`) VALUES
(2, 'CHNG SHU WEN  ', '961015086090', 'YOU ARE SELECTED TO INTERVIEW', '2019-04-19', '2019-04-23 15:07:34', 1, 1),
(3, 'FITRAH  ', '971015086090', 'YOU ARE SELECTED', '2019-04-19', '2019-04-24 02:10:39', 1, 1),
(6, 'suthanon  ', '901015086090', 'YOU ARE REJECTED', '0000-00-00', '2019-04-24 16:58:50', 1, 0),
(7, 'Michael Lim  ', '921015086090', 'YOU ARE SELECTED FOR INTERVIEW', '2019-04-11', '2019-04-24 16:57:56', 1, 1);

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
(1, '961015086090', 'FKAAS', 'DS45 LECTURER', 1, '2019-04-23 11:30:43', '2019-04-23 11:30:46'),
(2, '971015086090', 'FKEE', 'DS51 SENIOR LECTURER', 1, '2019-04-23 12:20:57', '2019-04-23 12:21:00'),
(3, '970809080809', 'FKMP', 'DS51 SENIOR LECTURER', 1, '2019-04-23 12:33:00', '2019-04-23 12:33:02'),
(4, '921015086090', 'FKEE', 'DS53 PROFESOR MADYA', 1, '2019-04-24 15:51:39', '2019-04-24 15:51:57'),
(5, '901015086090', 'FSKTM', 'DS51 SENIOR LECTURER', 1, '2019-04-24 16:08:51', '2019-04-24 16:08:54');

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
  `total` int(11) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_Id`, `app_post1`, `Interview`, `WaitingList`, `Rejected`, `total`, `Created_date`, `Modified_date`) VALUES
(1, 'DS45 LECTURER', 1, 0, 0, 1, '2019-04-23 15:11:37', '2019-04-23 15:11:37'),
(2, 'DS51 SENIOR LECTURER', 1, 1, 1, 3, '2019-04-24 16:59:09', '2019-04-24 16:59:09'),
(3, 'DS53 PROFESOR MADYA', 1, 0, 0, 1, '2019-04-24 16:59:09', '2019-04-24 16:59:09');

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
(1, '961015086090', 'alison', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'ENGINEER', 176650496, 176650496, 1, '2019-04-23 11:32:34', '2019-04-23 11:32:37'),
(2, '971015086090', 'AKON', 'alicia', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'CEO', 'ENGINEER', 176650496, 176650496, 1, '2019-04-23 12:23:05', '2019-04-23 12:23:07'),
(3, '970809080809', 'alison', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'engineer', 'STUDENT', 176650496, 176650496, 1, '2019-04-23 12:34:54', '2019-04-23 12:34:57'),
(4, '921015086090', 'AKON', 'AKEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'MANAGER', 'CEO', 176650496, 176650496, 1, '2019-04-24 15:59:31', '2019-04-24 15:59:44'),
(5, '901015086090', 'ANDREW', 'AKEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'ENGINEER', 176650496, 176650496, 1, '2019-04-24 16:12:03', '2019-04-24 16:12:06');

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
(1, 2, '971015086090', 'Primary', 'BAHASA CINA', 'A-', '2019-04-23 12:22:02', '2019-04-23 12:22:02'),
(2, 4, '921015086090', 'University/College/Polytechnic', 'SADAM', 'A+', '2019-04-24 15:57:23', '2019-04-24 15:57:23'),
(3, 4, '921015086090', 'University/College/Polytechnic', 'ARTICIAL INTELLIGENCE', 'A+', '2019-04-24 15:57:33', '2019-04-24 15:57:42'),
(4, 4, '921015086090', 'University/College/Polytechnic', 'VISUAL PROGARMMING', 'A+', '2019-04-24 15:57:56', '2019-04-24 15:57:56'),
(7, 5, '901015086090', 'University/College/Polytechnic', 'TTK', 'A-', '2019-04-24 16:11:02', '2019-04-25 11:27:33'),
(8, 5, '901015086090', 'University/College/Polytechnic', 'BAHASA CINA', 'A-', '2019-04-25 11:26:15', '2019-04-25 11:26:15');

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
(1, '961015086090', 'security', '2019-04-17', '2019-04-10', 'KPMG', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-23 11:32:17', '2019-04-23 11:32:19'),
(2, '971015086090', 'CISCO', '2019-04-11', '2019-04-11', 'KPMG', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-23 12:22:51', '2019-04-23 12:22:54'),
(3, '970809080809', 'security', '2019-04-18', '2019-04-11', 'cyber city', 'KL CONVENTION CENTRE', 'FAIL', 1, '2019-04-23 12:34:38', '2019-04-23 12:34:40'),
(4, '921015086090', 'security', '2019-04-19', '2019-04-18', 'KPMG', 'KL CONVENTION CENTRE', 'PASS', 1, '2019-04-24 15:59:17', '2019-04-24 15:59:19'),
(5, '901015086090', 'CISCO', '2019-04-24', '2019-04-24', 'KPMG', 'KL CONVENTION CENTRE', 'PASS', 1, '2019-04-24 16:11:50', '2019-04-24 16:11:53');

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
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`user_id`, `name`, `user_Ic`, `emailAdd`, `password`, `confirmpassword`, `selected_val`, `Created_date`) VALUES
(1, 'ADMIN', '941015086090', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', '2019-04-23 12:13:57'),
(2, 'CHNG SHU WEN', '961015086090', 'shuwen_1015@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-23 12:14:39'),
(3, 'VICKY', '951015086090', 'vicky@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'officer', '2019-04-23 12:16:03'),
(4, 'FITRAH', '971015086090', 'fitrah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-23 12:20:45'),
(5, 'jayson', '970809080809', 'jayson@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-23 12:32:27'),
(6, 'MICHAEL LIM', '921015086090', 'michael@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-24 15:51:24'),
(7, 'suthanon', '901015086090', 'suthanon', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-24 16:07:54'),
(8, 'LEMON', '891015086090', 'lemon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-25 04:06:42');

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
  `Work_Contract` varchar(20) NOT NULL,
  `Reason_Stop` varchar(100) NOT NULL,
  `Work_experience_checklist` int(2) NOT NULL DEFAULT '0',
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`Work_Experience_Id`, `user_Ic`, `Employer_Name_Add`, `Applicant_Post`, `Applicant_Month_Salary`, `Work_Start_Date`, `Work_End_Date`, `Work_Contract`, `Reason_Stop`, `Work_experience_checklist`, `Created_date`, `Modified_date`) VALUES
(1, '961015086090', 'CYBER SECURITY', 'MANAGER', 5444, '2019-04-17', '2019-04-04', 'YES.C', 'for fun', 1, '2019-04-23 11:32:06', '2019-04-23 11:32:08'),
(2, '971015086090', 'CYBER SECURITY', 'manager', 6000, '2019-04-03', '2019-04-17', 'NO', 'FOR FUN', 1, '2019-04-23 12:22:31', '2019-04-23 12:22:34'),
(3, '970809080809', 'intel', 'manager', 6000, '2019-04-18', '2019-04-11', 'NO', 'FOR FUN', 1, '2019-04-23 12:34:26', '2019-04-23 12:34:28'),
(4, '921015086090', 'PETRONAS', 'TRAINNER', 1000, '2019-04-11', '2019-04-03', '6 mon', 'finished internship', 1, '2019-04-24 15:59:00', '2019-04-24 15:59:03'),
(5, '901015086090', 'HUAWEI', 'MANAGER', 5444, '2019-04-03', '2019-04-03', 'YES.C', 'FOR FUN', 1, '2019-04-24 16:11:34', '2019-04-24 16:11:37');

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
  MODIFY `acknowledgement_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cocuriculum`
--
ALTER TABLE `cocuriculum`
  MODIFY `Cocuriculum_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `Decision_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `decision_interview`
--
ALTER TABLE `decision_interview`
  MODIFY `decision_Interview_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Education_detail_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_requirement`
--
ALTER TABLE `job_requirement`
  MODIFY `Job_Requirement_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `Notify_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `Choose_Position_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `self_reference_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Training_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `Work_Experience_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
