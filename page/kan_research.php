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

                         if (isset($_GET['add_kan_research'])):
                            add();
                        elseif (isset($_GET['edit_kan_research'])):
                            edit();
                        elseif (isset($_GET['del_kan_research'])):
                            del();
                        else:
                        
                        ?>
                         <a href="./index.php?kan_research&add_kan_research" class="btn btn-success float-right"><i
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
             <th>จัดการ</th>
             
             
         </tr>
     </thead>
     <tbody>
         <?php 
        $i = 1;
        while ($rowresearch = $qryresearch->fetch_array()) {
        $kan_research_id = $rowresearch['kan_research_id'];
        ?>
         <tr align="center">
             <td align="center"><?php echo $i; ?></td>
             <td><?php echo $rowresearch['name_th']; ?></td>
             <td><?php echo $rowresearch['detail']; ?></td>
             <td>
                 <?php if ($rowresearch['research_file'] == "ไม่มีไฟล์" || $rowresearch['research_file'] == "") {
                    echo "ไม่มีไฟล์";
                 }else{ ?>
                 <a href="uploads/<?php echo $rowresearch['research_file']; ?>"
                     download><?php echo $rowresearch['research_file']; ?>
                     <?php } ?>
             </td>

             <td width="10px">
                 <?php if ($rowresearch['research_status'] == 0): ?>
                 <a href="index.php?kan_research&edit_kan_research&kan_research_id=<?php echo($kan_research_id) ?>"><i
                         class="far fa-edit"></i></a>&nbsp;&nbsp;
                 <a href="page/kan_research_db.php?del_kan_research&kan_research_id=<?php echo($kan_research_id) ?>"><i class="far fa-trash-alt"></i></a>
                 <?php else: ?>
                    <?php echo "<font color='red'>ยกเลิก</fon>"; ?>
                 <?php endif ?>
                 <a href="./index.php?print&kan_research_id=<?=$kan_research_id?>" target="_blank"><i class="fas fa-print"></i></a>
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

 <form role="form" action="page/kan_research_db.php" method="post" enctype="multipart/form-data">

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
         <a type="submit" class="btn btn-danger" href="./index.php?kan_research">cancel</a>
     </div>

     <input type="hidden" name="add_kan_research">

 </form>

 <?php
 }

 function edit()
 {
   
 include './conn.php';
    $kan_research_id = $_GET['kan_research_id'];
    $sqlhuser = " SELECT * FROM kan_research WHERE kan_research_id = '$kan_research_id' ";
    $qryhuser = mysqli_query($conn,$sqlhuser);
    $rowuser = mysqli_fetch_assoc($qryhuser);

    ?>

 <form role="form" action="page/kan_research_db.php" method="post" enctype="multipart/form-data">

     <div class="row">

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ชื่องานวิจัย</label>
                 <input type="text" name="name_th"  value="<?= $rowuser['name_th']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>รายละเอียดงานวิจัย</label>
                 <input type="text" name="detail" value="<?= $rowuser['detail']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

         <div class="col-sm-4">
             <!-- text input -->
             <div class="form-group">
                 <label>ไฟล์</label>
                 <input type="file" name="research_file" value="<?= $rowuser['research_file']; ?>" class="form-control" placeholder="Enter ...">
             </div>
         </div>

     </div>

     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
         <a type="submit" class="btn btn-danger" href="./index.php?kan_research">cancel</a>
     </div>

     <input type="hidden" name="edit_kan_research">
     <input type="hidden" name="kan_research_id" value="<?= $rowuser['kan_research_id'] ?>">

 </form>

 <?php
 }
 
 ?>