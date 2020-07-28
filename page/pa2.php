<?php require_once 'class_db.php'; ?>

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">ประเมินการสอน</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
					<li class="breadcrumb-item active">ประเมินการสอน</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">


				<div class="card card-outline ">
					<div class="card-header noprint">
						<h5 class="m-0">ฟอร์มประเมินการสอน</h5>
					</div>
					<div class="card-body">

						<?php 
						include './conn.php';

						if (isset($_GET['user_c_id'])) {



							$user_id = $_SESSION["USER_ID"];

							$user_c_id = $_GET['user_c_id'];



							$sqlac=" SELECT * FROM `f_action` WHERE f_ac_user_h_id = '$user_id' AND f_ac_user_c_id = '$user_c_id' ";
							$qryac = mysqli_query($conn,$sqlac);

							$sqlacrob=" SELECT * FROM `f_action` WHERE f_ac_user_h_id = '$user_id' AND f_ac_user_c_id = '$user_c_id' ";
							$qryacrob = mysqli_query($conn,$sqlacrob);
							$rowacrob = mysqli_fetch_assoc($qryacrob);

							$sqlhuser=" SELECT * FROM user WHERE user_id =".$user_id;
							$qryhuser = mysqli_query($conn,$sqlhuser);
							$rowhuser = mysqli_fetch_assoc($qryhuser);

							$sqlcuser=" SELECT * FROM user WHERE user_id =".$user_c_id;
							$qrycuser = mysqli_query($conn,$sqlcuser);
							$rowcuser = mysqli_fetch_assoc($qrycuser);



							?>

							<h5 >
								<p style="text-align: center;">
									แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)<br>
									ตำแหน่งประเภทผู้บริหาร มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ <br>

								</p>


								<?php if ($rowacrob['f_ac_rob'] == '1'): ?>
									รอบที่ ๑	&nbsp;&nbsp;&nbsp;&nbsp;๑  ตุลาคม  .. <?php echo($rowacrob['f_ac_kid_from']); ?> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  .. <?php echo($rowacrob['f_ac_kid_end']); ?> ..

									<?php elseif ($rowacrob['f_ac_rob'] == '2'): ?>	
										รอบที่ ๒  &nbsp;&nbsp;&nbsp;&nbsp;๑  เมษายน  .. <?php echo($rowacrob['f_ac_kid_from']); ?> ..  ถึง &nbsp;&nbsp; ๓๐  กันยายน  .. <?php echo($rowacrob['f_ac_kid_end']); ?> ..
									<?php endif ?>
									<br>

									ชื่อผู้รับการประเมิน ....<?php echo $rowcuser['first_name']."  ".$rowcuser['last_name']; ?>....... ตำแหน่ง/ระดับ...<?php echo $rowcuser['user_tumn']; ?>
									ชื่อผู้บังคับบัญชา ....<?php echo $rowhuser['first_name']."  ".$rowhuser['last_name']; ?>....... ตำแหน่ง/ระดับ...<?php echo $rowhuser['user_tumn']; ?>

								</h5>



								<?php

							}


							if (isset($_GET['type'])) {

								$type = $_GET['type'];

								if (isset($_GET['save'])) {
									require_once 'class_db.php';
								}

								if ($_GET['type'] == 2) {



									include 'pa9table.php';
									include 'pa99.php';



								}elseif($_GET['type'] == 3) {

									include 'pa10.php';
									include 'pa11.php';
 									//include 'pa12.php';


								}elseif($_GET['type'] == 1){


									function showhh($user_id,$user_c_id,$f_id){

										include './conn.php';

										$sqljoin=" SELECT * FROM f_action INNER JOIN f_pam ON f_id = f_ac_pam_id WHERE f_ac_user_h_id = '$user_id' AND f_ac_user_c_id = '$user_c_id' AND f_id =".$f_id;
										$qryjoin = mysqli_query($conn,$sqljoin);
										$rowjoin = mysqli_fetch_assoc($qryjoin);

										echo $rowjoin['f_ac_score'];

									}


									include 'pa2table.php';

								}
							}

							?>



						</div>
						<div class="card-footer">
							<?php if ($type=3): ?>
								<a href="index.php?ph&user_c_id=<?php echo($user_c_id) ?>&ph3&add" class="btn btn-primary noprint">ส่วนที่ 3 : แผนพัฒนาการปฏิบัติราชการรายบุคคล >> </a>
								<?php else: ?>

									<a href="index.php?pa4&user_c_id=<?php echo($user_c_id) ?>&type=3" class="btn btn-primary noprint">องค์ประกอบที่ 2 : พฤติกรรมการปฏิบัติราชการ >> </a>
								<?php endif ?>
							</div>

						</div>

					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
