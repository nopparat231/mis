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
                             เลือกรายชื่อประเมิน
                         </h5>
                     </div>
                     <div class="card-body">


                         <?php 
						include './conn.php';

						$user_id = $_SESSION["USER_ID"];

						$sqlhuser=" SELECT * FROM user WHERE user_id = '$user_id' ";
						$qryhuser = mysqli_query($conn,$sqlhuser);
                         //$rowhuser = mysqli_fetch_assoc($qryhuser);
                         
                         $sqlhuserrr =" SELECT * FROM user INNER JOIN f_action ON user.user_id = f_action.f_ac_user_h_id WHERE user_id = '$user_id' ";
                         $qryhuserrr = mysqli_query($conn,$sqlhuserrr);
                         $rowhuserrr = mysqli_fetch_assoc($qryhuserrr);

                         $sqlhusere =" SELECT * FROM user WHERE user_id = '$user_id' ";
						 $qryhusere = mysqli_query($conn,$sqlhusere);
                         $rowhusere = mysqli_fetch_assoc($qryhusere);

                         $sqlhuserehh =" SELECT * FROM user WHERE user_id = '$user_id' ";
						 $qryhuserehh = mysqli_query($conn,$sqlhuserehh);
                         $rowhuserehh = mysqli_fetch_assoc($qryhuserehh);
                         $huser_id = $rowhuserehh['user_head'];

                         $sqlhuserehhrr =" SELECT * FROM user WHERE user_id = '$huser_id' ";
						 $qryhuserehhrr = mysqli_query($conn,$sqlhuserehhrr);
                         $rowhuserehhrr = mysqli_fetch_assoc($qryhuserehhrr);

    
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

	                                $sqlac = " SELECT * FROM f_action WHERE f_ac_user_c_id =  '$user_id' ";
									$qryac = mysqli_query($conn,$sqlac);
									$rowac = mysqli_fetch_assoc($qryac);
                                    $rowcheckac = mysqli_num_rows($qryac);
                                    $f_ac_user_h_id = $rowac['f_ac_user_h_id'];
                                    $f_ac_status = $rowac['f_ac_user_h_id'];
                                    
                                    if ($f_ac_user_h_id <> $user_id ){

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

									$sqlac3 = " SELECT * FROM f_phhh WHERE f_phhh_user_c_id =  '$uid' AND f_phhh_status = 0 ";
									$qryac3 = mysqli_query($conn,$sqlac3);
									$rowac3 = mysqli_fetch_assoc($qryac3);
									$rowcheckac3 = mysqli_num_rows($qryac3);




									?>


                                 <tr>
                                     <td><?php echo $rowhuser['user_tumn']; ?></td>
                                     <td><?php echo $rowhuser['first_name']; ?></td>
                                     <td><?php echo $rowhuser['last_name']; ?></td>

                                     <?php 

										if ($rowcheckac1 > 0 && $rowcheckac2 > 0 && $rowcheckac3 > 0 ) { ?>

                                     <td>หัวหน้าประเมินแล้ว</td>
                                     <td width="5px" style="text-align: center;"><a
                                             href="index.php?ph&print&showphhh&user_c_id=<?php echo($uid) ?>"
                                             target="_blank"><i class="fas fa-print"></i></a></td>

                                     <?php }elseif ($rowcheckac1 > 0 && $rowcheckac2 > 0 && $rowcheckac3 <= 0 ){ ?>
                                     <td>หัวหน้ายังประเมินไม่ครบ</td>
                                     <td width="5px"><i class="fas fa-arrow-right isDisabled"></i></td>

                                     <?php }elseif ($rowcheckac1 > 0 && $rowcheckac2 <= 0 && $rowcheckac3 <= 0 ){ ?>
                                     <td>หัวหน้ายังประเมินไม่ครบ</td>
                                     <td width="5px"><i class="fas fa-arrow-right isDisabled"></i></td>

                                     <?php }else{ ?>
                                     <td>หัวหน้ายังไม่ประเมิน</td>
                                     <td width="5px"><i class="fas fa-arrow-right isDisabled"></i></td>

                                     <?php } ?>
                                 </tr>

                                 <?php } ?>

                                 <?php } ?>
                                 <?php
                                 
                                    $f_ac_user_h_idr = $rowhuserrr['f_ac_user_h_id'];
                                    $f_ac_statusr = $rowhuserrr['f_ac_status'];

                                    if (isset($_GET['p_head'])) {
    
                                    if ($f_ac_user_h_idr == $user_id && $f_ac_statusr == 2){ ?>
                                 <tr>
                                     <td><?php echo $rowhuserehhrr['user_tumn']; ?></td>
                                     <td><?php echo $rowhuserehhrr['first_name']; ?></td>
                                     <td><?php echo $rowhuserehhrr['last_name']; ?></td>
                                     <td>ประเมินหัวหน้าแล้ว</td>
                                     <td width="5px" style="text-align: center;"><a
                                             href="index.php?ph&print&showphhh&user_c_id=<?php echo($user_id) ?>"
                                             target="_blank"><i class="fas fa-print"></i></a></td>

                                 </tr>
                                 <?php }else{ ?>
                                 <tr>
                                     <td><?php echo $rowhuserehhrr['user_tumn']; ?></td>
                                     <td><?php echo $rowhuserehhrr['first_name']; ?></td>
                                     <td><?php echo $rowhuserehhrr['last_name']; ?></td>
                                     <td>ยังไม่ประเมินหัวหน้า</td>

                                     <td width="5px"><a
                                             href="index.php?pa4&user_c_id=<?php echo ($rowhuserehhrr['user_id']) ?>&type=2&my=<?php echo ($rowhuserehhrr['user_id']) ?>">
                                             <i class="fas fa-arrow-right"></i></a>
                                     </td>
                                 </tr>
                                 <?php }  }elseif(isset($_GET['p_my'])){?>

                                 <?php   if ($f_ac_user_h_idr == $user_id && $f_ac_statusr == 1){ ?>
                                 <tr>
                                     <td><?php echo $rowhusere['user_tumn']; ?></td>
                                     <td><?php echo $rowhusere['first_name']; ?></td>
                                     <td><?php echo $rowhusere['last_name']; ?></td>
                                     <td>ประเมินตัวเองแล้ว</td>
                                     <td width="5px" style="text-align: center;"><a
                                             href="index.php?ph&print&showphhh&user_c_id=<?php echo($user_id) ?>"
                                             target="_blank"><i class="fas fa-print"></i></a></td>

                                 </tr>
                                 <?php }else{ ?>
                                 <tr>
                                     <td><?php echo $rowhusere['user_tumn']; ?></td>
                                     <td><?php echo $rowhusere['first_name']; ?></td>
                                     <td><?php echo $rowhusere['last_name']; ?></td>
                                     <td>ยังไม่ประเมินตัวเอง</td>

                                     <td width="5px"><a
                                             href="index.php?pa4&user_c_id=<?php echo ($rowhusere['user_id']) ?>&type=2&my=<?php echo ($rowhusere['user_id']) ?>">
                                             <i class="fas fa-arrow-right"></i></a>
                                     </td>
                                 </tr>
                                 <?php } } ?>

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