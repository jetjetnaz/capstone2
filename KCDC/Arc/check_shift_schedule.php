<?php
session_start();
include "new_connection.php";
include "functions.php";



if (isset($_POST['preferred_date_btn'])) {
    $preferred_date = $conn->escape_string($_POST['preferred_date']);
    $res = check_schedule($preferred_date);

    if ($res->num_rows) {

        

        $shift_a = 0;
        $shift_b = 0;
        $shift_c = 0;

        while ($row = $res->fetch_assoc()) {
            if ($row['shift'] == "A") {
                $shift_a += 1;
            }

            if ($row['shift'] == "B") {
                $shift_b += 1;
            }

            if ($row['shift'] == "C") {
                $shift_c += 1;
            }
        }

        if ($shift_a <= 8) {
            $response["A"] = $shift_a;
        }

        if ($shift_b <= 8) {
            $response["B"] = $shift_b;
        }

        if ($shift_c <= 8) {
            $response["C"] = $shift_c;
        }



        echo json_encode($response);

    } else {
        $response["A"] = 0;
        $response["B"] = 0;
        $response["C"] = 0;
        echo json_encode($response);
    }
}

if (isset($_POST['resched_btn'])) {
    $preferred_date = $conn->escape_string($_POST['preferred_dates']);
    $res = check_schedule($preferred_date);

    if ($res->num_rows) {

        $response = [];

        $shift_a = 0;
        $shift_b = 0;
        $shift_c = 0;

        while ($row = $res->fetch_assoc()) {
            if ($row['shift'] == "A") {
                $shift_a += 1;
            }

            if ($row['shift'] == "B") {
                $shift_b += 1;
            }

            if ($row['shift'] == "C") {
                $shift_c += 1;
            }
        }

        if ($shift_a <= 8) {
            $response["A"] = $shift_a;
        }

        if ($shift_b <= 8) {
            $response["B"] = $shift_b;
        }

        if ($shift_c <= 8) {
            $response["C"] = $shift_c;
        }

        echo json_encode($response);
    } else {
        $response["A"] = 0;
        $response["B"] = 0;
        $response["C"] = 0;
        echo json_encode($response);
    }
}



// check doctors
/*
var data = {
          update_btn:1,
          day:day,
          doctors_name:doctors_name
        }
*/
if (isset($_POST['update_btn'])) {
    $day = $conn->escape_string($_POST['day']);
    $res = get_doctors_by_day($day);
    $doctors_name = $res->fetch_assoc();

    if ($res->num_rows > 0) {
        echo $doctors_name['doctors_name'];
        exit;
    }else{
        echo "Failed";
    }
} 



