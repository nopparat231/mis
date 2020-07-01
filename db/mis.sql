-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 06:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_action`
--

CREATE TABLE IF NOT EXISTS `f_action` (
`f_ac_id` int(11) NOT NULL,
  `f_ac_th_id` int(11) NOT NULL,
  `f_ac_pam_id` int(11) NOT NULL,
  `f_ac_h_id` int(11) NOT NULL,
  `f_ac_user_h_id` int(11) NOT NULL,
  `f_ac_user_c_id` int(11) NOT NULL,
  `f_ac_score` int(11) NOT NULL,
  `f_ac_rob` int(11) NOT NULL,
  `f_ac_kid_from` int(11) NOT NULL,
  `f_ac_kid_end` int(11) NOT NULL,
  `f_ac_status` int(11) NOT NULL,
  `f_ad_time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_action`
--

INSERT INTO `f_action` (`f_ac_id`, `f_ac_th_id`, `f_ac_pam_id`, `f_ac_h_id`, `f_ac_user_h_id`, `f_ac_user_c_id`, `f_ac_score`, `f_ac_rob`, `f_ac_kid_from`, `f_ac_kid_end`, `f_ac_status`, `f_ad_time_stamp`) VALUES
(63, 3, 12, 5, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:10'),
(64, 3, 13, 5, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(65, 3, 14, 5, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(66, 3, 15, 5, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(67, 3, 16, 6, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(68, 3, 17, 6, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(69, 3, 18, 6, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(70, 3, 19, 7, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(71, 3, 20, 7, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(72, 3, 21, 7, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(73, 3, 22, 7, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(74, 3, 23, 8, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(75, 3, 24, 8, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11'),
(76, 3, 25, 8, 4, 2, 5, 1, 2020, 2020, 0, '2020-07-01 15:11:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_action`
--
ALTER TABLE `f_action`
 ADD PRIMARY KEY (`f_ac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_action`
--
ALTER TABLE `f_action`
MODIFY `f_ac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
