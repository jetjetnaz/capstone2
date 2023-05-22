<?php 
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `shifts_schedule` (`title`,`description`,`preferred_date` , `start_datetime`) VALUES ('$title','$description','$start_datetime','$start_datetime')";
}else{
    $sql = "UPDATE `shifts_schedule` set `title` = '{$title}', `description` = '{$description}', `preferred_date` = '{$start_datetime}', `start_datetime` = '{$start_datetime}' where `id` = '{$id}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./userdashboard.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
