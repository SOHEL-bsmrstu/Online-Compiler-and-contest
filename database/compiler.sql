-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 06:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `phone_number`, `email`, `image_path`, `password`, `gender`, `country`) VALUES
('Sohel Rana', '01742021380', 'rana37351@gmail.com', '../images/5a01b51dd35432017-11-07-14-29-01IMG_20150406_112915.jpg', '112233', 'male', 'bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `contest_problem`
--

CREATE TABLE `contest_problem` (
  `id` int(11) NOT NULL,
  `contest_id` varchar(100) NOT NULL,
  `contest_problem_name` varchar(10) NOT NULL,
  `contest_problem_path` varchar(250) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `contest_status` varchar(20) NOT NULL,
  `input_set` varchar(100) NOT NULL,
  `output_set` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_problem`
--

INSERT INTO `contest_problem` (`id`, `contest_id`, `contest_problem_name`, `contest_problem_path`, `start_time`, `duration`, `contest_status`, `input_set`, `output_set`) VALUES
(8, '1001', 'A', 'upload/add.pdf', '(22-12-20170) 12.00 pm', '50', 'close', '5 5', '10'),
(10, '1002', 'A', 'upload/add.pdf', '(22-12-20170) 12.00 pm', '50', 'coming', '10 60', '70'),
(11, '1002', 'B', 'upload/multi.pdf', '(22-12-20170) 12.00 pm', '50', 'coming', '4 5', '20');

-- --------------------------------------------------------

--
-- Table structure for table `contest_problem_input_set`
--

CREATE TABLE `contest_problem_input_set` (
  `contest_id` int(11) NOT NULL,
  `problem_name` varchar(10) NOT NULL,
  `input_set` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_problem_input_set`
--

INSERT INTO `contest_problem_input_set` (`contest_id`, `problem_name`, `input_set`) VALUES
(1001, 'A', '25 10');

-- --------------------------------------------------------

--
-- Table structure for table `contest_problem_output_set`
--

CREATE TABLE `contest_problem_output_set` (
  `output_set_id` int(11) NOT NULL,
  `contest_id` varchar(50) NOT NULL,
  `problem_name` varchar(10) NOT NULL,
  `output_set` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_problem_output_set`
--

INSERT INTO `contest_problem_output_set` (`output_set_id`, `contest_id`, `problem_name`, `output_set`) VALUES
(1, '1002', 'B', '15');

-- --------------------------------------------------------

--
-- Table structure for table `contest_program_submission`
--

CREATE TABLE `contest_program_submission` (
  `user_name` varchar(100) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `problem_name` varchar(10) NOT NULL,
  `choose_language` varchar(25) NOT NULL,
  `program` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contest_program_submission_result`
--

CREATE TABLE `contest_program_submission_result` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `contest_id` varchar(10) NOT NULL,
  `problem_name` varchar(10) NOT NULL,
  `output` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_program_submission_result`
--

INSERT INTO `contest_program_submission_result` (`id`, `user_name`, `contest_id`, `problem_name`, `output`) VALUES
(1, 'Sohel Rana', '1002', 'A', 'Wrong'),
(2, 'Sohel Rana', '1002', 'A', 'Accept'),
(3, 'Ferdouse Ahmed', '1002', 'A', 'Accept'),
(4, '', '', '', 'error'),
(5, 'Sohel Rana', '1001', 'A', 'error'),
(6, 'Sohel Rana', '1001', 'A', 'Wrong'),
(7, 'Sohel Rana', '1001', 'A', 'Wrong'),
(8, 'Sohel Rana', '1001', 'A', 'Wrong'),
(9, 'Sohel Rana', '1001', 'A', 'Wrong'),
(10, 'Sohel Rana', '1001', 'A', 'Wrong'),
(11, 'Sohel Rana', '1001', 'A', 'Wrong'),
(13, 'Sohel Rana', '1001', 'A', 'Wrong'),
(14, 'Sohel Rana', '1001', 'A', 'Wrong'),
(15, 'Sohel Rana', '1001', 'A', 'Wrong'),
(16, 'Sohel Rana', '1001', 'A', 'Accept'),
(17, 'Sohel Rana', '1001', 'A', 'Accept'),
(18, 'Sohel Rana', '1001', 'A', 'Accept'),
(19, 'Sohel Rana', '1001', 'A', 'Wrong'),
(20, 'Sohel Rana', '1001', 'A', 'Wrong'),
(21, 'Sohel Rana', '1001', 'A', 'Wrong'),
(22, 'Sohel Rana', '1001', 'A', 'Wrong'),
(23, 'Sohel Rana', '1001', 'A', 'Wrong'),
(24, 'Sohel Rana', '1001', 'A', 'Accept'),
(25, 'Sohel Rana', '1001', 'A', 'Accept'),
(26, 'Sohel Rana', '1001', 'A', 'Accept'),
(27, 'Sohel Rana', '1001', 'A', 'Accept'),
(28, 'Sohel Rana', '1001', 'A', 'Accept'),
(29, 'Sohel Rana', '1001', 'A', 'Accept'),
(30, 'Sohel Rana', '1001', 'A', 'Wrong'),
(31, 'Sohel Rana', '1001', 'A', 'Wrong'),
(32, 'Sohel Rana', '1001', 'A', 'Accept'),
(33, 'Sohel Rana', '1001', 'A', 'Accept'),
(34, 'Sohel Rana', '1001', 'A', 'Accept'),
(35, 'Sohel Rana', '1001', 'A', 'Accept'),
(36, 'Sohel Rana', '1001', 'A', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_date` varchar(100) NOT NULL,
  `news_type` varchar(25) NOT NULL,
  `news_name` varchar(500) NOT NULL,
  `news_details` varchar(10000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_date`, `news_type`, `news_name`, `news_details`, `id`) VALUES
('03 Nov', 'update', ' Upcoming Hakaton Events Notice', '\r\nOur friends at Burda Bootcamp, who will be hosting some of our \r\nupcoming PyData tutorial events, are hosting the first fitness & \r\nhealth hackathon in Munich! Join them if you want to spend two \r\ndays eating healthy food (and protein ice-cream) and working with \r\nsome cool APIs like that of eGym & Adidas. Pfizer & Hasso-Plattner-\r\nInstitut are also partners and will provide special challenges.\r\n\r\n\r\nThings to win: A whole set of Nokia Health devices like smart watch, \r\nscale, thermometer, BPM), tickets to the conferences DLD Berlin, \r\nWe Are Developers in Vienna and Startup Con in Cologne, \r\ncustomized Salomon running shoes, Polar 370 watch and of course\r\n money!\r\n\r\nBest wishes,\r\n', 1),
('27 Oct ', 'general', 'List Of Hakaton 2016-2017', ' \r\nJanuary 19 - January 21 in Santa Barbara, California, USA\r\n\r\nHosted by University of California, Santa Barbara (UCSB) for 36 hours\r\n\r\nCapacity: 500\r\n\r\nCost: Free\r\n\r\nNote: Imagine visiting the beach for FREE before summer vacation,\r\n or even spring break. Imagine doing what you love and meeting \r\npeople who share the same interests as you do. Well, no need to \r\nimagine it anymore, because this opportunity is just right around the \r\ncorner. SB Hacks will be happening from January 19-21, 2018 year \r\nat UC Santa Barbaraâ€™s lovely beachside campus. Donâ€™t miss your \r\nchance to hack by the sunset, code by the beach, and make long\r\nlasting memories and friendships. Come explore the IV Jungle and\r\n let SB Hacks be the first hackathon you attend in the 2018 year! \r\n\r\nTravel reimbursement offered!\r\n\r\nTravel Reimbursement\r\nPrizes offered!\r\n\r\nPrizes\r\nHigh schoolers accepted!\r\n\r\nHigh Schoolers ', 3),
('01 Nov', 'update', 'List of Upcoming News ', ' \r\nJanuary 19 - January 21 in Santa Barbara, California, USA\r\n\r\nHosted by University of California, Santa Barbara (UCSB) for 36 hours\r\n\r\nCapacity: 500\r\n\r\nCost: Free\r\n\r\nNote: Imagine visiting the beach for FREE before summer vacation,\r\n or even spring break. Imagine doing what you love and meeting \r\npeople who share the same interests as you do. Well, no need to \r\nimagine it anymore, because this opportunity is just right around the \r\ncorner. SB Hacks will be happening from January 19-21, 2018 year \r\nat UC Santa Barbaraâ€™s lovely beachside campus. Donâ€™t miss your \r\nchance to hack by the sunset, code by the beach, and make long\r\nlasting memories and friendships. Come explore the IV Jungle and\r\n let SB Hacks be the first hackathon you attend in the 2018 year! \r\n\r\nTravel reimbursement offered!\r\n\r\nTravel Reimbursement\r\nPrizes offered!\r\n\r\nPrizes\r\nHigh schoolers accepted!\r\n\r\nHigh Schoolers ', 5),
('30 Oct', 'general', 'Seminar Notice', '\r\nInvitation for quotations for supply & Installation of Equipment for \r\ndept.of Biotechnology (Last Date:08.12.2017 )', 6),
('05 Nov', 'update', 'Upcoming Seminar Events Notice', '\r\n(Updated) Skill Development Training for the students of NE India on \"\r\n Post-harvest Technology and Processing of Fruits\" (24th Jan-23rd \r\nFeb, 2018)', 7);

-- --------------------------------------------------------

--
-- Table structure for table `practice_problem`
--

CREATE TABLE `practice_problem` (
  `problem_id` int(11) NOT NULL,
  `problem_name` varchar(250) NOT NULL,
  `problem_path` varchar(250) NOT NULL,
  `input_set` varchar(250) NOT NULL,
  `output_set` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_problem`
--

INSERT INTO `practice_problem` (`problem_id`, `problem_name`, `problem_path`, `input_set`, `output_set`) VALUES
(1, 'The 3n + 1 problem', 'upload/100.pdf', '1 10 100 200 201 210 900 1000', '1 10 20 100 200 125 201 210 89 900 1000 174'),
(2, '\'Accordian\" Patience', 'upload/127.pdf', 'QD AD 8H 5S 3H 5H TC 4D JH KS 6H 8S JS AC AS 8D 2H QS TS 3S AH 4H TH TD 3C 6S 8C 7D 4C 4S 7S 9H 7C 5D 2S KD 2D QH JD 6D 9D JC 2C KH 3D QC 6C 9S KC 7H 9C 5C #', '6 piles remaining: 40 8 1 1 1 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(80) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `phone_number`, `email`, `image_path`, `password`, `gender`, `country`, `user_status`) VALUES
(1, 'Sohel Rana', '01742021380', 'rana37351@gmail.com', 'images/59ee2b0d71e302017-10-23-19-46-53S.M_SOHEL01742021380.jpg', '112233', 'male', 'bangladesh', 0),
(2, 'Ferdouse Ahmed', '01688225357', 'ferdouse@gmail.com', 'images/5a391549028c02017-12-19-14-34-01I_ROBBEL.jpg', '445566', 'male', 'bangladesh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`,`email`);

--
-- Indexes for table `contest_problem`
--
ALTER TABLE `contest_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest_problem_input_set`
--
ALTER TABLE `contest_problem_input_set`
  ADD PRIMARY KEY (`contest_id`,`problem_name`);

--
-- Indexes for table `contest_problem_output_set`
--
ALTER TABLE `contest_problem_output_set`
  ADD PRIMARY KEY (`output_set_id`);

--
-- Indexes for table `contest_program_submission`
--
ALTER TABLE `contest_program_submission`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `contest_program_submission_result`
--
ALTER TABLE `contest_program_submission_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_name` (`news_name`);

--
-- Indexes for table `practice_problem`
--
ALTER TABLE `practice_problem`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contest_problem`
--
ALTER TABLE `contest_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contest_problem_output_set`
--
ALTER TABLE `contest_problem_output_set`
  MODIFY `output_set_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contest_program_submission_result`
--
ALTER TABLE `contest_program_submission_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
