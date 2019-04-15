-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 10:55 AM
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
(1, '961015086090', 'no', 'no', 'no', 'no', 'no', 1, '2019-04-14 10:54:02');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`Decision_Id`, `Applicant_Name`, `user_Ic`, `app_post1`, `Status_1`, `Status_2`, `Is_active`, `Officer_Name`, `date_Officer`, `Approval_status`, `dateTime`) VALUES
(1, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:42:00'),
(2, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:43:31'),
(3, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:45:42'),
(4, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:46:11'),
(5, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:46:38'),
(6, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:48:56'),
(7, '', '', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:49:24'),
(8, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:50:25'),
(9, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:50:35'),
(10, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:55:56'),
(11, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:57:21'),
(12, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-14 15:57:48'),
(13, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:10:43'),
(14, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:16:29'),
(15, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:17:58'),
(16, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:20:04'),
(17, 'Applicant_Name', '961015086090', 'Applicant_Name', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:20:53'),
(18, '', '961015086090', 'Applicant_Name', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:21:41'),
(19, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:22:46'),
(20, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:28:37'),
(21, '', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:29:12'),
(22, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:29:50'),
(23, 'CHNG SHU WEN  ', '961015086090', 'DS51 SENIOR LECTURER', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:33:27'),
(24, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 05:44:27'),
(25, 'Applicant_Name', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 06:15:12'),
(26, '', '961015086090', 'app_post1', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 06:15:50'),
(27, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 06:17:30'),
(28, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 06:17:47'),
(29, '', '961015086090', '', 'In Process', '', '1', '', '0000-00-00', 'In Process', '2019-04-15 06:24:37');

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
(1, '961015086090', 'Primary', 'SMK SARS1', 1990, '10A', 'BIO', 'PASS', '2019-04-09', 'RESUME SAMPLE 1.pdf', 1, '2019-04-14 10:35:30'),
(2, '961015086090', 'SRP/PMR', 'SJK(C)AI HWA', 1990, '10A', 'BIO', 'PASS', '2019-04-02', 'FullReport v5.pdf', 1, '2019-04-14 10:35:49');

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
(1, '961015086090', 'AKON', 'ADMON', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'No 39 Jalan Jaya 2/6 Taman Pagoh Jaya', 'accountant', 'ENGINEER', 176650496, 176650496, 1, '2019-04-14 10:40:57');

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
(1, '961015086090', 'CISCO', '2019-04-25', '2019-04-25', 'cyber city', 'SUBANG JAYA', 'FAIL', 1, '2019-04-14 10:40:36');

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
(1, 'ADMIN', '941015086090', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'manager', '2019-04-14 10:17:29'),
(2, 'CHNG SHU WEN', '961015086090', 'shuwen_1015@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'applicant', '2019-04-14 10:17:47');

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
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`Work_Experience_Id`, `user_Ic`, `Employer_Name_Add`, `Applicant_Post`, `Applicant_Month_Salary`, `Work_Start_Date`, `Work_End_Date`, `Work_Contract`, `Reason_Stop`, `Work_experience_checklist`, `dateTime`) VALUES
(1, '961015086090', 'CYBER SECURITY', 'manager', 6000, '2019-04-18', '2019-04-10', 'NO', 'FOR FUN', 1, '2019-04-14 10:39:29');

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
  MODIFY `acknowledgement_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `Applicant_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `Approval_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocuriculum`
--
ALTER TABLE `cocuriculum`
  MODIFY `Cocuriculum_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `Decision_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `decision_interview`
--
ALTER TABLE `decision_interview`
  MODIFY `decision_Interview_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Education_detail_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_requirement`
--
ALTER TABLE `job_requirement`
  MODIFY `Job_Requirement_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `Notify_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `Choose_Position_Id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position_level`
--
ALTER TABLE `position_level`
  MODIFY `Position_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `self_reference`
--
ALTER TABLE `self_reference`
  MODIFY `self_reference_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `Training_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `Work_Experience_Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
