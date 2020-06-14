<!DOCTYPE html>
<?php 
session_start();
//error_reporting(0);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>MIS</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->

  <!-- DataTables -->
  <link rel="stylesheet" href="adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <link rel="stylesheet" href="adminlte3/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- mycss -->
  <link rel="stylesheet" type="text/css" href="css/cuttom.css">

<style type="text/css">
  @media print{
   .noprint{
       display:none;
   }
}
</style>

</head>
<body class="hold-transition sidebar-mini text-sm ">
  <?php include 'banner.php'; ?>
  <div class="wrapper">


    <?php 

    include 'navbar.php';
    include 'sidebar.php';

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <?php

      if (isset($_GET['pa1'])) {
        include 'page/pa1.php';
      }elseif (isset($_GET['pa2'])) {
        include 'page/pa2.php';
      }elseif (isset($_GET['pa3'])) {
        include 'page/pa3.php';
      }elseif (isset($_GET['pa4'])) {
        include 'page/pa4.php';
      }elseif (isset($_GET['pa5'])) {
        include 'page/pa5.php';
      }elseif (isset($_GET['pa6'])) {
        include 'page/pa6.php';
      }elseif (isset($_GET['pa7'])) {
        include 'page/pa7_new.php';
      }elseif (isset($_GET['pa8'])) {
        include 'page/pa8_user.php';
      }else{
        include 'new.php';
      }

      ?>


    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer noprint">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        RMUTK MIS
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 </strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="adminlte3/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables -->
  <script src="adminlte3/plugins/datatables/jquery.dataTables.js"></script>
  <script src="adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

  <!-- AdminLTE App -->
  <script src="adminlte3/dist/js/adminlte.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });



    var se2 = parseInt(document.getElementById("fid6").value);
    var se3 = parseInt(document.getElementById("fid7").value);
    var se4 = parseInt(document.getElementById("fid8").value);
    var se5 = parseInt(document.getElementById("fid9").value);
      //var se6 = parseInt(document.getElementById("se6").value);

      //var sum2 = document.getElementById("sum2").value;
      var sumse2 = se2 + se3 + se4 + se5;

      document.getElementById("sum2").value = sumse2;


      var se1 = parseInt(document.getElementById("fid1").value);
      //var sum2 = parseInt(document.getElementById("sum2").value);
      var sumse1 = (se1 + sumse2) / 100;
      document.getElementById("sum1").value = sumse1;


    </script>

    <?php

    if (isset($_GET['model'])) {
      include 'model.php';
      ?>

      <script>
        $(window).on('load',function(){
          $('#showModel').modal('show');
        });
      </script>

      <?php
    }

    ?>

  </body>
  </html>
