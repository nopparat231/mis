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

 				<form action="index.php" method="get">

 					<input type="hidden" name="pa3">

 					<div class="card card-primary card-outline">
 						<div class="card-header">
 							<h5 class="m-0">ฟอร์มประเมินการสอน</h5>
 						</div>
 						<div class="card-body">

 							<h5 >
 								<p style="text-align: center;">แบบข้อตกลงการประเมินผลสัมฤทธิ์ของงานของข้าราชการพลเรือนในสถาบันอุดมศึกษา/พนักงานมหาวิทยาลัย (องค์ประกอบที่ ๑)<br>
 								ตำแหน่งประเภทผู้บริหาร มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</p>
 								<p>รอบการประเมิน</p>
 								<input type="radio" name="rob" value="1" checked="checked">
 								รอบที่ ๑	&nbsp;&nbsp;&nbsp;&nbsp;๑  ตุลาคม  .. 
 								<input type="number" name="y" style="width: 150px"> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  ..
 								<input type="number" name="yy" style="width: 150px">..
 								<br><br>

 								<!-- เดี๋ยวหลับมาทำ JS คลิ๊กเลือก -->

<!--  								<input type="radio" name="rob" value="2">	
 								รอบที่ ๒  &nbsp;&nbsp;&nbsp;&nbsp;๑  เมษายน  ... 
 								<input type="number" name="y" style="width: 150px"> ..  ถึง&nbsp;&nbsp;  ๓๑  มีนาคม  ..
 								<input type="number" name="yy" style="width: 150px">..
 								<br><br> -->

 								<br>
 								<br>


 								ชื่อผู้รับการประเมิน 		
 								<input type="text" name="nameh" style="width: 300px">....... ตำแหน่ง/ระดับ...<input type="text" name="tumh" style="width: 300px"><br><br>
 								ชื่อผู้บังคับบัญชา  		
 								<input type="text" name="namec" style="width: 300px">....... ตำแหน่ง/ระดับ...<input type="text" name="tumc" style="width: 300px"><br></h5>


 								<br>

 								<?php //include 'pa2table.php'; ?>

 							</div>

 							<div class="card-footer">
 								<button class="btn btn-primary">บันทึก</button>
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