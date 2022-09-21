-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 04:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s2a`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_finance`
--

CREATE TABLE `academic_finance` (
  `username` varchar(30) NOT NULL,
  `School` varchar(25) NOT NULL,
  `marks1` int(11) NOT NULL,
  `College` varchar(25) NOT NULL,
  `marks2` int(11) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `ifsc` varchar(25) NOT NULL,
  `income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_finance`
--

INSERT INTO `academic_finance` (`username`, `School`, `marks1`, `College`, `marks2`, `bank`, `ifsc`, `income`) VALUES
('AMARNATH', 'BHASHYAM', 10, 'SRI CHAITANYA', 940, '123456', '9848144', 0),
('KRIPAKARA', 'CHAITANYA', 550, 'DECCAN HIGH SCHOOL', 980, '1234567', '7654321', 0),
('manoj123', 'SDFA', 223, 'DSFAS', 322, '2342', '32423', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `phone`, `content`) VALUES
(2, 'Rahul', 'rahul@gmail.com', '9000998889', 'Can you please add some more schloarships.\r\nThank '),
(3, 'Keerthana', 'keerthana@gmail.com', '9136639999', 'Thank you so much for the schloarships'),
(4, 'Anirudh', 'anirudh@gmail.com', '9879869999', 'These schloarships really helped me in pursue my s');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `username` varchar(30) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Bgrp` varchar(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `FatherName` varchar(25) NOT NULL,
  `FatherOccupation` varchar(25) NOT NULL,
  `MotherName` varchar(25) NOT NULL,
  `MotherOccupation` varchar(25) NOT NULL,
  `fadd` varchar(50) NOT NULL,
  `School` varchar(25) NOT NULL,
  `marks1` int(11) NOT NULL,
  `College` varchar(25) NOT NULL,
  `marks2` int(11) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `ifsc` varchar(25) NOT NULL,
  `Image` varchar(30) NOT NULL DEFAULT 'temp.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`username`, `FirstName`, `LastName`, `DOB`, `Bgrp`, `email`, `phone`, `gender`, `FatherName`, `FatherOccupation`, `MotherName`, `MotherOccupation`, `fadd`, `School`, `marks1`, `College`, `marks2`, `bank`, `ifsc`, `Image`) VALUES
('AMARNATH', 'KOTTURU', 'AMARNATH', '2022-09-04', 'B+', 'amarnathkothur2470@gmail.', 9214748364, 'MALE', 'VENKATA RATHANAMAIAH', 'BUSINESS', 'NALINAKSHI', 'HOUSE-WIFE', '3/231, PUTLUR ROAD, NEAR SLN THEATRE, ANANTHAPUR, ', 'BHASHYAM', 10, 'SRI CHAITANYA', 940, '123456', '9848144', '2113918574amarnath.jpg'),
('kripakara', 'KRIPAKARA', 'M N', '2002-09-29', 'AB-', 'kripakara@gmail.com', 8884768565, 'MALE', 'M NARAYANA B', 'BUSINESS', 'MALATI', 'HOME MAKER', 'JP NAGAR, 3-50, NEAR RAJIGUDA TEMPLE, BENGALURU, B', 'CHAITANYA', 550, 'DECCAN HIGH SCHOOL', 980, '8884768565', '7654321', '820830743kripakara.jpeg'),
('manoj123', 'MANOJ', 'H', '2022-09-09', 'W', 'sadfa@fdsa', 24234, 'MALE', 'SDFDA', 'DSFAS', 'DSFDA', 'SDFDAS', 'SDFASD, SDFAS, SDAFA, SDFAF, FASDF, DSFA', '', 0, '', 0, '', '', '2127620673Timetable.png');

-- --------------------------------------------------------

--
-- Table structure for table `personal_scho`
--

CREATE TABLE `personal_scho` (
  `username` varchar(30) NOT NULL,
  `scholarshipid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_scho`
--

INSERT INTO `personal_scho` (`username`, `scholarshipid`) VALUES
('AMARNATH', 27),
('AMARNATH', 28),
('AMARNATH', 29),
('kripakara', 29),
('kripakara', 30),
('kripakara', 31),
('kripakara', 32),
('manoj123', 27),
('manoj123', 30);

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `providerid` int(11) NOT NULL,
  `providername` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`providerid`, `providername`, `organization`) VALUES
(1, 'abdul', 'BMS'),
(2, 'Rahul', 'colgate'),
(3, 'Keerthana', 'Microsoft'),
(4, 'manoj', 'bms');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `scholarshipid` int(30) NOT NULL,
  `provider` int(11) NOT NULL,
  `scholarshipname` varchar(100) NOT NULL,
  `scholarshiptype` varchar(50) NOT NULL,
  `eligibility` varchar(100) NOT NULL,
  `benifit` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `elig2` varchar(1000) NOT NULL DEFAULT '<li>Open for Indian nationals only.</li> <li>Students must be pursuing the first year of programme from government colleges in the academic year 2021-22</li> <li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li> <li>Applicants must have obtained at least 65% marks in board examinations</li> <li>Annual family income of the applicants should be below INR 6,00,000 (6 lakh)  all sources</li>',
  `documents` varchar(1000) NOT NULL DEFAULT '<li>Marksheet of class 12th</li> <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card) </li> <li>Current year admission proof (fee receipt/admission letter/institution  card/bonafide certificate) </li> <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li> <li>Bank account details of the scholarship applicant </li> <li>Photograph of the applicant</li>',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scholarshipid`, `provider`, `scholarshipname`, `scholarshiptype`, `eligibility`, `benifit`, `start`, `end`, `elig2`, `documents`, `image`) VALUES
