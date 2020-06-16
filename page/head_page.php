
<?php 


if (isset($_GET['rob'])) {

	$rob = $_GET['rob'];
	if ($rob == 1) {
		$kid_from = $_GET['y1'];
		$kid_end = $_GET['yy1'];
	}elseif ($rob == 2){
		$kid_from = $_GET['y2'];
		$kid_end = $_GET['yy2'];
	}


}

?>

<?php 
include './conn.php';
$user_id = $_SESSION["USER_ID"];

$user_c_id = $_GET['user_c_id'];


$sqlthhh=" SELECT * FROM user WHERE user_id =".$user_id;
$qrythhh = mysqli_query($conn,$sqlthhh);
$rowthhh = mysqli_fetch_assoc($qrythhh);

$sqluserchh=" SELECT * FROM user WHERE user_id =".$user_c_id;
$qryuserchh = mysqli_query($conn,$sqluserchh);
$rowuserchh = mysqli_fetch_assoc($qryuserchh);



?>

<input type="hidden" name="rob" value="<?php echo($rob); ?>">
<input type="hidden" name="kid_from" value="<?php echo($kid_from); ?>">
<input type="hidden" name="kid_end" value="<?php echo($kid_end); ?>">


<h5 ><p style="text-align: center;">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)<br>
ตำแหน่งประเภทผู้บริหาร มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</p>
<p>รอบการประเมิน</p>

<?php if ($rob == '1'): ?>
	รอบที่ ๑	&nbsp;&nbsp;&nbsp;&nbsp;๑  ตุลาคม  .. <?php echo($kid_from); ?> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  .. <?php echo($kid_end); ?> ..

	<?php elseif ($rob == '2'): ?>	
		รอบที่ ๒  &nbsp;&nbsp;&nbsp;&nbsp;๑  เมษายน  .. <?php echo($kid_from); ?> ..  ถึง &nbsp;&nbsp; ๓๐  กันยายน  .. <?php echo($kid_end); ?> ..
	<?php endif ?>
	
	<br><br>

	ชื่อผู้รับการประเมิน ....<?php echo($rowuserchh['first_name'].' '.$rowuserchh['last_name']) ?>...... ตำแหน่ง/ระดับ...<?php echo($rowuserchh['user_tumn']) ?> &nbsp;&nbsp;ชื่อผู้บังคับบัญชา&nbsp;&nbsp;....<?php echo($rowthhh['first_name'].' '.$rowthhh['last_name']) ?>...... ตำแหน่ง/ระดับ...<?php echo($rowthhh['user_tumn']) ?></h5>


	<br>
