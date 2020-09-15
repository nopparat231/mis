 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลการจัดการคำสั่ง</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลคำสั่ง</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลคำสั่ง</h5>
                     </div>
                     <div class="card-body">

                         <?php 

                         if (isset($_GET['add'])):
                            add();
                        elseif (isset($_GET['edit_user'])):
                            edit();
                        elseif (isset($_GET['del_la'])):
                            del();
                        else:
                        
                        ?>
                         <a href="./index.php?order_management&add" class="btn btn-success float-right"><i
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
$sqlorder = " SELECT * FROM order_management  INNER JOIN user ON order_management.order_user_id = user.user_id ORDER BY order_id desc ";
$qryorder = mysqli_query($conn,$sqlorder);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">คำสั่งที่</th>
             <th>ชื่อ-นามสกุล</th>
             <th>วันที่</th>
             <th>คำสั่งจาก</th>
             <th>รายละเอียด</th>
             <th>ไฟล์</th>
             <th>สถานะ</th>


         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($roworder = $qryorder->fetch_array()) {
        $order_id = $roworder['order_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $roworder['first_name']."  ".$roworder['last_name']; ?></td>
             <td><?php echo $roworder['order_time']; ?></td>

             <td><?php echo $roworder['order_where']; ?></td>
             <td><?php echo $roworder['order_detail']; ?></td>
             <td>
                 <?php if ($roworder['order_file'] == "ไม่มีไฟล์" || $roworder['order_file'] == "") {
                    echo "ไม่มีไฟล์";
                 }else{ ?>
                 <a href="uploads/<?php echo $roworder['order_file']; ?>"
                     download><?php echo $roworder['order_file']; ?>
                     <?php } ?>
             </td>


             <td width="10px">
                 <?php if ($roworder['order_status'] == 0): ?>
                 <a href="index.php?order&edit_user&order_id=<?php echo($order_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/order_db.php?del_order&order_id=<?php echo($order_id) ?>"><i
                         class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <?php echo "<font color='red'>ยกเลิก</fon>"; ?>
                 <?php endif ?>
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

 <form role="form" action="page/order_management_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="order_user_id" style="width: 100%;">
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
                 <label>วันที่</label>
                 <input type="text" name="order_time" class="form-control" placeholder="Enter ...">
             </div>
         </div>


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เทอมที่สอน</label>
                 <select class="custom-select" name="kanzon_term">
                     <option selected>เลือก</option>
                     <option value="0">1</option>
                     <option value="1">2</option>

                 </select>
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="kanzon_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?kanzon">cancel</a>
     </div>

     <input type="hidden" name="add_kanzon">

 </form>

 <?php
 }

 function edit()
 {
   
    include './conn.php';

    $kanzon_id = $_GET['kanzon_id'];
    $sqlhuser = " SELECT * FROM kanzon INNER JOIN user ON kanzon.kanzon_user_id = user.user_id WHERE kanzon.kanzon_id = '$kanzon_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/kanzon_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="kanzon_user_id" style="width: 100%;">

                     <option selected="selected" value="<?= $rowuser['kanzon_user_id']; ?>">
                         <?= $rowuser['first_name']."  ".$rowuser['last_name']; ?>
                     </option>

                 </select>
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดการสอน</label>
                 <input type="text" name="kanzon_detail" value="<?= $rowuser['kanzon_detail']; ?>" class="form-control"
                     placeholder="Enter ...">
             </div>
         </div>


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เทอมที่สอน</label>
                 <select class="custom-select" name="kanzon_term">
                     <option value="<?= $rowuser['kanzon_term']; ?>" selected><?= $rowuser['kanzon_term']; ?></option>
                     <option >------</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                 </select>
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="kanzon_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?kanzon">cancel</a>
     </div>

     <input type="hidden" name="edit_kanzon">
     <input type="hidden" name="kanzon_id" value="<?= $rowuser['kanzon_id'] ?>">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>