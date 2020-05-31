<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
      }else{
        include 'new.php';
      }

      ?>


    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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

    function getse1() {
      var se1 = parseInt(document.getElementById("se1").value);
      var sum2 = parseInt(document.getElementById("sum2").value);
      var sumse1 = (se1 + sum2) / 100;
      document.getElementById("sum1").value = sumse1;

    }

    function getse2() {
      var se2 = parseInt(document.getElementById("se2").value);
      var se3 = parseInt(document.getElementById("se3").value);
      var se4 = parseInt(document.getElementById("se4").value);
      var se5 = parseInt(document.getElementById("se5").value);
      var se6 = parseInt(document.getElementById("se6").value);

      //var sum2 = document.getElementById("sum2").value;
      var sumse2 = se2 + se3 + se4 + se5 + se6;

      document.getElementById("sum2").value = sumse2;
      getse1();

    }

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
