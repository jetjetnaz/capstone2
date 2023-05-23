<?php
include "new_connection.php";
include "includes/date.php";

// // DATES
// function todays_patient()
// {
//     global $conn, $year, $month, $date;
//     $sql = "SELECT count(*) as `today` FROM `tbl_patient` WHERE `patient_preffered_day_treatment` = '$date';";
//     return $conn->query($sql);
// }


// /*check_schedule
// $queryWeek = "SELECT count(*) as `week` from `patient_visits` where YEARWEEK(`visit_date`) = YEARWEEK('$date');";
// $queryYear = "SELECT count(*) as `year` from `patient_visits` where YEAR(`visit_date`) = YEAR('$date');";
// $queryMonth = "SELECT count(*) as `month` from `patient_visits` where YEAR(`visit_date`) = $year and MONTH(`visit_date`) = $month;";
// $sql = "SELECT count(*) as `month` FROM `tbl_patient` WHERE YEAR(`patient_preffered_day_treatment`) = '$year' AND  MONTH('patient_preffered_day_treatment') = $month;";
// select * from users where MONTH(order_date) = MONTH(now()) and YEAR(order_date) = YEAR(now());
// */
// function current_week_patient()
// {
//     global $conn, $year, $month, $date;
//     $sql = "SELECT count(*) as `week` FROM `tbl_patient` WHERE YEARWEEK(`patient_preffered_day_treatment`) = YEARWEEK('$date');";
//     return $conn->query($sql);
// }

// function current_month_patient()
// {
//     global $conn, $year, $month, $date;
//     $sql = "SELECT count(*) as `month` FROM `tbl_patient` WHERE MONTH(`patient_preffered_day_treatment`) = MONTH(now()) AND YEAR(`patient_preffered_day_treatment`) = YEAR(now());";
//     return $conn->query($sql);
// }

// function current_year_patient()
// {
//     global $conn, $year, $month, $date;
//     $sql = "SELECT count(*) as `year` FROM `tbl_patient` WHERE YEAR(`patient_preffered_day_treatment`) = YEAR('$date');";
//     return $conn->query($sql);
// }

function total_shift()
{
    global $conn;
    $sql = "SELECT * FROM `total_shift`";
    return $conn->query($sql);
}
//day
function get_current_day()
{
    global $conn;
    $sql = "SELECT DAYNAME(CURRENT_DATE()) as 'day' ;";
    return $conn->query($sql);
}
//month
function get_current_month()
{
    global $conn;
    $sql = "SELECT MONTHNAME(CURRENT_DATE())  as 'month' ;";
    return $conn->query($sql);
}
function get_current_year()
{
    global $conn;
    $sql = "SELECT MONTHNAME(CURRENT_DATE())  as 'month' ;";
    return $conn->query($sql);
}
//day
function get_all_patients($preferred_date)
{
    global $conn;
    $today = date("Y-m-d");
    $sql = "SELECT * FROM `shifts_schedule` WHERE `preferred_date` = '$today' ";
    return $conn->query($sql);
}

//month
function get_all_patientss($preferred_dates)
{
    global $conn;
    // $today = date("Y-m-d");
    $sql = "SELECT * FROM shifts_schedule WHERE MONTH(preferred_date) = MONTH(CURRENT_DATE) AND YEAR(preferred_date) = YEAR(CURDATE())";
    return $conn->query($sql);
}
//month
function get_all_patientsss($preferred_dates)
{
    global $conn;
    // $today = date("Y-m-d");
    $sql = "SELECT * FROM shifts_schedule WHERE YEAR(preferred_date) = YEAR(CURRENT_DATE)";
    return $conn->query($sql);
}
// RETRIEVED DATA
function get_doctors_by_day($day)
{
    global $conn;
    $sql = "SELECT `doctors_name` FROM `doctors` WHERE `assign_day` = '$day'";
    return $conn->query($sql);
}

function check_schedule($preferred_date)
{
    global $conn;

    $sql = "SELECT * FROM `shifts_schedule` WHERE `preferred_date` = '$preferred_date'";
    $res = $conn->query($sql);
    return $res;
}

