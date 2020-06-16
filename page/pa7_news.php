 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				<h1 class="m-0 text-dark">เพิ่มข่าว</h1>
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
 					<li class="breadcrumb-item active">เพิ่มข่าว</li>
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
 						<h5 class="m-0">เพิ่มข่าว</h5>
 					</div>

 					
 					<div class="card-body">

 						<?php if (isset($_GET['add_new'])):
 							$user_id = $_SESSION["USER_ID"];

 							?>
 							<form action="page/pa7_news_db.php" method="post">

 								<input type="hidden" name="user_id" value="<?php echo($user_id) ?>">
 								<input type="hidden" name="add_new">
 								<input type="text" name="n_head" class="form-control" value="" required><br>
 								<textarea class="textarea" name="new_detail" required placeholder="Place some text here"
 								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
 							</textarea>


 					<div class="card-footer">
 						<button class="btn btn-primary noprint" type="submit" >บันทึก</button>
 						<a type="submit" class="btn btn-danger" href="./index.php?pa7" >ยกเลิก</a>

 					</div>
 						</form>

 					<?php elseif (isset($_GET['edit_new'])): 
 						include './conn.php';
 						$user_id = $_SESSION["USER_ID"];
 						$new_id = $_GET['new_id'];

 						$sqlhnew=" SELECT * FROM news WHERE n_id =".$new_id;
 						$qryhnew = mysqli_query($conn,$sqlhnew);
 						$rownew = mysqli_fetch_assoc($qryhnew);

 						?>

 						<form action="page/pa7_news_db.php" method="post">
 							
 							<input type="hidden" name="user_id" value="<?php echo($user_id) ?>">
 							<input type="hidden" name="new_id" value="<?php echo($new_id) ?>">
 							<input type="hidden" name="edit_new">
 							<input type="text" name="n_head" class="form-control" required value="<?php echo($rownew['n_head']) ?>"><br>

 							<textarea class="textarea" name="new_detail" required placeholder="Place some text here"
 							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $rownew['n_detail']; ?></textarea>


 					<div class="card-footer">
 						<button class="btn btn-primary noprint" type="submit" >บันทึก</button>
 						<a type="submit" class="btn btn-danger" href="./index.php?pa7" >ยกเลิก</a>

 					</div>
 						</form>



 					<?php else: 

 						include './conn.php';

 						$sqlhnew=" SELECT * FROM news ";
 						$qryhnew = mysqli_query($conn,$sqlhnew);
 							//$rownew = mysqli_fetch_assoc($qryhnew);

 						?>
 						<a href="./index.php?pa7&add_new" class="btn btn-success float-right" ><i class="fas fa-plus"></i></a>

 						<table id="example1" class="table table-bordered table-hover">
 							<thead>
 								<tr>
 									<th>ลำดับ</th>
 									<th>ผู้เขียน</th>
 									<th>หัวข้อ</th>
 									<th>ประกาศ</th>
 									<th>แก้ไข</th>

 								</tr>
 							</thead>
 							<tbody>
 								<?php 
 								$i = 1;
 								while ($rownew = $qryhnew->fetch_array()) {
 									$nid = $rownew['n_id'];
 									$uid = $rownew['n_user_id'];

 									$sqlhuser =" SELECT * FROM user where user_id =".$uid;
 									$qryhuser = mysqli_query($conn,$sqlhuser);
 									$rowuser = mysqli_fetch_assoc($qryhuser);

 									?>


 									<tr>
 										<td width="5px"><?php echo $i; ?></td>
 										<td><?php echo $rowuser['first_name']."  ".$rowuser['last_name']; ?></td>
 										<td><?php echo $rownew['n_head']; ?></td>
 										<td><?php echo $rownew['n_detail']; ?></td>
 										<td width="10px">
 											<?php if ($rownew['n_status'] == 1): ?>
 												<p style="color: red;" 	>ยกเลิก</p>
 												<?php elseif ($rownew['n_status'] == 0): ?>
 													<a href="index.php?pa7&edit_new&new_id=<?php echo($nid) ?>"><i class="far fa-edit"></i></a>&nbsp;&nbsp;
 													<a href="page/pa7_news_db.php?del_new&new_id=<?php echo($nid) ?>"><i class="far fa-trash-alt"></i></a>
 												<?php endif ?>

 											</td>

 										</tr>

 										<?php
 										$i++;
 									} ?>


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