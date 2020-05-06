 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
 					<li class="breadcrumb-item active">ประเมินการใช้งานระบบ</li>
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
 						<h5 class="m-0">ฟอร์มประเมินการใช้งานระบบ</h5>
 					</div>
 					<div class="card-body">

 						<b> ตอนที่ 1  ความพึงพอใจ </b><br>

 						<form id="formq" name="formq" method="post" action="q_db.php">
 							<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
 								<tr>
 									<td width="75%" rowspan="2" align="center"><strong>รายการ</strong></td>
 									<td colspan="5" align="center"><strong>ระดับความคิดเห็น</strong></td>
 								</tr>
 								<tr>
 									<td width="5%" align="center"><strong>5</strong></td>
 									<td width="5%" align="center"><strong>4</strong></td>
 									<td width="5%" align="center"><strong>3</strong></td>
 									<td width="5%" align="center"><strong>2</strong></td>
 									<td width="5%" align="center"><strong>1</strong></td>
 								</tr>
 								<tr>
 									<td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านเนื้อหา</strong></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 1.คู่มือการใช้งานระบบอ่านเข้าใจง่ายและปฏิบัติตามคู่มือได้ทันที</td>
 									<td height="30" align="center"><input type="radio" name="a1"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="a1"  value="4" /></td>
 									<td height="30" align="center"><input type="radio" name="a1"  value="3" /></td>
 									<td height="30" align="center"><input type="radio" name="a1"  value="2" /></td>
 									<td height="30" align="center"><input type="radio" name="a1"  value="1" /></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 2.แบบฟอร์มกรอกข้อมูลใช้งานง่าย  มีความเหมาะสม</td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a2"  value="5" required="required" /></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a2"  value="4"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a2"  value="3"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a2"  value="2"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a2"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 3.มีการจัดหมวดหมู่ให้ง่ายต่อการ ค้นหาและทำความเข้าใจ</td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a3"  value="5" required="required" /></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a3"  value="4"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a3"  value="3"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a3"  value="2"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a3"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 4.ข้อความถูกต้องตามหลักภาษา และไวยากรณ์</td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a4"  value="5" required="required" /></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a4"  value="4"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a4"  value="3"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a4"  value="2"/></td>
 									<td width="5%" height="30" align="center"><input type="radio" name="a4"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านการออกแบบระบบ</strong></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 1.ความสวยงาม ความทันสมัย น่าสนใจ</td>
 									<td height="30" align="center"><input type="radio" name="b1"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="b1"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="b1"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="b1"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="b1"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 2.การจัดรูปแบบง่ายต่อการอ่านและการใช้งาน</td>
 									<td height="30" align="center"><input type="radio" name="b2"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="b2"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="b2"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="b2"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="b2"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 3.เมนูต่างๆ ใช้งานได้ง่าย</td>
 									<td height="30" align="center"><input type="radio" name="b3" value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="b3"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="b3"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="b3"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="b3"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 4.สีพื้นหลังกับสีตัวอักษรมีความเหมาะสมต่อการอ่าน</td>
 									<td height="30" align="center"><input type="radio" name="b4"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="b4"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="b4"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="b4"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="b4"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 5.ขนาดตัวอักษร และรูปแบบตัวอักษรอ่านได้ง่ายและเหมาะสม</td>
 									<td height="30" align="center"><input type="radio" name="b5"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="b5" value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="b5" value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="b5" value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="b5" value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านประสิทธิภาพของระบบ</strong></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 1.ความรวดเร็วในการแสดงผลและการใช้งาน</td>
 									<td height="30" align="center"><input type="radio" name="c1"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="c1"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="c1"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="c1"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="c1"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 2.ความรวดเร็วในการเรียกดูรายงาน</td>
 									<td height="30" align="center"><input type="radio" name="c2"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="c2"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="c2"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="c2"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="c2"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 3.ความถูกต้องของข้อมูล</td>
 									<td height="30" align="center"><input type="radio" name="c3"   value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="c3"   value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="c3"   value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="c3"   value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="c3"   value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 4.ความถูกต้องในการเชื่อมโยงภายในระบบ</td>
 									<td height="30" align="center"><input type="radio" name="c4"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="c4"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="c4"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="c4"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="c4"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 5.ความปลอดภัยในการใช้งาน</td>
 									<td height="30" align="center"><input type="radio" name="c5"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="c5"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="c5"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="c5"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="c5"  value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านประโยชน์ที่ได้รับจากระบบ</strong></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 1.สามารถใช้งานระบบได้ทุกที่ทุกเวลา ...... </td>
 									<td height="30" align="center"><input type="radio" name="d1" value="5"  required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="d1" value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="d1" value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="d1" value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="d1" value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 2......</td>
 									<td height="30" align="center"><input type="radio" name="d2" value="5"  required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="d2" value="4" /></td>
 									<td height="30" align="center"><input type="radio" name="d2" value="3" /></td>
 									<td height="30" align="center"><input type="radio" name="d2" value="2" /></td>
 									<td height="30" align="center"><input type="radio" name="d2" value="1" /></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 3.......</td>
 									<td height="30" align="center"><input type="radio" name="d3" value="5"  required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="d3" value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="d3" value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="d3" value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="d3" value="1"/></td>
 								</tr>
 								<tr>
 									<td height="30">&nbsp; 4......</td>
 									<td height="30" align="center"><input type="radio" name="d4"  value="5" required="required" /></td>
 									<td height="30" align="center"><input type="radio" name="d4"  value="4"/></td>
 									<td height="30" align="center"><input type="radio" name="d4"  value="3"/></td>
 									<td height="30" align="center"><input type="radio" name="d4"  value="2"/></td>
 									<td height="30" align="center"><input type="radio" name="d4"  value="1"/></td>
 								</tr>
 							</table>
 							<br>
 							<b> ตอนที่ 2  ข้อเสนอแนะเพิ่มเติม </b><br>
 							<textarea name="detail" cols="150" rows="3" id="detail"></textarea>
 						</form>

 					</div>

 					<div class="card-footer">
 						<a href="#" class="btn btn-primary">บันทึก</a>
 					</div>

 				</div>

 			</div>
 			<!-- /.col-md-6 -->
 		</div>
 		<!-- /.row -->
 	</div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