function retrieved_data($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table`";
    return $conn->query($sql);
}

// get specific data
function week_day_with_all_shift($table)
{
    global $conn;
    $sql = "SELECT
    *
FROM `$table` ORDER BY CASE
         WHEN `patient_preffered_day_treatment` = 'Monday' THEN 1
         WHEN `patient_preffered_day_treatment` = 'Tuesday' THEN 2
         WHEN `patient_preffered_day_treatment` = 'Wednesday' THEN 3
         WHEN `patient_preffered_day_treatment` = 'Thursday' THEN 4
         WHEN `patient_preffered_day_treatment` = 'Friday' THEN 5
         WHEN `patient_preffered_day_treatment` = 'Saturday' THEN 6
    END ASC";
    return $conn->query($sql);
}

function specific_day_with_all_shift($day, $table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `patient_preffered_day_treatment` = '$day'";
    return $conn->query($sql);
}

function specific_day_and_shift($day, $shift, $table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `patient_preffered_day_treatment` = '$day' AND `shift` = '$shift'";
    return $conn->query($sql);
}



function retrieved_data_by_shift_id($shiftID)
{
    global $conn;
    $sql = "SELECT * FROM `archives` WHERE `shiftID` = '$shiftID'";
    return $conn->query($sql);
}

function get_patient_by_shift_id($shift_id)
{
    global $conn;
    $sql = "SELECT * FROM `tbl_patient` WHERE `shiftID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $shift_id);
    $stmt->execute();
    return $stmt->get_result();
}

function select_todays_shift($shift, $preferred_date)
{
    global $conn;
    $sql = "SELECT * FROM `tbl_patient` WHERE `shift` = ? AND `patient_preffered_day_treatment` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $shift, $preferred_date);
    $stmt->execute();
    return $stmt->get_result();
}

// INSERT DATA
function insert_shift_schedule($shift_id, $preferred_date, $shift, $patient_last_name)
{
    global $conn;
    $sql = "INSERT INTO `shifts_schedule` (`shift_id`, `preferred_date`, `shift`,`start_datetime`,`title`,`description`) VALUES(?, ?, ?, ?, ? ,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $shift_id, $preferred_date, $shift, $preferred_date, $patient_last_name, $shift_id);
    return $stmt->execute();
}

function insert_archives($shiftID, $shift, $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $preferred_date, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance, $religion, $best_time, $how_can_arc, $comments)
{
    global $conn;

    $sql = "INSERT INTO `archives` (`shiftID`,`shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`) VALUES ('$shiftID', '$shift', '$patient_last_name','$patient_first_name', '$patient_middle_name', '$patient_age', '$patient_gender', '$patient_date_birth','$patient_address', '$patient_contact_number', '$patient_barangay_city', '$patient_social_media', '$patient_attending_physician', '$patient_name_of_companion', '$patient_years_of_dialysis_facility', '$patient_frequency_of_treatment','$preferred_date','$patient_hospital_affiliated','$patient_old_dialysis_facility','$patient_relationship_with_patient','$patient_source_funds', '$patient_source_income', '$patient_source_assistance', '$religion', '$best_time', '$how_can_arc', '$comments')";

    $res = $conn->query($sql);
    return $res;
}


