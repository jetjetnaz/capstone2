<?php
include "new_connection.php";
include "includes/date.php";
include "functions.php";


// UPDATE PATIENTS INFORMATION
if (isset($_POST['update_patients_btn'])) {

    $update_shift_id = $conn->escape_string($_POST['update_shift_id']);
    $update_last_name = $conn->escape_string($_POST['update_last_name']);
    $update_first_name = $conn->escape_string($_POST['update_first_name']);
    $update_middle_name = $conn->escape_string($_POST['update_middle_name']);
    $update_date_of_birth = $conn->escape_string($_POST['update_date_of_birth']);
    $update_age = $conn->escape_string($_POST['update_age']);
    $update_gender = $conn->escape_string($_POST['update_gender']);
    $update_address = $conn->escape_string($_POST['update_address']);
    $update_contact_number = $conn->escape_string($_POST['update_contact_number']);
    $update_brgy_city = $conn->escape_string($_POST['update_brgy_city']);
    $update_socmed = $conn->escape_string($_POST['update_socmed']);
    $update_attending_physician = $conn->escape_string($_POST['update_attending_physician']);
    $update_companion = $conn->escape_string($_POST['update_companion']);
    $update_years_of_dialysis = $conn->escape_string($_POST['update_years_of_dialysis']);
    $update_frequency = $conn->escape_string($_POST['update_frequency']);
    $update_hospital_affilated = $conn->escape_string($_POST['update_hospital_affilated']);
    $update_old_dialysis_facility = $conn->escape_string($_POST['update_old_dialysis_facility']);
    $update_relationship = $conn->escape_string($_POST['update_relationship']);
    $update_source_funds = $conn->escape_string($_POST['update_funds']);
    $update_source_income = $conn->escape_string($_POST['update_income']);
    $update_source_assistance = $conn->escape_string($_POST['update_assistance']);

    // check for empty fields
    $error_checker = array();

    $fields = [$update_last_name, $update_first_name, $update_middle_name, $update_age,  $update_gender, $update_date_of_birth, $update_address, $update_contact_number, $update_brgy_city, $update_socmed, $update_attending_physician, $update_companion,  $update_years_of_dialysis, $update_frequency, $update_hospital_affilated, $update_old_dialysis_facility, $update_relationship, $update_source_funds, $update_source_income, $update_source_assistance];

    foreach ($fields as $key => $value) {
        if ($value == "") {
            $error_checker['empty_field_error'] = "error";
        }
    }

    // check if theres any error
    if (count($error_checker) > 0) {
        echo "All fields is mandatory";
    } else {
        $update_results =  update_patients_info($update_shift_id, $update_last_name, $update_first_name, $update_middle_name, $update_age,  $update_gender, $update_date_of_birth, $update_address, $update_contact_number, $update_brgy_city, $update_socmed, $update_attending_physician, $update_companion,  $update_years_of_dialysis, $update_frequency, $update_hospital_affilated, $update_old_dialysis_facility, $update_relationship, $update_source_funds, $update_source_income, $update_source_assistance);

        if (!$update_results) {
            echo "failed to update patient information";
        } else {
            echo "success";
        }
    }
}

// UPDATE PATIENTS SHIFT

if (isset($_POST['check_shift_btn'])) {
    $shift_id = $conn->escape_string($_POST['shift_id']);
    $new_shift = $conn->escape_string($_POST['new_shift']);

    $res = get_patient_by_shift_id($shift_id);
    $update_result = $res->fetch_assoc();

    $count_shift = 0;

    if ($new_shift != $update_result['shift']) {
        $shift_today = select_todays_shift($new_shift, $date);

        while ($row = $shift_today->fetch_assoc()) {
            $count_shift += 1;
        }

        echo $count_shift;
    } else {
        echo "success";
    }
}

// change shift
if (isset($_POST['change_shift_btn'])) {
    $shift_id = $conn->escape_string($_POST['shift_id']);
    $new_shift = $conn->escape_string($_POST['new_shift']);

    $res = get_patient_by_shift_id($shift_id);
    $update_result = $res->fetch_assoc();

    $count_shift = 0;

    if ($new_shift != $update_result['shift']) {
        // update shift
        update_patient_list_shift($shift_id, $new_shift);
        update_patient_shift($shift_id, $new_shift);
        echo "success";
    } else {
        echo "No Changes Has been made";
    }
}


//UPDATE DOC

if(isset($_POST['update_btn_doc'])){
    $day = $conn->escape_string($_POST['day']);
    $doctors_name = $conn->escape_string($_POST['doctors_name']);
    
    $res = update_doctor($day, $doctors_name);

    if(!$res){
        echo "Failed";
    }

}
