 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">ข้อมูลเกณฑ์การประเมิน</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">การจัดการเกณฑ์การประเมิน</li>
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
                         <h5 class="m-0">การจัดการเกณฑ์การประเมิน</h5>
                     </div>
                     <div class="card-body">

                         <?php 

                         if (isset($_GET['add_p_rate'])):
                            add();
                        elseif (isset($_GET['edit_p_rate'])):
                            edit();
                        elseif (isset($_GET['del_p_rate'])):
                            del();
                        else:
                        
                        ?>
                         <a href="./index.php?p_rate&add_p_rate" class="btn btn-success float-right"><i
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
$sqlf = " SELECT * FROM f_pam ";
$qryf = mysqli_query($conn,$sqlf);

?>

 <table id="example1" class="table table-bordered table-hover">
     <thead>
         <tr align="center">
             <th width="3px">ลำดับที่</th>
             <th>เกณฑ์การประเมิน</th>
             <th>คะแนน</th>
             
             <th>สถานะ</th>

         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowf = $qryf->fetch_array()) {
        $f_id = $rowf['f_id'];
        ?>
         <tr align="left" style="font-size:small;">
             <td align="left"><?php echo $i; ?></td>
         
             <td><?php echo $rowf['f_hhh']; ?></td>

             <td><?php echo $rowf['f_score']; ?></td>

             <td width="10px">
                 <?php if ($rowf['f_staus'] == 0): ?>
                 <a href="index.php?p_rate&edit_p_rate&f_id=<?php echo($f_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/p_rate_db.php?del_p_rate&f_id=<?php echo($f_id) ?>"><i
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
    $sqlhuser = " SELECT * FROM p_pam ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	//$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/p_rate_db.php" method="post" enctype="multipart/form-data">

     <div class="row">


         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เกณฑ์การประเมิน</label>
                 <input type="text" name="f_hhh" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>คะแนน</label>
                 <input type="number" name="f_score" class="form-control" placeholder="Enter ...">
             </div>
         </div>


     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?p_rate">cancel</a>
     </div>

     <input type="hidden" name="add_p_rate">

 </form>

 <?php
 }

 function edit()
 {
   
    include './conn.php';

    $f_id = $_GET['f_id'];
    $sqlhuser = " SELECT * FROM f_pam WHERE f_id = '$f_id' ";
 	$qryhuser = mysqli_query($conn,$sqlhuser);
 	$rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/p_rate_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

     <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>เกณฑ์การประเมิน</label>
                 <input type="text" name="f_hhh" value="<?= $rowuser['f_hhh']; ?>"  class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>คะแนน</label>
                 <input type="number" name="f_score" value="<?= $rowuser['f_score']; ?>"  class="form-control" placeholder="Enter ...">
             </div>
         </div>
       

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?p_rate">cancel</a>
     </div>

     <input type="hidden" name="edit_p_rate">
     <input type="hidden" name="f_id" value="<?= $rowuser['f_id'] ?>">
     <input type="hidden" name="f_th" value="<?= $rowuser['f_th'] ?>">
     <input type="hidden" name="f_h_id" value="<?= $rowuser['f_h_id'] ?>">
     <input type="hidden" name="f_pam_num" value="<?= $rowuser['f_pam_num'] ?>">

 </form>

 <?php
 }
 
 function del()
 {
    echo "del";
 }
 
 ?>