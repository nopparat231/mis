-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 05:30 PM
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
  `f_ac_h_id` int(11) NOT NULL,
  `f_ac_user_h_id` int(11) NOT NULL,
  `f_ac_user_c_id` int(11) NOT NULL,
  `f_ac_score` int(11) NOT NULL,
  `f_ac_rob` int(11) NOT NULL,
  `f_ac_kid_from` int(11) NOT NULL,
  `f_ac_kid_end` int(11) NOT NULL,
  `f_ac_status` int(11) NOT NULL,
  `f_ad_time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_action`
--

INSERT INTO `f_action` (`f_ac_id`, `f_ac_pam_id`, `f_ac_h_id`, `f_ac_user_h_id`, `f_ac_user_c_id`, `f_ac_score`, `f_ac_rob`, `f_ac_kid_from`, `f_ac_kid_end`, `f_ac_status`, `f_ad_time_stamp`) VALUES
(21, 1, 1, 2, 4, 20, 1, 2020, 2020, 0, '2020-06-16 14:45:41'),
(22, 6, 2, 2, 4, 10, 1, 2020, 2020, 0, '2020-06-16 14:45:41'),
(23, 7, 2, 2, 4, 20, 1, 2020, 2020, 0, '2020-06-16 14:45:41'),
(24, 8, 2, 2, 4, 30, 1, 2020, 2020, 0, '2020-06-16 14:45:41'),
(25, 9, 2, 2, 4, 20, 1, 2020, 2020, 0, '2020-06-16 14:45:41');

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
  `f_pam_num` int(11) NOT NULL,
  `f_staus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_pam`
--

INSERT INTO `f_pam` (`f_id`, `f_th`, `f_hh`, `f_hhh`, `f_score`, `f_pam_num`, `f_staus`) VALUES
(1, 1, 1, '- ภาระงานสอน<br>- ภาระงานวิจัยหรืองานวิชาการอื่น<br>- ภาระงานบริการวิชาการ<br>- ภาระงานทำนุบำรุงศิลปวัฒนธรรม<br>- ภาระงานเกี่ยวกับงานกิจการนักศึกษา ภาระงานอื่นๆ<br>				', 20, 1, 0),
(2, 1, 2, '- งานบริหาร (ภาระงานหลักตามภาระหน้าที่) (50 คะแนน)', 50, 2, 1),
(6, 1, 2, '- การบริหารงบประมาณ (10 คะแนน) <br>  - บริหารงานด้วยความซื่อสัตย์ สุจริต ไม่มีผลประโยชน์ด้านอื่นที่ขัดแย้งกับการปฏิบัติหน้าที่ <br>  - มีการบริหารจัดการงบประมาณภายใต้ขอบเขตอำนาจให้เป็นไปตามเป้าหมายของหน่วยงานและมหาวิทยาลัย <br>', 10, 3, 0),
(7, 1, 2, '- การบริหารงาน (20 คะแนน) <br> - มีการบริหารงานสอดคล้องกับระบบการบริหารของมหาวิทยาลัยรวมทั้งสอดคล้องกับความคาดหวังของความต้องการของหน่วยงานต่างๆ ทั้งภายในและภายนอกมหาวิทยาลัย <br>  - มีการเผยแพร่ข้อมูลของหน่วยงานอย่างเปิดเผย และเข้าถึงข้อมูลข่าวสารได้อย่างเสรีตามความเหมาะสม <br> - มีการสื่อสารหรือแจ้งข้อมูลที่จำเป็นและเป็นประโยชน์ในการทำงานอย่างสม่ำเสมอและถูกต้อง <br> - มีการบริหารงาน โดยคำนึงถึงบุคลากรหรือหน่วยงานที่เกี่ยวข้องให้ได้รับการบริการอย่างทัดเทียมกัน<br>', 20, 4, 0),
(8, 1, 2, '- งานบริหารงานตามยุทธศาสตร์ของมหาวิทยาลัยและของคณะ (30 คะแนน)', 30, 6, 0),
(9, 1, 2, '- การบริหารคน (20 คะแนน) <br>  - มีการกำกับ ติดตาม และประเมินผลการปฏิบัติงาน และพัฒนาบุคลากรอย่างทัดเทียมกัน <br>  - มีการกำหนดภาระหน้าที่หรือขั้นตอนการดำเนินงานของหน่วยงานและมอบหมายงานแก่บุคลากรในหน่วยงานได้เหมาะสมกับปริมาณและคุณภาพของงานที่ทำ <br>', 20, 5, 0);

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
  `n_head` varchar(250) NOT NULL,
  `n_detail` varchar(2500) NOT NULL,
  `n_status` int(11) NOT NULL,
  `n_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_user_id`, `n_head`, `n_detail`, `n_status`, `n_time`) VALUES
