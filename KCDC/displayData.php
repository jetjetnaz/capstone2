<?php
include "new_connection.php";
include "functions.php";
// START OF PATIENT CRUD INFO
// get patients data
if (isset($_POST['get_data_btn'])) {
    $res = retrieved_data("tbl_patient");

    $table = '
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
    ';

    while ($row = $res->fetch_assoc()) {
        $table .= '
        <tr>
            <td>' . $row['shiftID'] . '</td>
            <td>' . $row['shift'] . '</td>
            <td>' . $row['patient_last_name'] . '</td>
            <td>' . $row['patient_first_name'] . '</td>
            <td>' . $row['patient_middle_name'] . '</td>
            <td>' . $row['patient_address'] . '</td>
            <td>' . $row['patient_date_birth'] . '</td>
            <td>' . $row['patient_age'] . '</td>
            <td>' . $row['patient_gender'] . '</td>
            <td>' . $row['patient_contact_number'] . '</td>
            <td>' . $row['patient_attending_physician'] . '</td>

            <td>
            <!-- view -->
            <button class="btn">
                <i class="bx bxs-user-badge text-success"></i>
            </button>

            <!-- edit -->
            <button class="btn">
                <i class="bx bxs-edit text-primary"></i>
            </button>

            <!-- delete -->
            <button class="btn">
                <i class="bx bxs-trash text-danger"></i>
            </button>
            </td>
        </tr>;
        ';
        
    }
    echo $table .= "</table>";
}


// VIEW PATIENT
if(isset($_POST['view_btn'])){
    $shift_id = $conn->escape_string($_POST['shift_id']);

    $response = array();

    // get patient info base on shift_id
    $res = get_patient_by_shift_id($shift_id);

    while($row = $res->fetch_assoc()){
        $response = $row;
    }
    echo json_encode($response);
}

// RETIREIVED
// retrieve_view_btn
if(isset($_POST['retrieve_view_btn'])){
    $shiftID = $conn->escape_string($_POST['shift_id']);
    $response = array();

    // get patient info base on shift_id
    $res = retrieved_data_by_shift_id($shiftID);

    while($row = $res->fetch_assoc()){
        $response = $row;
    }
    echo json_encode($response);
}


// END OF PATIENT CRUD INFO


// GET ALL DOCTORS
if(isset($_POST['get_doctors_btn'])){
    $res = retrieved_data("doctors");
    
    $response = array();

    while($row = $res->fetch_assoc()){
        $response[$row['assign_day']] = $row['doctors_name'];
    }
    
    echo json_encode($response);
}

