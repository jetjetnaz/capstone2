<?php
if (!(isset($_SESSION['user_id']))) {
  header("location:index.php");
  exit;
}
?>
<aside class="main-sidebar sidebar-dark-primary bg-darkblue elevation-4">
  <a href="./" class="brand-link logo-switch bg-Victoria">
    <img src="logo1.jpg" alt="logo" style="width:15%">
    <h4 class="brand-image-xl logo-xs mb-0 text-center text-orange"><b>KCDC</b></h4>
    <h4 class="brand-image-xl logo-xl mb-0 text-center text-orange"> <b>Dialysis</b></h4>

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
          <a href="dashboard.php" class="bg-gray nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <!-- 
        <li class="nav-item" id="mnu_patients">
          <a href="#" class="bg-gray nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              <i class="fas "></i>
              Patients
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        <li class="nav-item">
          <a href="patients.php" class="nav-link" id="mi_patients">
            <i class="far fa-circle nav-icon"></i>
            <p class="text-orange">List of Patients</p>
          </a>
        </li>
        </li> -->


        <li class="nav-item" id="mnu_users">
          <a href="patients.php" class="bg-gray nav-link">
          <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Patients
            </p>
          </a>
        </li>

        <li class="nav-item" id="mnu_users">
          <a href="shifts.php" class="bg-gray nav-link">
            <i class="nav-icon fa fa-calendar"></i>
            <p>
              Shifts
            </p>
          </a>
        </li>


        <li class="nav-item" id="mnu_users">
          <a href="users.php" class="bg-gray nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item" id="mnu_users">
          <a href="archive.php" class="bg-gray nav-link">
            <i class=' nav-icon fa fa-archive'></i>
            <p>
              Archived
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="bg-gray nav-link">
            <i class="nav-icon fa fa-sign-out-alt"></i>
            <p>
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