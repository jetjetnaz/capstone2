<?php
// your_php_script.php

function getLastMonday()
{
    $today = new DateTime();
    $day = $today->format('w'); // Get the current day of the week (0-6, where 0 is Sunday)
    $diff = ($day + 6) % 7; // Calculate the difference in days between today and the previous Monday
    $lastMonday = $today->modify("-$diff days"); // Subtract the difference from today's date

    return $lastMonday;
}

$lastMonday = getLastMonday();
$formattedDate = $lastMonday->format('F j, Y');

while ($row = $monA->fetch_assoc()) {
    if ($row['patient_preffered_day_treatment'] == $formattedDate && $row['shift'] == "A") {
        echo ucfirst($row['patient_last_name']) . " " . ucfirst($row['patient_first_name']) . " " . ucfirst($row['patient_middle_name']) . "<br><br>";
    }
}
?>
