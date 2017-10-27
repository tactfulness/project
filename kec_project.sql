-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2017 at 12:43 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kec_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `industrial_vists`
--

CREATE TABLE `industrial_vists` (
  `iv_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `complant_place` varchar(80) NOT NULL,
  `iv_date` date NOT NULL,
  `certificate_path` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrial_vists`
--

INSERT INTO `industrial_vists` (`iv_id`, `user_id`, `company_name`, `complant_place`, `iv_date`, `certificate_path`, `created_at`) VALUES
(1, 1, 'infosys', '', '2017-10-13', 'img/uploads/', '2017-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `paper_presentations`
--

CREATE TABLE `paper_presentations` (
  `pp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pp_title` varchar(100) NOT NULL,
  `clg_type` varchar(50) DEFAULT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_place` varchar(80) NOT NULL,
  `certificate_path` varchar(80) NOT NULL,
  `ppr_prize` varchar(20) NOT NULL,
  `p_date` date NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_presentations`
--

INSERT INTO `paper_presentations` (`pp_id`, `user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `created_at`) VALUES
(23, 1, 'Network Security', 'inside', 'Kongu Engineering College', 'Perundurai', 'img/uploads/provisional-page-001.jpg', 'Third', '2017-10-13', '2017-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `project_presentations`
--

CREATE TABLE `project_presentations` (
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `collge type` varchar(20) NOT NULL,
  `project title` varchar(100) NOT NULL,
  `college name` varchar(80) NOT NULL,
  `college place` varchar(80) NOT NULL,
  `prize` varchar(50) NOT NULL,
  `certificate_path` varchar(80) NOT NULL,
  `attented date` date NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_presentations`
--

INSERT INTO `project_presentations` (`pro_id`, `user_id`, `collge type`, `project title`, `college name`, `college place`, `prize`, `certificate_path`, `attented date`, `created_at`) VALUES
(1, 1, 'inside', 'dfgdgb', 'dfbdb', 'dfbfd', 'Second', 'img/uploads/mega-menu-6.jpg', '2017-10-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `spot_name` varchar(50) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_place` varchar(80) NOT NULL,
  `sport_date` date NOT NULL,
  `sport_prize` varchar(20) NOT NULL,
  `certificate_path` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `s_pass` varchar(50) NOT NULL,
  `advisor_for` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`s_id`, `s_name`, `email`, `s_pass`, `advisor_for`, `created_at`) VALUES
(1, 'geetha', 'geetha@kongu.ac.in', '123', '2-d', '0000-00-00'),
(2, 'kanimolzhi', 'kanimolzhi@kongu.ac.in', '123', '4-d', '2017-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `programme` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `section` varchar(20) NOT NULL,
  `class_advisor` varchar(20) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `rollno`, `fname`, `lname`, `email`, `phone`, `password`, `address`, `programme`, `course`, `section`, `class_advisor`, `created_at`) VALUES
(1, '14csl286', 'venkat', 'r', 'pvenkat.rv@gmail.com', 9042064, '123', 'udt', 'be', 'cse', '', 'kanimolzhi', '0000-00-00'),
(2, '14csr152', 'Ranjith kumar', 'c', 'ranjithkumarc.cse@gmail.com', 7502922019, '123', '2/87 Mettukadai,uthukuli', 'BE', 'Computer Science and Engineering', '', 'manjula devi', '0000-00-00'),
(4, '14csr198', 'sowndharya', 's', 'sowndharyaselvam96@gmail.com', 9600713086, '123', 'erode', 'B.E', 'CSE', '', 'kanimolzhi', '0000-00-00'),
(6, '14csr200', 'subash pandian', 'j', 'subashpandian@gmail.com', 123456890, '123', 'madurai', 'BE', 'CSE', 'D', 'kanimolzhi', '2017-10-18'),
(10, '16csr192', 'abc', 'v', 'abc@gmail.com', 123456890, '123', 'chennai', 'be', 'cse', 'd', 'geetha', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_image_files`
--

CREATE TABLE `user_image_files` (
  `uf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pp_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `file_name` varchar(80) NOT NULL,
  `file_path` varchar(80) NOT NULL,
  `file_size` varchar(80) NOT NULL,
  `file_type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_image_files`
--

INSERT INTO `user_image_files` (`uf_id`, `user_id`, `pp_id`, `pro_id`, `file_name`, `file_path`, `file_size`, `file_type`) VALUES
(1, 1, 1, 1, 'filename', 'filepath', 'silesize', '1');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `w_id` int(11) NOT NULL,
  `w_title` varchar(100) NOT NULL,
  `w_cl_type` varchar(20) NOT NULL,
  `w_cl_name` varchar(100) NOT NULL,
  `w_cl_place` varchar(80) NOT NULL,
  `w_cert_path` varchar(80) NOT NULL,
  `w_date` date NOT NULL,
  `created_at` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industrial_vists`
--
ALTER TABLE `industrial_vists`
  ADD PRIMARY KEY (`iv_id`,`user_id`);

--
-- Indexes for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  ADD PRIMARY KEY (`pp_id`,`user_id`);

--
-- Indexes for table `project_presentations`
--
ALTER TABLE `project_presentations`
  ADD PRIMARY KEY (`pro_id`,`user_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_image_files`
--
ALTER TABLE `user_image_files`
  ADD PRIMARY KEY (`uf_id`,`user_id`,`pro_id`,`pp_id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`w_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industrial_vists`
--
ALTER TABLE `industrial_vists`
  MODIFY `iv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `project_presentations`
--
ALTER TABLE `project_presentations`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_image_files`
--
ALTER TABLE `user_image_files`
  MODIFY `uf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
