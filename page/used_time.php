 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลการเข้าใช้งาน</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลการเข้าใช้งาน</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลการเข้าใช้งาน</h5>
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
                         <a href="./index.php?used_time&add" class="btn btn-success float-right"><i
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
$sqlused = " SELECT * FROM used_time  INNER JOIN user ON used_time.used_time_user_id = user.user_id ORDER BY used_time_id desc ";
$qryused = mysqli_query($conn,$sqlused);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">ลำดับที่</th>
             <th>ชื่อ</th>
             <th>วันที่</th>
             <th>หมายเหตุ</th>
             <th>สถานะ</th>

         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowused = $qryused->fetch_array()) {
        $kanzon_id = $rowused['used_time_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowused['first_name']."  ".$rowused['last_name']; ?></td>
             <td><?php echo $rowused['used_date']; ?></td>
             <td><?php echo $rowused['used_time_detail']; ?></td>

             <td width="10px">
                 <?php if ($rowused['used_time_status'] == 0): ?>
                 <a href="index.php?used_time&edit_user&used_time_id=<?php echo($used_time_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/used_time_db.php?del_used_time&used_time_id=<?php echo($used_time_id) ?>"><i
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

 <form role="form" action="page/used_time_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="used_time_user_id" style="width: 100%;">
                     <option selected="selected">เลือกชื่อผู้ใช้</option>

                     <?php

                        while ($rowuser = $qryhuser->fetch_array()) {
                            $usid = $rowuser["used_time_user_id"];
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
                 <input type="text" name="used_date" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>หมายเหตุ</label>
                 <input type="text" name="used_time_detail" class="form-control" placeholder="Enter ...">
             </div>
          </div>

         

         

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?used_time">cancel</a>
     </div>

     <input type="hidden" name="add">

 </form>

 <?php
 }

 function edit()
 {
   
    include './conn.php';

    $kanzon_id = $_GET['kanzon_id'];
    $sqlhuser = " SELECT * FROM kanzon INNER JOIN user ON kanzon.used_time_user_id = user.user_id WHERE kanzon.kanzon_id = '$kanzon_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/used_time_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="used_time_user_id" style="width: 100%;">
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
                 <input type="text" name="used_date" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>หมายเหตุ</label>
                 <input type="text" name="used_time_detail" class="form-control" placeholder="Enter ...">
             </div>
          </div>

         

         

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?used_time">cancel</a>
     </div>

     <input type="hidden" name="add_used_time">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>