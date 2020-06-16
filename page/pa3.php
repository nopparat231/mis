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
 							include './conn.php';

 							include 'head_page.php';
 							

 							$user_c_id = $_GET['user_c_id'];

 							$user_id = $_SESSION["USER_ID"];


 							$sqlh=" SELECT * FROM f_h";
 							$qryh = mysqli_query($conn,$sqlh);

 							$rowcheckh = mysqli_num_rows($qryh); 


 							$sqlth=" SELECT * FROM f_th WHERE f_thid = 1";
 							$qryth = mysqli_query($conn,$sqlth);
 							$rowth = mysqli_fetch_assoc($qryth);
 							

 							?>

 							<b> <?php echo $rowth['f_thdettail']; ?> </b><br>

 							<input type="hidden" name="kid_from" value=" <?php echo($kid_from) ?> ">
 							<input type="hidden" name="kid_end" value=" <?php echo($kid_end) ?> ">
 							<input type="hidden" name="rob" value="<?php echo($rob); ?>">

 							<input type="hidden" name="user_c_id" value=" <?php echo($user_c_id) ?> ">
 							<input type="hidden" name="user_id" value="<?php echo($user_id); ?>">
 							
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

 									$fid = $rowh['f_hid'];
 									$sqlf=" SELECT f_hhh , f_id , f_hh , f_score ,f_pam_num ,f_staus FROM f_pam WHERE f_hh = '$fid' AND f_staus = 0 order by f_pam_num asc ";
 									$qryf = mysqli_query($conn,$sqlf);
 									
 									$rowcheckf = mysqli_num_rows($qryf); 

 									while($rowf = $qryf->fetch_array()){
 										?>


 										<tr>
 											<td width="75%" rowspan="2" align="float-sm-right">
 												<strong></strong>
 											</td>
 										</tr>

 										<?php 


 										if ($rowf['f_score'] >= 80) { ?>
 											
 											<tr>
 												<td width="5%" align="center"><strong>80</strong></td>
 												<td width="5%" align="center"><strong>70</strong></td>
 												<td width="5%" align="center"><strong>50</strong></td>
 												<td width="5%" align="center"><strong>20</strong></td>
 												<td width="5%" align="center"><strong>0</strong></td>
 											</tr>


 											<tr>
 												<td height="30">
 													<?php echo $rowf['f_hhh']; ?>

 												</td>
 												<td height="30" align="center">
 													<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="80" required="required" /></td>
 													<td height="30" align="center">
 														<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="70" /></td>
 														<td height="30" align="center">
 															<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="50" /></td>
 															<td height="30" align="center">
 																<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="20" /></td>
 																<td height="30" align="center">
 																	<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																</tr>

 															<?php }elseif ($rowf['f_score'] >= 50){ ?>

 																<tr>
 																	<td width="5%" align="center"><strong>50</strong></td>
 																	<td width="5%" align="center"><strong>40</strong></td>
 																	<td width="5%" align="center"><strong>30</strong></td>
 																	<td width="5%" align="center"><strong>20</strong></td>
 																	<td width="5%" align="center"><strong>0</strong></td>
 																</tr>


 																<tr>
 																	<td height="30">
 																		<?php echo $rowf['f_hhh']; ?>

 																	</td>
 																	<td height="30" align="center">
 																		<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="50" required="required" /></td>
 																		<td height="30" align="center">
 																			<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="40" /></td>
 																			<td height="30" align="center">
 																				<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="30" /></td>
 																				<td height="30" align="center">
 																					<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="20" /></td>
 																					<td height="30" align="center">
 																						<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																					</tr>

 																				<?php	}elseif ($rowf['f_score'] >= 30){ ?>

 																					<tr>
 																						<td width="5%" align="center"><strong>30</strong></td>
 																						<td width="5%" align="center"><strong>20</strong></td>
 																						<td width="5%" align="center"><strong>10</strong></td>
 																						<td width="5%" align="center"><strong>5</strong></td>
 																						<td width="5%" align="center"><strong>0</strong></td>
 																					</tr>


 																					<tr>
 																						<td height="30">
 																							<?php echo $rowf['f_hhh']; ?>

 																						</td>
 																						<td height="30" align="center">
 																							<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="30" required="required" /></td>
 																							<td height="30" align="center">
 																								<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="20" /></td>
 																								<td height="30" align="center">
 																									<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="10" /></td>
 																									<td height="30" align="center">
 																										<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="5" /></td>
 																										<td height="30" align="center">
 																											<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																										</tr>

 																									<?php	}elseif ($rowf['f_score'] >= 20){ ?>

 																										<tr>
 																											<td width="5%" align="center"><strong>20</strong></td>
 																											<td width="5%" align="center"><strong>15</strong></td>
 																											<td width="5%" align="center"><strong>10</strong></td>
 																											<td width="5%" align="center"><strong>5</strong></td>
 																											<td width="5%" align="center"><strong>0</strong></td>
 																										</tr>

 																										<tr>
 																											<td height="30">
 																												<?php echo $rowf['f_hhh']; ?>

 																											</td>
 																											<td height="30" align="center">
 																												<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="20" required="required" /></td>
 																												<td height="30" align="center">
 																													<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="15" /></td>
 																													<td height="30" align="center">
 																														<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="10" /></td>
 																														<td height="30" align="center">
 																															<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="5" /></td>
 																															<td height="30" align="center">
 																																<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																															</tr>

 																														<?php	}elseif ($rowf['f_score'] >= 10){ ?>

 																															<tr>
 																																<td width="5%" align="center"><strong>10</strong></td>
 																																<td width="5%" align="center"><strong>7</strong></td>
 																																<td width="5%" align="center"><strong>5</strong></td>
 																																<td width="5%" align="center"><strong>2</strong></td>
 																																<td width="5%" align="center"><strong>0</strong></td>
 																															</tr>

 																															<tr>
 																																<td height="30">
 																																	<?php echo $rowf['f_hhh']; ?>

 																																</td>
 																																<td height="30" align="center">
 																																	<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="10" required="required" /></td>
 																																	<td height="30" align="center">
 																																		<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="7" /></td>
 																																		<td height="30" align="center">
 																																			<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="5" /></td>
 																																			<td height="30" align="center">
 																																				<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="2" /></td>
 																																				<td height="30" align="center">
 																																					<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																																				</tr>

 																																			<?php	}elseif ($rowf['f_score'] >= 5){ ?>

 																																				<tr>
 																																					<td width="5%" align="center"><strong>5</strong></td>
 																																					<td width="5%" align="center"><strong>4</strong></td>
 																																					<td width="5%" align="center"><strong>3</strong></td>
 																																					<td width="5%" align="center"><strong>2</strong></td>
 																																					<td width="5%" align="center"><strong>0</strong></td>
 																																				</tr>


 																																				<tr>
 																																					<td height="30">
 																																						<?php echo $rowf['f_hhh']; ?>

 																																					</td>
 																																					<td height="30" align="center">
 																																						<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="5" required="required" /></td>
 																																						<td height="30" align="center">
 																																							<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="4" /></td>
 																																							<td height="30" align="center">
 																																								<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="3" /></td>
 																																								<td height="30" align="center">
 																																									<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="2" /></td>
 																																									<td height="30" align="center">
 																																										<input type="radio" name="a<?php echo $rowf['f_id'].$rowf['f_hh']; ?>"  value="0" /></td>
 																																									</tr>


 																																								<?php } 

 																																							} ?>



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
