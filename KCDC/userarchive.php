<?php
session_start();

// include './config/connection.php';
include './common_service/common_functions.php';
include "functions.php";



$res = retrieved_data("archives");
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

    <title>Archives - Kidney Care and Dialysis Center</title>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">

    <!-- ALL PATIENT MODALS  -->
    <!-- view patient-->
    <div class="modal fade" id="view_patients" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Patient's Detailed Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" disabled>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" disabled>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control" disabled>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Religion</label>
                                <input type="text" name="religion" id="religion" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">Age</label>
                                <input type="text" name="age" id="age" class="form-control" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Gender</label>
                                <input type="text" name="gender" id="gender" class="form-control" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date of birth</label>
                                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Best time to call</label>
                                <input type="text" name="best_time" id="best_time" class="form-control" disabled>
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
                            <div class="col-md-12">
                                <label class="form-label">Source of fund for dialysis treatment</label>
                                <input type="text" name="funds" id="funds" class="form-control" disabled>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Government assistance(Tulong mula sa pamahalaan):</label>
                                <input type="text" name="assistance" id="assistance" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Monthly Income</label>
                                <input type="text" name="income" id="income" class="form-control" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Shift ID</label>
                                <input type="text" name="shift_id" id="shift_id" class="form-control" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Type of Shift</label>
                                <input type="text" name="shift" id="shift" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <textarea name="" id="how_can_arc" cols="30" rows="5" class="form-control" disabled></textarea>
                            </div>
                            <div class="col-md-6">
                                <textarea name="" id="comments" cols="30" rows="5" class="form-control" disabled></textarea>
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

    <div class="wrapper">
        <!-- Navbar -->
        <?php include './config/header.php';
        include './userconfig/usersidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Archives</h1>
                            <span>In this section you can retrieve all deleted patients or delete them permanently from the database</span>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="card card-outline card-primary rounded-0 shadow">
                    <div class="card-header">
                        <h3 class="card-title">Total number of deleted patients (<?= $total_patient ?>)</h3>

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
                                        <th>Shift Id</th>
                                        <th>Shift</th>
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

                                                <!-- edit -->
                                                <button type="button" class=" btn" onclick="retrieved_patients(<?= $row['shiftID'] ?>)">
                                                    <i class=' fa fa-archive text-primary'></i>
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


            function view_details(shift_id) {
                $("#view_patients").modal("show");
                $.ajax({
                    url: "displayData.php",
                    method: "POST",
                    data: {
                        retrieve_view_btn: 1,
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
                        $("#religion").val(patient.religion);
                        $("#best_time").val(patient.best_time);
                        $("#how_can_arc").val(patient.how_can_arc);
                        $("#comments").val(patient.comments);
                    }
                });
            }



            function retrieved_patients(shift_id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You're about to recover this patient",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4BB543',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Recover now!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: "recover_patients.php",
                            method: "POST",
                            data: {
                                recover_patient_btn: 1,
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
                                        title: 'Successfully recover patient',
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


            function delete_patient(shift_id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You're about to delete this patient permanently!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: "delete_patients.php",
                            method: "POST",
                            data: {
                                delete_patient_forever_btn: 1,
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
                                        title: 'Seccessfully deleted patient',
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
        </script>
</body>

</html>