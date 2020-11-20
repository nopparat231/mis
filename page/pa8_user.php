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
                                         <label>รหัสบัตรประชาชน</label>
                                         <input type="text" name="id" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อ</label>
                                         <input type="text" name="name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>นามสกุล</label>
                                         <input type="text" name="surname" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-1">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เพศ</label>
                                         <input type="text" name="sex" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีเกิด</label>
                                         <input type="text" name="date of birth" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สัญชาติ</label>
                                         <input type="text" name="nationality" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>บ้านเลขที่</label>
                                         <input type="text" name="house number" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>หมู่ที่</label>
                                         <input type="text" name="moo" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ถนน</label>
                                         <input type="text" name="road" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>แขวง</label>
                                         <input type="text" name="district" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เขต</label>
                                         <input type="text" name="area" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>จังหวัด</label>
                                         <input type="text" name="province" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เบอร์โทร</label>
                                         <input type="text" name="phone" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>รหัสไปษณีย์</label>
                                         <input type="text" name="post code" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>คณะ</label>
                                         <input type="text" name="faculty" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>หลักสูตร</label>
                                         <input type="text" name="department" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขา</label>
                                         <input type="text" name="branch" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาการสอน</label>
                                         <input type="text" name="teaching disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากร</label>
                                         <input type="text" name="personnel type" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากรย่อย</label>
                                         <input type="text" name="sub-personnel type" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งทางวิชาการ</label>
                                         <input type="text" name="academic position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่งทางบริหาร</label>
                                         <input type="text" name="administrative position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งในสายงานครู</label>
                                         <input type="text" name="name of position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับตำแหน่งข้าราชการ</label>
                                         <input type="text" name="civil servant level" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีที่เข้าทำงาน</label>
                                         <input type="text" name="date of employment" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระยะเวลาการจ้างทำงาน</label>
                                         <input type="text" name="term of employment" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เงินจ้างงาน</label>
                                         <input type="text" name="employment money" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับการศึกษาที่จบสูงสุด</label>
                                         <input type="text" name="highest graduate level" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อหลักสูตรที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="course name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>กลุ่มสาขาวิชาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="major graduate disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อสถาบันที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate institution name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเทศที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="country of graduation" class="form-control"
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


 								$sqlhuser=" SELECT * FROM user,user_data WHERE user_status <> 1 ORDER BY user_id desc ";
 								$qryhuser = mysqli_query($conn,$sqlhuser);


 								?>



                         <table id="example1" class="table table-bordered table-hover">
                             <thead bgcolor="blue">
                                 <tr>
                                     <th>ลำดับ</th>
                                     <th>ตำแหน่ง</th>
                                     <th>ชื่อ</th>
                                     <th>นามสกุล</th>
                                     <th>รหัสประจำตัวประชาชน</th>
                                     <th>เพศ</th>
                                     <th>สัญชาติ</th>
                                     <th>วัดเดือนปีเกิด</th>
                                     <th>เลขที่บ้าน</th>
                                     <th>หมู่ที่</th>
                                     <th>ถนน</th>
                                     <th>ตำบล/แขวง</th>
                                     <th>อำเภอ/เขต</th>
                                     <th>จังหวัด</th>
                                     <th>เบอร์โทรศัพท์</th>
                                     <th>รหัสไปรษณีย์</th>
                                     <th>คณะ/หน่วยงานที่สังกัด</th>
                                     <th>ภาควิชา</th>
                                     <th>สาขา</th>
                                     <th>กลุ่มสาขาวิชาที่สอน</th>
                                     <th>ประเภทบุคลการ</th>
                                     <th>ประเภทบุคลากรย่อย</th>
                                     <th>ตำแหน่งทางวิชาการ/ชำนาญการ</th>
                                     <th>ตำแหน่งทางบริหาร</th>
                                     <th>ชื่อตำแหน่งในสายงาน</th>
                                     <th>ระดับตำแหน่งข้าราชการ</th>
                                     <th>วัดเดือนปีที่เข้าทำงาน(พ.ศ.)</th>
                                     <th>ระยะเวลาการจ้างงาน</th>
                                     <th>เงินจ้างงาน</th>
                                     <th>ระดับการศึกษาที่จบสูงสุด</th>
                                     <th>ชื่อหลักสูตรที่จบการศึกษาสูงสุด</th>
                                     <th>กลุ่มสาขาวิชาที่จบการศึกษาสูงสุด</th>
                                     <th>สาขาวิชาที่จบการศึกษาสูงสุด</th>
                                     <th>ชื่อสถาบันที่จบการศึกษาสูงสุด</th>
                                     <th>ประเทศที่จบการศึกษาสูงสุด</th>
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
                                     <td><?php echo $rowhuser['id']; ?></td>
                                     <td><?php echo $rowhuser['sex']; ?></td>
                                     <td><?php echo $rowhuser['nationality']; ?></td>
                                     <td><?php echo $rowhuser['date of birth']; ?></td>
                                     <td><?php echo $rowhuser['house number']; ?></td>
                                     <td><?php echo $rowhuser['moo']; ?></td>
                                     <td><?php echo $rowhuser['road']; ?></td>
                                     <td><?php echo $rowhuser['district']; ?></td>
                                     <td><?php echo $rowhuser['area']; ?></td>
                                     <td><?php echo $rowhuser['province']; ?></td>
                                     <td><?php echo $rowhuser['phone']; ?></td>
                                     <td><?php echo $rowhuser['post code']; ?></td>
                                     <td><?php echo $rowhuser['faculty']; ?></td>
                                     <td><?php echo $rowhuser['department']; ?></td>
                                     <td><?php echo $rowhuser['branch']; ?></td>
                                     <td><?php echo $rowhuser['teaching disciplines']; ?></td>
                                     <td><?php echo $rowhuser['personnel type']; ?></td>
                                     <td><?php echo $rowhuser['sub-personnel type']; ?></td>
                                     <td><?php echo $rowhuser['academic position']; ?></td>
                                     <td><?php echo $rowhuser['administrative position']; ?></td>
                                     <td><?php echo $rowhuser['name of position']; ?></td>
                                     <td><?php echo $rowhuser['civil servant level']; ?></td>
                                     <td><?php echo $rowhuser['date of employment']; ?></td>
                                     <td><?php echo $rowhuser['term of employment']; ?></td>
                                     <td><?php echo $rowhuser['employment money']; ?></td>
                                     <td><?php echo $rowhuser['highest graduate level']; ?></td>
                                     <td><?php echo $rowhuser['course name']; ?></td>
                                     <td><?php echo $rowhuser['graduate disciplines']; ?></td>
                                     <td><?php echo $rowhuser['major graduate disciplines']; ?></td>
                                     <td><?php echo $rowhuser['graduate institution name']; ?></td>
                                     <td><?php echo $rowhuser['country of graduation']; ?></td>
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


                                <html>
                                <body>

                                <h1>The fieldset element</h1>

                                <form action="/action_page.php">
                                 <fieldset>
                                  <legend>Personalia:</legend>
                                  <label for="fsong">song name:</label>
                                  <input type="text" id="fsong" name="fsong"><br><br>
                                  <label for="fname">First name:</label>
                                  <input type="text" id="fname" name="fname"><br><br>
                                  <label for="lname">Last name:</label>
                                  <input type="text" id="lname" name="lname"><br><br>
                                  <label for="email">Email:</label>
                                  <input type="email" id="email" name="email"><br><br>
                                  <label for="birthday">Birthday:</label>
                                  <input type="date" id="birthday" name="birthday"><br><br>
                                  <input type="submit" value="Submit">
                                 </fieldset>
                                </form>

                                </body>
                                </html>
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