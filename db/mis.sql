-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 06:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_action`
--

CREATE TABLE `f_action` (
  `f_acid` int(11) NOT NULL,
  `f_ac_pamid` int(11) NOT NULL,
  `f_ac_user_h_id` int(11) NOT NULL,
  `f_ac_user_c_id` int(11) NOT NULL,
  `f_ac_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f_h`
--

CREATE TABLE `f_h` (
  `f_hid` int(11) NOT NULL,
  `f_hdetail` varchar(250) NOT NULL,
  `f_hgroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `f_pam` (
  `f_id` int(11) NOT NULL,
  `f_th` int(11) NOT NULL,
  `f_hh` int(11) NOT NULL,
  `f_hhh` varchar(2500) NOT NULL,
  `f_score` int(11) NOT NULL,
  `f_staus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `f_th` (
  `f_thid` int(11) NOT NULL,
  `f_thdettail` varchar(250) NOT NULL,
  `f_thnum` int(11) NOT NULL,
  `f_thstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_th`
--

INSERT INTO `f_th` (`f_thid`, `f_thdettail`, `f_thnum`, `f_thstatus`) VALUES
(1, 'ตอนที่ ๑ การประเมินผลการปฏิบัติงาน ผู้บริหารสายวิชาการ (คณบดี/ผู้อำนวยการสถาบัน/สำนัก)', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_action`
--
ALTER TABLE `f_action`
  ADD PRIMARY KEY (`f_acid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_action`
--
ALTER TABLE `f_action`
  MODIFY `f_acid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_h`
--
ALTER TABLE `f_h`
  MODIFY `f_hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `f_pam`
--
ALTER TABLE `f_pam`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `f_th`
--
ALTER TABLE `f_th`
  MODIFY `f_thid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
