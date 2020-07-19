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
				<br>

				<div class="card card-outline">
					<div class="card-header noprint">
						<h5 class="m-0">

							รายงาน

						</h5>
					</div>
					<div class="card-body">

						<?php 

						if (isset($_GET['ph1'])) {
							include 'ph1.php';
						}elseif (isset($_GET['ph2'])) {
							include 'ph2.php';
						}elseif (isset($_GET['ph3'])) {
							include 'ph3.php';
						}elseif (isset($_GET['ph4'])) {
							include 'ph4.php';
						}elseif (isset($_GET['ph5'])) {
							include 'ph5.php';
						}elseif (isset($_GET['print'])) {

							include 'ph1.php';
							include 'ph2.php';
							echo "<br><br><br><br><br><br><br>";
							include 'ph3.php';

							include 'ph4.php';
							include 'ph5.php';

						}else{

						}

						?>


					</div>


				</div>

			</div>
			<!-- /.col-md-6 -->
		</div>
		<!-- /.row -->
	</div>
</div>
