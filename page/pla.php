 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลการลา</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลการลา</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลการลา</h5>
                     </div>
                     <div class="card-body">

                         <?php 

                         if (isset($_GET['add'])):
                            add();
                        elseif (isset($_GET['edit_la'])):
                            edit();
                        elseif (isset($_GET['del_la'])):
                            del();
                        else:
                        
                        ?>
                         <a href="./index.php?pla&add" class="btn btn-success float-right"><i
                                 class="fas fa-plus"></i></a>
                         <?php shows(); ?>

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




 <?php 
function shows()
{

include './conn.php';
$sqlhkan_la = " SELECT * FROM kan_la INNER JOIN user ON kan_la.la_user_id = user.user_id ORDER BY la_id desc ";
$qryhkan_la = mysqli_query($conn,$sqlhkan_la);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">ลำดับ</th>
             <th>ชื่อ-นามสกุลของผู้ลา</th>
             <th>ตำแหน่งของผู้ลา</th>
             <th>ประเภทการลา</th>
             <th>วันที่เริ่มลา</th>
             <th>วันสิ้นสุดการลา</th>
             <th>จำนวนวันที่ลา</th>
             <th>จำนวนคงเหลือ</th>
             <th>ไฟล์</th>
             <th>แก้ไข</th>
             <th>พิมพ์</th>

         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowhkan_la = $qryhkan_la->fetch_array()) {
        $la_id = $rowhkan_la['la_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowhkan_la['first_name']."  ".$rowhkan_la['last_name']; ?></td>
             <td><?php echo $rowhkan_la['user_tumn']; ?></td>
             <td>
                 <?php if ($rowhkan_la['la_type'] == 0): ?>
                 <p>พักร้อน</p>
                 <?php elseif ($rowhkan_la['la_type'] == 1): ?>
                 <p>กิจ</p>
                 <?php elseif ($rowhkan_la['la_type'] == 2): ?>
                 <p>ปวย</p>
                 <?php elseif ($rowhkan_la['la_type'] == 3): ?>
                 <p>
                     <font color="red">ยกเลิก</font>
                 </p>
                 <?php endif ?>

             </td>
             <td><?php echo $rowhkan_la['la_start']; ?></td>
             <td><?php echo $rowhkan_la['la_end']; ?></td>
             <td><?php echo $rowhkan_la['la_total']; ?></td>
             <td><?php echo $rowhkan_la['la_balance']; ?></td>

             <td>
                 <?php if ($rowhkan_la['la_file'] == "ไม่มีไฟล์") {
                    echo "ไม่มีไฟล์";
                 }else{ ?>
                 <a href="uploads/<?php echo $rowhkan_la['la_file']; ?>" download><?php echo $rowhkan_la['la_file']; ?>
                     <?php } ?>
             </td>

             <td width="10px">
                 <?php if ($rowhkan_la['la_status'] == 0): ?>
                 <a href="index.php?pla&edit_la&la_id=<?php echo($la_id) ?>"><i class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/pla_db.php?del_pla&la_id=<?php echo($la_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <?php echo "<font color='red'>ยกเลิก</fon>"; ?>
                 <?php endif ?>
             </td>
             <td>
             <a href="./index.php?print&pla_id=<?=$la_id?>" target="_blank"><i class="fas fa-print"></i></a>
             </td>

         </tr>

         <?php $i++; } ?>

     </tbody>
 </table>


 <?php } ?>

 <?php 

 function add()
 {

    include './conn.php';
    $sqlhuser = " SELECT * FROM user ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	//$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/pla_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="la_user_id" style="width: 100%;">
                     <option selected="selected">เลือกชื่อผู้ใช้</option>

                     <?php

                        while ($rowuser = $qryhuser->fetch_array()) {
                            $usid = $rowuser["user_id"];
                            echo "<option value='$usid'>".$rowuser['first_name']."  ".$rowuser['last_name']."</option>";
                        }

                    ?>

                 </select>
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประเภทการลา</label>
                 <select class="custom-select" name="la_type">
                     <option selected>เลือกประเภทการลา</option>
                     <option value="0">พักร้อน</option>
                     <option value="1">กิจ</option>
                     <option value="2">ป่วย</option>
                     <option value="3">ยกเลิก</option>
                 </select>
             </div>
         </div>


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่เริ่มลา</label>
                 <input type="date" name="la_start" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่สิ้นสุดการลา</label>
                 <input type="date" name="la_end" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>จำนวนวันที่ลา</label>
                 <input type="number" name="la_total" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>จำนวนวันคงเหลือ</label>
                 <input type="number" name="la_balance" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพิ่มไฟล์</label>
                 <input type="file" name="la_file" class="form-control" required placeholder="Enter ...">
             </div>
         </div>

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?pla">cancel</a>
     </div>

     <input type="hidden" name="add_pla">

 </form>

 <?php
 }

 function edit()
 {
   
 include './conn.php';
    $la_id = $_GET['la_id'];
    $sqlhuser = " SELECT * FROM kan_la INNER JOIN user ON kan_la.la_user_id = user.user_id WHERE kan_la.la_id = '$la_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/pla_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="la_user_id" style="width: 100%;">
                     <option selected="selected" value="<?= $rowuser['la_user_id'] ?>" >
                         <?= $rowuser['first_name']."  ".$rowuser['last_name']; ?></option>

                 </select>
             </div>
         </div>


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประเภทการลา</label>
                 <select class="custom-select" name="la_type">
                     <option selected value="<?= $rowuser['la_type'] ?>">
                         <?php if($rowuser['la_type'] == '0'):echo 'พักร้อน';elseif($rowuser['la_type'] == '1'):echo 'กิจ';elseif($rowuser['la_type'] == '2'):echo 'ป่วย';elseif($rowuser['la_type'] == '3'):echo 'ยกเลิก'; endif?>
                     </option>
                     <option value="0">พักร้อน</option>
                     <option value="1">กิจ</option>
                     <option value="2">ป่วย</option>
                     <option value="3">ยกเลิก</option>
                 </select>
             </div>
         </div>


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่เริ่มลา</label>
                 <input type="date" name="la_start" value="<?= $rowuser['la_start'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่สิ้นสุดการลา</label>
                 <input type="date" name="la_end" value="<?= $rowuser['la_end'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>จำนวนวันที่ลา</label>
                 <input type="number" name="la_total" value="<?= $rowuser['la_total'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>จำนวนวันคงเหลือ</label>
                 <input type="number" name="la_balance" value="<?= $rowuser['la_balance'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพิ่มไฟล์</label>
                 <input type="file" name="la_file" value="uploads/<?= $rowuser['la_file'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?pla">cancel</a>
     </div>

     <input type="hidden" name="edit_pla">
     <input type="hidden" name="la_id" value="<?= $rowuser['la_id'] ?>">

 </form>

 <?php
 }

 ?>