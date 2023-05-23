<?php
session_start();
if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] != "admin") {
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
//day
$res = get_current_day();
$res = $res->fetch_assoc();

$total_patient_today = get_all_patients($res['day']);

$today_patients = 0;
$day = "";
while ($row = $total_patient_today->fetch_assoc()) {
  $day = $row['preferred_date'];
  $today_patients += 1;
}
//mongth
$ress = get_current_month();
$ress = $ress->fetch_assoc();

$total_patient_month = get_all_patientss($ress['month']);

$month_patients = 0;
$month = "";
while ($rows = $total_patient_month->fetch_assoc()) {
  $month = $rows['preferred_date'];
  $month_patients += 1;
}
//year
$resss = get_current_month();
$resss = $resss->fetch_assoc();

$total_patient_year = get_all_patientsss($resss['year']);

$year_patients = 0;
$year = "";
while ($rowsss = $total_patient_year->fetch_assoc()) {
  $year = $rowsss['preferred_date'];
  $year_patients += 1;
}

$res = retrieved_data("tbl_patient");
$total_patient = $res->num_rows;
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
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->

    <?php

    include './config/header.php';
    include './config/sidebar.php';
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
                  <h3>Today Patients: <?= $today_patients ?></h3>
                  <p>Date Tody: <?= ucfirst(strtolower($day)) ?></p>
                  <button class="form-control" id="daily">See Patients</button>
                </div>
                <div class="icon">
                  <i class="fa fa-user-injured"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Month Patient: <?= $month_patients ?></h3>
                  <p id="month"></p>
                  <script>
                    // Create a new Date object
                    var today = new Date();

                    // Define an array of month names
                    var monthNames = [
                      "January", "February", "March", "April", "May", "June",
                      "July", "August", "September", "October", "November", "December"
                    ];

                    // Get the current month (0-11)
                    var currentMonth = today.getMonth();

                    // Retrieve the month name based on the current month
                    var currentMonthName = monthNames[currentMonth];

                    // Display the current month name
                    document.getElementById("month").innerHTML = "Month Today: " + currentMonthName;

                    // Set the number of patients for the current month
                    var monthPatients = 10; // Replace this with the actual number of patients
                    document.getElementById("month_patients").textContent = monthPatients;
                  </script>
                  <button class="form-control" id="monthly">See Patients</button>
                </div>
                <div class="icon">
                  <i class="fa fa-user-injured"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Year Patients: <?= $year_patients ?></h3>
                  <p>Year Today: <?php echo date("Y"); ?></p>
                  <button class="form-control" id="yearly">See Patients</button>
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
      <script>
        //daily
        const daily = document.getElementById("daily");
        // console.log(days);
        daily.addEventListener("click", () => {
          console.log("daily");
          getData(1);
        });
        //monthly
        const monthly = document.getElementById("monthly");
        // console.log(days);
        monthly.addEventListener("click", () => {
          console.log("monthly");
          getData(2);
        });
        //yearly
        const yearly = document.getElementById("yearly");
        // console.log(days);
        yearly.addEventListener("click", () => {
          console.log("yearly");
          getData(3);
        });


        const getData = (e) => {
          console.log(e);
          const formData = new FormData();
          formData.append("job", "filterStudents");
          formData.append("json", JSON.stringify({
            courseId: e
          }));
          axios({
            url: "./api/courses.php",
            method: "post",
            data: formData,
          }).then((response) => {
            if (response.data != "0") {


              const students = response.data;
              console.log(students);

              var myHtml = `
      
     <table id='datatablesSimple' class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
     <thead >
          <tr>
           <th>Patient Id</th>
                    <th>Shift</th>
                    <th>Preferred day of treatment</th>
                    <th>Patient Last Name</th>
                    <th>Patient First Name</th>
                    <th>Patient Middle Name</th>
                    <th>Address</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Attending Physician</th>
          </tr>
        </thead>
        </center>
      `;
              students.forEach((student) => {
                myHtml += `
          <tr >
            <td  style="text-align: left">${student.shiftID}</td>
            <td style="text-align: center">${student.shift}</td>
            <td style="text-align: center">${student.preferred_date}</td>     
            <td style="text-align: center">${student.patient_last_name}</td>  
            <td style="text-align: center">${student.patient_first_name}</td>  
            <td style="text-align: center">${student.patient_middle_name}</td> 
            <td style="text-align: center">${student.patient_address}</td>  
            <td style="text-align: center">${student.patient_date_birth}</td>   
            <td style="text-align: center">${student.patient_age}</td>   
            <td style="text-align: center">${student.patient_gender}</td>  
            <td style="text-align: center">${student.patient_contact_number}</td>    
            <td style="text-align: center">${student.patient_attending_physician}</td>   
          </tr>
        `;
              });

              const datatablesSimple = document.getElementById("display_table");
              datatablesSimple.innerHTML = myHtml;
            } else {
              alert("There are no students found!");
            }
          });
        };
      </script>

      <div class="card-body">
        <div class="row table-responsive">
          <div id="display_table">
            <div id=""></div>
          </div>
        </div>
      </div>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include './config/footer.php'; ?>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include './config/site_js_links.php'; ?>
  <script>
    $(function() {
      showMenuSelected("#mnu_dashboard", "");
    })
  </script>

</body>

</html>