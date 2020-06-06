
<?php 

$rob = $_GET['rob'];
$y = $_GET['y'];
$yy = $_GET['yy'];
//รอบที่ประเมิน

$nameh = $_GET['nameh'];
$tumh = $_GET['tumh'];
//ตำแหน่งผู้ถูกประเมิน

$namec = $_GET['namec'];
$tumc = $_GET['tumc'];
//ตำแหน่งผู้ประเมิน

//testtesttesttesttest

// $rob = '1';
// //รอบที่ประเมิน

// $nameh = "ทดสอบ";
// $tumh = "ทดสอบตำแหน่ง";
// //ตำแหน่งผู้ถูกประเมิน

// $namec = "ทดสอบชื่อผู้บังคับ";
// $tumc = "ทดสอบตำแหน่ง";
// //ตำแหน่งผู้ประเมิน


?>

<input type="hidden" name="rob" value="<?php echo($rob); ?>">
<input type="hidden" name="y" value="<?php echo($y); ?>">
<input type="hidden" name="yy" value="<?php echo($yy); ?>">

<input type="hidden" name="nameh" value="<?php echo($nameh); ?>">
<input type="hidden" name="tumh" value="<?php echo($tumh); ?>">
<input type="hidden" name="namec" value="<?php echo($namec); ?>">
<input type="hidden" name="tumc" value="<?php echo($tumc); ?>">

<h5 ><p style="text-align: center;">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)<br>
ตำแหน่งประเภทผู้บริหาร มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</p>
<p>รอบการประเมิน</p>

<?php if ($rob == '1'): ?>
	รอบที่ ๑	&nbsp;&nbsp;&nbsp;&nbsp;๑  ตุลาคม  .. <?php echo($y); ?> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  .. <?php echo($yy); ?> ..

	<?php elseif ($rob == '2'): ?>	
		รอบที่ ๒  &nbsp;&nbsp;&nbsp;&nbsp;๑  เมษายน  .. <?php echo($y); ?> ..  ถึง &nbsp;&nbsp; ๓๐  กันยายน  .. <?php echo($yy); ?> ..
	<?php endif ?>
	
	<br><br>

ชื่อผู้รับการประเมิน ....<?php echo($nameh); ?>...... ตำแหน่ง/ระดับ...<?php echo($tumh); ?> &nbsp;&nbsp;ชื่อผู้บังคับบัญชา&nbsp;&nbsp;....ทดสอบชื่อผู้บังคับ.<?php echo($namec); ?>...... ตำแหน่ง/ระดับ...<?php echo($tumc); ?></h5>


<br>
