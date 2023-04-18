<?php
if (!(isset($_SESSION['user_id']))) {
  header("location:index.php");
  exit;
}

?>
<aside class="main-sidebar sidebar-dark-primary bg-dark elevation-4">
  <a href="./" class="brand-link logo-switch bg-victoria">
    <img src="logo1.jpg" class="img-thumbnail p-0 border rounded-circle" alt="logo" style="width:15%">
    <h4 class="brand-image-xl logo-xs mb-0 text-center text-orange">&nbsp;<b>ARC</b></h4>
    <h4 class="brand-image-xl logo-xl mb-0 text-center text-orange"> &nbsp; &nbsp; &nbsp;Dialysis Center <b></b></h4>


  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="user_images/<?php echo $_SESSION['profile_picture']; ?>" class="img-circle elevation-2" alt="User Image" />
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['display_name']; ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        
            <li class="nav-item" id="mnu_dashboard">
              <a href="userdashboard.php" class="bg-gray nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>


        <li class="nav-item" id="mnu_patients">
          <a href="userview" class="bg-gray nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              <i class="fas "></i>
              Patients
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <li class="nav-item" id="mnu_users">
          <a href="userpatients.php" class="bg-gray nav-link">
          <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Patient List
            </p>
          </a>
        </li>

        <li class="nav-item" id="mnu_users">
          <a href="usershifts.php" class="bg-gray nav-link">
            <i class="nav-icon fa fa-calendar"></i>
            <p>
              Shifts
            </p>
          </a>
        </li>
          
          <li class="nav-item" id="mnu_users">
          <a href="user-report.php" class="bg-gray nav-link">
            <i class="nav-icon fa fa-calendar"></i>
            <p>
              Reports
            </p>
          </a>
        </li>


            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p class="text-orange">
                  Logout
                </p>
              </a>
            </li>

          </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>