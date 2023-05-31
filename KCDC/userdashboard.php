<?php
session_start();

require_once('db-connect.php');
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
while ($row = $total_patient_today->fetch_assoc()) {
    $day = $row['preferred_date'];
    $today_patients += 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <?php include './config/site_css_links.php'; ?>
    <title style="color: white;">Kidney Care and Dialysis Center</title>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }

        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <?php

        include './config/header.php';
        include './userconfig/usersidebar.php';
        ?>
        <!-- Content Wrapper. Contains page content -->


        <!-- Main content -->
        <div class="container py-8" id="page-container">
            <br>
            <button class="form-control" style="width:15%">See Date</button>
            <div class="center">

                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
                <!-- <div class="col-md-3"> -->
                    <!-- <div class="cardt rounded-0 shadow">
                        <div class="card-header bg-gradient bg-primary text-light">
                            <h5 class="card-title">Schedule Form</h5>
                        </div> -->
                        <!-- <div class="card-body">
                            <div class="container-fluid">
                                <form action="save_schedule.php" method="post" id="schedule-form">
                                    <input type="hidden" name="id" value="">
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">Patient Name</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description" class="control-label">Shift</label>
                                        <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Schedule</label>
                                        <input type="date" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                        <script>
                                            // Get today's date
                                            var today = new Date().toISOString().split('T')[0];

                                            // Set the minimum date of the input field to today
                                            document.getElementById("start_datetime").setAttribute("min", today);
                                        </script>
                                        <script>
                                            function disableSundays(event) {
                                                const selectedDate = new Date(event.target.value);
                                                const dayOfWeek = selectedDate.getDay();
                                                if (dayOfWeek === 0) { // Sunday is day 0
                                                    event.preventDefault();
                                                }
                                            }
                                        </script>
                                    </div>

                                </form>
                            </div>
                        </div> -->
                        <div class="card-footer">
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->
        <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title">Schedule Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container-fluid">
                            <dl>
                                <dt class="text-muted">Patient</dt>
                                <dd id="title" class="fw-bold fs-4"></dd>
                                <dt class="text-muted">Shift</dt>
                                <dd id="description" class=""></dd>
                                <dt class="text-muted">Schedule</dt>
                                <dd id="start" class=""></dd>


                            </dl>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0">
                        <div class="text-end">
                            <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                            <!-- <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button> -->
                            <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->

        <?php
        $schedules = $conn->query("SELECT * FROM `shifts_schedule`");
        $sched_res = [];
        foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
            $row['sdate'] = date("F d, Y", strtotime($row['preferred_date']));
        ?> <script>
                var dateString = "<?php echo $row['sdate'] ?>";
                console.log("Formatted Date: " + dateString);
            </script>
        <?php
            $sched_res[$row['id']] = $row;
        }

        ?>

        <?php
        if (isset($conn)) $conn->close();
        ?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>




<!-- /.content -->

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