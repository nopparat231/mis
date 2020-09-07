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

                         if (isset($_GET['add_arts_and_culture'])):
                            add();
                        elseif (isset($_GET['edit_arts_and_culture'])):
                            edit();
                        elseif (isset($_GET['del_arts_and_culture'])):
                            del();
                        else:
                        
                        ?>
                         <a href="./index.php?arts_and_culture&add_arts_and_culture" class="btn btn-success float-right"><i
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

             <td>
                 <?php if ($rowart['art_and_culture_file'] == "ไม่มีไฟล์") {
                    echo "ไม่มีไฟล์";
                 }else{ ?>
                 <a href="uploads/<?php echo $rowart['art_and_culture_file']; ?>" download><?php echo $rowart['art_and_culture_file']; ?>
                     <?php } ?>
             </td>


             <td width="10px">
                 <?php if ($rowart['art_and_culture_status'] == 0): ?>
                 <a href="index.php?arts_and_culture&edit_arts_and_culture&artsculture_id=<?php echo($artsculture_id) ?>">
                 <i class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/arts_and_culture_db.php?art_and_culture&del_arts_and_culture&artsculture_id=<?php echo($artsculture_id) ?>">
                 <i class="far fa-trash-alt"></i></a>
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

 <form role="form" action="page/arts_and_culture_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                  <select class="form-control select2" name="art_and_culture_user_id" style="width: 100%;">
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
    $artsculture_id = $_GET['artsculture_id'];
    $sqlhuser = " SELECT * FROM arts_and_culture INNER JOIN user ON arts_and_culture.art_and_culture_user_id = user.user_id WHERE arts_and_culture.artsculture_id = '$artsculture_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
    $rowuser = mysqli_fetch_assoc($qryhuser);
     
?>

 <form role="form" action="page/arts_and_culture_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อ-นามสกุล</label>
                 <select class="form-control select2" name="art_and_culture_user_id" style="width: 100%;">
                     <option selected="selected" value="<?= $rowuser['art_and_culture_user_id'] ?>" >
                         <?= $rowuser['first_name']."  ".$rowuser['last_name']; ?></option>

                 </select>
             </div>
         </div>

          <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อศิลปวัฒนธรรม</label>
                 <input type="text" name="name_artculture" value="<?= $rowuser['name_artculture'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียด</label>
                 <input type="text" name="detail" value="<?= $rowuser['detail'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="art_and_culture_file" value="<?= $rowuser['art_and_culture_file'] ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?arts_and_culture">cancel</a>
     </div>

     <input type="hidden" name="edit_arts_and_culture">
     <input type="hidden" name="artsculture_id" value="<?= $rowuser['artsculture_id'] ?>">

 </form>

 <?php
 }

 ?>