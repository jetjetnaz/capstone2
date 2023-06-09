<?php

include "new_connection.php";
include "functions.php";


if (isset($_POST['recover_patient_btn'])) {
    $shift_id = $conn->escape_string($_POST['shift_id']);

    $recover_results =  retrieved_data_by_shift_id($shift_id);

    if ($recover_results->num_rows > 0) {
        $patients = $recover_results->fetch_assoc();
        
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
        $religion = $conn->escape_string($patients['religion']);
        $best_time = $conn->escape_string($patients['best_time']);
        $how_can_arc = $conn->escape_string($patients['how_can_arc']);
        $comments = $conn->escape_string($patients['comments']);
        // insert recover patients to patient table
        $res = insert_patients($shiftID, $shift, $patient_last_name, $patient_first_name, $patient_middle_name, $patient_age,  $patient_gender, $patient_date_birth, $patient_address, $patient_contact_number, $patient_barangay_city, $patient_social_media, $patient_attending_physician, $patient_name_of_companion,  $patient_years_of_dialysis_facility, $patient_frequency_of_treatment, $patient_preffered_day_treatment, $patient_hospital_affiliated, $patient_old_dialysis_facility, $patient_relationship_with_patient, $patient_source_funds, $patient_source_income, $patient_source_assistance, $religion, $best_time, $how_can_arc, $comments);

        // insert recover patients to shift table 
        insert_shift_schedule($shiftID, $patient_preffered_day_treatment, $shift);

        // delete patients from archive table
        $res = delete_patients_forever($shiftID);

        if(!$res){
            echo $conn->error;
        }else{
            echo "success";
        }
    }
}
