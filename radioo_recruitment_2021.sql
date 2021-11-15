-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 09:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buradio_join`
--

-- --------------------------------------------------------

--
-- Table structure for table `radioo_recruitment_2021`
--

CREATE TABLE `radioo_recruitment_2021` (
  `time_stamp` varchar(50) NOT NULL,
  `submission_ip` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `apply_for` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `nick_name` varchar(50) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `present_address` varchar(3000) NOT NULL,
  `permanent_address` varchar(3000) NOT NULL,
  `department` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `pay_number` varchar(20) NOT NULL,
  `fb_profile` varchar(200) NOT NULL,
  `extra_curriculum_activities` varchar(2000) NOT NULL,
  `why_do_you_want_to_join` varchar(2000) NOT NULL,
  `can_you_make_friend_easily` varchar(50) NOT NULL,
  `opinion_about_radio` varchar(3000) NOT NULL,
  `pc_status` varchar(50) NOT NULL,
  `broadband_status` varchar(50) NOT NULL,
  `reg_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radioo_recruitment_2021`
--
ALTER TABLE `radioo_recruitment_2021`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radioo_recruitment_2021`
--
ALTER TABLE `radioo_recruitment_2021`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
