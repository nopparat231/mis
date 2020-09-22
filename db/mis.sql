-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
-- Table structure for table `arts_and_culture`
--

CREATE TABLE `arts_and_culture` (
  `artsculture_id` int(11) NOT NULL,
  `art_and_culture_user_id` int(11) NOT NULL,
  `name_artculture` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `art_and_culture_file` varchar(255) NOT NULL,
  `art_and_culture_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arts_and_culture`
--

INSERT INTO `arts_and_culture` (`artsculture_id`, `art_and_culture_user_id`, `name_artculture`, `detail`, `art_and_culture_file`, `art_and_culture_status`) VALUES
(1, 11, 'งานศิลปวัฒนธรรม2', 'รายละเอียดของานศิลปะวัฒนธรรม', '162398_test2.xlsx', 0),
(2, 10, 'รายละเอียดของานศิลปะวัฒนธรรม ', 'งานศิลปวัฒนธรรม', '545377_851711test.xlsx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_action`
--

CREATE TABLE `f_action` (
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
  `f_ac_comment1` varchar(2500) NOT NULL,
  `f_af_upfile` varchar(2500) NOT NULL,
  `f_ac_status` int(11) NOT NULL,
  `f_ad_time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_action`
--

INSERT INTO `f_action` (`f_ac_id`, `f_ac_th_id`, `f_ac_pam_id`, `f_ac_h_id`, `f_ac_user_h_id`, `f_ac_user_c_id`, `f_ac_score`, `f_ac_rob`, `f_ac_kid_from`, `f_ac_kid_end`, `f_ac_comment1`, `f_af_upfile`, `f_ac_status`, `f_ad_time_stamp`) VALUES
(1, 2, 26, 3, 4, 7, 5, 1, 2020, 2020, '', '6629662842579.jpg', 0, '2020-08-23 14:23:37'),
(2, 2, 33, 4, 4, 7, 4, 1, 2020, 2020, '', '9626232785131.jpg', 0, '2020-08-23 14:23:37'),
(3, 2, 34, 9, 4, 7, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:23:37'),
(4, 2, 35, 10, 4, 7, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:23:37'),
(5, 2, 36, 11, 4, 7, 1, 1, 2020, 2020, '', '', 0, '2020-08-23 14:23:37'),
(6, 3, 12, 5, 4, 7, 4, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(7, 3, 13, 5, 4, 7, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(8, 3, 14, 5, 4, 7, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(9, 3, 15, 5, 4, 7, 5, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(10, 3, 16, 6, 4, 7, 1, 1, 2020, 2020, '', '461903free_isometric_asset_file00123455_bb12.png', 0, '2020-08-23 14:26:20'),
(11, 3, 17, 6, 4, 7, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(12, 3, 18, 6, 4, 7, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(13, 3, 19, 7, 4, 7, 4, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(14, 3, 20, 7, 4, 7, 5, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(15, 3, 21, 7, 4, 7, 4, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(16, 3, 23, 8, 4, 7, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(17, 3, 24, 8, 4, 7, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(18, 3, 25, 8, 4, 7, 1, 1, 2020, 2020, '', '', 0, '2020-08-23 14:26:20'),
(19, 2, 26, 3, 4, 10, 5, 1, 2020, 2020, '', '402850test22.xlsx', 0, '2020-08-23 14:56:24'),
(20, 2, 33, 4, 4, 10, 4, 1, 2020, 2020, '', '3947102785131.jpg', 0, '2020-08-23 14:56:24'),
(21, 2, 34, 9, 4, 10, 4, 1, 2020, 2020, '', '', 0, '2020-08-23 14:56:24'),
(22, 2, 35, 10, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:56:24'),
(23, 2, 36, 11, 4, 10, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:56:24'),
(24, 3, 12, 5, 4, 10, 4, 1, 2020, 2020, '', '30206test33.docx', 0, '2020-08-23 14:58:06'),
(25, 3, 13, 5, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(26, 3, 14, 5, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(27, 3, 15, 5, 4, 10, 5, 1, 2020, 2020, '', '6660142842579.jpg', 0, '2020-08-23 14:58:06'),
(28, 3, 16, 6, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(29, 3, 17, 6, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(30, 3, 18, 6, 4, 10, 3, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(31, 3, 19, 7, 4, 10, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(32, 3, 20, 7, 4, 10, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(33, 3, 21, 7, 4, 10, 1, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(34, 3, 23, 8, 4, 10, 5, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(35, 3, 24, 8, 4, 10, 4, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06'),
(36, 3, 25, 8, 4, 10, 2, 1, 2020, 2020, '', '', 0, '2020-08-23 14:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `f_h`
--

CREATE TABLE `f_h` (
  `f_h_id` int(11) NOT NULL,
  `f_th_id` int(11) NOT NULL,
  `f_hdetail` varchar(250) NOT NULL,
  `f_hgroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_h`
--

INSERT INTO `f_h` (`f_h_id`, `f_th_id`, `f_hdetail`, `f_hgroup`) VALUES
(1, 1, 'ภาระงานในตำแหน่งวิชาการ (20คะแนน)', 1),
(2, 1, 'ภาระงานในตำแหน่งบริหาร (80 คะแนน)', 2),
(3, 2, '1. งานสอน', 3),
(4, 2, '2. งานวิจัยและงานวิชาการอื่น', 3),
(5, 3, '๑.	งานสอน', 4),
(6, 3, '๒. งานวิจัย (สิ่งประดิษฐ์) ตำรา(หนังสือ)', 4),
(7, 3, '๓. งานบริการวิชาการหรือพัฒนา', 4),
(8, 3, '๔. งานอื่น ๆ หรือ งานที่ได้รับมอบหมาย', 4),
(9, 2, '3. งานบริการวิชาการ', 3),
(10, 2, '4. งานทำนุบำรุงศิลปวัฒนธรรม\r\n', 3),
(11, 2, '5. งานกิจกรรมนักศึกษา ภาระงานอื่นๆ ที่ได้รับมอบหมาย\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `f_pam`
--

CREATE TABLE `f_pam` (
  `f_id` int(11) NOT NULL,
  `f_th` int(11) NOT NULL,
  `f_h_id` int(11) NOT NULL,
  `f_hhh` mediumtext NOT NULL,
  `f_score` int(11) NOT NULL,
  `f_pam_num` int(11) NOT NULL,
  `f_staus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_pam`
--

INSERT INTO `f_pam` (`f_id`, `f_th`, `f_h_id`, `f_hhh`, `f_score`, `f_pam_num`, `f_staus`) VALUES
(1, 1, 1, '- ภาระงานสอน<br>- ภาระงานวิจัยหรืองานวิชาการอื่น<br>- ภาระงานบริการวิชาการ<br>- ภาระงานทำนุบำรุงศิลปวัฒนธรรม<br>- ภาระงานเกี่ยวกับงานกิจการนักศึกษา ภาระงานอื่นๆ<br>				', 20, 1, 0),
(2, 1, 2, '- งานบริหาร (ภาระงานหลักตามภาระหน้าที่) (50 คะแนน)', 50, 2, 1),
(6, 1, 2, '- การบริหารงบประมาณ (10 คะแนน) <br>  - บริหารงานด้วยความซื่อสัตย์ สุจริต ไม่มีผลประโยชน์ด้านอื่นที่ขัดแย้งกับการปฏิบัติหน้าที่ <br>  - มีการบริหารจัดการงบประมาณภายใต้ขอบเขตอำนาจให้เป็นไปตามเป้าหมายของหน่วยงานและมหาวิทยาลัย <br>', 10, 3, 0),
(7, 1, 2, '- การบริหารงาน (20 คะแนน) <br> - มีการบริหารงานสอดคล้องกับระบบการบริหารของมหาวิทยาลัยรวมทั้งสอดคล้องกับความคาดหวังของความต้องการของหน่วยงานต่างๆ ทั้งภายในและภายนอกมหาวิทยาลัย <br>  - มีการเผยแพร่ข้อมูลของหน่วยงานอย่างเปิดเผย และเข้าถึงข้อมูลข่าวสารได้อย่างเสรีตามความเหมาะสม <br> - มีการสื่อสารหรือแจ้งข้อมูลที่จำเป็นและเป็นประโยชน์ในการทำงานอย่างสม่ำเสมอและถูกต้อง <br> - มีการบริหารงาน โดยคำนึงถึงบุคลากรหรือหน่วยงานที่เกี่ยวข้องให้ได้รับการบริการอย่างทัดเทียมกัน<br>', 20, 4, 0),
(8, 1, 2, '- งานบริหารงานตามยุทธศาสตร์ของมหาวิทยาลัยและของคณะ (30 คะแนน)', 30, 6, 0),
(9, 1, 2, '- การบริหารคน (20 คะแนน) <br>  - มีการกำกับ ติดตาม และประเมินผลการปฏิบัติงาน และพัฒนาบุคลากรอย่างทัดเทียมกัน <br>  - มีการกำหนดภาระหน้าที่หรือขั้นตอนการดำเนินงานของหน่วยงานและมอบหมายงานแก่บุคลากรในหน่วยงานได้เหมาะสมกับปริมาณและคุณภาพของงานที่ทำ <br>', 20, 5, 0),
(12, 3, 5, '<h6><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">สมรรถนะหลัก&nbsp; ด้านการมุ่งผลสมัฤทธิ์ (</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">Achievement Motivation)<br><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">มีพฤติกรรม &nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๑</u>&nbsp;แสดงความพยายามในการปฏิบัติงานสอนให้ดี แสดงออกว่าต้องการทำงานให้ดีขึ้น โดยทำบันทึก<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การสอน ที่สัมพันธ์กับ มคอ.3 (โครงการสอน)ในรายวิชาสอนเพื่อใช้ในชั่วโมงการสอน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๒</u>&nbsp; สามารถทำงานสอนได้ผลงานตามเป้าหมายที่วางไว้ มีการกำหนดเป้าหมายการสอนแต่ละครั้ง<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ชัดเจน ในบันทึกการสอน ที่มีความละเอียดรอบคอบ เอาใจใส่ และมีการตรวจสอบความถูกต้อง&nbsp;<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๓</u>&nbsp; สามารถปรับปรุงวิธีการสอนเพื่อให้ได้ผลงานที่มีประสิทธิภาพมากขึ้น&nbsp; มีการลงบันทึกในบันทึก<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การสอน เพื่อปรับปรุงวิธีการสอนหรือเนื้อหาสาระให้มีประสิทธิภาพมากขึ้น<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๔</u>&nbsp; สามารถกำหนดเป้าหมายรวมทั้งพัฒนางาน เพื่อให้ได้ผลงานโดดเด่น หรือแตกต่างอย่างมี<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; นัยสำคัญ พัฒนาระบบ ขั้นตอน&nbsp; วิธีการทำงาน (สอน) เพื่อให้ได้ผลงานโดดเด่น ไม่มีผู้ใดทำมาก่อน เช่น<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สามารถบรูณาการ มคอ. 3 (โครงการสอน) เข้ากับบันทึกการสอน เพื่อจัดเตรียมเอกสารกำหนดตำแหน่งทาง<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิชาการ&nbsp;<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๕&nbsp;</u>&nbsp;กลา้ตัดสินใจเพื่อให้บรรลุเป้าหมายของหน่วยงาน&nbsp; บริหารจัดการ&nbsp; เวลา ทรัพยากร เพื่อให้ได้ผล<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประ โยชน์สูงสุดต่อภารกิจด้านงานสอนของหน่วยงานตามแผนที่วางไว้&nbsp;</span></h6>', 5, 2, 0),
(13, 3, 5, '<h6><h6 style=\"font-size: 14px;\"><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">สมรรถนะหลัก&nbsp; ด้านการสั่งสมความเชี่ยวชาญในงานอาชีพ (</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">Expertise)<br><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">มีพฤติกรรม&nbsp;&nbsp; &nbsp;&nbsp;ระดับที่ ๑ แสดงความสนใจและตดิตามความรู้ใหม่ ๆ&nbsp; ในงานสอนของตนหรือที่เกี่ยวข้อง&nbsp; พัฒนาความรู้ของตน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ให้ ดียิ่งขึ้น มีการสืบค้นข้อมูลเพื่อใช้ แก้ไขปรับปรุงานสอน เช่น ทำบันทึกการสอนที่สัมพันธ์กับมคอ.3<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (โครงการสอน) ในรายวิชาที่สอน ในการสอนทุกครั้ง และมีการบันทึกข้อแก้ไขสำหรบัการปรับปรุงการสอน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\"><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ให้ดีขึ้นในครั้งต่อ ๆ ไป<br></span></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">ระดับที่ ๒</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">&nbsp;&nbsp;</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">มีความรู้ในวิชาการและเทคโนโลยีใหม่ ๆ ในสาขาวิชาของตน ซึ่งมีผลกระทบต่องานสอนในวิชาชีพ<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;ของตนและแสดงอยู่ในบันทึกการสอน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ระดับที่ ๓&nbsp; น าความรู้วิทยาการหรือเทคโนโลยีใหม่ มาใช้กับงานสอน โดยประยุกต์ใช้และแสดงออกอยู่ใน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; กิจกรรม ในบันทึกการสอน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ระดับที่ ๔&nbsp; ศึกษาพัฒนาตนเองให้มีความรู้ และความเชี่ยวชาญมากขึ้น ทั้งเชิงลึกและเชิงกว้างอย่างต่อเนื่อง<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;โดยสามารถนำความรู้ความเชี่ยวชาญงานสอนในวิชาชีพไปใช้ในงานวิชาการด้านอื่นเช่น&nbsp; วิจัย(สิ่งประดิษฐ์)<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ตำรา (หนังสือ) บทความวิชาการการบริการวิชาการ เป็นต้น<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับที่ ๕&nbsp; สนับสนุนการท างานของคนในสถาบันอุดมศึกษา ที่เน้นในความเชี่ยวชาญด้านวิทยาการต่าง ๆ&nbsp;<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สนับสนุนให้เกิดบรรยากาศแห่งความเชี่ยวชาญในองค์กรด้วยการจัดสรรทรัพยากรเครื่องมืออุปกรณ์ที่เอื้อ<br></span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">ต่อการพัฒนา</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">&nbsp;</span>&nbsp;&nbsp;</h6></h6>', 5, 3, 0),
(14, 3, 5, '<h6></h6><h6 style=\"font-size: 14px;\"></h6><h6><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">สมรรถนะเฉพาะฯ&nbsp;&nbsp; การตรวจสอบความถูกต้องตามกระบวนงาน (</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">Concern for order)&nbsp;<br><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">มีพฤติกรรม &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">ระดับที่ ๑ ต้องการความถูกต้อง ชัดเจนในงาน และรักษากฎระเบียบ โดยปฏิบัติตามกฎระเบียบ และขั้นตอนที่<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\"> กำหนดอย่างเคร่งครัด&nbsp;&nbsp;&nbsp;<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">ระดับที่ ๒&nbsp; ตรวจทานความถูกต้องของงานที่ตนรับผิดชอบ ในหน้าที่ตามภาระงานสอน อย่างละเอียดรอบคอบ<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">ให้ ถูกต้อง<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">ระดับที่ ๓&nbsp; ดูแลความถูกต้องของงานทั้งของตนและผู้เกี่ยวข้อง<br></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">ระดับที่ ๔</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">&nbsp;&nbsp;</span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt;\">ตรวจสอบความถูกต้องรวมถึงข้อมูลหรือโครงการที่เกี่ยวข้องกับกระบวนการสอน ตรวจสอบ<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">รายละเอียดความคืบหนา้ตามกำหนดเวลา หรือ ความถูกต้องครบถ้วน และคุณภาพของข้อมูล<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">ระดับที่ ๕&nbsp; พัฒนาระบบการตรวจสอบความถูกต้องของกระ บวนงานสอน เพื่อความถูกต้องตามขั้นตอน<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 19.9733px; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">และเพิ่ม คุณภาพของข้อมูล เช่นมีการจัดระบบการสอน&nbsp; พฤติกรรมในการปฏิบัติราชการฯ ตามสมรรถนะ</span></h6><h6><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">(เรื่อง) งานวิจัย (สิ่งประดิษฐ์) ตำรา (หนังสือ)&nbsp;</span><br></h6>', 5, 4, 0),
(15, 3, 5, '<h6></h6><h6 style=\"font-size: 14px;\"></h6><h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">สมรรถนะหลัก&nbsp;&nbsp;ด้านการยึดมั่นในความถูกต้องชอบธรรมและจริยธรรม (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Integrity)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">มีพฤติกรรม&nbsp; &nbsp;&nbsp;<u>&nbsp;ระดับที่๑</u> มีความสุจริต ปฏิบัติงานสอนด้วยความสุจริตถูกต้องและมีการควบคุมหรือทำการสอบในรายวิชาที่<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; รับผิดชอบให้เกิดความสุจริตเที่ยงธรรม&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่&nbsp; ๒</u> มีสัจจะเชื่อถือได้&nbsp; มีจิตสำนึกในความเป็นอาจารย์สอดแทรกความรู้ด้านคุณธรรมในการสอน<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เป็นตัวอย่างที่ดีต่อศิษย์<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> ระดับที่ ๓</u> ยึดมั่นในหลักการรักษาจรรยาบรรณวิชาชีพ ไม่เบี่ยงเบนด้วยอคติหรือผลประโยชน์&nbsp; และมี<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การดำเนินการสอนและสอบตามประกาศหรือกฎเกณฑ์ของมหาวิทยาลัย ระเบียบของหน่วยงานทุกระดับ&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๔</u>ยืนหยัดเพื่อความถูกต้อง&nbsp; กล้าตัดสินใจปฏิบัติภาระงานสอนด้วยความถูกต้องทั้งที่อาจก่อความ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ไม่พอใจ ต่อผู้เสียประโยชน์<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๕</u>&nbsp; อุทิศตนเพื่อความยุติธรรมยืนหยัดพิทักษ์ประโยชน์ของมหาวิทยาลัย และมีระบบการตัดเกรดที่<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เปิดเผย ยุติธรรมเป็นไปตามกฎเกณฑ์ให้กับผู้เรียน</span></h6></h6>', 5, 1, 0),
(16, 3, 6, '<h6></h6><h6 style=\"font-size: 14px;\"></h6><h6></h6><h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">สมรรถนะหลัก&nbsp;&nbsp;\r\n</span>&nbsp; &nbsp; &nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ด้านการยึดมั่นในความถูกต้องชอบธรรมและจริยธรรม (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Integrity)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">มีพฤติกรรม&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp; &nbsp; &nbsp; &nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๑</u> มีความความสุจริต\r\nปฏิบัติงานวิจัย(สิ่งประดิษฐ์) หรือตำรา (หนังสือ) ด้วยความสุจริตถูกต้อง<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nไม่แอบอ้างความคิดและผลงาน&nbsp;&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่&nbsp; ๒</u> มีสัจจะเชื่อถือได้&nbsp; มีการอ้างอิง&nbsp;\r\nแสดงการตรวจเอกสารชัดเจน&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๓</u>\r\nยึดมั่นในหลักการ รักษาจรรยาบรรณวิชาชีพ ไม่เบี่ยงเบนด้วยอคติหรือผลประโยชน์ คำนึง<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ถึงผลกระทบต่อสังคม&nbsp; ยึดมั่นในวัตถุประสงค์&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๔</u>\r\nยืนหยัดเพื่อความถูกต้อง&nbsp; กล้าตัดสินใจ\r\nทำงานด้วยการยึดหลักความถูกต้อง ทำงานได้สำเร็จ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ตามขั้นตอน\r\nและแผนการตรงตามเป้าหมาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๕&nbsp;</u> อุทิศตนเพื่อความยุติธรรม\r\nยืนหยัดพิทักษ์ประโยชน์ของมหาวิทยาลัย&nbsp;\r\nรับทุนงานวิจัยไม่ซ้ำซ้อน<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nซื่อสัตย์ต่อการใช้จ่ายงบประมาณ ไม่แสวงหาประโยชน์</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 5, 1, 0),
(17, 3, 6, '<h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">สมรรถนะหลัก&nbsp; ด้านการมุ่งผลสมัฤทธิ์ (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Achievement Motivation)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">มีพฤติกรรม &nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่ ๑</u> แสดงความพยายามในการปฏิบัติงานให้ด\r\nีแสดงออกว่าต้องการท างานให้ดีขี้น การเขียนตำรา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (หนังสือ) มีความก้าว\r\nหน้าอย่างสม่ำเสมอ ทำงานวิจัย (สิ่งประดิษฐ์) สอดคล้องกับประเด็นยุทธศาสตร์<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การพัฒนาประเทศตามแผนพัฒนาเศรษฐกิจ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๒</u>&nbsp; สามารถทำงานได้ผลงานตามเป้าหมายที่วางไว้\r\nมีการกำหนดเป้าหมายชัดเจน ดำเนินการตาม<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ขั้นตอนและระยะเวลาของแผนการดำเนินงาน<br>\r\n</span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ระดับที่ ๓\r\nสามารถปรับปรุงวิธีการทำงานเพื่อให้ได้ผลงานที่มีประสิทธิภาพมากขึ้น\r\nมีการจัดเก็บข้อมลูการวิจัย<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อย่างเป็นระบบควบคู่ไปกับการทำวิจัย\r\n(สิ่งประดิษฐ์) งานเขียนต้องมีบทวิิเคราะห์หรือบทพิสูจน์&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้อมูลมีที่มีและอ้างอิง\r\nได้&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๔</u> สามารถกำหนดเป้าหมายรวมทั้งพัฒนางาน\r\nเพื่อให้ได้ผลงานโดดเด่น หรือแตกต่างอย่างมนัยสำคัญ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;พัฒนาระบบขั้นตอน วิธีการทำงาน เพื่อให้ได้ผลงานโดดเด่น\r\nไม่มีผีูใดทำมาก่อน มีการวางแผนการเขียน<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; รายงานผลการวิจัย (สิ่งประดิษฐ์)\r\nมีการสร้างตัวอย่างแบบฝึกหัด ประกอบเนื้อหาคำอธิบายของตำรา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;(หนังสือ) จากข้อมูลในสภาวการณ์จริง หรือมีกรณีศึกษา<br>\r\n</span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๕</u>&nbsp; กล้าตัดสินใจเพื่อให้บรรลุเป้าหมายของหน่วยงาน\r\nบริหารจัดการเวลาทรัพยากรเพื่อให้ได้<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผลประโยชน์สูงสุดต่อภารกิจด้านการพัฒนางานวิจัย\r\n(สิ่งประดิษฐ์) ตำรา (หนังสือ)</span></h6><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(18, 3, 6, '<h6><h6><b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">สมรรถนะเฉพาะฯ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;\r\nfont-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;\r\nการสืบเสาะหาข้อมูล</span><span lang=\"TH\" style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\n</span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">(</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Information Seeking)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">มีพฤติกรรม&nbsp; <u>ระดับที่ ๑</u> หาข้อมลูเบื้องต้น\r\nปฏิบัติงานโดยใช้ข้อมลูที่มีอยู่หรือหาจากแหล่งข้อมลูที่มีอยู่แล้ว ถามผู้เกี่ยวข้อง<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; โดยตรงเพื่อให้ได้ข้อมูล<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๒</u>\r\nสืบเสาะค้นหาข้อมูลโดยใช้วิธีการต่าง ๆ นอกจากการตั้งคำถามสืบเสาะข้อมลูจากสิ่งที่อยู่ใกล้ชิด<br>\r\n</span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เหตุการณ์ที่ต้องการมากที่สุดมีความแม่นในการตรวจเอกสาร<br>\r\n</span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๓</u> แสวงหาข้อมูลเชิงลึก\r\nในประเด็นที่เกี่ยวข้องอย่างต่อเนื่อง จนได้มาถึงข้อมูลต่าง ๆ หรือพบโอกาสที่จะ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เป็นประโยชน์ต่อการปฏิบัติงาน\r\nมีการสืบค้นข้อมูลแวดล้อม&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๔</u>\r\nสืบค้นข้อมูลอย่างเป็นระบบวางแผนเก็บข้อมูลอย่างเป็นระบบตามช่วงเวลที่กำหนด<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n<u>ระดับที่ ๕</u> วางระบบสืบค้นเพื่อหาข้อมูลอย่างต่อเนื่อง\r\nเพื่อให้ได้ขอ้มูลที่ทันสมัย</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</h6><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(19, 3, 7, '<h6></h6><h6><h6><b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">พฤติกรรมในการปฏิบัติราชการฯ\r\nตามสมรรถนะ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"> (เรื่อง)\r\nงานพัฒนาหรือบริการทางวิชาการ<br> </span><b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">สมรรถนะหลัก</span></b><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;\r\nfont-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;\r\nด้านการยึดมั่นในความถูกต้องชอบธรรมและจริยธรรม (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Integrity)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">มีพฤติกรรม&nbsp; <u>ระดับที่ ๑</u> มีความสุจรติ ปฏิบัติหน้าที่ด้วยความสุจริต\r\nถูกต้องตามกฎเกณฑ์และวินัยตามหลักวิชาชีพแสดง<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ความเห็นตามหลักวิชาชีพอย่างสุจริต&nbsp;&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๒</u> มีสัจจะเชื่อถือได้\r\nงานวิชาการมีการตรวจเอกสารอย่างเพียงพอ รายละเอียดสมบูรณ์ชัดเจนพิสูจน์ได้<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; มีจิตสำนึกของความเป็นอาจารย์และข้าราชการ\r\nรักษาคำพูด มีสัจจะเชื่อถือได้<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๓</u>\r\nยึดมั่นในหลักการรักษาจรรยาบรรณวิชาชีพ ไม่เบี่ยงเบนด้วยอคติหรือผลประโยชน์ คำนึงถึงผลกระทบ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nต่อสังคมและวงนักวิชาการ&nbsp;\r\nเสียสละความสุขส่วนตน เพื่อให้เกิดประโยชน์ทางราชการหน่วยงาน</span></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\"><u>ระดับที่ ๔</u>\r\nยืนหยดัเพื่อความถูกต้อง กล้าตัดสินใจ\r\nปฏิบัติงานพัฒนาและบริการวิชาการของมหาวิทยาลัย<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ด้วยการยึดหลักความถูกต้องเป็นธรรม\r\nแม้อาจก่อความไม่พึงพอใจกับผู้เสยีผลประโยชน์ ทำงานได้สำเร็จตาม<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ขั้นตอนและ แผนการตรงตามเป้าหมาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๕</u>\r\nอุทิศตนเพื่อความยุติธรรม ยืนหยัดพิทักษ์ประโยชน์ของมหาวิทยาลัย\r\nปฏิบัติงานพัฒนาหรือบริการ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nทางวิชาการของมหาวิทยาลัยอย่างโปร่งใส และตรวจสอบได้</span></span></h6><p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(20, 3, 7, '<h6></h6><h6></h6><h6></h6><h6><p class=\"MsoNormal\" style=\"margin: 7.5pt 0in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">สมรรถนะหลัก</span><span style=\"font-size: 16pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;<span lang=\"TH\">ด้านการบริการที่ดี (</span>Service\r\nMind)<br>\r\n<span lang=\"TH\">มีพฤติกรรม</span>&nbsp;&nbsp;<u><span lang=\"TH\">ระดับที่ ๑</span></u>&nbsp;<span lang=\"TH\">สามารถให้บริการที่ผู้รับบริการต้องการด้วยความเต็มใจ สุภาพ\r\nให้ข้อมูลข่าวสารถูกต้องชัดเจน</span>&nbsp;<span lang=\"TH\">สามารถแจ้งความคืบหน้าในการดำเนินการเรื่อง\r\nหรือขั้นตอนการให้บริการได้ ประสานงานกับหน่วยงานที่เกี่ยวข้อง\r\nเพื่อให้เกิดการบริการที่ดี</span>&nbsp;<span lang=\"TH\"><br>\r\n</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><span lang=\"TH\">ระดับที่ ๒</span></u>&nbsp;<span lang=\"TH\">ช่วยแก้ปัญหาให้แก่ผู้รับบริการ\r\nช่วยแก้ปัญหาหรือหาแนวทางแก้ไขปัญหาที่เกิดขึ้น ไม่บ่ายเบี่ยงแก้ตัว หรือปัดภาระ<br>\r\n</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><span lang=\"TH\">ระดับที่ ๓</span></u>&nbsp;<span lang=\"TH\">ให้บริการที่เกินความคาดหวัง\r\nแม้ต้องใช้เวลาหรือความพยายามอย่างมาก</span>&nbsp;&nbsp;<span lang=\"TH\">ให้เวลาแก่ผู้รับบริการเป็นพิเศษ\r\nเพื่อช่วยแก้ปัญหา\r\nให้ข้อมูลข่าวสารที่เกี่ยวข้องกับการให้บริการนั้นอยู่แม้ข้อมลูนั้นผู้รับบริการไม่ได้ถามถึงนำเสนอวิธีการในการให้บริการที่รับบริการจะได้รับประโยชน์สูงสุด</span><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 7.5pt 0in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin: 7.5pt 0in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 16pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><span lang=\"TH\">ระดับที่ ๔</span></u>&nbsp;<span lang=\"TH\">เข้าใจและให้บริการที่ตรงตามความต้องการที่แท้จริงของผู้รับบริการได้\r\nเข้าใจหรือพยายามทำความเข้าใจด้วยวิธีการต่าง ๆ เพื่อให้บริการได้ตรงตามความต้องการที่แท้จริง\r\nให้คำแนะนำที่เป็น<br>\r\nประโยชน์ เพื่อตอบสนองความจำเป็นหรือความต้องการที่แท้จริงของผู้รับบริการ\r\nมีพฤติกรรม</span>&nbsp;<span lang=\"TH\"><br>\r\n</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><span lang=\"TH\">ระดับที่ ๕</span></u>&nbsp;<span lang=\"TH\">ให้บริการที่เป็นประโยชน์อย่างแท้จริงให้แก่ผู้รับบริการ\r\nคิดถึงผลประโยชน์ของผู้รับบริการในระยะยาวและพร้อมที่จะเปลี่ยนวิธีหรือขั้นตอนการให้บริการ\r\nเพื่อประโยชน์สูงสุดของผู้รับบริการ เป็นที่ปรึกษามสี่วนช่วยในการตัดสินใจที่ผู้รับบริการไว้วางใจ\r\nสามารถให้ความเห็นที่แตกต่างจากวิธี หรือขั้นตอนที่ผู้รับบริการต้องการ</span><o:p></o:p></span></p></h6>\r\n<h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p>\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n</span></h6>\r\n<p>\r\n</p>', 5, 1, 0),
(21, 3, 7, '<h6></h6><h6></h6><h6></h6><h6></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>สมรรถนะเฉพาะฯ</b>\r\nความผูกพันที่มีต่อสถาบันอุดมศึกษา (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Organization\r\nCommitment)<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>มีพฤติกรรม</b>&nbsp; <u>ระดับที่ ๑</u> ปฏิบัติตนเป็นส่วนหนึ่งของสถาบันอุดมศึกษา\r\nเคารพและถือปฏิบัติตามแบบแผนและธรรมเนียมปฏิบัติ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ของมหาวิทยาลัย\r\nตลอดจนหน่วยงานทุกระดับ<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๒</u>\r\nแสดงความภักดีต่อมหาวิทยาลัย พึงพอใจและภาคภูมิใจที่เป็นส่วนหนึ่งของมหาวิทยาลัยสร้าง<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ภาพลักษณ์และชื่อเสียงให้แก่มหาวิทยาลัย&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๓</u> มีส่วนร่วมในการผลักดันพันธกิจของมหาวิทยาลัย\r\nสนับสนุนพันธกิจของมหาวิทยาลัยจนบรรลุเป้าหมาย<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\">จัดลำดับความเร่งด่วนหรือความสำคัญของงานเพื่อให้พันธกิจบรรลุป้าหมาย</span></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><h6>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\"><u>ระดับที่ ๔</u>\r\nยึดถือประโยชน์ของมหาวิทยาลัยเป็นทที่ตั้ง โดยยึดถือประโยชน์ของมหาวิทยาลัยเป็นที่ตั้งก่อนจะคิดถึง<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">ประโยชน์บุคคลหรือตนเอง ยืนหยัดในการตดัสินใจที่เป็นประโยชน์ต่อมหาวิทยาลัยแม้ว่าการตัดสินใจนั้นอาจจะมี<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">ผู้ต่อต้านหรือแสดงความไม่เห็นด้วย<br>\r\n</span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>ระดับที่ ๕</u>\r\nเสียสละเพื่อประโยชนข์องมหาวิทยาลัยเสียสละหรือโน้มน้าวผู้อื่นให้เสียสละประโยชน์ส่วนตนเพื่อ<br></span><span lang=\"TH\" style=\"font-size: 14pt; line-height: 107%;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ประโยชน์ของมหาวิทยาลัย</span><br></h6><p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0);
INSERT INTO `f_pam` (`f_id`, `f_th`, `f_h_id`, `f_hhh`, `f_score`, `f_pam_num`, `f_staus`) VALUES
(23, 3, 8, '<h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>สมรรถนะหลัก</b>&nbsp;&nbsp; การทำงานเป็นทีม (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Teamwork)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>มีพฤติกรรม</b>&nbsp; <u>ระดับที่ ๑</u> ทำหน้าที่ของตนในทีมให้สำเร็จสนับสนุนการตัดสินใจของทีมหรือหน่วยงาน ทำงานในส่วนที่ตนได้รับ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; มอบหมายให้ข้อมูลที่เป็นประโยชน์ต่อการทำงานของทีมหรือหน่วยงาน<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๒</u> ให้ความร่วมมือในการทำงานกับเพื่อนร่วมงานสร้างสมัพันธ์ เข้ากับผู้อื่นในกลุ่มได้ดี ให้ความร่วมมือ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;เคารพซึ่งกันและกันทั้งต่อหน้าและลับหลัง<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>ระดับที่ ๓</u>ประสานความร่วมมือกับสมาชิก รับฟังความเห็นของสมาชิก และเต็มใจเรียนรู้จากผู้อื่นตัดสินใจหรือ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; วางแผนร่วมกันโดยระดมความคิดเห็นประสานและส่งเสริมสัมพันธภาพ เพื่อสนับสนุนการทำงานให้มีประสิทธิภาพ<br></span><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มากขึ้น</span><br><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>ระดับที่ ๕</u>&nbsp; สามารถนำทีมให้ปฏิบัติภารกิจให้ได้ผลสำเร็จ สร้างเสรมิความสามัคคีในทีมหรือหน่วยงาน โดย</span><br><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ไม่คำนึงความชอบหรือไม่ชอบส่วนตนคลี่คลาย หรือแก้ไขข้อขัดแย้งที่เกิดขึ้น ประสานสัมพันธ์ สร้างขวัญ</span><br><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; กำลังใจเพื่อปฏิบัติภารกิจของมหาวิทยาลัยให้บรรลุผล</span></h6></h6><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ระดับที่<span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">&nbsp; </span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">๔</span></u><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">&nbsp; </span><span style=\"font-family: &quot;TH SarabunPSK&quot;, sans-serif; font-size: 14pt; color: inherit;\">สนับสนุนช่วยเหลือเพื่อนร่วมทีมเพื่อให้งานประสบความสำเร็จยกย่องให้ กำลังใจ ช่วยเหลือเกื้อกูล</span></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เพื่อนร่วมงาน แม้ไม่มีการร้องขอ รักษามิตรภาพช่วยเหลือกันในวาระต่าง ๆ ให้งานสำเร็จ<br></span></h6></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p></span></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p></span></h6><p></p>', 5, 1, 0),
(24, 3, 8, '<h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>สมรรถนะเฉพาะฯ</b>&nbsp;&nbsp; ความยืดหยุ่นผ่อนปรน (</span><span style=\"font-family:&quot;TH SarabunPSK&quot;,sans-serif\">Flexibility)&nbsp;<br> <o:p></o:p></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>มีพฤติกรรม</b>&nbsp; &nbsp; &nbsp; <u>ระดับที่\r\n๑</u> มีความคล่องตัวในการปฏิบัติงาน ปรับตัวเข้ากับสภาพงานหรือไม่เอื้ออำนายต่อการปฏิบัติงาน&nbsp;&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๒</u> ยอมรับความจำเป็นทตี่้องปรับเปลี่ยน\r\nยอมรับความเหน็ของผู้อื่น เต็มใจที่จะปรับเปลี่ยนความคิด<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ทัศนคติ เมื่อได้รับข้อมลูใหม่<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๓</u>\r\nมีวิจารณญาณในการปรับใช้กฎระเบียบ ให้เหมาะสมกับสถานการณ์เพื่อผลสำเร็จของงานและ<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">วัตถุประสงค์ของหน่วยงาน<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๔</u> ปรับเปลี่ยนวิธีการดำเนินงาน\r\nปรับเปลี่ยนวิธีการปฏิบัติงานให้เข้ากับสถานการณ์ ปรับขั้นตอน<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">การทำงาน\r\nเพื่อเพิ่มประสิทธิภาพของหน่วยงาน<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๕</u> ปรับเปลี่ยนแผนกลยุทธ์\r\nปรับแผนงานเป้าหมาย หรือโครงการ เพื่อให้เหมาะสมกับสถานการณ์<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ที่ต้องเผชิญอยู่\r\nปรับเปลี่ยนโครงสร้าง หรือกระบวนงานเป็นเฉพาะกาล เพื่อให้รับกับสถานการณ์ที่กำลังเผชิญอยู่</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:\r\n107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;\r\nmso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p></o:p></p>\r\n\r\n</span></h6>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(25, 3, 8, '<h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6></h6><h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>สมรรถนะด้าน</b> การมาปฏิบัติราชการ&nbsp;<br> </span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>มีพฤติกรรม</b>&nbsp;<u>ระดับที่ ๑</u>&nbsp;ลาราชการ ๖ ครั้ง / มาสาย ๘ ครั้ง / ลาพักผ่อน ๓ ครั้งขึ้นไประหว่างภาคการศึกษา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๒</u>&nbsp; ลาราชการไม่เกิน ๕ ครั้ง / มาสาย ๖ - ๗ ครั้ง /ลาพักผ่อน ๓ ครั้ง ขึ้นไประหว่างภาคการศึกษา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๓</u>&nbsp; ลาราชการไม่เกิน ๔ ครั้ง / มาสาย ๔ - ๕ ครั้ง /ลาพักผ่อน ๒ ครั้ง ขึ้นไประหว่างภาคการศึกษา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๔</u>&nbsp; ลาราชการไม่เกิน ๓ ครั้ง / มาสาย ๑ - ๓ ครั้ง /ลาพักผ่อน ๑ ครั้ง ขึ้นไประหว่างภาคการศึกษา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><u>ระดับที่ ๕&nbsp;</u> ลาราชการไม่เกิน ๒ ครั้ง / ไม่มาสาย /ไม่ลาพักผ่อนระหว่างภาคการศึกษา<br></span><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><b>หมายเหตุ</b>&nbsp;&nbsp;&nbsp;&nbsp; ลาราชการ หมายถึง ลากิจและลาป่วย</span></h6></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p></span></h6><h6><span lang=\"TH\" style=\"font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:107%;font-family:&quot;TH SarabunPSK&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:TH\"><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p><p class=\"MsoNormal\"><o:p></o:p></p></span></h6><p></p>', 5, 1, 0),
(26, 2, 3, '<h6 style=\"text-indent:14.2pt\"><p class=\"MsoNormalCxSpFirst\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับความสำเร็จในการจัดทำ</span></b><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๑</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> มี\r\nมคอ.3 และ มคอ.5 ครบทุกรายวิชา</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๒</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๑ และมีการพัฒนาสื่อการสอน</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๓</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๒ และเข้าอบรม หรือสัมมนา หรือ ประชุมวิชาการไม่น้อยกว่า ๑\r\nโครงการ</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๔</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๓ และเข้าอบรม หรือสัมมนา หรือ\r\nประชุมวิชาการนับรวมกันไม่น้อยกว่า ๒ โครงการ</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpFirst\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๕</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๔ และเข้าอบรม หรือสัมมนา หรือ\r\nประชุมวิชาการนับรวมกันไม่น้อยกว่า ๓ โครงการ</span><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p></h6><p class=\"MsoNormal\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(33, 2, 4, '<h6 style=\"text-indent:14.2pt\"><p class=\"MsoNormalCxSpFirst\"><b><span lang=\"TH\" style=\"font-size:14.0pt;\r\nfont-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับความสำเร็จในการจัดทำ</span></b><b><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 1</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nมีหัวข้องานวิจัย(สิ่งประดิษฐ์) และผลการทดลองหรือข้อมูลเบี้องต้นที่จะนำไปสู่หัวข้องานวิจัย(สิ่งประดิษฐ์)\r\nหรือ มีการกำหนดชื่อตำรา(หนังสือ) จำนวนบท และชื่อบททุกบท พร้อมทั้งมีฉบับร่างที่มีเนื้อหาไม่ต่ำกว่าร้อยละ\r\n20 </span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nได้ใช้เอกสารประกอบการสอนหรือเอกสารคำสอน เสนอขอกำหนดตำแหน่งทางวิชาการต่อมหาวิทยาลัย</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nมีบทความวิจัยตีพิมพ์ในเอกสารการประชุมวิชาการระดับนานาชาติหรือวาระสารระดับนานาชาติไม่น้อยกว่า\r\n1 เรื่อง</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nผู้ทำงานวิจัยหรือสิ่งประดิษฐ์ทำเดี่ยวหรือหัวหน้าทีมวิจัยหรือสิ่งประดิษฐ์และได้รับทุนสนับสนุนจากถภายนอกที่ขอผ่านตามขั้นตอนของมหาวิทยาลัยอย่างน้อย\r\n1 เรื่อง</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nได้รับสิทธิบัตร 1 เรื่อง</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"> ได้การนำผลของการประเมินผลความสำเร็จของการจัดการความรู้ไปใช้พัฒนาปรับปรุงกระบวนการจัดการความรู้\r\nหรือมีหลักฐานการเผยแพร่รายงานผลการวิจัยในชั้นเรียน<o:p></o:p></span></p></h6><p class=\"MsoNormal\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p>', 5, 1, 0),
(34, 2, 9, '<p class=\"MsoNormalCxSpFirst\"><b><span lang=\"TH\" style=\"font-size:14.0pt;\r\nfont-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับความสำเร็จในการจัดทำ</span></b><b><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 1</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nมีหลักฐานการเตรียมทำโครงการให้บริการทางวิชาการ เพื่อพัฒนาคุณภาพชีวิตแก่บุคคล\r\nสังคม</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"> เป็นส่วนหนึ่งในกิจกรรมทางวิชาการกับองค์กรภายนอก</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 2</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นไปตามระดับที่ 1 และ มีการเสนอโครงให้บริการทางวิชาการต่อหน่วยงาน เพื่อพัฒนาคุณภาพชีวิตแก่บุคคล\r\nสังคม เพื่อพัฒนาคุณภาพชีวิต</span><span style=\"font-size:14.0pt;font-family:\r\n&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นส่วนหนึ่งในกิจกรรมทางวิชาการกับองค์กรภายนอกที่กิจกรรมยังคงดำเนินการอย่างต่อเนี่องเป็นเวลาไม่ต่ำกว่า\r\n1 เดือน</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 3</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นไปตามระดับที่ 2 และมีหลักฐานการดำเนินโครงการตามแผนงานของโครงการให้บริการทางวิชาการเพื่อพัฒนาคุณภาพชีวิตแก่บุคคล\r\nสังคม</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นส่วนหนึ่งในกิจกรรมทางวิชาการกับองค์กรภายนอกที่กิจกรรมยังคงดำเนินการอย่างต่อเนื่องเป็นเวลาไม่ต่ำกว่า\r\n2 เดือน</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nมีโครงการฝึกอบรมและบริการวิชาการที่จะดำเนินการในปีงบประมาณถัดไป</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 4</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นไปตามระดับที่ 3 และได้ดำเนินโครงการตามแผนงานของโครงการให้บริการทางวิชาการเพื่อพัฒนาคุณภาพชีวิตแก่บุคคล\r\nสังคม จนสิ้นสุดตามเป้าหมาย</span><span style=\"font-size:14.0pt;font-family:\r\n&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">ระดับที่ 5</span></b><b><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นผู้พิจารณาผลงานทางวิชาการในการเสนอขอตำแหน่งทางวิชาการ</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นที่ปรึกษาร่วมวิทยานิพนธ์ภายนอกมหาวิทยาลัย</span><span style=\"font-size:\r\n14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"> เป็นกรรมการพิจารณาข้อเสนอโครงกรวิจัยภายนอกมหาวิทยาลัย</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นกรรมการประเมินรายงานความก้าวหน้า หรือร่างรายงานฉบับสมบูรณ์โครงการวิจัยภายนอกมหาวิทยาลัย</span><span style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">หรือ</span></b><span lang=\"TH\" style=\"font-size:14.0pt;font-family:&quot;TH SarabunPSK&quot;,sans-serif\">\r\nเป็นกรรมการสอบโครงร่างวิทยานิพนธ์หรือวิยานิพนธ์ภายนอกมหาวิทยาลัย<o:p></o:p></span></p>', 5, 1, 0),
(35, 2, 10, '<p class=\"MsoNormalCxSpFirst\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับความสำเร็จในการจัดทำ</span></b><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๑</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> เข้าร่วมกจกรรมด้านศาสนา\r\nศิลปะ หรือวัฒนธรรมของหน่วยงาน มหาวิทยาลัย หรือองค์กรต่างๆ<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๒</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๑ โดยใช้เวลาเข้าร่วมโครงการกจกรรมด้านศาสนา ศิลปะ หรือวัฒนธรรมของหน่วยงาน\r\nมหาวิทยาลัย หรือองค์กรต่าง ๆ นับรวมได้ไม่ต่ำกว่าครึ่งวัน<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๓</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๒ โดยใช้เวลาเข้าร่วมโครงการกิจกรรมด้านศาสนา ศิลปะ หรือวัฒนธรรมของหน่วยงาน\r\nมหาวิทยาลัย หรือองค์กรต่าง ๆ นับรวมได้ไม่ต่ำกว่าหนึ่งวัน</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">หรือ เป็นกรรมการโครงการส่งเสริมศิลปวัฒนธรรมและจริยธรรม<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๔</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๓ โดยใช้เวลาเข้าร่วมโครงการกิจกรรมด้านศาสนา ศิลปะ หรือวัฒนธรรมของหน่วยงาน\r\nมหาวิทยาลัย หรือองค์กรต่าง ๆ นับรวมได้ไม่ต่ำกว่าสามวัน</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpFirst\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๕</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๔ โดยใช้เวลาเข้าร่วมโครงการกิจกรรมด้านศาสนา ศิลปะ หรือวัฒนธรรมของหน่วยงาน\r\nมหาวิทยาลัย หรือองค์กรต่าง ๆ นับรวมได้ไม่ต่ำกว่า 1 สัปดาห์</span><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p>', 5, 1, 0),
(36, 2, 11, '<p class=\"MsoNormalCxSpFirst\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับความสำเร็จในการจัดทำ</span></b><span style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๑</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> รับตำแหน่งอาจารย์ที่ปรึกษาประจำชั้นเรียน\r\nหรือโครงงาน หรือ โครงการ หรือมีการจัดกิจกรรมด้านการจัดการศึกษา\r\nหรือได้รับมอบหมายงานให้เป็นคณะทำงานของมหาวิทยาลัยหรือของคณะ หรือ ทำกิจกรรมการงานตามหน้าที่ที่ได้รับมอบหมายโดยหัวหน้าหน่วยงานชั้นต้น<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๒</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๑ และมีการติดตามนักศึกษาภายใต้การกำกับดูแลให้คำปรึกษาและมีการเข้าร่วมกิจกรรม\r\nหรือมีกิจกรรมด้านการจัดการศึกษาไม่ต่ำกว่า 2 กิจกรรม หรือ ได้รับมอบหมายงานให้เป็นคณะทำงานของมหาวิทยาลัยหรือของคณะไม่ต่ำกว่า\r\n3 งาน หรือ ทำกิจกรรมการงานตามหน้าที่ที่ได้รับมอบหมายโดยหัวหน้าหน่วยงานชั้นต้นและเป็นงานที่ต้องใช้เวลาปฏิบัติราชการไม่ต่ำกว่าครึ่งวัน<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๓</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๒ และมีการจัดทำเอกสารประกอบการให้คำปรึกษา หรือมีหรือมีกิจกรรมด้านการจัดการศึกษาไม่ต่ำกว่า\r\n3 กิจกรรม หรือ ได้รับมอบหมายงานให้เป็นคณะทำงานของมหาวิทยาลัยหรือของคณะไม่ต่ำกว่า\r\n5 งาน หรือ ทำกิจกรรมการงานตามหน้าที่ที่ได้รับมอบหมายโดยหัวหน้าหน่วยงานชั้นต้นและเป็นงานที่ต้องใช้เวลาปฏิบัติราชการไม่ต่ำกว่าหนึ่งวัน<o:p></o:p></span></p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๔</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๓ และมีแผนการที่ชัดเจนในการติดตามนักศึกษาภายใต้การกำกับดูแลให้คำปรึกษาและมีการเข้าร่วมกิจกรรม\r\nหรือมีกิจกรรมด้านการจัดการศึกษาไม่ต่ำกว่า 4 กิจกรรม หรือ ได้รับมอบหมายงานให้เป็นคณะทำงานของมหาวิทยาลัยหรือของคณะไม่ต่ำกว่า\r\n7 งาน หรือ ทำกิจกรรมการงานตามหน้าที่ที่ได้รับมอบหมายโดยหัวหน้าหน่วยงานชั้นต้นและเป็นงานที่ต้องใช้เวลาปฏิบัติราชการไม่ต่ำกว่า\r\n3 วัน<o:p></o:p></span></p><p class=\"MsoNormalCxSpFirst\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormalCxSpMiddle\" style=\"text-indent:14.2pt\"><b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ระดับที่ ๕</span></b><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;TH SarabunPSK&quot;, sans-serif; color: rgb(33, 37, 41); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\nเป็นไปตามระดับที่ ๔ และมีการจัดการทำแฟ้มเอกสารงานให้คำปรึกษาที่ได้ดำเนินการทั้งหมดและมีงานด้านการเป็นอาจารย์\r\nที่ปรึกษามากกว่า 1 งาน หรือมีกิจกรรมด้านการจัดการศึกษาไม่ต่ำกว่า 5 กิจกรรม หรือเป็นผู้มีส่วนร่วมในการจัดตั้งโครงการดังกล่าว\r\nหรือได้รับมอบหมายงานให้เป็นคณะทำงานของมหาวิทยาลัยหรือของคณะไม่ต่ำกว่า 10 งาน\r\nหรือทำกิจกรรมการงานตามหน้าที่ที่ได้รับมอบหมายโดยหัวหน้าหน่วยงานชั้นต้นโดยเป็นงานที่ต้องใช้เวลาปฏิบัติราชการคอยเฝ้าดูเพื่อปรับปรุงผลงานการปฏิบัติราชการให้พัฒนาดีขึ้น<o:p></o:p></span></p>', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_phhh`
--

CREATE TABLE `f_phhh` (
  `f_phhh_id` int(11) NOT NULL,
  `f_phhh_user_c_id` int(11) NOT NULL,
  `f_phhh_type_id` int(11) NOT NULL,
  `f_phhh_detail1` varchar(2500) NOT NULL,
  `f_phhh_detail2` varchar(250) NOT NULL,
  `f_phhh_detail3` varchar(250) NOT NULL,
  `f_phhh_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_phhh`
--

INSERT INTO `f_phhh` (`f_phhh_id`, `f_phhh_user_c_id`, `f_phhh_type_id`, `f_phhh_detail1`, `f_phhh_detail2`, `f_phhh_detail3`, `f_phhh_status`) VALUES
(1, 10, 0, 'test1', 'test2', 'test3', 0),
(2, 10, 0, ' ', ' ', ' ', 0),
(3, 10, 0, ' ', ' ', ' ', 0),
(4, 10, 0, ' ', ' ', ' ', 0),
(5, 10, 0, ' ', ' ', ' ', 0),
(6, 10, 0, ' ', ' ', ' ', 0),
(7, 7, 0, ' tset1', ' test2', ' test3', 0),
(8, 7, 0, ' ', ' ', ' ', 0),
(9, 7, 0, ' ', ' ', ' ', 0),
(10, 7, 0, ' ', ' ', ' ', 0),
(11, 7, 0, ' ', ' ', ' ', 0),
(12, 7, 0, ' ', ' ', ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_save_score`
--

CREATE TABLE `f_save_score` (
  `s_id` int(11) NOT NULL,
  `s_u_c` int(11) NOT NULL,
  `s_f_h` int(11) NOT NULL,
  `s_f_ac_h_id` varchar(1) NOT NULL,
  `s_f_score` varchar(11) NOT NULL,
  `s_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_save_score`
--

INSERT INTO `f_save_score` (`s_id`, `s_u_c`, `s_f_h`, `s_f_ac_h_id`, `s_f_score`, `s_status`) VALUES
(1, 7, 2, '3', '1.5', 0),
(2, 7, 2, '4', '1.2', 0),
(3, 7, 2, '3', '1.5', 0),
(4, 7, 2, '4', '1.2', 0),
(5, 7, 2, '9', '0.45', 0),
(6, 7, 2, '1', '0.2', 0),
(7, 7, 2, '1', '0.15', 0),
(8, 7, 2, '3', '1.5', 0),
(9, 7, 2, '4', '1.2', 0),
(10, 7, 2, '9', '0.45', 0),
(11, 7, 2, '1', '0.2', 0),
(12, 7, 2, '1', '0.15', 0),
(13, 7, 2, '3', '1.5', 0),
(14, 7, 2, '4', '1.2', 0),
(15, 7, 2, '9', '0.45', 0),
(16, 7, 2, '1', '0.2', 0),
(17, 7, 2, '1', '0.15', 0),
(18, 7, 2, '3', '1.5', 0),
(19, 7, 2, '4', '1.2', 0),
(20, 7, 2, '9', '0.45', 0),
(21, 7, 2, '1', '0.2', 0),
(22, 7, 2, '1', '0.15', 0),
(23, 7, 2, '3', '1.5', 0),
(24, 7, 2, '4', '1.2', 0),
(25, 7, 2, '9', '0.45', 0),
(26, 7, 2, '1', '0.2', 0),
(27, 7, 2, '1', '0.15', 0),
(28, 7, 2, '3', '1.5', 0),
(29, 7, 2, '4', '1.2', 0),
(30, 7, 2, '9', '0.45', 0),
(31, 7, 2, '1', '0.2', 0),
(32, 7, 2, '1', '0.15', 0),
(33, 7, 3, '5', '4', 0),
(34, 7, 3, '5', '3', 0),
(35, 7, 3, '5', '2', 0),
(36, 7, 3, '5', '5', 0),
(37, 7, 3, '6', '1', 0),
(38, 7, 3, '6', '2', 0),
(39, 7, 3, '6', '3', 0),
(40, 7, 3, '7', '4', 0),
(41, 7, 3, '7', '5', 0),
(42, 7, 3, '7', '4', 0),
(43, 7, 3, '8', '3', 0),
(44, 7, 3, '8', '2', 0),
(45, 7, 3, '8', '1', 0),
(46, 10, 2, '3', '1.5', 0),
(47, 10, 2, '4', '1.2', 0),
(48, 10, 2, '9', '0.6', 0),
(49, 10, 2, '1', '0.3', 0),
(50, 10, 2, '1', '0.3', 0),
(51, 10, 3, '5', '4', 0),
(52, 10, 3, '5', '3', 0),
(53, 10, 3, '5', '3', 0),
(54, 10, 3, '5', '5', 0),
(55, 10, 3, '6', '3', 0),
(56, 10, 3, '6', '3', 0),
(57, 10, 3, '6', '3', 0),
(58, 10, 3, '7', '2', 0),
(59, 10, 3, '7', '2', 0),
(60, 10, 3, '7', '1', 0),
(61, 10, 3, '8', '5', 0),
(62, 10, 3, '8', '4', 0),
(63, 10, 3, '8', '2', 0);

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
(1, 'ตอนที่ ๑ การประเมินผลการปฏิบัติงาน ผู้บริหารสายวิชาการ (คณบดี/ผู้อำนวยการสถาบัน/สำนัก)', 1, 1),
(2, 'ข้อตกลงและแบบประเมินผลสัมฤทธิ์ของงานข้าราชการพลเรือนในสถาบันอุดมศึกษา (องค์ประกอบที่ ๑) ', 2, 0),
(3, 'แบบประเมินพฤติกรรมในการปฏิบัติราชการของข้าราชการตามสมรรถนะฯ ของข้าราชการพลเรือนในสถาบันอุดมศึกษา (องค์ประกอบที่ ๒)  ตำแหน่งวิชาการ', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kana`
--

CREATE TABLE `kana` (
  `kana_id` int(11) NOT NULL,
  `kana_detail` varchar(250) NOT NULL,
  `kana_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kana`
--

INSERT INTO `kana` (`kana_id`, `kana_detail`, `kana_status`) VALUES
(1, 'วิศวกรรมศาสตร์', 0),
(2, 'ครุศาสตร์อุตสาหกรรม', 0),
(3, 'เทคโนโลยีคหกรรมศาสตร์', 0),
(4, 'ศิลปศาสตร์', 0),
(5, 'อุตสาหกรรมสิ่งทอ', 0),
(6, 'บริหารธุรกิจ', 0),
(7, 'วิทยาศาสตร์และเทคโนโลยี', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kanzon`
--

CREATE TABLE `kanzon` (
  `kanzon_id` int(11) NOT NULL,
  `kanzon_user_id` int(11) NOT NULL,
  `kanzon_detail` varchar(100) NOT NULL,
  `kanzon_term` int(11) NOT NULL,
  `kanzon_file` varchar(255) NOT NULL,
  `kanzon_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kanzon`
--

INSERT INTO `kanzon` (`kanzon_id`, `kanzon_user_id`, `kanzon_detail`, `kanzon_term`, `kanzon_file`, `kanzon_status`) VALUES
(1, 11, 'สอนภาคเรียนที่ 1 ตารางสอน', 2, '539920_test.xlsx', 0),
(2, 2, 'การเรียนการสอนภาคฤดูร้อน 2563 ', 1, '', 0),
(3, 4, 'งานวิชาการ', 1, '428857_BDDSMid_61605180032-7.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kan_activity`
--

CREATE TABLE `kan_activity` (
  `kan_activity_id` int(11) NOT NULL,
  `name_activity` varchar(200) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `activity_file` varchar(255) NOT NULL,
  `kan_activity_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kan_activity`
--

INSERT INTO `kan_activity` (`kan_activity_id`, `name_activity`, `detail`, `activity_file`, `kan_activity_status`) VALUES
(1, 'กิจกรรมพัฒนาศักยภาพบุคลากร', 'มอบหมายหน้าที่ให้คณะบริหารธุรกิจ', '72492_test2.xlsx', 0),
(2, 'กิจกรรมบริจาคโลหิต', 'มอบหมายให้จัดหาคนดูแล', '802444_test.xlsx', 0),
(4, 'กิจกรรมบริจาคโลหิต', 'เวลา วันที่', '213884_BDDSMid_61605180032-7.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kan_la`
--

CREATE TABLE `kan_la` (
  `la_id` int(11) NOT NULL,
  `la_user_id` int(11) NOT NULL,
  `la_type` int(11) NOT NULL,
  `la_start` date NOT NULL,
  `la_end` date NOT NULL,
  `la_total` int(11) NOT NULL,
  `la_balance` int(11) NOT NULL,
  `la_file` varchar(255) NOT NULL,
  `la_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kan_la`
--

INSERT INTO `kan_la` (`la_id`, `la_user_id`, `la_type`, `la_start`, `la_end`, `la_total`, `la_balance`, `la_file`, `la_status`) VALUES
(1, 10, 2, '2020-08-01', '2020-08-03', 5, 12, 'ไม่มีไฟล์', 0),
(2, 11, 1, '2020-08-03', '2020-08-08', 5, 12, 'ไม่มีไฟล์', 0),
(3, 2, 0, '2020-09-23', '2020-09-24', 1, 3, '282497BDDSMid_61605180032-7.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kan_research`
--

CREATE TABLE `kan_research` (
  `kan_research_id` int(11) NOT NULL,
  `name_th` varchar(200) NOT NULL,
  `research_file` varchar(255) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `research_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kan_research`
--

INSERT INTO `kan_research` (`kan_research_id`, `name_th`, `research_file`, `detail`, `research_status`) VALUES
(1, 'งานวิจัยเรื่องการประเมินงานบุคลครกร', '290048_test.xlsx', 'รายละเอียดของงานวิจัย 1', 0),
(2, 'เรื่องการวิเคราะห์ข้อมูลของมหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ', '564919_test2.xlsx', 'รายละเอียด', 0),
(3, 'งานวิจัยพัฒนาเว็บไซต์', '666958_BDDSMid_61605180032-7.docx', 'ทดสสอบบ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_user_id` int(11) NOT NULL,
  `n_head` varchar(250) NOT NULL,
  `n_detail` varchar(2500) NOT NULL,
  `n_status` int(11) NOT NULL,
  `n_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_user_id`, `n_head`, `n_detail`, `n_status`, `n_time`) VALUES
(1, 2, 'ประกาศ สำหรับ นักศึกษาชั้นปีที่ 1', '<p><b>นักศึกษาชั้นปีที่ 1 สามารถเข้าใช้งานระบบประเมินการสอนได้ดังต่อไปนี้</b></p><p>1.เข้าไปที่ mis.rmutk.ac.th</p><p>2.ให้กรอก Username และ Password ในการเข้าใช้งานดังต่อไปนี้               Username : รหัสนักศึกษาไม่มีขีด    Password  : รหัสบัตรประชาชนไม่มีขีด</p><p>3.แล้วคลิกที่ปุ่ม Login สีเขียว</p><p>4.แล้วคลิกที่ปุ่ม \"ประเมินการสอน\"หมายเหตุ : ถ้าลองแล้วยังใช้งานไม่ได้ ให้แจ้งปัญหามาที่ \"gg.gg/misregis\"กรอกข้อมูลให้ครบทุกช่อง เพื่อที่เจ้าหน้าที่จะดำเนินการแก้ไขให้</p><p><br></p>', 0, '2020-06-16 13:47:18'),
(2, 2, 'teste 413', '<blockquote class=\"blockquote\"><p>estestet</p></blockquote><ol><li>asdasdas</li><li>asdsad</li><li>112</li></ol>', 1, '2020-06-16 13:47:18'),
(3, 2, 'ประกาศ ระบบการประเมินการสอน ปีการศึกษา 1/2563', '<p><span style=\"color: rgb(255, 0, 255); font-family: Arial, Helvetica, sans-serif; font-size: 13px;\"><b>สามารถประเมินการสอน 1/2563 ได้ตั้งแต่วันที่ 10 ตุลาคม 2563 เวลา 9.00 น. เป็นต้นไป</b></span><br></p><div style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 13px;\"><span mce_style=\"color: #ff00ff;\" style=\"color: rgb(255, 0, 255);\"></span><span mce_style=\"color: #0000ff;\" style=\"color: rgb(0, 0, 255);\">นักศึกษาที่ไม่สามารถเข้าสู่ระบบเพื่อประเมินการสอน หรือ ไม่สามารถเล่นอินเตอร์เน็ตภายในมหาวิทยาลัยได้</span><span mce_style=\"color: #0000ff;\"><span mce_style=\"color: #ff0000;\" style=\"color: rgb(255, 0, 0);\">&nbsp;<br>สามารถเข้าไปที่<br>1.ให้ login เข้า Wifi ของมหาวิทยาลัย<br>&nbsp; &nbsp;Username : รหัสนักศึกษาไม่มีขีด<br>&nbsp; &nbsp;Password &nbsp;: รหัสบัตรประชาชนไม่มีขีด<br>2.เข้าไปที่ \"gg.gg/misregis\"</span></span></div><p><span mce_style=\"color: #ff0000;\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: rgb(255, 0, 0);\">3.กรอกข้อมูลให้เรียบร้อย<br>4.Username และ Password จะใช้งานได้ภายในวันที่ 20 ธันวาคม 2563<br>หมายเหตุ : ให้ใช้โทรศัพท์มือถือหรือคอมพิวเตอร์ในการใช้งาน</span></p><p><br></p><p> 							</p>', 0, '2020-06-16 13:47:18'),
(4, 2, 'แจ้งประกาศ', 'เรื่องทดสอบ', 0, '2020-09-22 14:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_management`
--

CREATE TABLE `order_management` (
  `order_id` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `order_time` varchar(200) NOT NULL,
  `order_where` varchar(200) NOT NULL,
  `order_detail` varchar(255) NOT NULL,
  `order_file` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_management`
--

INSERT INTO `order_management` (`order_id`, `order_user_id`, `order_time`, `order_where`, `order_detail`, `order_file`, `order_status`) VALUES
(4, 2, 'วันที่ 19 เมษายน 2563 ', 'คณบดี,คณะบริหารธุรกิจ', 'มอบหมายงานให้ ตามคำสี่งเลขที่ ......', 'excal', 1),
(5, 5, 'วันที่ 10 เมษายน 2563 ', 'จากสำนักงบประมาณ,คณะบดี', 'คั่งสั่งเลขที่ 1/2563 ...........', 'word.xlsx', 1),
(7, 10, '2020-09-23', 'คณะบริหาร', 'ทดสอบ', '389208_BDDSMid_61605180032-7.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `saka`
--

CREATE TABLE `saka` (
  `saka_id` int(11) NOT NULL,
  `saka_detail` varchar(250) NOT NULL,
  `saka_laksut` varchar(250) NOT NULL,
  `saka_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saka`
--

INSERT INTO `saka` (`saka_id`, `saka_detail`, `saka_laksut`, `saka_status`) VALUES
(2, 'วิศวกรรมไฟฟ้า', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมไฟฟ้า', 0),
(3, 'วิศวกรรมอิเล็คทรอนิคส์และโทรคมนาคม', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอิเล็คทรอนิคส์และโทรคมนาคม', 0),
(4, 'วิศวกรรมโยธา', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมโยธา', 0),
(5, 'วิศวกรรมสำรวจ', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมสำรวจ', 0),
(6, 'วิศวกรรมเครื่องกล', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเครื่องกล', 0),
(7, 'วิศวกรรมอุตสาหการ', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอุตสาหการ', 0),
(8, 'วิศวกรรมเคมี', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเคมี', 0),
(9, 'วิศวกรรมการผลิตความแม่นยำสูง', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมการผลิตความแม่นยำสูง', 0),
(10, 'วิศวกรรมซ่อมบำรุงอากาศยาน', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมซ่อมบำรุงอากาศยาน', 0),
(11, 'วิศวกรรมอัตโนมัติและหุ่นยนต์', 'วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมอัตโนมัติและหุ่นยนต์', 0),
(12, 'วิศวกรรมเครื่องกล', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิชาวิศวกรรมเครื่องกล', 0),
(13, 'วิศวกรรมอุตสาหการ', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิชาวิศวกรรมอุตสาหการ', 0),
(14, 'เทคโนโลยีอุตสาหการ', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิชาเทคโนโลยีอุตสาหการ', 0),
(15, 'เทคโนโลยีวิศวกรรมคอมพิวเตอร์', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิชาเทคโนโลยีวิศวกรรมคอมพิวเตอร์', 0),
(16, 'อาหารและโภชนาการ', 'คหกรรมศาสตรบัณฑิต สาขาวิชาอาหารและโภชนาการ', 0),
(17, 'ธุรกิจอาหาร', 'คหกรรมศาสตรบัณฑิต สาขาวิชาธุรกิจอาหาร', 0),
(18, 'เทคโนโลยีเสื้อผ้าและแพตเทิร์น', 'คหกรรมศาสตรบัณฑิต สาขาวิชาเทคโนโลยีเสื้อผ้าและแพตเทิร์น', 0),
(19, 'การออกแบบแฟชั่น', 'เทคโนโลยีบัณฑิต สาขาวิชาการออกแบบแฟชั่น', 0),
(20, 'วิทยาศาสตร์และเทคโนโลยีการอาหาร', 'วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาศาสตร์และเทคโนโลยีการอาหาร', 0),
(21, 'การพัฒนาผลิตภัณฑ์อาหาร', 'วิทยาศาสตรบัณฑิต สาขาวิชาการพัฒนาผลิตภัณฑ์อาหาร', 0),
(22, 'คหกรรมศาสตร์ศึกษา', 'ศึกษาศาสตรบัณฑิต สาขาวิชาคหกรรมศาสตร์ศึกษา', 0),
(23, 'ภาษาอังกฤษเพื่อการสื่อสารสากล', 'ศิลปศาสตรบัณฑิต สาขาวิชาภาษาอังกฤษเพื่อการสื่อสารสากล', 0),
(24, 'ภาษาจีนเพื่อการสื่อสาร', 'ศิลปศาสตรบัณฑิต สาขาวิชาภาษาจีนเพื่อการสื่อสาร', 0),
(25, 'ภาษาญี่ปุ่น', 'ศิลปศาสตรบัณฑิต สาขาวิชาภาษาญี่ปุ่น', 0),
(26, 'การท่องเที่ยว', 'ศิลปศาสตรบัณฑิต สาขาวิชาการท่องเที่ยว', 0),
(27, 'การโรงแรม', 'ศิลปศาสตรบัณฑิต สาขาวิชาการโรงแรม', 0),
(28, 'การพัฒนาผลิตภัณฑ์ภูมิปัญญาไทย', 'ศิลปศาสตรบัณฑิต สาขาวิชาการพัฒนาผลิตภัณฑ์ภูมิปัญญาไทย', 0),
(29, 'นวัตกรรมสิ่งทอ', 'วิทยาศาสตรบัณฑิต สาขาวิชานวัตกรรมสิ่งทอ', 0),
(30, 'ออกแบบสิ่งทอและแฟชั่น', 'เทคโนโลยีบัณฑิต สาขาวิชาออกแบบสิ่งทอและแฟชั่น', 0),
(31, 'เทคโนโลยีสิ่งทอ', 'วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสิ่งทอ', 0),
(32, 'การบัญชี', 'บัญชีบัณฑิต', 0),
(33, 'การเงิน', 'บริหารธุรกิจบัณฑิต สาขาวิชาการเงิน', 0),
(34, 'การประเมินราคาทรัพย์สิน', 'บริหารธุรกิจบัณฑิต สาขาวิชาการประเมินราคาทรัพย์สิน', 0),
(35, 'การตลาด', 'บริหารธุรกิจบัณฑิต สาขาวิชาการตลาด', 0),
(36, 'การจัดการ', 'บริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ', 0),
(37, 'การสื่อสารธุรกิจระหว่างประเทศ', 'บริหารธุรกิจบัณฑิต สาขาวิชาการสื่อสารธุรกิจระหว่างประเทศ', 0),
(38, 'ระบบสารสนเทศ', 'บริหารธุรกิจบัณฑิต สาขาวิชาระบบสารสนเทศ', 0),
(39, 'เทคโนโลยีสารสนเทศและธุรกิจดิจิทัจ', 'เทคโนโลยีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศและธุรกิจดิจิทัจ', 0),
(40, 'เคมี', 'วิทยาศาสตรบัณฑิตเคมี', 0),
(41, 'เทคโนโลยีและการจัดการความปลอดภัยของอาหาร', 'วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีและการจัดการความปลอดภัยของอาหาร', 0),
(42, 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์', 0),
(43, 'เทคโนโลยีสารสนเทศ', 'วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ', 0),
(44, 'วิทยาศาสตร์เพื่อสุขภาพและความงาม', 'วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาศาสตร์เพื่อสุขภาพและความงาม', 0),
(45, 'ออกแบบผลิตภัณฑ์อุตสาหกรรม', 'เทคโนโลยีบัณฑิต สาขาวิชาออกแบบผลิตภัณฑ์อุตสาหกรรม', 0),
(46, 'เทคโนโลยีการถ่ายภาพและภาพยนตร์', 'เทคโนโลยีบัณฑิต สาขาวิชาเทคโนโลยีการถ่ายภาพและภาพยนตร์', 0),
(47, 'เทคโนโลยีการพิมพ์', 'เทคโนโลยีบัณฑิต สาขาวิชาเทคโนโลยีการพิมพ์', 0),
(48, 'เทคโนโลยีเครื่องเรือนและการออกแบบ', 'เทคโนโลยีบัณฑิต สาขาวิชาเทคโนโลยีเครื่องเรือนและการออกแบบ', 0),
(49, 'เทคโนโลยีการโทรทัศน์และวิทยุกระจายเสียง\r\n', 'เทคโนโลยีบัณฑิต สาขาวิชาเทคโนโลยีการโทรทัศน์และวิทยุกระจายเสียง			', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(11) NOT NULL,
  `upload_detail` varchar(250) NOT NULL,
  `upload_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `used_time`
--

CREATE TABLE `used_time` (
  `used_time_id` int(11) NOT NULL,
  `used_time_user_id` int(11) NOT NULL,
  `used_date` varchar(255) NOT NULL,
  `used_time_detail` varchar(255) NOT NULL,
  `used_time_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `used_time`
--

INSERT INTO `used_time` (`used_time_id`, `used_time_user_id`, `used_date`, `used_time_detail`, `used_time_status`) VALUES
(1, 2, '20 กันยายน 2563', 'เข้าสู่ระบบสำเร็จ', 0),
(2, 2, '19 กันยายน 2563', 'เข้าสู่ระบบสำเร็จ', 0),
(3, 3, '15 กันยายน 2563', 'เข้าสู่ระบบสำเร็จ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_tumn` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_kana_id` int(11) NOT NULL,
  `user_saka_id` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `user_tumn`, `user_kana_id`, `user_saka_id`, `user_status`) VALUES
(2, 'admin', 'admin', '443322', '123456', 'จนท.', 1, 2, 1),
(3, 'Prasong', 'Ekaluck', '443323', '123456', 'จนท.', 1, 2, 3),
(4, 'Traipoom', 'Chatwilai', '443324', '123456', 'พนง.', 1, 2, 2),
(5, 'Traipoomppp', 'Chatwilaiiii', '443325', '123456', 'พนง.', 1, 2, 0),
(6, 'Traip', 'Chat', '443326', '123456', 'พนง.', 1, 2, 0),
(7, 'กหฟกาส่าส', 'พฟกาหสวาสว', '147852', '123456', 'ผู้ถูกประเมิน', 1, 2, 0),
(8, 'สกวหฟสกหวสฟ', 'กฟหกฟสหก่าาส', 'test', '123456', 'ผู้ถูกประเมินทดสอบ', 1, 2, 0),
(9, 'sadsadsad', 'sadsadsadsa', 'a123456', '123456', 'dsadsadsa', 7, 43, 0),
(10, 'ทรงวุฒิ', 'ใจดี', 'abc', '123456', 'บุคลากร', 1, 12, 0),
(11, 'สมชาย', 'สมศรี', 'dfg', '123456', 'รองผู้ช่วย', 1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arts_and_culture`
--
ALTER TABLE `arts_and_culture`
  ADD PRIMARY KEY (`artsculture_id`);

--
-- Indexes for table `f_action`
--
ALTER TABLE `f_action`
  ADD PRIMARY KEY (`f_ac_id`);

--
-- Indexes for table `f_h`
--
ALTER TABLE `f_h`
  ADD PRIMARY KEY (`f_h_id`);

--
-- Indexes for table `f_pam`
--
ALTER TABLE `f_pam`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `f_phhh`
--
ALTER TABLE `f_phhh`
  ADD PRIMARY KEY (`f_phhh_id`);

--
-- Indexes for table `f_save_score`
--
ALTER TABLE `f_save_score`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `f_th`
--
ALTER TABLE `f_th`
  ADD PRIMARY KEY (`f_thid`);

--
-- Indexes for table `kana`
--
ALTER TABLE `kana`
  ADD PRIMARY KEY (`kana_id`);

--
-- Indexes for table `kanzon`
--
ALTER TABLE `kanzon`
  ADD PRIMARY KEY (`kanzon_id`);

--
-- Indexes for table `kan_activity`
--
ALTER TABLE `kan_activity`
  ADD PRIMARY KEY (`kan_activity_id`);

--
-- Indexes for table `kan_la`
--
ALTER TABLE `kan_la`
  ADD PRIMARY KEY (`la_id`);

--
-- Indexes for table `kan_research`
--
ALTER TABLE `kan_research`
  ADD PRIMARY KEY (`kan_research_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `order_management`
--
ALTER TABLE `order_management`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `saka`
--
ALTER TABLE `saka`
  ADD PRIMARY KEY (`saka_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `used_time`
--
ALTER TABLE `used_time`
  ADD PRIMARY KEY (`used_time_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arts_and_culture`
--
ALTER TABLE `arts_and_culture`
  MODIFY `artsculture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_action`
--
ALTER TABLE `f_action`
  MODIFY `f_ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `f_h`
--
ALTER TABLE `f_h`
  MODIFY `f_h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `f_pam`
--
ALTER TABLE `f_pam`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `f_phhh`
--
ALTER TABLE `f_phhh`
  MODIFY `f_phhh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `f_save_score`
--
ALTER TABLE `f_save_score`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `f_th`
--
ALTER TABLE `f_th`
  MODIFY `f_thid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kana`
--
ALTER TABLE `kana`
  MODIFY `kana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kanzon`
--
ALTER TABLE `kanzon`
  MODIFY `kanzon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kan_activity`
--
ALTER TABLE `kan_activity`
  MODIFY `kan_activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kan_la`
--
ALTER TABLE `kan_la`
  MODIFY `la_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kan_research`
--
ALTER TABLE `kan_research`
  MODIFY `kan_research_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_management`
--
ALTER TABLE `order_management`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `saka`
--
ALTER TABLE `saka`
  MODIFY `saka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `used_time`
--
ALTER TABLE `used_time`
  MODIFY `used_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
