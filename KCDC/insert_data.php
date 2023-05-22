<?php
session_start();
include "new_connection.php";
include "functions.php";
$shift_id = '';



if (isset($_POST['preffered_date_insert_btn'])) {
    $preferred_date = $_POST['preferred_date'];
    $shift = $_POST['shift'];

    for ($i = 1; $i < 11; $i++) {
        $shift_id .= rand(1, 9);
    }

    $res = temp_shift_sched_holder($shift_id, $shift, $preferred_date);
    
    if (!$res) {
        echo "Failed to schedule patient";
    } else {
        echo 'Successfully scheduled patient';
    }
}


/*
var data = {
            preferred_date: preferred_date,
            resched_btn: 1,
            shift: shift,
            shift_id: shift_id,
          };
*/

if (isset($_POST['resched_btn'])) {
    $preferred_date = $_POST['preferred_date'];
    $shift = $_POST['shift'];
    $shift_id = $_POST['shift_id'];

    // update shift and patient info
    $resched_patient_shift = resched_patient_shift($shift_id, $shift, $preferred_date);
    $resched_shift = resched_shift($shift_id, $shift, $preferred_date);

    
    if($resched_shift == TRUE && $resched_patient_shift == TRUE){
        echo "success";
    }else{
        echo "Failed to reschedule!. Please check your query";
    }
}
