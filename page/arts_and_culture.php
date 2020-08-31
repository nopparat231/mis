 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">การจัดการศิลปวัฒนธรรม</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มการจัดการศิลปวัฒนธรรม</li>
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
                         <h5 class="m-0">เพิ่มการจัดการศิลปวัฒนธรรม</h5>
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
                         <a href="./index.php?arts_and_culture&add" class="btn btn-success float-right"><i
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
$sqlart = " SELECT * FROM arts_and_culture  INNER JOIN user ON arts_and_culture.art_and_culture_user_id = user.user_id ORDER BY artsculture_id  desc ";
$qryart = mysqli_query($conn,$sqlart);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">ลำดับที่</th>
             <th>ชื่อ-นามสกุล</th>
             <th>ชื่อศิลปวัฒนธรรม</th>
             <th>รายละเอียด</th>
             <th>ไฟล์</th>
             <th>สถานะ</th>
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowart = $qryart->fetch_array()) {
        $artsculture_id = $rowart['artsculture_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowart['first_name']."  ".$rowart['last_name']; ?></td>
             <td><?php echo $rowart['name_artculture']; ?></td>
                    
             <td><?php echo $rowart['detail']; ?></td>
             <td><?php echo $rowart['art_and_culture_file']; ?></td>  
             
             
             

             <td width="10px">
                 <?php if ($rowart['art_and_culture_status'] == 3): ?>
                 <a href="index.php?kanzon&edit_user&artsculture_id=<?php echo($artsculture_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kanzon&del_la&artsculture_id=<?php echo($artsculture_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <a href="index.php?kanzon&edit_user&artsculture_id=<?php echo($artsculture_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kanzon&del_la&artsculture_id=<?php echo($artsculture_id) ?>"><i class="far fa-trash-alt"></i></a>
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

 <form role="form" action="page/arts_and_culture.php" method="post">

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
                 <label>ชื่อศิลปวัฒนธรรม</label>
                 <input type="text" name="name_artculture" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียด</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="art_and_culture_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?arts_and_culture">cancel</a>
     </div>

     <input type="hidden" name="add_arts_and_culture">

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

 <form role="form" action="page/arts_and_culture_db.php" method="post">

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
                 <label>ชื่อศิลปวัฒนธรรม</label>
                 <input type="text" name="name_artculture" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียด</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="art_and_culture_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?arts_and_culture">cancel</a>
     </div>

     <input type="hidden" name="add_arts_and_culture">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>