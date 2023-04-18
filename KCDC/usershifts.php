<?php
session_start();

// include './config/connection.php';
include './common_service/common_functions.php';

include "functions.php";
include "includes/date.php";

if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] != "receptionist") {
    header("location:logout.php");
  }
}

$total_patients = retrieved_data("tbl_patient");
$total_patients = $total_patients->num_rows;

$shift_limit = total_shift();
$shift_limit = $shift_limit->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './config/site_css_links.php'; ?>

  <?php include './config/data_tables_css.php'; ?>

  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->

  <?php include 'bs.css.php'; ?>
  <?php include './config/data_tables_css.php'; ?>

  <title>Shifts - Kidney Care and Dialysis Center</title>
  <style>
    .tbl_padding th {
      padding: 10px !important;
    }

    .tbl_padding td {
      padding: 15px !important;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->

  <!-- ALL PATIENT MODALS  -->

  <!-- add a doctor -->
  <div class="modal fade" id="add_doctor_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">In this section you can edit or change doctor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
          <div class="modal-body">

            <div class="mb-3">
              <!-- add doctor for -->
              <label for="" class="form-label">Select day to see doctor</label>
              <select class="form-select" id="day" onchange="check_doctors()">
                <option value="MONDAY">MONDAY</option>
                <option value="TUESDAY">TUESDAY</option>
                <option value="WEDNESDAY">WEDNESDAY</option>
                <option value="THURSDAY">THURSDAY</option>
                <option value="FRIDAY">FRIDAY</option>
                <option value="SATURDAY">SATURDAY</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Doctor's Name</label>
              <input type="text" name="" id="doctors_name" class="form-control" placeholder="(e.g) Dr. Guillermo">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="update_btn" onclick="update_doctor()">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <div class="wrapper">
    <!-- Navbar -->
    <?php include './userconfig/userheader.php';
    include './userconfig/usersidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-8 ">
              <h1>Shift Schedule</h1>
            </div>

            <div class="col-sm-4 d-flex justify-content-end align-items-center">
              <span>Shift Limit</span>
              <input type="number" name="" id="number_of_shift" class="form-control me-4" style="width: 90px" min="<?= $shift_limit['number_of_shift'] ?>" max="1000">
              <button class="btn btn-success mx-3" onclick="total_shift()">Add shift limit</button>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <!-- Default box -->
        <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
            <h3 class="card-title">Total Patients for all shifts (<?= $total_patients ?>)</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row table-responsive">
              <div id="display_table"></div>
              <table id="all_patients" class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
                <thead>
                  <tr>
                    <th>SHIFTS</th>
                    <th>MONDAY</th>
                    <th>TUESDAY</th>
                    <th>WEDNESDAY</th>
                    <th>THURSDAY</th>
                    <th>FRIDAY</th>
                    <th>SATURDAY</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $monA = retrieved_data("tbl_patient");
                  $tueA = retrieved_data("tbl_patient");
                  $wedA = retrieved_data("tbl_patient");
                  $thursA = retrieved_data("tbl_patient");
                  $friA = retrieved_data("tbl_patient");
                  $satA = retrieved_data("tbl_patient");

                  $monB = retrieved_data("tbl_patient");
                  $tueB = retrieved_data("tbl_patient");
                  $wedB = retrieved_data("tbl_patient");
                  $thursB = retrieved_data("tbl_patient");
                  $friB = retrieved_data("tbl_patient");
                  $satB = retrieved_data("tbl_patient");


                  $monC = retrieved_data("tbl_patient");
                  $wedC = retrieved_data("tbl_patient");
                  $friC = retrieved_data("tbl_patient");
                  $count = 1;
                  ?>

                  <tr>
                    <!-- SHIFT A -->
                    <td class="text-center"> <strong>1ST</strong> </td>

                    <td>

                      <?php
                      while ($row = $monA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "MONDAY" && $row['shift'] == "A") {
                          echo  ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>

                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $tueA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "TUESDAY" && $row['shift'] == "A") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $wedA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "WEDNESDAY" && $row['shift'] == "A") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }

                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $thursA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "THURSDAY" && $row['shift'] == "A") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $friA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "FRIDAY" && $row['shift'] == "A") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $satA->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "SATURDAY" && $row['shift'] == "A") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>


                  </tr>

                  <tr>
                    <td class="text-center"><strong>2ND</strong></td>
                    <td>
                      <?php
                      while ($row = $monB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "MONDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $tueB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "TUESDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $wedB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "WEDNESDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $thursB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "THURSDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $friB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "FRIDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>
                      <?php
                      while ($row = $satB->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "SATURDAY" && $row['shift'] == "B") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center"><strong>3RD</strong></td>
                    <td>
                      <?php
                      while ($row = $monC->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "MONDAY" && $row['shift'] == "C") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>

                    </td>

                    <td>
                      <?php
                      while ($row = $wedC->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "WEDNESDAY" && $row['shift'] == "C") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>

                    </td>

                    <td>
                      <?php
                      while ($row = $friC->fetch_assoc()) : ?>
                        <?php
                        if ($row['patient_preffered_day_treatment'] == "FRIDAY" && $row['shift'] == "C") {
                          echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                        }
                        ?>
                      <?php endwhile;

                      ?>
                    </td>

                    <td>

                    </td>
                    </td>
                  </tr>

                  <tr>
                    <td class="text-center"><strong>DOCTORS</strong></td>
                    <td><span id="doc1"></span></td>
                    <td><span id="doc2"></span></td>
                    <td><span id="doc3"></span></td>
                    <td><span id="doc4"></span></td>
                    <td><span id="doc5"></span></td>
                    <td><span id="doc6"></span></td>
                  </tr>

                  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_doctor_modal">
                        <i class='bx bxs-edit text-light'></i>
                      </button>
                      <strong>Edit button</strong> <br> -->

                  <tr>
                    <td class="text-center"><strong>Edit button</strong>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_doctor_modal"><i class='bx bxs-edit text-light'></i></button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>

          <!-- /.card-footer-->
        </div>
        <!-- /.card -->


      </section>
    </div>
    <!-- /.content -->

    <!-- /.content-wrapper -->
    <?php
    include './userconfig/userfooter.php';

    include "bs.js.php";


    $message = '';
    if (isset($_GET['message'])) {
      $message = $_GET['message'];
    }
    ?>
    <!-- /.control-sidebar -->


    <?php include './config/site_js_links.php'; ?>
    <?php include './config/data_tables_js.php'; ?>


    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
      $(document).ready(() => {
        display_doctors();
        current_number_of_shift();
        document.getElementById("doctors_name").style.display = "none";
        document.getElementById("update_btn").style.display = "none";

      })

      function display_doctors() {

        $.ajax({
          url: "displayData.php",
          method: "POST",
          data: {
            get_doctors_btn: 1
          },
          success: (res) => {
            response = JSON.parse(res);

            document.getElementById("doc1").innerHTML = response.MONDAY;
            document.getElementById("doc2").innerHTML = response.TUESDAY;
            document.getElementById("doc3").innerHTML = response.WEDNESDAY;
            document.getElementById("doc4").innerHTML = response.THURSDAY;
            document.getElementById("doc5").innerHTML = response.FRIDAY;
            document.getElementById("doc6").innerHTML = response.SATURDAY;
          }
        });

      }

      function check_doctors() {
        document.getElementById("doctors_name").style.display = "block";
        document.getElementById("update_btn").style.display = "block";

        // var day = ;

        $.ajax({
          url: "check_shift_schedule.php",
          method: "POST",
          data: {
            update_btn: 1,
            day: $("#day").val(),
          },
          success: (res) => {
            $("#doctors_name").val(res);
          }
        });

      }

      function update_doctor() {
        var day = $("#day").val();
        var doctors_name = $("#doctors_name").val();

        if (doctors_name != "") {
          // process
          $.ajax({
            url: "update_patients.php",
            method: "POST",
            data: {
              update_btn_doc: 1,
              day: day,
              doctors_name: doctors_name,
            },
            success: (res) => {
              if (res == "Failed") {
                alert("Failed to update");
              } else {
                $("#add_doctor_modal").modal("hide");
                display_doctors();
              }
            }
          });
        } else {
          alert("Please add doctor's name");
        }
      }

      showMenuSelected("#mnu_patients", "#mi_patients");
      var message = '<?php echo $message; ?>';

      if (message !== '') {
        showCustomMessage(message);
      }
      $('#date_of_birth').datetimepicker({
        format: 'L'
      });

      $(function() {
        $("#all_patients").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#all_patients_wrapper .col-md-6:eq(0)');
      });

      function total_shift() {
        var shift_limit = $("#number_of_shift").val();
        
        if (shift_limit != "") {
          $.ajax({
            url: "total_shifts.php",
            method: "POST",
            data: {
              total_shift_btn: 1,
              shift_limit: shift_limit
            },
            success: (res) => {
              if (res != "success") {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: res,
                })
              } else {


                Swal.fire({
                  position: 'top',
                  icon: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: false,
                  timer: 1500
                })

                setInterval(function() {
                  window.location.reload();
                }, 1000)
              }
            }
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "Empty fields",
          });
        }
      }

      function current_number_of_shift() {
        $.ajax({
          url: "total_shifts.php",
          method: "POST",
          data: {
            current_shift_btn: 1
          },
          success: (res) => {
            $("#number_of_shift").val(res);
          }
        });
      }
    </script>
</body>

</html>