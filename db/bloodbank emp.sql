-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:25 AM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(200) NOT NULL,
  `agency_address` text NOT NULL,
  `agency_contact_number` text NOT NULL,
  `agency_contact_person` text NOT NULL,
  `agency_contact_person_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_exam`
--

CREATE TABLE `blood_exam` (
  `blood_exam_id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_bag_type` varchar(10) NOT NULL,
  `segment_number` varchar(30) NOT NULL,
  `time_started` time NOT NULL,
  `time_ended` time NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `hematocrit` varchar(30) NOT NULL,
  `exam_status` int(11) NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `status` int(30) NOT NULL,
  `booking_address` varchar(100) NOT NULL,
  `booking_city` varchar(50) NOT NULL,
  `blood_type` text DEFAULT NULL,
  `program_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Are you:'),
(2, 'In the past three days?'),
(3, 'QUESTION No. 5, FOR FEMALE DONORS: in the past 1 and 1/2 months (6 Wks)'),
(4, 'In the past 12 Wks have you been\r\n'),
(5, 'In the past 12 months have you been'),
(6, 'Have you ever?');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `zipcode`) VALUES
(1, 'Bacolod City', 6100),
(2, 'Bago City', 6101),
(3, 'Silay City', 6116);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_time` time NOT NULL,
  `expiry` date NOT NULL,
  `donation_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `donor_last` varchar(100) NOT NULL,
  `donor_first` varchar(100) NOT NULL,
  `donor_middle` varchar(100) NOT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `donor_bday` date NOT NULL,
  `donor_age` int(3) NOT NULL DEFAULT 0,
  `donor_gender` varchar(100) NOT NULL,
  `donor_contact` varchar(100) NOT NULL,
  `donor_tel` varchar(15) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `donor_password` varchar(30) NOT NULL,
  `donor_nationality` varchar(100) NOT NULL,
  `donor_civil` varchar(20) NOT NULL,
  `donor_occupation` varchar(100) NOT NULL,
  `donor_address` varchar(100) NOT NULL,
  `donor_city` varchar(30) NOT NULL,
  `donor_province` varchar(50) NOT NULL,
  `donor_zipcode` varchar(10) NOT NULL,
  `donor_office_address` varchar(100) NOT NULL,
  `donor_office_zipcode` int(10) NOT NULL,
  `donor_pic` varchar(100) NOT NULL,
  `donor_type` varchar(30) NOT NULL,
  `donor_preferred` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `linkages`
--

CREATE TABLE `linkages` (
  `linkage_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(11) NOT NULL,
  `nationality` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationality_id`, `nationality`) VALUES
(2, 'Afghan'),
(3, 'Albanian'),
(4, 'Algerian'),
(5, 'American'),
(6, 'Andorran'),
(7, 'Angolan'),
(8, 'Antiguans'),
(9, 'Argentinean'),
(10, 'Armenian'),
(11, 'Australian'),
(12, 'Austrian'),
(13, 'Azerbaijani'),
(14, 'Bahamian'),
(15, 'Bahraini'),
(16, 'Bangladeshi'),
(17, 'Barbadian'),
(18, 'Barbudans'),
(19, 'Batswana'),
(20, 'Belarusian'),
(21, 'Belgian'),
(22, 'Belizean'),
(23, 'Beninese'),
(24, 'Bhutanese'),
(25, 'Bolivian'),
(26, 'Bosnian'),
(27, 'Brazilian'),
(28, 'British'),
(29, 'Bruneian'),
(30, 'Bulgarian'),
(31, 'Burkinabe'),
(32, 'Burmese'),
(33, 'Burundian'),
(34, 'Cambodian'),
(35, 'Cameroonian'),
(36, 'Canadian'),
(37, 'Cape Verdean'),
(38, 'Central African'),
(39, 'Chadian'),
(40, 'Chilean'),
(41, 'Chinese'),
(42, 'Colombian'),
(43, 'Comoran'),
(44, 'Congolese'),
(45, 'Congolese'),
(46, 'Costa Rican'),
(47, 'Croatian'),
(48, 'Cuban'),
(49, 'Cypriot'),
(50, 'Czech'),
(51, 'Danish'),
(52, 'Djibouti'),
(53, 'Dominican'),
(54, 'Dominican'),
(55, 'Dutch'),
(56, 'Dutchman'),
(57, 'Dutchwoman'),
(58, 'East Timorese'),
(59, 'Ecuadorean'),
(60, 'Egyptian'),
(61, 'Emirian'),
(62, 'Equatorial Guin'),
(63, 'Eritrean'),
(64, 'Estonian'),
(65, 'Ethiopian'),
(66, 'Fijian'),
(67, 'Filipino'),
(68, 'Finnish'),
(69, 'French'),
(70, 'Gabonese'),
(71, 'Gambian'),
(72, 'Georgian'),
(73, 'German'),
(74, 'Ghanaian'),
(75, 'Greek'),
(76, 'Grenadian'),
(77, 'Guatemalan'),
(78, 'Guinea-Bissauan'),
(79, 'Guinean'),
(80, 'Guyanese'),
(81, 'Haitian'),
(82, 'Herzegovinian'),
(83, 'Honduran'),
(84, 'Hungarian'),
(85, 'I-Kiribati'),
(86, 'Icelander'),
(87, 'Indian'),
(88, 'Indonesian'),
(89, 'Iranian'),
(90, 'Iraqi'),
(91, 'Irish'),
(92, 'Irish'),
(93, 'Israeli'),
(94, 'Italian'),
(95, 'Ivorian'),
(96, 'Jamaican'),
(97, 'Japanese'),
(98, 'Jordanian'),
(99, 'Kazakhstani'),
(100, 'Kenyan'),
(101, 'Kittian and Nev'),
(102, 'Kuwaiti'),
(103, 'Kyrgyz'),
(104, 'Laotian'),
(105, 'Latvian'),
(106, 'Lebanese'),
(107, 'Liberian'),
(108, 'Libyan'),
(109, 'Liechtensteiner'),
(110, 'Lithuanian'),
(111, 'Luxembourger'),
(112, 'Macedonian'),
(113, 'Malagasy'),
(114, 'Malawian'),
(115, 'Malaysian'),
(116, 'Maldivan'),
(117, 'Malian'),
(118, 'Maltese'),
(119, 'Marshallese'),
(120, 'Mauritanian'),
(121, 'Mauritian'),
(122, 'Mexican'),
(123, 'Micronesian'),
(124, 'Moldovan'),
(125, 'Monacan'),
(126, 'Mongolian'),
(127, 'Moroccan'),
(128, 'Mosotho'),
(129, 'Motswana'),
(130, 'Mozambican'),
(131, 'Namibian'),
(132, 'Nauruan'),
(133, 'Nepalese'),
(134, 'Netherlander'),
(135, 'New Zealander'),
(136, 'Ni-Vanuatu'),
(137, 'Nicaraguan'),
(138, 'Nigerian'),
(139, 'Nigerien'),
(140, 'North Korean'),
(141, 'Northern Irish'),
(142, 'Norwegian'),
(143, 'Omani'),
(144, 'Pakistani'),
(145, 'Palauan'),
(146, 'Panamanian'),
(147, 'Papua New Guine'),
(148, 'Paraguayan'),
(149, 'Peruvian'),
(150, 'Polish'),
(151, 'Portuguese'),
(152, 'Qatari'),
(153, 'Romanian'),
(154, 'Russian'),
(155, 'Rwandan'),
(156, 'Saint Lucian'),
(157, 'Salvadoran'),
(158, 'Samoan'),
(159, 'San Marinese'),
(160, 'Sao Tomean'),
(161, 'Saudi'),
(162, 'Scottish'),
(163, 'Senegalese'),
(164, 'Serbian'),
(165, 'Seychellois'),
(166, 'Sierra Leonean'),
(167, 'Singaporean'),
(168, 'Slovakian'),
(169, 'Slovenian'),
(170, 'Solomon Islande'),
(171, 'Somali'),
(172, 'South African'),
(173, 'South Korean'),
(174, 'Spanish'),
(175, 'Sri Lankan'),
(176, 'Sudanese'),
(177, 'Surinamer'),
(178, 'Swazi'),
(179, 'Swedish'),
(180, 'Swiss'),
(181, 'Syrian'),
(182, 'Taiwanese'),
(183, 'Tajik'),
(184, 'Tanzanian'),
(185, 'Thai'),
(186, 'Togolese'),
(187, 'Tongan'),
(188, 'Trinidadian or '),
(189, 'Tunisian'),
(190, 'Turkish'),
(191, 'Tuvaluan'),
(192, 'Ugandan'),
(193, 'Ukrainian'),
(194, 'Uruguayan'),
(195, 'Uzbekistani'),
(196, 'Venezuelan'),
(197, 'Vietnamese'),
(198, 'Welsh'),
(199, 'Welsh'),
(200, 'Yemenite'),
(201, 'Zambian'),
(202, 'Zimbabwean'),
(203, 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `physical_exam`
--

CREATE TABLE `physical_exam` (
  `exam_id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `blood_pressure` varchar(15) NOT NULL,
  `pulse_rate` varchar(15) NOT NULL,
  `temp` varchar(15) NOT NULL,
  `gen_appearance` varchar(1000) NOT NULL,
  `skin` varchar(100) NOT NULL,
  `heent` varchar(100) NOT NULL,
  `heent_remarks` varchar(100) NOT NULL,
  `heart_lungs` varchar(100) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `volume` varchar(15) NOT NULL,
  `reasons_for_deferral` varchar(100) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `method` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program` varchar(500) NOT NULL,
  `program_address` varchar(500) NOT NULL,
  `city_id` int(11) NOT NULL,
  `program_date` date NOT NULL,
  `program_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program`, `program_address`, `city_id`, `program_date`, `program_time`) VALUES
(1, 'Walk-in', 'Negros First Cyber Building', 1, '0000-00-00', '00:00:00'),
(2, 'Bloodletting', 'Brgy. Busay', 2, '2008-09-17', '08:00:00'),
(4, 'Test101', 'Sample', 3, '2021-12-02', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_donor`
--

CREATE TABLE `program_donor` (
  `program_donor_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `category_id`) VALUES
(1, 'Feeling healthy today?', 1),
(2, 'Currently taking medication?', 1),
(3, 'Have you taken any medication from the deferral list?', 1),
(4, 'Have you received any vaccination?', 1),
(5, 'Have you taken aspirin or anything that has aspirin in it?	\r\n', 2),
(6, 'Have you been pregnant or are you pregnant now? Last Menstrual period? ', 3),
(7, 'Donated blood, platelet or plasma?	\r\n', 4),
(8, 'Had a blood transfusion?	\r\n', 5),
(9, 'Had surgical operation, dental extraction?	\r\n', 5),
(10, 'Had a tattoo, ear or body piercing, accidental contact with blood, needle-stick & accupuncture?	\r\n', 5),
(11, 'Had sexual contact with high risk individuals?	\r\n', 5),
(12, 'Had sexual contact with anyone in exchange for material or monetary gain?	', 5),
(13, 'Had sexual contact with person who has worked abroad?	\r\n', 5),
(14, 'Engaged in Casual Sex?	\r\n', 5),
(15, 'Lived with a person who has hepatitis?	\r\n', 5),
(16, 'Have you been imprisoned?	\r\n', 5),
(17, 'Have any of your relatives had Creutsfeldt-Jakob (Mad Cow) disease?', 5),
(18, 'Lived outside your place of residence?', 6),
(19, 'Lived outside Philippines	\r\n', 6),
(20, 'Use needles to take drugs, steroids, or anything not prescribed by your doctor?	\r\n', 6),
(21, 'Used clothing factor concentrate?	\r\n', 6),
(22, 'Had a positive test for HIV/AIDS virus, Syphillis or Malaria?', 6),
(23, 'Had Hepatitis?', 6),
(24, 'Had Malaria?', 6),
(25, 'Been told to have or treated for genital wart, syphillis, gonorrhea or other Sexuality Transmissible Infections?	\r\n', 6),
(26, 'Had any type of cancer, for example Leukemia?	\r\n', 6),
(27, 'Had any problems with your heart or lungs?', 6),
(28, 'Had a bleeding condition or blood disease?', 6),
(29, 'Are you giving blood because you wanted to be tested for HIV or Hepatitis virus?	\r\n', 6),
(30, 'Are you aware that if you have the AIDS/Hepatitis virus, you can givr it to someone else though you may feel well and have a negative HIV/Hepatitis test?	\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_id` int(11) NOT NULL,
  `sched_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `survey_date` date NOT NULL,
  `survey_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test` varchar(30) NOT NULL,
  `result` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_first` varchar(100) NOT NULL,
  `user_middle` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_last`, `user_first`, `user_middle`, `user_type`) VALUES
(1, 'admin', 'admin', 'Daemon', 'Matt', 'C.', 'Recruitment Officer '),
(2, 'med', 'med', 'Pipes', 'Lee', 'T', 'Medical Technology'),
(3, 'admin', 'admin', 'Dragic', 'Goran', 'Lee', 'Administrator'),
(4, 'test', 'test', 'test', 'test', 'test', 'Phlebotomist'),
(5, 'jsmith', 'jsmith', 'Smith', 'John', 'D', 'Recruitment Officer'),
(11, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'Administrator'),
(13, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `blood_exam`
--
ALTER TABLE `blood_exam`
  ADD PRIMARY KEY (`blood_exam_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_name` (`city_name`,`zipcode`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `linkages`
--
ALTER TABLE `linkages`
  ADD PRIMARY KEY (`linkage_id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `physical_exam`
--
ALTER TABLE `physical_exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_donor`
--
ALTER TABLE `program_donor`
  ADD PRIMARY KEY (`program_donor_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_exam`
--
ALTER TABLE `blood_exam`
  MODIFY `blood_exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkages`
--
ALTER TABLE `linkages`
  MODIFY `linkage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `physical_exam`
--
ALTER TABLE `physical_exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program_donor`
--
ALTER TABLE `program_donor`
  MODIFY `program_donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
