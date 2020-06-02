-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 07:11 PM
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
  `f_group` int(11) NOT NULL,
  `f_staus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_pam`
--

INSERT INTO `f_pam` (`f_id`, `f_th`, `f_hh`, `f_hhh`, `f_group`, `f_staus`) VALUES
(1, 1, 1, '1.1 ภาระงานสอน<br>\r\n1.2 ภาระงานวิจัยหรืองานวิชาการอื่น<br>\r\n1.3 ภาระงานบริการวิชาการ<br>\r\n1.4 ภาระงานทำนุบำรุงศิลปวัฒนธรรม<br>\r\n1.5 ภาระงานเกี่ยวกับงานกิจการนักศึกษา ภาระงานอื่นๆ<br>\r\n				\r\n', 1, 0),
(2, 1, 2, '1. งานบริหาร (ภาระงานหลักตามภาระหน้าที่) (50 คะแนน)', 2, 0),
(5, 1, 2, '1.1 การบริหารคน (20 คะแนน)<br>\r\n- มีการกำกับ ติดตาม และประเมินผลการปฏิบัติงาน และพัฒนาบุคลากรอย่างทัดเทียมกัน<br>\r\n- มีการกำหนดภาระหน้าที่หรือขั้นตอนการดำเนินงานของหน่วยงานและมอบหมายงานแก่บุคลากรในหน่วยงานได้เหมาะสมกับปริมาณและคุณภาพของงานที่ทำ<br>', 2, 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
