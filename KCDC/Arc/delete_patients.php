<?php
include "new_connection.php";
include "functions.php";


// delete from patients
if (isset($_POST['del_btn'])) {
    $shift_id = $conn->escape_string($_POST['shift_id']);

    // fetch patients info base on shift ID then insert to archive before deleting
    $fetch_result = get_patient_by_shift_id($shift_id);
    $patients = $fetch_result->fetch_assoc();

    $patient_last_name = $conn->escape_string($patients['patient_last_name']);
    $patient_first_name = $conn->escape_string($patients['patient_first_name']);
    $patient_middle_name  = $conn->escape_string($patients['patient_middle_name']);
    $patient_age = $conn->escape_string($patients['patient_age']);
    $patient_gender = $conn->escape_string($patients['patient_gender']);
    $patient_date_birth = $conn->escape_string($patients['patient_date_birth']);
    $patient_address = $conn->escape_string($patients['patient_address']);
    $patient_contact_number = $conn->escape_string($patients['patient_contact_number']);
    $patient_barangay_city = $conn->escape_string($patients['patient_barangay_city']);
    $patient_social_media = $conn->escape_string($patients['patient_social_media']);
    $patient_attending_physician = $conn->escape_string($patients['patient_attending_physician']);
    $patient_name_of_companion = $conn->escape_string($patients['patient_name_of_companion']);
    $patient_years_of_dialysis_facility = $conn->escape_string($patients['patient_years_of_dialysis_facility']);
    $patient_frequency_of_treatment = $conn->escape_string($patients['patient_frequency_of_treatment']);
    $patient_hospital_affiliated = $conn->escape_string($patients['patient_hospital_affiliated']);
    $patient_old_dialysis_facility = $conn->escape_string($patients['patient_old_dialysis_facility']);
    $patient_relationship_with_patient = $conn->escape_string($patients['patient_relationship_with_patient']);
    $patient_source_funds = $conn->escape_string($patients['patient_source_funds']);
    $patient_source_income  = $conn->escape_string($patients['patient_source_income']);
    $patient_source_assistance = $conn->escape_string($patients['patient_source_assistance']);
    $shiftID = $conn->escape_string($patients['shiftID']);
    $shift = $conn->escape_string($patients['shift']);
    $patient_preffered_day_treatment = $conn->escape_string($patients['patient_preffered_day_treatment']);

    // insert to archives
    $res = insert_archives($shiftID, $shift, $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $patient_preffered_day_treatment, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance);

    if (!$res) {
        echo $conn->error;
    } else {
        // delete patient
        $delete_patient = "DELETE FROM `tbl_patient` WHERE `shiftID` = '$shift_id'";
        $conn->query($delete_patient);

        // delete shift
        $delete_shifts = "DELETE FROM `shifts_schedule` WHERE `shift_id` = '$shift_id'";
        $conn->query($delete_shifts);

        echo "success";
    }
}

// delete patients forever from the database
if(isset($_POST['delete_patient_forever_btn'])){
    $shiftID = $conn->escape_string($_POST['shift_id']);
    $res = delete_patients_forever($shiftID);

    if(!$res){
        echo $conn->error;
    }else{
        echo "success";
    }
}
