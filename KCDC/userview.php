<?php

session_start();

include './config/connection.php';
include './common_service/common_functions.php';
include 'new_connection.php';
include "functions.php";

// session_start();

$message = '';
$flag = '';

if (isset($_POST['Save'])) {


  $patient_last_name = $_POST['last_name'];
  $patient_first_name = $_POST['first_name'];
  $patient_middle_name  = $_POST['middle_name'];
  $patient_age = $_POST['age'];
  $patient_gender = $_POST['gender'];
  $patient_date_birth = $_POST['date_birth'];
  $patient_address = $_POST['address'];
  $patient_contact_number = $_POST['contact_number'];
  $patient_barangay_city = $_POST['barangay_city'];
  $patient_social_media = $_POST['social_media'];
  $patient_attending_physician = $_POST['attending_physician'];
  $patient_name_of_companion = $_POST['companion'];
  $patient_years_of_dialysis_facility = $_POST['years_treatment'];
  $patient_frequency_of_treatment = $_POST['frequency_treatment'];
  $patient_hospital_affiliated = $_POST['hospital_affiliated'];
  $patient_old_dialysis_facility = $_POST['dailysis_facility'];
  $patient_relationship_with_patient = $_POST['patient'];
  $patient_source_funds = $_POST['source_funds'];
  $patient_source_income  = $_POST['source_income'];
  $patient_source_assistance = $_POST['source_assistance'];
  // additional
  $best_time = $_POST['best_time'];
  $religion = $_POST['religion'];
  $how_can_arc = $_POST['how_can_arc'];
  $comments = $_POST['comments'];

  // fetch shift_from temp_table
  $temp_shift = retrieved_data("temp_shift_sched_holder");

  if ($temp_shift->num_rows > 0) {

    while ($row =  $temp_shift->fetch_assoc()) {

      insert_patients($row['shift_id'], $row['shift'], $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $row['preferred_date'], $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance, $religion, $best_time, $how_can_arc, $comments);
      insert_shift_schedule($row['shift_id'], $row['preferred_date'], $row['shift']);
    }

    delete_temp_data();

    $_SESSION['message']  = "Successfully Added new patients";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './userconfig/site_css_links.php' ?>
  <?php include 'includes/others_imports.php' ?>

  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <?php include "bs.css.php"; ?>
  <title>Add Patient Info - KCADC</title>

</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
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
            <div class="col-sm-6">
              <h1>New Infomration Sheet</h1>
            </div>
          </div>
        </div>
      </section>

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
                  <label for="preferred_date" class="form-label">Select Preferred day</label>
                  <!-- check_schedule() -->
                  <!-- <input type="date" name="preferred_date" id="preferred_date" class="form-control" onchange=""> -->
                  <select name="" id="preferred_date" class="form-select" onchange="check_schedule()">
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

                <input type="hidden" name="" id="limit">

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_btn" onclick="save_preferred_date()">Save Schedule</button>
            </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
            <h3 class="card-title">Add Information Sheet</h3>
            <?php
            if (isset($_SESSION['message'])) {
            ?>
              <div class=" text-center alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
              unset($_SESSION['message']);
            }

            ?>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">

            <form method="post">
              <div class="row">

                <div class="col-md-3">
                  <label>Last Name </label>
                  <input id="last_name" name="last_name" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>First Name </label>
                  <input id="first_name" name="first_name" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-2">
                  <label>Middle Name </label>
                  <input type="text" id="middle_name" name="middle_name" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-1">
                  <label>Age </label>
                  <input type="number" id="age" name="age" class="form-control form-control-sm rounded-0" required="required" min="1" max="120" />
                </div>

                <div class="col-md-3">
                  <label>Religion</label>
                  <input type="text" id="religion" name="religion" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-1">
                  <label>Gender </label>
                  <input id="gender" name="gender" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-2">

                  <div class="form-group">
                    <label>Date of Birth</label>

                    <div class="input-group date" id="date_birth" data-target-input="nearest">
                      <input type="date" class="form-control form-control-sm rounded-0" data-target="#date_birth" name="date_birth" required="required" autocomplete="off" />
                    </div>

                  </div>

                </div>

                <div class="col-md-3">
                  <label>Address</label>
                  <input id="address" class="form-control form-control-sm rounded-0" name="address" required="required" />
                </div>


                <div class="col-md-3">
                  <label>Contact number</label>
                  <input type="tel" type="text" id="contact_number" name="contact_number" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>(Barangay/City)</label>
                  <input id="barangay_city" name="barangay_city" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Social Media Account</label>
                  <input id="social_media" name="social_media" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Attending Physician</label>
                  <input id="attending_physician" name="attending_physician" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Hospital Affilated</label>
                  <input id="hospital_affilated" name="hospital_affiliated" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Name of Companion</label>
                  <input id="companion" name="companion" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Relationship with patient</label>
                  <input id="patient" name="patient" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Years of dialysis treatment</label>
                  <input type="number" id="years_treatment" name="years_treatment" class="form-control form-control-sm rounded-0" required="required" min="1" max="20" />
                </div>

                <div class="col-md-3">
                  <label>Old Dialysis Facility</label>
                  <input id="dailysis_facility" name="dailysis_facility" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-3">
                  <label>Best time to Call</label>
                  <input id="best_time" name="best_time" class="form-control form-control-sm rounded-0" required="required" />
                </div>

                <div class="col-md-8">
                  <label>Frequency of treatment</label>
                  <div class="col-md-2">
                    <input type="number" id="frequency_treatment" name="frequency_treatment" class="form-control form-control-sm rounded-0" required="required" onchange="on_change()" min="1" max="3" />
                  </div>
                </div>
              </div>

              <label>Source of fund for dialysis treatment(Pangunahing pinagkukunan ng pondo para sa dialysis treatment):</label>
              <select id="source_funds" class="form-control form-control-sm rounded-0" name="source_funds">
                <option value="Job(trabaho)">Job(trabaho)</option>
                <option value="Help from other family member/relative (tulong mula sa mga kamag-anak">Help from other family member/relative (tulong mula sa mga kamag-anak</option>
                <option value="HMO">HMO</option>
                <option value="NGO(Non-goverment organization)">NGO(Non-goverment organization)</option>
                <option value="Others">Others</option>
              </select>

              <label>Monthly Income</label>
              <select id="Source_income" class="form-control form-control-sm rounded-0" name="source_income">
                <option value="Below 10,000">Below 10,000</option>
                <option value="10-000-30,000">10-000-30,000</option>
                <option value="40-000-60,000">40-000-60,000</option>
                <option value="70-000-100,000">70-000-100,000</option>
                <option value="Above 100,000">Above 100,000</option>
              </select>

              <label>Government assistance(Tulong mula sa pamahalaan):</label>
              <select id="source_assistance" class="form-control form-control-sm rounded-0" name="source_assistance">
                <option value="PSCO">PSCO</option>
                <option value="PhilHealth">PhilHealth</option>
                <option value="DSWD">DSWD</option>
                <option value="Others">Others</option>
              </select>

              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="" class="form-label">How can ARC help you? (paano ka matutulungan ng ARC?)</label>
                  <textarea name="how_can_arc" id="" cols="30" rows="5" class="form-control" placeholder="How can ARC help you? (paano ka matutulungan ng ARC?)"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Comments and Suggestions (kumento at Mungkahi)</label>
                  <textarea name="comments" id="" cols="30" rows="5" class="form-control" placeholder="Comments and Suggestions (kumento at Mungkahi)"></textarea>
                </div>
              </div>



              <!-- additional  -->

              <div class="clearfix">&nbsp;</div>
              <div class="col-md-12">
                <hr />
              </div>

              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label>Prefered day/s of Treatment</label>
                <button type="button" class="btn btn-primary modal_btn" data-bs-toggle="modal" data-bs-target="#schedule_modal" id="schedule_btn">
                  check schedule
                </button>
              </div>
              <div class="clearfix">&nbsp;</div>
              <div class="row">
                <div class="col-md-10">&nbsp;</div>
                <div class="col-md-2">
                  <button type="Save" id="Save" name="Save" class="bg-purple btn btn-primary btn-sm btn-flat btn-block">Save</button>
                </div>
            </form>
          </div>
        </div>

        <?php include './userconfig/userfooter.php';
        $message = '';
        if (isset($_GET['message'])) {
          $message = $_GET['message'];
        }
        ?>
        <?php
        include './userconfig/site_js_links.php';
        include "bs.js.php";
        ?>
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

        <script>
          $(document).ready(function() {
            document.getElementById("save_btn").style.display = "none";

          });

          function check_schedule() {
            document.getElementById("save_btn").style.display = "block";

            // let data = ;

            $.ajax({
              url: "check_shift_schedule.php",
              method: "POST",
              data: {
                preferred_date: $("#preferred_date").val(),
                preferred_date_btn: 1,
              },
              success: (res) => {
                var res = JSON.parse(res);
                console.log(res);
                // change label
                var shift_a = document.getElementById("shift_a");
                var shift_b = document.getElementById("shift_b");
                var shift_c = document.getElementById("shift_c");
                $("#limit").val(res.limit);

                // stores digital value
                $("#a").val(res.A);
                $("#b").val(res.B);
                $("#c").val(res.C);
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

          function save_preferred_date() {

            var shift_a = document.getElementById('shift_a_val');
            var shift_b = document.getElementById('shift_b_val');
            var shift_c = document.getElementById('shift_c_val');
            var shift_limit = document.getElementById('limit');

            var preferred_date = $("#preferred_date").val();

            var digital_val_a = $("#a").val();
            var digital_val_b = $("#b").val();
            var digital_val_c = $("#c").val();
            var shift_limit = document.getElementById('limit').value;

            if (digital_val_a == shift_limit) {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This Shift is occupied, Please proceed to another shift',
              })
            } else {
              if (shift_a.checked) {
                get_shift(preferred_date, shift_a.value);
                // alert("checked a: " + preferred_date)
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Please Select Shift',
                })
              }
            }

            if (digital_val_b == shift_limit) {
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
                get_shift(preferred_date, shift_b.value);
                // alert("checked a: " + preferred_date)
              }
            }

            if (digital_val_c == shift_limit) {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This Shift is occupied, Please proceed to another shift',
              })
            } else {
              if (shift_c.checked) {
                get_shift(preferred_date, shift_c.value);
                // alert("checked a: " + preferred_date)
              }
            }


            function get_shift(preferred_date, shift) {

              // alert("date: " + " " + preferred_date + " " + "shift: " + shift);

              var data = {
                preferred_date: preferred_date,
                preffered_date_insert_btn: 1,
                shift: shift,
              };

              $.ajax({
                url: "insert_data.php",
                method: "POST",
                data: data,
                success: (res) => {
                  Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: res,
                    showConfirmButton: false,
                    timer: 1500
                  })

                  // $("#schedule_modal").modal("hide");
                  // $(".modal_btn").attr("disabled", true);
                }
              })

            }
          }
        </script>

</html>