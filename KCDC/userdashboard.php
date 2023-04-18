<?php
session_start();

if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] != "receptionist") {
    header("location:logout.php");
  }
}

include './config/connection.php';
include 'new_connection.php';
include 'functions.php';

// $total_patient_today = todays_patient();
// $total_patient_today = $total_patient_today->fetch_assoc();
// $total_patient_today = $total_patient_today['today'];

// $current_week_patient = current_week_patient();
// $current_week_patient = $current_week_patient->fetch_assoc();
// $current_week_patient = $current_week_patient['week'];

// $current_month_patient = current_month_patient();
// $current_month_patient = $current_month_patient->fetch_assoc();
// $current_month_patient = $current_month_patient['month'];

// $current_year_patient = current_year_patient();
// $current_year_patient = $current_year_patient->fetch_assoc();
// $current_year_patient = $current_year_patient['year'];

// Warning: Undefined array key "day" in C:\xampp\htdocs\arc\version_2\Arc\dashboard.php on lin

$res = get_current_day();
$res = $res->fetch_assoc();

$total_patient_today = get_all_patients($res['day']);
$today_patients = 0;
$day = "";
while($row = $total_patient_today->fetch_assoc()){
  $day = $row['preferred_date'];
  $today_patients += 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './config/site_css_links.php'; ?>
  <title style="color: white;">Kidney Care and Dialysis Center</title>
  <style>
    .dark-mode .bg-fuchsia,
    .dark-mode .bg-maroon {
      color: #fff !important;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->

    <?php

    include './userconfig/userheader.php';
    include './userconfig/usersidebar.php';
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $today_patients ?></h3>
                  <p><?=ucfirst(strtolower($day))?> patients for all shifts</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user-injured"></i>
                </div>

              </div>
            </div>
            
            <div class="col-lg-3 col-6">
              <div class="small-box bg-gray text-reset">
                <div class="inner">
                  <h3>Shifts</h3>
                  <p><a href="shifts.php" class="text-decoration-none text-light">Click to see all shifts</a></p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </section>




      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include './userconfig/userfooter.php'; ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include './userconfig/site_js_links.php'; ?>
  <script>
    $(function() {
      showMenuSelected("#mnu_dashboard", "");
    })
  </script>

</body>

</html>