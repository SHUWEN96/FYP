-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 02:36 PM
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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acknowledgement`
--

INSERT INTO `acknowledgement` (`acknowledgement_id`, `user_Ic`, `acknowledgement_1`, `acknowledgement_2`, `acknowledgement_3`, `acknowledgement_4`, `acknowledgement_5`, `Ack_checklist`, `dateTime`) VALUES
(1, '961015086090', 'no', 'no', 'no', 'no', 'no', 0, '2019-04-05 16:29:00'),
(2, '960809080809', 'yes', 'yes', 'yes', 'yes', 'yes', 0, '2019-04-08 05:22:54'),
(3, '960923015416', 'no', 'no', 'no', 'no', 'no', 0, '2019-04-11 17:25:32');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`Applicant_Id`, `user_Ic`, `Applicant_Name`, `Applicant_Add`, `Applicant_Email`, `Applicant_NoTel`, `Applicant_Age`, `Applicant_gender`, `Applicant_DOB`, `Applicant_POB`, `Applicant_Citizen`, `Applicant_Religion`, `Applicant_Nation`, `Applicant_MaritalStatus`, `Applicant_Height`, `Applicant_Weight`, `Applicant_NoHP`, `Applicant_VLC`, `Mom_Name`, `Mom_Ic`, `Dad_Name`, `Dad_Ic`, `Spouse_name`, `Applicant_checklist`, `dateTime`) VALUES
(1, '961015086090', 'CHNG SHU WEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya 84600 PAGOH, MUAR,JOHOR.', 'shuwen_1015@hotmail.com', 0, 23, 'female', '1996-10-15', 'TAIPING', 'MALAYSIAN', 'BUDDHA', 'CHINESE', 'SINGLE', 165, 49, 176650496, 'C', 'TOH SIEW GEOK', '650909085678', 'CHNG CHUAN HOCK', '590526085327', '', 0, '2019-04-05 16:10:01'),
(2, '960809080809', 'LIM YI TING', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'shuwen_1015@hotmail.com', 176650496, 23, 'female', '1996-08-09', 'TAIPING', 'MALAYSIAN', 'BUDDHA', 'CHINESE', 'SINGLE', 167.9, 51.8, 176650496, 'C', 'LIM SWEE FANG', '660989012345', 'LOO KOH HUAT', '650978012678', '', 0, '2019-04-08 05:18:59'),
(3, '960923015416', 'TOH SIEW GEOK', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'siewgeok0923@gmail.com', 176650496, 26, 'female', '2019-04-03', 'MUAR', 'MALAYSIAN', 'BUDDHA', 'CHINESE', 'MARRIED', 164, 59, 126202869, 'D', 'LIM SWEE FANG', '650909085678', 'LOO KOH HUAT', '590526085327', 'LOW LEE HUAT', 0, '2019-04-11 17:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `Approval_Id` int(2) NOT NULL,
  `user_Ic` char(13) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `Approve_msg` text NOT NULL,
  `Approval_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocuriculum`
--

INSERT INTO `cocuriculum` (`Cocuriculum_Id`, `coco_level`, `user_Ic`, `Koko_Activity_Year`, `Koko_Activity_name`, `Koko_Activity_Cert`, `Cocuriculum_checklist`, `dateTime`) VALUES
(1, 'School/University Level', '961015086090', 2017, 'HACKING', 'ic.pdf', 0, '2019-04-05 16:30:19'),
(2, 'After graduation', '960809080809', 1990, 'HACKING', 'ic.pdf', 0, '2019-04-08 05:21:51'),
(3, 'After graduation', '960923015416', 1990, 'kawat', 'ic.pdf', 0, '2019-04-11 17:24:02');

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
  `Officer_Name` varchar(50) NOT NULL,
  `date_Officer` date NOT NULL,
  `Approval_status` varchar(10) NOT NULL DEFAULT 'In Process',
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`Decision_Id`, `Applicant_Name`, `user_Ic`, `app_post1`, `Status_1`, `Status_2`, `Officer_Name`, `date_Officer`, `Approval_status`, `dateTime`) VALUES
(1, 'CHNG SHU WEN ', '961015086090', 'DS45 LECTURER', 'Interview', '', 'ALI', '2018-12-04', 'Approval', '2019-04-06 18:30:01'),
(8, 'LIM YI TING ', '960809080809', 'DS51 SENIOR LECTURER', 'Interview', '', 'koit', '2018-12-05', 'Approval', '2019-04-08 06:17:17'),
(10, 'TOH SIEW GEOK ', '960923015416', 'DS53 PROFESOR MADYA', 'Waiting List', 'YOU LESS THE CERTIFICATE', 'hui yee', '2018-12-19', 'Approval', '2019-04-11 18:09:02');

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
(1, 'LIM YI TING  ', '960809080809', 40, 30, 10, 10, 10, 100);

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Education_detail_Id`, `user_Ic`, `Edu_Type`, `Edu_School`, `Edu_Year`, `Edu_Level`, `Edu_Specialize`, `Edu_Status`, `Edu_Date`, `Edu_Cert`, `Edu_checklist`, `dateTime`) VALUES
(1, '961015086090', 'Primary', 'SJK(C)AI HWA', 2008, '5A', '', 'PASS', '2008-12-25', 'ic.pdf', 0, '2019-04-05 16:12:26'),
(2, '961015086090', 'SRP/PMR', 'SMK SARS1', 2011, '5A3B', 'SCIENCE', 'PASS', '2013-12-24', 'ic.pdf', 0, '2019-04-05 16:14:57'),
(3, '961015086090', 'SPM/SPVM', 'SMK SARS1', 2013, '1A+1A2A-4B+2B', 'SCIENCE', 'PASS', '2013-12-24', 'ic.pdf', 0, '2019-04-05 16:14:29'),
(4, '961015086090', 'STPM/STAM', 'HIGH SCHOOL MUAR', 2015, '3.00', 'SCIENCE STREAM', 'PASS', '2015-11-24', 'ic.pdf', 0, '2019-04-05 16:15:52'),
(5, '961015086090', 'University/College/Polytechnic', 'UTHM', 2018, '3.87', 'IT', 'PASS', '2019-07-01', 'ic.pdf', 0, '2019-04-05 16:16:56'),
(6, '960809080809', 'Primary', 'SJK(C)AI HWA', 1991, '5A', 'BIO', 'PASS', '2019-04-10', 'ic.pdf', 0, '2019-04-08 05:19:16'),
(7, '960809080809', 'SRP/PMR', 'SMK SARS1', 1990, '10A', 'BIO', 'PASS', '2019-04-22', 'ic.pdf', 0, '2019-04-08 05:19:33'),
(8, '960923015416', 'Primary', 'SJK(C)AI HWA', 1990, '5A', 'BIO', 'Expert', '2019-04-10', 'HR_Job_Application Form_IFSCv5.pdf', 0, '2019-04-11 17:16:47'),
(9, '960923015416', 'STPM/STAM', 'HIGH SCHOOL MUAR', 1990, '4.00', 'BIO', 'PASS', '2019-04-10', 'HR_Job_Application Form_IFSCv5.pdf', 0, '2019-04-11 17:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirement`
--

CREATE TABLE `job_requirement` (
  `Job_Requirement_Id` int(2) NOT NULL,
  `Job_Post_Nama` varchar(50) NOT NULL,
  `Job_Post_Syarat` text NOT NULL,
  `Job_Post_Salary` varchar(20) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_requirement`
--

INSERT INTO `job_requirement` (`Job_Requirement_Id`, `Job_Post_Nama`, `Job_Post_Syarat`, `Job_Post_Salary`, `dateTime`) VALUES
(1, 'DS45 LECTURER', '1. Master degree in relevant fields recognized by Government from local institutions of higher learning or recognized qualifications its equivalent.\r\n2. Bachelor of Architecture or advanced diploma in related fields recognized by the Government from local institutions of higher learning or qualifications recognized equivalent to it and have been registered with the Board of Architects Malaysia.\r\n3. Doctoral Degree of Veterinary Medicine and advanced diploma in this area recognized by the Government from local institutions of higher learning or qualifications recognized equivalent to it.', 'RM 3070.00', '2019-04-08 12:30:18'),
(2, 'DS45 LECTURER', '1. Veterinary Medicine qualification registered as a Veterinary Doctors under Schedule II Part I of the Act\r\nVeterinary Doctorate 1974 and advanced diploma in the field as regards the Government recognition of the institution local higher education or recognized qualifications its equivalent.\r\n2. A doctorate degree (PhD) in a related field recognized by the Government from institutions of higher learning local or equivalent qualifications recognized.', 'RM 3380.37', '2019-04-08 12:30:18'),
(4, 'DS53 PROFESOR MADYA', ' 1. Has the qualifications as DS45. 2. Proving the level of academic excellence special quality. 3. Have extensive experience in relevant fields', 'RM 6162.00', '2019-04-08 12:30:18'),
(6, 'DS51 SENIOR LECTURER', '1. Has the qualifications as DS45. 2. Proving the level of academic excellence special quality. 3. Have extensive experience in relevant fields', 'RM 5855.00', '2019-04-08 16:45:32');

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
  `notify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`Notify_Id`, `Applicant_Name`, `user_Ic`, `message`, `interview_date`, `notify_date`) VALUES
(2, 'CHNG SHU WEN  ', '961015086090', 'YOU ARE SELECTED', '0000-00-00', '2019-04-06 18:14:33'),
(10, 'LIM YI TING  ', '960809080809', 'hi', '2019-04-03', '2019-04-08 06:15:54'),
(11, 'TOH SIEW GEOK  ', '960923015416', 'HI', '2019-04-25', '2019-04-11 17:30:11'),
(12, 'LIM YI TING  ', '960809080809', 'hi', '0000-00-00', '2019-04-11 18:24:41');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`Choose_Position_Id`, `user_Ic`, `faculty`, `app_post1`, `Position_checklist`, `dateTime`) VALUES
(2, '960809080809', 'FTK', 'DS51 SENIOR LECTURER', 0, '2019-04-08 05:17:51'),
(3, '960923015416', 'FTK', 'DS53 PROFESOR MADYA', 0, '2019-04-11 17:15:17'),
(8, '971123015539', 'FAST', 'DS53 PROFESOR MADYA', 1, '2019-04-12 12:28:51'),
(11, '961015086090', 'FKMP', 'DS53 PROFESOR MADYA', 0, '2019-04-12 12:35:16');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_reference`
--

INSERT INTO `self_reference` (`self_reference_id`, `user_Ic`, `person1`, `person2`, `add1`, `add2`, `job1`, `job2`, `tel1`, `tel2`, `self_checklist`, `dateTime`) VALUES
(1, '961015086090', 'AKON', 'ALICIA', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'CEO', 'ACCOUNTANT', 176650496, 176650496, 0, '2019-04-05 16:28:47'),
(2, '960809080809', 'ANDREW', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'CEO', 'CEO', 176650496, 176650496, 0, '2019-04-08 05:22:43'),
(3, '960923015416', 'AJET', 'AKEN', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'AUDITOR', 'CEO', 176650496, 176650496, 0, '2019-04-11 17:24:58');

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
  `gred` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `Education_detail_Id`, `user_Ic`, `Edu_Type`, `subject`, `gred`) VALUES
(1, 1, '961015086090', 'Primary', 'BAHASA CINA', 'E'),
(2, 1, '961015086090', 'Primary', 'BAHASA MELAYU', 'E'),
(3, 1, '961015086090', 'Primary', 'BAHASA INGERRIS', 'A+'),
(4, 1, '961015086090', 'Primary', 'SCIENCE', 'A-'),
(5, 1, '961015086090', 'Primary', 'MATH', 'C-'),
(6, 2, '961015086090', 'SRP/PMR', 'BAHASA CINA', 'B+'),
(7, 2, '961015086090', 'SRP/PMR', 'BAHASA MELAYU', 'A'),
(8, 2, '961015086090', 'SRP/PMR', 'BAHASA INGERRIS', 'B+'),
(9, 2, '961015086090', 'SRP/PMR', 'MATH', 'A+'),
(10, 2, '961015086090', 'SRP/PMR', 'GEOGRAFI', 'A-'),
(11, 2, '961015086090', 'SRP/PMR', 'SEJARAH', 'A-'),
(12, 3, '961015086090', 'SPM/SPVM', 'BAHASA CINA', 'B+'),
(13, 3, '961015086090', 'SPM/SPVM', 'BAHASA MELAYU', 'A'),
(14, 3, '961015086090', 'SPM/SPVM', 'BAHASA INGERRIS', 'B+'),
(15, 3, '961015086090', 'SPM/SPVM', 'PHYSICS', 'B+'),
(16, 3, '961015086090', 'SPM/SPVM', 'CHEMISTRY', 'B+'),
(17, 3, '961015086090', 'SPM/SPVM', 'BIOLOGY', 'B+'),
(18, 3, '961015086090', 'SPM/SPVM', 'MATHEMATICS', 'A+'),
(19, 3, '961015086090', 'SPM/SPVM', 'ADDITIONAL MATHEMATICS', 'A-'),
(20, 3, '961015086090', 'SPM/SPVM', 'PENDIDIKAN MORAL', 'A'),
(21, 4, '961015086090', 'STPM/STAM', 'CHEMISTRY', 'B+'),
(22, 4, '961015086090', 'STPM/STAM', 'PENGAJIAN AM', 'B+'),
(23, 4, '961015086090', 'STPM/STAM', 'MATH T', 'B+'),
(24, 5, '961015086090', 'University/College/Polytechnic', 'SADAM', 'A'),
(25, 5, '961015086090', 'University/College/Polytechnic', 'PROGRAMMING', 'A'),
(26, 5, '961015086090', 'University/College/Polytechnic', 'OPERATING SYSTEM', 'A'),
(27, 5, '961015086090', 'University/College/Polytechnic', 'VISUAL PROGARMMING', 'B+'),
(28, 6, '960809080809', 'Primary', 'SCIENCE', 'A+'),
(29, 6, '960809080809', 'Primary', 'GERMAN', 'A+'),
(30, 7, '960809080809', 'SRP/PMR', 'GEOGRAFI', 'A+'),
(31, 7, '960809080809', 'SRP/PMR', 'PENDIDIKAN MORAL', 'A+'),
(32, 7, '960809080809', 'SRP/PMR ', 'BAHASA CINA', 'A+'),
(33, 6, '960809080809', 'Primary ', 'BAHASA CINA', 'A+'),
(34, 6, '960809080809', 'Primary', 'BAHASA MELAYU', 'E'),
(35, 6, '960809080809', 'SRP/PMR', 'PENULISAN', 'A+'),
(36, 6, '960809080809', 'SRP/PMR', 'BAHASA CINA', 'D'),
(37, 6, '960809080809', 'SRP/PMR', 'BAHASA CINA', 'A'),
(40, 8, '960923015416', 'Primary', 'GERMAN', 'A-'),
(41, 9, '960923015416', 'STPM/STAM', 'PHYSICS', 'A+');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Training_Id`, `user_Ic`, `Training_Name`, `Training_date_start`, `Training_date_end`, `Training_Organizer`, `Training_Place`, `Training_Result`, `Training_checklist`, `dateTime`) VALUES
(1, '961015086090', 'NX FORCE', '2019-04-03', '2019-10-08', 'CYBER SECURITY', 'SUBANG JAYA', 'PASS', 0, '2019-04-05 16:28:27'),
(2, '960809080809', 'CISCO', '2019-04-17', '2019-04-19', 'KPMG', 'KL CONVENTION CENTRE', 'PASS', 0, '2019-04-08 05:22:24'),
(3, '960923015416', 'CISCO', '2019-04-18', '2019-04-03', 'subang', 'KL CONVENTION CENTRE', 'FAIL', 0, '2019-04-11 17:25:19');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`user_id`, `name`, `user_Ic`, `emailAdd`, `password`, `confirmpassword`, `selected_val`, `dateTime`) VALUES
(1, 'CHNG SHU WEN', '961015086090', 'shuwen_1015@hotmail.com', '01cfcd4f6b8770febfb40cb906715822', '12345', 'applicant', '2019-04-12 10:04:25'),
(2, 'ADMIN', '941015086090', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', '2019-04-12 10:49:31'),
(3, 'officer5', '951014086090', 'officer1@gmail.com', '12345', '12345', 'officer', '2019-04-10 17:37:03'),
(4, 'LIM YI TING', '960809080809', 'yiting@gmail.com', '12345', '12345', 'applicant', '2019-04-02 20:57:50'),
(5, 'kelvin lim', '961014141414', 'kelvin@gmail.com', '12345', '12345', 'applicant', '2019-04-03 12:23:42'),
(6, 'FILA', '961017086090', 'fila@gmail.com', '12345', '12345', 'applicant', '2019-04-10 15:58:43'),
(7, 'officer2', '950809080809', 'officer2@gmail.com', '12345', '12345', 'officer', '2019-04-10 17:23:02'),
(8, 'officer3', '951014086090', 'officer3@gmail.com', '12345', '12345', 'officer', '2019-04-10 17:23:32'),
(9, 'officer4', '961012086090', 'officer4@gmail.com', '12345', '12345', 'officer', '2019-04-10 17:33:03'),
(10, 'TOH SIEW GEOK', '960923015416', 'siewgeok0923@gmail.com', '12345', '12345', 'applicant', '2019-04-11 17:14:59'),
(14, 'AHMAD KAMIL KAMARUDDIN MALIK', '971123015539', 'kamil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-12 12:09:37');

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
  `Work_Contract` int(11) NOT NULL,
  `Reason_Stop` varchar(100) NOT NULL,
  `Work_experience_checklist` int(2) NOT NULL DEFAULT '0',
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`Work_Experience_Id`, `user_Ic`, `Employer_Name_Add`, `Applicant_Post`, `Applicant_Month_Salary`, `Work_Start_Date`, `Work_End_Date`, `Work_Contract`, `Reason_Stop`, `Work_experience_checklist`, `dateTime`) VALUES
(1, '961015086090', 'CYBER SECURITY', 'MANAGER', 5000, '2016-02-02', '2018-05-08', 0, 'FOR FUN', 0, '2019-04-05 16:27:25'),
(2, '960809080809', 'CYBER SECURITY', 'MANAGER', 7999.66, '2019-04-16', '2019-04-26', 0, 'FOR FUN', 0, '2019-04-08 05:22:10'),
(3, '960923015416', 'CYBER SECURITY', 'MANAGER', 6000, '2019-04-10', '2019-04-24', 0, 'FOR FUN', 0, '2019-04-11 17:24:25');

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
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`Approval_Id`);

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
  MODIFY `acknowledgement_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `Approval_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocuriculum`
--
ALTER TABLE `cocuriculum`
  MODIFY `Cocuriculum_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `Decision_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `decision_interview`
--
ALTER TABLE `decision_interview`
  MODIFY `decision_Interview_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Education_detail_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_requirement`
--
ALTER TABLE `job_requirement`
  MODIFY `Job_Requirement_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `Notify_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `Choose_Position_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `position_level`
--
ALTER TABLE `position_level`
  MODIFY `Position_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `self_reference`
--
ALTER TABLE `self_reference`
  MODIFY `self_reference_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Training_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `Work_Experience_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
