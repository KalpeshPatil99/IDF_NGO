-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 02:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_dev_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_scholarship`
--

CREATE TABLE `add_scholarship` (
  `sr_id` int(250) NOT NULL,
  `sch_id` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sch_img` varchar(255) NOT NULL,
  `provider` varchar(250) NOT NULL,
  `provider_type` varchar(250) NOT NULL,
  `scholarship_type` varchar(250) NOT NULL,
  `reward` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `sch_url` varchar(255) NOT NULL,
  `scholarship_status` varchar(250) NOT NULL DEFAULT 'Inactive',
  `apr_status` varchar(250) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_scholarship`
--

INSERT INTO `add_scholarship` (`sr_id`, `sch_id`, `name`, `sch_img`, `provider`, `provider_type`, `scholarship_type`, `reward`, `description`, `sch_url`, `scholarship_status`, `apr_status`) VALUES
(1, 'SCH-0', 'dummy', 'dummy', 'dummy', 'dummy', 'dummy', 'dummy', 'dummy', 'dummy', 'Inactive', 'Not Approved'),
(3, 'SCH-1', 'SB Memorial Scholarship Program', '5c8cf917268155.jpg', 'SB Memorial', 'Organisation', 'Merit', '6000 to 24000 per student', 'Eligibility: Class 9 to 12 students of Pashchim Vihar Delhi & IIT BHU girl students<br />\nRegion:India<br />\nUttar Pradesh<br />\nDelhi<br />\n<br />\nDeadline:31 March 2019', 'https://www.buddy4study.com/application/SMS10/instruction', 'Active', 'Approved'),
(4, 'SCH-2', 'SVM Baghmara Alumni Scholarship 2019', '5c8d5d89382665.jpg', 'SVM Baghmara', 'Organisation', 'Merit', 'INR 6,000 to INR 12,000 to each scholar', 'Eligibility:Class 9 to 12 students of SVM Baghmara School, Dhanbad west<br />\nRegion:India<br />\nJharkhand<br />\n<br />\nDeadline: 31 march 2019', 'https://www.buddy4study.com/scholarship/svm-baghmara-alumni-scholarship-2019', 'Active', 'Approved'),
(5, 'SCH-3', 'CLP India Scholarship Scheme 2019', '5c8d5e36a7a0d7.png', 'CLP India', 'Organisation', 'Merit', 'Up to INR 18,000', 'Eligibility:Class 10-12, Graduation, Diploma, Vocational training and Postgraduation<br />\r\nRegion:India<br />\r\nTamilnadu<br />\r\nMadhya Pradesh<br />\r\n<br />\r\nDeadline: 31 march 2019', 'https://www.buddy4study.com/scholarship/clp-india-scholarship-scheme-2019', 'Active', 'Approved'),
(6, 'SCH-4', '11th National Biennial Competition', '5c8d5eb54f2ab7.png', '1th National Biennial ', 'Organisation', 'Merit', 'Award up to INR 7.5 Lac', 'Eligibility:Young innovators and inventors up to class 12<br />\r\nRegion:India<br />\r\nAll India<br />\r\n<br />\r\nDeadline: 31 march 2019', 'https://www.buddy4study.com/scholarship/11th-national-biennial-competition-for-green-grassroots-2018', 'Active', 'Approved'),
(7, 'SCH-5', ' Tara and Jasubhai Mehta Fellowships in Mathematics', '5c8d5f446b1a25.jpg', 'Tara and Jasubhai Mehta ', 'Company', 'Income ,Merit', 'Costs for tuition, housing and meals for the duration of the program at Boston University in the United States', 'Eligibility: Indian students between 14 and 19 years of age<br />\r\nDeadline: 01-Apr-2019', 'https://promys.org/mehta-fellowships', 'Active', 'Approved'),
(8, 'SCH-6', 'Meri Pehchaan Scholarship 2019', '5c8d610b9f02a1.jpg', 'Times and Trends Academy', 'Company', 'Income ', '30% to 100% tuition fee waiver', 'Family income must be less than 2Lacs<br />\r\nDeadline: 14-Apr-2019', 'https://timesandtrendsacademy.com/meri-pehchaan-scholarship-times-trends-academy/', 'Active', 'Approved'),
(9, 'SCH-7', 'Post-Matric Scholarship & Other Educational Facilities to SB', '5c8d6023aa52a1.png', 'Social Justice and Special Assisstance', 'Organisation', 'Income', 'INR 150 to INR 450 per month', 'Eligibility:Family annual income should not be more than INR 1 Lac per annum.<br />\r\n<br />\r\nApplication:28-Feb-2019', 'https://www.buddy4study.com/scholarship/post-matric-scholarship-other-educational-facilities-to-sbc-students-2017', 'Active', 'Approved'),
(10, 'SCH-8', 'Example', '5c8dda481a39f4.jpg', 'IDF', 'Organisation', 'Income', '1,00,000', 'Example Scholarship', 'http://www.idf.org.in/', 'Active', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `institution_reg`
--

CREATE TABLE `institution_reg` (
  `sr_id` int(250) NOT NULL,
  `inist_id` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile_no` bigint(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `documents` varchar(250) NOT NULL,
  `institution_type` varchar(255) NOT NULL,
  `org_status` varchar(250) NOT NULL DEFAULT 'Inactive',
  `apr_status` varchar(250) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution_reg`
--

INSERT INTO `institution_reg` (`sr_id`, `inist_id`, `name`, `mobile_no`, `email`, `website`, `documents`, `institution_type`, `org_status`, `apr_status`) VALUES
(1, 'IDF-0', 'dummy', 7896584631, 'dummy', 'dummy', 'dummy', 'dummy', 'Inactive', 'Not Approved'),
(8, 'IDF-1', 'Harsh Company', 9987546644, 'mistryharsh28@gmail.com', 'https://website.com', '5c8dd0af4617a5.jpg', 'Organisation', 'Inactive', 'Not Approved'),
(9, 'IDF-2', 'DJSCE', 222222222, 'admin@djsanghvi.com', 'djsanghvi.com', '5c8dd5d515eae7.png', 'College', 'Inactive', 'Not Approved'),
(10, 'IDF-3', 'Dynamic Vishva', 8596485469, 'dynamicvishvainfo@dv.com', 'dv.com', '5c8dd63565f957.jpg', 'Company', 'Inactive', 'Not Approved'),
(11, 'IDF-4', 'fsdfsdfsdf', 5775757575, 'admin@djsanghvi.com', 'djsanghvi.com', '5c8ddb9c1a9c54.jpg', 'Organisation', 'Inactive', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `sr_id` int(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`sr_id`, `user_id`, `pwd`) VALUES
(1, 'admin@idf', '0c73c0815bb281fd8a25bb2264ee26b4');

-- --------------------------------------------------------

--
-- Table structure for table `login_org`
--

CREATE TABLE `login_org` (
  `sr_id` int(250) NOT NULL,
  `inist_id` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `login_status` varchar(250) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_org`
--

INSERT INTO `login_org` (`sr_id`, `inist_id`, `pwd`, `login_status`) VALUES
(7, 'IDF-1', '25f9e794323b453885f5181f1b624d0b', 'Inactive'),
(8, 'IDF-2', 'e10adc3949ba59abbe56e057f20f883e', 'Inactive'),
(9, 'IDF-3', '25f9e794323b453885f5181f1b624d0b', 'Inactive'),
(10, 'IDF-4', '25d55ad283aa400af464c76d713c07ad', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `sr_id` int(250) NOT NULL,
  `stud_id` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `stud_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`sr_id`, `stud_id`, `email`, `stud_pass`) VALUES
(10, 'STUD-1', 'das010pranay@gmail.com', 'b4ee639663b13c8f6cb91463d2b5abc3');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `sr_id` int(250) NOT NULL,
  `stud_id` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile_no` bigint(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `institution` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `income` int(250) NOT NULL,
  `income_proof` varchar(250) NOT NULL,
  `high_q` varchar(255) NOT NULL,
  `high_q_proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`sr_id`, `stud_id`, `name`, `mobile_no`, `email`, `institution`, `age`, `income`, `income_proof`, `high_q`, `high_q_proof`) VALUES
(1, 'STUD-0', 'dummy', 1525151525, 'dummy', 'dummy', 25, 25615, 'dummy', 'dummy', 'dummy'),
(13, 'STUD-1', 'Pranay Das', 9987219397, 'das010pranay@gmail.com', 'PD Lions College', 19, 200000, '', '12', '5c8dad1598c5a4.png'),
(14, 'STUD-2', 'Kalpesh Patil', 8898574588, 'patilkaps@gmail.com', 'DJSCE', 20, 200000000, '', '12', ''),
(15, 'STUD-3', 'Harsh M', 9985648755, 'harsh@gmail.com', 'KJ Somaiya', 21, 150000, '', '10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_scholarship`
--
ALTER TABLE `add_scholarship`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `institution_reg`
--
ALTER TABLE `institution_reg`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `login_org`
--
ALTER TABLE `login_org`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `login_student`
--
ALTER TABLE `login_student`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`sr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_scholarship`
--
ALTER TABLE `add_scholarship`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `institution_reg`
--
ALTER TABLE `institution_reg`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_org`
--
ALTER TABLE `login_org`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login_student`
--
ALTER TABLE `login_student`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `sr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
