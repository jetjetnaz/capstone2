<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

class capstone
{

    function filterStudents($json)
    {

        include 'connections.php';

        $decoded_json = json_decode($json, true);

        $sql =
            'SELECT  * FROM tbl_patient  WHERE patient_preffered_day_treatment   = :courseId  order by shift';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':courseId', $decoded_json['courseId']);
        $stmt->execute();
        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
}

$job = $_POST['job'];
$json = isset($_POST['json']) ? $_POST['json'] : "";

$capstone = new capstone();
switch ($job) {

    case 'filterStudents':
        echo $capstone->filterStudents($json);
        break;
}
