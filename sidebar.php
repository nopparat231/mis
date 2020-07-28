  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light"><b>

        <?php
        $status = "";
        if (isset($_SESSION["USERNAME"])){

          $user = $_SESSION["USERNAME"];

          include './conn.php';

          $sqlhusercc=" SELECT * FROM user WHERE username =".$user;
          $qryhusercc = mysqli_query($conn,$sqlhusercc);
          $rowhusercc = mysqli_fetch_assoc($qryhusercc);

          $status = $rowhusercc['user_status'];

          echo "ยินดีต้อนรับ : ".$rowhusercc['first_name']."  ".$rowhusercc['last_name'];

          ?>

        <?php }else{ ?>
          &nbsp;
        <?php } ?>

      </b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar text-xs">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-compact nav-child-indent nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                เมนูหลัก
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>หน้าแรก</p>
                </a>
              </li>

              <?php if ($status == 2): ?>


                <li class="nav-item">
                  <a href="index.php?pa666" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>เลือกหัวข้อหัวข้อการประเมิน</p>
                  </a>
                </li>

                <?php else: ?>


                <?php endif ?>



              </ul>
            </li>




            <?php if ($status == 2): ?>


              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>
                    รายงาน
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?pa66" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>รายงานการประเมิน</p>
                    </a>
                  </li>



                </ul>
              </li>

              <?php else: ?>


              <?php endif ?>



              <?php if ($status == 1): ?>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>
                      ผู้ดูแลระบบ
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="index.php?pa8" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>เพิ่มผู้ใช้</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="index.php?pa7" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>เพิ่มเพิ่มประกาศ</p>
                      </a>
                    </li>


                  </ul>
                </li>


                <?php else: ?>


                <?php endif ?>




              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
