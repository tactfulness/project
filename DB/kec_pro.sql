-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 02:23 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kec_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `paper_presentations`
--

CREATE TABLE `paper_presentations` (
  `pp_id` int(11) NOT NULL,
  `pp_title` varchar(100) NOT NULL,
  `clg_type` varchar(45) DEFAULT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_place` varchar(80) NOT NULL,
  `certificate_path` varchar(45) NOT NULL,
  `ppr_prize` varchar(45) NOT NULL,
  `p_date` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_presentations`
--

CREATE TABLE `project_presentations` (
  `pro_id` int(11) NOT NULL,
  `clg_type` varchar(45) DEFAULT NULL,
  `pro_title` varchar(150) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `cl_place` varchar(80) NOT NULL,
  `pro_prize` varchar(45) NOT NULL,
  `certificate_path` varchar(45) NOT NULL,
  `pro_date` date NOT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(80) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `clg_place` varchar(80) NOT NULL,
  `sport_date` date NOT NULL,
  `sport_prize` varchar(45) NOT NULL,
  `certificate_path` varchar(45) NOT NULL,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(80) NOT NULL,
  `email` varchar(45) NOT NULL,
  `s_pass` varchar(45) NOT NULL,
  `advisor_for` varchar(45) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `phone` int(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `programme` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `class_advisor` varchar(45) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_image_files`
--

CREATE TABLE `user_image_files` (
  `uf_id` int(11) NOT NULL,
  `pp_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `file_name` varchar(45) DEFAULT NULL,
  `file_path` varchar(45) DEFAULT NULL,
  `file_size` varchar(45) DEFAULT NULL,
  `file_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `w_id` int(11) NOT NULL,
  `w_title` varchar(150) NOT NULL,
  `w_cl_type` varchar(45) NOT NULL,
  `w_cl_name` varchar(100) NOT NULL,
  `w_cl_place` varchar(80) NOT NULL,
  `w_cert_path` varchar(45) NOT NULL,
  `w_date` varchar(45) NOT NULL,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  ADD PRIMARY KEY (`pp_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD KEY `fk_paper_presentations_users1_idx` (`user_id`);

--
-- Indexes for table `project_presentations`
--
ALTER TABLE `project_presentations`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD KEY `fk_project_presentations_users1_idx` (`user_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD KEY `fk_sports_users1_idx` (`user_id`);

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
  ADD PRIMARY KEY (`uf_id`),
  ADD UNIQUE KEY `pp_id_UNIQUE` (`pp_id`),
  ADD UNIQUE KEY `pro_id_UNIQUE` (`pro_id`),
  ADD UNIQUE KEY `sport_id_UNIQUE` (`sport_id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`w_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD KEY `fk_workshops_users1_idx` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_presentations`
--
ALTER TABLE `project_presentations`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_image_files`
--
ALTER TABLE `user_image_files`
  MODIFY `uf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `paper_presentations`
--
ALTER TABLE `paper_presentations`
  ADD CONSTRAINT `fk_paper_presentations_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_presentations`
--
ALTER TABLE `project_presentations`
  ADD CONSTRAINT `fk_project_presentations_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sports`
--
ALTER TABLE `sports`
  ADD CONSTRAINT `fk_sports_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `workshops`
--
ALTER TABLE `workshops`
  ADD CONSTRAINT `fk_workshops_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
