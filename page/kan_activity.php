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
                         <a href="./index.php?kan_activity&add" class="btn btn-success float-right"><i
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
$qrykan_activity = mysqli_query($conn,$sqlkan_activity);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">งานกิจกรรมที่</th>
             <th>ชื่อกิจกรรม</th>
             <th>รายละเอียดกิจกรรม</th>
             <th>ไฟล์</th>
             <th>สถานะ</th>
             
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowkan_activity = $qrykan_activity->fetch_array()) {
        $la_id = $rowkan_activity['kan_activity_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowkan_activity['name_activity']; ?></td>
             <td><?php echo $rowkan_activity['detail']; ?></td>
             <td><?php echo $rowkan_activity['activity_file']; ?></td>

             
             
            
             
             
             

             <td width="10px">
                 <?php if ($rowkan_activity['kan_activity_id'] == 3): ?>
                 <a href="index.php?kan_activity&edit_user&kan_activity_id=<?php echo($kan_activity_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kan_activity&del_la&kan_activity_id=<?php echo($kan_activity_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <a href="index.php?kan_activity&edit_user&kan_activity_id=<?php echo($kan_activity_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="index.php?kan_activity&del_la&kan_activity_id=<?php echo($kan_activity_id) ?>"><i class="far fa-trash-alt"></i></a>
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

 <form role="form" action="page/kan_activity_db.php" method="post">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อกิจกรรม</label>
                 <input type="text" name="name_activity" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดกิจกรรม</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ไฟล์</label>
                 <input type="file" name="activity_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?kan_activity">cancel</a>
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

 <form role="form" action="page/kan_activity_db.php" method="post">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่อกิจกรรม</label>
                 <input type="text" name="name_activity" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดกิจกรรม</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ไฟล์</label>
                 <input type="file" name="activity_file" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?kan_activity">cancel</a>
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