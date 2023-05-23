<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

class capstone
{

    function filterStudents($json)
    {

        include 'connections.php';

        $decoded_json = json_decode($json, true);
        // $stmt->bindParam(':courseId', $decoded_json['courseId']);
        if ($decoded_json['courseId'] == 1) {
            $sql =
                'SELECT * FROM shifts_schedule a INNER JOIN tbl_patient b ON a.shift_id = b.shiftID  WHERE preferred_date = DATE(CURRENT_DATE)';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        } else if ($decoded_json['courseId'] == 2) {
            $sql =
                'SELECT * FROM shifts_schedule a INNER JOIN tbl_patient b ON a.shift_id = b.shiftID WHERE MONTH(a.preferred_date) = MONTH(CURDATE()) AND YEAR(a.preferred_date) = YEAR(CURDATE())';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        } else if ($decoded_json['courseId'] == 3) {
            $sql =
                'SELECT * FROM shifts_schedule a INNER JOIN tbl_patient b ON a.shift_id = b.shiftID WHERE YEAR(a.preferred_date) = YEAR(CURRENT_TIMESTAMP)';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        }
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