(1, 2, 'ประกาศ สำหรับ นักศึกษาชั้นปีที่ 1', '<p><b>นักศึกษาชั้นปีที่ 1 สามารถเข้าใช้งานระบบประเมินการสอนได้ดังต่อไปนี้</b></p><p>1.เข้าไปที่ mis.rmutk.ac.th</p><p>2.ให้กรอก Username และ Password ในการเข้าใช้งานดังต่อไปนี้               Username : รหัสนักศึกษาไม่มีขีด    Password  : รหัสบัตรประชาชนไม่มีขีด</p><p>3.แล้วคลิกที่ปุ่ม Login สีเขียว</p><p>4.แล้วคลิกที่ปุ่ม "ประเมินการสอน"หมายเหตุ : ถ้าลองแล้วยังใช้งานไม่ได้ ให้แจ้งปัญหามาที่ "gg.gg/misregis"กรอกข้อมูลให้ครบทุกช่อง เพื่อที่เจ้าหน้าที่จะดำเนินการแก้ไขให้</p><p><br></p>', 0, '2020-06-16 13:47:18'),
(2, 2, 'teste 413', '<blockquote class="blockquote"><p>estestet</p></blockquote><ol><li>asdasdas</li><li>asdsad</li><li>112</li></ol>', 1, '2020-06-16 13:47:18'),
(3, 2, 'ประกาศ ระบบการประเมินการสอน ปีการศึกษา 1/2563', '<p><span style="color: rgb(255, 0, 255); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><b>สามารถประเมินการสอน 1/2563 ได้ตั้งแต่วันที่ 10 ตุลาคม 2563 เวลา 9.00 น. เป็นต้นไป</b></span><br></p><div style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><span mce_style="color: #ff00ff;" style="color: rgb(255, 0, 255);"></span><span mce_style="color: #0000ff;" style="color: rgb(0, 0, 255);">นักศึกษาที่ไม่สามารถเข้าสู่ระบบเพื่อประเมินการสอน หรือ ไม่สามารถเล่นอินเตอร์เน็ตภายในมหาวิทยาลัยได้</span><span mce_style="color: #0000ff;"><span mce_style="color: #ff0000;" style="color: rgb(255, 0, 0);">&nbsp;<br>สามารถเข้าไปที่<br>1.ให้ login เข้า Wifi ของมหาวิทยาลัย<br>&nbsp; &nbsp;Username : รหัสนักศึกษาไม่มีขีด<br>&nbsp; &nbsp;Password &nbsp;: รหัสบัตรประชาชนไม่มีขีด<br>2.เข้าไปที่ "gg.gg/misregis"</span></span></div><p><span mce_style="color: #ff0000;" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: rgb(255, 0, 0);">3.กรอกข้อมูลให้เรียบร้อย<br>4.Username และ Password จะใช้งานได้ภายในวันที่ 20 ธันวาคม 2563<br>หมายเหตุ : ให้ใช้โทรศัพท์มือถือหรือคอมพิวเตอร์ในการใช้งาน</span></p><p><br></p><p> 							</p>', 0, '2020-06-16 13:47:18');

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
(2, 'admin', 'admin', '443322', '123456', 'ผอ.', 1),
(3, 'Prasong', 'Ekaluck', '443323', '123456', 'จนท.', 3),
(4, 'Traipoom', 'Chatwilai', '443324', '123456', 'พนง.', 0);

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
MODIFY `f_ac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `f_h`
--
ALTER TABLE `f_h`
MODIFY `f_hid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `f_pam`
--
ALTER TABLE `f_pam`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `f_th`
--
ALTER TABLE `f_th`
MODIFY `f_thid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
