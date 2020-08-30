 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลงานจัดการกิจกรรม</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลงานจัดการกิจกรรม</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลงานจัดการกิจกรรม</h5>
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
$sqlkan_activity = " SELECT * FROM kan_activity ";
$qrykanzon = mysqli_query($conn,$sqlkan_activity);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">งานกิจกรรมที่</th>
             <th>ชื่อกิจกรรม</th>
             <th>รายละเอียดกิจกรรม</th>
             <th>สถานะ</th>
             
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowkanzon = $qrykanzon->fetch_array()) {
        $la_id = $rowkanzon['kan_activity_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowkanzon['name_activity']; ?></td>
             <td><?php echo $rowkanzon['detail']; ?></td>
             
             
            
             
             
             

             <td width="10px">
                 <?php if ($rowkanzon['kan_activity_id'] == 3): ?>
                 <a href="index.php?pla&edit_user&la_id=<?php echo($la_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?pla&del_la&la_id=<?php echo($la_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <a href="index.php?pla&edit_user&la_id=<?php echo($la_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?pla&del_la&la_id=<?php echo($la_id) ?>"><i class="far fa-trash-alt"></i></a>
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

 <form role="form" action="page/pla_db.php" method="post">

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
                     <option value="3">ป่วย</option>
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
    $sqlhuser = " SELECT * FROM user ";
    $qryhuser = mysqli_query($conn,$sqlhuser);
    //$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/pla_db.php" method="post">

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
                     <option value="3">ป่วย</option>
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



     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?pla">cancel</a>
     </div>

     <input type="hidden" name="add_pla">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>