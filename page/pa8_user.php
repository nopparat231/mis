 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				<h1 class="m-0 text-dark">เพิ่มผู้ใช้งาน</h1>
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
 					<li class="breadcrumb-item active">เพิ่มผู้ใช้งาน</li>
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
 						<h5 class="m-0">เพิ่มผู้ใช้งาน</h5>
 					</div>
 					<div class="card-body">

 						<?php if (isset($_GET['add'])): ?>

 							<?php else: ?>
 								<a href="./index.php?pa8&add" class="btn btn-success float-right" ><i class="fas fa-plus"></i></a>
 							<?php endif ?>

 							<?php if (isset($_GET['add'])): ?>



 								<form role="form" action="page/pa8_user_db.php" method="post">

 									<div class="row">
 										<div class="col-sm-3">
 											<!-- text input -->
 											<div class="form-group">
 												<label>ตำแหน่ง</label>
 												<input type="text" name="user_tumn" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>
 										<div class="col-sm-4">
 											<!-- text input -->
 											<div class="form-group">
 												<label>ชื่อ</label>
 												<input type="text" name="first_name" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>
 										<div class="col-sm-4">
 											<!-- text input -->
 											<div class="form-group">
 												<label>นามสกุล</label>
 												<input type="text" name="last_name" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>
 										<div class="col-sm-3">
 											<!-- text input -->
 											<div class="form-group">
 												<label>Username</label>
 												<input type="text" name="username" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>
 										<div class="col-sm-4">
 											<!-- text input -->
 											<div class="form-group">
 												<label>Password</label>
 												<input type="password" name="password" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>
 										<div class="col-sm-4">
 											<!-- text input -->
 											<div class="form-group">
 												<label>สถานะ</label>
 												<input type="number" name="user_status" class="form-control" placeholder="Enter ...">
 											</div>
 										</div>


 										<div class="card-footer">
 											<button type="submit" class="btn btn-primary">Submit</button>
 											<a type="submit" class="btn btn-danger" href="./index.php?pa8" >cancel</a>
 										</div>

 									</div>
 								</form>
 								<?php else: ?>

 									<?php 
 									include './conn.php';


 									$sqlhuser=" SELECT * FROM user ";
 									$qryhuser = mysqli_query($conn,$sqlhuser);


 									?>



 									<table id="example1" class="table table-bordered table-hover">
 										<thead>
 											<tr>
 												<th>ตำแหน่ง</th>
 												<th>ชื่อ</th>
 												<th>นามสกุล</th>
 												<th>สถานะ</th>

 											</tr>
 										</thead>
 										<tbody>
 											<?php 
 											while ($rowhuser = $qryhuser->fetch_array()) {
 												$uid = $rowhuser['user_id'];

 												?>


 												<tr>
 													<td><?php echo $rowhuser['user_tumn']; ?></td>
 													<td><?php echo $rowhuser['first_name']; ?></td>
 													<td><?php echo $rowhuser['last_name']; ?></td>
 													<td>
 														<?php if ($rowhuser['user_status'] == 1): ?>
 															<p>ผู้ดูแลระบบ</p>
 															<?php elseif ($rowhuser['user_status'] == 0): ?>
 																<p>เจ้าหน้าที่</p>
 															<?php endif ?>

 														</td>

 													</tr>

 												<?php } ?>


 											</tbody>
 										</table>



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