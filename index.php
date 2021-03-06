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
    <!-- ใส่ข้อมูลในดาตาเบสไปครับ -->
    <!-- test test  -->
    <!-- กหฟกา -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="adminlte3/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->

    <!-- DataTables -->
    <link rel="stylesheet" href="adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="adminlte3/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="adminlte3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="adminlte3/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="adminlte3/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- mycss -->
    <link rel="stylesheet" type="text/css" href="css/cuttom.css">

    <style type="text/css">
    @media print {
        .noprint {
            display: none;
        }
    }
    .isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
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
      }elseif (isset($_GET['pla'])) {
        include 'page/pla.php';

      }elseif (isset($_GET['kanzon'])) {
        include 'page/kanzon.php';
        
      }elseif (isset($_GET['kan_research'])) {
        include 'page/kan_research.php';

      }elseif (isset($_GET['kan_activity'])) {
        include 'page/kan_activity.php';

      }elseif (isset($_GET['arts_and_culture'])) {
        include 'page/arts_and_culture.php';

      }elseif (isset($_GET['order_management'])) {
        include 'page/order_management.php';

      }elseif (isset($_GET['my_rate'])) {
        include 'page/my_rate.php';

      }elseif (isset($_GET['used_time'])) {
        include 'page/used_time.php';

      }elseif (isset($_GET['p_rate'])) {
        include 'page/p_rate.php';

      }elseif (isset($_GET['p_kana'])) {
        include 'page/p_kana_from_google.php';

      }elseif (isset($_GET['print'])) {
        include 'page/print.php';

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
    <!-- Select2 -->
    <script src="adminlte3/plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="adminlte3/plugins/datatables/jquery.dataTables.js"></script>
    <script src="adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- Summernote -->
    <script src="adminlte3/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- AdminLTE App -->
    <script src="adminlte3/dist/js/adminlte.min.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable({
          "scrollX": true
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
        $('#example3').DataTable({
          "scrollX": true
        });


    });
    $('.select2').select2()
    </script>



    <?php
  if (isset($_GET['model'])) {
    include 'model.php';
    ?>

    <script>
    $(window).on('load', function() {
        $('#showModel').modal('show');
    });
    </script>

    <?php
  }

  ?>
    <script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
    </script>

    <script>
    $(document).ready(function(e) {
        $("#form").on('submit', (function(e) {
            e.preventDefault();
            $.ajax({
                url: "page/ajaxupload.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {

                    // view uploaded file.
                    $("#preview").html(data).fadeIn();
                    $("#form")[0].reset();
                    $('#modal-default').modal('hide')

                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }
            });
        }));
    });
    </script>

</body>

</html>