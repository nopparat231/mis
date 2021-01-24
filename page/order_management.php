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
                        elseif (isset($_GET['edit_order'])):
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
$sqlorder = " SELECT * FROM order_management ORDER BY order_id desc ";
$qryorder = mysqli_query($conn,$sqlorder);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th>คำสั่งที่</th>
             <th>คำสั่งเรื่อง</th>
             <th>วันที่</th>
             <th>คำสั่งจาก</th>
             <th>ประเภทคำสั่ง</th>
             <th>ประธาน</th>
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
             <td><?php echo $roworder['order_name']; ?></td>
             <td><?php echo $roworder['order_time']; ?></td>

             <td><?php echo $roworder['order_where']; ?></td>
             <td><?php echo $roworder['order_type']; ?></td>
             <td><?php echo $roworder['order_head']; ?></td>

             <td><?php echo $roworder['order_detail']; ?></td>
             <td>
                 <?php if ($roworder['order_file'] == "ไม่มีไฟล์" || $roworder['order_file'] == "") {
                    echo "ไม่มีไฟล์";
                 }else{ ?>
                 <a href="uploads/<?php echo $roworder['order_file']; ?>"
                     download><?php echo $roworder['order_file']; ?>
                     <?php } ?>
             </td>


             <td>
                 <?php if ($roworder['order_status'] == 0): ?>
                 <a href="index.php?order_management&edit_order&order_id=<?php echo($order_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/order_management_db.php?del_order&order_id=<?php echo($order_id) ?>"><i
                         class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                 <?php echo "<font color='red'>ยกเลิก</fon>"; ?>
                 <?php endif ?>
                 <a href="./index.php?print&order_id=<?=$order_id?>" target="_blank"><i class="fas fa-print"></i></a>
             </td>

         </tr>

         <?php $i++; } ?>

     </tbody>
 </table>


 <?php } ?>

 <?php 

 function add()
 {



    ?>

 <form role="form" action="page/order_management_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
             <label>คำสั่งเรื่อง</label>
                 <input type="text" name="order_name" class="form-control" placeholder="คำสั่งเรื่อง">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่</label>
                 <input type="date" name="order_time" class="form-control" placeholder="วันที่">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>คำสั่งจาก</label>
                 <input type="text" name="order_where" class="form-control" placeholder="คำสั่งจาก">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประเภทคำสั่ง</label>
                 <input type="text" name="order_type" class="form-control" placeholder="ประเภทคำสั่ง">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประธาน</label>
                 <input type="text" name="order_head" class="form-control" placeholder="ประธาน">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียด</label>
                 <input type="text" name="order_detail" class="form-control" placeholder="รายละเอียด">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="order_file" class="form-control" placeholder="เพื่มไฟล์ข้อมูล">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?order_management">cancel</a>
     </div>

     <input type="hidden" name="add_order">

 </form>

 <?php
 }

 function edit()
 {
   
    include './conn.php';

    $order_id = $_GET['order_id'];
    $sqlhuser = " SELECT * FROM order_management WHERE order_id = '$order_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/order_management_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

     <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
             <label>คำสั่งเรื่อง</label>
                 <input type="text" name="order_name" value="<?= $rowuser['order_name']; ?>" class="form-control" placeholder="คำสั่งเรื่อง">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>วันที่</label>
                 <input type="date" name="order_time" value="<?= $rowuser['order_time']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>คำสั่งจาก</label>
                 <input type="text" name="order_where" value="<?= $rowuser['order_where']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประเภทคำสั่ง</label>
                 <input type="text" name="order_type" value="<?= $rowuser['order_type']; ?>" class="form-control" placeholder="ประเภทคำสั่ง">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ประธาน</label>
                 <input type="text" name="order_head" value="<?= $rowuser['order_head']; ?>" class="form-control" placeholder="ประธาน">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียด</label>
                 <input type="text" name="order_detail" value="<?= $rowuser['order_detail']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เพื่มไฟล์ข้อมูล</label>
                 <input type="file" name="order_file" value="<?= $rowuser['order_file']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?order_management">cancel</a>
     </div>

     <input type="hidden" name="edit_order">
     <input type="hidden" name="order_id" value="<?= $rowuser['order_id']; ?>">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>