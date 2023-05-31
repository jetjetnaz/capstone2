<?php

session_start();

include './config/connection.php';
include './common_service/common_functions.php';
include 'new_connection.php';
include "functions.php";

// session_start();

$message = '';
$flag = '';
function getSemesterSummer()
{
    include "./api/connections.php";
    $sql = "SELECT * FROM tbldates ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'bs.css.php'; ?>
<?php include './config/data_tables_css.php'; ?>

<head>
    <?php include './userconfig/site_css_links.php' ?>
    <?php include 'includes/others_imports.php' ?>
    <?php include './config/data_tables_css.php'; ?>
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <?php include "bs.css.php"; ?>
    <title>Add Patient Info - KCADC</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</head>

<body class="hold-transition sidebar-mini white-mode layout-fixed layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <?php include './userconfig/userheader.php';
        include './userconfig/usersidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Patient List</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- schedule modal -->


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-outline card-primary rounded-0 shadow">
                    <div class="card-header">
                        <!-- <h3 class="card-title">Add Information Sheet</h3> -->
                        <br><br>

                        <input type="date" id="myDate" name="myDate" class="form-control" style="width:15%">

                        </select>

                        <script>
                            const days = document.getElementById("myDate");
                            console.log(days);
                            days.addEventListener("change", () => {
                                console.log(days.value);
                                getData(days.value);
                            });

                            const getData = (e) => {
                                console.log(e);
                                const formData = new FormData();
                                formData.append("job", "filterStudents");
                                formData.append("json", JSON.stringify({
                                    courseId: e
                                }));
                                axios({
                                    url: "./api/course.php",
                                    method: "post",
                                    data: formData,
                                }).then((response) => {
                                    if (response.data != "0") {


                                        const students = response.data;
                                        console.log(students);

                                        var myHtml = `
      
     <table id='datatablesSimple' class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info">
     <thead >
          <tr>
          <th style="text-align: left">Name</th>
          <th style="text-align: center">Shift</th>
          <th style="text-align: center">Patient Name of Companion</th>  
          <th style="text-align: center">Attending Physician</th>  
          </tr>
        </thead>
        </center>
      `;
                                        students.forEach((student) => {
                                            myHtml += `
          <tr >
            <td  style="text-align: left">${student.patient_last_name},${student.patient_first_name}${student.patient_middle_name}</td>
            <td style="text-align: center">${student.shift}</td>
            <td style="text-align: center">${student.patient_name_of_companion}</td>     
            <td style="text-align: center">${student.patient_attending_physician}</td>  
          </tr>
        `;
                                        });

                                        const datatablesSimple = document.getElementById("datatablesSimples");
                                        datatablesSimple.innerHTML = myHtml;
                                    } else {
                                        alert("There are no students found!");
                                    }
                                });
                            };
                        </script>
                        <div class="row table-responsive">
                            <table id="datatablesSimples"class="table table-hover table-striped-columns table-border dataTable  dtr-inline tbl_padding" role="grid" aria-describedby="all_patients_info"></table>
                        </div>
                    </div>
                </div>
        </div>

</html>