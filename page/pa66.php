 
<?php include 'class_db.php'; ?>

<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">รายงานการประเมิน</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
					<li class="breadcrumb-item active">รายงานการประเมิน</li>
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


				<div class="card card-primary card-outline ">
					<div class="card-header noprint">
						<h5 class="m-0">

							ข้อมูลการประเมินทั้งหมด
						</h5>
					</div>
					<div class="card-body">


						<?php 
						include './conn.php';

						$user_id = $_SESSION["USER_ID"];

						$sqlhuser=" SELECT * FROM user WHERE user_status = 0 AND user_id <>  '$user_id' ";
						$qryhuser = mysqli_query($conn,$sqlhuser);
 						//$rowhuser = mysqli_fetch_assoc($qryhuser);



						?>



						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ตำแหน่ง</th>
									<th>ชื่อ</th>
									<th>นามสกุล</th>
									<th>สถานะ</th>
									<th>พิมพ์</th>

									
								</tr>
							</thead>
							<tbody>
								<?php 

								while ($rowhuser = $qryhuser->fetch_array()) {
									$uid = $rowhuser['user_id'];



									$sqlac1 = " SELECT * FROM f_action WHERE f_ac_user_c_id =  '$uid' AND f_ac_th_id = 2 ";
									$qryac1 = mysqli_query($conn,$sqlac1);
									$rowac1 = mysqli_fetch_assoc($qryac1);
									$rowcheckac1 = mysqli_num_rows($qryac1);

									$sqlac2 = " SELECT * FROM f_action WHERE f_ac_user_c_id =  '$uid' AND f_ac_th_id = 3 ";
									$qryac2 = mysqli_query($conn,$sqlac2);
									$rowac2 = mysqli_fetch_assoc($qryac2);
									$rowcheckac2 = mysqli_num_rows($qryac2);

									?>


									<tr>
										<td><?php echo $rowhuser['user_tumn']; ?></td>
										<td><?php echo $rowhuser['first_name']; ?></td>
										<td><?php echo $rowhuser['last_name']; ?></td>



										<td>
											<?php if ($rowcheckac1 > 0 && $rowcheckac2 > 0) { ?>
												ส่วนที่ 1 <a href="index.php?ph&ph1&user_c_id=<?php echo($uid) ?>&type=2">ตรวจสอบ</a> ,
												ส่วนที่ 2 <a href="index.php?ph&ph2&user_c_id=<?php echo($uid) ?>&type=2">ตรวจสอบ</a> ,

											<?php }elseif ($rowcheckac1 > 0) { ?>

											<?php }else{ ?>
												ส่วนที่ 1 <a href="#" style="color: red;">ยังไม่ประเมิน</a> ,
												ส่วนที่ 2 <a href="index.php?pa4&user_c_id=<?php echo($uid) ?>&type=2" style="color: red;" >องค์ประกอบที่ 1 (ยังไม่ประเมิน)</a> ,

											<?php } ?>

											<?php if ($rowcheckac2 > 0) { ?>



											<?php }else{ ?>
												ส่วนที่ 2 <a href="index.php?pa4&user_c_id=<?php echo($uid) ?>&type=3" style="color: red;" >องค์ประกอบที่ 2 (ยังไม่ประเมิน)</a> ,

											<?php } ?>

											<?php if ($rowcheckac1 > 0) { ?>
												ส่วนที่ 3 <a href="index.php?ph&ph3&user_c_id=<?php echo($uid) ?>&type=2">ตรวจสอบ</a> , 
												ส่วนที่ 4 <a href="index.php?ph&ph4&user_c_id=<?php echo($uid) ?>&type=2">ตรวจสอบ</a> , 
												ส่วนที่ 5 <a href="index.php?ph&ph5&user_c_id=<?php echo($uid) ?>&type=2">ตรวจสอบ</a>
											<?php }elseif ($rowcheckac2 > 0) { ?>	
												ส่วนที่ 3 <a href="index.php?ph&ph3&user_c_id=<?php echo($uid) ?>&type=3">ตรวจสอบ</a> , 
												ส่วนที่ 4 <a href="index.php?ph&ph4&user_c_id=<?php echo($uid) ?>&type=3">ตรวจสอบ</a> , 
												ส่วนที่ 5 <a href="index.php?ph&ph5&user_c_id=<?php echo($uid) ?>&type=3">ตรวจสอบ</a>
											<?php }else{ ?>	
												ส่วนที่ 3 <a href="#" style="color: red;">ยังไม่ประเมิน</a> , 
												ส่วนที่ 4 <a href="#" style="color: red;">ยังไม่ประเมิน</a> , 
												ส่วนที่ 5 <a href="#" style="color: red;">ยังไม่ประเมิน</a>
											<?php } ?>	
										</td>
										<?php if ($rowcheckac1 > 0) { ?>



											<td width="5px" style="text-align: center;" ><a href="index.php?ph&print&user_c_id=<?php echo($uid) ?>&type=2"><i class="fas fa-print"></i></a></td>

										<?php }elseif ($rowcheckac2 > 0) { ?>	


											<td width="5px" style="text-align: center;" ><a href="index.php?ph&print&user_c_id=<?php echo($uid) ?>&type=3"><i class="fas fa-print"></i></a></td>
										<?php }else{ ?>	


											<td width="5px" style="text-align: center;" ><a href="#"><i class="fas fa-ban"></i></a></td>
										<?php } ?>

									</tr>

								<?php } ?>


							</tbody>
						</table>


					</div>

					<div class="card-footer">
						<!-- <a href="#" class="btn btn-primary noprint" onclick="window.print()">พิมพ์</a> -->

					</div>

				</div>

			</div>
			<!-- /.col-md-6 -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
 <!-- /.content -->