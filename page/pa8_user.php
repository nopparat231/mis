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
<?php include 'pa8_user_model.php'; ?>

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">


                 <div class="card">
                     <div class="card-header noprint">
                         <h5 class="m-0">เพิ่มผู้ใช้งาน</h5>
                     </div>
                     <div class="card-body">

                         <?php
                         include 'class_db.php';
                         if (isset($_GET['add'])||isset($_GET['edit_user'])): ?>

                         <?php else: ?>
                         <a href="./index.php?pa8&add" class="btn btn-success float-right"><i
                                 class="fas fa-plus"></i></a>
                                 <button href="./index.php?pa8&add" class="btn btn-success float-right mr-2" data-toggle="modal" data-target="#modal-default_upf">
                                 <i class="fas fa-file-upload"></i></button>
                         <?php endif ?>

                         <?php if (isset($_GET['add'])):
                            
                            
                            ?>


                         <form role="form" action="page/pa8_user_db.php" method="post">

                             <div class="row">
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>รหัสบัตรประชาชน</label>
                                         <input type="number" name="user_data_id_card" maxlength="13"
                                             class="form-control" placeholder="Enter ..."
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อ</label>
                                         <input type="text" name="first_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>นามสกุล</label>
                                         <input type="text" name="last_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-1">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เพศ</label>
                                         <input type="text" name="sex" class="form-control" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีเกิด</label>
                                         <input type="date" name="date_of_birth" class="form-control"
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
                                         <input type="text" name="house_number" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>หมู่ที่</label>
                                         <input type="text" name="moo" class="form-control" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ถนน</label>
                                         <input type="text" name="road" class="form-control" placeholder="Enter ...">
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
                                         <input type="text" name="area" class="form-control" placeholder="Enter ...">
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
                                         <input type="text" name="phone" class="form-control" maxlength="10"
                                             placeholder="Enter ..."
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>รหัสไปษณีย์</label>
                                         <input type="number" name="post_code" class="form-control" maxlength="5"
                                             placeholder="Enter ..."
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>คณะ</label>
                                         <input type="text" name="faculty" class="form-control" placeholder="Enter ...">
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
                                         <input type="text" name="branch" class="form-control" placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาการสอน</label>
                                         <input type="text" name="teaching_disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากร</label>
                                         <input type="text" name="personnel_type" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากรย่อย</label>
                                         <input type="text" name="sub_personnel_type" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งทางวิชาการ</label>
                                         <input type="text" name="academic_position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่งทางบริหาร</label>
                                         <input type="text" name="administrative_position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งในสายงานครู</label>
                                         <input type="text" name="name_of_position" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับตำแหน่งข้าราชการ</label>
                                         <input type="text" name="civil_servant_level" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีที่เข้าทำงาน</label>
                                         <input type="date" name="date_of_employment" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระยะเวลาการจ้างทำงาน</label>
                                         <input type="text" name="term_of_employment" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เงินจ้างงาน</label>
                                         <input type="text" name="employment_money" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับการศึกษาที่จบสูงสุด</label>
                                         <input type="text" name="highest_graduate_level" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อหลักสูตรที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="course_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>กลุ่มสาขาวิชาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate_disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="major_graduate_disciplines" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อสถาบันที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate_institution_name" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเทศที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="country_of_graduation" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่ง</label>
                                         <input type="text" name="user_tumn" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ผู้บังคับบัญชา</label>
                                         <select class="custom-select" name="user_head">

                                             <?php
                                              $u_id = $_SESSION["USER_ID"];
                                              Show_h_user_all($u_id);
                                              ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" autocomplete="off" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" autocomplete="off" class="form-control"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
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

                                             <?php Show_kana_all(); ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-8">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาวิชา/หลักสูตร</label>
                                         <select class="custom-select" name="user_saka">

                                             <?php Show_saka_all(); ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-8">
                                     <!-- text input -->
                                     <div class="form-group">

                                         <div class="card-footer">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             <a type="submit" class="btn btn-danger" href="./index.php?pa8">cancel</a>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                             <input type="hidden" name="add_user">

                         </form>

                         <?php elseif (isset($_GET['edit_user'])):

                            $user_id = $_GET['user_id'];

                   
 							$sqlhuser=" SELECT * FROM user INNER JOIN user_data ON user.user_id = user_data.user_id WHERE user.user_id = '$user_id' ";
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
                                         <label>รหัสบัตรประชาชน</label>
                                         <input type="number" name="user_data_id_card" maxlength="13"
                                             class="form-control" placeholder="Enter ..." value="<?=$rowuser['user_data_id_card']?>"
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อ</label>
                                         <input type="text" name="first_name" class="form-control" value="<?=$rowuser['first_name']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>นามสกุล</label>
                                         <input type="text" name="last_name" class="form-control" value="<?=$rowuser['last_name']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-1">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เพศ</label>
                                         <input type="text" name="sex" class="form-control" value="<?=$rowuser['sex']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีเกิด</label>
                                         <input type="date" name="date_of_birth" class="form-control" value="<?=$rowuser['date_of_birth']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สัญชาติ</label>
                                         <input type="text" name="nationality" class="form-control" value="<?=$rowuser['nationality']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>บ้านเลขที่</label>
                                         <input type="text" name="house_number" class="form-control" value="<?=$rowuser['house_number']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>หมู่ที่</label>
                                         <input type="text" name="moo" class="form-control" value="<?=$rowuser['moo']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ถนน</label>
                                         <input type="text" name="road" class="form-control" value="<?=$rowuser['road']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>แขวง</label>
                                         <input type="text" name="district" class="form-control" value="<?=$rowuser['district']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เขต</label>
                                         <input type="text" name="area" class="form-control"  value="<?=$rowuser['area']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>จังหวัด</label>
                                         <input type="text" name="province" class="form-control" value="<?=$rowuser['province']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เบอร์โทร</label>
                                         <input type="text" name="phone" class="form-control" maxlength="10"  value="<?=$rowuser['phone']?>"
                                             placeholder="Enter ..."
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>รหัสไปษณีย์</label>
                                         <input type="number" name="post_code" class="form-control" maxlength="5" value="<?=$rowuser['post_code']?>"
                                             placeholder="Enter ..."
                                             oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>คณะ</label>
                                         <input type="text" name="faculty" class="form-control" maxlength="5" value="<?=$rowuser['faculty']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>หลักสูตร</label>
                                         <input type="text" name="department" class="form-control" value="<?=$rowuser['department']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขา</label>
                                         <input type="text" name="branch" class="form-control" value="<?=$rowuser['branch']?>"
                                          placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาการสอน</label>
                                         <input type="text" name="teaching_disciplines" class="form-control" value="<?=$rowuser['teaching_disciplines']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากร</label>
                                         <input type="text" name="personnel_type" class="form-control" value="<?=$rowuser['personnel_type']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเภทบุคลากรย่อย</label>
                                         <input type="text" name="sub_personnel_type" class="form-control" value="<?=$rowuser['sub_personnel_type']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งทางวิชาการ</label>
                                         <input type="text" name="academic_position" class="form-control" value="<?=$rowuser['academic_position']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่งทางบริหาร</label>
                                         <input type="text" name="administrative_position" class="form-control" value="<?=$rowuser['administrative_position']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อตำแหน่งในสายงานครู</label>
                                         <input type="text" name="name_of_position" class="form-control" value="<?=$rowuser['name_of_position']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับตำแหน่งข้าราชการ</label>
                                         <input type="text" name="civil_servant_level" class="form-control" value="<?=$rowuser['civil_servant_level']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>วันเดือนปีที่เข้าทำงาน</label>
                                         <input type="date" name="date_of_employment" class="form-control" value="<?=$rowuser['date_of_employment']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระยะเวลาการจ้างทำงาน</label>
                                         <input type="text" name="term_of_employment" class="form-control" value="<?=$rowuser['term_of_employment']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>เงินจ้างงาน</label>
                                         <input type="text" name="employment_money" class="form-control" value="<?=$rowuser['employment_money']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ระดับการศึกษาที่จบสูงสุด</label>
                                         <input type="text" name="highest_graduate_level" class="form-control" value="<?=$rowuser['highest_graduate_level']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อหลักสูตรที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="course_name" class="form-control" value="<?=$rowuser['course_name']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>กลุ่มสาขาวิชาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate_disciplines" class="form-control" value="<?=$rowuser['graduate_disciplines']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สาขาที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="major_graduate_disciplines" class="form-control" value="<?=$rowuser['major_graduate_disciplines']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ชื่อสถาบันที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="graduate_institution_name" class="form-control" value="<?=$rowuser['graduate_institution_name']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ประเทศที่จบการศึกษาสูงสุด</label>
                                         <input type="text" name="country_of_graduation" class="form-control" value="<?=$rowuser['country_of_graduation']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ตำแหน่ง</label>
                                         <input type="text" name="user_tumn" class="form-control"  value="<?=$rowuser['user_tumn']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>ผู้บังคับบัญชา</label>
                                         <select class="custom-select" name="user_head">

                                             <?php
                                              $u_id = $_SESSION["USER_ID"];
                                              ?>
                                              <option value="<?=$rowuser['user_head']?>" selected>
                                              <?php
                                              Show_h_user($rowuser['user_head']);
                                              ?>
                                              </option>
                                              <?php
                                              Show_h_user_all($u_id);
                   
                                              ?>

                                         </select>

                                     </div>
                                 </div>

                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" autocomplete="off" class="form-control" value="<?=$rowuser['username']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" autocomplete="off" class="form-control" value="<?=$rowuser['password']?>"
                                             placeholder="Enter ...">
                                     </div>
                                 </div>
                                 <div class="col-sm-3">
                                     <!-- text input -->
                                     <div class="form-group">
                                         <label>สถานะ</label>
                                         <select class="custom-select" name="user_status">
                                            <?php echo '<option '.($rowuser['user_status'] == 2 ? "value='2' selected >ผู้ประเมิน" : "value='0' selected >ผู้ถูกประเมิน").'</opton>';
                                             ?>
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

                                 <div class="col-sm-8">
                                     <!-- text input -->
                                     <div class="form-group">

                                         <div class="card-footer">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             <a type="submit" class="btn btn-danger" href="./index.php?pa8">cancel</a>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                             <input type="hidden" name="edit_user">
                             <input type="hidden" name="user_id" value="<?=$user_id?>">

                         </form>

                         <?php else: ?>

                         <?php 
 								include './conn.php';


 								$sqlhuser=" SELECT * FROM user INNER JOIN user_data ON user.user_id = user_data.user_id WHERE user.user_status <> 1 ORDER BY user.user_id desc ";
 								$qryhuser = mysqli_query($conn,$sqlhuser);


 								?>


                         <table id="example3" class="table table-bordered table-hover" >
                             <thead>
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
                                     <th>ผู้บังคับบัญชา</th>
                                     <th>สถานะ</th>
                                     <th >แก้ไข</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php 
 										$i = 1;
 										while ($rowhuser = $qryhuser->fetch_array()) {
 											$uid = $rowhuser['user_id'];
                                            $user_head = $rowhuser['user_head'];
 											?>


                                 <tr>
                                     <td><?= $i; ?></td>
                                     <td><?=$rowhuser['user_tumn'];?></td>
                                     <td><?=$rowhuser['first_name'];?></td>
                                     <td><?=$rowhuser['last_name'];?></td>
                                     <td><?=$rowhuser['user_data_id_card'];?></td>
                                     <td><?=$rowhuser['sex'];?></td>
                                     <td><?=$rowhuser['nationality'];?></td>
                                     <td><?=$rowhuser['date_of_birth'];?></td>
                                     <td><?=$rowhuser['house_number'];?></td>
                                     <td><?=$rowhuser['moo'];?></td>
                                     <td><?=$rowhuser['road'];?></td>
                                     <td><?=$rowhuser['district'];?></td>
                                     <td><?=$rowhuser['area'];?></td>
                                     <td><?=$rowhuser['province'];?></td>
                                     <td><?=$rowhuser['phone'];?></td>
                                     <td><?=$rowhuser['post_code'];?></td>
                                     <td><?=$rowhuser['faculty'];?></td>
                                     <td><?=$rowhuser['department'];?></td>
                                     <td><?=$rowhuser['branch'];?></td>
                                     <td><?=$rowhuser['teaching_disciplines'];?></td>
                                     <td><?=$rowhuser['personnel_type'];?></td>
                                     <td><?=$rowhuser['sub_personnel_type'];?></td>
                                     <td><?=$rowhuser['academic_position'];?></td>
                                     <td><?=$rowhuser['administrative_position'];?></td>
                                     <td><?=$rowhuser['name_of_position'];?></td>
                                     <td><?=$rowhuser['civil_servant_level'];?></td>
                                     <td><?=$rowhuser['date_of_employment'];?></td>
                                     <td><?=$rowhuser['term_of_employment'];?></td>
                                     <td><?=$rowhuser['employment_money'];?></td>
                                     <td><?=$rowhuser['highest_graduate_level'];?></td>
                                     <td><?=$rowhuser['course_name'];?></td>
                                     <td><?=$rowhuser['graduate_disciplines'];?></td>
                                     <td><?=$rowhuser['major_graduate_disciplines'];?></td>
                                     <td><?=$rowhuser['graduate_institution_name'];?></td>
                                     <td><?=$rowhuser['country_of_graduation'];?></td>
                                     <td><?php 
                                     
                                     $sqluser =" SELECT * FROM user WHERE user_id = '$user_head' ";
                                     $qryuser = mysqli_query($conn,$sqluser);
                                     $user = mysqli_fetch_assoc($qryuser);
                                 
                                        echo $user['first_name'].'  '.$user['last_name'];   
                                     
                                     ?></td>
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