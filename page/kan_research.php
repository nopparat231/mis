 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลงานวิจัย</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มข้อมูลงานวิจัย</li>
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
                         <h5 class="m-0">เพิ่มข้อมูลงานวิจัย</h5>
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
                         <a href="./index.php?kan_research&add" class="btn btn-success float-right"><i
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
$sqlkan_research = " SELECT * FROM kan_research ";
$qryresearch = mysqli_query($conn,$sqlkan_research);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">งานวิจัยที่</th>
             <th>ชื่องานวิจัย</th>
             <th>รายละเอียดงานวิจัย</th>
             <th>ไฟล์</th>
             <th>สถานะ</th>
             
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowresearch = $qryresearch->fetch_array()) {
        $la_id = $rowresearch['kan_research_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowresearch['name_th']; ?></td>
             <td><?php echo $rowresearch['detail']; ?></td>
             <td><?php echo $rowresearch['research_file']; ?></td>
             
             
            
             
             
             

             <td width="10px">
                 <?php if ($rowresearch['kan_research_id'] == 0): ?>
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

 <form role="form" action="page/kan_research_db.php" method="post">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่องานวิจัย</label>
                 <input type="text" name="name_th" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดงานวิจัย</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ไฟล์</label>
                 <input type="file" name="research_file" class="form-control" placeholder="Enter ...">
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

 <form role="form" action="page/kan_research_db.php" method="post">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่องานวิจัย</label>
                 <input type="text" name="name_th" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดงานวิจัย</label>
                 <input type="text" name="detail" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ไฟล์</label>
                 <input type="file" name="research_file" class="form-control" placeholder="Enter ...">
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