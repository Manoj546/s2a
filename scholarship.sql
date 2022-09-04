-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 02:27 PM
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
(1, 'HI', 'hello@hello', '1234', '1234');

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
  `phone` int(11) NOT NULL,
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
('', 'MANOJ', 'H', '2022-08-17', 'B+', '', 79464, 'MALE', 'SURYA', 'BML', 'REKH', 'CO', '103, NIS, MALUR, BANG, BANGALORE, KARNATAKA', 'SH', 80, 'NA', 90, '1234', '2345', 'temp.jpeg'),
('am', 'MNA', '', '2022-08-06', 'C+', 'shubham@gmail', 2353454, 'FEMALE', 'DSFSAFDAFDSAF', 'UOUOU', 'BCCXC', 'TER', 'SDFSA, EWRG, GFHD, FGHGD, GFDH, EWR', 'DGD', 23, 'ERWW', 23, '324323', '', 'temp.jpeg'),
('amar', 'AMARNATH', 'K', '2022-08-10', 'A-', 'amarpersonal@amar', 789456, 'OTHERS', 'A A', 'Z', 'B B', 'Y', 'ANAR, ANDHRA, ANDHRA, INDIA, KOTTORU, HYDERA, TELA', 'COMITTE', 100, 'BANGALORE', 90, '12345', '12345', 'temp.jpeg'),
('manojhowale', 'MANOJ', 'HOWALE', '2022-09-08', 'C', 'manoj@mail', 2147483647, 'MALE', 'DSFDSA', 'DSFDSAF', 'SDFDASF', 'SDFDSAF', 'DSFSFSFA, SDFASDFDASFDAS, SDFSFDSFA, SDFSADFASDF, ', 'YTUT', 56, 'DFSFAS', 454, '324234', '234234', '1896936037img  (6).jpg'),
('rohith02', 'ROHITH', 'JIGEN', '2022-09-08', 'C', 'rohith@rohith', 123453, 'FEMALE', 'JIGEN', 'J', 'DFSF', 'DFS', 'DSFSAF, SDFSAD, DSFASF, SDFDSAF, DSFASF, DSFSF', 'SDFSAF', 23, 'DFSFS', 454, '35435', '4353', '618376765img  (9).jpg'),
('shub', 'MNA', 'SDF', '2022-08-06', 'C+', 'shubham@gmail', 2353454, 'FEMALE', 'DSFSAFDAFDSAF', 'UOUOU', 'BCCXC', 'TER', 'SDFSA, EWRG, GFHD, FGHGD, GFDH, EWR', 'DGD', 23, 'ERWW', 23, '324323', '', 'temp.jpeg'),
('swayam2', 'SWAYAM', 'K', '2022-08-05', 'S', 'swayam@mail', 12345, 'MALE', 'K', 'K', 'M', 'M', 'ASD, ERER, YUY, HJKHJ, CVXC, PIOI', 'DSFS', 13, 'SDFS', 67, '1234', '1234', 'temp.jpeg');

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
('manojhowale', 10),
('manojhowale', 25),
('rohith02', 11),
('swayam2', 5),
('swayam2', 8),
('swayam2', 10),
('swayam2', 13),
('swayam2', 15),
('swayam2', 25);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `scholarshipid` int(30) NOT NULL,
  `provider` varchar(100) NOT NULL,
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
(1, '1', 'scholsrship', 'ENGINEERING', 'ENGINEERING STUDENTS', '35,000', '2022-08-07', '2022-09-07', '<li> Open for students who\'ve passed Class 10 with at least 60% marks.</li>\r\n                            <li>Applicants must be enrolled in an ITI/Polytechnic/Diploma course at a recognised\r\n                                institution in India.</li>\r\n                            <li>Family income must be less than or equal to INR 4,00,000 (4 Lakhs) per year.\r\n                            </li>\r\n                            <li>Applicants must be the children/wards of commercial transport\r\n                                drivers/owner-cum-drivers only.</li>', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(3, '2', 'NURSING SCHOLARSHIP, SASAKAWA INDIA LEPROSY FOUNDA', 'MEDICAL', 'B.SC. NURSING (BASIC', 'up to INR 1,13,000 (Including Tuition fe', '2022-08-07', '2022-12-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(4, '3', 'UNIVERSITY OF QUEENSLAND MBA STUDENT SCHOLARSHIP -', 'BUSINESS', 'MBA APPLICANTS', '25% tuition fee waiver', '2022-08-07', '2023-01-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(5, '4', 'THE LSAT - INDIA TOPPER SCHOLARSHIP 2022', 'LAW', 'CLASS 12 PASSED STUDENTS APPEARING FOR LSAT 2021', 'Up to INR 4 lakh', '2022-08-31', '2023-08-31', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(7, '3', 'UNIVERSITY OF QUEENSLAND MBA STUDENT SCHOLARSHIP - INTERNATIONAL 2022', 'MANAGEMENT', 'MBA APPLICANTS', '40% tuition fee waiver', '2022-08-07', '2022-11-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(8, '5', 'PDEU ADMISSION SCHOLARSHIP 2022-23', 'SPORTS', 'UG, PG AND PH.D. APPLICANTS', 'Variable awards', '2022-08-31', '2023-08-31', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(9, '6', 'STRATHCLYDE BUSINESS SCHOOL FULL TIME MBA DEANS EXCELLENCE AWARDS 2022', 'STUDY ABROAD', 'MS APPLICANTS', 'Scholarship worth GBP 15,000', '2022-08-07', '2023-01-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(10, '7', 'INDIAN OIL CORPORATION SCHOLARSHIP', 'ENGINEERING', 'MUST BELONG TO UR, SC, ST OR OBC CATEGORY AND SHOULD CURRENTLY PURSUING BTECH', 'An amount of Rs 1.44 lakh will be given to the selected students', '2022-08-07', '2022-11-30', '<li>Open for Indian residents only.</li>\r\n                                    <li>Students who have lost their parent(s)/earning family member due to COVID-19\r\n                                        pandemic.</li>\r\n                                    <li>Applicants must be pursuing graduation (general & professional) courses in STEM\r\n                                        subjects. </li>\r\n                                    <li>Applicants should be currently enrolled and continuing their education. </li>\r\n                                    <li>Annual family income of the applicant should be less than INR 6,00,000 (6 Lakh)\r\n                                        from all sources.</li>', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(11, '8', 'HARVARD MEDICAL SCHOOL', 'MEDICAL', 'SCHOLARSHIPS FOR MINORITIES', 'Varies', '2022-08-07', '2022-12-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(12, '9', 'PNB HOUSING FINANCE LIMITED PROTSAHAN SCHOLARSHIP 2019-20 (MBA)', 'BUSINESS', 'MBA (MARKETING & FINANCE) - 1ST YEAR STUDENTS', 'INR 2,00,000', '2022-08-31', '2023-01-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(13, '10', 'UNIVERSITY OF MELBOURNE, TOM ZUCKER SCHOLARSHIP IN EMPLOYMENT LAW AND LABOUR', 'LAW', 'LAW APPLICANT', 'Up to AUD 12,500', '2022-08-07', '2022-12-07', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(15, '6', 'STRATHCLYDE BUSINESS SCHOOL FULL TIME MBA DEANS EXCELLENCE AWARDS 2021', 'MANAGEMENT', 'MBA APPLICANTS', 'Scholarship worth GBP 15,000', '2022-09-01', '2023-09-01', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(16, '11', 'DRDO-DRL TEZPUR RESEARCH ASSOCIATESHIP AND JUNIOR RESEARCH FELLOWSHIP 2022', 'SPORTS', 'POSTGRADUATE AND PH.D. DEGREE HOLDERS', 'Up to INR 54,000', '2022-09-01', '2022-12-01', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(17, '11', 'DRDO-DRL TEZPUR RESEARCH ASSOCIATESHIP AND JUNIOR RESEARCH', 'SPORTS', 'POSTGRADUATE AND PH.D. DEGREE HOLDERS', 'Up to INR 54,000', '2022-08-01', '2022-12-01', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(18, '1', 'BMSCE SCHOLARSHIP', 'ENGINEERING', 'MTECH', '40000', '2022-08-10', '2022-08-29', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', ''),
(25, '', 'SCHAEFFLER INDIA HOPE ENGINEERING SCHOLARSHIP 2022-23', 'MEDICAL', '•	OPEN FOR STUDENTS FROM GUJARAT, MAHARASHTRA, AND TAMIL NADU ONLY.', 'Up to INR 75,000 per year for the complete duration of the engineering program', '2022-09-05', '2022-09-25', '', '<li>Marksheet of class 12th</li>                             <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN                                 card) </li>                             <li>Current year admission proof (fee receipt/admission letter/institution identity                                 card/bonafide certificate) </li>                             <li>Family income proof (salary slip, Form 16, Income Certificate, ITR) </li>                             <li>Bank account details of the scholarship applicant </li>                             <li>Photograph of the applicant</li>', '1265253096Picture1.jpg');

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
(1, 'new', 'new@new', '202cb962ac59075b964b07152d234b70'),
(2, 'hello', 'hello@123', '202cb962ac59075b964b07152d234b70'),
(3, 'manoj', 'howale@m', '202cb962ac59075b964b07152d234b70'),
(4, 'shub', 'shub@shub', '202cb962ac59075b964b07152d234b70'),
(5, 'amar', 'amar@amar', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'swayam2', 'swayam@mail', '202cb962ac59075b964b07152d234b70'),
(7, 'user', 'newuser@new', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'amarnath3', 'amarnath3@mail', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'rohith02', 'rohith02@mail', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'manojhowale', 'manoj@mail', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`scholarshipid`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `scholarshipid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_scho`
--
ALTER TABLE `personal_scho`
  ADD CONSTRAINT `personal_scho_ibfk_1` FOREIGN KEY (`username`) REFERENCES `personal` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_scho_ibfk_2` FOREIGN KEY (`scholarshipid`) REFERENCES `scholarship` (`scholarshipid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