function insert_patients($shiftID, $shift, $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $preferred_date, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance, $religion, $best_time, $how_can_arc, $comments)
{
    global $conn;
    $sql = "INSERT INTO `tbl_patient` (`shiftID`,`shift`, `patient_last_name`, `patient_first_name`, `patient_middle_name`, `patient_age`, `patient_gender`, `patient_date_birth`, `patient_address`, `patient_contact_number`, `patient_barangay_city`, `patient_social_media`, `patient_attending_physician`, `patient_name_of_companion`, `patient_years_of_dialysis_facility`, `patient_frequency_of_treatment`, `patient_preffered_day_treatment`, `patient_hospital_affiliated`, `patient_old_dialysis_facility`, `patient_relationship_with_patient`, `patient_source_funds`, `patient_source_income`, `patient_source_assistance`, `religion`, `best_time`, `how_can_arc`, `comments`) VALUES ('$shiftID', '$shift', '$patient_last_name','$patient_first_name', '$patient_middle_name', '$patient_age', '$patient_gender', '$patient_date_birth','$patient_address', '$patient_contact_number', '$patient_barangay_city', '$patient_social_media', '$patient_attending_physician', '$patient_name_of_companion', '$patient_years_of_dialysis_facility', '$patient_frequency_of_treatment','$preferred_date','$patient_hospital_affiliated','$patient_old_dialysis_facility','$patient_relationship_with_patient','$patient_source_funds', '$patient_source_income', '$patient_source_assistance', '$religion', '$best_time', '$how_can_arc', '$comments')";

    $res = $conn->query($sql);
    return $res;
}


function temp_shift_sched_holder($shift_id, $shift, $preferred_date)
{
    global $conn;
    $sql = "INSERT INTO `temp_shift_sched_holder` (`shift_id`,`shift`, `preferred_date`) VALUES (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $shift_id, $shift, $preferred_date);
    return $stmt->execute();
}

// DELETED PATIENTS
function delete_patients_forever($shiftID)
{
    global $conn;
    $sql = "DELETE FROM `archives` WHERE `shiftID` = '$shiftID'";
    return $conn->query($sql);
}

// DELETE TEMP VALUES
function delete_temp_data()
{
    global $conn;
    $sql = "DELETE FROM `temp_shift_sched_holder`";
    $res = $conn->query($sql);
}

// UPDATE PATIENTS INFO
function update_patients_info($shiftID, $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance)
{
    global $conn;

    $sql = "UPDATE `tbl_patient` SET `patient_last_name` = ?, `patient_first_name` = ?, `patient_middle_name` = ?, `patient_age` = ?, `patient_gender` = ?, `patient_date_birth` = ?, `patient_address` = ?, `patient_contact_number` = ?, `patient_barangay_city` = ?,  `patient_social_media` = ?, `patient_attending_physician` = ?, `patient_name_of_companion` = ?, `patient_years_of_dialysis_facility` = ?, `patient_frequency_of_treatment` = ?, `patient_hospital_affiliated` = ?, `patient_old_dialysis_facility` = ?, `patient_relationship_with_patient` = ?, `patient_source_funds` = ?, `patient_source_income` = ?, `patient_source_assistance` = ? WHERE `shiftID` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssss", $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age, $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion, $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance, $shiftID);
    return $stmt->execute();
}

// update patientss shift within the day
function update_patient_list_shift($shiftID, $new_shift)
{
    global $conn;
    $sql = "UPDATE `tbl_patient` SET `shift`=? WHERE `shiftID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_shift, $shiftID);
    return $stmt->execute();
}

function update_patient_shift($shiftID, $new_shift)
{
    global $conn;
    $sql = "UPDATE `shifts_schedule` SET `shift`=? WHERE `shift_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $new_shift, $shiftID);
    return $stmt->execute();
}

function resched_patient_shift($shiftID, $shift, $preferred_date)
{
    global $conn;
    $sql = "UPDATE `tbl_patient` SET `shift`= ?, `patient_preffered_day_treatment` = ?  WHERE `shiftID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $shift, $preferred_date, $shiftID);
    return $stmt->execute();
}


function resched_shift($shiftID, $shift, $preferred_date)
{
    global $conn;
    $sql = "UPDATE `shifts_schedule` SET `shift`= ?, `preferred_date` = ? , `start_datetime` = ? WHERE `shift_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $shift, $preferred_date, $preferred_date, $shiftID);
    return $stmt->execute();
}

// UPDATE DOC
function update_doctor($assign_day, $doctors_name)
{
    global $conn;
    $sql = "UPDATE `doctors` SET `doctors_name`='$doctors_name' WHERE `assign_day`='$assign_day'";
    return $conn->query($sql);
}
