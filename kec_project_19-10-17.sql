-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 06:28 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
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
-- Table structure for table `paper_presentations`
--

CREATE TABLE `paper_presentations` (
  `pp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pp_title` varchar(100) NOT NULL,
  `clg_type` varchar(50) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_place` varchar(80) NOT NULL,
  `certificate_path` varchar(80) NOT NULL,
  `ppr_prize` varchar(20) NOT NULL,
  `p_date` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_presentations`
--

INSERT INTO `paper_presentations` (`pp_id`, `user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `created_at`) VALUES
(1, 1, 'network', 'inside kec', 'gct', 'cbe', '', '1', '2017-10-09', '2017-10-11'),
(2, 4, 'cloud computing', 'inside kec', 'kec', 'py', '', '2', '2017-10-04', '2017-10-10'),
(3, 2, 'network', 'outside', 'iit', 'bombay', '', '', '2017-10-12', '2017-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `project_presentations`
--

CREATE TABLE `project_presentations` (
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `clg_type` varchar(50) NOT NULL,
  `pro_title` varchar(100) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `cl_place` varchar(80) NOT NULL,
  `pro_prize` varchar(80) NOT NULL,
  `certificate_path` varchar(80) NOT NULL,
  `pro_date` date NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_presentations`
--

INSERT INTO `project_presentations` (`pro_id`, `user_id`, `clg_type`, `pro_title`, `cl_name`, `cl_place`, `pro_prize`, `certificate_path`, `pro_date`, `create_at`) VALUES
(1, 1, 'kec', 'recovery', 'ksr', 'erode', '2', '', '2017-10-03', '2017-10-03'),
(2, 4, '', 'iot', 'ssn', 'cbe', '3', 'img/uploads/temp.html', '2017-09-29', '0000-00-00');

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
(6, '14csr200', 'subash pandian', 'j', 'subashpandian@gmail.com', 123456890, '123', 'madurai', 'BE', 'CSE', 'D', 'kanimolzhi', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_image_files`
--

CREATE TABLE `user_image_files` (
  `uf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pp_id` int(11) NOT NULL,
  `file_name` varchar(80) NOT NULL,
  `file_path` varchar(80) NOT NULL,
  `file_size` varchar(80) NOT NULL,
  `file_type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `w_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `w_title` varchar(100) NOT NULL,
  `w_cl_type` varchar(20) NOT NULL,
  `w_cl_name` varchar(100) NOT NULL,
  `w_cl_place` varchar(80) NOT NULL,
  `w_cert_path` varchar(80) NOT NULL,
  `w_date` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`w_id`, `user_id`, `w_title`, `w_cl_type`, `w_cl_name`, `w_cl_place`, `w_cert_path`, `w_date`, `created_at`) VALUES
(1, 1, 'django', 'outside', 'nit', 'trichy', 'path', '2017-08-08', '2017-10-03'),
(2, 0, 'wsfwagf ', '', 'wegwg', '', 'img/uploads/mega-menu-1.jpg', '2017-10-01', '0000-00-00');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`uf_id`,`user_id`,`pp_id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`w_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project_presentations`
--
ALTER TABLE `project_presentations`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_image_files`
--
ALTER TABLE `user_image_files`
  MODIFY `uf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
