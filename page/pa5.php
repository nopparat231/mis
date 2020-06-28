 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				<h1 class="m-0 text-dark">ประเมินการสอน</h1>
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
 					<li class="breadcrumb-item active">ประเมินการสอน</li>
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


 				<div class="card card-primary card-outline">
 					<div class="card-header">
 						<h5 class="m-0">ฟอร์มประเมินการสอน</h5>
 					</div>
 					<div class="card-body">
 						<h5>
 							<!-- <a href="index.php?pa6&type=3">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)</a> -->

 							<?php 

 							$sqlth=" SELECT * FROM f_th WHERE f_thstatus = 0";
 							$qryth = mysqli_query($conn,$sqlth);

 							while ($rowth = $qryth->fetch_array()) {


 								?>

 								<i class="far fa-hand-point-right"></i> 
 								<a href="index.php?pa6&type=<?php echo($rowth['f_thid']) ?>"><?php echo $rowth['f_thdettail']; ?></a>

 								<br><br>
 								

 							<?php } ?>

 						</h5>
 						<br>
 						

 					</div>

 				</div>

 			</div>
 			<!-- /.col-md-6 -->
 		</div>
 		<!-- /.row -->
 	</div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
