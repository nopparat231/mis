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
 <!-- test test  -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->

  <!-- DataTables -->
  <link rel="stylesheet" href="adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <link rel="stylesheet" href="adminlte3/dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="adminlte3/plugins/summernote/summernote-bs4.css">
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
<body class="hold-transition sidebar-collapse sidebar-mini text-sm ">
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
      }elseif (isset($_GET['pa66'])) {
        include 'page/pa66.php';
      }elseif (isset($_GET['pa666'])) {
        include 'page/pa666.php';
      }elseif (isset($_GET['pa7'])) {
        include 'page/pa7_news.php';
      }elseif (isset($_GET['pa8'])) {
        include 'page/pa8_user.php';
      }elseif (isset($_GET['ph'])) {
        include 'page/ph.php';
      }elseif (isset($_GET['addtext'])) {
        include 'page/addtext.php';
      }elseif (isset($_GET['ph1'])) {
        include 'page/ph1.php';
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
  <!-- Summernote -->
  <script src="adminlte3/plugins/summernote/summernote-bs4.min.js"></script>

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




  </script>



  <?php

  if (isset($_GET['type'])) { ?>

    <script type="text/javascript">


      var se12 = parseInt(document.getElementById("fidp12").value);
      var se13 = parseInt(document.getElementById("fidp13").value);
      var se14 = parseInt(document.getElementById("fidp14").value);
      var se15 = parseInt(document.getElementById("fidp15").value);
      var se16 = parseInt(document.getElementById("fidp16").value);
      var se17 = parseInt(document.getElementById("fidp17").value);
      var se18 = parseInt(document.getElementById("fidp18").value);
      var se19 = parseInt(document.getElementById("fidp19").value);
      var se20 = parseInt(document.getElementById("fidp20").value);
      var se21 = parseInt(document.getElementById("fidp21").value);
      var se22 = parseInt(document.getElementById("fidp22").value);
      var se23 = parseInt(document.getElementById("fidp23").value);
      var se24 = parseInt(document.getElementById("fidp24").value);
      var se25 = parseInt(document.getElementById("fidp25").value);

      //var se6 = parseInt(document.getElementById("se6").value);

      //var sum2 = document.getElementById("sum2").value;
      var sumse2 = se12 + se13 + se14 + se15 + se16 + se17 + se18 + se19 + se20 + se21 + se22 + se23 + se24 + se25;

      document.getElementById("sump2").value = sumse2;

      var sumse3 = sumse2*3;

      document.getElementById("sump4").value = sumse3;

      document.getElementById("sump5").innerHTML = sumse3;

      document.getElementById("sump6").innerHTML = sumse2;

      document.getElementById("sump8").innerHTML = sumse3/sumse3;

      // var se1 = parseInt(document.getElementById("fid1").value);
      // //var sum2 = parseInt(document.getElementById("sum2").value);
      // var sumse1 = (se1 + sumse2) / 100;
      // document.getElementById("sum1").value = sumse1;

    </script>

    <?php
  }





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
  <script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

</body>
</html>
