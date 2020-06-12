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
 <style type="text/css">
 	input:focus{
 		/*outline: none;*/
 		border-width:0px;
 		border:none;
 	}
 </style>

 <!-- Main content -->
 <div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-12">

 				<form action="index.php" method="get">

 					<input type="hidden" name="pa3">

 					<div class="card card-primary card-outline">
 						<div class="card-header">
 							<h5 class="m-0">ฟอร์มประเมินการสอน</h5>
 						</div>
 						<div class="card-body">


 							<?php 
 							include '../conn.php';
 							$user_id = $_SESSION["USER_ID"];


 							$sqlth=" SELECT * FROM user WHERE user_id =".$user_id;
 							$qryth = mysqli_query($conn,$sqlth);
 							$rowth = mysqli_fetch_assoc($qryth);
 							


 							?>

 							<h5 >

 								<p style="text-align: center;">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)<br>
 								ตำแหน่งประเภทผู้บริหาร มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</p>
 								<p>รอบการประเมิน</p>
 								<input type="checkbox" name="rob" value="1" checked="checked" required >
 								รอบที่ ๑	&nbsp;&nbsp;&nbsp;&nbsp;๑  ตุลาคม  .. 
 								<input type="number" name="y1" style="width: 150px" value="<?php echo(date('Y')) ?>"> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  ..
 								<input type="number" name="yy1" style="width: 150px" value="<?php echo(date('Y')) ?>">..
 								<br><br>

 								<!-- เดี๋ยวหลับมาทำ JS คลิ๊กเลือก -->

 								<input type="checkbox" name="rob" value="2">	
 								รอบที่ ๒  &nbsp;&nbsp;&nbsp;&nbsp;๑  เมษายน  ... 
 								<input type="number" name="y2" style="width: 150px"> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  ..
 								<input type="number" name="yy2" style="width: 150px">..
 								<br><br>

 								<br>
 								<br>


 								ชื่อผู้รับการประเมิน 		
 								<input type="text" name="nameh" style="width: 300px" required value="">....... ตำแหน่ง/ระดับ...
 								<input type="text" name="tumh" style="width: 300px"><br><br>
 								ชื่อผู้บังคับบัญชา  		
 								<input type="text" name="namec" style="width: 300px" required value="<?php echo($rowth['first_name'].' '.$rowth['last_name']) ?>">....... ตำแหน่ง/ระดับ...
 								<input type="text" name="tumc" style="width: 300px" value="<?php echo($rowth['user_tumn']) ?>"><br></h5>


 								<br>

 								<?php //include 'pa2table.php'; ?>

 							</div>

 							<div class="card-footer">
 								<button class="btn btn-primary">ต่อไป</button>
 							</div>

 						</div>

 					</form>

 				</div>
 				<!-- /.col-md-6 -->
 			</div>
 			<!-- /.row -->
 		</div><!-- /.container-fluid -->
 	</div>
 	<!-- /.content -->
