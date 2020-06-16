 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				<h1 class="m-0 text-dark">ประกาศ</h1>
 			</div><!-- /.col -->
 			<div class="col-sm-6">
 				<ol class="breadcrumb float-sm-right">
 					<li class="breadcrumb-item"><a href="#">Home</a></li>
 					<li class="breadcrumb-item active">From Page</li>
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

        <?php 

        include 'conn.php';

        $sqlhnew=" SELECT * FROM news WHERE n_status = 0 order by n_id desc";
        $qryhnew = mysqli_query($conn,$sqlhnew);
        //$rownew = mysqli_fetch_assoc($qryhnew);


        ?>

        <?php 

        while ($rownew = $qryhnew->fetch_array()) {



          $sqlhuser =" SELECT * FROM user where user_id =".$rownew['n_user_id'];
          $qryhuser = mysqli_query($conn,$sqlhuser);
          $rowuser = mysqli_fetch_assoc($qryhuser);

          ?>

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0"><?php echo $rownew['n_head']; ?></h5>
            </div>
            <div class="card-body">

              <p class="card-text">

                <?php echo $rownew['n_detail']; ?>

              </p>

            </div>
            <div class="card-footer">
            <p> <?php echo "<u> Written by : ".$rowuser['first_name']." </u> Last Updated on : ".$rownew['n_time']; ?></p>
           </div>
         </div>

         <?php 

       }


       ?>



     </div>
     <!-- /.col-md-6 -->
   </div>
   <!-- /.row -->
 </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
