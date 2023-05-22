<?php
session_start();

// include './config/connection.php';
include './common_service/common_functions.php';

include "functions.php";
include "includes/date.php";

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != "admin") {
        header("location:logout.php");
    }
}

$total_patients = retrieved_data("tbl_patient");
$total_patients = $total_patients->num_rows;
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

        .before {
            page-break-before: always;
        }

        .after {
            page-break-after: always;
        }

        .avoid {
            page-break-inside: avoid;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">

    <!-- PATIENT RELATED DATA -->

    <!-- modal for generate patient with specific day with all shifts -->
    <div class="modal fade" id="day_with_all_shift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report by patients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="day_with_all_shift" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal for generate patient with specific day and shifts -->
    <div class="modal fade" id="specific_day_and_shift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report by patients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>

                            <select name="shift" id="" class="form-control mt-3">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="day_and_shift" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- generate patients modal -->
    <div class="modal fade" id="generate_patients" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- patients button controls -->
                    <div class="mb-3">
                        <a href="generate.php?generate=tbl_patient" class="btn btn-primary text-decoration-none">All patients (MON to SAT all shifts)</a>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#day_with_all_shift">Day with all shifts (Mon, 1st to 3rd shifts)</button>
                    </div>

                    <div class="mb-3">
                        <!-- specific_day_and_shift -->
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#specific_day_and_shift">Day with specific day and shift (eg. MON, 1st shift)</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- ARCHIVE RELATED DATA -->
    
    <!-- modal for generate archives with specific day with all shifts -->
    <div class="modal fade" id="day_with_all_shift_archives" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report by patients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="day_with_all_shift_archives" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for generate ARCHIVES with specific day and shifts -->
    <div class="modal fade" id="specific_day_and_shift_archives" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report by patients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>

                            <select name="shift" id="" class="form-control mt-3">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="day_and_shift_archives" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- generate report by archives -->
    <div class="modal fade" id="generate_archives" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- patients button controls -->
                    <div class="mb-3">
                        <a href="generate.php?generate=archives" class="btn btn-primary text-decoration-none">All patients (MON to SAT all shifts)</a>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#day_with_all_shift_archives">Day with all shifts (Mon, 1st to 3rd shifts)</button>
                    </div>

                    <div class="mb-3">
                        <!-- specific_day_and_shift -->
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#specific_day_and_shift_archives">Day with specific day and shift (eg. MON, 1st shift)</button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- SHIFTS RELATED DATA -->
    <!-- generate report by archives -->
    <div class="modal fade" id="generate_shift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- patients button controls -->
                    <div class="mb-3">
                        <a href="generate.php?generate=shift" class="btn btn-primary text-decoration-none">All shifts (MON to SAT all shifts)</a>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#day_with_all_shift_shift">Day with all shifts (Mon, 1st to 3rd shifts)</button>
                    </div>

                    <div class="mb-3">
                        <!-- specific_day_and_shift -->
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#specific_day_and_shift_shift">Day with specific day and shift (eg. MON, 1st shift)</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- modal for generate shift with specific day with all shifts -->
    <div class="modal fade" id="day_with_all_shift_shift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="day_with_all_shift_shift" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for generate shifts with specific day and shifts -->
    <div class="modal fade" id="specific_day_and_shift_shift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Genenerate report by patients</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="generate.php" method="post">
                        <div class="mb-3">
                            <select name="day" id="" class="form-control">
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                                <option value="SATURDAY">SATURDAY</option>
                            </select>

                            <select name="shift" id="" class="form-control mt-3">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="specific_day_and_shift_shift" class="btn btn-outline-success">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <div class="wrapper">
        <!-- Navbar -->
        <?php include './config/header.php';
        include './config/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Generate Reports</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="d-flex align-items-center">
                    <div class="card" style="width: 18rem;">
                        <div class="row">
                            <div class="card-body col-md-4 p-4">
                                <h6 class="card-subtitle mb-2 text-muted mb-4">Generate report by:</h6>
                                <h5 class="card-title"></h5>
                                <h2>Patients</h2>
                                <p class="card-text">You can see all the controls related to patients</p>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#generate_patients">click here!</button>
                            </div>
                        </div>
                    </div>

                    <!-- generate_archives -->
                    <div class="card" style="width: 18rem;">
                        <div class="row">
                            <div class="card-body col-md-4 p-4">
                                <h6 class="card-subtitle mb-2 text-muted mb-4">Generate report by:</h6>
                                <h5 class="card-title"></h5>
                                <h2>Archives</h2>
                                <p class="card-text">You can see all the controls related to archives</p>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#generate_archives">click here!</button>
                            </div>
                        </div>
                    </div>
                    <!-- generate_shifts -->
                    <div class="card" style="width: 18rem;">
                        <div class="row">
                            <div class="card-body col-md-4 p-4">
                                <h6 class="card-subtitle mb-2 text-muted mb-4">Generate report by:</h6>
                                <h5 class="card-title"></h5>
                                <h2>Shifts</h2>
                                <p class="card-text">You can see all the controls related to shifts</p>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#generate_shift">click here!</button>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>


</body>

</html>