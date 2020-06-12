  

<div id="LogoutModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Logout ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body text-center">
      <h1 style="font-size:5.5rem;"><i class="fas fa-sign-out-alt text-danger" aria-hidden="true"></i></h1>
      <p>ออกจากระบบ?</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <a href="./home/logout.php" class="btn btn-danger">Logout</a>
</div>
</div>
</div>
</div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">หน้าแรก</a>
      </li>
 <!--      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" data-toggle="modal" data-target="#contact">ติดต่อ</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        
        <?php if ($_SESSION["USERNAME"] == ""): ?>
          <a href="./home" class="nav-link">เข้าสู่ระบบ</a>
          <?php else: ?>
            <a data-toggle="modal" data-target="#LogoutModal" class="nav-link">ออกจากระบบ</a>
          <?php endif ?>

        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
