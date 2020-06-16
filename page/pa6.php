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
 						<h5 class="m-0">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)</h5>
 					</div>
 					<div class="card-body">


 						<?php 
 						include './conn.php';

 						$user_id = $_SESSION["USER_ID"];

 						$sqlhuser=" SELECT * FROM user WHERE user_id <>  '$user_id' ";
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
 									<th></th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php 
 								while ($rowhuser = $qryhuser->fetch_array()) {
 									$uid = $rowhuser['user_id'];

 									$sqlac = " SELECT * FROM f_action WHERE f_ac_user_c_id =  '$uid' ";
 									$qryac = mysqli_query($conn,$sqlac);
 									$rowac = mysqli_fetch_assoc($qryac);
 									$rowcheckac = mysqli_num_rows($qryac);

 									?>


 									<tr>
 										<td><?php echo $rowhuser['user_tumn']; ?></td>
 										<td><?php echo $rowhuser['first_name']; ?></td>
 										<td><?php echo $rowhuser['last_name']; ?></td>

 										<?php 

 										if ($rowcheckac > 0) { ?>

 											<td>ทำแล้ว</td>
 											<td width="5px"><a href="index.php?pa2&user_c_id=<?php echo ($rowhuser['user_id']) ?>" target="_blank"><i class="fas fa-search"></i></a></td>

 										<?php }else{ ?>
 											<td>ยังไม่ทำ</td>
 											<td width="5px"><a href="index.php?pa4&user_c_id=<?php echo ($rowhuser['user_id']) ?>" target="_blank"><i class="fas fa-arrow-right"></i></a></td>

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