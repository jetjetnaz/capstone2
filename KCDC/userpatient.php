<?php
session_start();

// include './config/connection.php';
include './common_service/common_functions.php';
include "functions.php";



$res = retrieved_data("tbl_patient");
$total_patient = $res->num_rows;
$income = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './config/site_css_links.php'; ?>

  <?php include './config/data_tables_css.php'; ?>

  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->

  <?php include 'bs.css.php'; ?>
  <?php include './config/data_tables_css.php'; ?>

  <title>Patients - Kidney Care and Dialysis Center</title>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->

  <!-- ALL PATIENT MODALS  -->

  <!-- view patient-->
  <div class="modal fade" id="view_patients" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Patient's Detailed Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post">

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" disabled>
              </div>

              <div class="col-md-4">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" disabled>
              </div>

              <div class="col-md-4">
                <label class="form-label">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Age</label>
                <input type="text" name="age" id="age" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Date of birth</label>
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" disabled>
              </div>
            </div>


            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Barangay, Town or City</label>
                <input type="text" name="brgy_city" id="brgy_city" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Social Media</label>
                <input type="text" name="socmed" id="socmed" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Attending Physician</label>
                <input type="text" name="attending_physician" id="attending_physician" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Hospital Affilated</label>
                <input type="text" name="hospital_affilated" id="hospital_affilated" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Name of Companion</label>
                <input type="text" name="companion" id="companion" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Relationship with Patient</label>
                <input type="text" name="relationship" id="relationship" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Years of Dialysis</label>
                <input type="text" name="years_of_dialysis" id="years_of_dialysis" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Old Dialysis Facility</label>
                <input type="text" name="old_dialysis_facility" id="old_dialysis_facility" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Frequency of Treatment</label>
                <input type="text" name="frequency" id="frequency" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Preferred Day of Treatment</label>
                <input type="text" name="preferred_date" id="preferred_date" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Source of fund for dialysis treatment</label>
                <input type="text" name="funds" id="funds" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Monthly Income</label>
                <input type="text" name="income" id="income" class="form-control" disabled>
              </div>
              <div class="col-md-4">
                <label class="form-label">Government assistance</label>
                <input type="text" name="assistance" id="assistance" class="form-control" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-2">
                <label class="form-label">Shift ID</label>
                <input type="text" name="shift_id" id="shift_id" class="form-control" disabled>
              </div>

              <div class="col-md-2">
                <label class="form-label">Type of Shift</label>
                <input type="text" name="shift" id="shift" class="form-control" disabled>
              </div>

              <div class="col-md-4">
                <label class="form-label">Religion</label>
                <input type="text" name="religion" id="religion" class="form-control" disabled>
              </div>

              <div class="col-md-4">
                <label class="form-label">Best time to call</label>
                <input type="text" name="best_time" id="best_time" class="form-control" disabled>
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                <textarea name="how_can_arc" id="how_can_arc" cols="30" rows="5" class="form-control" disabled></textarea>
              </div>
              <div class="col-md-6">
                <textarea name="comments" id="comments" cols="30" rows="5" class="form-control" disabled></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- schedule modal -->
  <div class="modal fade" id="schedule_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Select Prefered day/s of Treatment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form>
            <div class="mb-3">
              <!-- <label for="preferred_date" class="form-label">Select Preferred date</label> -->
              <!-- <input type="date" name="preferred_dates" id="preferred_dates" class="form-control" onchange="check_schedule()"> -->
              <select name="" id="preferred_dates" class="form-select" onchange="check_schedule()">
                <option value="MONDAY">MONDAY</option>
                <option value="TUESDAY">TUESDAY</option>
                <option value="WEDNESDAY">WEDNESDAY</option>
                <option value="THURSDAY">THURSDAY</option>
                <option value="FRIDAY">FRIDAY</option>
                <option value="SATURDAY">SATURDAY</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="shift_date" class="form-label">See available shift</label>

              <div class="form-check d-flex align-items-center justify-contnet-center">
                <input class="form-check-input" type="radio" name="shift" id="shift_a_val" value="A" required>
                <label class="form-check-label" for="shift_a_val" id="shift_a">
                  A: No Date Selected
                </label>
              </div>

              <input type="hidden" name="" id="a">
              <input type="hidden" name="" id="b">
              <input type="hidden" name="" id="c">
              <input type="hidden" name="" id="date">
              <input type="hidden" name="" id="limit">

              <div class="form-check d-flex align-items-center justify-contnet-center">
                <input class="form-check-input" type="radio" name="shift" id="shift_b_val" value="B">
                <label class="form-check-label" for="shift_b_val" id="shift_b">
                  B: No Date Selected
                </label>
              </div>

              <div class="form-check d-flex align-items-center justify-contnet-center">
                <input class="form-check-input" type="radio" name="shift" id="shift_c_val" value="C">
                <label class="form-check-label" for="shift_c_val" id="shift_c">
                  C: No Date Selected
                </label>
              </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="save_btn" onclick="save_preferred_date()">Save Schedule</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- update patient-->
  <div class="modal fade" id="update_patient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Patient's Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post">
            <input type="hidden" name="" id="update_shift_id">
            <div class="row mb-3">
              <div class="col-md-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="update_last_name" id="update_last_name" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">First Name</label>
                <input type="text" name="update_first_name" id="update_first_name" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">Middle Name</label>
                <input type="text" name="middle_name" id="update_middle_name" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">Religion</label>
                <input type="text" name="religion" id="update_religion" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" id="update_age" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" id="update_gender" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Date of birth</label>
                <input type="text" name="date_of_birth" id="update_date_of_birth" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">Best time to call</label>
                <input type="text" name="best_time" id="update_best_time" class="form-control">
              </div>
            </div>


            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Address</label>
                <input type="text" name="address" id="update_address" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Contact Number</label>
                <input type="text" name="contact_number" id="update_contact_number" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Barangay, Town or City</label>
                <input type="text" name="brgy_city" id="update_brgy_city" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Social Media</label>
                <input type="text" name="socmed" id="update_socmed" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Attending Physician</label>
                <input type="text" name="attending_physician" id="update_attending_physician" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Hospital Affilated</label>
                <input type="text" name="hospital_affilated" id="update_hospital_affilated" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Name of Companion</label>
                <input type="text" name="companion" id="update_companion" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Relationship with Patient</label>
                <input type="text" name="relationship" id="update_relationship" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Years of Dialysis</label>
                <input type="text" name="years_of_dialysis" id="update_years_of_dialysis" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label">Old Dialysis Facility</label>
                <input type="text" name="update_old_dialysis_facility" id="update_old_dialysis_facility" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Frequency of Treatment</label>
                <input type="text" name="frequency" id="update_frequency" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Source of fund for dialysis treatment</label>
                <input type="text" name="update_funds" id="update_funds" class="form-control">

              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Monthly Income</label>
                <input type="text" name="update_income" id="update_income" class="form-control">

              </div>

              <div class="col-md-6">
                <label class="form-label">Government assistance</label>
                <input type="text" name="update_assistance" id="update_assistance" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <textarea name="" id="update_how_can_arc" cols="30" rows="5" class="form-control"></textarea>
              </div>
              <div class="col-md-6">
                <textarea name="" id="update_comments" cols="30" rows="5" class="form-control"></textarea>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="update_btn" onclick="update_patients()">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- UPDATE SHIFT MODAL
  <div class="modal fade" id="update_shift_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Select new shifts</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select id="select_shift" class="form-select" onchange="check_shift_availability()">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
          <p class="text-center mt-5" id="response">Please select date</p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="change_shift_btn" onclick="change_shift()">Select shift</button>
        </div>
      </div>
    </div>
  </div> -->

  <!-- update actions modal -->
  <div class="modal fade" id="update_action_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Select action to perform</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- reschedule patients -->
          <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="ask_permission()">
              Reschedule this patient
            </button>
          </div>
          <!-- update other information -->
          <div class="mb-3">
            <button type="button" class="btn btn-primary" onclick="update_patients_info()">
              Edit other information of this patient
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>



  <div class="wrapper">
    <!-- Navbar -->
    <?php include './config/header.php';
  include './userconfig/usersidebar.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Patients</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <!-- Default box -->
        <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
            <h3 class="card-title">Total Patients (<?= $total_patient ?>)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>

            </div>
          </div>
          <div class="card-body">
            <div class="row table-responsive">
              <div id="display_table"></div>
              <table id="all_patients" class="table table-striped dataTable table-bordered dtr-inline" role="grid" aria-describedby="all_patients_info">

                <thead>
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  while ($row = $res->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?= $row['shiftID'] ?></td>
                      <td><?= $row['shift'] ?></td>
                      <td><?= $row['patient_preffered_day_treatment'] ?></td>
                      <td><?= $row['patient_last_name'] ?></td>
                      <td><?= $row['patient_first_name'] ?></td>
                      <td><?= $row['patient_middle_name'] ?></td>
                      <td><?= $row['patient_address'] ?></td>
                      <td><?= $row['patient_date_birth'] ?></td>
                      <td><?= $row['patient_age'] ?></td>
                      <td><?= $row['patient_gender'] ?></td>
                      <td><?= $row['patient_contact_number'] ?></td>
                      <td><?= $row['patient_attending_physician'] ?></td>

                      <td>
                        <!-- view -->
                        <button type="button" class="btn" onclick="view_details(<?= $row['shiftID'] ?>)">
                          <i class='bx bxs-user-badge text-success'></i>
                        </button>

                        <!-- UPDATE BTN -->
                        <button type="button" class="btn" onclick="open_update_modal(<?= $row['shiftID'] ?>)">
                          <i class='bx bxs-edit text-primary'></i>
                        </button>

                        <!-- delete -->
                        <button type="button" class="btn" onclick="delete_patient(<?= $row['shiftID'] ?>)">
                          <i class='bx bxs-trash text-danger'></i>
                        </button>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
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
    include './config/footer.php';

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
      // $(document).ready(() => {
      //   document.getElementById("change_shift_btn").style.display = "none";
      // });

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

      function open_update_modal(shift_id) {
        $("#update_shift_id").val(shift_id)
        $("#update_action_modal").modal("show");
      }

      function check_schedule() {
        document.getElementById("save_btn").style.display = "block";

        // console.log($("#preferred_dates").val());

        let data = {
          preferred_dates: $("#preferred_dates").val(),
          resched_btn: 1
        };

        $.ajax({
          url: "check_shift_schedule.php",
          method: "POST",
          data: data,
          success: (res) => {

            console.log(res);

            var res = JSON.parse(res);

            // change label
            var shift_a = document.getElementById("shift_a");
            var shift_b = document.getElementById("shift_b");
            var shift_c = document.getElementById("shift_c");

            // stores digital value
            $("#a").val(res.A);
            $("#b").val(res.B);
            $("#c").val(res.C);
            $("#limit").val(res.limit);

            $("#date").val($("#preferred_date").val());
            $("#shift_a_val").prop("checked", false);
            $("#shift_b_val").prop("checked", false);
            $("#shift_c_val").prop("checked", false);

            if (res.A < res.limit) {
              shift_a.style.color = "green";
              shift_a.innerHTML = `A : Available (` + res.A + `)`;
            } else {
              if (res.A == 0) {
                shift_a.style.color = "green";
                shift_a.innerHTML = `A : Available (` + res.A + `)`;
              } else {
                shift_a.style.color = "red";
                shift_a.innerHTML = `A : Not Available (` + res.A + `)`;
              }
            }

            if (res.B < res.limit) {
              shift_b.style.color = "green";
              shift_b.innerHTML = `B : Available (` + res.B + `)`;

            } else {
              if (res.B == 0) {
                shift_b.style.color = "green";
                shift_b.innerHTML = `A : Available (` + res.B + `)`;
              } else {
                shift_b.style.color = "red";
                shift_b.innerHTML = `A : Not Available (` + res.B + `)`;
              }
            }

            if (res.C < res.limit) {
              shift_c.style.color = "green";
              shift_c.innerHTML = `C : Available (` + res.C + `)`;

            } else {
              if (res.C == 0) {
                shift_c.style.color = "green";
                shift_c.innerHTML = `A : Available (` + res.C + `)`;
              } else {
                shift_c.style.color = "red";
                shift_c.innerHTML = `A : Not Available (` + res.C + `)`;
              }
            }

          }
        })
      }

      function ask_permission() {
        Swal.fire({
          title: 'Are you sure you want to reschedule this patient?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#update_patient").modal("hide");
            $("#schedule_modal").modal("show");
          }
        })
      }

      function view_details(shift_id) {

        $("#view_patients").modal("show");
        $.ajax({
          url: "displayData.php",
          method: "POST",
          data: {
            view_btn: 1,
            shift_id: shift_id
          },
          success: (res) => {
            let patient = JSON.parse(res);
            console.log(patient);

            // display all patient info

            $("#last_name").val(patient.patient_last_name);
            $("#first_name").val(patient.patient_first_name);
            $("#middle_name").val(patient.patient_middle_name);
            $("#date_of_birth").val(patient.patient_date_birth);
            $("#age").val(patient.patient_age);
            $("#gender").val(patient.patient_gender);
            $("#address").val(patient.patient_address);
            $("#contact_number").val(patient.patient_contact_number);
            $("#brgy_city").val(patient.patient_barangay_city);
            $("#socmed").val(patient.patient_social_media);
            $("#attending_physician").val(patient.patient_attending_physician);
            $("#companion").val(patient.patient_name_of_companion);
            $("#years_of_dialysis").val(patient.patient_years_of_dialysis_facility);
            $("#frequency").val(patient.patient_frequency_of_treatment);
            $("#preferred_date").val(patient.patient_preffered_day_treatment);
            $("#hospital_affilated").val(patient.patient_hospital_affiliated);
            $("#old_dialysis_facility").val(patient.patient_old_dialysis_facility);
            $("#relationship").val(patient.patient_relationship_with_patient);
            $("#funds").val(patient.patient_source_funds);
            $("#income").val(patient.patient_source_income);
            $("#assistance").val(patient.patient_source_assistance);
            $("#shift_id").val(patient.shiftID);
            $("#shift").val(patient.shift);
            $("#best_time").val(patient.best_time);
            $("#religion").val(patient.religion);
            $("#how_can_arc").val(patient.how_can_arc);
            $("#comments").val(patient.comments);
          }
        });
      }

      function update_patients_info() {
        $("#update_action_modal").modal("hide");
        $("#update_patient").modal("show");
        var shift_id = $("#update_shift_id").val()
        $.ajax({
          url: "displayData.php",
          method: "POST",
          data: {
            view_btn: 1,
            shift_id: shift_id
          },
          success: (res) => {
            let patient = JSON.parse(res);
            // console.log(patient);

            // display all patient info

            $("#update_last_name").val(patient.patient_last_name);
            $("#update_first_name").val(patient.patient_first_name);
            $("#update_middle_name").val(patient.patient_middle_name);
            $("#update_date_of_birth").val(patient.patient_date_birth);
            $("#update_age").val(patient.patient_age);
            $("#update_gender").val(patient.patient_gender);
            $("#update_address").val(patient.patient_address);
            $("#update_contact_number").val(patient.patient_contact_number);
            $("#update_brgy_city").val(patient.patient_barangay_city);
            $("#update_socmed").val(patient.patient_social_media);
            $("#update_attending_physician").val(patient.patient_attending_physician);
            $("#update_companion").val(patient.patient_name_of_companion);
            $("#update_years_of_dialysis").val(patient.patient_years_of_dialysis_facility);
            $("#update_frequency").val(patient.patient_frequency_of_treatment);
            $("#update_preferred_date").val(patient.patient_preffered_day_treatment);
            $("#update_hospital_affilated").val(patient.patient_hospital_affiliated);
            $("#update_old_dialysis_facility").val(patient.patient_old_dialysis_facility);
            $("#update_relationship").val(patient.patient_relationship_with_patient);
            $("#update_funds").val(patient.patient_source_funds);
            $("#update_income").val(patient.patient_source_income);
            $("#update_assistance").val(patient.patient_source_assistance);
            $("#update_shift_id").val(patient.shiftID);
            $("#update_shift").val(patient.shift);
            $("#update_religion").val(patient.religion);
            $("#update_best_time").val(patient.best_time);
            $("#update_how_can_arc").val(patient.how_can_arc);
            $("#update_comments").val(patient.comments);

            // update_how_can_arc
          }
        });
      }

      function update_patients() {

        var is_empty = 0;

        let data = {
          update_shift_id: $("#update_shift_id").val(),
          update_last_name: $("#update_last_name").val(),
          update_first_name: $("#update_first_name").val(),
          update_middle_name: $("#update_middle_name").val(),
          update_date_of_birth: $("#update_date_of_birth").val(),
          update_age: $("#update_age").val(),
          update_gender: $("#update_gender").val(),
          update_address: $("#update_address").val(),
          update_contact_number: $("#update_contact_number").val(),
          update_brgy_city: $("#update_brgy_city").val(),
          update_socmed: $("#update_socmed").val(),
          update_attending_physician: $("#update_attending_physician").val(),
          update_companion: $("#update_companion").val(),
          update_years_of_dialysis: $("#update_years_of_dialysis").val(),
          update_frequency: $("#update_frequency").val(),
          update_preferred_date: $("#update_preferred_date").val(),
          update_hospital_affilated: $("#update_hospital_affilated").val(),
          update_old_dialysis_facility: $("#update_old_dialysis_facility").val(),
          update_relationship: $("#update_relationship").val(),
          update_funds: $("#update_funds").val(),
          update_income: $("#update_income").val(),
          update_assistance: $("#update_assistance").val(),
          update_patients_btn: 1
        }

        for (const [key, value] of Object.entries(data)) {
          if (value == "") {
            document.getElementById(key).style.border = "2px solid red";
            is_empty += 1;
          }
        }

        // if not empty then process the data using ajax
        if (is_empty < 1) {

          $.ajax({
            url: "update_patients.php",
            method: "POST",
            data: data,
            success: (res, status) => {

              // console.log(res);

              if (res != "success") {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: res,
                })
              } else {
                Swal.fire({
                  position: 'top-center',
                  icon: 'success',
                  title: 'Successfully update patients information',
                  showConfirmButton: false,
                  timer: 1500
                });
                setInterval(() => {
                  window.location.reload();
                }, 1500);
              }
            }

          });
        }



      }

      function delete_patient(shift_id) {
        Swal.fire({
          title: 'Are you sure?',
          text: "Deleted Info Can Retreive in the Archive.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({
              url: "userdelete_patients.php",
              method: "POST",
              data: {
                del_btn: 1,
                shift_id: shift_id,
              },
              success: (res, status) => {


                if (res != "success") {
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: res,
                  })
                } else {
                  Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Seccessfully',
                    showConfirmButton: false,
                    timer: 1500
                  });
                  setInterval(() => {
                    window.location.reload();
                  }, 1500);
                }
              }
            });

          }
        })
      }

      // function check_shift_availability() {
      //   document.getElementById("change_shift_btn").style.display = "block";
      //   var shift_id = $("#update_shift_id").val();
      //   var new_shift = $("#select_shift").val();

      //   $.ajax({
      //     url: "update_patients.php",
      //     method: "POST",
      //     data: {
      //       check_shift_btn: 1,
      //       shift_id: shift_id,
      //       new_shift: new_shift,
      //     },
      //     success: (res) => {
      //       var response = document.getElementById("response");

      //       if (res != "success") {
      //         if (res > 7) {
      //           response.style.color = "red";
      //           response.innerHTML = "Sorry, this shift is full!";
      //         } else {
      //           response.style.color = "green";
      //           response.innerHTML = "This shift is available!";
      //         }
      //       } else {
      //         response.style.color = "primary";
      //         response.innerHTML = "You're already in this shift!";
      //       }
      //     }
      //   });
      // }

      // function change_shift() {
      //   var shift_id = $("#update_shift_id").val();
      //   var new_shift = $("#select_shift").val();

      //   $.ajax({
      //     url: "update_patients.php",
      //     method: "POST",
      //     data: {
      //       change_shift_btn: 1,
      //       shift_id: shift_id,
      //       new_shift: new_shift,
      //     },
      //     success: (res) => {
      //       if (res != "success") {
      //         Swal.fire({
      //           icon: 'warning',
      //           title: 'Do not be upset!',
      //           text: res,
      //         })
      //         setInterval(() => {
      //           window.location.reload();
      //         }, 1500);
      //       } else {
      //         Swal.fire({
      //           position: 'top-center',
      //           icon: 'success',
      //           title: 'Successfully update patients information',
      //           showConfirmButton: false,
      //           timer: 1500
      //         });
      //         setInterval(() => {
      //           window.location.reload();
      //         }, 1500);
      //       }
      //     }
      //   });
      // }

      function save_preferred_date() {
        var shift_id = $("#update_shift_id").val();

        var shift_a = document.getElementById('shift_a_val');
        var shift_b = document.getElementById('shift_b_val');
        var shift_c = document.getElementById('shift_c_val');
        var preferred_date = $("#preferred_dates").val();

        var digital_val_a = $("#a").val();
        var digital_val_b = $("#b").val();
        var digital_val_c = $("#c").val();
        var shift_limit = $("#limit").val();

        if (digital_val_a == shift_limit) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'This Shift is occupied, Please proceed to another shift',
          })
        } else {
          if (shift_a.checked) {
            get_shift(preferred_date, shift_a.value, shift_id);
            // alert("checked a: " + preferred_date)
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please Select Shift',
            })
          }
        }


        if (digital_val_b == 8) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'This Shift is occupied, Please proceed to another shift',
          })
          $("#shift_a_val").prop("checked", false);
          $("#shift_b_val").prop("checked", false);
          $("#shift_c_val").prop("checked", false);
        } else {
          if (shift_b.checked) {
            get_shift(preferred_date, shift_b.value, shift_id);
            // alert("checked a: " + preferred_date)
          }
        }

        if (digital_val_c == 8) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'This Shift is occupied, Please proceed to another shift',
          })
        } else {
          if (shift_c.checked) {
            get_shift(preferred_date, shift_c.value, shift_id);
            // alert("checked a: " + preferred_date)
          }
        }


        function get_shift(preferred_date, shift, shift_id) {

          // alert("date: " + " " + preferred_date + " " + "shift: " + shift);

          var data = {
            preferred_date: preferred_date,
            resched_btn: 1,
            shift: shift,
            shift_id: shift_id,
          };

          $.ajax({
            url: "insert_data.php",
            method: "POST",
            data: data,
            success: (res) => {

              if (res != "success") {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: res,
                })
              } else {
                Swal.fire({
                  position: 'top-center',
                  icon: 'success',
                  title: "Successfully Reschedule",
                  showConfirmButton: false,
                  timer: 1500
                })
                setInterval(() => {
                  window.location.reload();
                }, 1500);
              }

              $("#schedule_modal").modal("hide");
            }
          })

        }
      }
    </script>
</body>

</html>