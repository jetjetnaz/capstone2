<?php

// if (isset($_SESSION['role'])) {
//     if ($_SESSION['role'] != "admin") {
//         header("location:logout.php");
//     }
// }

include "functions.php";
include "includes/date.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'bs.css.php'; ?>

    <title>Generate Report</title>

    <style>
        /* .patient_table {
            width: 90%;
            margin: 0 auto;
        } */

        .tbl_padding th,
        .tbl_padding td {
            padding: 20px;
        }

        .patient_table th,
        .tbl_padding th,
        .tbl_padding td {
            text-align: center;
        }

        .patient_table th,
        .patient_table td {
            font-size: 7.5px;
        }

        .logo img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>

    <?php
    // PATIENTS RELATED REPORTS
    $generate = '';

    if (isset($_GET['generate'])) {
        $generate = $_GET['generate'];


        // generate patients
    ?>

        <?php

        // generate patients
        if ($generate == "shift") {
        ?>
            <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
            <div id="patient_report" class="patient_report">
                <div class="header">
                    <div class="text-center">
                        <div class="logo">
                            <img src="arc.png" alt="">
                        </div>
                        <div>
                            <h1>Week shift</h1>
                        </div>
                    </div>

                    <table class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
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
                                <?php
                                $doctors = retrieved_data("doctors");
                                while ($row = $doctors->fetch_assoc()) {

                                ?>

                                    <?php
                                    if ($row['assign_day'] == "MONDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }

                                    if ($row['assign_day'] == "TUESDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }

                                    if ($row['assign_day'] == "WEDNESDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }

                                    if ($row['assign_day'] == "THURSDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }

                                    if ($row['assign_day'] == "FRIDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }

                                    if ($row['assign_day'] == "SATURDAY") {
                                    ?>
                                        <td><span><?= $row['doctors_name'] ?></span></td>
                                    <?php
                                    }
                                    ?>
                                <?php

                                }

                                ?>
                            </tr>


                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_doctor_modal">
                        <i class='bx bxs-edit text-light'></i>
                      </button>
                      <strong>Edit button</strong> <br> -->

                        </tbody>
                    </table>
                <?php
            } else {
                ?>
                    <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                    <div id="patient_report" class="patient_report">
                        <div class="header">
                            <div class="text-center">
                                <div class="logo">
                                    <img src="arc.png" alt="">
                                </div>
                                <div>
                                    <h2>
                                        <?php
                                        if ($generate == "tbl_patient") {
                                        ?><h3>Patient's Information</h3><?php
                                                                    } else {
                                                                        ?><h3>Patient's Information (Archives)</h3><?php
                                                                                                                }
                                                                                                                    ?></h2>
                                </div>
                            </div>
                            <!--   -->
                            <table class="table patient_table">
                                <thead>
                                    <thead>
                                        <th>Patient Id</th>
                                        <th>Shift</th>
                                        <th>Preferred day of Treatment</th>
                                        <th>Patient Name</th>
                                        <th>Age/ <br> Gender/ <br> religion</th>
                                        <th>Date of Birth</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Best time to call</th>
                                        <th>Brgy/City</th>
                                        <th>Social Media</th>
                                        <th>Attending Physician</th>
                                        <th>Name of Companion</th>
                                        <th>Years of Dialysis</th>
                                        <th>Frequency of Treatment</th>
                                        <th>Hospital Affilated</th>
                                        <th>Old Dialysis Facility</th>
                                        <th>Relationship</th>
                                        <th>Source of Funds</th>
                                        <th>Source of Income</th>
                                        <th>Source of Assistance</th>
                                        <th>How can ARC help you?</th>
                                        <th>Comments and Suggestions</th>
                                    </thead>
                                </thead>
                                <tbody>
                                    <?php
                                    // fetch all patient info
                                    $res = week_day_with_all_shift($generate);

                                    while ($row = $res->fetch_assoc()) : ?>
                                        <tr>
                                            <td><?= $row['shiftID'] ?></td>
                                            <td><?= $row['shift'] ?></td>
                                            <td><?= $row['patient_preffered_day_treatment'] ?></td>
                                            <td><?= ucfirst($row['patient_last_name']) . ', ' . ucfirst($row['patient_first_name']) . ', ' . ucfirst($row['patient_middle_name']) ?></td>
                                            <td><?= $row['patient_age'] . ' / ' . $row['patient_gender'] . ' / ' . $row['religion'] ?></td>
                                            <td><?= $row['patient_date_birth'] ?></td>
                                            <td><?= $row['patient_address'] ?></td>
                                            <td><?= $row['best_time'] ?></td>
                                            <td><?= $row['patient_contact_number'] ?></td>
                                            <td><?= $row['patient_barangay_city'] ?></td>
                                            <td><?= $row['patient_social_media'] ?></td>
                                            <td><?= $row['patient_attending_physician'] ?></td>
                                            <td><?= $row['patient_name_of_companion'] ?></td>
                                            <td><?= $row['patient_years_of_dialysis_facility'] ?></td>
                                            <td><?= $row['patient_frequency_of_treatment'] ?></td>
                                            <td><?= $row['patient_hospital_affiliated'] ?></td>
                                            <td><?= $row['patient_old_dialysis_facility'] ?></td>
                                            <td><?= $row['patient_relationship_with_patient'] ?></td>
                                            <td><?= $row['patient_source_funds'] ?></td>
                                            <td><?= $row['patient_source_income'] ?></td>
                                            <td><?= $row['patient_source_assistance'] ?></td>
                                            <td><?= $row['how_can_arc'] ?></td>
                                            <td><?= $row['comments'] ?></td>
                                        </tr>

                                    <?php endwhile;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
            }
        }

        // ARCHIVES RELATED QUERY
        // generate archives with specific with all shift
        if (isset($_POST['day_with_all_shift_archives'])) {
            $day  = $_POST['day'];

                ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h1><?= ucfirst(strtolower($day)) ?> Patients with all shift (Archives)</h1>
                            </div>
                        </div>

                        <table class="table patient_table">
                            <thead>
                                <thead>
                                    <th>Patient Id</th>
                                    <th>Shift</th>
                                    <th>Preferred day of Treatment</th>
                                    <th>Patient Name</th>
                                    <th>Age/ <br> Gender/ <br> religion</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Best time to call</th>
                                    <th>Brgy/City</th>
                                    <th>Social Media</th>
                                    <th>Attending Physician</th>
                                    <th>Name of Companion</th>
                                    <th>Years of Dialysis</th>
                                    <th>Frequency of Treatment</th>
                                    <th>Hospital Affilated</th>
                                    <th>Old Dialysis Facility</th>
                                    <th>Relationship</th>
                                    <th>Source of Funds</th>
                                    <th>Source of Income</th>
                                    <th>Source of Assistance</th>
                                    <th>How can ARC help you?</th>
                                    <th>Comments and Suggestions</th>
                                </thead>
                            </thead>
                            <tbody>
                                <?php
                                // fetch all patient info
                                $res = specific_day_with_all_shift($day, "archives");

                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $row['shiftID'] ?></td>
                                        <td><?= $row['shift'] ?></td>
                                        <td><?= $row['patient_preffered_day_treatment'] ?></td>
                                        <td><?= ucfirst($row['patient_last_name']) . ', ' . ucfirst($row['patient_first_name']) . ', ' . ucfirst($row['patient_middle_name']) ?></td>
                                        <td><?= $row['patient_age'] . ' / ' . $row['patient_gender'] . ' / ' . $row['religion'] ?></td>
                                        <td><?= $row['patient_date_birth'] ?></td>
                                        <td><?= $row['patient_address'] ?></td>
                                        <td><?= $row['best_time'] ?></td>
                                        <td><?= $row['patient_contact_number'] ?></td>
                                        <td><?= $row['patient_barangay_city'] ?></td>
                                        <td><?= $row['patient_social_media'] ?></td>
                                        <td><?= $row['patient_attending_physician'] ?></td>
                                        <td><?= $row['patient_name_of_companion'] ?></td>
                                        <td><?= $row['patient_years_of_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_frequency_of_treatment'] ?></td>
                                        <td><?= $row['patient_hospital_affiliated'] ?></td>
                                        <td><?= $row['patient_old_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_relationship_with_patient'] ?></td>
                                        <td><?= $row['patient_source_funds'] ?></td>
                                        <td><?= $row['patient_source_income'] ?></td>
                                        <td><?= $row['patient_source_assistance'] ?></td>
                                        <td><?= $row['how_can_arc'] ?></td>
                                        <td><?= $row['comments'] ?></td>
                                    </tr>
                                <?php endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }

        // generate archives with specific day and shift
        if (isset($_POST['day_and_shift_archives'])) {
            $day  = $_POST['day'];
            $shift  = $_POST['shift'];

            ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h1><?= ucfirst(strtolower($day)) ?> Patients with specific shift (Archives)</h1>
                            </div>
                        </div>

                        <table class="table patient_table">
                            <thead>
                                <thead>
                                    <th>Patient Id</th>
                                    <th>Shift</th>
                                    <th>Preferred day of Treatment</th>
                                    <th>Patient Name</th>
                                    <th>Age/ <br> Gender/ <br> religion</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Best time to call</th>
                                    <th>Brgy/City</th>
                                    <th>Social Media</th>
                                    <th>Attending Physician</th>
                                    <th>Name of Companion</th>
                                    <th>Years of Dialysis</th>
                                    <th>Frequency of Treatment</th>
                                    <th>Hospital Affilated</th>
                                    <th>Old Dialysis Facility</th>
                                    <th>Relationship</th>
                                    <th>Source of Funds</th>
                                    <th>Source of Income</th>
                                    <th>Source of Assistance</th>
                                    <th>How can ARC help you?</th>
                                    <th>Comments and Suggestions</th>
                                </thead>
                            </thead>
                            <tbody>
                                <?php


                                // fetch all patient info
                                $res = specific_day_and_shift($day, $shift, "archives");

                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $row['shiftID'] ?></td>
                                        <td><?= $row['shift'] ?></td>
                                        <td><?= $row['patient_preffered_day_treatment'] ?></td>
                                        <td><?= ucfirst($row['patient_last_name']) . ', ' . ucfirst($row['patient_first_name']) . ', ' . ucfirst($row['patient_middle_name']) ?></td>
                                        <td><?= $row['patient_age'] . ' / ' . $row['patient_gender'] . ' / ' . $row['religion'] ?></td>
                                        <td><?= $row['patient_date_birth'] ?></td>
                                        <td><?= $row['patient_address'] ?></td>
                                        <td><?= $row['best_time'] ?></td>
                                        <td><?= $row['patient_contact_number'] ?></td>
                                        <td><?= $row['patient_barangay_city'] ?></td>
                                        <td><?= $row['patient_social_media'] ?></td>
                                        <td><?= $row['patient_attending_physician'] ?></td>
                                        <td><?= $row['patient_name_of_companion'] ?></td>
                                        <td><?= $row['patient_years_of_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_frequency_of_treatment'] ?></td>
                                        <td><?= $row['patient_hospital_affiliated'] ?></td>
                                        <td><?= $row['patient_old_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_relationship_with_patient'] ?></td>
                                        <td><?= $row['patient_source_funds'] ?></td>
                                        <td><?= $row['patient_source_income'] ?></td>
                                        <td><?= $row['patient_source_assistance'] ?></td>
                                        <td><?= $row['how_can_arc'] ?></td>
                                        <td><?= $row['comments'] ?></td>
                                    </tr>
                                <?php endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }


        // PATIENTS RELATED QUERY
        // generate patient with specific with all shift
        if (isset($_POST['day_with_all_shift'])) {
            $day  = $_POST['day'];

            ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h1><?= ucfirst(strtolower($day)) ?> Patients with all shift</h1>
                            </div>
                        </div>

                        <table class="table patient_table">
                            <thead>
                                <thead>
                                    <th>Patient Id</th>
                                    <th>Shift</th>
                                    <th>Preferred day of Treatment</th>
                                    <th>Patient Name</th>
                                    <th>Age/ <br> Gender/ <br> religion</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Best time to call</th>
                                    <th>Brgy/City</th>
                                    <th>Social Media</th>
                                    <th>Attending Physician</th>
                                    <th>Name of Companion</th>
                                    <th>Years of Dialysis</th>
                                    <th>Frequency of Treatment</th>
                                    <th>Hospital Affilated</th>
                                    <th>Old Dialysis Facility</th>
                                    <th>Relationship</th>
                                    <th>Source of Funds</th>
                                    <th>Source of Income</th>
                                    <th>Source of Assistance</th>
                                    <th>How can ARC help you?</th>
                                    <th>Comments and Suggestions</th>
                                </thead>
                            </thead>
                            <tbody>
                                <?php


                                // fetch all patient info
                                $res = specific_day_with_all_shift($day, "tbl_patient");

                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $row['shiftID'] ?></td>
                                        <td><?= $row['shift'] ?></td>
                                        <td><?= $row['patient_preffered_day_treatment'] ?></td>
                                        <td><?= ucfirst($row['patient_last_name']) . ', ' . ucfirst($row['patient_first_name']) . ', ' . ucfirst($row['patient_middle_name']) ?></td>
                                        <td><?= $row['patient_age'] . ' / ' . $row['patient_gender'] . ' / ' . $row['religion'] ?></td>
                                        <td><?= $row['patient_date_birth'] ?></td>
                                        <td><?= $row['patient_address'] ?></td>
                                        <td><?= $row['best_time'] ?></td>
                                        <td><?= $row['patient_contact_number'] ?></td>
                                        <td><?= $row['patient_barangay_city'] ?></td>
                                        <td><?= $row['patient_social_media'] ?></td>
                                        <td><?= $row['patient_attending_physician'] ?></td>
                                        <td><?= $row['patient_name_of_companion'] ?></td>
                                        <td><?= $row['patient_years_of_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_frequency_of_treatment'] ?></td>
                                        <td><?= $row['patient_hospital_affiliated'] ?></td>
                                        <td><?= $row['patient_old_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_relationship_with_patient'] ?></td>
                                        <td><?= $row['patient_source_funds'] ?></td>
                                        <td><?= $row['patient_source_income'] ?></td>
                                        <td><?= $row['patient_source_assistance'] ?></td>
                                        <td><?= $row['how_can_arc'] ?></td>
                                        <td><?= $row['comments'] ?></td>
                                    </tr>
                                <?php endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }


        // generate patient with specific with all shift
        if (isset($_POST['day_and_shift'])) {
            $day  = $_POST['day'];
            $shift  = $_POST['shift'];

            ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h1><?= ucfirst(strtolower($day)) ?> Patients with specific shift</h1>
                            </div>
                        </div>

                        <table class="table patient_table">
                            <thead>
                                <thead>
                                    <th>Patient Id</th>
                                    <th>Shift</th>
                                    <th>Preferred day of Treatment</th>
                                    <th>Patient Name</th>
                                    <th>Age/ <br> Gender/ <br> religion</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Best time to call</th>
                                    <th>Brgy/City</th>
                                    <th>Social Media</th>
                                    <th>Attending Physician</th>
                                    <th>Name of Companion</th>
                                    <th>Years of Dialysis</th>
                                    <th>Frequency of Treatment</th>
                                    <th>Hospital Affilated</th>
                                    <th>Old Dialysis Facility</th>
                                    <th>Relationship</th>
                                    <th>Source of Funds</th>
                                    <th>Source of Income</th>
                                    <th>Source of Assistance</th>
                                    <th>How can ARC help you?</th>
                                    <th>Comments and Suggestions</th>
                                </thead>
                            </thead>
                            <tbody>
                                <?php


                                // fetch all patient info
                                $res = specific_day_and_shift($day, $shift, "tbl_patient");

                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $row['shiftID'] ?></td>
                                        <td><?= $row['shift'] ?></td>
                                        <td><?= $row['patient_preffered_day_treatment'] ?></td>
                                        <td><?= ucfirst($row['patient_last_name']) . ', ' . ucfirst($row['patient_first_name']) . ', ' . ucfirst($row['patient_middle_name']) ?></td>
                                        <td><?= $row['patient_age'] . ' / ' . $row['patient_gender'] . ' / ' . $row['religion'] ?></td>
                                        <td><?= $row['patient_date_birth'] ?></td>
                                        <td><?= $row['patient_address'] ?></td>
                                        <td><?= $row['best_time'] ?></td>
                                        <td><?= $row['patient_contact_number'] ?></td>
                                        <td><?= $row['patient_barangay_city'] ?></td>
                                        <td><?= $row['patient_social_media'] ?></td>
                                        <td><?= $row['patient_attending_physician'] ?></td>
                                        <td><?= $row['patient_name_of_companion'] ?></td>
                                        <td><?= $row['patient_years_of_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_frequency_of_treatment'] ?></td>
                                        <td><?= $row['patient_hospital_affiliated'] ?></td>
                                        <td><?= $row['patient_old_dialysis_facility'] ?></td>
                                        <td><?= $row['patient_relationship_with_patient'] ?></td>
                                        <td><?= $row['patient_source_funds'] ?></td>
                                        <td><?= $row['patient_source_income'] ?></td>
                                        <td><?= $row['patient_source_assistance'] ?></td>
                                        <td><?= $row['how_can_arc'] ?></td>
                                        <td><?= $row['comments'] ?></td>
                                    </tr>
                                <?php endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }

        // SHIFT RELATED QUERY
        // day_with_all_shift_shift
        if (isset($_POST['day_with_all_shift_shift'])) {
            $day  = $_POST['day'];

            ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h2><?= ucfirst(strtolower($day)) ?> Patients with all shift</h2>
                                <h5>(
                                    <?php
                                    $doctors = retrieved_data("doctors");
                                    while ($row = $doctors->fetch_assoc()) {
                                        if ($row['assign_day'] == $day) {
                                            echo ucfirst($row['doctors_name']);
                                        }
                                    }
                                    ?>
                                    )
                                </h5>
                            </div>
                        </div>

                        <table class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
                            <thead>
                                <tr>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dayA = $day . "A";
                                $dayB = $day . "B";
                                $dayC = $day . "C";

                                $dayA = retrieved_data("tbl_patient");
                                $dayB = retrieved_data("tbl_patient");
                                $dayC = retrieved_data("tbl_patient");

                                ?>

                                <tr>

                                    <td>

                                        <?php
                                        while ($row = $dayA->fetch_assoc()) : ?>
                                            <?php
                                            if ($row['patient_preffered_day_treatment'] == $day && $row['shift'] == "A") {
                                                echo  ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                                            }
                                            ?>

                                        <?php endwhile;

                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        while ($row = $dayB->fetch_assoc()) : ?>
                                            <?php
                                            if ($row['patient_preffered_day_treatment'] == $day && $row['shift'] == "B") {
                                                echo  ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                                            }
                                            ?>
                                        <?php endwhile;

                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        while ($row = $dayC->fetch_assoc()) : ?>
                                            <?php
                                            if ($row['patient_preffered_day_treatment'] == $day && $row['shift'] == "C") {
                                                echo  ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                                            }
                                            ?>
                                        <?php endwhile;
                                        ?>
                                    </td>
                                </tr>

                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_doctor_modal">
                        <i class='bx bxs-edit text-light'></i>
                      </button>
                      <strong>Edit button</strong> <br> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }


        if (isset($_POST['specific_day_and_shift_shift'])) {
            $day  = $_POST['day'];
            $shift  = $_POST['shift'];

            ?>
                <a href="user-report.php" class="btn btn-primary text-decoration-none mx-4 mt-4">Back</a>
                <div id="patient_report" class="patient_report">
                    <div class="header">
                        <div class="text-center">
                            <div class="logo">
                                <img src="arc.png" alt="">
                            </div>
                            <div>
                                <h2><?= ucfirst(strtolower($day)) ?> Patients specific shift</h2>
                                <h5>(
                                    <?php
                                    $doctors = retrieved_data("doctors");
                                    while ($row = $doctors->fetch_assoc()) {
                                        if ($row['assign_day'] == $day) {
                                            echo ucfirst($row['doctors_name']);
                                        }
                                    }
                                    ?>
                                    )
                                </h5>
                            </div>
                        </div>

                        <table class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
                            <thead>
                                <tr>
                                    <th><?=$shift?></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>

                                    <td>

                                        <?php
                                         $patient = retrieved_data("tbl_patient");
                                        while ($row = $patient->fetch_assoc()) : ?>
                                            <?php
                                            if ($row['patient_preffered_day_treatment'] == $day && $row['shift'] == $shift) {
                                                echo  ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
                                            }
                                            ?>
                                        <?php endwhile;
                                        ?>
                                    </td>

                                </tr>

                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_doctor_modal">
                        <i class='bx bxs-edit text-light'></i>
                      </button>
                      <strong>Edit button</strong> <br> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }
        ?>



            <?php include "bs.js.php"; ?>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script> -->
            <script src="html2pdf/html2pdf.bundle.min.js"></script>

            <script>
                function generate_patient_info() {
                    var report = document.getElementById("patient_report");

                    var opt = {
                        margin: .5,
                        filename: "patients info.pdf",
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'Legal',
                            orientation: 'landscape',
                            compressPDF: true
                        },
                    };

                    html2pdf().set(opt).from(report).save();
                }

                // run patient info
                generate_patient_info();
            </script>
</body>

</html>