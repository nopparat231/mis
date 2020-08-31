 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลการสอน</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลการสอน</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลการสอน</h5>
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
                         <a href="./index.php?kanzon&add" class="btn btn-success float-right"><i
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
$sqlkanzon = " SELECT * FROM kanzon  INNER JOIN user ON kanzon.kanzon_user_id = user.user_id ORDER BY kanzon_id desc ";
$qrykanzon = mysqli_query($conn,$sqlkanzon);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">การสอนไอดี</th>
             <th>ชื่อ-นามสกุลของผู้สอน</th>
             <th>รายละเอียดการสอน</th>
             <th>เทอมที่สอน</th>
             <th>ไฟล์</th>
             <th>สถานะ</th>
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowkanzon = $qrykanzon->fetch_array()) {
        $kanzon_id = $rowkanzon['kanzon_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowkanzon['first_name']."  ".$rowkanzon['last_name']; ?></td>
             <td><?php echo $rowkanzon['kanzon_detail']; ?></td>
                    
             <td><?php echo $rowkanzon['kanzon_term']; ?></td>
             <td><?php echo $rowkanzon['kanzon_file']; ?></td>  
             
             
             

             <td width="10px">
                 <?php if ($rowkanzon['kanzon_status'] == 3): ?>
                 <a href="index.php?kanzon&edit_user&kanzon_id=<?php echo($kanzon_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kanzon&del_la&kanzon_id=<?php echo($kanzon_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <a href="index.php?kanzon&edit_user&kanzon_id=<?php echo($kanzon_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kanzon&del_la&kanzon_id=<?php echo($kanzon_id) ?>"><i class="far fa-trash-alt"></i></a>
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

 <form role="form" action="page/kanzon_db.php" method="post">

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
                 <label>รายละเอียดการสอน</label>
                 <input type="text" name="kanzon_detail" class="form-control" placeholder="Enter ...">
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
    $sqlhuser = " SELECT * FROM user ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	//$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/kanzon_db.php" method="post">

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
                 <label>รายละเอียดการสอน</label>
                 <input type="text" name="kanzon_detail" class="form-control" placeholder="Enter ...">
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
 
 function del()
 {
    echo "del";
 }
 
 ?>