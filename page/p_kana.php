 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">การจัดการประเมินของคณะ/สำนัก/กอง</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">การจัดการประเมินของคณะ/สำนัก/กอง</li>
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

                 <?php //if (isset($_GET['add'])) { ?>

                 <form id="formq" name="formq" method="post" action="page/p_kana_db.php">
                     <div class="card card-primary card-outline ">
                         <div class="card-header noprint">
                             <h5 class="m-0">
                                 เลือกประเมินของคณะ/สำนัก/กอง
                             </h5>
                         </div>
                         <div class="card-body">

                             <div class="container">
                                 <div class="row">
                                     <div class="col-md-1"></div>
                                     <div class="col-md-12">


                                         <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
                                             <tr>
                                                 <td width="75%" rowspan="2" align="center"><strong>รายการ</strong>
                                                 </td>
                                                 <td colspan="5" align="center"><strong>ระดับความคิดเห็น</strong></td>
                                             </tr>

                                             <tr>
                                                 <td width="5%" align="center"><strong>5</strong></td>
                                                 <td width="5%" align="center"><strong>4</strong></td>
                                                 <td width="5%" align="center"><strong>3</strong></td>
                                                 <td width="5%" align="center"><strong>2</strong></td>
                                                 <td width="5%" align="center"><strong>1</strong></td>
                                             </tr>

                                             <tr>
                                                 <td height="30" colspan="6" bgcolor="#F4F4F4">
                                                     <strong>เลือกประเมินของคณะ/สำนัก/กอง</strong>
                                                 </td>
                                             </tr>

                                             <?php 
                                             
                                             $sqlac = " SELECT * FROM kana ";
									                           $qrykana = mysqli_query($conn,$sqlac);
									                           //$rowkana = mysqli_fetch_assoc($qrykana);
                                             $rowcheckkana = mysqli_num_rows($qrykana);
                                             $user_id = $_SESSION["USER_ID"];

                                           
                                    
								                             while ($rowkana = $qrykana->fetch_array()) {
                                             $kana_detail = $rowkana['kana_detail'];
                                             $kana_id = $rowkana['kana_id'];

                                             $sqlacck = " SELECT * FROM p_kana WHERE p_kana_id_kana_id = '$kana_id' AND p_kana_user_id = '$user_id' ";
                                             $qrykanack = mysqli_query($conn,$sqlacck);
                                             //$rowkanack = mysqli_fetch_assoc($qrykanack);
                                             $rowcheckkanack = mysqli_num_rows($qrykanack);

                                             if ($rowcheckkanack > 0) {
                                                while ($rowkanack = $qrykanack->fetch_array()) {
                                            $ck = $rowkanack['p_kana_ac']; ?>
                                                <tr>
                                                 <td height="30">&nbsp;
                                                     <?= $kana_detail; ?>
                                                 </td>
                                                 <td height="30" align="center"><input type="radio" name="a1<?= $kana_id; ?>" value="5" <?php if($ck==5):echo 'checked'; else:echo ''; endif ?> /></td>
                                                 <td height="30" align="center"><input type="radio" name="a1<?= $kana_id; ?>" value="4" <?php if($ck==4):echo 'checked'; else:echo ''; endif ?> /></td>
                                                 <td height="30" align="center"><input type="radio" name="a1<?= $kana_id; ?>" value="3" <?php if($ck==3):echo 'checked'; else:echo ''; endif ?> /></td>
                                                 <td height="30" align="center"><input type="radio" name="a1<?= $kana_id; ?>" value="2" <?php if($ck==2):echo 'checked'; else:echo ''; endif ?> /></td>
                                                 <td height="30" align="center"><input type="radio" name="a1<?= $kana_id; ?>" value="1" <?php if($ck==1):echo 'checked'; else:echo ''; endif ?> /></td>
                                             </tr>

                                            <?php }
                                             }else{
                                            
                                             ?>

                                             <tr>
                                                 <td height="30">&nbsp;
                                                     <?= $kana_detail; ?>
                                                 </td>
                                                 <td height="30" align="center"><input type="radio"
                                                         name="a1<?= $kana_id; ?>" value="5" required="required" /></td>
                                                 <td height="30" align="center"><input type="radio"
                                                         name="a1<?= $kana_id; ?>" value="4" /></td>
                                                 <td height="30" align="center"><input type="radio"
                                                         name="a1<?= $kana_id; ?>" value="3" /></td>
                                                 <td height="30" align="center"><input type="radio"
                                                         name="a1<?= $kana_id; ?>" value="2" /></td>
                                                 <td height="30" align="center"><input type="radio"
                                                         name="a1<?= $kana_id; ?>" value="1" /></td>
                                             </tr>

                                             <?php } }?>

                                         </table>
                                         <br />
                                     </div>
                                 </div>
                             </div>


                         </div>

                         <div class="card-footer">
                           <?php if ($rowcheckkanack <= 0) { ?>
                             <button type="submit" class="btn btn-primary">Submit</button>
                             <a type="submit" class="btn btn-danger" href="./index.php?p_kana">cancel</a>
                           <?php }else{ ?>
                           <button disabled class="btn btn-primary">ประเมินแล้ว</button>
                           <?php } ?>
                         </div>

                         <input type="hidden" name="add_kana">
                         <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                     </div>
                 </form>

                 <?php// }else{ ?>


                 <?php// } ?>
             </div>
             <!-- /.col-md-6 -->
         </div>
         <!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->