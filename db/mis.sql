-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 05:33 PM
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
  `f_ac_pam_id` int(11) NOT NULL,
  `f_ac_user_h_id` int(11) NOT NULL,
  `f_ac_user_c_id` int(11) NOT NULL,
  `f_ac_score` int(11) NOT NULL,
  `f_ac_status` int(11) NOT NULL,
  `f_ad_time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_action`
--

INSERT INTO `f_action` (`f_ac_id`, `f_ac_pam_id`, `f_ac_user_h_id`, `f_ac_user_c_id`, `f_ac_score`, `f_ac_status`, `f_ad_time_stamp`) VALUES
(1, 1, 3, 4, 4, 0, '2020-06-12 15:12:24'),
(2, 2, 3, 4, 5, 0, '2020-06-12 15:12:24'),
(3, 5, 3, 4, 3, 0, '2020-06-12 15:12:24'),
(4, 1, 2, 1, 5, 0, '2020-06-12 15:28:13'),
(5, 2, 2, 1, 4, 0, '2020-06-12 15:28:13'),
(6, 5, 2, 1, 3, 0, '2020-06-12 15:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `f_h`
--

CREATE TABLE IF NOT EXISTS `f_h` (
`f_hid` int(11) NOT NULL,
  `f_hdetail` varchar(250) NOT NULL,
  `f_hgroup` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_h`
--

INSERT INTO `f_h` (`f_hid`, `f_hdetail`, `f_hgroup`) VALUES
(1, 'ภาระงานในตำแหน่งวิชาการ (20คะแนน)', 1),
(2, 'ภาระงานในตำแหน่งบริหาร (80 คะแนน)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `f_pam`
--

CREATE TABLE IF NOT EXISTS `f_pam` (
`f_id` int(11) NOT NULL,
  `f_th` int(11) NOT NULL,
  `f_hh` int(11) NOT NULL,
  `f_hhh` varchar(2500) NOT NULL,
  `f_score` int(11) NOT NULL,
  `f_staus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_pam`
--

INSERT INTO `f_pam` (`f_id`, `f_th`, `f_hh`, `f_hhh`, `f_score`, `f_staus`) VALUES
(1, 1, 1, '1.1 ภาระงานสอน<br>\r\n1.2 ภาระงานวิจัยหรืองานวิชาการอื่น<br>\r\n1.3 ภาระงานบริการวิชาการ<br>\r\n1.4 ภาระงานทำนุบำรุงศิลปวัฒนธรรม<br>\r\n1.5 ภาระงานเกี่ยวกับงานกิจการนักศึกษา ภาระงานอื่นๆ<br>\r\n				\r\n', 20, 0),
(2, 1, 2, '1. งานบริหาร (ภาระงานหลักตามภาระหน้าที่) (50 คะแนน)', 50, 0),
(5, 1, 2, '1.1 การบริหารคน (20 คะแนน)<br>\r\n- มีการกำกับ ติดตาม และประเมินผลการปฏิบัติงาน และพัฒนาบุคลากรอย่างทัดเทียมกัน<br>\r\n- มีการกำหนดภาระหน้าที่หรือขั้นตอนการดำเนินงานของหน่วยงานและมอบหมายงานแก่บุคลากรในหน่วยงานได้เหมาะสมกับปริมาณและคุณภาพของงานที่ทำ<br>', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_th`
--

CREATE TABLE IF NOT EXISTS `f_th` (
`f_thid` int(11) NOT NULL,
  `f_thdettail` varchar(250) NOT NULL,
  `f_thnum` int(11) NOT NULL,
  `f_thstatus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_th`
--

INSERT INTO `f_th` (`f_thid`, `f_thdettail`, `f_thnum`, `f_thstatus`) VALUES
(1, 'ตอนที่ ๑ การประเมินผลการปฏิบัติงาน ผู้บริหารสายวิชาการ (คณบดี/ผู้อำนวยการสถาบัน/สำนัก)', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`n_id` int(11) NOT NULL,
  `n_user_id` int(11) NOT NULL,
  `n_detail` varchar(550) NOT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_tumn` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `user_tumn`, `user_status`) VALUES
(2, 'admin', 'admin', '443322', '123456', 'ดร.', 0),
(3, 'Prasong', 'Ekaluck', '443323', '123456', 'ดร.', 0),
(4, 'Traipoom', 'Chatwilai', '443324', '123456', 'ดร.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_action`
--
ALTER TABLE `f_action`
 ADD PRIMARY KEY (`f_ac_id`);

--
-- Indexes for table `f_h`
--
ALTER TABLE `f_h`
 ADD PRIMARY KEY (`f_hid`);

--
-- Indexes for table `f_pam`
--
ALTER TABLE `f_pam`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `f_th`
--
ALTER TABLE `f_th`
 ADD PRIMARY KEY (`f_thid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_action`
--
ALTER TABLE `f_action`
MODIFY `f_ac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `f_h`
--
ALTER TABLE `f_h`
MODIFY `f_hid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `f_pam`
--
ALTER TABLE `f_pam`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `f_th`
--
ALTER TABLE `f_th`
MODIFY `f_thid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
