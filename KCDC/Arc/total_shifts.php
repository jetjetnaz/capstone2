<?php


include "functions.php";
include "new_connection.php";

if(isset($_POST['total_shift_btn'])){
    $num_of_shift = $_POST['shift_limit'];
    
    if($num_of_shift == ""){
        echo "Empty Fields";
    }else{
        $sql = "UPDATE  `total_shift` SET `number_of_shift` = '$num_of_shift'";
        $res = $conn->query($sql);
        
        if(!$res){
            echo "Failed to update shift limit";
        }else{
            echo "success";
        }
    }

}


if(isset($_POST['current_shift_btn'])){
    $res = total_shift();
    $res = $res->fetch_assoc();

    echo $res['number_of_shift'];
}

?>