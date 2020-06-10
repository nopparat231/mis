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

 				<form id="frmdb" name="frmdb" method="get" action="page/pa3_db.php">
 					<div class="card card-primary card-outline">
 						<div class="card-header">
 							<h5 class="m-0">ฟอร์มประเมิน</h5>
 						</div>

 						<div class="card-body">


 							<?php 
 							include 'conn.php';

 							include 'head_page.php';

 							$f_thid = isset($_GET['rob']);

 							$sqlh=" SELECT * FROM f_h";
 							$qryh = mysqli_query($conn,$sqlh);
 						//$rowh = mysqli_fetch_assoc($qryh);
 							$rowcheckh = mysqli_num_rows($qryh); 


 							$sqlth=" SELECT * FROM f_th WHERE f_thid =".$f_thid;
 							$qryth = mysqli_query($conn,$sqlth);
 							$rowth = mysqli_fetch_assoc($qryth);
 							

 							?>

 							<b> <?php echo $rowth['f_thdettail']; ?> </b><br>

 							
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


 									$sqlf=" SELECT f_hhh , f_id , f_hh , f_score FROM f_pam WHERE f_hh =".$rowh['f_hid'];
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

 										<?php 


 										if ($rowf['f_score'] >= 80) {
 											echo '
 											<tr>
 											<td width="5%" align="center"><strong>80</strong></td>
 											<td width="5%" align="center"><strong>70</strong></td>
 											<td width="5%" align="center"><strong>50</strong></td>
 											<td width="5%" align="center"><strong>20</strong></td>
 											<td width="5%" align="center"><strong>0</strong></td>
 											</tr>
 											';
 										}elseif ($rowf['f_score'] >= 50){
 											echo '	
 											<tr>
 											<td width="5%" align="center"><strong>50</strong></td>
 											<td width="5%" align="center"><strong>40</strong></td>
 											<td width="5%" align="center"><strong>30</strong></td>
 											<td width="5%" align="center"><strong>20</strong></td>
 											<td width="5%" align="center"><strong>0</strong></td>
 											</tr>
 											';
 										}elseif ($rowf['f_score'] >= 20){
 											echo '	
 											<tr>
 											<td width="5%" align="center"><strong>20</strong></td>
 											<td width="5%" align="center"><strong>15</strong></td>
 											<td width="5%" align="center"><strong>10</strong></td>
 											<td width="5%" align="center"><strong>5</strong></td>
 											<td width="5%" align="center"><strong>0</strong></td>
 											</tr>
 											';
 										}elseif ($rowf['f_score'] >= 10){
 											echo '	
 											<tr>
 											<td width="5%" align="center"><strong>5</strong></td>
 											<td width="5%" align="center"><strong>4</strong></td>
 											<td width="5%" align="center"><strong>3</strong></td>
 											<td width="5%" align="center"><strong>2</strong></td>
 											<td width="5%" align="center"><strong>1</strong></td>
 											</tr>
 											';
 										}elseif ($rowf['f_score'] >= 5){
 											echo '	
 											<tr>
 											<td width="5%" align="center"><strong>5</strong></td>
 											<td width="5%" align="center"><strong>4</strong></td>
 											<td width="5%" align="center"><strong>3</strong></td>
 											<td width="5%" align="center"><strong>2</strong></td>
 											<td width="5%" align="center"><strong>1</strong></td>
 											</tr>
 											';
 										}
 										?>




 										<tr>
 											<td height="30">
 												<?php echo $rowf['f_hhh']; ?>

 											</td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="5" required="required" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="4" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="3" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="2" /></td>
 											<td height="30" align="center"><input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="1" /></td>
 										</tr>

 									<?php } ?>



 								<?php } ?>


 							</table>

 						</form>

 					</div>

 					<div class="card-footer">
 						<button  class="btn btn-primary">บันทึก</button>
 						
 					</div>

 				</div>

 			</div>
 			<!-- /.col-md-6 -->
 		</div>
 		<!-- /.row -->
 	</div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
