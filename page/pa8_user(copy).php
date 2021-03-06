 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">เพิ่มผู้ใช้งาน</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                     <li class="breadcrumb-item active">เพิ่มผู้ใช้งาน</li>
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
                         <h5 class="m-0">เพิ่มผู้ใช้งาน</h5>
                     </div>
                     <div class="card-body">

                         <?php if (isset($_GET['add'])||isset($_GET['edit_user'])): ?>

                         <?php else: ?>
                         <a href="./index.php?pa8&add" class="btn btn-success float-right"><i
                                 class="fas fa-plus"></i></a>
                         <?php endif ?>

                         <?php if (isset($_GET['add'])): ?>


                         <?php 
    
    function Show_kana($conn){

        $sqlkana=" SELECT * FROM kana ";
        $qrykana = mysqli_query($conn,$sqlkana);

echo "<option selected>เลือกคณะ</option>";
        while ($rowkana = $qrykana->fetch_array()) {
            
                 echo "<option value='".$rowkana['kana_id']."'>".$rowkana['kana_detail']."</option>";
                              
        }

    }
    function Show_saka($conn){

        $sqlsaka=" SELECT * FROM saka ";
        $qrysaka = mysqli_query($conn,$sqlsaka);

     echo "<option selected>เลือกสาขาวิชา/หลักสูตร</option>";   
        while ($rowsaka = $qrysaka->fetch_array()) {

                echo "<option value='".$rowsaka['saka_id']."'>".$rowsaka['saka_detail']." / ".$rowsaka['saka_laksut']."</option>";
 
           
        }

     }
    
                        ?>

                         <form role="form" action="page/pa8_user_db.php" method="post">

                             <div class="row">
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่ง</label>
                                         <input type="text" name="user_tumn" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อ</label>
                                         <input type="text" name="first_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>นามสกุล</label>
                                         <input type="text" name="last_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สถานะ</label>
                                         <select class="custom-select" name="user_status">
                                             <option selected>เลือกสถานะ</option>
                                             
                                             <option value="2">ผู้ประเมิน</option>
                                             <option value="0">ผู้ถูกประเมิน</option>
                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>คณะ</label>
                                         <select class="custom-select" name="user_kana">

                                             <?php Show_kana($conn,$user_kana_id); ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-8">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาวิชา/หลักสูตร</label>
                                         <select class="custom-select" name="user_saka">

                                             <?php Show_saka($conn,$user_saka_id); ?>

                                         </select>

                                     </div>
                                 </div>



                                 <div class="card-footer">
                                     <button type="submit" class="btn btn-primary">Submit</button>
                                     <a type="submit" class="btn btn-danger" href="./index.php?pa8">cancel</a>
                                 </div>

                             </div>

                             <input type="hidden" name="add_user">

                         </form>

                         <?php elseif (isset($_GET['edit_user'])):

                            $user_id = $_GET['user_id'];

                   
 							$sqlhuser=" SELECT * FROM user WHERE user_id =".$user_id;
 							$qryhuser = mysqli_query($conn,$sqlhuser);
 							$rowuser = mysqli_fetch_assoc($qryhuser);

                             $user_status = $rowuser['user_status'];
                             $user_kana_id = $rowuser['user_kana_id'];
                             $user_saka_id = $rowuser['user_saka_id'];

 							$user_statusck1 = '';
 							$user_statusck2 = '';
 							$user_statusck3 = '';
 							$user_statusck4 = '';

 							if ($user_status == 1) {
 								$user_statusck1 = 'selected';
 							}elseif ($user_status == 2) {
 								$user_statusck2 = 'selected';
 							}elseif ($user_status == 0) {
 								$user_statusck3 = 'selected';
 							}elseif ($user_status == 3) {
 								$user_statusck4 = 'selected';
                             }
                             
                             function Show_kana($conn,$user_kana_id){

                                $sqlkana=" SELECT * FROM kana ";
                                $qrykana = mysqli_query($conn,$sqlkana);
                                while ($rowkana = $qrykana->fetch_array()) {

                                    if ($user_kana_id == $rowkana['kana_id']) {
                                        echo "<option selected value='".$rowkana['kana_id']."'>".$rowkana['kana_detail']."</option>";
                                     }else{
                                         echo "<option value='".$rowkana['kana_id']."'>".$rowkana['kana_detail']."</option>";
                                    }
                                                                       
                                }

                            }
                            function Show_saka($conn,$user_saka_id){

                                $sqlsaka=" SELECT * FROM saka ";
                                $qrysaka = mysqli_query($conn,$sqlsaka);
                                while ($rowsaka = $qrysaka->fetch_array()) {

                                    if ($user_saka_id == $rowsaka['saka_id']) {
                                        echo "<option selected value='".$rowsaka['saka_id']."'>".$rowsaka['saka_detail']." / ".$rowsaka['saka_laksut']."</option>";
                                     }else{
                                        echo "<option value='".$rowsaka['saka_id']."'>".$rowsaka['saka_detail']." / ".$rowsaka['saka_laksut']."</option>";
                                    }

                                   
                                }

                            }
                                 

 							?>



                         <form role="form" action="page/pa8_user_db.php" method="post">

                             <div class="row">
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่ง</label>
                                         <input type="text" name="user_tumn" class="form-control"
                                             value="<?php echo($rowuser['user_tumn']) ?>" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อ</label>
                                         <input type="text" name="first_name" class="form-control"
                                             value="<?php echo($rowuser['first_name']) ?>" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>นามสกุล</label>
                                         <input type="text" name="last_name" class="form-control"
                                             value="<?php echo($rowuser['last_name']) ?>" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" class="form-control"
                                             value="<?php echo($rowuser['username']) ?>" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" class="form-control"
                                             value="<?php echo($rowuser['password']) ?>" placeholder="Enter ...">
                                     </div>
                                 </div>

                                 <div class="col-sm-4">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สถานะ</label>
                                         <select class="custom-select" name="user_status">

                                             
                                             <option <?php echo $user_statusck2; ?> value="2">ผู้ประเมิน</option>
                                             <option <?php echo $user_statusck3; ?> value="0">ผู้ถูกประเมิน</option>
                                             <option <?php echo $user_statusck4; ?> value="3">ยกเลิก</option>
                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>คณะ</label>
                                         <select class="custom-select" name="user_kana">

                                             <?php Show_kana($conn,$user_kana_id); ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-8">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาวิชา/หลักสูตร</label>
                                         <select class="custom-select" name="user_saka">

                                             <?php Show_saka($conn,$user_saka_id); ?>

                                         </select>

                                     </div>
                                 </div>


                             </div>
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <a type="submit" class="btn btn-danger" href="./index.php?pa8">cancel</a>
                             </div>
                             <input type="hidden" name="edit_user">
                             <input type="hidden" name="user_id" value="<?php echo($user_id) ?>">

                         </form>

                         <?php else: ?>

                         <?php 
 								include './conn.php';


 								$sqlhuser=" SELECT * FROM user WHERE user_status <> 1 ORDER BY user_id desc ";
 								$qryhuser = mysqli_query($conn,$sqlhuser);


 								?>



                         <table id="example1" class="table table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>ลำดับ</th>
                                     <th>ตำแหน่ง</th>
                                     <th>ชื่อ</th>
                                     <th>นามสกุล</th>
                                     <th>สถานะ</th>
                                     <th>แก้ไข</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php 
 										$i = 1;
 										while ($rowhuser = $qryhuser->fetch_array()) {
 											$uid = $rowhuser['user_id'];

 											?>


                                 <tr>
                                     <td><?php echo $i; ?></td>
                                     <td><?php echo $rowhuser['user_tumn']; ?></td>
                                     <td><?php echo $rowhuser['first_name']; ?></td>
                                     <td><?php echo $rowhuser['last_name']; ?></td>
                                     <td>
                                         <?php if ($rowhuser['user_status'] == 0): ?>
                                         <p>ผู้ถูกประเมิน</p>
                                         <?php elseif ($rowhuser['user_status'] == 2): ?>
                                         <p>ผู้ประเมิน</p>
                                         <?php elseif ($rowhuser['user_status'] == 3): ?>
                                         <p>
                                             <font color="red">ยกเลิก</font>
                                         </p>
                                         <?php endif ?>

                                     </td>

                                     <td width="10px">
                                         <?php if ($rowhuser['user_status'] == 3): ?>
                                         <a href="index.php?pa8&edit_user&user_id=<?php echo($uid) ?>"><i
                                                 class="far fa-edit"></i></a>&nbsp;&nbsp;
                                         <a href="page/pa8_user_db.php?del_user&user_id=<?php echo($uid) ?>"><i
                                                 class="far fa-trash-alt"></i></a>
                                         <?php else: ?>
                                         <a href="index.php?pa8&edit_user&user_id=<?php echo($uid) ?>"><i
                                                 class="far fa-edit"></i></a>&nbsp;&nbsp;
                                         <a href="page/pa8_user_db.php?del_user&user_id=<?php echo($uid) ?>"><i
                                                 class="far fa-trash-alt"></i></a>
                                         <?php endif ?>

                                     </td>

                                 </tr>

                                 <?php $i++; } ?>


                             </tbody>
                         </table>



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