(26, 1, 'SHINING STAR SCHOLARSHIP PROGRAMME', 'MEDICAL', 'STUDENTS PURSUING THEIR FIRST-YEAR BACHELOR OF DENTAL SURGERY', 'Each successfully selected student will receive INR 1,05,000 per year for 4 years ', '2022-09-05', '2022-09-20', '<li>•Annual family income of the applicants should not be more than INR 8,00,000/- from all sources.</li>\r\n<li>•Children or family members of employees of HALEON India (erstwhile GlaxoSmithKline Consumer Healthcare), IDA, Goodera & Buddy4Study are not eligible.</li>\r\n<li>•Students from pan-India can apply.</li>\r\n', '<li>•Marksheet of the previous class/semester.</li>\r\n<li>•Photo identity proof (Aadhaar Card/voter id card/driving license/PAN card)</li>\r\n<li>•Current year admission proof (fee receipt/admission letter/institution ID card/bonafide certificate)</li>\r\n<li>•Family income proof (Government-issued documents such as tax return, income certificate from local administration, EWS (Economic Weaker Section) certificate)</li>\r\n•Bank account details of the applicant or parent.</li>\r\n<li>•Photograph of the applicant.</li>\r\n', '1167353704.jpg'),
(27, 1, 'SCHAEFFLER INDIA HOPE ENGINEERING SCHOLARSHIP', 'ENGINEERING', 'APPLICANTS MUST HAVE SCORED MORE THAN 60% MARKS IN CLASS 12 ', 'Up to INR 75,000 per year for the complete duration of the engineering program', '2022-09-05', '2022-09-30', '<li>•Students from Gujarat, Maharashtra, and Tamil Nadu only.</li>\r\n<li>•Applicants must have scored more than 60% marks in Class 12 (Science) in academic session 2021-22.</li>\r\n<li>•Only applicants enrolled in 1st year of the engineering program at any recognized colleges in India can apply.</li>\r\n<li>•Annual family income of the applicants must be less than INR 5,00,000.</li>\r\n<li>•Children of employees of Schaeffler India or Buddy4Study are not eligible for this scholarship program.</li>\r\n', '<li>Marksheet of class 12th</li> <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card) </li> <li>Current year admission proof (fee receipt/admission letter/institution  card/bonafide certificate) </li> <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li> <li>Bank account details of the scholarship applicant </li> <li>Photograph of the applicant</li>', '134674158student3.png'),
(28, 1, 'GSK SCHOLARS PROGRAMME 2022-23', 'MEDICAL', 'APPLICANTS MUST HAVE OBTAINED AT LEAST 65% MARKS IN CLASS 12', 'Up to INR 1,00,000 per year for students pursuing MBBS', '2022-09-10', '2022-09-20', '<li>Students must be pursuing the first-year of MBBS programme from government colleges.</li>\r\n<li>Applicants must have obtained at least 65% marks in Class 12 board examinations.</li>\r\n<li>Annual family income of the applicants should be below INR 6,00,000 from all sources.</li>\r\n<li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li>\r\n<li>Open for Indian nationals only.</li>\r\n\r\n', '<li>Marksheet of Class 12.</li>\r\n<li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card)</li>\r\n<li>Current year admission proof (fee receipt/admission letter/institution identity card/bonafide certificate)</li>\r\n<li>Family income proof (salary slip, Form 16, Income Certificate, ITR)</li>\r\n<li>Bank account details of applicant.</li>\r\n<li>Photograph of the applicant.</li>\r\n', '4227338077.jpg'),
(29, 1, 'BYPL SASHAKT SCHOLARSHIP 2022-23', 'ENGINEERING', 'ANNUAL FAMILY INCOME OF THE APPLICANT MUST NOT BE MORE THAN INR 6,00,000', 'Up to INR 30,000 ', '2022-09-25', '2022-11-05', '\r\n<li>•Applicants must be studying in the final year of undergraduate programme (any stream) in any government institute in Delhi.</li> \r\n<li>•Must have secured more than 55% marks in their last appeared examination.</li> \r\n<li>•Annual family income of the applicant must not be more than INR 6,00,000 (6 lakhs) from all sources.</li> \r\n<li>•Children of employees of BSES Yamuna Power Limited (BYPL) and Buddy4Study are not eligible.</li> \r\n', '<li>•Passport size photograph</li>\r\n<li>•Aadhaar card</li>\r\n<li>•Family income proof (Salary Slip, Form 16, Income Certificate, ITR, etc.)</li>\r\n<li>•Marksheets of last qualifying examination and Class 12.</li>\r\n<li>•Latest college fee receipt (for current academic year)</li>\r\n<li>•Fee structure (for current academic year).</li> \r\n<li>•Bank account details of the scholarship applicant (cancelled cheque/passbook copy).</li>', '1114703950BSES.png'),
(30, 1, 'VIRCHOW SCHOLARSHIP PROGRAM 2022', 'BUSINESS', 'OPEN FOR GIRL STUDENTS ONLY AND CHILDREN OF EMPLOYEES OF VIRCHOW & BUDDY4STUDY ARE NOT ELIGIBLE', 'For Class 10 Passed Students (studying in Class 11): INR 10,000 per year For Class 12 Passed Student', '2022-09-20', '2022-09-30', '<li>Students must be pursuing the first year of programme from government colleges in the academic year 2021-22</li> <li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li> <li>Applicants must have obtained at least 65% marks in board examinations</li> <li>Annual family income of the applicants should be below INR 6,00,000 (6 lakh)  all sources</li>', '<li>Marksheet of class 12th</li> <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card) </li> <li>Current year admission proof (fee receipt/admission letter/institution  card/bonafide certificate) </li> <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li> <li>Bank account details of the scholarship applicant </li> <li>Photograph of the applicant</li>', '1693733339Virchow.png'),
(31, 1, 'GEV MEMORIAL MERIT SCHOLARSHIP', 'LAW', 'THEY SHOULD BE PURSUING LLB/LLM DEGREE COURSES (ANY YEAR) AT A RECOGNISED LAW INSTITUTE IN INDIA.', 'The GEV memorial merit scholarship 2021 for law students offers an amount between INR 50,000 to INR ', '2022-09-06', '2022-09-26', '<li>Open for Indian nationals only.</li> <li>Students must be pursuing the first year of programme from government colleges in the academic year 2021-22</li> <li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li> <li>Applicants must have obtained at least 65% marks in board examinations</li> <li>Annual family income of the applicants should be below INR 6,00,000 (6 lakh)  all sources</li>', '<li>A copy of the mark sheets from the Secondary School Certificate (SSC) examination up until their recent qualifying examination</li>\r\n<li>A copy of the admission letter to the law college, institute or university</li>\r\n<li>Their parents\' income certificate (salary statement, IT returns).</li>\r\n<li>A copy of the result of CLAT, LSAT-India, AILET or other law entrance exams.</li>\r\n<li>Passport size photographs.</li>\r\n<li>Scanned copy of the candidate\'s aadhaar card.</li>', '559630283pro.png'),
(32, 1, 'INTERNATIONAL MPHIL SCHOLARSHIPS', 'STUDY ABROAD', 'MUST BE A CITIZEN OF THE REGIONS WHERE WE OPERATE THAT ARE LISTED ON OUR WEBSITE', 'Funded tuition of up-to $3000 per semester', '2022-10-01', '2022-12-01', '<li>Open for Indian nationals only.</li> <li>Students must be pursuing the first year of programme from government colleges in the academic year 2021-22</li> <li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li> <li>Applicants must have obtained at least 65% marks in board examinations</li> <li>Annual family income of the applicants should be below INR 6,00,000 (6 lakh)  all sources</li>', '<li>Marksheet of class 12th</li> <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card) </li> <li>Current year admission proof (fee receipt/admission letter/institution  card/bonafide certificate) </li> <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li> <li>Bank account details of the scholarship applicant </li> <li>Photograph of the applicant</li>', '894373198student9.jpg'),
(33, 1, 'MEXT JAPAN SCHOLARSHIPS 2023', 'MANAGEMENT', '1.INTEND TO STUDY ABROAD IN JAPAN FROMHAVE ACHIEVED A GPA OF AT LEAST 2.30 ON A 3.00 SCALE AT THEIR ', 'Full admission fee  100% of tuition (covered by the APU Tuition Reduction Scholarship)', '2022-10-18', '2022-12-18', '<li>Open for Indian nationals only.</li> <li>Students must be pursuing the first year of programme from government colleges in the academic year 2021-22</li> <li>Children of employees of GSK, GiveIndia and Buddy4Study are not eligible</li> <li>Applicants must have obtained at least 65% marks in board examinations</li> <li>Annual family income of the applicants should be below INR 6,00,000 (6 lakh)  all sources</li>', '<li>1.Submit the APU application by November 16, 2022 (for September 2023 Enrollment).Additional documents are not required to be considered for this scholarship.</li>\r\n<li>2.APU reviews application documents and selects outstanding candidates to recommend to MEXT.</li>\r\n<li>3.Applicants selected to be recommended for this scholarship are notified with their final APU application results.</li>\r\n<li>4.Selected applicants complete and submit additional MEXT application documents to APU.<>/li', '774188740MEXT.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessionhis`
--

CREATE TABLE `sessionhis` (
  `sessionid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `startdate` date NOT NULL,
  `starttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessionhis`
--

INSERT INTO `sessionhis` (`sessionid`, `username`, `startdate`, `starttime`) VALUES
(1, 'kripakara', '2022-09-21', '19:22:11'),
(2, 'kripakara', '2022-09-21', '19:23:12'),
(3, 'AMARNATH', '2022-09-21', '19:32:20'),
(4, 'AMARNATH', '2022-09-21', '19:36:10'),
(5, 'manoj123', '2022-09-21', '19:37:29'),
(6, 'AMARNATH', '2022-09-21', '19:42:38'),
(7, 'AMARNATH', '2022-09-21', '19:45:53'),
(8, 'manoj123', '2022-09-21', '19:56:55'),
(9, 'kripakara', '2022-09-21', '20:10:53'),
(10, 'manoj123', '2022-09-21', '20:12:06'),
(11, 'kripakara', '2022-09-21', '20:12:20'),
(12, 'manoj123', '2022-09-21', '20:13:54'),
(13, 'kripakara', '2022-09-21', '20:14:06'),
(14, 'manoj123', '2022-09-21', '20:14:50'),
(15, 'kripakara', '2022-09-21', '20:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(12, 'AMARNATH', 'amarnathkothur2470@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'kripakara', 'kripakara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Manoj', 'manoj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'manoj123', 'manoj@mail', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_finance`
--
ALTER TABLE `academic_finance`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `personal_scho`
--
ALTER TABLE `personal_scho`
  ADD PRIMARY KEY (`username`,`scholarshipid`),
  ADD KEY `personal_scho_ibfk_2` (`scholarshipid`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`providerid`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`scholarshipid`),
  ADD KEY `provider` (`provider`);

--
-- Indexes for table `sessionhis`
--
ALTER TABLE `sessionhis`
  ADD PRIMARY KEY (`sessionid`),
  ADD KEY `sessions` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `scholarshipid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sessionhis`
--
ALTER TABLE `sessionhis`
  MODIFY `sessionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_finance`
--
ALTER TABLE `academic_finance`
  ADD CONSTRAINT `academic_finance_ibfk_1` FOREIGN KEY (`username`) REFERENCES `personal` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal_scho`
--
ALTER TABLE `personal_scho`
  ADD CONSTRAINT `personal_scho_ibfk_1` FOREIGN KEY (`username`) REFERENCES `personal` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_scho_ibfk_2` FOREIGN KEY (`scholarshipid`) REFERENCES `scholarship` (`scholarshipid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `scholarship_ibfk_1` FOREIGN KEY (`provider`) REFERENCES `provider` (`providerid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
