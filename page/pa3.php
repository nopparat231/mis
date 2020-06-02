 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
 					<li class="breadcrumb-item active">ประเมินการใช้งานระบบ</li>
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


 				<div class="card card-primary card-outline">
 					<div class="card-header">
 						<h5 class="m-0">ฟอร์มประเมิน</h5>
 					</div>
 					<div class="card-body">

 						<?php 
 						include 'conn.php';



 						$sqlh=" SELECT * FROM f_h";
 						$qryh = mysqli_query($conn,$sqlh);
 						//$rowh = mysqli_fetch_assoc($qryh);
 						$rowcheckh = mysqli_num_rows($qryh); 



 						?>

 						<b> ตอนที่ ๑ การประเมินผลการปฏิบัติงาน ผู้บริหารสายวิชาการ (คณบดี/ผู้อำนวยการสถาบัน/สำนัก) </b><br>

 						<form id="formq" name="formq" method="post" action="q_db.php">
 							<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">


 								<?php 

 								while($rowh = $qryh->fetch_array()){

 									?>

 									<tr>
 										<td height="30" colspan="6" bgcolor="#F4F4F4">
 											<strong>&nbsp; <?php echo $rowh['f_hdetail']; ?> </strong>
 										</td>
 									</tr>


 									<?php


 									$sqlf=" SELECT f_hhh , f_id , f_hh FROM f_pam WHERE f_hh =".$rowh['f_hid'];
 									$qryf = mysqli_query($conn,$sqlf);
 									//$rowf = mysqli_fetch_assoc($qryf);
 									$rowcheckf = mysqli_num_rows($qryf); 

 									while($rowf = $qryf->fetch_array()){
 										?>


 										<tr>
 											<td width="75%" rowspan="2" align="float-sm-right">
 												<strong></strong>
 											</td>
 										</tr>
 										<tr>
 											<td width="5%" align="center"><strong>5</strong></td>
 											<td width="5%" align="center"><strong>4</strong></td>
 											<td width="5%" align="center"><strong>3</strong></td>
 											<td width="5%" align="center"><strong>2</strong></td>
 											<td width="5%" align="center"><strong>1</strong></td>
 										</tr>

 										<tr>
 											<td height="30">
 												<?php echo $rowf['f_hhh']; ?>

 											</td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id']; ?>"  value="5" required="required" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id']; ?>"  value="4" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id']; ?>"  value="3" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id']; ?>"  value="2" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id']; ?>"  value="1" /></td>
 										</tr>

 									<?php } ?>



 								<?php } ?>


 							</table>

 						</form>

 					</div>

 					<div class="card-footer">
 						<a href="#" class="btn btn-primary">บันทึก</a>
 					</div>

 				</div>

 			</div>
 			<!-- /.col-md-6 -->
 		</div>
 		<!-- /.row -->
 	</div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
