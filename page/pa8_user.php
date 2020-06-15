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

 						<?php if (isset($_GET['add'])||isset($_GET['edit_user'])): ?>

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
 											<select class="custom-select" name="user_status" id="inputGroupSelect01">
 												<option selected>เลือกสถานะ</option>
 												<option value="1">ผู้ดูแลระบบ</option>
 											<!-- 	<option value="2">เจ้าหน้าที่</option> -->
 												<option value="0">ผู้ใช้งานทั่วไป</option>
 											</select>

 										</div>
 									</div>



 									<div class="card-footer">
 										<button type="submit" class="btn btn-primary">Submit</button>
 										<a type="submit" class="btn btn-danger" href="./index.php?pa8" >cancel</a>
 									</div>

 								</div>

 								<input type="hidden" name="add_user" >

 							</form>

 						<?php elseif (isset($_GET['edit_user'])):

 							$user_id = $_GET['user_id'];


 							$sqlhuser=" SELECT * FROM user WHERE user_id =".$user_id;
 							$qryhuser = mysqli_query($conn,$sqlhuser);
 							$rowuser = mysqli_fetch_assoc($qryhuser);

 							$user_status = $rowuser['user_status'];

 							$user_statusck1 = '';
 							$user_statusck2 = '';
 							$user_statusck3 = '';

 							if ($user_status == 1) {
 								$user_statusck1 = 'selected';
 							}elseif ($user_status == 2) {
 								$user_statusck2 = 'selected';
 							}elseif ($user_status == 0) {
 								$user_statusck3 = 'selected';
 							}

 							?>



 							<form role="form" action="page/pa8_user_db.php" method="post">

 								<div class="row">
 									<div class="col-sm-3">
 										<!-- text input -->
 										<div class="form-group">
 											<label>ตำแหน่ง</label>
 											<input type="text" name="user_tumn" class="form-control" value="<?php echo($rowuser['user_tumn']) ?>" placeholder="Enter ...">
 										</div>
 									</div>
 									<div class="col-sm-4">
 										<!-- text input -->
 										<div class="form-group">
 											<label>ชื่อ</label>
 											<input type="text" name="first_name" class="form-control" value="<?php echo($rowuser['first_name']) ?>" placeholder="Enter ...">
 										</div>
 									</div>
 									<div class="col-sm-4">
 										<!-- text input -->
 										<div class="form-group">
 											<label>นามสกุล</label>
 											<input type="text" name="last_name" class="form-control" value="<?php echo($rowuser['last_name']) ?>" placeholder="Enter ...">
 										</div>
 									</div>
 									<div class="col-sm-3">
 										<!-- text input -->
 										<div class="form-group">
 											<label>Username</label>
 											<input type="text" name="username" class="form-control" value="<?php echo($rowuser['username']) ?>" placeholder="Enter ...">
 										</div>
 									</div>
 									<div class="col-sm-4">
 										<!-- text input -->
 										<div class="form-group">
 											<label>Password</label>
 											<input type="password" name="password" class="form-control" value="<?php echo($rowuser['password']) ?>" placeholder="Enter ...">
 										</div>
 									</div>
 									<div class="col-sm-4">
 										<!-- text input -->
 										<div class="form-group">
 											<label>สถานะ</label>
 											<select class="custom-select" name="user_status" id="inputGroupSelect01">

 												<option <?php echo $user_statusck1; ?> value="1">ผู้ดูแลระบบ</option>
 												<!-- <option <?php echo $user_statusck2; ?> value="2">เจ้าหน้าที่</option> -->
 												<option <?php echo $user_statusck3; ?> value="0">ผู้ใช้งานทั่วไป</option>
 											</select>

 										</div>
 									</div>


 									<div class="card-footer">
 										<button type="submit" class="btn btn-primary">Submit</button>
 										<a type="submit" class="btn btn-danger" href="./index.php?pa8" >cancel</a>
 									</div>

 								</div>

 								<input type="hidden" name="edit_user" >
 								<input type="hidden" name="user_id" value="<?php echo($user_id) ?>" >

 							</form>

 							<?php else: ?>

 								<?php 
 								include './conn.php';


 								$sqlhuser=" SELECT * FROM user ORDER BY user_id desc ";
 								$qryhuser = mysqli_query($conn,$sqlhuser);


 								?>



 								<table id="example1" class="table table-bordered table-hover">
 									<thead>
 										<tr>
 											<th>ลำดับ</th>
 											<th>ตำแหน่ง</th>
 											<th>ชื่อ</th>
 											<th>นามสกุล</th>
 											<th>สถานะ</th>
 											<th>แก้ไข</th>

 										</tr>
 									</thead>
 									<tbody>
 										<?php 
 										$i = 1;
 										while ($rowhuser = $qryhuser->fetch_array()) {
 											$uid = $rowhuser['user_id'];

 											?>


 											<tr>
 												<td><?php echo $i; ?></td>
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

 													<td width="10px">
 														<?php if ($rowhuser['user_status'] == 3): ?>
 															<p style="color: red;" 	>ยกเลิก</p>
 															<?php else: ?>
 																<a href="index.php?pa8&edit_user&user_id=<?php echo($uid) ?>"><i class="far fa-edit"></i></a>&nbsp;&nbsp;
 																<a href="page/pa8_user_db.php?del_user&user_id=<?php echo($uid) ?>"><i class="far fa-trash-alt"></i></a>
 															<?php endif ?>

 														</td>

 													</tr>

 												<?php $i++; } ?>


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